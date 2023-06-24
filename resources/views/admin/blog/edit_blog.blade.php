<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="backend/images/favicon.webp">
<title>Update | Shield Defence College</title>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/stylesheet.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script type="text/javascript" src="{{ asset('backend/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('backend/js/system.js')}}"></script>
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
  <li><a href="blogs.php">Blog List</a></li>
  <li>Edit Blog</li>
 </ol>
  <form method="POST" action="{{ route('admin.editblog') }}"  class="form-horizontal" enctype="multipart/form-data">
     @csrf
  <input type="hidden" name="id" value="{{$blogedit->id}}">
 <div class="panel panel-default">
  <div class="panel-heading">
   <h1 class="panel-title"><i class="far fa-edit"></i> Edit Blog</h1>
   <div class="pull-right form-inline">
    <button type="submit" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Save"><i class="fa fa-save"></i></button>

    <a href="{{ route('admin.blogs')}}" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Cancel"><i class="fas fa-times"></i></a>

    <a href="#!" class="btn btn-info text-white" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Live Preview">Live Preview</a>
   </div>
  </div>
  <div class="panel-body">
    <div class="row">
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="blog_title" class="form-control" id="Text" onkeyup="CopyData(this)" value="{{ $blogedit->blog_title}}" required>
       <label class="required">Blog Title</label>
      </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="blog_slug" class="form-control" id="slug" style="text-transform:lowercase" value="{{$blogedit->blog_slug}}">
       <label class="required">Blog Slug</label>
      </div>
     </div>
     <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="form-group">
       <input type="text" name="meta_title" class="form-control" value="{{$blogedit->meta_title}}">
       <label class="required">Meta Title</label>
      </div>
      <p class="pull-right mb-0"><i><b>Note</b> : Add Maximum <b>60</b> Characters with space.</i></p>
     </div>
     <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="form-group">
       <textarea name="meta_keywords" class="form-control" required="">{{$blogedit->meta_keywords}}</textarea>
       <label class="required">Meta Keywords</label>
      </div>
      <p class="pull-right mb-0"><i><b>Note</b> :  Add Minimum <b>1 Keyword</b> & Maximum <b>15 Keyword</b>.</i></p>
     </div>
     <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="form-group">
       <textarea name="meta_description" class="form-control" required="">{{$blogedit->meta_description}}</textarea>
       <label class="required">Meta Description</label>
      </div>
      <p class="pull-right mb-0"><i><b>Note</b> : Add Maximum <b>160</b> Characters with space.</i></p>
     </div>
     <div class="col-lg-3 col-md-6 col-12">
      <div class="form-group">
       <select name="category" class="form-control" onchange="get_filter();">
        <option value="NDA" selected>NDA</option>
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
     <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="email" name="u_email" class="form-control" value="{{$blogedit->u_email}}">
       <label class="required">User Email</label>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="u_name" class="form-control" value="{{$blogedit->u_name}}">
       <label class="required">User Name</label>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-12">
      <div class="form-group">
       <select name="user_type" class="form-control" onchange="get_filter();">
        <option value="Admin" selected>Admin</option>
        <option value="Sub Admin">Sub Admin</option>
        <option value="User">User</option>
       </select>
       <label class="required">Select User Type</label>
      </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="created_date" class="form-control" value="{{$blogedit->create_at}}">
       <label class="required">Created Date</label>
      </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="test" name="up_date" class="form-control" value="{{$blogedit->updated_at}}">
       <label class="required">Updated Date</label>
      </div>
     </div>
     <div class="col-lg-9 col-md-9 col-sm-12">
      <div class="form-group">
       <input type="file" name="thumbimg" class="form-control" id="thumb">
       <input type="hidden" name="old_image" value="{{$blogedit->thumbimg}}">
       <label class="required">Update Thumb</label>
      </div>
      <p class="pull-right mb-0"><i><b>Note</b> : Add Only <b>WEBP</b> Image.</i></p>
     </div>
     <div class="col-lg-3 col-md-3 col-sm-12">
      <span class="py-1">
       <a href="{{ URL::asset('blog_image/thumbimg/' .$blogedit->thumbimg) }}" target="_blank">
        <img src="{{ URL::asset('blog_image/thumbimg/' .$blogedit->thumbimg) }}" class="img-responsive" id="preview-thumb-before-upload" alt="Og:Img" title="Og:Img" width="150" height="70">
       </a>
      </span>
     </div>
     <div class="col-lg-9 col-md-9 col-sm-12">
      <div class="form-group">
       <input type="file" name="banner_img" class="form-control"id="banner">
       <input type="hidden" name="banner_oldimage" value="{{$blogedit->banner_img}}">
       <label class="required">Update Banner</label>
      </div>
      <p class="pull-right mb-0"><i><b>Note</b> : Add Only <b>WEBP</b> Image.</i></p>
     </div>
     <div class="col-lg-3 col-md-3 col-sm-12">
      <span class="py-1">
       <a href="{{ URL::asset('blog_image/banner_img/' .$blogedit->banner_img) }}" target="_blank">
        <img src="{{ URL::asset('blog_image/banner_img/' .$blogedit->banner_img) }}" class="img-responsive"id="preview-banner-before-upload" alt="Og:Img" title="Og:Img" width="150" height="70">
       </a>
      </span>
     </div>
     <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="form-group">
       <textarea name="blog" id="blog" class="form-control">{{$blogedit->blog}}</textarea>
       <label class="required">Blog</label>
      </div>
     </div>
     <div class="col-lg-12 col-md-12 col-12">
         <div class="form-group">
       <select name="status" class="form-control" onchange="get_filter();">
       <option value="0" <?php if($blogedit->status== 0){echo "selected";} ?> >Active</option>
        <option value="1" <?php if($blogedit->status== 1){echo "selected";} ?> >Inactive</option>
       </select>
       <label class="required">Select Status</label>
      </div>
     </div>
    </div>
   </form>
  </div>
 </div>
</div>

 @include('admin.include.footer')
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.ckeditor.com/4.11.1/full-all/ckeditor.js"></script>
<script>
 CKEDITOR.replace( 'blog' );
 $(document).ready(function (e) {
 
   
 $('#thumb').change(function(){
          
  let reader = new FileReader();

  reader.onload = (e) => { 

    $('#preview-thumb-before-upload').attr('src', e.target.result); 
  }

  reader.readAsDataURL(this.files[0]); 
 
 });

 $('#banner').change(function(){
          
          let reader = new FileReader();
        
          reader.onload = (e) => { 
        
            $('#preview-banner-before-upload').attr('src', e.target.result); 
          }
        
          reader.readAsDataURL(this.files[0]); 
         
         });
 
 
});

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