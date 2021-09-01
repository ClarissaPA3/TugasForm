<form method="post" action="proses_login.php" id="login-form">
 <?php 
 if(isset($_GET["login_error"])){ ?>

   <h4 style="color: red; text-align: center;" >Maaf Password atau username salah</h4>
 <?php } ?>
 <style>
body {
  background: lightblue url("img_1") no-repeat fixed center;
}
</style>
<body>
  <div class="jumbotron text-center">
  <h1>Selamat Datang Di Halaman Login</h1>
  <p>Silahkan Login dengan menggunakan email dan password anda!</p> 
</div>
</body>
    <br />
    <div class="input-group">
     <input type="text" name="username" value="" placeholder="Username or Email" style="width: 280px;">
    </div>
    <div class="input-group">
     <input type="password" name="password" value="" placeholder="Password" style="width: 280px;">
    </div>
    <div class="input-group"><input type="submit" name="commit" value="Login" class="btn">
    </div>
   </form>
