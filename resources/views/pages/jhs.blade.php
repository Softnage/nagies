<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<link rel="stylesheet" href="{{ asset('css/jhs.css') }}" />
<title>J.H.S - Nagies Angels Educational Centre </title>

<body>
    @include('layouts.header')
    @include('layouts.navbar')
    <section>
        <div class="heading">
            <h1 class="text-center mt-5">
                J.H.S
            </h1>

            <p>
                Our classes from Basic Stage (B.S.) 7 to 9, having a class size of thirty (30), are well- spaced,
                comfortable and bright. Our professional tutors use the Standard Based Curriculum from the National
                Council for Curriculum Assessment (NACCA) in their delivery.
                <br>
                Subjects offered include English Language, Mathematics, Integrated Science, and Social Studies,
                which make up the Core Subjects. Ghanaian Language (Asante Twi), Religious and Moral Education
                (R.M.E.), Basic Design and Technology (B.D.T.), French and Computing are the Elective Subjects
                available. However, each learner in Form 2 would have to make a choice between Home Economics and
                Pre-Technical Skills (Included in the B.D.T) as their final vocational subject choice for their
                final national exams (B.E.C.E.)
                <br>
                <br>
                The Basic Education Certificate Examination (B.E.C.E.) conducted by the West African Examination Council
                (W.A.E.C.), is the final national exam that our learners write in order to graduate to Senior High
                Schools in Ghana. Thankfully to God, our past learners have written and passed this exam with flying
                colours since 2006, with over 80% of them achieving Distinctions, a feat that we do not take for
                granted, and the school strives to improve year after year.
                <br>
                <br>
                On Friday mornings, we set aside a time of worship to our Maker and Almighty Father in Heaven, and
                engage the learners in Bible exhortations and studies, to help strengthen their faith and morals.
                In the afternoons, they engage in club activities and sports like football, basketball, volleyball,
                table tennis and indoor games. Our school sports teams are hardworking and energetic, and have been
                making us proud in both internal and external tournaments.
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
