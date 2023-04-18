<?php
include ('sambungan.php');
if (isset($_POST['username_form'])) {
    $username = $_POST['username_form'];
    $password = $_POST['password_form'];
    $sql = "SELECT * FROM pengguna";
    $result = mysqli_query($sambungan, $sql);
    $jumpa = FALSE;
    while($pengguna = mysqli_fetch_array($result)) {
      if ($pengguna["username"] == $username
      && $pengguna["password"] == $password)
          $jumpa = TRUE;
        
    }
    if ($jumpa == TRUE)
        header("location: utama.html");
    else
        echo " <script>
        alert('kesalahan pada username atau password');
        window.location='login.php'</script>";
}       ?>

<html>
<link rel="stylesheet" href="borang.css">
<body>
    <h3 class="tajuk">TUN IZZ HOMESTAY</h3>
    <h3 class="login">SIGN IN</h3>
    <form action=login.php method=post class="login">
          <table>
             <tr>
             <td><img src="username.png"></td>
             <td>
                 <input type="text" name="username_form" placeholder="username">
             </td>
             <tr>
             <tr>
             <td><img src="password.png"></td>
             <td>
                 <input type="password" name="password_form" placeholder="password">
             </td>
             </tr>
         </table>
        <button class="login" type="submit">Login</button>
        <button class="signup" type="button" onclick="window.location='signup.php'">Sign Up</button>
    </form>
</body>
</html>
                 
      