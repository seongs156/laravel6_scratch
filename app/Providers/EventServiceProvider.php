<?php
declare(strict_types=1);

namespace App\Providers;

use App\Events\PublishProcessor;
use App\Listeners\MessageSubscriber;
use http\Message;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        PublishProcessor::class => [
            MessageSubscriber::class,
        ],
        Registered::class => [
            SendEmailVerificationNotification::class,
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
//        // Facade를 이용한 예
//        Event::listen(
//          PublishProcessor::class,
//            MessageSubscriber::class
//        );
//
//        // 프레임워크의 DI 컨테이너에 접속할 때
//        $this->app['events']->listen(
//          PublishProcessor::class,
//          MessageSubscriber::class
//        );

        //??
//        \Event::listen('named.fired', 'SubscribeListener@invoke');
    }
}
