@extends('layouts.navigation')

@section('content')
    <div style="min-height: 50vh">
        <h1 class="fs-2 mb-5">List Buyers</h1>
        @if (count($res) > 0)
            <div class="table-responsive m-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Code</th>
                            <th scope="col">Status</th>
                            <th scope="col">Concert Name</th>
                            <th scope="col">Concert Date</th>
                            <th scope="col">Buyer Name</th>
                            <th scope="col">Buyer Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($res as $data)
                            <tr>
                                <th scope="row">1</th>
                                <td scope="col">{{ $data->code }}</td>
                                <td scope="col">
                                    <span class="badge {{ $data->is_used ? 'bg-success px-3' : 'bg-secondary' }}">
                                        {{ $data->is_used ? 'used' : 'unused' }}
                                    </span>
                                </td>
                                <td scope="col">{{ $data->concert->name }}</td>
                                <td scope="col">{{ $data->concert->scheduled_date }}</td>
                                <td scope="col">{{ $data->user->name }}</td>
                                <td scope="col">{{ $data->user->email }}</td>
                                <td scope="col">
                                    <div class="d-inline-flex justify-content-center align-item-center gap-2">
                                        <a href="{{ url('/buyer/' . $data->id) }}"
                                            class="btn btn-sm btn-info py-0 px-2 rounded-pill">Edit</a>
                                        <form id="{{ $data->id }}" method="post"
                                            action="{{ route('management.buyer.delete') }}">
                                            @csrf
                                            <input type="hidden" name="ticket_id" value="{{ $data->id }}" />
                                            <a onclick="this.parentNode.submit();"
                                                class="btn btn-sm btn-danger py-0 px-2 rounded-pill">
                                                Delete
                                            </a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <h1 class="text-center fs-2">Buyer is empty</h1>
        @endif
    </div>
@endsection
