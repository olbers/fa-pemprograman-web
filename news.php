<html>
    <head>
        <title>
            Go Green Community
        </title>
        
        <link rel="stylesheet" type="text/css" href="tampil.css"/
    </head>
    <body background="img/background.png" >
        <div id ="utama">
            <div id="header"><img src="img/header_new.png" width="588px" height="201px"/></div>
            <div id="menu">
                <a href="index.html"><img src="img/btn_home.png"/></a>
                <a href="#"><img src="img/btn_event.png"/></a>
                <a href="#"><img src="img/btn_news.png"/></a>
                <a href="about.html"><img src="img/btn_about.png"/></a>
                
            </div>
            <div id="kiri">
            	<img src="img/info.png"/><br>

                <p >
                	-Kebarakan di Gunung <br>
					  Merapi <br>
                    -Gerakan 10.000 Tanam <br>
					Pohon Bakau<br>
                    -Bersih-bersih Gunung <br>
					Sumbing <br>
               	
                </p>
            </div>
            <div id="isi">
            	<center><h1> <blink>Welcome To The Go<br>
						Green Community
                </blink></h1></center>
				
           <?php
           
           include "koneksi.php";
           $sql = "select * from news";
           $hasil = mysql_query($sql);
           while($data = mysql_fetch_assoc($hasil)){ ?>
					 <table cellpadding="5" >
							<tr>
								<b> <font size="20" face="colibri">	<?php echo $data['judul_news'];?></font></b>
									
							</tr>
					<br/>					 
							<tr>
								<?php echo substr($data['isi_news'],0,200);?> <a href="#">Selanjutnya..</a>
							</tr>
					 <br/>
					 </table>
          
          <?php
          	 }
           
				?>
           
           
            </div>
           
            
          <div id="footer">
          		<p><marquee bgcolor="#FFFFFF">Copyright by Go Green Community
                </marquee>
                </p>
          </div>  
        </div>
        
    </body>
    

</html>