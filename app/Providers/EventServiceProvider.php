<?php

namespace OWLSMATE\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'OWLSMATE\Events\Event' => [
            'OWLSMATE\Listeners\EventListener',
        ],
        'Illuminate\Auth\Events\Verified' => [
            'OWLSMATE\Listeners\LogVerifiedUser',
        ],
      
            
        
    ];
    

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
