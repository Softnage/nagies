<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<title>Gallery - Nagies Angels Educational Centre</title>

<body>
    @include('layouts.header')
    @include('layouts.navbar')



    <section>
        <h2 class="text-center mt-5">Classroom</h2>
        <div class="gallery_">
            <a href="{{ asset('images/classroom-01.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-1">

                </div>
            </a>
            <a href="{{ asset('images/classroom-02.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-2">

                </div>
            </a>
            <a href="{{ asset('images/classroom-03.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-3">

                </div>
            </a>
            <a href="{{ asset('images/classroom-04.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-4">

                </div>
            </a>
            <a href="{{ asset('images/classroom-05.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-5">

                </div>
            </a>
            <a href="{{ asset('images/classroom-06.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-6">

                </div>
            </a>

        </div>
    </section>


    <section>
        <h2 class="text-center mt-5">ICT Laboratory</h2>
        <div class="gallery_">
            <a href="{{ asset('images/it_lab-01.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-7">

                </div>
            </a>
            <a href="{{ asset('images/it_lab-02.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-8">

                </div>
            </a>
            <a href="{{ asset('images/it_lab-03.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-9">

                </div>
            </a>
            <a href="{{ asset('images/it_lab-04.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-10">

                </div>
            </a>
            <a href="{{ asset('images/it_lab-05.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-11">

                </div>
            </a>
            <a href="{{ asset('images/it_lab-06.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-12">

                </div>
            </a>

        </div>
    </section>


    <section>
        <h2 class="text-center mt-5">Playground</h2>
        <div class="gallery_">
            <a href="{{ asset('images/playground-01.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-13">

                </div>
            </a>
            <a href="{{ asset('images/playground-02.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-14">

                </div>
            </a>
            <a href="{{ asset('images/playground-03.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-15">

                </div>
            </a>
            <a href="{{ asset('images/playground-04.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-16">

                </div>
            </a>
            <a href="{{ asset('images/playground-05.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-17">

                </div>
            </a>
            <a href="{{ asset('images/playground-06.jpg') }}" data-lightbox="gallery"
                data-title="Nagies Angels Educational Centre" download>
                <div class="gallery-18">

                </div>
            </a>

        </div>
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
