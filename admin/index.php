<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="page">
          <?php 
           if(isset($_GET['pesan'])){
             if($_GET['pesan'] == "gagal"){
               echo "<center>Login gagal! username atau password salah!</center>";
             }
           }
          ?>
      <div class="container">
          <h1>Login</h1>
            <form method="post" action="ceklogin.php">
                <label>Username</label><br>
                <input type="text" name="username">
                <label>Password</label><br>
                <input type="password" name="password">
                <button type="submit" id="login" value="Login">Login</button>
            </form>
      </div>
      </div>   
    </body>
</html>