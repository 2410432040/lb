<?php 

include("server/connect.php");

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>借閱單</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
  <link href="css/toastr.css" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
  <script type="text/javascript" src="js/toastr.js"></script>    
  <script type="text/javascript" src="js/layer/layer.js"></script>  
</head>
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"><span id="name"><center>請感應會員卡</content></span></div>
      <div class="card-body">
      <input id="barCode" name="barCode" value="" type="" onclick="yo1();" placeholder="RFID CARD" style="" >

                
        <div class="signin">
            <center><h1>會員姓名</h1><font style="font-size:100px;"><span id="person">Login...</span></content>
        </div>
  

      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/barcode.js"></script>
  <script type="text/javascript">
      toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }
      $("#barCode").startListen({
          barcodeLen : 1,
          letter : true,
          number : true,
          check  : false,
          show : function(code){
              jQuery.ajax({
                      type: "GET", // HTTP method POST or GET
                      url: "server/username.php", //Where to make Ajax calls
                      dataType:"text", // Data type, HTML, json etc.
                      data:"&rID="+code,  
                      success:function(response){
                        alert(response);
                          if(response=="-1"){
                              toastr.error("<h3>此卡無效，請聯繫管理者</h3>")
                          }else{
                              var temp = response.split(",")

                              if(temp[0]=="in"){
                                  toastr.success("<h3>歡迎參賽者：</br>"+temp[1]+"進入會場</h3>");
                              }else if (typeof temp[1] == "undefined"){
                                  toastr.info("123");
                              }else{
                                  toastr.info("<h3>參賽者：</br>"+temp[1]+"離開會場</h3>");
                              }
                          }
                      },
              });
          }
      });
  </script>

</body>

</html>
