<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Session;

class LoginSuccessfully
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function handle(Login $event)
    {
        $event->subject = 'login';
        $event->description = 'Login successfully';

        Session::flash('login-success', 'Hello '.$event->user->name.' welcome back');
        activity($event->subject)
        ->by($event->user)
        ->log($event->description);
    }
}
