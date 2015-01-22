<?php namespace Bisnow\Html2text;

use Illuminate\Support\ServiceProvider;

class Html2textServiceProvider extends ServiceProvider {

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
		$this->package('bisnow/html2text');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['html2text'] = $this->app->share(function($app) {
      return new \Bisnow\Html2text\Html2Text;
    });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
    return array('html2text');
	}

}