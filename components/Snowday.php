<?php namespace Albrightlabs\Snowday\Components;

use AlbrightLabs\Snowday\Models\Settings;
use Cms\Classes\ComponentBase;

class Snowday extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'snowday Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function message()
    {
        if($settings = Settings::get('show_showday')){
            return Settings::get('snowday_message');
        }
    }
}
