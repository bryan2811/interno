<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Illuminate\Support\Facades\Cache;

class PrintScanInformation extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
      '*'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
          'printscan_logo' => $this->getPrintScanLogo(),
        ];
    }

    /**
     * Get the models from manufacturer.
     *
     * @return array
     */
    public function getPrintScanLogo() : string
    {
      return Cache::remember('printscan-logo', now()->endOfDay(), function () {
        return carbon_get_theme_option('site_logo');
      });
    }
}
