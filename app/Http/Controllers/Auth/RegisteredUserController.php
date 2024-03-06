<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Organisateur;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $userdata = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'picture' => ['required'],
        ]);

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $pictureName = time() . '.' . $file->extension();
            $file->storeAs('public/image', $pictureName);
            $userdata['picture'] = $pictureName;
        }

        // Create a new user record
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'picture' => $userdata['picture'],
        ]);

        // Create a new Client instance with the associated user_id
        $client = new Client();
        $client->user_id = $user->id; // Assign the user_id here
        $client->save();

        // Trigger the Registered event
        event(new Registered($user));

        Session::flash('success', 'You have registered successfully!');
        return redirect('/login')->withInput(['email' => $request->email]);
    }

////////////////////////////////////////////////////////////////
public function filter(Request $request)
{
    $phone = $request->input('phone');
    $address = $request->input('address');
    $client = Client::where('user_id', Auth::id())->first();
    $reservations = Reservation::where('client_id', $client->id)->get();
    $organisateur = [];
    $ticket = [];
    $allorganisateurs=Organisateur::get();

   foreach ($reservations as $reservation) {
        $tickets[$reservation->id] = ticket::where('reservation_id', $reservation->id)->get();
        $organisateur[$reservation->id] = Organisateur::where('id', $reservation->organisateur_id)->get();

    }
    foreach($allorganisateurs as $allorganisateur){
        $avgs[$allorganisateur->id] = DB::table('reservations')->join('ticket', 'tickets.reservation_id', '=', 'reservations.id')->where('organisateur_id',$allorganisateur->id);

    }

    // Perform filtering logic using join query
    $filteredOrganisateurs = Organisateur::query()
    ->where('phone', $phone)
    ->orWhere('address', $address)
    ->whereHas('reservation.ticket')
        ->get();

    // Pass the filtered data to the view
    return view('client-dashboard', ['allorganisateur' => $filteredOrganisateurs], compact('avgs','reservations','organisateurs','tickets','client'));
}
}

