<?php

namespace App\Listeners;

use App\Mail\WelcomeMail;
use Hasura\EventDispatcher\TableEvent;
use Illuminate\Support\Facades\Mail;

class UserRegistered
{
    public function handle(TableEvent $event)
    {
        if ($event->getTriggerName() !== 'user_registered') {
            return;
        }

        # Discovery payload: https://hasura.io/docs/latest/graphql/core/event-triggers/payload.html#json-payload
        $event = $event->getEvent();
        $eventData = $event['data']['new'];

        Mail::to($eventData['email'])->send(new WelcomeMail($eventData['name']));
    }
}
