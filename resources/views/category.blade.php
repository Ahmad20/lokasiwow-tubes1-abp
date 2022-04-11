@extends('layouts.main')
@section('container')
    <section class="container">
        <div class="d-flex align-items-center my-3" style="width: 300px;">
            <p class="mb-0 text-nowrap px-3">
                Pilih daerah
            </p>
            {{-- <form action="{{ url('/page') }}" method="get">
                <label for="browser">Pilih Daerah: </label>
                <input list="browsers" name="browser" id="browser">
                <datalist id="browsers">
                    <option value="Sumut">
                    <option value="Aceh">
                    <option value="DKI">
                    <option value="Jateng">
                    <option value="Jabar">
                </datalist>
                <input type="submit">
            </form> --}}
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <div class="container-fluid">
            <div class="row gx-2">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a href="google.com" target="_blank" style="text-decoration: none">
                        <div class="card">
                            <img src="https://placeholder.pics/svg/300x200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Gunung</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's
                                    content.</p>
                                <p style="font-size: 12px; color: gray;" class="mb-0">Updated 7000 years ago</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a href="google.com" target="_blank" style="text-decoration: none">
                        <div class="card">
                            <img src="https://placeholder.pics/svg/300x200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pantai</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's
                                    content.</p>
                                <p style="font-size: 12px; color: gray;" class="mb-0">Updated 7000 years ago</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a href="google.com" target="_blank" style="text-decoration: none">
                        <div class="card">
                            <img src="https://placeholder.pics/svg/300x200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Danau</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's
                                    content.</p>
                                <p style="font-size: 12px; color: gray;" class="mb-0">Updated 7000 years ago</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a href="google.com" target="_blank" style="text-decoration: none">
                        <div class="card">
                            <img src="https://placeholder.pics/svg/300x200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tempat Bersejarah</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's
                                    content.</p>
                                <p style="font-size: 12px; color: gray;" class="mb-0">Updated 7000 years ago</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('greeting')
    <p class="mb-0 me-2">Hello, julius</p>
@endsection
