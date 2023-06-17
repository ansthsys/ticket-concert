@extends('layouts.navigation')

@section('content')
<div style="min-height: 50vh">
    <h1 class="fs-2 mb-5">List Your Tickets</h1>
    @foreach ($tickets as $item)
    <div class="card d-flex flex-row mb-3 mx-auto" style="width: 32rem;">
        <div class="card-body" style="flex-basis: 70%">
            <h2 class="card-title mb-4">{{ $item->concert->name }}</h2>
            <h6 class="card-text">Live in {{ $item->concert->scheduled_date }}</h6>
            <h6 class="card-text">ID {{ $item->code }}</h6>
        </div>
        <div style="flex-basis: 30%">
            <img 
                class="w-full"
                src="https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl={{ $item->code }}"
                alt="{{ $item->code }}"
            >
        </div>
    </div>
    @endforeach
</div>
@endsection
