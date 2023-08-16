<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<link rel="stylesheet" href="{{ asset('css/primary.css') }}" />
<title>Primary- Nagies Angels Educational Centre </title>

<body>
    @include('layouts.header')
    @include('layouts.navbar')
    <section>
        <div class="heading">
            <h1 class="text-center mt-5">
                Primary
            </h1>

            <p>
                The primary section is located at Anyinam, in a serene and congenial environment which is
                conducive to learning.
                <br>
                It consists of classes from Basic Stage (B.S.) 1 to 6 and a class size of thirty (30).
                <br>
                Qualified and motivating teachers ensure that leaner-centred pedagogies are applied in
                teaching, and the National Council for Curriculum Assessment (NACCA) Standard Based
                Curriculum for Primary Schools in Ghana, is adopted in teaching.
                <br>
                Ten(10) Subjects taught at the Lower Primary Level (B.S. 1 – 3) are English Language,
                Mathematics, Natural Science, Ghanaian Language (Asante Twi), Religious and Moral Education
                (R.M.E.), History, Creative Arts, Our World Our People (O.W.O.P.), French and Computing.
                <br>
                At the Upper Primary Level (B.S. 4 – 6), Music is the additional subject offered, together
                with the ten subjects studied at the Lower Primary. We encourage a culture of reading among
                our learners, and so extensive reader books are secured each term, to help improve orals,
                vocabulary, writing skills and spelling abilities. Our learners engage in co-curricular
                activities every Friday afternoon, to harness talents and other potentials and interests
                they have in sports, music, spelling, debates and cultural activities. Nagie’s Angels is
                indeed a haven of academic excellence, and an epitome of learning, which is exemplified by
                successes chalked in the recent national spelling bee and other national and international
                competitions.
            </p>
        </div>
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
