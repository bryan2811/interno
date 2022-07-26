<?php

namespace App\Hooks;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class DeleteCaches extends Hook
{
    protected $actions = [
        // 'after_setup_theme', // test hook
        'upgrader_process_complete'
    ];

    protected $files = [
        'themes/sage-boilerplate/storage/framework/cache/packages.php',
        'themes/sage-boilerplate/storage/framework/cache/services.php'
    ];

    public function __invoke()
    {
        try {
            Storage::disk('local')->delete($this->files);
            Cache::flush();
        } catch (Exception $_) {}
    }
}
