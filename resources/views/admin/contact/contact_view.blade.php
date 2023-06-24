<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/favicon.webp">
<title>Contact View | Shield Defence College</title>
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
  <li><a href="{{ route('admin.contact_list')}}">Contact List</a></li>
  <li>Contact View</li>
 </ol>
 <form class="form-horizontal">
  <div class="panel panel-default">
   <div class="panel-heading">
    <h1 class="panel-title"><i class="fas fa-phone-volume"></i> Contacts Lists</h1>
    <div class="pull-right form-inline">
     <a href="{{ route('admin.contact_list')}}" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Cancel"><i class="fas fa-times"></i></a>
    </div>
   </div>
   <div class="panel-body">
    <div class="row">
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="name" class="form-control" value="{{ $contact_list_view->name }}" required disabled>
       <label class="required">Name</label>
      </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="mail" class="form-control" value="{{ $contact_list_view->email }}" required disabled>
       <label class="required">Email</label>
      </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="number" class="form-control" value="{{ $contact_list_view->phone }}" required disabled>
       <label class="required">Phone Number</label>
      </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-group">
       <input type="text" name="subject" class="form-control" value="{{ $contact_list_view->subject }}" required disabled>
       <label class="required">Subject</label>
      </div>
     </div>
     <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="form-group">
       <textarea name="message" class="form-control" disbled>{{ $contact_list_view->massage }}</textarea>
       <label class="required">Message</label>
      </div>
     </div>
    </div>
   </div>
  </div>
 </form>
</div>

    <!-- <table>
      <tr>
        <th>Name:</th>
        <td>{{ $contact_list_view->name }}</td>
      </tr>
      <tr>
        <th>E-mail:</th>
        <td>{{ $contact_list_view->email }}</td>
      </tr>
      <tr>
        <th>Phone:</th>
        <td>{{ $contact_list_view->phone }}</td>
      </tr>
      <tr>
        <th>Subject:</th>
        <td>{{ $contact_list_view->subject }}</td>
      </tr>
      <tr>
        <th>Message:</th>
        <td>{{ $contact_list_view->massage }}</td>
      </tr>
      <tr>
        <th>Created At:</th>
        <td>{{ $contact_list_view->created_at }}</td>
      </tr>
    </table> -->

 @include('admin.include.footer')

</body>
</html>