<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Services\FirebaseCloudMessagingService;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;
use Livewire\Component;

class FirebaseComponent extends Component
{

    use LivewireAlert;

    public $title, $body, $fcm_token;
    private $messaging;

    public function render()
    {
        //$this->fcm_token = config('app.fcm_token_test');
        $users = User::where('fcm_token', '!=', null)->get();
        return view('livewire.firebase-component')
            ->with('listUser', $users);
    }


    protected $rules = [
        'title' => 'required|min:4',
        'body' => 'required|min:4',
        'fcm_token' => 'required',
    ];

    public function sendMessage()
    {
        $this->validate();

        $this->messaging = FirebaseCloudMessagingService::connect();
        $notificacion = Notification::fromArray([
            'title'     =>  $this->title,
            'body'   =>  $this->body
        ]);

        $message = CloudMessage::withTarget('token', $this->fcm_token)
            ->withNotification($notificacion);
        $this->messaging->send($message);

        $this->alert('success','Mensaje enviado.');
    }

}
