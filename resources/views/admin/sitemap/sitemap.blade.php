<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/favicon.webp">
<title>Enquiry Lists | Shield Defence College</title>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/stylesheet.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
<script type="text/javascript" src="{{ asset('backend/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('backend/js/system.js')}}"></script>
{{-- datatable --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
{{-- datatable --}}
</head>
<body>
 @include('admin.include.header')
 @include('admin.include/nav')


<div id="content" class="container-fluid">
 <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li>Enquiry Lists</li>

 </ol>
 <div class="panel panel-default">
  <div class="panel-heading">
   <h1 class="panel-title"><i class="fas fa-phone-volume"></i> Enquiry Lists</h1>
  <a href="http://127.0.0.1:8000/sitemap.xml" class="btn btn-info btn-xs" data-bs-toggle="tooltip" data-bs-placement="top" style="float:right;" data-bs-custom-class="custom-tooltip" title="View" target="_blank">View</a>

  </div>
  <div class="panel-body">
   {{-- <form method="post" action="/" target="_blank" id="/" class="form-horizontal">
    <div class="row">
     <div class="col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="form-group">
       <input type="text" class="form-control" name="filter_Page" required>
       <label>Search by User</label>
      </div>
     </div>
     <div class="col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="form-group">
       <select name="filter_status" class="form-control" onchange="get_filter();">
        <option>Status</option>
        <option value="active">Active</option>
        <option value="deactive">Deactive</option>
       </select>
      </div>
     </div>
    </div>
   </form> --}}
  </div>
   <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="myTable">
     <thead>
         <tr class="success">
       <th class="text-center" width="3%">S.No.</th>
       <th class="text-center">Page URL</th>
       <th class="text-center" width="15%">ChangeFreq</th>
       <th class="text-center">Priority</th>
       <th class="text-center" width="15%">Created_at</th>
       <th class="text-center" width="10%">Updated_at</th>
       <th class="text-center" width="10%">Status</th>
       <th class="text-center" width="10%">Action</th> 
      </tr> 
     </thead>
      
 
     <tbody>
        <?php 
        $count = 1;
        foreach($sitemap as $query)
        {
         ?>
     <tr>
<td class="text-center">{{$count}}</td>
<td class="text-center">{{$query->page_url}}</td>
<td class="text-center">{{$query->changefre}}</td>
<td class="text-center">{{$query->priority}}</td>
<td class="text-center">{{$query->created_at}}</td>
<td class="text-center">{{$query->updated_at}}</td>
<td class="text-center">  <?php 

    if ($query->status == 0) 

    {

       echo "Active";

    }

    elseif ($query->status == 1) 

    {

        echo "InActive";

    }



    ?></td>
<td class="text-center">
<form method="POST" action="{{route('admin.sitemap.delete')}}">
    @csrf
   <input name="delete" type="hidden" value="{{$query->id}}">
   <a href="{{route('admin.site.edit',$query->id)}}" class="btn btn-primary btn-xs" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"><i class="fas fa-pen"></i></a>
    <button type="submit" class="btn btn-danger btn-xs show_confirm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
</form>
</td>
</tr>
<?php
$count++;
}


?>  
     </tbody>

    
     
    <tfoot>
      <tr class="success">
       <th class="text-center" width="3%">S.No.</th>
       <th class="text-center">Page URL</th>
       <th class="text-center" width="15%">Changefre</th>
       <th class="text-center">Priority</th>
       <th class="text-center" width="15%">Date</th>
       <th class="text-center" width="10%">Time</th>
       <th class="text-center" width="10%">Status</th>
       <th class="text-center" width="10%">Action</th> 
      </tr> 
    </tfoot>
     </tbody>
    </table>
          <?php 

   $count = DB::table('site_map')->count();

    ?>
    <p class="pull-right"><strong>Total Result: {{$count}}</strong></p>
   </div>
  </div>
 </div>

 @include('admin.include.footer')
 {{-- datatable --}}
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap.min.js"></script>
 {{-- datatable --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>]
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
 <script>
       $(document).ready(function () {
    $('#myTable').DataTable();
});


$('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

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