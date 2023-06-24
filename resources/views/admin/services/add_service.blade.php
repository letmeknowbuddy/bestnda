<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/favicon.webp">
<title>Add Service | Shield Defence College</title>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/stylesheet.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
<script type="text/javascript" src="{{ asset('backend/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('backend/js/system.js')}}"></script>
</head>
<body>
@include('admin.include.header')
 @include('admin.include/nav')

<div id="content" class="container-fluid">
 <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="{{ route('admin.services')}}">Services</a></li>
  <li>Add Service</li>
 </ol>
 <form method="POST" action="{{ route('admin.save_service')}}" class="form-horizontal" enctype="multipart/form-data">
  @csrf
 <div class="panel panel-default">
  <div class="panel-heading">
   <h1 class="panel-title"><i class="far fa-edit"></i> Add Service</h1>
   <div class="pull-right form-inline">
    <button type="submit" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Save"><i class="fa fa-save"></i></button>
    <a href="{{ route('admin.services')}}" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Cancel"><i class="fas fa-times"></i></a>
   </div>
  </div>
  <div class="panel-body">
    <div class="row">
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="service_name" class="form-control" id="Text" onkeyup="CopyData(this)" required>
       <label class="required">Service Name</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="service_slug" class="form-control" id="slug" style="text-transform:lowercase" required>
       <label class="required">Service Slug</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <select name="filter_status" class="form-control" onchange="get_filter();">
        <option value="Life @ SDC">Life @ SDC</option>
        <option value="Cadets’ Corner ">Cadets’ Corner</option>
       </select>
       <label class="required">Select Service</label>
      </div>
     </div>
     <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="form-group">
       <input type="text" name="meta_title" class="form-control" required>
       <label class="required">Meta Title</label>
      </div>
      <p class="pull-right mb-0"><i><b>Note</b> : Add Maximum <b>60</b> Characters with space.</i></p>
     </div>
     <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="form-group">
       <textarea name="meta_keywords" class="form-control" required=""></textarea>
       <label class="required">Meta Keywords</label>
      </div>
      <p class="pull-right mb-0"><i><b>Note</b> :  Add Minimum <b>1 Keyword</b> &amp; Maximum <b>15 Keyword</b>.</i></p>
     </div>
     <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="form-group">
       <textarea name="meta_description" class="form-control" required=""></textarea>
       <label class="required">Meta Description</label>
      </div>
      <p class="pull-right mb-0"><i><b>Note</b> : Add Maximum <b>300</b> Characters with space.</i></p>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="file" name="banner_image" class="form-control" required>
       <label class="required">Upload Banner</label>
      </div>
      <p class="pull-right mb-0"><i><b>Note</b> : Add Only <b>WEBP</b> Image.</i></p>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="file" name="og_image" class="form-control" required>
       <label class="required">Upload Og:Img</label>
      </div>
      <p class="pull-right mb-0"><i><b>Note</b> : Add Only <b>WEBP</b> Image.</i></p>
     </div>
    </div>
   </form>
  </div>
 </div>
</div>
<script>
function CopyData(val){
var a = document.getElementById(val.id).value;
var inputs = document.querySelectorAll("#slug");
for(var i=0;i < inputs.length;i++){
inputs[i].value = a.replace(/\s+/g, "-").replace(/\//g, "-");
}
}
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;
    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;
    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;
    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>

@include('admin.include.footer')
</body>
</html>