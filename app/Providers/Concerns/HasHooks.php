<?php

namespace App\Providers\Concerns;

use App\Hooks\Hook;
use ReflectionClass;
use Illuminate\Support\Str;
use Symfony\Component\Finder\Finder;
use Illuminate\Support\Facades\Cache;

trait HasHooks
{
    /**
     * Register Cached Hooks
     */
    public function registerHooks()
    {
        $hooks = collect($this->registerHooksCache())
            ->each(function ($hook) {
                list($class, $function, $hooks, $priority, $arguments) = $hook;
                foreach((array) $hooks as $hook) {
                    call_user_func($function, $hook, new $class, $priority, $arguments);
                }
            });
    }

    /**
     * Create Hook Cache
     */
    protected function registerHooksCache()
    {
        return Cache::remember('sage.hooks', 600, function () {
            if (! is_dir($path = $this->app->path('Hooks'))) {
                return;
            }

            $namespace = $this->app->getNamespace();

            return collect((new Finder())->in($path)->files())
                ->map(function ($hook) use ($namespace) {
                    return $namespace . str_replace(
                        ['/', '.php'],
                        ['\\', ''],
                        Str::after($hook->getPathname(), $this->app->path() . DIRECTORY_SEPARATOR)
                    );
                })
                ->filter(function ($hook) {
                    return is_subclass_of($hook, Hook::class) &&
                        ! (new ReflectionClass($hook))->isAbstract();
                })
                ->map(function ($hook) {
                    $properties = (new ReflectionClass($hook))->getDefaultProperties();
                    return [
                        $hook,
                        "add_{$properties['type']}",
                        $properties['actions'],
                        $properties['priority'],
                        $properties['arguments'],
                    ];
                });
        });
    }  
}
