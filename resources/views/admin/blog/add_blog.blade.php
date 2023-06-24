<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="shortcut icon" href="backend/images/favicon.webp">

<title>Add Blog | Shield Defence College</title>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/stylesheet.css') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

<style>

.form-group textarea {padding: 6px 12px;font-size: 14px;line-height: 1.42857143;color: #000;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 3px;width: 100%;min-height: 50px;height: 70px;max-height: 90px;overflow: auto;resize: vertical;}

#cke_1_contents{height: 400px !important;}

</style>



</head>

<body>

 @include('admin.include.header')

 @include('admin.include.nav')



<div id="content" class="container-fluid">

 <ol class="breadcrumb">

  <li><a href="">Home</a></li>

  <li><a href="{{ route('admin.blogs')}}">Blog List</a></li>

  <li>Add Blog</li>

 </ol>

  <form method="POST" action="{{ route('admin.save_blog')}}" class="form-horizontal" enctype="multipart/form-data">

    @csrf

 <div class="panel panel-default">

  <div class="panel-heading">

   <h1 class="panel-title"><i class="far fa-edit"></i> Add Blog</h1>

   <div class="pull-right form-inline">

    <button type="submit" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Save"><i class="fa fa-save"></i></button>

    <a href="{{ route('admin.blogs')}}" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Cancel"><i class="fas fa-times"></i></a>

    

   </div>

  </div>

  <div class="panel-body">

    <div class="row">

     <div class="col-lg-6 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="text" name="blog_title" id="Text" onkeyup="CopyData(this)" class="form-control" required>

       <label class="required">Blog Title</label>

      </div>

     </div>

     <div class="col-lg-6 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="text" name="blog_slug" class="form-control" id="slug" style="text-transform:lowercase" required>

       <label class="required">Blog Slug</label>

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

      <p class="pull-right mb-0"><i><b>Note</b> :  Add Minimum <b>1 Keyword</b> & Maximum <b>15 Keyword</b>.</i></p>

     </div>

     <div class="col-lg-12 col-md-12 col-sm-12">

      <div class="form-group">

       <textarea name="meta_description" class="form-control" required=""></textarea>

       <label class="required">Meta Description</label>

      </div>

      <p class="pull-right mb-0"><i><b>Note</b> : Add Maximum <b>160</b> Characters with space.</i></p>

     </div>

     <div class="col-lg-3 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="email" name="u_email" class="form-control" value="{{ Auth::user()->email }}" required>

       <label class="required">User Email</label>

      </div>

     </div>

     <div class="col-lg-3 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="text" name="u_name" class="form-control"  value="{{ Auth::user()->name }}"  required="">

       <label class="required">User Name</label>

      </div>

     </div>

     <div class="col-lg-3 col-md-6 col-12">

      <div class="form-group">

       <select name="user_type" class="form-control" onchange="get_filter();">

        <option value="Admin">Admin</option>

        <option value="Sub Admin">Sub Admin</option>

        <option value="User">User</option>

       </select>

       <label class="required">Select User Type</label>

      </div>

     </div>

     <div class="col-lg-3 col-md-6 col-12">

      <div class="form-group">

       <select name="category" class="form-control" onchange="get_filter();">

        <option value="NDA">NDA</option>

        <option value="NDA Foundation">NDA Foundation</option>

        <option value="SSB Interview">SSB Interview</option>

        <option value="CDS">CDS</option>

        <option value="AFCAT">AFCAT</option>

        <option value="NEET + MNS">NEET + MNS</option>

        <option value="MNS">MNS</option>

       </select>

       <label class="required">Select Category</label>

      </div>

     </div>

     <div class="col-lg-6 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="file" name="thumbimg" class="form-control" required>

       <label class="required">Thumb Image</label>

      </div>

      <p class="pull-right mb-0"><i><b>Note</b> : Add Only <b>WEBP</b> Image.</i></p>

     </div>

     <div class="col-lg-6  col-md-6 col-sm-12">

      <div class="form-group">

       <input type="file" name="banner_img" class="form-control" required>

       <label class="required">Banner Image</label>

      </div>

      <p class="pull-right mb-0"><i><b>Note</b> : Add Only <b>WEBP</b> Image.</i></p>

     </div>

     <div class="col-lg-12 col-md-12 col-sm-12">

      <div class="form-group">

      <textarea name="blog" placeholder="Enter answer here..."></textarea>

       <label class="required">Blog</label>

      </div>

     </div>

    </div>

   </form>

  </div>

 </div>

</div>

<?php @include('include/footer.php');?>



<script type="text/javascript" src="{{ asset('backend/js/jquery.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="{{ asset('backend/js/system.js')}}"></script>

<script src="https://cdn.ckeditor.com/4.11.1/full-all/ckeditor.js"></script>



<script src="https://cdn.ckeditor.com/4.11.1/full-all/ckeditor.js"></script>

<script>

 CKEDITOR.replace( 'blog' );

</script>



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

</body>

</html>