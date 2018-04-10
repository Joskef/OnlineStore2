<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

   !-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/register.css" rel="stylesheet">
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>




      <script>

          var onloadCallback = function() {
              grecaptcha.render('captcha', {
                  'sitekey' : '6LdcS1IUAAAAAAv-k4AUizWqw1hdzNK9gA2tavDG'
              });
          };

          $(document).on('ready', function(){
              $('#.datepicker').datepicker({
                  format: 'mm/dd/yyyy',
                  startDate: '0d'
              });

          });


          function signUp() {
              var output=true;

              if($('#fName').val()==null||$('#fName').val()=="") {
                  alert("First Name is Blank.");
                  output = false;
              }
              else if($('#lName').val()==null||$('#lName').val()=="")
              {
                  alert("Last Name is Blank.");
                  output = false;
              }
              else if($('#address').val()==null||$('#address').val()=="")
              {
                  alert("Address is Blank.");
                  output = false;
              }
              else if($('#username').val()==null||$('#username').val()=="")
              {
                  alert("Username is Blank.");
                  output = false;
              }
              else if($('#email').val()==null||$('#email').val()=="")
              {
                  alert("Email is Blank.");
                  output = false;
              }
              else if($('#password').val()==null||$('#password').val()=="")
              {
                  alert("Password is Blank.");
                  output = false;
              }
              else if($('#password').val()!=$('#password2').val())
              {
                  alert("Password is not Confirmed.");
                  output = false;
              }
              else if($('#shipAddress').val()==null||$('#shipAddress').val()=="")
              {
                  alert("Ship Address is Blank.");
                  output = false;
              }
              else if($('#secretQuestion').val()==null||$('#secretQuestion').val()=="")
              {
                  alert("Secret Question is Blank.");
                  output = false;
              }
              else if($('#secretAnswer').val()==null||$('#secretAnswer').val()=="")
              {
                  alert("First Name is Blank.");
                  output = false;
              }
              else if($('#secretAnswer2').val()!=$('#secretAnswer').val())
              {
                  alert("Answer is not Confirmed.");
                  output = false;
              }
              if(grecaptcha.getResponse()=="")
              {
                  alert("Captcha not Checked.");
                  output = false;
              }

              if(output==false){
                  return;
              }






              $.ajax({
                  url: '<?php echo base_url('action/' . USER_REGISTER) ?>',
                  type: 'post',
                  dataType: 'json',
                  data: {
                        <?=COLUMN_FIRST_NAME?>:  $('#fName').val(),
                        <?=COLUMN_LAST_NAME?>: $('#lName').val(),
                        <?=COLUMN_ADDRESS?>: $('#address').val(),
                        <?=COLUMN_CC?>: $('#cc').val(),
                        <?=COLUMN_EMAIL?>: $('#email').val(),
                        <?=COLUMN_USER_USERNAME?>: $('#username').val(),
                        <?=COLUMN_USER_PASSWORD?>:$('#password').val(),
                        <?=COLUMN_SHIPPING_ADDRESS?>:$('#shipAddress').val(),
                        <?=COLUMN_SECRET_QUESTION?>:$('#secretQuestion').val(),
                        <?=COLUMN_SECRET_ANSWER?>:$('#secretAnswer').val(),
                        'captcha': grecaptcha.getResponse()


                  }
              })
                  .done(function (result) {

                      if(result['status']=='success'){
                          alert(result['message']);
                          window.location.href = '<?=base_url()?>';
                      }
                      else{
                          alert(result['message']);
                      }
                      grecaptcha.reset();
                  })
                  .fail(function () {
                      console.log("fail");
                      grecaptcha.reset();
                  })
                  .always(function () {
                      console.log("complete");
                      grecaptcha.reset();
                  });


          }

      </script>
  </head>
  <body>


    <div class="container" id="registerContainer">
        <h2>Create New Account</h2>
        <br>
        <div class="col-sm-12">
        <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-4 form-group">
                           <label>First Name</label>
                            <input type="text" placeholder="Enter First Name Here.." id="fName" class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                        <label>Last Name</label>
                            <input type="text" placeholder="Enter Last Name Here.." id="lName" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 form-group">
                            <label>Address</label>
                                <input type="text" placeholder="Enter Address Here.." id="address" class="form-control">
                        </div>
                        <div class="col-sm-8 form-group">
                            <label>Credit Card Number</label>
                                <input type="text" placeholder="Enter Credit Card Number Here... (Optional)" id="cc" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 form-group">
                            <label>Email Address</label>
                                <input type="text" placeholder="Enter Email Address Here.." id="email" class="form-control">
                        </div>
                    </div>
                    <!--
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Date of Birth</label>
                            <input type="text"  placeholder="Click to Pick Date" class="form-control datepicker" data-provide="datepicker" id="birthday">
                        </div>
                    </div>

                    -->
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Username</label>
                            <input type="text" placeholder="Enter Username" id="username"  class="form-control"></text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Password</label>
                            <input type="password" placeholder="Enter Password" id="password" class="form-control"></text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Confirm Password</label>
                            <input type="password" placeholder="Re-Enter Password" id="password2" class="form-control"></text>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Shipping Address</label>
                                <input type="text" placeholder="Enter Shipping Address Here.." id="shipAddress"  class="form-control"></text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Secret Question</label>
                                <input type="text" placeholder="Enter Secret Question" id="secretQuestion" class="form-control"></text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Answer to Question</label>
                            <input type="password" placeholder="Enter Answer to Question" id="secretAnswer" class="form-control"></text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Confirm Answer</label>
                            <input type="password" placeholder="Re-Enter Answer to Question" id="secretAnswer2" class="form-control"></text>
                        </div>
                    </div>
                    <div id="captcha"></div>

                    <button type="submit" class="btn btn-lg btn-info" id="btnSubmit" onclick="signUp()">Submit</button>
                </div>
        </div>
        </div>
    </div>
      
    <!-- Bootstrap core JavaScript -->
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
            async defer>
    </script>
    <script src="<?=base_url()?>assets/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
