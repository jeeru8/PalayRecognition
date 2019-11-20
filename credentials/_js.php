
    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/examples/sign-in.js"></script>
    <script type="text/javascript">
      function checkPass()
      {
          var pass1 = document.getElementById('pass1');
          var pass2 = document.getElementById('pass2');
          var message = document.getElementById('error-nwl');
          var goodColor = "#66cc66";
          var badColor = "#ff6666";
          
          if(pass1.value.length > 5)
          {
              pass1.style.backgroundColor = goodColor;
              message.style.color = goodColor;
              message.innerHTML = "character number ok!"
          }
          else
          {
              pass1.style.backgroundColor = badColor;
              message.style.color = badColor;
              message.innerHTML = "Enter atleast 6 characters"
              return;
          }
        
          if(pass1.value == pass2.value)
          {
              pass2.style.backgroundColor = goodColor;
              message.style.color = goodColor;
              message.innerHTML = "Password match!"
          }
          else
          {
              pass2.style.backgroundColor = badColor;
              message.style.color = badColor;
              message.innerHTML = "Password doesn't match!"
          }
      }  
    </script>