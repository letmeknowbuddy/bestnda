<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/favicon.webp">
<title>Login | Shield Defence College</title>
<meta name="description" content="/">
<meta name="keywords" content="/">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/stylesheet.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('backend/js/system.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="{{ asset('backend/js/custom.js')}}"></script>
<style>
body{background: #848484;background-repeat:round;}
.error-top {text-align: center;background: #fff;width: 30%;position: absolute;left: 50%;top: 50%;transform: translate(-50% , -50%);}
.login{padding:2em;}
.logo{padding:25px 0px;border-bottom:1px solid #E7E7E7;}
.logo img{margin:0px auto;width: 152px;height: 56px;}
form.form-horizontal .form-group label{top: 18px;}
h3.inner-title.t-inner{font-size:18px;font-weight:bold;text-align:center;margin-bottom:1.5em;margin-top:0px;text-transform:uppercase;color: #333;}
.login input[type="text"], .login input[type="password"], .login input[type="email"] {width:100%;padding:0.9em 1em 0.9em 1em;color:#777; font-size:15px;outline: none; font-weight:400;border:1px solid #ddd;background:url('images/icons.png') no-repeat 14px 17px;margin:0.3em 0;font-family:'Roboto', sans-serif;background: #e8f0fe;}
.login input[type="password"] {background:url('images/icons.png') no-repeat 13px -33px;background:#e8f0fe;}
.submit {margin: 1em 0 0;}
.login input[type="submit"] {font-size:20px;font-weight:400;color:#fff;cursor:pointer;outline:none;padding:10px 15px;width:100%;
	border:2px solid #3E5EAB;background:#3E5EAB;margin:0;font-family:'Roboto', sans-serif;transition:0.5s all;}
.login input[type="submit"]:hover {background:#333;border:2px dotted #333;color:#FFF;}
/* login page stylesheet : end - 1 to 103 */
.error{font-weight:bold;color:#a94442;text-align:center;}

.msg-sec{background: #fff;padding: 0px 20px 20px;}
.msg-sec .msg{background: #fff;color: #000;font-size: 16px;font-weight: normal;padding: 10px;border-radius: 10px;box-shadow: 1px 1px 4px 0px gray;}
.msg-sec .msg p{margin-bottom: 0px;padding-bottom: 5px;}
.msg-sec .msg span{color: #f00;font-size: 16px;}
/*============== Responsive start here =================*/

@media(max-width: 767px){
.error-top{padding:2em 0em;}
}

@media(max-width: 576px){
.error-top{width: 90%;}
.login input[type="password"], .login input[type="email"]{padding:0.5em 1em 0.5em 1em;}
.login input[type="submit"]{padding: 0.2rem 15px!important;}
}
</style>
</head>
<body>
<div class="error-page">
  <div class="error-top">
    <div class="logo"><img src="{{ asset('backend/images/logo.png')}}" class="img-responsive"></div>
    <div class="login">
      <h3 class="inner-title t-inner">Login Page</h3>
      <?php 
      $ipaddress = $_SERVER['REMOTE_ADDR'];
      echo $ipaddress;
      ?>
      <form method="POST" class="form-horizontal" action="{{ route('login') }}">
       @csrf
    <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="form-group">
       <input type="email" name="email" id="email" class="form-control" required="">
       <label class="required">Enter E-Mail</label>
      </div>
     </div>
     <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="form-group">
       <input type="password" name="password" id="password" class="form-control" required="">
       <label class="required">Enter Password</label>
      </div>
     </div>
    </div>
    <div class="submit">
     <input type="submit" value="Login" name="login">
    </div> 
   </form>
  </div>
 </div>
</div>
</body>
</html>