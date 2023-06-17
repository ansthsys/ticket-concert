<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Concert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function getConcert()
    {
        $concerts = Concert::all();

        return view('concert', [
            'concerts' => $concerts,
        ]);
    }
}
