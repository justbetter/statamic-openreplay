<?php

namespace JustBetter\StatamicOpenreplay;

use Illuminate\Support\Facades\View;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    public function boot()
    {
        parent::boot();

        $this->bootConfig()
            ->bootViews()
            ->bootStack();
    }

    public function bootConfig() : self
    {
        $this->mergeConfigFrom(__DIR__.'/../config/justbetter-openreplay.php', 'justbetter-openreplay');

        return $this;
    }

    public function bootPublishables() : self
    {

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'justbetter-openreplay');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/justbetter-openreplay'),
        ], 'views');

        $this->publishes([
            __DIR__.'/../config/justbetter-openreplay.php' => config_path('justbetter-openreplay.php'),
        ], 'config');

        return $this;
    }

    public function bootViews() : self
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'justbetter-openreplay');

        return $this;
    }

    public function bootStack() : static
    {
        View::startPush('head', view('justbetter-openreplay::stack.head'));

        return $this;
    }
}
