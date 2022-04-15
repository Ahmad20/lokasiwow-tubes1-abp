@extends('layouts.main')
@section('container')
    <div class="container">
        <h1 class="mb-3">Profile page</h1>
        <form method="post">
            @csrf
            <label>
                <span>Enter your username</span>
                <input type="hidden" name="old-username" value="{{ session('username') }}" />
                <input placeholder="Username" value="{{ session('username') }}" name="new-username" />
            </label>
            <button class="btn btn-primary" type="submit" formaction="/profile/edit">Change username</button>
            <button class="btn btn-primary" type="submit" formaction="/profile/delete">Delete profile</button>
        </form>
    </div>

    <h1>Liked by me</h1>
    <div class="row gx-2">
      <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="card">
          <img src="https://placeholder.pics/svg/300x200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <p style="font-size: 12px; color: gray;" class="mb-0">Updated 7000 years ago</p>
          </div>
        </div>
      </div>
    </div>

@endsection
@section('greeting')
    <a href="/profile" style='text-decoration:none; color:white'>
        <p class="mb-0 me-2">
            @if (session()->has('username'))
                Hello, {{ session('username') }}
            @endif
        </p>
    </a>
@endsection
