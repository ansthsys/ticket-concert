<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagementController extends Controller
{
    public function getBuyer()
    {
        $res = Ticket::with('concert')->with('user')->get();

        return view('buyer', [
            'res' => $res
        ]);
    }

    public function getSingleBuyer($id)
    {
        $ticket = Ticket::where('id', $id)->first();

        return view('buyer-edit', [
            'ticket' => $ticket,
        ]);
    }
}
