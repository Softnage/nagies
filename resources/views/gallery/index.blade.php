<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Naggies</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
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

            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <h2>Gallery</h2>
                    <a href="{{ route('galleries.create') }}" class="btn btn-success mb-3">
                        <i class="fas fa-plus"></i> Create Gallery
                    </a>
                </div>
                <div class="row mt-4">
                    @foreach ($galleries as $gallery)
                        <div class="galcard">
                            <h3 class="card-title mb-3 mt-5" style="font-size: 1.5rem; font-weight: 700">
                                {{ $gallery->title }}</h3>
                            <div class="gal mb-3">
                                @if ($gallery->images->count() > 0)
                                    @foreach ($gallery->images as $image)
                                        <a href="{{ asset('storage/' . $image->path) }}">
                                            <img src="{{ asset('storage/' . $image->path) }}" alt="Gallery Image"
                                                class="card-img-top">
                                        </a>
                                    @endforeach
                                @else
                                    <p>No images available for this gallery.</p>
                                @endif
                            </div>
                            <div class="card-body">
                                <a href="{{ route('galleries.edit', $gallery->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="confirmDelete()">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.btn-danger');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    if (!confirm("Are you sure you want to delete this gallery?")) {
                        event.preventDefault(); // Prevent form submission if canceled
                    }
                });
            });
        });
    </script>

</body>

</html>
