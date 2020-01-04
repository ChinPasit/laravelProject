@extends('Template.menu')
@section('content')
<link href="{{ asset('css/style_table.css') }}" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <br/><div class="card-header">File Upload</div><br/>
                <div class="card-body">
                <form method="POST" action="{{ route('file.upload') }}" aria-label="{{ __('Upload') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="users_name" class="col-sm-4 col-form-label text-md-right">{{ __('users_name') }}</label>
                                <input  type="hidden" class="form-control" name="users_name" value="{{Auth::user()->id}}"/>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('หัวข้อเอกสาร') }}</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus />
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="overview" class="col-sm-4 col-form-label text-md-right">{{ __('รายละเอียด') }}</label>
                            <div class="col-md-6">
                                <input id="overview" type="text" class="form-control{{ $errors->has('overview') ? ' is-invalid' : '' }}" name="overview" value="{{ old('overview') }}" required autofocus />
                                @if ($errors->has('overview'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('overview') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('หมวดหมู่ของเอกสาร') }}</label>
                            <div class="col-md-6">
                                <select name="categories" id="categories" class="form-control" required>
                                    <option value="ข่าวประชาสัมพันธ์">ข่าวประชาสัมพันธ์</option>
                                    <option value="หน่วยงานราชการ">หน่วยงานราชการ</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="publish" class="col-md-4 col-form-label text-md-right">{{ __('วันที่เริ่มประกาศ') }}</label>
                            <div class="col-md-6">
                                <input id="publish" type="date" class="form-control{{ $errors->has('publish') ? ' is-invalid' : '' }}" name="publish" required>
                                @if ($errors->has('publish'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('publish') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file_name" class="col-md-4 col-form-label text-md-right">{{ __('ไฟล์เอกสาร') }}</label>
                            <div class="col-md-6">
                                <input id="file_name" type="file" class="form-control{{ $errors->has('file_name') ? ' is-invalid' : '' }}" name="file_name" required>
                                @if ($errors->has('file_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('file_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('อัปโหลดเอกสาร') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ค้นหาเอกสาร') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th>หัวข้อเอกสาร</th>
                                <th>หมวดหมู่ของเอกสาร</th>
                                <th>สิ้นสุดวันประกาศ</th>
                                <th>ผู้อัปโหลดเอกสาร</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($files as $f)
                                 @if($f->publish <= date("Y-m-d"))
                                <tr>
                                    <td>{{$f->title}}</td>
                                    <td>{{$f->categories}}</td>
                                    <td>{{$f->publish}}</td>
                                    <td>{{$f->user->name}}</td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection