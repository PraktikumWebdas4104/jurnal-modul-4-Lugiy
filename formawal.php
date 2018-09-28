<?php 
session_start();
error_reporting(0);
    
     $user = array('user' =>'lugi','pass'=> 'yunus');
    
     if (isset($_POST['submit'])) {

     if ($_POST['username']==$user['user'] && $_POST['password']==$user['pass']) {
   
   
          $_sesion['username'] = $_POST['username'];
          echo "login masuk, $_POST[username]";
      }
      else{
          form_login();
          echo "username/password salah";
      }
   }
      else{
          form_login();
   }
  
       function form_login(){ ?>

      <form action="<?php echo $_SERVER['php_SELF'];?>" method="POST">
      <label for="username">username :</label>
      <input type="text" name="username"><br><br>
      <label for="password">password :</label>
      <input type="password" name="password"><br><br>
      <input type="submit" name="submit" value="login">
      </form>

      <h1>Pilih</h1>
      <table>
      <td><input type="checkbox" name='makanan[]' value="Rujak">Rujak</td>
      <td><input type="checkbox" name='buah[]' value="Mangga">Mangga</td>
      <td><input type="checkbox" name='laptop[]' value="MSI">MSI</td>
      <input type="submit" name="submit" value="login">
      </table>
  
    <?php } ?>
