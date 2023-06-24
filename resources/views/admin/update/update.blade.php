<?php 

 $site_update       = DB::Table('site_update')->where('id', 1)->first();

 $webmaster_update  = DB::Table('webmaster_update')->where('id', 1)->first();

 $header_analytics  = DB::Table('analytics_update')->where('id', 1)->first();

 $socal             = DB::Table('socal_updated')->where('id', 1)->first(); 

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="shortcut icon" href="images/favicon.webp">

<title>Update | Shield Defence College</title>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/stylesheet.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

<script type="text/javascript" src="{{ asset ('backend/js/jquery.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="{{ asset ('backend/js/system.js')}}"></script>

</head>

<body>

 @include('admin.include.header');?>

  @include('admin.include.nav');?>



<div id="content" class="container-fluid">

 <ol class="breadcrumb">

  <li><a href="index.php">Home</a></li>

  <li>Update</li>

 </ol>

<form method="POST" action="{{ route('admin.site_update')}}" class="form-horizontal" enctype="multipart/form-data">

  @csrf

 <div class="panel panel-default">

  <div class="panel-heading">

   <h1 class="panel-title"><i class="far fa-edit"></i> Update</h1>

   <div class="pull-right form-inline">

    <button type="submit" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Save"><i class="fa fa-save"></i></button>

   </div>

  </div>

  <div class="panel-body">

    <div class="row">

    <div class="col-lg-9 col-md-9 col-sm-12">

      <div class="form-group">

       <input type="file" name="h_logo" class="form-control">

       <input type="hidden" name="old_logo" value="{{$site_update->logo}}">

       <label class="required">Header Logo</label>

      </div>

      <p class="pull-right mb-0"><i><b>Note</b> : Add Only <b>WEBP</b> Image.</i></p>

     </div>

     <div class="col-lg-3 col-md-3 col-sm-12">

      <span class="py-1" style="line-height: 60px;">

       <img src="{{ URL::asset('logo/header_image/' .$site_update->logo) }}" class="img-responsive" alt="logo" width="220" height="80">

      </span>

     </div>

     <div class="col-lg-12 col-md-12 col-sm-12">

      <div class="form-group">

       <textarea name="footer_about" class="form-control" required="">{{ $site_update->about }}</textarea>

       <label class="required">About Details</label>

      </div>

     </div>

    </div>

   </form>

  </div>

 </div>

 <p class="text-right"><span>Last Updated on:</span>{{ $site_update->updated_at }}</p>

 <div class="panel panel-default">

  <form method="POST" action="{{ route('admin.webmaster.update')}}" id="webmaster_update" class="form-horizontal">

    @csrf

  <div class="panel-heading">

   <h1 class="panel-title"><i class="far fa-edit"></i> Webmaster Updates</h1>

   <div class="pull-right form-inline">

    <button type="submit" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Save"><i class="fa fa-save"></i></button>

   </div>

  </div>

  <div class="panel-body">

    <div class="row">

     <div class="col-lg-12 col-md-12 col-sm-12">

      <div class="form-group">

       <input type="text" name="google" class="form-control" value="{{ $webmaster_update->google }}">

       <label class="required">Google</label>

      </div>

     </div>

     <div class="col-lg-12 col-md-12 col-sm-12">

      <div class="form-group">

       <input type="text" name="yandex" class="form-control" value="{{$webmaster_update->yandex }}">

       <label class="required">Yandex</label>

      </div>

     </div>

     <div class="col-lg-12 col-md-12 col-sm-12">

      <div class="form-group">

       <input type="text" name="mnvali" class="form-control" value="{{$webmaster_update->pintrest }}">

       <label>MS Validate</label>

      </div>

     </div>

    </div>

   </form>

  </div>

 </div>

 <p class="text-right"><span>Last Updated on:</span> {{$webmaster_update->updated_at}} </p>

 <div class="panel panel-default">

  <form method="POST" action="{{ route('admin.analytics.update')}}" id="header_update" class="form-horizontal">

   @csrf

  <div class="panel-heading">

   <h1 class="panel-title"><i class="far fa-edit"></i> Analytics Update</h1>

   <div class="pull-right form-inline">

    <button type="submit" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Save"><i class="fa fa-save"></i></button>

   </div>

  </div>

  <div class="panel-body">

    <div class="row">

     <div class="col-lg-12 col-md-12 col-sm-12">

      <div class="form-group">

       <textarea name="head_dtl" class="form-control">{{$header_analytics->header }}</textarea>

       <label class="required">Header Part</label>

      </div>

     </div>

     <div class="col-lg-12 col-md-12 col-sm-12">

      <div class="form-group">

       <textarea name="foot_dtl" class="form-control">{{$header_analytics->body }}</textarea>

       <label class="required">Footer Part</label>

      </div>

     </div>

    </div>

   </form>

  </div>

 </div>

 <p class="text-right"><span>Last Updated on:</span> {{$header_analytics->updated_at }} </p>

 <div class="panel panel-default">

  <form method="POST" action="{{ route('admin.socal.update')}}" id="header_update" class="form-horizontal">

   @csrf

  <div class="panel-heading">

   <h1 class="panel-title"><i class="far fa-edit"></i> Social Links Updates</h1>

   <div class="pull-right form-inline">

    <button type="submit" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Save"><i class="fa fa-save"></i></button>

   </div>

  </div>

  <div class="panel-body">

    <div class="row">

     <div class="col-lg-4 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="url" name="fb_url" class="form-control" value="{{$socal->Facebook}}" required="">

       <label>Facebook URL</label>

      </div>

     </div>

     <div class="col-lg-4 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="url" name="tw_url" class="form-control" value="{{$socal->twitter}}" required="">

       <label>Twitter URL</label>

      </div>

     </div>

     <div class="col-lg-4 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="url" name="yt_url" class="form-control" value="{{$socal->youtube}}" required="">

       <label>Youtube URL</label>

      </div>

     </div>

     <div class="col-lg-4 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="url" name="ins_url" class="form-control" value="{{$socal->intagram}}" required="">

       <label>Instagram URL</label>

      </div>

     </div>

     <div class="col-lg-4 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="url" name="li_url" class="form-control" value="{{$socal->linkdan}}" required="">

       <label>Linkden URL</label>

      </div>

     </div>

     <div class="col-lg-4 col-md-6 col-sm-12">

      <div class="form-group">

       <input type="url" name="pin_url" class="form-control" value="{{$socal->printest}}" required="">

       <label>Pintrest URL</label>

      </div>

     </div>

    </div>

   </form>

  </div>

 </div>

 <p class="text-right"><span>Last Updated on:</span> {{$socal->crated_date}}</p>

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