
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/favicon.webp">
<title>View Registration | Shield Defence College</title>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/stylesheet.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
  <li><a href="{{ route('admin.online_registration')}}">Online Registration</a></li>
  <li>View Registration</li>
 </ol>
 <div class="panel panel-default">
  <div class="panel-heading">
   <h1 class="panel-title"><i class="far fa-eye"></i> Registration  (Donnie)</h1>
   <div class="pull-right form-inline">
    <button type="submit" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Save"><i class="fa fa-save"></i></button>
    <a href="{{ route('admin.online_registration')}}" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Cancel"><i class="fas fa-times"></i></a>
    <a href="#!" class="btn btn-info text-white" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Live Preview">Live Preview</a>
   </div>
  </div>
  <div class="panel-body">
   <form method="post" action="/" target="_blank" id="/" class="form-horizontal">
    <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="form-group">
       <input type="text" name="courses" class="form-control" value="{{$view->course}}" readonly required>
       <label class="required">Courses</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="name" class="form-control" value="{{$view->user_name}}" readonly required>
       <label class="required">Name</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="fa_name" class="form-control" value="Mr.{{$view->f_name}}" readonly required>
       <label class="required">Father Name</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="mo_name" class="form-control" value="Mrs.{{$view->m_name}}" readonly required>
       <label class="required">Mother Name</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="number" name="number" class="form-control" required value="{{$view->mobile}}" readonly>
       <label class="required">Ph. Number</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="email" name="email" class="form-control" value="{{$view->email}}" readonly required>
       <label class="required">E-Mail</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="dob" class="form-control" required value="{{$view->date}}" readonly>
       <label class="required">Date of Birth</label>
      </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <textarea name="co_add" id="#" rows="10" disabled>{{$view->crosspons_address}}</textarea>
       <label class="required">Correspondence Address</label>
      </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <textarea name="per_add" id="#" rows="10" disabled>{{$view->parmnet_address}}</textarea>
       <label class="required">Permanent Address</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="city" class="form-control" value="{{$view->city}}" readonly required>
       <label class="required">City</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="pincode" class="form-control" value="{{$view->pin_code}}" readonly required>
       <label class="required">Pincode</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="state" class="form-control" value="{{$view->state}}" readonly required>
       <label class="required">State</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="qualification" class="form-control" value="{{$view->qualification}}" readonly required>
       <label class="required">Qualification</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="board" class="form-control" value="{{$view->borad_name}}" readonly required>
       <label class="required">Board</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="percentage" class="form-control" value="{{$view->parentage}}" readonly required>
       <label class="required">Percentage</label>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="yeat_passing" class="form-control" value="{{$view->passing_year}}" readonly required>
       <label class="required">Year of Passing</label>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="medium" class="form-control" value="{{$view->medium}}" readonly required>
       <label class="required">Medium</label>
      </div>
     </div>
     <div class="col-lg-2 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="currency" class="form-control" value="{{$view->inr}}" readonly required>
       <label class="required">Currency*</label>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="pay_amount" class="form-control" value="{{ $view->fees}}" readonly required>
       <label class="required">Payable Amount</label>
      </div>
     </div>

    </div>
   </form>
  </div>
 </div>
 <p class="text-right"><i><b>Date</b> : 17-04-2023, <b>Time</b> : 02:56:22 PM</i></p>
</div>

@include('admin.include.footer')

</body>
</html>