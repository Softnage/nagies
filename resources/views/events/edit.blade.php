<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Naggies</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('layouts.sidebar')
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
            <!--  Header End -->

            <div class="container-fluid">
                <h2>Edit Event</h2>
                <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $event->title }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" rows="5">{{ $event->description }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="start_time">Start Time</label>
                        <input type="datetime-local" name="start_time" class="form-control"
                            value="{{ \Carbon\Carbon::parse($event->start_time)->format('Y-m-d\TH:i') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="end_time">End Time</label>
                        <input type="datetime-local" name="end_time" class="form-control"
                            value="{{ \Carbon\Carbon::parse($event->end_time)->format('Y-m-d\TH:i') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control-file" onchange="previewImage(event)">
                    </div>
                    <div class="mb-3">
                        @if ($event->image)
                            <img id="imagePreview" src="{{ asset('storage/' . $event->image) }}" alt="Preview"
                                style="width: 100px; height: 100px; display: block; margin-top: 10px; object-fit:cover; border-radius:10px">
                        @else
                            <img id="imagePreview" src="#" alt="Preview"
                                style="max-width: 100%; max-height: 200px; display: none;">
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.style.display = 'block';
            imagePreview.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (session('success'))
            toastr.options = {
                "positionClass": "toast-bottom-right",
                "timeOut": 3000, // Display time in milliseconds (3 seconds)
                "closeButton": true,
                "progressBar": true,
            };
            toastr.success('{{ session('success') }}');
        @endif
    </script>

</body>

</html>
