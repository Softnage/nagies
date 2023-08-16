<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<link rel="stylesheet" href="{{ asset('css/curriculum.css') }}" />
<title>Nagies - Curriculum</title>

<body>
    @include('layouts.header')
    @include('layouts.navbar')

    <section>
        <div class="heading">
            <h1>Our Curriculum</h1>
            <p>
                At Nagie's Angels Educational Centre, we believe that inclusive education means providing
                all pupils with appropriate education and support alongside their peers. The Curriculum is
                all the planned activities that the school organises in order to promote learning, personal
                growth and development.
                <br>
                <br>
                It includes not only the formal requirements of the WAEC Curriculum, but also a range of
                additional opportunities that the school organises in order to enrich the experiences of
                our children. Our curriculum also includes the social aspects that are essential for
                life-long learning.
                <br>
                <br>
                We aim to make learning exciting, engaging and enriching for all children, ensuring that
                every child is challenged to be the best version of themselves that they can be.
            </p>
        </div>
    </section>

    <section>
        <div class="explore mt-5">
            <div class="contain">
                <img src="{{ asset('images/pre_school.png') }}" alt="Avatar" class="image" style="width: 100%;">
                <div class="overlay pre_school_bg">
                    <div class="text">
                        <h2>PRE-SCHOOL</h2>
                        <p>Take your first step towards an exiciting play-based educational adventure.</p>
                    </div>
                </div>
            </div>
            <div class="contain">
                <img src="{{ asset('images/primary.png') }}" alt="Avatar" class="image" style="width: 100%;">
                <div class="overlay primary_bg">
                    <div class="text">
                        <h2>PRIMARY</h2>
                        <p>Our experienced educators have over 100 years combined experience in early child
                            development</p>
                    </div>
                </div>
            </div>
            <div class="contain ">
                <img src="{{ asset('images/jhs.png') }}" alt="Avatar" class="image" style="width: 100%;">
                <div class="overlay jhs_bg">
                    <div class="text">
                        <h2>JHS</h2>
                        <p>We provide a unique and a distinctive educational experience for our learners</p>
                    </div>
                </div>
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
