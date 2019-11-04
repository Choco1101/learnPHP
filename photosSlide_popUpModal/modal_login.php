<?php 

$form_code = "123";
$for_testing  = true;



?>

<style>
  body {font-family: Arial, Helvetica, sans-serif;}

  /* Full-width input fields */
  input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  /* Set a style for all buttons */
  button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }

  button:hover {
    opacity: 0.8;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }

  /* Center the image and position the close button */
  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
  }

  img.avatar {
    width: 40%;
    border-radius: 50%;
  }

  .container {
    padding: 16px;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }

  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 140px;
  }

  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
  }

  /* The Close Button (x) */
  .close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: red;
    cursor: pointer;
  }

  /* Add Zoom Animation */
  .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
  }

  @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
  }
    
  @keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
  }

  .error_hide   {
    display: none;
    color: red;
  }

</style>






<div id="id01" class="modal">
  
  <form class="modal-content animate" name="myForm" action="eForm_submit.php" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" id="uname" maxlength="50" value="<?php echo (isset($_COOKIE['remember_uname'])? $_COOKIE['remember_uname']:''); ?>" required>
      <div id="uname_error" class="error_hide">Required field</div>


      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" maxlength="100" value="<?php echo (isset($_COOKIE['remember_email'])? $_COOKIE['remember_email']:''); ?>" required>
      <div id="email_error" class="error_hide">Required field / Invalid Format</div>
       


      <label for="tel"><b>Contact No.</b></label>
      <input type="text" placeholder="Enter Phone Number" name="tel" id="tel" maxlength="50" value="<?php echo (isset($_COOKIE['remember_tel'])? $_COOKIE['remember_tel']:''); ?>" required>
      <div id="tel_error" class="error_hide">Required field</div>
     


      <button type="button" id="notice_submit" onclick="validateForm();">Submit</button>
      <label>
        <input type="checkbox" checked="checked" name="remember" > Remember me
      </label>
    </div>

    <!-- <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div> -->
  </form>
</div>

<script>
$(document).ready(function(){

  $("img").click(function(){
    $("#id01").show();
    // alert($(this).attr("src"));
    var imgsrc = $(this).attr("src");
    $(".avatar").attr("src", imgsrc);


   
  });

  $("#email").focus(function(){$("#email_error").hide();});
  $("#email").blur(function(){
    var x = $("#email").val();
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if ((atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) && x.length!=0) {
      $("#email_error").show();
    }
  });  



  $("#email").focus(function() {
    $("#email_error").hide();
    $("#email_error").html("Required field");
    
  });


//      check email address whether has registrated or not    
  $("#tel").blur(function(){ 

    var selectvalue = $("#email").val();

    if (selectvalue != "") {
      selectvalue = selectvalue + "&form_code=<?php echo $form_code ?>";
      $.ajax({url: 'ajax_check_email.php?email='+selectvalue,
      success: function(output) {
        // alert(output);
  // output = 'OOOOKKKK';
        if (output == 'OOOOKKKK') {
          $("#email_dulicate").text("This email address has been registered. 這個電郵地址已成功登記");
          $("#email_dulicate").show();

        } 
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status + " "+ thrownError);
      }});
    }

  });







/*
  $("#tel").focus(function() {
    $("#tel_error").hide();
    $("#tel_error").html("Required field");
    
  });


  $("#tel").blur(function(){      
  //      check phone whether has registrated or not    
    var tel_no = $("#tel").val();

    if (tel_no != "") {
      // tel_no = tel_no + "&form_code=<?php echo $form_code ?>";
      $.ajax({url: 'phone_check.php?tel='+tel_no,
      success: function(output) {
        // alert(output);
  // output = 'OOOOKKKK';
        if (output == 'OOOOKKKK') {
          $("#tel_error").text("This Contact No. has been registered. 這個聯繫電話已成功登記");
          $("#tel_error").show();


        } 
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status + " "+ thrownError);
      }});
    }
  });
*/


});

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


function validateForm() {

  $("#uname_error").hide();
  $("#tel_error").hide();
  $("#email_error").hide();



  // email 
  var w_return = true;
  var x = document.forms["myForm"]["email"].value;
  var atpos = x.indexOf("@");
  var dotpos = x.lastIndexOf(".");  




  
  if ($("#uname").val() == "") {
   w_return = false; $("#uname_error").show();
  }

  if ($("#tel").val() == "" || $("#tel_error").html().indexOf("成功登記") >0) {
   w_return = false;  $("#tel_error").show();
  }


  if (x.length=0 || atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)  {
    w_return = false;
    $("#email_error").show();
  }

  if ($("#email_error").html().indexOf("email")>0) 

    { w_return = false;}      







  if (w_return === true)  {
    myForm.submit();
    
  } else {
        alert("error");


    }
}
    



</script>

<!-- </body>
</html> -->
