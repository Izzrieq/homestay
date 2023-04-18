<?php
include('db/sambungan.php');
if(isset($_POST['username_form'])) {
    $username = $_POST['username_form'];
    $password = $_POST['password_form'];
    $sql - "INSERT INTO pengguna (username, password)
            values ('$username', '$password')";
    $result = mysqli_query($sambungan, $sql);
    if ($result)
        echo "<script>alert('Berjaya signup')</script>";
    else
        echo "<script>alert('Tidak berjaya signup')</script>";
       echo "<script>window.location='login.php'</script>";
}
?>

<html>
<link rel="stylesheet" href="borang.css">
    
<body>
   <h3 class="signup">SIGN UP</h3>
   <form action="signup.php" method="post" class="signup">
       <table>
          <tr>
             <td><img src= "username.png"></td>
             <td><input type="text" name="username_form" placeholder="username"></td>
          </tr>
          <tr>
              <td><img src="password.png"></td>
              <td><input type="text" name="password_form" placeholder="password"></td>
          </tr>
       </table>
          <button class="save" type="submit">Save</button>
          <button class="login" type="button" onclick="window.location='login.php'">Login</button>
    </form>
</body>
</html>