@extends('main')

@section('container')
    <!--Page Title-->
    <section class="page-title text-center" style="background-image:url('{{ asset('images/background/3.jpg') }}');">
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
    <!-- Contact Section -->
    
    <section class="appoinment-section section">
        <div class="container text-center">
            <form name="contact_form" class="default-form contact-form"
                action="/spm/update/{{ $path }}/{{ $data ? $data->id : 0 }}/{{ $indicator->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-area">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Tahun</label>
                                        <div style="justify-content: space-between; align-items: center;">
                                            <div>
                                                <input class="form-control" type="number" name="year" id="year"
                                                    value="{{ $year ? $year : 0 }}">
                                            </div>
                                            <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Januari</label>
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Absolut</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="absolute01" id="absolute01"
                                                    value="{{ $data ? $data->absolute01 : 0 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Target</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="target01" id="target01"
                                                    value="{{ $data ? $data->target01 : 0 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="nama">Mei</label>
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Absolut</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="absolute05" id="absolute05"
                                                    value="{{ $data ? $data->absolute05 : 0 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Target</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="target05"
                                                    id="target05" value="{{ $data ? $data->target05 : 0 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="nama">September</label>
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Absolut</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="absolute09"
                                                    id="absolute09" value="{{ $data ? $data->absolute09 : 0 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Target</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="target09"
                                                    id="target09" value="{{ $data ? $data->target09 : 0 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">indicator</label>
                                        <div style="justify-content: space-between; align-items: center;">
                                            <div>
                                                <input class="form-control" type="text" name="indicator"
                                                    id="indicator" value="{{ $indicator ? $indicator->name : 0 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Februari</label>
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Absolut</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="absolute02"
                                                    id="absolute02" value="{{ $data ? $data->absolute02 : 0 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Target</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="target02"
                                                    id="target02" value="{{ $data ? $data->target02 : 0 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Juni</label>
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Absolut</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="absolute06"
                                                    id="absolute06" value="{{ $data ? $data->absolute06 : 0 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Target</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="target06"
                                                    id="target06" value="{{ $data ? $data->target06 : 0 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Oktober</label>
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Absolut</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="absolute10"
                                                    id="absolute10" value="{{ $data ? $data->absolute10 : 0 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Target</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="target10"
                                                    id="target10" value="{{ $data ? $data->target10 : 0 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <button type="submit" class="btn-style-one">simpan</button>
                                    </div>
                                </div>
                            </div>
                            {{-- end left card --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-area">
                            {{-- indicator --}}
                            <div class="row">
                                <div class="col-md-6">

                                </div>
                            </div>
                            {{-- end indicator --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Target Tahunan</label>
                                        <div style="justify-content: space-between; align-items: center;">
                                            <div>
                                                <input class="form-control" type="number" name="precentation_target"
                                                    id="precentation_target" value="{{ $data ? $data->precentation_target : 0 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Maret</label>
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Absolut</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="absolute03"
                                                    id="absolute03" value="{{ $data ? $data->absolute03 : 0 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Target</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="target03"
                                                    id="target03" value="{{ $data ? $data->target03 : 0 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Juli</label>
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Absolut</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="absolute07"
                                                    id="absolute07" value="{{ $data ? $data->absolute07 : 0 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Target</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="target07"
                                                    id="target07" value="{{ $data ? $data->target07 : 0 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">November</label>
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Absolut</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="absolute11"
                                                    id="absolute11" value="{{ $data ? $data->absolute11 : 0 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Target</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="target11"
                                                    id="target11" value="{{ $data ? $data->target11 : 0 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Sasaran</label>
                                        <div style="justify-content: space-between; align-items: center;">
                                            <div>
                                                <input class="form-control" type="number" name="target"
                                                    id="target" value="{{ $data ? $data->target : 0 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">April</label>
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Absolut</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="absolute04"
                                                    id="absolute04" value="{{ $data ? $data->absolute04 : 0 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Target</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="target04"
                                                    id="target04" value="{{ $data ? $data->target04 : 0 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Agusrus</label>
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Absolut</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="absolute08"
                                                    id="absolute08" value="{{ $data ? $data->absolute08 : 0 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Target</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="target08"
                                                    id="target08" value="{{ $data ? $data->target08 : 0 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Desember</label>
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Absolut</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="absolute12"
                                                    id="absolute12" value="{{ $data ? $data->absolute12 : 0 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <div class="col-md-6" style="padding-top:10px;">
                                                <label>Target</label>
                                            </div>
                                            <div>
                                                <input class="form-control" type="number" name="target12"
                                                    id="target12" value="{{ $data ? $data->target12 : 0 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="background-color: #48bdc5;height: 1px;">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Contact Section -->
@endsection
