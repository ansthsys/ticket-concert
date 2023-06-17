@extends('layouts.navigation')

@section('content')
    <div style="min-height: 50vh">
        <h1 class="fs-2 mb-5">Buyer Edit</h1>
        <div class="mx-auto border border-primary rounded rounded-3 py-3 px-2" style="width: 28rem;">
            <form class="form" method="POST" action="{{ url('/buyer/' . $ticket->id) }}">
                @csrf
                <div class="mb-3">
                    <label for="code" class="form-label">Ticket Code</label>
                    <input type="text" class="form-control" id="code" placeholder="Ticket Code"
                        disabled value={{ $ticket->code }}>
                </div>
                <div class="mb-3">
                    <label for="is_used" class="form-label">Status Ticket</label>
                    <select class="form-select" id="is_used" name="is_used" aria-label="Status Ticket">
                        <option value="true" {{ $ticket->is_used != 0 ? 'selected' : '' }}>Used</option>
                        <option value="false" {{ $ticket->is_used != 0 ? '' : 'selected' }}>Unused</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary rounded-pill mx-auto py-2 px-5 text-decoration-none" type="submit"
                        value="Submit">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
