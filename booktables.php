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
  <title>書籍管理系統</title>
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
        <li class="breadcrumb-item active">書籍系統</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-book"></i> 書籍管理
            <div style="float:right">
              <!--button type="button" class="btn btn-success">新增</button -->
 <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
  新增書籍
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">新增書籍</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- 書籍名稱  作者 ISBN 書籍簡介 書籍卡號
id,
book_name, 
book_isbn,
book_writer,
book_Introduce,
book_id,
book_addid, 
 -->


          <form class="needs-validation" novalidate>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="book_name">書籍名稱</label>
                <input type="text" class="form-control" name="book_name" id="book_name" placeholder="Book Name" required>
                    <div class="invalid-feedback">請填寫欄位.</div>
              </div>
              <div class="form-group col-md-6">
                <label for="book_writer">作者</label>
                <input type="text" class="form-control" name="book_writer" id="book_writer" placeholder="Book Writer" required>
                    <div class="invalid-feedback">請填寫欄位.</div>
              </div>
            </div>
            <div class="form-group">
              <label for="book_isbn">ISBN</label>
              <input type="text" class="form-control" name="book_isbn" id="book_isbn" placeholder="ISBN" required>
                  <div class="invalid-feedback">請填寫欄位.</div>
            </div>
            <div class="form-group">
              <label for="book_id">書籍卡號</label>
              <input type="text" class="form-control" name="book_id" id="book_id" placeholder="請用感應設備讀取卡號." required>
                  <div class="invalid-feedback">請用感應設備讀取卡號.</div>
            </div>
            <div class="form-group">
              <label for="book_Introduce">書籍簡介</label>
              <input type="text" class="form-control" name="book_Introduce" id="book_Introduce" placeholder="Book Introduce......" required>
                  <div class="invalid-feedback">請填寫欄位.</div>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
       <!-- <button type="button" class="btn btn-primary">確定新增</button> 
        <input type="button" class="btn btn-primary" onclick="addData();" value="建立資料"> &nbsp;  -->
        <button class="btn btn-primary" type="submit">建立資料</button>
      </div>
    </form>
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
                  <th>書籍名稱</th>
                  <th>作者</th>
                  <th>ISBN</th>
                  <th>書籍簡介</th>
                  <th>書籍卡號</th>
                  <th>建立時間</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>編輯</th>
                  <th>書籍名稱</th>
                  <th>作者</th>
                  <th>ISBN</th>
                  <th>書籍簡介</th>
                  <th>書籍卡號</th>
                  <th>建立時間</th>
                </tr>
              </tfoot>

               <tbody id="show" name="show">

               
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

/* 書籍名稱  作者 ISBN 書籍簡介 書籍卡號
id,
book_name, 
book_isbn,
book_writer,
book_Introduce,
book_id,
book_addid, 
 */

function addData(){
    jQuery.ajax({
            type: "GET",
            url: "server/bookaddData.php", 
            dataType:"text", 
            data:"&book_name="+$('#book_name').val()+"&book_isbn="+$('#book_isbn').val()+"&book_writer="+$('#book_writer').val()+"&book_Introduce="+$('#book_Introduce').val()+"&book_id="+$('#book_id').val(),  
            success:function(response){
                if(response==-1){
                    alert("RFID卡號已經重複使用！");
                }else{
                    alert("新增成功！");
                }
            },
            });
    setTimeout(function(){
      $( "#book_name" ).focus();
      $( "#book_name" ).val("");
      $( "#book_isbn" ).val("");
      $( "#book_writer" ).val("");
      $( "#book_Introduce" ).val("");
      $( "#book_id" ).val("");
      $( "#book_addid" ).val("");
      getData();
    },1000);
    
}



function getData(){
    jQuery.ajax({
            type: "GET",
            url: "server/bookshowtableData.php", 
            dataType:"text", 
            data:"",  
            success:function(response){
              $("#show").html(response);
            },
            });
}

/*
id,
book_name, 
book_isbn,
book_writer,
book_Introduce,
book_id,
book_addid, 
*/

function updataData(id,book_name,book_isbn,book_writer,book_Introduce,book_id,book_addid){
  jQuery.ajax({
            type: "GET",
            url: "server/bookupdataData.php", 
            dataType:"text", 
            data:"&id="+id+"&book_name="+book_name+"&book_isbn="+book_isbn+"&book_writer="+book_writer+"&book_Introduce="+book_Introduce+"&book_id="+book_id+"&book_addid="+book_addid,  
            success:function(response){
               if(response==0){
                    alert("修改成功！");
                    getData();
               }
            },
            }); 
}

function delData(id,book_name,book_id){
    if(confirm("您確定要刪除卡號【"+book_id+"】書名【"+book_name+"】嗎？")){
        jQuery.ajax({
                type: "GET",
                url: "server/delData.php", 
                dataType:"text", 
                data:"&table=book_data&id="+id,  
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