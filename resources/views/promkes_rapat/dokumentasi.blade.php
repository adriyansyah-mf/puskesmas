@extends('main')

@section('container')

<!-- Page Title -->
<!-- ... (previous code) ... -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<meta name="csrf-token" content="{{ csrf_token() }}">

 <!--Page Title-->
 <section class="page-title text-center" style="background-image:url('{{ asset('images/background/3.jpg') }}')">
    <div class="container">
        <div class="title-text">
            <h1>{{ $title }}</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="/">HOME &nbsp;/</a>
                </li>
                <li>{{ $path }}</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Image Gallery -->
<div class="container my-5">
    <div class="jumbotron">
        <div class="container my-5">
            <div class="card-header d-flex justify-content-end">
                <!-- Button to Open Modal -->
                <a href="#" data-toggle="modal" data-target="#uploadModal" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Upload
                </a>
            </div>
            <div class="row">
                @foreach ($images as $image)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/uploads/dokumentasi/' . $image->name) }}" class="card-img-top" alt="{{ $image->title }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" data-toggle="modal" data-target="#imageModal" data-image-name="{{ $image->name }}" data-image-title="{{ $image->title }}" class="open-detail-link">{{ $image->title }}</a>
                            </h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- pagination --}}
            @if ($images->hasPages())
                <div class="d-flex justify-content-center">
                    {{ $images->links('vendor.pagination.custom') }}
                </div>
            @endif
        </div>
    </div>
</div>
<!-- End Image Gallery -->

<!-- Image Upload Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('uploadimage.dokumentasipromkes') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Choose Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile">Image Title</label>
                        <input type="text" class="form-control" id="exampleFormControlFile" name="title" placeholder="Enter title here">
                    </div>
                </div>
                <input type="hidden" name="type" value="dokumentasi_rapat_promkes" />
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Image Upload Modal -->



<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">    
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Responsive image container -->
                <div class="text-center">
                    <img id="modalImage" src="" alt="Image" class="img-fluid">
                </div>
                <!-- Open Detail button -->
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-primary" id="openDetailButton">Buka Detail</a>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-danger" id="deleteButton">Hapus</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JavaScript to open image modal and delete image -->

<script>
    $(document).ready(function() {
    var currentImageName = ''; // Store the current image name

    $('.open-detail-link').on('click', function() {
        var imageName = $(this).data('image-name');
        var imageTitle = $(this).data('image-title');

        // Truncate the title to a maximum of 25 characters
        var truncatedTitle = imageTitle.length > 25 ? imageTitle.substring(0, 25) + '...' : imageTitle;

        // Set the image source dynamically
        var image = document.getElementById('modalImage');
        image.src = "{{ asset('storage/uploads/dokumentasi') }}/" + imageName;

        // Set the truncated title
        var title = document.getElementById('imageModalLabel');
        title.textContent = truncatedTitle;

        // Set the href for the "Open Detail" button
        var openDetailButton = document.getElementById('openDetailButton');
        openDetailButton.href = "{{ asset('storage/uploads/dokumentasi') }}/" + imageName;

        // Set the href for the "Delete" button
        var deleteButton = document.getElementById('deleteButton');
        deleteButton.href = "{{ route('deleteimage.dokumentasipromkes') }}?name=" + imageName;

        // Store the current image name for later use
        currentImageName = imageName;

        // Open the modal
        $('#imageModal').modal('show');
    });

    $('#deleteButton').on('click', function(e) {
        e.preventDefault(); // Prevent the default link behavior

        // Check if there's a current image name to delete
        if (currentImageName) {
            // Use SweetAlert for confirmation
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: 'Data yang terhapus tidak akan bisa kembali!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Get the CSRF token value from the meta tag
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');

                    // Send an AJAX request to delete the image
                    $.ajax({
                        type: 'DELETE',
                        url: "{{ route('delete.image') }}",
                        data: {
                            name: currentImageName,
                            _token: csrfToken, // Include the CSRF token in the request
                        },
                        success: function(response) {
                            // Handle success here (e.g., remove the image from the gallery)
                            console.log('hahahaha');
                            // You can also close the modal or update the UI as needed
                            $('#imageModal').modal('hide');

                            // Reload the page after deletion
                            location.reload();
                        },
                        error: function(error) {
                            // Handle error here (e.g., display an error message)
                            console.error(error);
                        },
                    });

                    location.reload();
                }
            });
        }
    });
});

</script>




<!-- End Image Modal -->

@endsection
