@extends('main')


@section('container')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

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
            {{-- filter data --}}
            <form>
                <div class="form-row align-items-center">
                    <div class="col-sm-3 my-1">
                        <label class="my-1 mr-2" for="inlineFormInputYear">Tahun</label>
                        <input type="number" class="form-control" id="year" name="year" required>
                    </div>
                    <div class="col-sm-3 my-1">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Indikator</label>
                        <select id="indicator" name="indicator" class="custom-select my-1 mr-sm-2" required>
                            @if ($filter_indicator)
                                @foreach ($filter_indicator as $no => $item)
                                    <option value={{ $item->id }}>{{ $item->name }}</option>
                                @endforeach
                            @else
                                <option value=""> </option>
                            @endif
                            <option value="tambah">Tambah Indicator</option>
                        </select>
                    </div class="col-sm-3 my-1">
                    <div class="col-sm-3 my-1">
                        <div class="col-sm-3 my-1">
                        </div>
                    </div>
                </div>
            </form>
            <button type="" class="btn btn-primary mb-3" onclick="redirectToLinkFilter()">Filter</button>
            {{-- filter data end --}}


            <div class="service-overview section">

                <div class="container text-center">
                    <h6>
                        CAPAIAN STANTARD PELAYANAN MINIMAL BIDANG KESEHATAN
                    </h6>
                    <h6>
                        UPTD PUSKESMAS GUBUG 2 TAHUN {{ $year }}
                    </h6>
                    <h1><br></h1>
                </div>
                <div class="container">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary mb-3" onclick="redirectToLinkEdit()">Edit Data</button>
                    </div>
                </div>
                <div class="table-container">
                    <div class="table-wrapper">
                        <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm "
                            cellspacing="0">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="vertical-align:middle;text-align:center;">Indicator</th>
                                    <th rowspan="2" style="vertical-align:middle;text-align:center;">Target Tahunan</th>
                                    <th rowspan="2" style="vertical-align:middle;text-align:center;  border-right: 1px solid;">Sasaran</th>
                                    <th colspan="4" style="text-align:center; border-right: 1px solid;">Januari</th>
                                    <th colspan="4" style="text-align:center; border-right: 1px solid;">Februari</th>
                                    <th colspan="4" style="text-align:center; border-right: 1px solid;">Maret</th>
                                    <th colspan="4" style="text-align:center; border-right: 1px solid;">April</th>
                                    <th colspan="4" style="text-align:center; border-right: 1px solid;">Mei</th>
                                    <th colspan="4" style="text-align:center; border-right: 1px solid;">Juni</th>
                                    <th colspan="4" style="text-align:center; border-right: 1px solid;">Juli</th>
                                    <th colspan="4" style="text-align:center; border-right: 1px solid;">Agustus</th>
                                    <th colspan="4" style="text-align:center; border-right: 1px solid;">September</th>
                                    <th colspan="4" style="text-align:center; border-right: 1px solid;">Oktober</th>
                                    <th colspan="4" style="text-align:center; border-right: 1px solid;">November</th>
                                    <th colspan="4" style="text-align:center; border-right: 1px solid;">Desember</th>
                                </tr>
                                <tr>
                                    <th style="text-align:center;">SRN</th>
                                    <th style="text-align:center;">ABS</th>
                                    <th style="text-align:center;">KOM</th>
                                    <th style="text-align:center;  border-right: 1px solid;">%</th>
                                    <th style="text-align:center;">SRN</th>
                                    <th style="text-align:center;">ABS</th>
                                    <th style="text-align:center;">KOM</th>
                                    <th style="text-align:center; border-right: 1px solid;">%</th>
                                    <th style="text-align:center;">SRN</th>
                                    <th style="text-align:center;">ABS</th>
                                    <th style="text-align:center;">KOM</th>
                                    <th style="text-align:center; border-right: 1px solid;">%</th>
                                    <th style="text-align:center;">SRN</th>
                                    <th style="text-align:center;">ABS</th>
                                    <th style="text-align:center;">KOM</th>
                                    <th style="text-align:center; border-right: 1px solid;">%</th>
                                    <th style="text-align:center;">SRN</th>
                                    <th style="text-align:center;">ABS</th>
                                    <th style="text-align:center;">KOM</th>
                                    <th style="text-align:center; border-right: 1px solid;">%</th>
                                    <th style="text-align:center;">SRN</th>
                                    <th style="text-align:center;">ABS</th>
                                    <th style="text-align:center;">KOM</th>
                                    <th style="text-align:center; border-right: 1px solid;">%</th>
                                    <th style="text-align:center;">SRN</th>
                                    <th style="text-align:center;">ABS</th>
                                    <th style="text-align:center;">KOM</th>
                                    <th style="text-align:center; border-right: 1px solid;">%</th>
                                    <th style="text-align:center;">SRN</th>
                                    <th style="text-align:center;">ABS</th>
                                    <th style="text-align:center;">KOM</th>
                                    <th style="text-align:center; border-right: 1px solid;">%</th>
                                    <th style="text-align:center;">SRN</th>
                                    <th style="text-align:center;">ABS</th>
                                    <th style="text-align:center;">KOM</th>
                                    <th style="text-align:center; border-right: 1px solid;">%</th>
                                    <th style="text-align:center;">SRN</th>
                                    <th style="text-align:center;">ABS</th>
                                    <th style="text-align:center;">KOM</th>
                                    <th style="text-align:center; border-right: 1px solid;">%</th>
                                    <th style="text-align:center;">SRN</th>
                                    <th style="text-align:center;">ABS</th>
                                    <th style="text-align:center;">KOM</th>
                                    <th style="text-align:center; border-right: 1px solid;">%</th>
                                    <th style="text-align:center;">SRN</th>
                                    <th style="text-align:center;">ABS</th>
                                    <th style="text-align:center;">KOM</th>
                                    <th style="text-align:center; border-right: 1px solid;">%</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="vertical-align:middle;text-align:center;">{{ $indicator ? $indicator->name : 0 }}</td>
                                    
                                    @if (!$data)
                                    <td style="vertical-align : middle;text-align:center;">0%</td>
                                    <td style="vertical-align : middle;text-align:center; border-right: 1px solid;">0</td>
                                    @foreach (range(1, 12) as $i)
                                            <td style="vertical-align : middle;text-align:center;">0</td>
                                            <td style="vertical-align : middle;text-align:center;">0</td>
                                            <td style="vertical-align : middle;text-align:center;">0</td>
                                            <td style="vertical-align : middle;text-align:center; border-right: 1px solid;">0%</td>
                                        @endforeach
                                    @else
                                        <td style="vertical-align:middle;text-align:center;">
                                            {{ $data->precentation_target }}%
                                        </td>
                                        <td style="vertical-align:middle;text-align:center; border-right: 1px solid;">
                                            {{ $data->target }}
                                        </td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->target01 }}
                                        </td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute01 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute01 }}</td>
                                        <td style="vertical-align : middle;text-align:center; border-right: 1px solid;">
                                            {{ round(($data->absolute01 / $data->target) * $data->precentation_target) }}%
                                        </td>

                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->target02 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute02 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute02 + $data->absolute02 }}</td>
                                        <td style="vertical-align : middle;text-align:center; border-right: 1px solid;">
                                            {{ round(($data->absolute02 / $data->target) * $data->precentation_target) }}%
                                        </td>

                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->target03 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute03 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute03 + $data->absolute03 }}</td>
                                        <td style="vertical-align : middle;text-align:center; border-right: 1px solid;">
                                            {{ round(($data->absolute03 / $data->target) * $data->precentation_target) }}%
                                        </td>

                                        <td style="vertical-align : middle;text-align:center;">{{ $data->target04 }}
                                        </td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute04 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute04 + $data->absolute04 }}</td>
                                        <td style="vertical-align : middle;text-align:center; border-right: 1px solid;">
                                            {{ round(($data->absolute04 / $data->target) * $data->precentation_target) }}%
                                        </td>

                                        <td style="vertical-align : middle;text-align:center;">{{ $data->target05 }}
                                        </td>
                                        <td style="vertical-align : middle;text-align:center;">{{ $data->absolute05 }}
                                        </td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute05 + $data->absolute04 }}</td>
                                        <td style="vertical-align : middle;text-align:center; border-right: 1px solid;">
                                            {{ round(($data->absolute05 / $data->target) * $data->precentation_target) }}%
                                        </td>

                                        <td style="vertical-align : middle;text-align:center;">{{ $data->target06 }}
                                        </td>
                                        <td style="vertical-align : middle;text-align:center;">{{ $data->absolute06 }}
                                        </td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute06 + $data->absolute05 }}</td>
                                        <td style="vertical-align : middle;text-align:center; border-right: 1px solid;">
                                            {{ round(($data->absolute06 / $data->target) * $data->precentation_target) }}%
                                        </td>

                                        <td style="vertical-align : middle;text-align:center;">{{ $data->target07 }}
                                        </td>
                                        <td style="vertical-align : middle;text-align:center;">{{ $data->absolute07 }}
                                        </td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute07 + $data->absolute07 }}</td>
                                        <td style="vertical-align : middle;text-align:center; border-right: 1px solid;">
                                            {{ round(($data->absolute07 / $data->target) * $data->precentation_target) }}%
                                        </td>

                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->target08 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute08 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute08 + $data->absolute07 }}</td>
                                        <td style="vertical-align : middle;text-align:center; border-right: 1px solid;">
                                            {{ round(($data->absolute08 / $data->target) * $data->precentation_target) }}%
                                        </td>

                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->target09 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute09 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute09 + $data->absolute08 }}</td>
                                        <td style="vertical-align : middle;text-align:center; border-right: 1px solid;">
                                            {{ round(($data->absolute09 / $data->target) * $data->precentation_target) }}%
                                        </td>

                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->target10 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute10 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute10 + $data->absolute09 }}</td>
                                        <td style="vertical-align : middle;text-align:center; border-right: 1px solid;">
                                            {{ round(($data->absolute10 / $data->target) * $data->precentation_target) }}%
                                        </td>

                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->target11 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute11 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute11 + $data->absolute10 }}</td>
                                        <td style="vertical-align : middle;text-align:center; border-right: 1px solid;">
                                            {{ round(($data->absolute11 / $data->target) * $data->precentation_target) }}%
                                        </td>

                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->target12 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute12 }}</td>
                                        <td style="vertical-align : middle;text-align:center;">
                                            {{ $data->absolute12 + $data->absolute11 }}</td>
                                        <td style="vertical-align : middle;text-align:center; border-right: 1px solid;">
                                            {{ round(($data->absolute12 / $data->target) * $data->precentation_target) }}%
                                        </td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Service Section-->

    <section class="service-section bg-gray section">
        <div class="container ">
            <div class="row justify-content-center">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                <div class="service-overview">
                    <canvas id="myChart"
                        style="width:100%;min-width:800px;align-items:center;background-position: center"></canvas>
                </div>
                <script>
                    var yValuesCapaian = [
                        {{ $data ? $data->absolute01 : 0 }},
                        {{ $data ? $data->absolute02 : 0 }},
                        {{ $data ? $data->absolute03 : 0 }},
                        {{ $data ? $data->absolute04 : 0 }},
                        {{ $data ? $data->absolute05 : 0 }},
                        {{ $data ? $data->absolute06 : 0 }},
                        {{ $data ? $data->absolute06 : 0 }},
                        {{ $data ? $data->absolute08 : 0 }},
                        {{ $data ? $data->absolute09 : 0 }},
                        {{ $data ? $data->absolute10 : 0 }},
                        {{ $data ? $data->absolute11 : 0 }},
                        {{ $data ? $data->absolute12 : 0 }},
                    ]

                    var yValuesTarget = [
                        {{ $data ? $data->target01 : 0 }},
                        {{ $data ? $data->target02 : 0 }},
                        {{ $data ? $data->target03 : 0 }},
                        {{ $data ? $data->target04 : 0 }},
                        {{ $data ? $data->target05 : 0 }},
                        {{ $data ? $data->target06 : 0 }},
                        {{ $data ? $data->target07 : 0 }},
                        {{ $data ? $data->target08 : 0 }},
                        {{ $data ? $data->target09 : 0 }},
                        {{ $data ? $data->target10 : 0 }},
                        {{ $data ? $data->target11 : 0 }},
                        {{ $data ? $data->target12 : 0 }},
                    ]

                    var xValues = ["januari", "februari", "maret", "april", "mei", "juni", "juli", "agustus", "september", "oktober",
                        "november", "desember"
                    ];
                    new Chart("myChart", {
                        type: "bar",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: yValuesTarget,
                                backgroundColor: "green",
                                label: "target"
                            }, {
                                data: yValuesCapaian,
                                backgroundColor: "blue",
                                label: "capaian"
                            }]
                        },
                        options: {
                            legend: {
                                display: true
                            },
                            title: {
                                display: true,
                                text: "SPM BULANAN"
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </section>
    <div id="addIndicator" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="/indicator/{{ strtolower($path) }}">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Indicator</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Indicator</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}" required>
                            @error('name')
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

    <div id="indicator kosong" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="deleteForm" method="post">
                    @method('delete')
                    @csrf
                    <div class="modal-header">                        
                        <h4 class="modal-title">Indicator kosong</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">                    
                        <p>silahkan tambahkan indikator</p>
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

    <div id="indicatorKosong" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                 <div class="modal-header">                        
                        <h4 class="modal-title">Peringatan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">                    
                        <p>Indikator kosong</p>
                        <p class="text-warning"><small>Tambahkan indikator terlebih dahulu.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    </div>
            </div>
        </div>
    </div>
    
    <script>

        // popup add idicator
        $(document).ready(function() {
            var originalOption = $("#indicator").val();

            $("#indicator").on("change", function() {
                var selectedValue = $(this).val();

                if (selectedValue === "tambah") {
                    // Ubah nilai terpilih menjadi opsi pertama
                    $("#indicator").val($("#indicator option:first").val());
                    // Tampilkan modal popup
                    $("#addIndicator").modal("show");
                }
            });

            $("#indicatorForm").on("submit", function(event) {
                event.preventDefault();
                
                var newName = $("#name").val();
                var formAction = "/indicator/{{ strtolower($path) }}"; // Sesuaikan dengan rute yang benar
                
                $.ajax({
                    type: "POST",
                    url: formAction,
                    data: $(this).serialize(),
                    success: function(response) {
                        // Tanggapan sukses, tambahkan opsi baru di awal elemen select
                        $("#indicator").prepend(`<option value="${newName}">${newName}</option>`);
                        // Ubah nilai terpilih menjadi opsi pertama
                        $("#indicator").val($("#indicator option:first").val());
                        // Reset modal dan sembunyikan
                        $("#indicatorForm")[0].reset();
                        $("#addIndicator").modal("hide");
                    },
                    error: function(error) {
                        // Tanggapan kesalahan
                        console.log(error);
                    }
                });
            });

            $("#addIndicator").on("hidden.bs.modal", function() {
                // Ubah nilai terpilih menjadi opsi pertama
                $("#indicator").val($("#indicator option:first").val());
            });
        });

        // and popup add indicator

        // direct tofilter
        function redirectToLinkFilter() {
            var yearValue = document.getElementById("year").value;
            var indicatorValue = document.getElementById("indicator").value;

            // Lakukan pemeriksaan nilai-nilai
            if (yearValue && indicatorValue) {
                var link = "/spm/filter/spm/" + encodeURIComponent(yearValue) + "/" + encodeURIComponent(indicatorValue);
                window.location.href = link;
            } else {
                // Tampilkan modal error jika nilai tidak valid
                $("#errorModal").modal("show");
            }
        }

        function redirectToLinkEdit() {
        var yearValue = {{ $year }};
        var indicatorValue = {{ $indicator ? $indicator->id : 'null' }};
        
        if (indicatorValue === null) {
            $('#indicatorKosong').modal('show'); // Tampilkan modal jika indicator kosong
        } else {
            var link = "/spm/edit/spm/" + encodeURIComponent(yearValue) + "/" + encodeURIComponent(indicatorValue);
            window.location.href = link;
        }
    }

    </script>
@endsection
