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
