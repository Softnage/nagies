<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<title>Home - Nagies Angels Educational Centre </title>

<body>
    @include('layouts.header')
    @include('layouts.navbar')

    <div class="container-fluid mt-5">
        <h2>News Details</h2>
        <div class="card">
            <div class="card-header">
                {{ $news->title }}
            </div>
            <div class="card-body">
                @php
                    echo $news->content;
                @endphp

                @if ($news->image)
                    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid"
                        height="300px" width="300px" style="object-fit: cover; border-radius: 10px">
                @endif
            </div>
        </div>
    </div>

    @include('layouts.footer')
    <!-- lightbox Script -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
