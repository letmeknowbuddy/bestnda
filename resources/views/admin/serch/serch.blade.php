<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/favicon.webp">
<title>Search | Shield Defence College</title>
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
  <li>Search</li>
 </ol>
 <div class="panel panel-default">
  {{-- <div class="panel-heading">
   <h1 class="panel-title"><i class="fas fa-search"></i> Search Lists</h1>
  </div> --}}
  {{-- <div class="panel-body">
   <form method="post" action="/" target="_blank" id="/" class="form-horizontal">
    <div class="row">
     <div class="col-lg-4 col-md-none"></div>
     <div class="col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="form-group">
       <input type="text" class="form-control" name="filter_date_from" id="filter_date_from" onmouseover="get_calendar('filter_date_from')" value="" placeholder="Date From" onchange="get_filter();" autocomplete="off">
      </div>
     </div>
     <div class="col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="form-group">
       <input type="text" class="form-control" name="filter_date_to" id="filter_date_to" onmouseover="get_calendar('filter_date_to')" value="" placeholder="Date To" onchange="get_filter();" autocomplete="off">
      </div>
     </div>
     <div class="col-lg-2 col-md-4 col-sm-12 col-12">
      <div class="form-group">
       <button type="submit" class="form-control btn btn-primary bg-primary text-white" name="submit" placeholder="Update">Filter</button>
      </div>
     </div>
    </div>
   </form>
  </div> --}}
   <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="myTable">
     <thead>
      <tr class="success">
        <th class="text-center" width="3%">S.No.</th>
        <th class="text-center">Title</th>
        <th class="text-center" width="10%">Count</th>
        <th class="text-center" width="20%">Date/Time</th>
        <th class="text-center" width="8%">Action</th>
      </tr>
     </thead>
      <tbody>
      @php
      $sn=1;
      @endphp
      @foreach ($data as $item)
      <tr>
        <td class="text-center">{{$sn}}</td>
        <td class="text-center">{{$item->title}}</td>
        <td class="text-center">{{$item->count}}</td>
        <td class="text-center">{{$item->created_at}}</td>
        <td class="text-center">
          <form method="POST" action="{{route('admin.search.delete')}}">
            @csrf
            <input name="delete" type="hidden" value="{{$item->id}}">
            
            <button type="submit" class="btn btn-danger btn-xs show_confirm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
          </form>
        </td>
       </tr>

       @php
       $sn++;
       @endphp
      
      @endforeach
    <tfoot>
     <tr class="success">
      <th class="text-center" width="3%">S.No.</th>
      <th class="text-center">Title</th>
      <th class="text-center" width="10%">Count</th>
      <th class="text-center" width="20%">Date/Time</th>
      <th class="text-center" width="8%">Action</th>
     </tr>
    </tfoot>
     </tbody>
    </table>
          <?php 

   $count = DB::table('search')->count();

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

  $(document).ready(function () {
    $('#myTable').DataTable( {
    "lengthMenu": [[30, 50, 100, -1], [30, 50, 100, "All"]]
} );
});

function get_calendar(id){
  $('#'+id).datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true
  });
}

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
</script>

</body>
</html>