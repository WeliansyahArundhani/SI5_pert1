
 <html> 
  <head> 
    <title> Tampilan Pertama </title> 
    <link href="hallogin.css" rel="stylesheet" type="text/css" > 
  </head> 

  <body> 
    <div id="utama"> 

      <div class="header"> 

        <div class="header_isi"> 

          <div class="gambar"> 

            <form action="loginproses.php" method="POST"> 
              <img src="Pas Foto Anon.jpg" ><br /><br /> 

              <input type="text" name="username" placeholder="Username" class="login_regis">     <br /> 
              <input type="password" name="password" placeholder="Password" class="login_regis"> <br /> 

            <div class="chexbox"> 
              <input type="checkbox" name="check" > Remember me <br /> 
            </div> 

              <input type="Submit" name="login" value="LOGIN" class="tombol_login"> 
            </form>  

        </div> 
            Belum punya akun? <a href="tambahadmin.php" align="center">Daftar disini</a> 
      </div> 

    </div> 
  </body> 
</html> 