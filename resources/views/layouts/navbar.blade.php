<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand navbar-logo" href="index.php">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        About Us <i class="fa-solid fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('welcome_message') }}">Welcome Message</a></li>
                        <li><a class="dropdown-item" href="{{ route('vision_and_mission') }}">Our Vision & Mission</a>
                        </li>
                        <!-- <li><a class="dropdown-item" href="gallery.php">Photo Gallery</a></li> -->
                        <li><a class="dropdown-item" href="{{ route('campus_and_location') }}">Campus & Location</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{ route('admission') }}">Admissions</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Academics <i class="fa-solid fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('curriculum') }}">Curriculum</a></li>
                        <li><a class="dropdown-item" href="{{ route('pre_school') }}">Pre-School</a></li>
                        <li><a class="dropdown-item" href="{{ route('primary') }}">Primary</a></li>
                        <li><a class="dropdown-item" href="{{ route('jhs') }}">JHS</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page"
                        href="{{ route('co_curricular_activities') }}">Co-curricular
                        Activities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>


        </div>
    </div>
</nav>

<style>

</style>
