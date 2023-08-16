<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<link rel="stylesheet" href="{{ asset('css/welcome_message.css') }}">
<title>Welcome Message - Nagies Angels Educational Centre </title>

<body>
    @include('layouts.header')
    @include('layouts.navbar')
    <div class="row welcome">
        <div class="col-md-7 princ">
            <h2>Welcome to Nagie's Angels Educational Center</h2>
            <p>
                Nagie's Angels Educational Center is a reputable institution that caters to a diverse group of learners
                ranging from 1 to 14 years old, with a notable alumni base of over 600 learners. Our learners are known
                for their optimistic outlook, moral values, intellectual prowess, and diligent work ethic. With three
                decades of experience in providing high-quality education, we have enabled numerous children to explore
                a wide range of subjects, embrace modern educational technologies, uncover hidden talents, and foster
                connections with peers from across Ghana's 16 regions and other parts of West Africa.
                <br>
                At Nagie's Angels, we are committed to ensuring that every learner reaches their full academic
                potential. Our highly qualified and devoted educators spare no effort in providing personalized
                attention to even the slowest learners, instilling confidence and a strong work ethic in them. This
                approach has proven effective in enabling our angels to excel in all their assessments.
                <br>
                Our facilities are state-of-the-art, featuring spacious and well-ventilated classrooms, a fully equipped
                computer laboratory, and a well-stocked library. Additionally, we have designated spaces, such as an art
                room and a home economics facility, to nurture creativity and practical skills. Our school campus also
                boasts safe and engaging recreational areas, including a football pitch and a basketball and volleyball
                court, promoting physical activity and play.
                <br>
                Your wards enjoy freshly prepared meals for lunch, along with a selection of baked snacks and juices
                available throughout the day. Moreover, we provide free shuttle services between our preschool and
                elementary school campuses, ensuring convenient transportation for our learners in the morning and
                afternoon.
                <br>
                Choosing Nagie's Angels as an educational institution is a decision that will undoubtedly yield fruitful
                outcomes. Our school not only cultivates young minds for the future but also nurtures character,
                instills faith in God, and fosters a positive attitude towards life and success. We firmly believe that
                your association with Nagie's Angels will be a rewarding and enriching experience.
            </p>
        </div>
        <div class="col-md-5 principal">
            <img src="{{ asset('images/principal_img.png') }}" alt="" style="width: 100%;">
            <br>
            <br>
            <h5> Rev. Dr. Franchesca K. Afoakwa </h5>
            <h6>Principal</h6>
        </div>
    </div>

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
