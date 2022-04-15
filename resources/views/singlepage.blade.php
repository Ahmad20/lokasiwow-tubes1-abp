@extends('layouts.main')
@section('container')
    <!-- KATEGORI TEMPAT -->
    <div class="container">
        <div class="d-flex align-items-center my-3" style="width: 300px;">
            <p class="mb-0 text-nowrap px-3">
                Kota / Nama tempat
            </p>
        </div>
    </div>


    <!-- TULISAN TEMPAT -->    
    <section class="container">
        <div class="row gx-2">
            <div style="background-color: white;" class="rounded col-sm-12 col-md-8">
                <article class="m-3">
                    <h1 class="fw-bold fs-2 mb-0">{{ $post }}</h1>
                    <p style="color: gray;">Provinsi</p>
                    <div style="">
                        <img src="https://placeholder.pics/svg/600x500" width="100%" alt="" />
                        <!-- Generate id buat jquerynya, Generate ini id="likedButtonN" N = iterasi ke berapa saat itu,  -->
                        <button id="likeButton1" class="btn {{$liked ? 'btn-success' : 'btn-warning'}}" onclick="likeButton('1',false)" style="position: absolute; top: 2%; right: 3%;">Like</button>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam eum corporis, illum cupiditate non,
                        tempore accusantium enim deleniti dignissimos ratione quaerat. Nostrum reprehenderit error
                        aspernatur esse
                        aperiam commodi cupiditate deleniti. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Quibusdam
                        dolores ipsa laborum vel, debitis odio, voluptas repellendus optio perferendis, rem aspernatur
                        sapiente
                        earum in? Quis soluta vitae omnis quam tempora.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem officiis eos atque illo numquam facere
                        dolorem
                        quam quae dignissimos modi ratione, vel dolore repellendus nulla blanditiis sequi, neque sunt quasi!
                    </p>

                    <!-- GTAU YANG KARTU KARTU BAHASA GITU -->
                    <div class="row mb-3">
                        <div class="col-sm-12 col-md-4">
                            <div style="background-color: rgba(196, 196, 196, 15%);"
                                class="d-flex rounded align-items-center">
                                <img src="https://placeholder.pics/svg/75x75" />
                                <div class="ms-2">
                                    <p class="mb-0">Text</p>
                                    <p class="mb-0" style="font-size: 12px; color: gray;">Double text</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div style="background-color: rgba(196, 196, 196, 15%);"
                                class="d-flex rounded align-items-center">
                                <img src="https://placeholder.pics/svg/75x75" />
                                <div class="ms-2">
                                    <p class="mb-0">Text</p>
                                    <p class="mb-0" style="font-size: 12px; color: gray;">Double text</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div style="background-color: rgba(196, 196, 196, 15%);"
                                class="d-flex rounded align-items-center">
                                <img src="https://placeholder.pics/svg/75x75" />
                                <div class="ms-2">
                                    <p class="mb-0">Text</p>
                                    <p class="mb-0" style="font-size: 12px; color: gray;">Double text</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </article>

            <!-- BAGIAN KOMEN SAMA LIKE -->
            <div style="background-color: white;" class="rounded col-sm-12 col-md-4">

                <!-- BAGIAN LIKE -->
                <p class="mb-0 fw-bold fs-3 mt-2">Liked by</p>
                <div>
                    <p class="mb-0">nama, nama, nama, nama</p>
                </div>
                <hr class="my-1">

                <!-- BAGIAN KOMEN -->
                <p class="mb-0 fw-bold fs-3 mt-2">Comment</p>
                <div>
                    <p class="mb-1"><strong>Username</strong> Commentnya bla bla bla bla bla bla bla</p>
                    <p class="mb-1"><strong>Username</strong> Commentnya bla bla bla bla bla bla bla</p>
                    <p class="mb-1"><strong>Username</strong> Commentnya bla bla bla bla bla bla bla</p>
                    <p class="mb-1"><strong>Username</strong> Commentnya bla bla bla bla bla bla bla</p>
                </div>

            </div>
        </div>
    </section>
@endsection

{{-- @section('greeting')
    <p class="mb-0 me-2">Hello, {{ $name }}</p>

@endsection --}}


@section('script')

<script>

function likeButton(n, isLiked) {
      // SEND LIKE REQUEST TO SERVER HERE
      // GIMANA CARA KOMUNIKASIIN KE JS DARI PHP KALAU DIA ITU UDAH DI LIKE

      var liked = isLiked // INI BUAT CONTOH DOANG

      if (!liked) {
        // Jalanin like
        $.ajax({
          url: "",
          data: {

          },
          success: function() {
            $(`#likeButton${n}`).removeClass('btn-warning');
            $(`#likeButton${n}`).addClass('btn-success');
          },
        })
      } else {
        // jalanin dislike
        $.ajax({
          url: "",
          data: {

          },
          success: function() {
            $(`#likeButton${n}`).removeClass('btn-success');
            $(`#likeButton${n}`).addClass('btn-warning');
          },
        })


      }

    }
    </script>


@endsection