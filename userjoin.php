
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
      <div class="card-header">註冊會員</div>
      <div class="card-body">
         <form method="post">
          <div class="form-group">
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






          </div>
          
          <input class="btn btn-primary btn-block" type="submit" value="註冊">
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



