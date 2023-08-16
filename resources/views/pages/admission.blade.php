<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<link rel="stylesheet" href="{{ asset('css/admission_guideline.css') }}" />
<link rel="stylesheet" href="{{ asset('css/how_to_apply.css') }}" />
<title>How to Apply - Nagies Angels Educational Centre </title>

<body>
    @include('layouts.header')
    @include('layouts.navbar')
    <section>
        <div class="row how">
            <div class="col-md-7">
                <h2>ADMISSION PROCESS AT NAEC</h2>
                <p>
                    Dear prospective parent, gaining admission for your ward at Nagie’s Angels is a simple but
                    straightforward step-by-step approach. Please visit any of our two campuses (refer to directional
                    map
                    under location tab) to meet with our Administrator to begin your journey at our school. You can
                    call:
                    (+233)3220 20536, to speak with our Pre-school Administrator or (+233)3223 97408, to speak with our
                    Basic School Administrator. Available times are weekdays from 8am to 3pm.
                </p>
                <h3>PRE-SCHOOL PROCESS</h3>
                <li>
                    <b>Contact the school: </b>
                    Call the school to book a visit date or just walk in to enquire about
                    vacancy in the class of choice for your ward and other school information.
                </li>
                <li>
                    <b> Purchase an application form and receive your bill:</b> Once vacancy is assured
                    immediately or at a later date, an admission letter and bill will be issued and an
                    application form will be sold to you.
                </li>
                <li>
                    <b> Fill out the application form:</b> Complete the application form accurately and provide all
                    the necessary information.
                </li>
                <li>
                    <b> Submit supporting documents:</b> Gather all the required supporting documents, such as
                    copies of your ward’s birth certificate, passport picture with a white background and
                    weighing card, and submit them along with the application form.
                </li>
                <li>
                    <b> Bring along your ward:</b> At your next visit, the administrator will have a brief oral
                    interview with your ward to determine the suitability of the class requested for and your
                    ward’s abilities.
                </li>
                <li>
                    <b> Make payment of fees:</b> At this point, admission and school fees should be paid in full at
                    any of the school’s four (4) banks, or via MTN MOMO payments. Details are indicated on
                    the bill.
                <li>
                    <b>Present payment evidence for school receipt and uniforms:</b> Show evidence of fees
                    payment at the Accounts office of the school and pass trough the school shop at the Pre-
                    school, to pick up uniforms.
                </li>
                <li>
                    <b>Finally, we look forward to your ward’s first day at school: </b>Your ward is now welcome
                    to discover the Nagie’s Angels side of life, as we are ready to cater for the academic,
                    moral, physical, social and spiritual needs of your ward.
                </li>
            </div>
            <div class="col-md-5 how_img">
                <img src="{{ asset('images/pre_school_building.jpg') }}" alt="" width="100%">
            </div>
        </div>
    </section>

    <section>
        <div class="row how">
            <div class="col-md-5 how_img">
                <img src="{{ asset('images/basic_school.jpg') }}" alt="" width="100%">
            </div>

            <div class="col-md-7">

                <h3>BASIC SCHOOL PROCESS</h3>
                <li>
                    <b> Contact the school: </b>Call the school to book a visit date or just walk in to enquire about
                    vacancy in the class of choice for your ward and other school information.
                </li>
                <li>
                    <b>Take the entrance examination:</b> Bring your ward to sit for the entrance examination on
                    the scheduled date.
                </li>
                <li>
                    <b>Await admission decision:</b> Wait for the school to call you with information about your
                    ward’s admission decision.
                </li>
                <li>
                    <b>Accept admission offer: </b>If your ward is admitted, accept the offer by visiting the school
                    to complete remaining steps.
                </li>
                <li>
                    <b>Receive your ward’s admission package:</b> You will be provided with an admission letter,
                    application form and bill.
                </li>
                <li>
                    <b>Fill out the application form: </b>Complete the application form accurately and provide all
                    the necessary information.
                <li>
                    <b>Make payment of fees: </b>At this point, admission and school fees should be paid in full at
                    any of the school’s four (4) banks, or via MTN MOMO payments. Details are indicated on
                    the bill.
                </li>
                <li>
                    <b>Submit supporting documents and evidence of fees payment:</b> Gather all the required
                    supporting documents, such as copies of your ward’s birth certificate, passport picture
                    with a white background and cumulative record from the previous school, and submit
                    them along with the completed application form and proof of fees payment.
                </li>
                <li>
                    <b>Collect books and uniforms:</b> Your ward will be provided with all text books and
                    educational materials required. Visit the school shop at the Pre-school campus to
                    purchase uniforms separately.
                </li>
                <li>
                    <b>Finally, we look forward to your ward’s first day at school:</b> Your ward is now welcome
                    to discover the Nagie’s Angels side of life, as we are ready to cater for the academic,
                    moral, physical, social and spiritual needs of your ward.
                </li>
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
