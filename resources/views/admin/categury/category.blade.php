<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/favicon.webp">
<title>Category | Shield Defence College</title>
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
  <li>Category List</li>
 </ol>
 <div class="panel panel-default">
  <div class="panel-heading">
   <h1 class="panel-title"><i class="fas fa-chart-pie"></i> All Category List</h1>
   <div class="pull-right">
    <a href="{{ route('admin.add_category')}}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Add Category"><i class="fa fa-plus"></i></a>
   </div>
  </div>
  <div class="panel-body">
   <form method="post" action="/" target="_blank" id="/" class="form-horizontal">
    <div class="row">
     <div class="col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="form-group">
       <input type="text" class="form-control" name="filter_Page" required>
       <label>Search by Category</label>
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
   </form>
  </div>
   <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
     <tbody>
      <tr class="success">
       <th class="text-center" width="2%">S.No.</th>
       <th class="text-center">Category Name</th>
       <th class="text-center">Category Slug</th>
       <th class="text-center">Blog Count</th>
       <th class="text-center">Last Update</th>
       <th class="text-center" width="6%">Status</th>
       <th class="text-center" width="12%">Action</th>
      </tr>
      <?php 
      $count = 1;
      foreach ($category as $catgury) 
      {
        ?>
        <tr>
       <td class="text-center">{{$count++}}</td>
       <td class="text-center">{{$catgury->Category_Name}}</td>
       <td class="text-center">{{$catgury->slug}}</td>
       <td class="text-center">4</td>
       <td class="text-center">{{$catgury->cretated_ad}}</td>
       <td class="text-center">
        <?php 
        if ($catgury->status == '0') 
        {
            echo "Active";
        }
        elseif ($catgury->status == '1') 
        {
          echo "InActive";
        }


        ?>
       </td>
       <td class="text-center">
        <a href="{{ route ('admin.edit_category')}}" class="btn btn-primary btn-xs" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"><i class="fas fa-pen"></i></a>

        <a href="#!" class="btn btn-info btn-xs" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="View"><i class="fas fa-eye"></i></a>


       <a onclick="return confirm('Are you sure you want to delete page. ?');" 
        href="{{ route('admin.catgurdel',$catgury->id)}}" class="btn btn-danger btn-xs" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Delete"><i class="fas fa-trash-alt"></i></a>


       </td>
      </tr>
        <?php
      }
      ?>
     </tbody>
     <tfoot>
      <tr class="success">
       <th class="text-center" width="2%">S.No.</th>
       <th class="text-center">Category Name</th>
       <th class="text-center">Category Slug</th>
       <th class="text-center">Blog Count</th>
       <th class="text-center">Last Update</th>
       <th class="text-center" width="6%">Status</th>
       <th class="text-center" width="12%">Action</th>
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
    <p class="pull-right"><strong>Total Result: 4</strong></p>
   </div>
  </div>
 </div>

@include('admin.include.footer')

</body>
</html>