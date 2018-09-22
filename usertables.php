<?php
//检查用户是否登录,如果没有登录则转跳到登录页面
if(!isset($_COOKIE['isLogin']) || !$_COOKIE['isLogin']=='1'){
    echo "<script>alert ('請先登入');location.href= ('login.php');</script>";
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
  <title>會員管理系統</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="Shortcut Icon" type="image/x-icon" href="logo-home.png" />
  <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>


</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">圖書管理介面</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-home"></i>
            <span class="nav-link-text">首頁</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts.php">
            <i class="fa fa-bar-chart"></i>
            <span class="nav-link-text">數據分析</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="borrowtables.php">
            <i class="fa fa-stack-overflow"></i>
            <span class="nav-link-text">借閱管理</span>
          </a>
        </li>
 
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="booktables.php">
            <i class="fa  fa-book"></i>
            <span class="nav-link-text">書籍管理</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="usertables.php">
            <i class="fa fa-users"></i>
            <span class="nav-link-text">會員管理</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Components</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Navbar</a>
            </li>
            <li>
              <a href="cards.html">Cards</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Example Pages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Login Page</a>
            </li>
            <li>
              <a href="register.html">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password.html">Forgot Password Page</a>
            </li>
            <li>
              <a href="blank.html">Blank Page</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a> 
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">管理員</a>
        </li>
        <li class="breadcrumb-item active">會員系統</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-book"></i> 會員管理
            <div style="float:right">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
  新增會員
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">新增會員</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


    <!--    <form class="needs-validation" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label for="user_name">姓名</label>
              <input type="text" class="form-control" name="user_name" id="user_name" placeholder="使用者姓名......" required>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
            <div class="col-md-4 mb-3">
               <label for="user_number">學號/職員編號</label>
                            <input type="text" class="form-control" name="user_number" id="user_number" placeholder="使用者帳號......" required>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustomUsername">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                </div>
                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  Please choose a username.
                </div>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom03">City</label>
              <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustom04">State</label>
              <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustom05">Zip</label>
              <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
              <div class="invalid-feedback">
                Please provide a valid zip.
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Submit form</button>
      </form>  -->
 

                      <form  class="needs-validation" novalidate>
                         <div class="form-group">
                          
                          <label for="user_name">姓名</label>
                            <input type="text" class="form-control" name="user_name" id="user_name" placeholder="使用者姓名......" required>
                            <div class="invalid-feedback">
                            請填寫姓名.
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="user_number">學號/職員編號</label>
                            <input type="text" class="form-control" name="user_number" id="user_number" placeholder="使用者帳號......"required>
                            <div class="invalid-feedback">
                            請填寫學號編號.
                          </div>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="user_pwd">使用者密碼</label>
                          <input type="text" class="form-control" name="user_pwd" id="user_pwd" placeholder="使用者密碼......" required>
                          <div class="invalid-feedback">
                            請填寫完整.
                          </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="user_email">聯絡信箱</label>
                          <input type="email" class="form-control" name="user_email" id="user_email" placeholder="12345@mail.com" required>
                          <div class="invalid-feedback">
                            請填寫完整信箱.
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="user_call">手機</label>
                          <input type="tel" class="form-control" name="user_call" id="user_call" placeholder="0987654321......" required>
                          <div class="invalid-feedback">
                            請填寫完整.
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="user_position">職稱</label>
                          <select id="user_position" name="user_position" class="form-control" required>
                            <option selected>學生</option>
                            <option>職員</option>
                            <option>校友</option>
                          </select>
                          <div class="invalid-feedback">
                            請選擇.
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="user_department">科系/單位</label>
                          <input type="text" class="form-control" name="user_department" id="user_department" placeholder="請填寫科系/單位......" required>
                          <div class="invalid-feedback">
                            請填寫完整.
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="user_program"> 年制 </label>
                          <select id="user_program" name="user_program" class="form-control" required>
                            <option selected>四技</option>
                            <option>二技</option>
                            <option>五專</option>
                            <option>碩士</option>
                            <option>職員</option>
                            <option>校友</option>
                          </select>
                          <div class="invalid-feedback">
                            請選擇.
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="user_credit">信用值</label>
                          <input type="text" class="form-control" name="user_credit" id="user_credit" value="80" readonly required>
                        </div>
                         <div class="form-group">
                          <label for="user_rfid">會員卡號</label>
                          <input type="text" class="form-control" name="user_rfid" id="user_rfid" placeholder="請用感應設備讀取卡號" required>
                          <div class="invalid-feedback">
                            請用感應設備讀取卡號.
                          </div>
                        </div> 
                      
                  
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                         <!-- <button type="button" class="btn btn-primary">確定新增</button>  
                          <input type="button" class="btn btn-primary" onclick="addData();" value="建立資料"> &nbsp; -->
  
                          <button class="btn btn-primary" type="submit">建立資料</button>


                        </div>
                  </from> 
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>編輯</th>                  
                  <th>會員卡號</th>
                  <th>姓名</th>
                  <th>學號/編號</th>
                  <th>密碼</th>
                  <th>信箱</th>
                  <th>手機</th>
                  <th>職稱</th>
                  <th>科系/單位</th>
                  <th>年制</th>
                  <th>信用值</th>
                  <th>加入時間</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>編輯</th>                  
                  <th>會員卡號</th>
                  <th>姓名</th>
                  <th>學號/編號</th>
                  <th>密碼</th>
                  <th>信箱</th>
                  <th>手機</th>
                  <th>職稱</th>
                  <th>科系/單位</th>
                  <th>年制</th>
                  <th>信用值</th>
                  <th>加入時間</th>
                </tr>
              </tfoot>


              <tbody id="show" name="show">

               
              </tbody>
              
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>YaoYaru © 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">要登出了嗎?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">如果沒有，請點選取消。</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">取消</button>
            <a class="btn btn-primary" href="login.php?action=logout">確認</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>

<script type="text/javascript">

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        else{
          addData();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();



function addData(){


    jQuery.ajax({
            type: "GET",
            url: "server/useraddData.php", 
            dataType:"text", 
            data:"&user_name="+$('#user_name').val()+"&user_number="+$('#user_number').val()+"&user_pwd="+$('#user_pwd').val()+"&user_email="+$('#user_email').val()+"&user_call="+$('#user_call').val()+"&user_position="+$('#user_position').val()+"&user_department="+$('#user_department').val()+"&user_program="+$('#user_program').val()+"&user_credit="+$('#user_credit').val()+"&user_rfid="+$('#user_rfid').val(),  
            success:function(response){
                if(response==-1){
                    alert("【學號/編號】或【RFID卡號】已經重複註冊！");
                }else{
                    alert("新增成功！");
                }
            },
            });
    setTimeout(function(){
      $( "#user_name" ).focus();
      $( "#user_number" ).val("");
      $( "#user_pwd" ).val("");
      $( "#user_email" ).val("");
      $( "#user_call" ).val("");
      $( "#user_position" ).val("");
      $( "#user_department" ).val("");
      $( "#user_program" ).val("");
      $( "#user_credit" ).val("80");
      $( "#user_rfid" ).val("");
      getData();
    },1000);
    
}
 /*
姓名      學號/職員編號 密碼      信箱        手機      職稱          科系/單位       年制          信用值      人員卡號  加入時間
user_name user_number   user_pwd  user_email  user_call user_position user_department user_program  user_credit user_rfid user_addtime

*/


function getData(){
    jQuery.ajax({
            type: "GET",
            url: "server/usershowtableData.php", 
            dataType:"text", 
            data:"",  
            success:function(response){
              $("#show").html(response);
            },
            });
}

/*
id
user_name
user_number
user_pwd
user_email
user_call
user_position
user_department
user_program
user_credit
user_rfid
user_addtime
*/


function updataData(id,user_name,user_number,user_pwd,user_email,user_call,user_position,user_department,user_program,user_credit,user_rfid,user_addtime){
  jQuery.ajax({
            type: "GET",
            url: "server/userupdataData.php", 
            dataType:"text", 
            data:"&id="+id+"&user_name="+user_name+"&user_number="+user_number+"&user_pwd="+user_pwd+"&user_email="+user_email+"&user_call="+user_call+"&user_position="+user_position+"&user_department="+user_department+"&user_program="+user_program+"&user_credit="+user_credit+"&user_rfid="+user_rfid+"&user_addtime="+user_addtime,  
            success:function(response){
               if(response==0){
                    alert("修改成功！");
                    getData();
               }
            },
            }); 
}

function delData(id,user_name,user_number){
    if(confirm("您確定要刪除【"+user_name+"】學號【"+user_number+"】嗎？")){
        jQuery.ajax({
                type: "GET",
                url: "server/delData.php", 
                dataType:"text", 
                data:"&table=user_data&id="+id,  
                success:function(response){
                   if(response==0){
                        alert("刪除成功！");
                        getData();
                   }
                },
                });            
    }
    else{
        alert("您已取消刪除！");
    }
}
getData();
</script>