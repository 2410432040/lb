<?php
//声明一个删除Cookie的函数,用来删除在客户端生成的所有Cookie
function clearcookies(){
    setcookie('username','',time()-3600);//删除标识符为username的Cookie
    setcookie('isLogin','',time()-3600);//删除标识符为isLogin的Cookie
}
 
//定义一个函数，用三目运算判断$_GET()是否有值，若没有，将空值赋给它
function _get($key){
    return $_GET[$key]=isset($_GET[$key])?$_GET[$key]:'';
}
 
//判断用户是否执行的是登录操作
if(_get('action')=='login'){
    //首先清除在之前在客户端生成的Cookie
    clearcookies();
 
    //检查用户名是否是admin,并且密码是否好似123456
    if($_POST['username']=='admin' && $_POST['password']=='123456'){
        //向Cookie中设置标识符为username,值是表单中提交的值,Cookie存在一周
        setcookie('username',$_POST['username'],time()+60*60*24*7);
 
        //向Cookie中设置标识符为isLogin,用来检测在主页面用户是否登陆,Cookie存在一周
        setcookie('isLogin','1',time()+60*60*24*7);
 
        //生成Cookie后,转跳到主页
        header('Location:index.php');
    }else{
        echo "<script>alert ('帳號或密碼錯誤');history.back();</script>";
    }
//判断用户是否执行的是退出登陆操作
}else if(_get('action')=='logout'){
    //退出登录时清除客户端所有的Cookie
    clearcookies();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin Login</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>

</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Admin Login</div>
      <div class="card-body">
         <form action="login.php?action=login" method="post">
          <div class="form-group">
            <label for="user_login">address</label>
           <!-- <input class="form-control" id="username" name="username "type="text" aria-describedby="emailHelp" placeholder="address"> -->
          <input class="form-control" type="text" name="username" value="admin" />
          </div>
          <div class="form-group">
            <label for="user_password">Password</label>
            <!--<input class="form-control" id="password" name="password" type="password" placeholder="Password"> -->
            <input class="form-control" type="password" name="password" value="123456" />
          </div>
          <input class="btn btn-primary btn-block" type="submit" value="登入">
         <!-- <a class="btn btn-primary btn-block" href="index.html">Login</a> -->
        </form>
    
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>



