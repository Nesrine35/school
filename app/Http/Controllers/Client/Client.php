<?php

namespace App\Http\Controllers\Client;

use App\Events\AdminEvent;
use App\Http\Controllers\Controller;
use App\Models\Formations;
use App\Http\Requests\ContactRequest;
use App\Models\User;
use App\Notifications\AdminNotification;

class Client extends Controller
{
    public function index(){
        return view('client.client');
    }
    public function index1(){
 
        return view('client.home',[
            'formations'=>  Formations::orderBy('created_at','desc')->Recent()->Available()->paginate(10)
        ]);
    }
    public function show(Formations $formation){
        return view('client.show',[
            'formation'=>$formation
        ]);
    }

public function contact(Formations $formation, ContactRequest $request)

{
    $users = User::all();//select tous les utilisateur
    foreach($users as $user){
    if($user->role == 'admin'){//si l utilisateur est un admin envoi la notification

    $user->notify(new AdminNotification($formation,$request->validated()));
    toastr()->success('Data has been saved successfully!', 'Congrats');
    return back()->with('notification', 'votre demende de contact a bien été envoyé'); 
    }
    }
}

}
