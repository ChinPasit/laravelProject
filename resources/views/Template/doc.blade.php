
@extends('Template.menu')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="page-header">
      <div class="container-fluid">
      	<br/><br/><br/>
      <h1>อัปโหลดเอกสาร</h1>
      <ul class="breadcrumb">
      <li><a href="">ศูนย์กลางเอกสาร</a></li>
      <li><a href="">เจ้าหน้าที่</a></li>
      </ul>					
      </div>
      </div>
      </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-default">
      <div class="panel-heading clearfix">
      <div class="pull-right">
      <button type="submit" form="banner_add" data-toggle="tooltip" title="" class="btn btn-primary"><i class="fa fa-save"></i></button>
      <a href="" data-toggle="tooltip" title="<" class="btn btn-default"><i class="fa fa-reply"></i></a>
      <a data-toggle="tooltip" title="Add New Banner Row" class="btn btn-default">เพิ่มเอกสาร</a>
      </div>

      <h4 class="panel-title pull-left" style="padding-top: 7.5px;"><i class="fas fa-file-medical"></i>&nbsp องค์การบริหารส่วนตำบลท่าข้าม</h4>
     </div>
        <div class="panel-body">
          <form  method="POST" action="{{ route('file.upload')}}"class="form-horizontal" aria-label="{{ __('Upload') }}">
          @csrf
          <div class="form-group">
          <label class="col-sm-2 control-label" for="input-banner-name">หัวข้อเอกสาร</label>
          <div class="col-sm-10">
          <input id ="doc"type="text" name="name" value="" placeholder="ชื่อเอกสาร" id="input-banner-name" class="form-control" required/>
          </div>
          </div>

          <div class="form-group">
          <label id="categories" class="col-sm-2 control-label" for="input-status">หมวดหมู่</label>
          <div class="col-sm-10">
          <select name="status" id="categories" class="form-control" required>
          <option value="categories">ข่าวประชาสัมพันธ์</option>
          <option value="categories">หน่วยงานราชการ</option>
          </select>
          </div>
          </div>
          <table id="images" class="table table-striped table-bordered table-hover">
          <thead>
          <tr>
          <td class="text-center">ชื่อเอกสาร</td>
          <td class="text-center">ระยะเวลาประกาศ</td>
          <td class="text-center">Upload File</td>  
          </tr>
          </thead>
          <tbody>
          <?php $image_row = 0; ?>
          <tr>
            <td><input id ="doc"type="text" name="title[]" class="form-control" placeholder="ชื่อเอกสาร" style="margin-top: 10%;" required></td>
            <td><input id ="publish"type="text" name="link[]" class="form-control" placeholder="เลือกวัน-เวลา" style="margin-top: 10%;" required></td>
            <td class="text-center">
                <div class="image-upload" >
                <label for="file_0">
               <!--  <img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/699434-icon-70-document-file-pdf-512.png"width="50px"height="50px" class="img-thumbnail" style="cursor: pointer;" rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="right" data-html="true" 
                    data-title="Click To Choose File"/>
                </label>
                <input type="file" name="uploadedimages0" size="20"  multiple="" id="file_0" /> -->
                <p class="text-mute">กรุณาเลือกไฟล์</p>
                </div>
            </td>
          </tr>
          <?php $image_row++; ?>
          </tbody>
          </table>
          <button type="submit"class="btn btn-primary"><i class="fa fa-save"></i>{{ __('Upload') }}</button>
          </form>
        </div>
    </div>
      
  </div>
</div>

@endsection