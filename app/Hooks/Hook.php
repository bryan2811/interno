<?php

namespace App\Hooks;

abstract class Hook
{
    /**
     * Type
     * 
     * Options: action|filter
     */    
    protected $actions = [];

    /**
     * Type
     * 
     * Options: action|filter
     */
    protected $type = 'action';

    /**
     * Argument Count
     * 
     * WP Default = 1
     */
    protected $arguments = 1;

    /**
     * Priority
     * 
     * WP Default = 10
     */
    protected $priority = 10;

    public function __invoke()
    {}
}
