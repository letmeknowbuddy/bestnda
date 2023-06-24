<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/favicon.webp">
<title>Pages | Shield Defence College</title>
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
  <li>Page List</li>
 </ol>
 <div class="panel panel-default">
  <div class="panel-heading">
   <h1 class="panel-title"><i class="fas fa-copy"></i> All Page List</h1>
   <div class="pull-right">
    <a href="{{ route ('admin.add_page')}}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Add Page"><i class="fa fa-plus"></i></a>
   </div>
  </div>
  <div class="panel-body">
   {{-- <form method="post" action="/" target="_blank" id="/" class="form-horizontal">
    <div class="row">
     <div class="col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="form-group">
       <input type="text" class="form-control" name="filter_Page" required>
       <label>Search by Page</label>
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
       <th class="text-center">Page Name</th>
       <th class="text-center">Meta Title</th>
       <th class="text-center" width="15%">Last Update</th>
       <th class="text-center" width="7%">Status</th>
       <th class="text-center" width="15%">Action</th>
      </tr>
     </thead>
     <tbody>
        <?php 
        $count =1;
        foreach ($menu as  $manue) 
        {
         ?>
        <tr>
       <td class="text-center">{{$count ++}}</td>
       <td class="text-center">{{$manue->page_name}}</td>
       <td class="text-center">{{$manue->slug}}</td>
       <td class="text-center">{{$manue->crated_date}} PM</td>
       <td class="text-center">
        <?php 
        if ($manue->status == 0) 
        {
            echo "Active";
        }elseif ($manue->status == 1) 
        {
           echo "InActive";
        }

        ?>
       </td>
       <td class="text-center">
        <a href="{{ route ('admin.edit_page',$manue->id)}}" class="btn btn-primary btn-xs" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"><i class="fas fa-pen"></i></a>

        <a href="#!" class="btn btn-info btn-xs" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="View"><i class="fas fa-eye"></i></a>

        <a onclick="return confirm('Are you sure you want to delete page. ?');" 
        href="{{ route('admin.pagedelite', $manue->id) }}" class="btn btn-danger btn-xs" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Delete"><i class="fas fa-trash-alt"></i></a>

       </td>
      </tr>
         <?php
        }
        ?>
     </tbody>
     <tfoot>
      <tr class="success">
       <th class="text-center" width="3%">S.No.</th>
       <th class="text-center">Page Name</th>
       <th class="text-center">Meta Title</th>
       <th class="text-center" width="15%">Last Update</th>
       <th class="text-center" width="7%">Status</th>
       <th class="text-center" width="15%">Action</th>
      </tr>
     </tfoot>
    </table>
    <!-- <center>
     <ul class="pagination">
      <li class="active"><a title="Go to page 1 of 30" class="current" href="jaavscript:void(0)">1</a></li>
      <li><a class="paginate" title="Go to page 2 of 30" href="#">2</a></li>
      <li><a class="paginate" title="Go to page 3 of 30" href="#">3</a></li>
      <li><a class="paginate" title="Go to page 4 of 30" href="#">4</a></li>
      <li><a class="paginate" title="Go to page 5 of 30" href="#">5</a></li>
      <li><a class="paginate" title="Go to page 6 of 30" href="#">6</a></li>
      <li><a class="paginate" href="#">Next »</a></li>
     </ul>
    </center> -->

           <?php 

   $count = DB::table('add_page')->count();

    ?>
    <p class="pull-right"><strong>Total Result: {{$count}}</strong></p>
   </div>
  </div>
 </div>
 @include('admin.include.footer')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{-- datatable --}}
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap.min.js"></script>
 {{-- datatable --}}
<script>

    $(document).ready(function () {
    $('#myTable').DataTable();
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