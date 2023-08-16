<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<link rel="stylesheet" href="{{ asset('css/pre_school.css') }}" />
<title> Pre-School- Nagies Angels Educational Centre </title>

<body>
    @include('layouts.header')
    @include('layouts.navbar')

    <section>
        <div class="heading">
            <h1>Pre-School</h1>
            <p>
                Nagie’s Angels Pre-School welcomes children from age one (1) up to (five) 5 years, into our
                Crèche class all the way up to our Kindergarten 2 (KG2) class. Our qualified staff offers a
                safe, caring, and stimulating environment for children to learn and develop.
                <br>

                There are seven areas of learning and development we instill into our learners, which make
                up the skills, knowledge, and experiences appropriate for them as they grow, learn, and
                develop. Using the Ghana National Curriculum for preschools, our learners receive:
            </p>
        </div>
    </section>

    <section>
        <div class="pre_school">
            <h2>Communication and Language Development:</h2>
            <p>
                Involves giving children opportunities to experience a rich language environment, to
                develop their confidence and skills in expressing themselves, to speak and listen, in
                a range of situations.
            </p>
            <h2>Physical Development:</h2>
            <p>
                Involves providing opportunities for young children to be active and interactive; and
                to develop their coordination, control, and movement. Children must also be helped to
                understand the importance of physical activity.
            </p>
            <h2> Personal, Social and Emotional Development:</h2>
            <p>
                These involve helping children to develop a positive sense of themselves, and others;
                to form positive relationships and develop respect for others; to develop social skills
                and learn how to manage their sentiments; to understand appropriate behaviour in groups;
                and to have confidence in their own abilities.
            </p>
            <h2>Literacy Development:</h2>
            <p>
                Involves encouraging children to link sounds and letters and to begin to read and write.
                Children must be given access to a wide range of reading materials (books, poems, and other
                written materials) to ignite their interest.
            </p>
            <h2> Numeracy:</h2>
            <p>
                Involves providing children with opportunities to develop and improve their skills in
                counting, understanding and using numbers, calculating simple addition and subtraction
                problems, and describing shapes amongst many others.
            </p>
            <h2> Understanding The World:</h2>
            <p>
                Involves guiding children to make sense of their physical world and their community through
                opportunities to explore, observe and find out about people, places, technology and the
                environment.
            </p>
            <h2> Expressive Arts and Design:</h2>
            <p>
                Involves enabling children to explore and play with a wide range of media and materials, as
                well as providing opportunities and encouragement for sharing their thoughts, ideas, and
                feelings through a variety of activities. Our Spacious classrooms and educational materials
                encourage curiosity and discovery. Your child will progress at a pace that is unique and
                perfect. In a patient and kind nurturing environment, children learn to take responsibility
                for their growth academically and emotionally. Again, our highly qualified, dedicated, and
                robust teachers train children to perfect personal responsibilities like hand-washing,
                setting the table, and also how to interact with others as they dress, clean, ask for help,
                and participate in the classroom. Through this, they develop self-esteem and independence.
                Nagie’s Angels is an excellent institution with all the needed facilities and resources for
                your child to develop the five needed skills for growth and development by every child.
                (i.e. Communication, Concentration, Curiosity, Confidence, and Cooperation)
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
