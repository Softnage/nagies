<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<title>Gallery - Nagies Angels Educational Centre</title>

<body>
    @include('layouts.header')
    @include('layouts.navbar')

    <section>
        @foreach ($galleries as $gallery)
            <h2 class="text-center mt-5">{{ $gallery->title }}</h2>
            <div class="gallery_ gall">
                @if ($gallery->images->count() > 0)
                    @foreach ($gallery->images as $image)
                        <div class="">
                            <div>
                                <a href="{{ asset('storage/' . $image->path) }}">
                                    <img src="{{ asset('storage/' . $image->path) }}" alt="Gallery Image"
                                        class="img-thumbnail">
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No images available for this gallery.</p>
                @endif
            </div>
        @endforeach
    </section>

    @include('layouts.footer')

    <!-- lightbox Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
