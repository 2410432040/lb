<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>入口門禁</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
        <link href="css/toastr.css" rel="stylesheet">
        <style type="text/css">
            input{
                width: 0px;height: 0px;border-radius: 0px solid #ddd;
                display: block;
                margin : 0 auto;
                padding: 0px 0px;
                outline: none;
            }
        </style>
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/toastr.js"></script>
        <script type="text/javascript" src="js/layer/layer.js"></script>
        <script type="text/javascript" src="js/jquery.barcode.js"></script>
        <script language="JavaScript">
        function showtime(){
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
            timeValue = (hours >= 12) ? "下午" : "上午";
            timeValue += ((hours > 12) ? hours - 12 : hours) + " 點";
            timeValue += ((minutes < 10) ? " 0" : " ") + minutes + " 分";
            timeValue += ((seconds < 10) ? " 0" : " ") + seconds + " 秒";
            $('#clock').html(timeValue);
            setTimeout("showtime()",1000);
        }
        showtime();
        </script>
    </head>
    <input id="barCode" value="" type="text" placeholder="stay focus" style="" name="barCode">
    <body onload="showtime();">           
           <body onload="showtime();">           
        <div class="signin">
            <div class="signin-head"><img src="images/test/head.png" alt="" class="img-circle"></div>
            <center><h1>館內人數</h1><font style="font-size:100px;"><span id="person">Login...</span></content>
            <h4><span id="clock"></span></h4>
        </div>
    </body>
    </body>
</html>



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
                    url: "server/postData.php", //Where to make Ajax calls
                    dataType:"text", // Data type, HTML, json etc.
                    data:"&rID="+code,  
                    success:function(response){
                        
                        if(response=="null"){
                            toastr.error("<h3>此卡無效，請聯繫管理者</h3>")
                        }else{
                            var temp = response.split(",")

                            if(temp[0]=="in"){
                                toastr.success("<h3>歡迎會員："+temp[1]+"</br>進入圖書館</h3>");
                            }else{
                                toastr.info("<h3>會員：</br>"+temp[1]+"離開</h3>");
                            }
                        }
                    },
            });
        }
    });
</script>
<script type="text/javascript">

    var upDataPerson = setInterval( function(){

    jQuery.ajax({
        type: "POST",
        url: "server/postPerson.php", 
        dataType:"text", 
        data:"",  
        success:function(response){
            $('#person').text(response);
        },
        });

    } , 200 );

</script>

