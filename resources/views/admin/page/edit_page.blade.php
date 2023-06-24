<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="backend/images/favicon.webp">
<title>Edit Page | Shield Defence College</title>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/stylesheet.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script type="text/javascript" src="{{ asset('backend/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('backend/js/system.js')}}"></script>
</head>
<body>
 @include('admin.include/header')
 @include('admin.include/nav')

<div id="content" class="container-fluid">
 <ol class="breadcrumb">
  <li><a href="">Home</a></li>
  <li><a href="{{ route ('admin.pages')}}">Page List</a></li>
  <li>Edit Page</li>
 </ol>
  <form method="POST" action="{{ route('admin.pagesave') }}"  class="form-horizontal" enctype="multipart/form-data">
  @csrf
 <input type="hidden" name="id" value="{{$pageedit->id}}">
 <div class="panel panel-default">
  <div class="panel-heading">
   <h1 class="panel-title"><i class="far fa-edit"></i> Edit Page</h1>
   <div class="pull-right form-inline">
    <button type="submit" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Save"><i class="fa fa-save"></i></button>
    <a href="{{ route('admin.pages')}}" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Cancel"><i class="fas fa-times"></i></a>
    <a href="#!" class="btn btn-info text-white" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Live Preview">Live Preview</a>
   </div>
  </div>
  <div class="panel-body">
    <div class="row">
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="page_name" class="form-control" value="{{$pageedit->page_name}}" required>
       <label class="required">Page Name</label>
      </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="slug" class="form-control" value="{{$pageedit->slug}}" required>
       <label class="required">Page URL</label>
      </div>
     </div>
     <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="form-group">
       <input type="text" name="title" class="form-control" value="{{$pageedit->meta_title}}" required>
       <label class="required">Meta Title</label>
      </div>
      <p class="pull-right mb-0"><i><b>Note</b> : Add Maximum <b>60</b> Characters with space.</i></p>
     </div>
     <div class="col-lg-12 col-md-12 col-sm-12">

      <div class="form-group">

       <textarea name="keywords" class="form-control">{{$pageedit->meta_keyword}}</textarea>

       <label class="required">Meta Keywords</label>

      </div>

      <p class="pull-right mb-0"><i><b>Note</b> :  Add Minimum <b>1 Keyword</b> & Maximum <b>15 Keyword</b>.</i></p>

     </div>

     <div class="col-lg-12 col-md-12 col-sm-12">

      <div class="form-group">

       <textarea name="description" class="form-control">{{$pageedit->meta_descrption}}</textarea>

       <label class="required">Meta Description</label>

      </div>

      <p class="pull-right mb-0"><i><b>Note</b> : Add Maximum <b>160</b> Characters with space.</i></p>

     </div>

     <div class="col-lg-9 col-md-9 col-sm-12">

      <div class="form-group">

       <input type="file" name="banner_img" class="form-control">

       <input type="hidden" name="old_image" value="{{$pageedit->baneer_image}}">

       <label class="required">Banner : Img</label>

      </div>

      <p class="pull-right mb-0"><i><b>Note</b> : Add Only <b>WEBP</b> Image.</i></p>

     </div>

     <div class="col-lg-3 col-md-3 col-sm-12">

      <span class="py-1">

       <img src="{{ URL::asset('menuimage/banner_img/' .$pageedit->baneer_image) }}" class="img-responsive" alt="logo" width="150" height="60">

      </span>

     </div>

     <div class="col-lg-9 col-md-9 col-sm-12">

      <div class="form-group">

       <input type="file" name="og_img" class="form-control">

       <input type="hidden" name="old_ogimg" value="{{$pageedit->omg_image}}">

       <label class="required">Update Og:Img</label>

      </div>

      <p class="pull-right mb-0"><i><b>Note</b> : Add Only <b>WEBP</b> Image.</i></p>

     </div>

     <div class="col-lg-3 col-md-3 col-sm-12">

      <span class="py-1">

       <img src="{{ URL::asset('menuimage/og_img/' .$pageedit->omg_image) }}" class="img-responsive" alt="logo" width="150" height="60">

      </span>

     </div>

     <div class="col-lg-12 col-md-12 col-sm-12">

      <div class="form-group">

        <select name="status" class="form-control" onchange="get_filter();">

       <option value="0" <?php if($pageedit->status== 0){echo "selected";} ?> >Active</option>

        <option value="1" <?php if($pageedit->status== 1){echo "selected";} ?> >Inactive</option>

       </select>

       <label class="required">Selece Status</label>

      </div>

     </div>

    </div>

   </form>

  </div>

 </div>

</div>

 @include('admin.include.footer')

</body>

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
</html>