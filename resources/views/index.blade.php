@extends('layouts.main')

<style>
    .stars-outer {
        display: inline-block;
        position: relative;
        font-family: FontAwesome;
    }

    .stars-inner {
        position: absolute;
        top: 0;
        left: 0;
        white-space: nowrap;
        overflow: hidden;
        width: 0;
    }

    .stars-outer::before {
        content: "\f005 \f005 \f005 \f005 \f005";
        color: #ccc;
    }

    .stars-inner::before {
        content: "\f005 \f005 \f005 \f005 \f005";
        color: #f8ce0b;
    }

</style>

@php
$liked = false;
@endphp


@section('container')
    <section class="container">
        <div class="d-flex align-items-center my-3" style="width: 300px;">
            <p class="mb-0 text-nowrap px-3">
                Pilih daerah
            </p>

            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <div class="container-fluid">
            <div class="row gx-2">
                @foreach ($posts as $post)
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <a href='/posts/{{ $post->title }}' style="text-decoration:none;color:black">
                            <div class="card mb-3">
                                <img src="{{ $post->image_link }}" class="card-img-top" alt="{{ $post->title }}"
                                    style="width:100%;height:200px">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->location }}</p>
                                    <span id="rating_value" class="rating_value">{{ $post->rating_score }}</span>
                                    <div class="stars-outer">
                                        <div class="stars-inner"></div>
                                    </div>

                                    <span>({{ number_format($post->rating_count) }})</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        var elem = document.getElementsByClassName('rating_value');
        var elem1 = document.getElementsByClassName('stars-inner');
        const startotal = 5;
        document.addEventListener('DOMContentLoaded', getRatings);

        function getRatings() {
            for (var i = 0; i < elem.length; i++) {
                rating = elem[i].innerText;
                const starPercentage = (rating / startotal) * 100;
                elem1[i].style.width = starPercentage + '%';
            }
        }
    </script>
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
@section('button')
    @if (session()->has('username'))
        <button type="button" class="btn me-1" style="background-color: #FF9E53;"
            onclick="location.href='{{ url('logout') }}'">Logout</button>
    @else
        <button type="button" class="btn me-1" style="background-color: #FF9E53;"
            onclick="location.href='{{ url('login') }}'">Login</button>
        <button type="button" class="btn btn-warning me-1"
            onclick="location.href='{{ url('register') }}'">Register</button>
    @endif
@endsection
