
 <html> 
  <head> 
    <title> Tampilan Pertama </title> 
    <link href="tambahadmin.css" rel="stylesheet" type="text/css" > 
  </head> 

  <body> 
    <div id="utama"> 

      <div class="header"> 

        <div class="header_isi"> 

          <div class="gambar"> 

            <form action="tambahadminproses.php" method="POST"> 
              <img src="Pas Foto Anon.jpg" ><br /><br /> 

              <input type="text" name="username" placeholder="Username" class="login_regis">     <br /> 
              <input type="password" name="password" placeholder="Password" class="login_regis"> <br /> 
	
              <input type="Submit" name="login" value="DAFTAR" class="tombol_login"> 
            </form> 

        </div> 
            Sudah punya akun? <a href="hallogin.php" align="center">Login disini</a> 
      </div> 

    </div> 
  </body> 
</html> 