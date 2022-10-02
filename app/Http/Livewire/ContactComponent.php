<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\User;
use App\Services\FirebaseCloudMessagingService;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Kreait\Firebase\Exception\FirebaseException;
use Kreait\Firebase\Exception\MessagingException;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;
use Livewire\Component;

class ContactComponent extends Component
{
    use LivewireAlert;

    public $nombre, $email, $asunto, $mensaje;
    public $title, $body, $fcm_token;
    private $messaging;

    public function render()
    {
        if (Auth::user()){
            $this->nombre = Auth::user()->name;
            $this->email = Auth::user()->email;
        }
        return view('livewire.contact-component');
    }

    public function limpiar()
    {
        if (Auth::user()){
            $this->nombre = Auth::user()->name;
            $this->email = Auth::user()->email;
        }else{
            $this->nombre = null;
            $this->email = null;
        }
        $this->asunto = null;
        $this->mensaje = null;
    }

    public function sendMessage()
    {
        $contact = new Contact();
        $contact->nombre = $this->nombre;
        $contact->email = strtolower($this->email);
        $contact->asunto = $this->asunto;
        $contact->mensaje = $this->mensaje;
        $contact->save();

        $users = User::where('role', '>', 0)->where('fcm_token', '!=', null)->get();

        if (!$users->isEmpty()){

            $this->messaging = FirebaseCloudMessagingService::connect();
            $this->title = "Mensaje Contacto";
            $this->body = $this->email;
            foreach ($users as $user){

                $this->fcm_token = $user->fcm_token;
                $notificacion = Notification::fromArray([
                    'title'     =>  $this->title,
                    'body'   =>  $this->body
                ]);

                $message = CloudMessage::withTarget('token', $this->fcm_token)
                    ->withNotification($notificacion);
                try {
                    $this->messaging->send($message);
                } catch (MessagingException $e) {
                } catch (FirebaseException $e) {
                }

            }

        }

        $this->limpiar();

        $this->alert(
            'success',
            'Mensaje Enviado.');
        $this->redirect('#');

    }



}
