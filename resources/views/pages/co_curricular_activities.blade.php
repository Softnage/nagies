<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<link rel="stylesheet" href="{{ asset('css/welcome_message.css') }}" />
<title>Nagies - Co-curricular Activities</title>

<body>
    @include('layouts.header')
    @include('layouts.navbar')

    <h2 class="text-center mt-5">Co-curricular Activities</h2>


    <main class="container mt-4">
        <section>
            <h3>Smartribe</h3>
            <p>Nagie's Angels Educational Centre offers a specialized program called Smartribe, which focuses on
                teaching abacus and coding skills to learners. In the Abacus section of Smartribe, learners
                learn the ancient art of mental calculation using an abacus tool. In the Coding section, they
                learn fundamental coding concepts, problem-solving techniques, and how to create their own
                programs and applications.
            </p>
        </section>

        <section>
            <h3>Excursions</h3>
            <p>learners at Nagie's Angels Educational Centre have the opportunity to participate in exciting excursions
                to various educational and cultural destinations. These trips provide valuable experiential learning
                experiences and help broaden learners' horizons.
            </p>
        </section>

        <section>
            <h3>Christmas Concerts</h3>
            <p>
                In December, a concert is planned to enable our learners to showcase their
                talents in singing, dancing, public speaking, drama and many others. These concerts
                bring joy and celebration to the whole school community.
            </p>
        </section>

        <section>
            <h3>Orphanage Visit & Donations</h3>
            <p>The school organizes visits to local orphanages to foster compassion and empathy among learners.
                Additionally, learners have the opportunity to donate essential items and contribute to the
                well-being of less privileged children.
            </p>
        </section>

        <section>
            <h3>MISE Mathematical Olympiad</h3>
            <p>Nagie's Angels Educational Centre actively participates in the MISE Mathematical Olympiad, a prestigious
                competition that challenges learners' mathematical skills and logical reasoning. learners have
                the chance to compete with their peers from other schools.
            </p>
        </section>

        <section>
            <h3>Career Days</h3>
            <p>Regular career days are organized at Nagie's Angels Educational Centre, where professionals from various
                fields are invited to share their experiences and insights with learners. This helps learners
                explore different career paths and make informed decisions about their future.
            </p>
        </section>

        <section>
            <h3>Science & Art Exhibitions</h3>
            <p>Science and art exhibitions are held at Nagie's Angels Educational Centre to showcase learners' creative
                and scientific projects. These exhibitions provide a platform for learners to demonstrate their
                knowledge, skills, and innovative ideas.
            </p>
        </section>

        <section>
            <h3>Career & Guidance Counselling</h3>
            <p> Nagie's Angels Educational Centre offers career and guidance counseling services to help learners with
                their academic and career planning. Professional counselors provide support, advice, and resources
                to assist learners in making informed decisions about their educational and professional paths.
            </p>
        </section>
    </main>

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
