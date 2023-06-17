@extends('layouts.navigation')

@section('content')
<div style="min-height: 50vh">
    <h1 class="fs-2 mb-5">List Upcoming Concert</h1>
    @foreach ($concerts as $item)
    <div class="card mb-3 mx-auto" style="width: 32rem; height: 12rem;">
        <div class="card-body">
        <h2 class="card-title">{{$item->name}}</h2>
        <h5 class="card-text">live in {{$item->scheduled_date}}</h5>
        <form id="{{ $item->name }}" method="post" action="{{ route('buyTicket') }}">
            @csrf 
            <input type="hidden" name="concert_id" value="{{ $item->id }}" /> 
            <a onclick="this.parentNode.submit();" class="btn btn-sm btn-primary py-2 px-5 mt-4 rounded-pill">
                Buy
            </a>
        </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
