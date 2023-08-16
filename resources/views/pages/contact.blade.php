<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
<title>Nagies - Contact Us</title>

<body>
    @include('layouts.header')
    @include('layouts.navbar')

    <section>
        <div class="heading">
            <h1>Contact Us</h1>
        </div>
        <div class="grid">
            <div class="one">
                <h4>Phone Number</h4>
                <a href="tel:0322020536">032 202 0536 (Preschool)</a>
                <br>
                <a href="tel:0322397408">03223 - 97408 (Basic School)</a>
            </div>

            <div class="one">
                <h4>Email</h4>
                <a href="mailto:nagiesangels@yahoo.com">nagiesangels@yahoo.com</a>
            </div>

            <div class="one">
                <h4>Location:(Basic School)</h4>
                <p>
                    Plot 11, Anyinam
                    <br>
                    AK-654-4297
                </p>
            </div>

            <div class="one">
                <h4>Location:(Pre-School)</h4>
                <p>
                    Dr. Osei Tuffour Bypass,
                    <br>
                    AK-178-4384
                </p>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d126818.91848450972!2d-1.712152594901425!3d6.6355949862370585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0xfdb90e14b095a59%3A0x13d505bb2db922ef!2sJ9P5%2B65J%2C%20Kumasi!3m2!1d6.6355999!2d-1.642112!5e0!3m2!1sen!2sgh!4v1671275921067!5m2!1sen!2sgh"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>


    <section>
        <div class="form">
            <!-- <h1>Contact Us</h1> -->
            <form id="contactForm">
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">Name:</label>
                        <br>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="number">Phone Number:</label>
                        <br>
                        <input type="number" id="number" name="number" min="0"
                            placeholder="Enter your phone number" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email Address:</label>
                        <br>
                        <input type="email" id="email" name="email" placeholder="Enter your email address"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="subject">Subject:</label>
                        <br>
                        <input type="text" id="subject" name="subject" placeholder="Enter your subject" required>
                    </div>
                    <div class="col-12">
                        <label for="message">Message</label>
                        <br>
                        <textarea id="message" name="message" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" id="submitBtn">
                            Send Message
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    @include('layouts.footer')

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init('kDb7y_nzBRdQ-Vj4H');
        })();

        document.getElementById("contactForm").addEventListener("submit", function(event) {
            event.preventDefault();
            sendMail();
        });

        function sendMail() {
            var submitBtn = document.getElementById("submitBtn");
            var originalBtnText = submitBtn.innerHTML; // Store the original button value
            submitBtn.disabled = true; // Disable the button to prevent multiple submissions
            submitBtn.innerHTML = "Please Wait..."; // Change the button value to "Please Wait"

            var params = {
                name: document.getElementById("name").value,
                number: document.getElementById("number").value,
                email: document.getElementById("email").value,
                subject: document.getElementById("subject").value,
                message: document.getElementById("message").value,
            };

            const serviceID = "service_84y3f98";
            const templateID = "template_sv9iejb";

            emailjs.send(serviceID, templateID, params)
                .then((res) => {
                    document.getElementById("name").value = "";
                    document.getElementById("email").value = "";
                    document.getElementById("message").value = "";
                    document.getElementById('number').value = "";
                    document.getElementById('subject').value = "";
                    console.log(res);
                    alert("Your message was sent successfully!");
                })
                .catch((err) => console.log(err))
                .finally(() => {
                    submitBtn.disabled = false; // Re-enable the button
                    submitBtn.innerHTML = originalBtnText; // Restore the original button value
                });
        }
    </script>
</body>

</html>


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
