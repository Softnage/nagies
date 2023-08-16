<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="head">
            <h3 class=" text-white mt-5 mb-3" style="margin-left: 1.5rem; font-size:20px; font-weight:600">NAGGIES ANGELS
                EDUCATIONAL CENTER</h3>
            <div class="brand-logo d-flex align-items-center">
                <a href="./index.html" class="text-nowrap logo-img">
                    <img src="{{ asset('assets/images/logos/logo.jpg') }}" width="100%" height="200" alt=""
                        style="border-radius: 10px" />
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>

        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar mt-5" data-simplebar="">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('news.index') }}" aria-expanded="false">
                        <span>
                            <i class="fas fa-newspaper"></i>
                        </span>
                        <span class="hide-menu">News</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('events.index') }}" aria-expanded="false">
                        <span>
                            <i class="far fa-calendar-alt"></i>
                        </span>
                        <span class="hide-menu">Events</span>
                    </a>
                </li>
                <li class="sidebar-item mt-5">
                    <a class="sidebar-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span>
                            <i class="fas fa-sign-out-alt"></i>
                        </span>
                        <span class="hide-menu">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->
