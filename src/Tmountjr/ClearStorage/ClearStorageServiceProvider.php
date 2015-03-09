<?php namespace Tmountjr\ClearStorage;

use Illuminate\Support\ServiceProvider;

class ClearStorageServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['storage:clear-views'] = $this->app->share(function($app)
		{
			return new CLIStorageClearViews;
		});

		$this->commands('storage:clear-views');
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
