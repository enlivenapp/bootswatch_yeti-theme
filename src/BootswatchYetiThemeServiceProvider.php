<?php namespace Enlivenapp\BootswatchYetiTheme;
use Illuminate\Support\ServiceProvider;
/**
 * Class BootswatchYetiThemeServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\ExampleTheme
 */
class BootswatchYetiThemeServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register('Enlivenapp\BootswatchYetiTheme\BootswatchYetiThemeRouteProvider');
    }
}