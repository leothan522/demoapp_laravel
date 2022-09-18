<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;

class FirebaseController extends Controller
{
    private $messaging;

    public function __construct()
    {
        $this->messaging = \App\Services\FirebaseCloudMessagingService::connect();
    }


    public function test()
    {
        /*$blog = $this->messaging->getReference('blog');
        echo '<pre>';
        print_r($blog->getvalue());
        echo '</pre>';*/

        $deviceToken  = 'eTMQeegCTFmYTTZvBY9O53:APA91bEd4i9dALahCYc2mXOsBAx6wdPGfUeiirr4K-PTae0DJYyiyAPu0K6iV7BnAm0A7lywtts3YzI_VZYCDwVkvQMNB2fNdhSkXmo7vJ1GIOdvgGI8iBFYstWCW5K4Pn7F41Oqeb0E';

        /*$message = CloudMessage::withTarget('token', $deviceToken)
            ->withNotification(Notification::create('Title Prueba', 'Body Prueba'))
            ->withData(['key' => 'value']);*/

        $title = 'My Notification Title';
        $body = 'My Notification Body';
        $imageUrl = 'http://lorempixel.com/400/200/';

        $notification = Notification::fromArray([
            'title' => $title,
            'body' => $body,
            'image' => $imageUrl,
        ]);

        $message = CloudMessage::withTarget('token', $deviceToken)
            ->withNotification($notification);

        $this->messaging->send($message);

    }

}
