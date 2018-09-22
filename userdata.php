
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>個人管理</title>
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
    <a class="navbar-brand" href="userdata.php">個人管理</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="userdata.php">
            <i class="fa fa-bar-chart"></i>
            <span class="nav-link-text">個人資料</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="borrowdata.php">
            <i class="fa fa-stack-overflow"></i>
            <span class="nav-link-text">借閱紀錄</span>
          </a>
        </li>
 
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="bookdata.php">
            <i class="fa  fa-book"></i>
            <span class="nav-link-text">書籍查詢</span>
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
          <a href="#">個人管理</a>
        </li>
        <li class="breadcrumb-item active">個人資料</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-book"></i> 個人資料
            
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">    
       </div>
     </div>
   </div>
  </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                
              </tfoot>


              <tbody id="show" name="show">

               
              </tbody>
              
              </tbody>
            </table>
          </div>
        </div>
     
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
            <a class="btn btn-primary" href="usersignin.php?action=logout">確認</a>
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




function getData(){
    jQuery.ajax({
            type: "GET",
            url: "server/userpersonal.php", 
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