<?php

namespace App\Providers;

use \Uuid;
use App\Models\Monitor;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Set UUID for Monitors on create
        Monitor::creating(function (Monitor $monitor) {
            $monitor->uuid = Uuid::generate(4);
        });

        \Blade::directive('datediff', function ($carbon) {
            return "<?php echo '<span title=\"'
                .with{$carbon}->format('Y-m-d H:i:s').'\">'.with{$carbon}->diffForHumans().'</span>'; ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
