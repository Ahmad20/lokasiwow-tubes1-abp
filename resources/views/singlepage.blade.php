@extends('layouts.main')
<style>
    /* Style the list */
    ul.breadcrumb {
        padding: 10px 16px;
        list-style: none;
        background-color: #eee;
    }

    /* Display list items side by side */
    ul.breadcrumb li {
        display: inline;
        font-size: 18px;
    }

    /* Add a slash symbol (/) before/behind each list item */
    ul.breadcrumb li+li:before {
        padding: 8px;
        color: black;
        content: "/\00a0";
    }

    /* Add a color to all links inside the list */
    ul.breadcrumb li a {
        color: #0275d8;
        text-decoration: none;
    }

    /* Add a color on mouse-over */
    ul.breadcrumb li a:hover {
        color: #01447e;
        text-decoration: underline;
    }

</style>
@section('container')
    <!-- KATEGORI TEMPAT -->
    <div class="container">
        <div class="d-flex align-items-center my-3" style="width: 100%;">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/posts/{{ $post->location }}">{{ $post->location }}</a></li>
                <li>{{ $post->title }}</li>
            </ul>
        </div>
    </div>


    <!-- TULISAN TEMPAT -->
    <section class="container">
        <div class="row gx-2">
            <div style="background-color: white;" class="rounded col-sm-12 col-md-8">
                <article class="m-3">
                    <h1 class="fw-bold fs-2 mb-0">{{ $post->title }}</h1>
                    <p style="color: gray;">{{ $post->location }}</p>
                    <div>
                        <img src="https://placeholder.pics/svg/600x500" width="100%" alt="" />
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

                {{-- Post Comments --}}
                <div class="card mt-4">
                    @php
                        $post_id = $post->post_id;
                        $comments = DB::table('comments')
                            ->where('post_id', '=', $post_id)
                            ->orderByDesc('created_at')
                            ->get();
                    @endphp
                    <h5 class="card-header">Comments <span class="comment-count float-right badge badge-info" style="color:black">{{ count($comments) }}</span>
                    </h5>
                    <div class="card-body">
                        {{-- Add Comment --}}
                        <div class="add-comment mb-3">
                            @csrf
                            <textarea class="form-control comment" placeholder="Enter Comment"></textarea>
                            <button data-post="{{ $post->post_id }}"
                                class="btn btn-dark btn-sm mt-2 save-comment">Submit</button>
                        </div>
                        <hr />
                        {{-- List Start --}}
                        {{-- <div class="comments">
                            <blockquote class="blockquote">
                                @php
                                    $comments = DB::table('comments')
                                        ->orderByDesc('created_at')
                                        ->get();
                                    foreach ($comments as $comment) {
                                        echo "<p class='mb-0'>$comment->comment_text</p>";
                                    }
                                @endphp

                            </blockquote>
                            <hr />
                            <p class="no-comments">No Comments Yet</p>
                        </div> --}}
                        <div class="comments">

                            @if (count($comments) > 0)
                                @foreach ($comments as $comment)
                                    <blockquote class="blockquote">
                                        <small class="mb-0">{{ $comment->comment_text }}</small>
                                    </blockquote>
                                    <hr />
                                @endforeach
                            @else
                                <p class="no-comments">No Comments Yet</p>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- ## End Post Comments --}}

            </div>
        </div>
    </section>
@endsection

{{-- @section('greeting')
    <p class="mb-0 me-2">Hello, {{ $name }}</p>
@endsection --}}
@section('script')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        // Save Comment
        $(".save-comment").on('click', function() {
            var _comment = $(".comment").val();
            var _post = $(this).data('post');
            var vm = $(this);
            // Run Ajax
            $.ajax({
                url: "{{ url('save-comment') }}",
                type: "post",
                dataType: 'json',
                data: {
                    comment: _comment,
                    post: _post,
                    _token: "{{ csrf_token() }}"
                },
                beforeSend: function() {
                    vm.text('Saving...').addClass('disabled');
                },
                success: function(res) {
                    var _html = '<blockquote class="blockquote animate__animated animate__bounce">\
                                    <small class="mb-0">' + _comment + '</small>\
                                    </blockquote><hr/>';
                    if (res.bool == true) {
                        $(".comments").prepend(_html);
                        $(".comment").val('');
                        $(".comment-count").text($('blockquote').length);
                        $(".no-comments").hide();
                    }
                    vm.text('Save').removeClass('disabled');
                }
            });
        });
    </script>
@endsection
