<?php namespace Modules\Music\ServiceProviders;

use Modules\Music\Services\MusicService;
use Illuminate\Support\ServiceProvider;
use Modules\Music\Contracts\MusicRepository;
use Modules\Music\Repository\MusicDatabaseRepository;

class MusicServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->registerConfig();
        $this->registerRepository();
        $this->registerService();
	}

    private function registerService()
    {
        $this->app->singleton('music', MusicService::class);
    }

    private function registerRepository()
    {
        $this->app->when(MusicService::class)
                  ->needs(MusicRepository::class)
                  ->give(fn () => new MusicDatabaseRepository('some database instance'));
    }

    private  function registerConfig()
    {
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'music');
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['music', MusicRepository::class];
	}

}
