<?php namespace Tzookb\TBMsg;

use Illuminate\Support\ServiceProvider;


class TBMsgServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('tzookb/tbmsg');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        // Register 'tbmsg'
        $this->app['tbmsg'] = $this->app->share(function($app) {
            return new TBMsg();
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}