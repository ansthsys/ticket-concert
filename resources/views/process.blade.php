@extends('layouts.navigation')

@section('content')
    <div style="min-height: 50vh">
        <h1 class="fs-2 mb-5">Process Ticket</h1>

        <div class="form-signin m-auto" style="width: 18rem">
            <form method="POST" action="{{ url('/process') }}">
                @csrf
                <div class="form-floating">
                    <input type="text" class="form-control" id="ticket-code" name="code"
                        placeholder="TIX0000-000x0x00x00000.00000000" required>
                    <label for="ticket-code">Ticket Code</label>
                </div>
                @if (\Session::has('error'))
                    <p class="mt-1 mb-2 text-danger fw-semibold">{{ \Session::get('error') }}</p>
                @endif
                <button class="btn btn-primary w-100 mt-3 py-2" type="submit">Process Ticket</button>
            </form>
        </div>
    </div>
@endsection
