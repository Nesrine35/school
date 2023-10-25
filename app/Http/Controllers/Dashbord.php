<?php

namespace App\Http\Controllers;

use App\Models\Enseignants;
use App\Models\Etudiants;
use App\Models\Formations;
use App\Models\Notifications;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Type\Integer;

class Dashbord extends Controller
{

    public function index(Request $request)
    { 
        $users = User::count();
        $userall=User::all();
        $etudiant = Etudiants::count();
        $enseignant = Enseignants::count();
        $formation = Formations::count();
        $user = Auth::user();

       // $numberNotification = count($user->unreadNotifications);

        return view('dashboard', [
            'users' => $users,
            'etudiants' => $etudiant,
            'enseignants' => $enseignant,
            'formation' => $formation,
           // 'not' => $numberNotification,
            'user' => $request->user(),
            'userall'=>$userall
        ]);
    }
    public function notification()
    {
        $user = Auth::user(); //trouve the user
        $numberNotification = count($user->unreadNotifications);
        //$notifications = $user->unreadNotifications; // Get all unread notifications for the user

        return view('admin.notification', [
            //'notifications' => $notifications,
            'notifications' => $user->notifications,
            'not' => $numberNotification,
        ]);
    }
    public function corbeille()
    {
        $user = Auth::user(); //trouve the user
      
        return view('admin.corbeille', [
           
            'notifications' => $user->notifications,
       
        ]);
    }
/*  public function viewNotification(string $id){//pour voir le contenu de notification
$user = Auth::user();
// $user->unreadNotifications()->update(['read_at' => now()]);
$user->unreadNotifications->where('id',$id)->markAsRead();
return view('admin.viewNotification');
}
 */

    public function markNotificationAsRead($notificationId)
    {
        // Find the authenticated user
        $user = Auth::user(); //to get the currently authenticated user.

        // Find the notification by its ID
        $notification = $user->notifications->where('id', $notificationId)->first();

        if ($notification) {
            // Mark the notification as read
            $notification->markAsRead();

            //  return redirect()->back()->with('success', 'Notification marked as read successfully.');
            return view('admin.viewNotification', [
                'notification' => $notification,
            ]);
        } else {
            // Handle the case where the notification with the given ID was not found
            return redirect()->back()->with('error', 'Notification not found.');
        }
    }
    public function showlunotification()
    { //pour le button show notification lu
        $user = Auth::user();
        $luNotification = $user->notifications;
        return view('admin.lunotification', [
            'notifications' => $luNotification,
        ]);
    }
    public function nonlunotification()
    { //pour la button show ,otification non lu
        $user = Auth::user();
        $nonlunotification = $user->unreadNotifications;

        return view('admin.nonlunotification', [
            'notifications' => $nonlunotification,
        ]);

    }
    public function deleteNotification(Notifications $notification)
    {  $notification->delete();
toastr()->success('Data has been deleted successfully!');
return back();

    }
    public function deleteNotificationfinal(Notifications $notification)
    {  $notification->firstorfail()->forceDelete();
toastr()->success('Data has been deleted successfully!');
return back();

    }
    public function nunberNot():int{
        $user = Auth::user();
        $not = count($user->unreadNotifications);
        return $not;
    
    }
     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = new User();
        return view('admin.users.form', [
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
   /* public function store(EnseignantRequest $request)
    {
        $enseignant = Enseignants::create($request->validated());
        return to_route('admin.enseignant.index')->with('success', "ajouter avec succes");
    }*/
}

