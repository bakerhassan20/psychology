@extends('layouts.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css') }}">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('title')
Add Doctor
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
           	<div class="d-flex">
							<h4 class="content-title mb-0 my-auto"> General </h4><span class="text-muted ml-1 mt-1 tx-13 mr-2 mb-0">/ add Doctor </span>
						</div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- row -->
    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('doctors.store') }}" method="post" enctype="multipart/form-data"
                        autocomplete="off">
                        {{ csrf_field() }}
                        {{-- 1 --}}

                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">name</label>
                                <input type="text" class="form-control" id="inputName" name="name" required>
                                   <div class="text-danger">{{$errors->first('name')}}</div>
                            </div>

                            <div class="col">
                               <div class="col">
                                <label for="inputName" class="control-label">email</label>
                                <input type="email" class="form-control" id="inputName" name="email" autocomplete="false" readonly onfocus="this.removeAttribute('readonly');"  required>
                                   <div class="text-danger">{{$errors->first('email')}}</div>
                            </div>
                            </div>

                        </div><br>

                        {{-- 2 --}}


                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">password</label>
                                <input type="password" class="form-control" id="inputName" name="password"autocomplete="false" readonly onfocus="this.removeAttribute('readonly');"  required>
                                   <div class="text-danger">{{$errors->first('password')}}</div>
                            </div>

                            <div class="col">
                               <div class="col">
                                <label for="inputName" class="control-label">Confirm Password</label>
                                <input type="password" class="form-control" id="inputName" name="confirm-password" required>

                            </div>
                            </div>

                        </div><br>


                        {{-- 3 --}}


                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">phone</label>
                                <input type="number" class="form-control" id="inputName" name="phone" required>
                                   <div class="text-danger">{{$errors->first('phone')}}</div>
                            </div>

                            <div class="col">
                               <div class="col">
                                <label for="inputName" class="control-label">age</label>
                                <input type="number" min="25" class="form-control" id="inputName" name="age" required>
                                   <div class="text-danger">{{$errors->first('age')}}</div>
                            </div>
                            </div>

                        </div><br>

                        {{-- 4 --}}

                         <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">specialty</label>
                                <input type="text" class="form-control" id="inputName" name="specialty" required>
                                   <div class="text-danger">{{$errors->first('specialty')}}</div>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">languages</label>
                                    <select name="lang[]" multiple class="form-control form-control-lg select2">
                                    <option value=""> اختر من القائمة.... </option>
                                    <option value="arabic">arabic</option>
                                    <option value="english">english</option>
                                    <option value="french">french</option>
                                    </select>
                                    <div class="text-danger">{{$errors->first('lang')}}</div>

                            </div>

                        </div><br>
                        {{--  5--}}
                    <div class="row">
                            <div class="col">
                                <label for="exampleTextarea">doctor Photo</label>
                               <input type="file" name="img" class="dropify" accept=".jpg, .png, image/jpeg, image/png"
                                data-height="70"/>
                                 <div class="text-danger">{{$errors->first('img')}}</div>
                            </div>
                                <div class="col">
                                <label for="exampleTextarea">medical ID</label>
                                 <input type="file" name="medicalID" class="dropify" accept=".jpg, .png, image/jpeg, image/png"
                                data-height="70"/>
                                 <div class="text-danger">{{$errors->first('medicalID')}}</div>
                            </div>
                        </div><br>

                        {{-- 6 --}}
                    <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">facebock link</label>
                                <input type="text" class="form-control" id="inputName" name="facebook" required>
                                   <div class="text-danger">{{$errors->first('facebook')}}</div>
                            </div>

                            <div class="col">
                               <div class="col">
                                <label for="inputName" class="control-label">linkedin link</label>
                                <input type="text" class="form-control" id="inputName" name="linkedin" required>
                                   <div class="text-danger">{{$errors->first('linkedin')}}</div>
                            </div>
                            </div>

                               <div class="col">
                                <label for="inputName" class="control-label">twitter link</label>
                                <input type="text" class="form-control" id="inputName" name="twitter" required>
                                   <div class="text-danger">{{$errors->first('twitter')}}</div>
                            </div>


                        </div><br>

                        {{-- 7 --}}
                        <div class="row">
                            <div class="col">
                                <label for="exampleTextarea">bio</label>
                                <textarea class="form-control" id="exampleTextarea" name="bio" rows="3"></textarea>
                            </div>

                        </div><br>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Save Data</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
    <!-- Internal form-elements js -->
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>

@endsection
