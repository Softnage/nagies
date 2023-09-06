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
                <h2 class="my-4">Edit Gallery</h2>
                <form action="{{ route('galleries.update', $gallery->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="form-group mb-1">
                        <label for="title">Gallery Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $gallery->title) }}" required>
                    </div>

                    <div class="form-group mb-1">
                        <label for="images">Add or Update Images</label>
                        <input type="file" class="form-control-file" id="images" name="images[]" multiple
                            accept="image/*">
                        <small class="form-text text-muted">You can upload multiple images.</small>
                    </div>

                    <div class="row">
                        <label>Current Images</label>
                        <div class="gal">
                            @if ($gallery->images->count() > 0)
                                @foreach ($gallery->images as $image)
                                    <div class="">
                                        <div>
                                            <a href="{{ asset('storage/' . $image->path) }}">
                                                <img src="{{ asset('storage/' . $image->path) }}" alt="Gallery Image"
                                                    class="img-thumbnail">
                                            </a>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" name="delete_images[]"
                                                    value="{{ $image->id }}">
                                                <label class="form-check-label">Delete</label>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>No images available for this gallery.</p>
                            @endif
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
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
        function confirmDelete() {
            if (confirm("Are you sure you want to delete this gallery?")) {
                // If the user confirms, submit the form
                document.querySelector('form').submit();
            }
        }
    </script>

</body>

</html>
