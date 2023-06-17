<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function buyTicket(Request $request)
    {
        $user_id = Auth::id();
        $concert_id = $request->concert_id;
        $code = uniqid('TIX' . rand(1000, 9999) . '-', true);

        $data = Ticket::create([
            'user_id' => $user_id,
            'concert_id' => $concert_id,
            'code' => $code,
        ]);

        return redirect()->route('myTicket');
    }

    public function getMyTicket()
    {
        $tickets = Ticket::with('concert')->where('user_id', Auth::id())->get();

        return view('ticket', [
            'tickets' => $tickets
        ]);
    }
}
