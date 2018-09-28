<?php 

  if (isset($_POST['kirim'])) {
    $username=$_POST=['username']
    $password=$_POST=['password']
    $user=array(
                "user"=>"lugi",
                "pass"=>"yunus");

    if($username==$user['user']&&$password==$user['pass']) {
      echo "oke"."<br>";
    }


?>
    
    <form method="POST">
      Makanan  <input type="checkbox" name='makanan[]' value="Rujak"></td>
      buah  <input type="checkbox" name='buah[]' value="Mangga"></td>
      Laptop  <input type="checkbox" name='laptop[]' value="MSI"></td>
      <input type="submit" name="submit" value="login">
    </form>>

  }
 ?>
