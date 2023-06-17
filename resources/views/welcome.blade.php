@extends('layouts.navigation')

@section('content')
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold text-body-emphasis text-capitalize">ticket-concert</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">
            Esse quis ex est ea in do fugiat nostrud consequat minim ex laboris Lorem culpa. Elit nostrud aliquip elit mollit ullamco. Sit quis magna occaecat ea proident nisi voluptate dolor commodo tempor deserunt elit sunt veniam.
        </p>
    </div>
</div>

<div class="p-5 text-center bg-body-secondary rounded-3">
    <h1 class="text-body-emphasis text-capitalize mt-5 mb-4">our platform is cheaper than others</h1>
    <p class="col-lg-8 mx-auto fs-4 text-muted mb-5">
        Irure fugiat culpa pariatur exercitation exercitation occaecat adipisicing incididunt. Quis duis laborum pariatur aliquip quis ad pariatur eiusmod incididunt nostrud do ullamco consequat. Exercitation id nostrud amet proident mollit. Minim ullamco duis et Lorem ut ut consequat duis quis nostrud qui dolore.
    </p>
    <div class="d-inline-flex gap-2 mb-5">
        <a href="{{ route('home') }}" class="btn btn-primary btn-lg rounded-pill" type="button">
            Get your ticket now
        </a>
    </div>
</div>
@endsection
