<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Collection;

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
          'printscan_hero_tabs' => $this->getHeroTabs(),
          'printscan_services_tabs' => $this->getServicesTabs(),
        ];
    }

    /**
     * Get the Site Logo from Carbon Field Options
     *
     * @return array
     */
    public function getPrintScanLogo() : string
    {
      return Cache::remember('printscan-logo', now()->endOfDay(), function () {
        return carbon_get_theme_option('site_logo');
      });
    }

    /**
     * Get the Homepage Hero Tabs from Carbon Field Options
     *
     * @return array
     */
    public function getHeroTabs() : array
    {
      // return Cache::remember('printscan-hero_tabs', now()->endOfDay(), function () {
        return collect(carbon_get_theme_option( 'hero_tabs' ))
          ->all();
      // });
    }

    /**
     * Get the Homepage Services Tabs from Carbon Field Options
     *
     * @return array
     */
    public function getServicesTabs() : array
    {
      // return Cache::remember('printscan-services_tabs', now()->endOfDay(), function () {
        return collect(carbon_get_theme_option( 'home_services' ))
          ->all();
      // });
    }
}
