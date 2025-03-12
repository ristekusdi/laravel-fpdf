<?php 

namespace Anouar\Fpdf;

use Illuminate\Support\ServiceProvider;

class FpdfServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('fpdf', function($app) {
            return new Fpdf;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('fpdf');
	}

}
