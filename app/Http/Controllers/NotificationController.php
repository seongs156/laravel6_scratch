<?php

namespace App\Http\Controllers;

use App\Notifications\OffersNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index()
    {
        return view('product');
    }

    public function sendOfferNotification() {

        $userSchema = User::find(2);

        $offerData = [
            'name' => 'BOGO',
            'body' => 'You received an offer.',
            'address' => 'seongs70@naver.com',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'offer_id' => 007
        ];

        Notification::send($userSchema, new OffersNotification($offerData));

        return;
    }

    public function receiveOfferNotification()
    {

//        $userSchema = User::first();

//        $userSchema->notify(new OffersNotification($offerData));
//        dd($userSchema->notifications);
        $user = User::find(1);
//        echo '<pre>';
//        dd($user->unreadNotifications());
//        return;
//        $user->unreadNotifications()->update(['read_at' => now()]);
//        echo '<pre>';
//        foreach ($user->unreadNotifications as $notification) {
//            echo $notification->type.'<br>';
//        }
        print_r($user->unreadNotifications);
    }
}
