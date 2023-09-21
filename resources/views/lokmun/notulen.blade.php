@extends('main')

@section('container')

<!-- Page Title -->
<!-- ... (previous code) ... -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Image Gallery -->
<div class="container my-5">
    <div class="jumbotron">
        <div class="container my-5">
            <div class="card-header d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">
                    <i class="fas fa-plus"></i> Upload
                </button>
            </div>
            <div class="row">
                @foreach ($images as $image)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/uploads/lokmun/' . $image->name) }}" class="card-img-top" alt="{{ $image->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $image->title }}</h5>
                            <!-- Add any additional information here -->
                        </div>
                        
                    </div>
                </div>
                @endforeach
            </div>
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
            <form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- End Image Upload Modal -->

@endsection
