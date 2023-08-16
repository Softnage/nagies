<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<link rel="stylesheet" href="{{ asset('css/vision_and_mission.css') }}" />
<title>Our Vision & Mission - Nagies Angels Educational Centre </title>

<body>
    @include('layouts.header')
    @include('layouts.navbar')

    <section>
        <br>
        <br>
        <br>
        <br>
        <h2 class="text-center">Our Vision & Mission</h2>

        <div class="grid row">
            <div class="card col-md-6">
                <img class="card-img-top" src="{{ asset('images/vision.png') }}" alt="Card image">

                <h4 class="card-title text-center">Our Vision</h4>
                <p class="card-text">
                    To be the centre of academic and moral excellence.
                </p>

            </div>




            <div class="card">
                <img class="card-img-top" src="{{ asset('images/mission.png') }}" alt="Card image">

                <h4 class="card-title text-center">Our Mission</h4>
                <p class="card-text">To provide and maintain excellent teaching and holistic training for all our
                    pupils;
                    inculcating in their character and competence, towards good and responsible leadership
                    in Ghana and the world at large.</p>

            </div>
        </div>

    </section>

    @include('layouts.footer')
    <!-- lightbox Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
