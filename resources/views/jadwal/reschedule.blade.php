@extends('main')


@section('container')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    <style>
        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            min-width: 1000px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            min-width: 100%;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a,
        .pagination li.active a.page-link {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }

        /* Custom checkbox */
        .custom-checkbox {
            position: relative;
        }

        .custom-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            margin: 5px 0 0 3px;
            z-index: 9;
        }

        .custom-checkbox label:before {
            width: 18px;
            height: 18px;
        }

        .custom-checkbox label:before {
            content: '';
            margin-right: 10px;
            display: inline-block;
            vertical-align: text-top;
            background: white;
            border: 1px solid #bbb;
            border-radius: 2px;
            box-sizing: border-box;
            z-index: 2;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 3px;
            width: 6px;
            height: 11px;
            border: solid #000;
            border-width: 0 3px 3px 0;
            transform: inherit;
            z-index: 3;
            transform: rotateZ(45deg);
        }

        .custom-checkbox input[type="checkbox"]:checked+label:before {
            border-color: #03A9F4;
            background: #03A9F4;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            border-color: #fff;
        }

        .custom-checkbox input[type="checkbox"]:disabled+label:before {
            color: #b8b8b8;
            cursor: auto;
            box-shadow: none;
            background: #ddd;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
            font-size: 14px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
        }
    </style>

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

    <!--container white Title-->
    <section class="service-overview section">
        <div class="container">
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="service-overview section">

                <div class="container text-center">
                    <h6>
                    PENYAMPAIAN INFORMASI JADWAL
                    </h6>
                    <h1><br></h1>
                </div>
                <div class="container">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addDataModal">Tambah Data</button>
                    </div>
                </div>
                <div class="table-container">
                    <div class="table-wrapper">
                        <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm "
                            cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="vertical-align:middle;text-align:center;">Tanggal</th>
                                    <th style="vertical-align:middle;text-align:center;">Informsi Perubahan Jadwal</th>
                                    <th style="vertical-align:middle;text-align:center;">Sasaran</th>
                                    <th style="vertical-align:middle;text-align:center;">Evaluasi</th>
                                    <th style="vertical-align:middle;text-align:center;">Tindak Lanjut</th>
                                    <th style="vertical-align:middle;text-align:center;">Keterangan</th>
                                    <th style="vertical-align:middle;text-align:center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                        
                                @if ($data)
                                    @foreach ($data as $item)
                                        <tr>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <?php
                                                $originalDate = $item->date;
                                                $carbonDate = \Carbon\Carbon::createFromFormat('Y-m-d', $originalDate);
                                                ?>
                                                {{ $carbonDate->format('d-m-Y') }}
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">{{ $item->info_reschedule }}</td>
                                            <td style="vertical-align:middle;text-align:center;">{{ $item->target }}</td>
                                            <td style="vertical-align:middle;text-align:center;">{{ $item->evaluation }}</td>
                                            <td style="vertical-align:middle;text-align:center;">{{ $item->follow_up }}</td>
                                            <td style="vertical-align:middle;text-align:center;">{{ $item->information }}</td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <div style="display: flex;  gap: 10px;">
                                                    <button class="btn btn-success edit-btn" data-toggle="modal" data-target="#updateDataModal" data-id="{{ $item->id }}">Edit</button>
                                                    <button class="btn btn-danger delete-btn" data-toggle="modal" data-target="#deleteDataModal" data-id="{{ $item->id }}">Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div id="addDataModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="/reschedule/{{ $title }}">
                    @csrf
                    <div class="modal-header">						
                        <h4 class="modal-title">Tambah Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" id="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}" required>
                            @error('date')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Informasi Perubahan Jadwal</label>
                            <input type="text" id="info_reschedule" name="info_reschedule" class="form-control @error('place') is-invalid @enderror" value="{{ old('info_reschedule') }}" required>
                            @error('info_reschedule')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Sasaran</label>
                            <input type="text" id="target" name="target" class="form-control @error('target') is-invalid @enderror" value="{{ old('target') }}" required>
                            @error('target')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Evaluasi</label>
                            <input type="text" id="evaluation" name="evaluation" class="form-control @error('evaluation') is-invalid @enderror" value="{{ old('evaluation') }}" required>
                            @error('evaluation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tindak Lanjut</label>
                            <input type="text" id="follow_up" name="follow_up" class="form-control @error('follow_up') is-invalid @enderror" value="{{ old('follow_up') }}" required>
                            @error('follow_up')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" id="information" name="information" class="form-control @error('information') is-invalid @enderror" value="{{ old('information') }}" required>
                            @error('information')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="updateDataModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('reschedule.update', ['prog' => $title]) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="editItemId" name="editItemId" value="">
                    <div class="modal-header">						
                        <h4 class="modal-title">Edit Data</h4>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" id="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}">
                            @error('date')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Informasi Perubahan Jadwal</label>
                            <input type="text" id="info_reschedule" name="info_reschedule" class="form-control @error('place') is-invalid @enderror" value="{{ old('info_reschedule') }}">
                            @error('info_reschedule')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Sasaran</label>
                            <input type="text" id="target" name="target" class="form-control @error('target') is-invalid @enderror" value="{{ old('target') }}">
                            @error('target')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Evaluasi</label>
                            <input type="text" id="evaluation" name="evaluation" class="form-control @error('evaluation') is-invalid @enderror" value="{{ old('evaluation') }}">
                            @error('evaluation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tindak Lanjut</label>
                            <input type="text" id="follow_up" name="follow_up" class="form-control @error('follow_up') is-invalid @enderror" value="{{ old('follow_up') }}">
                            @error('follow_up')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" id="information" name="information" class="form-control @error('information') is-invalid @enderror" value="{{ old('information') }}">
                            @error('information')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="deleteDataModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="deleteForm" method="post" action="{{ route('reschedule.delete', ['prog' => $title]) }}">
                    @method('delete')
                    @csrf
                    <input type="hidden" id="deleteItemId" name="deleteItemId" value="">
                    <div class="modal-header">                        
                        <h4 class="modal-title">Delete Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">                    
                        <p>Apakah Anda yakin ingin menghapus data ini?</p>
                        <p class="text-warning"><small>Data yang terhapus tidak bisa di kembalikan.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>

        $(document).on('click', '.edit-btn', function () {
            var itemId = $(this).data('id'); // Ambil ID dari data-id tombol edit yang diklik
            $('#editItemId').val(itemId); // Setel ID tersebut sebagai nilai pada input hidden di dalam modal
        });

        $(document).on('click', '.delete-btn', function () {
            var itemId = $(this).data('id'); // Ambil ID dari data-id tombol delete yang diklik
            $('#deleteItemId').val(itemId); // Setel ID tersebut sebagai nilai pada input hidden di dalam modal
        });
    
    </script>
        
@endsection
