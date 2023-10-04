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
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./images/Nagies-hero-1.jpg" alt="school-banner">
            </div>
            <div class="swiper-slide">
                <img src="./images/Nagies-school-hero-2.jpg" alt="school-banner">
            </div>
            <div class="swiper-slide">
                <img src="./images/Nagies-school-hero-3.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/school-banner-01.jpg" alt="school-banner">
            </div>
            <div class="swiper-slide">
                <img src="./images/school-banner-03.jpg" alt="">
            </div>
        </div>

        <div class="explore-heading">
            <h1>Explore Nagie's Angels Educational Centre</h1>
        </div>
        <div class="explore">
            <div class="contain">
                <img src="images/pre_school.png" alt="Avatar" class="image" style="width: 100%;">
                <div class="overlay pre_school_bg">
                    <div class="text">
                        <h2>PRE-SCHOOL</h2>
                        <p>
                            Take your first step towards an exciting play-based educational adventure.
                        </p>
                    </div>
                </div>
            </div>
            <div class="contain">
                <img src="images/primary.png" alt="Avatar" class="image" style="width: 100%;">
                <div class="overlay primary_bg">
                    <div class="text">
                        <h2>PRIMARY</h2>
                        <p>Our experienced educators have over 100 years combined experience in early child development
                        </p>
                    </div>
                </div>
            </div>
            <div class="contain ">
                <img src="images/jhs.png" alt="Avatar" class="image" style="width: 100%;">
                <div class="overlay jhs_bg">
                    <div class="text">
                        <h2>JHS</h2>
                        <p>
                            We provide a unique and distinctive educational experience for our students.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <section>
            <div class="home-welcome row gy-5">
                <div class="col-md-7 principal_text">
                    <h2>Welcome to Nagie's Angels Educational Centre</h2>
                    <p>
                        Nagie's Angels is home to over 1000 learners from ages 1 to 14 and more than
                        600 past students, who are characterized by their positive attitude towards life,
                        godliness, intelligence, and diligence. With over 30 years of experience in
                        providing quality teaching and child-centered learning practices for our learners,
                        affectionately called "angels", our school has given many children the opportunity
                        to explore various study scopes, discover modern technologies in education,
                        unearth hidden talents, and connect with other children from across the 16 regions of Ghana and
                        parts of West Africa.
                    </p>
                    <div class="principal_btn">
                        <button class="p-btn">
                            <a href="welcome_message.php">Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </button>
                    </div>
                </div>
                <div class="col-md-5 principal">
                    <img src="images/principal.png" alt="">
                    <h5>Rev. Dr. Franchesca K. Afoakwa</h5>
                    <h6>Principal</h6>
                </div>
            </div>
        </section>

        <section>
            <div class="title">
                <h1>Nagies at Glance</h1>
            </div>
            <div class="glance">
                <div class="at">
                    <h1><i class="fas fa-graduation-cap"></i></h1>
                    <h3>Educational Excellence</h3>
                </div>
                <div class="at">
                    <h1> <i class="fas fa-users"></i></h1>
                    <h3>Inclusivity and Diversity</h3>
                </div>
                <div class="at">
                    <h1> <i class="fas fa-seedling"></i>
                    </h1>
                    <h3> Holistic Development</h3>
                </div>
            </div>
        </section>


        <section>
            <div class="slidde">
                <div #swiperRef="" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="./images/waec.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./images/ges.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./images/gnaps.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./images/moe.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./images/nacca.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./images/spelling_bee.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./images/smartribe.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./images/maths.jpg" alt="">
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <section>
            @if ($events->count() > 0)
                <div class="title">
                    <h1 style="margin-bottom: -3rem">Events</h1>
                </div>
                <div class="slidde">
                    <div #swiperRef="" class="swiper mySwiper9" style="padding: 0 1rem">
                        <div class="swiper-wrapper">
                            @if ($events->count() > 0)
                                @foreach ($events as $event)
                                    <div class="swiper-slide">
                                        <div class="card event-slide">
                                            <a href="{{ route('details', $event->id) }}" class="event-link">
                                                <div class="card-image"
                                                    style="width: 100%; height: 250px; background-image:url('{{ asset('storage/' . $event->image) }}'); background-position: center; background-size: cover;">
                                                </div>
                                                <div class="">
                                                    <h1 style="font-size: 25px; text-align:center; margin-top: 1rem">
                                                        {{ $event->title }}</h1>
                                                </div>
                                                <p class="date" style="font-size: 12px; text-align:center">
                                                    {{ \Carbon\Carbon::parse($event->start_time)->format('F d, Y g:i A') }}
                                                    -
                                                    {{ \Carbon\Carbon::parse($event->end_time)->format('F d, Y g:i A') }}
                                                </p>
                                                <div class="message">
                                                    <p style="font-size: 16px">
                                                        {{ Illuminate\Support\Str::limit($event->description, 100) }}
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p></p>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </section>

        <div class="explore">
            <div class="contain mt-5">
                <div class="image" style="background-color: #0c055b; height:300px">
                    <div class="text">
                        <h1 style="color: #FFF; font-size:50px;">N</h1>
                        <p style="color: #FFF;">Nationalism</p>
                    </div>
                </div>
                <div class="overlay pre_school_bg" style="background-image:url(./images/classroom-01.jpg);">

                </div>
            </div>
            <div class="contain mt-5">
                <div class="image"
                    style="background-color: #FFF; height:300px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="text">
                        <h1 style="font-size:50px;">A</h1>
                        <p>Attitude</p>
                    </div>
                </div>

                <div class="overlay pre_school_bg" style="background-image:url(./images/classroom-02.jpg);">

                </div>
            </div>
            <div class="contain mt-5">
                <div class="image" style="background-color: #0c055b; height:300px">
                    <div class="text">
                        <h1 style="color: #FFF; font-size:50px;">G</h1>
                        <p style="color: #FFF;">Godliness</p>
                    </div>
                </div>

                <div class="overlay pre_school_bg" style="background-image:url(./images/classroom-03.jpg);">

                </div>
            </div>
            <div class="contain mt-5">
                <div class="image"
                    style="background-color: #FFF; height:300px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="text">
                        <h1 style="font-size:50px;">I</h1>
                        <p>Integrity</p>
                    </div>
                </div>

                <div class="overlay pre_school_bg" style="background-image:url(./images/classroom-04.jpg);">

                </div>
            </div>
            <div class="contain mt-5">
                <div class="image" style="background-color: #0c055b; height:300px">
                    <div class="text">
                        <h1 style="color: #FFF; font-size:50px;">E</h1>
                        <p style="color: #FFF;">Excellence</p>
                    </div>
                </div>

                <div class="overlay pre_school_bg" style="background-image:url(./images/classroom-05.jpg);">

                </div>
            </div>

            <div class="contain mt-5">
                <div class="image"
                    style="background-color: #FFF; height:300px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="text">
                        <h1 style="font-size:50px;">S</h1>
                        <p>Service</p>
                    </div>
                </div>

                <div class="overlay pre_school_bg" style="background-image:url(./images/it_lab-02.jpg);">

                </div>
            </div>
        </div>

        <section>
            @if ($events->count() > 0)
                <div class="title">
                    <h1 style="margin-bottom: -3rem">News</h1>
                </div>
                <div class="slidde">
                    <div #swiperRef="" class="swiper mySwiper8" style="padding: 0 1rem">
                        <div class="swiper-wrapper">
                            @if ($news->count() > 0)
                                @foreach ($news as $new)
                                    <div class="swiper-slide">
                                        <div class="card event-slide">
                                            <a href="{{ route('newsDetails', $new->id) }}" class="event-link">
                                                <div class="card-image"
                                                    style="width: 100%; height: 250px; background-image:url('{{ asset('storage/' . $new->image) }}'); background-position: center; background-size: cover;">
                                                </div>
                                                <div class="">
                                                    <h1 style="font-size: 25px; text-align:center; margin-top: 1rem">
                                                        {{ $new->title }}</h1>
                                                </div>
                                                <div class="message">
                                                    <p style="font-size: 16px">
                                                        {{ Illuminate\Support\Str::limit($new->content, 100) }}
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p></p>
                            @endif

                        </div>
                    </div>
                </div>
            @endif
        </section>


        @include('layouts.footer')
        <!-- lightbox Script -->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                $('.event-slider').slick({
                    responsive: [{
                        breakpoint: 680,
                        settings: {
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }],
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                });
            });
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper2", {
                autoplay: true,
                rewind: false,
                slidesPerView: 3,
                // centeredSlides: true,
                spaceBetween: 30,

                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>

        <script>
            const makeSwipers = (slideNum) => {
                var swiper1 = new Swiper(".mySwiper9", {
                    autoplay: true,
                    rewind: false,
                    slidesPerView: slideNum,
                    spaceBetween: 30,
                    pagination: {
                        el: ".swiper-pagination",
                        type: "fraction",
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
                var swiper2 = new Swiper(".mySwiper8", {
                    autoplay: true,
                    rewind: false,
                    slidesPerView: slideNum,
                    spaceBetween: 30,
                    pagination: {
                        el: ".swiper-pagination",
                        type: "fraction",
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            }

            checkSize = (winSize) => {
                var slideNum = 3
                if (winSize > 999) {
                    slideNum = 3
                } else if (winSize < 1000 && winSize > 780) {
                    slideNum = 2
                } else if (winSize < 781) {
                    slideNum = 1
                }
                makeSwipers(slideNum)
            }
            checkSize(window.innerWidth)
            console.log(window.innerWidth);

            window.onresize = () => {
                checkSize(window.innerWidth)
                console.log(window.innerWidth);
            }
        </script>

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
