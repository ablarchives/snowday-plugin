<?php namespace Albrightlabs\Snowday;

use Backend;
use System\Classes\PluginBase;

/**
 * snowday Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Snowday',
            'description' => 'Adds a snowday banner to the top of the website.',
            'author'      => 'Albright Labs',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Register settings
     *
     * @return array
     */
    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Snowday Banner',
                'description' => 'Show, hide, and manage the snowday banner.',
                'category'    => 'system::lang.system.categories.cms',
                'icon'        => 'icon-comment',
                'class'       => 'Albrightlabs\Snowday\Models\Settings',
                'order'       => 500,
                'keywords'    => 'snowday banner',
                'permissions' => ['albrightlabs.snowday.access_settings']
            ]
        ];
    }

    /**
     * Register components
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'AlbrightLabs\Snowday\Components\Snowday' => 'snowday'
        ];
    }
}
