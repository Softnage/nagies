<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<link rel="stylesheet" href="{{ asset('css/campus_and_location.css') }}" />
<title>Nagies - Campus & Location</title>

<body>
    @include('layouts.header')
    @include('layouts.navbar')
    <section>
        <div class="heading text-center">
            <h1>
                Campus & Location
            </h1>
            <h3>Basic School Campus</h3>
            <p>Plying the Kumasi-Obuasi highway, the school can be found on the new site road,
                opposite the Goil fuel station. <br>
                <b>GPS Address:</b> AK-654-4297
            </p>

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
        <div class="heading text-center">

            <h3>Pre-School Campus</h3>
            <p> On the Dr. Osei Kuffour Bypass, you'll spot our
                building located next to the Melcom Shopping Mall
                and Ernest Chemist Limited <br>
                <b>GPS Address:</b>AK-178-4384
            </p>

        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.8059455495363!2d-1.6399513254033695!3d6.670951521433101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb97280c34be35%3A0xf05f6c0224ecb2c4!2sNagies%20Angels%20Educational%20Centre!5e0!3m2!1sen!2sgh!4v1685973925995!5m2!1sen!2sgh"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    @include('layouts.footer')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
