<?php 
session_start();
$koneksi= new mysqli("localhost","root","","trainittoko");

 ?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Apotikku.com</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">

  
</head>
<body>

  <!-- navabar awal -->

  <nav class="navbar navbar-default navbar-fixed-top" style="margin-top: 0;padding-top: 0; ">

   <nav style="font-family: 'Californian FB'; font-size: 15px;">
     <ol class="breadcrumb" style="margin-bottom: 0;padding-bottom: 0; background-color: #E0FFFF;">
      <li style="color: gray;"><a href="#">Download Aputikku app</a></li>
      <li style="text-align: right;">Mitra apotekku</li>
      <li>Mulai Berjualan</li>
      <li>Promo</li>
    </ol></nav>


    <div class="container-fluid" style="font-family: 'Comic Sans MS';">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style="margin: 0;padding: 0;" ><img src="img/apotekku.png" style="height: 50px;"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Masuk<span class="sr-only">(current)</span></a></li>
          <li><a href="#">Daftar</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategori <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><img src="img/medicine.png" style="width: 20px;">   Obat</a></li>
              <li><a href="#"><img src="img/pharmacy.png" style="width: 20px;">   Suplement</a></li>
              <li><a href="#"><img src="img/pill.png" style="width: 20px;">   Herbal</a></li>
              <li><a href="#"><img src="img/makeover.png" style="width: 20px;">   Kecantikan</a></li>
              <li><a href="#"><img src="img/eye.png" style="width: 20px;">    Mata</a></li>
              <li><a href="#"><img src="img/lungs.png" style="width: 20px;">    Paru-paru</a></li>
              <li><a href="#"><img src="img/stomach.png" style="width: 20px;">    Lambung</a></li>

              <li role="separator" class="divider"></li>
              <li><a href="#"><img src="img/baby.png" style="width: 20px;">   Produk Bayi</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><img src="img/injection.png" style="width: 20px;">    Alat Kesehatan</a></li>
              <li role="separator" class="divider"></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left">

          <div class="form-group" >
            <input type="text" class="form-control" placeholder="Cari Produk" style="width: 500px; ">

          </div>
          <button type="submit" class="btn btn-default">Cari</button>
        </form>
        <ul class="nav navbar-nav navbar-right">

          <li><a href="#"><img src="img/shop.png" style="width: 20px">  Keranjang</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pusat Bantuan <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- nafbar akhir -->



  <!-- iklan awal -->
  <div class="jumbutron" style="margin-top: 100px; margin-bottom: 0;">
    <div class="container">
      <div class="jumbutron">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="box-shadow: 0 0 5px;">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active" ></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox" >
            <div class="item active">
              <img src="img/obat3.jpg" alt="...">
              <div class="carousel-caption">

              </div>
            </div>
            <div class="item">
              <img src="img/obat3.jpg" alt="...">
              <div class="carousel-caption">

              </div>
            </div>
            <div class="item">
              <img src="img/obat3.jpg" alt="...">
              <div class="carousel-caption">

              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <!-- ikelan akhir -->

      <!-- promo awal -->
      <div class="jumbotron" style="background-color: white; margin-top: 0px; margin-bottom: 0;padding: 0;" >

        <h2 class="text-center" style="color: blue;font-family: 'Comic Sans MS';">Promo</h2>

        <!-- slider -->

        <div class="container ">
          <div class="row">

            <div class="col-sm-3">
              <div class="thumbnail"  style="box-shadow: 0 0 5px;">
                <img src="img/promo.jpg">
              </div>
            </div>
            
            <div class="col-sm-3">
             <div class="thumbnail"  style="box-shadow: 0 0 5px;">
              <img src="img/promo2.jpg">
            </div>
          </div>
          
          <div class="col-sm-3">
            <div class="thumbnail"  style="box-shadow: 0 0 5px;">
              <img src="img/promo.jpg">
            </div>
          </div>
          
          <div class="col-sm-3">
            <div class="thumbnail"  style="box-shadow: 0 0 5px;">
              <img src="img/promo2.jpg">
            </div>
          </div>
          
        </div>
      </div>

      <div id="slider1" style="margin: 0;padding: 0;box-shadow: 0 0 5px; overflow-x: hidden;">
        <div id="slide-holder1">
          <div class="slide1"><img src="img/promo2.jpg" alt="" /></div>
          <div class="slide1"><img src="img/promo.jpg" alt="" /></div>
          <div class="slide1"><img src="img/promo2.jpg" alt="" /></div>
          <div class="slide1"><img src="img/promo.jpg" alt="" /></div>
        </div>
      </div><br>
    </div>
    <!-- promo akhir -->




     <!-- Produk awal -->

     <div class="jumbotron" style="background-color: white; margin-top: 0px;">
      <section class="produk" id="produk" style="margin-top: 0px;">
        <hr><h2 class="text-center" style="font-family: 'Comic Sans MS';">PRODUK TERFAVORIT</h2>
        <hr>

        <div class="container " style="font-family: 'Times New Roman';">
          <div class="row">


            <?php $ambil=$koneksi->query("SELECT * FROM produk "); ?>
            <?php while ($perproduk=$ambil->fetch_assoc()) {?>
            <div class=" col-md-3">
              <div class="thumbnail" >
                <img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>">
                <div class="caption">
                  <h3 style="text-align: center; margin: 0;"><?php echo $perproduk['nama_produk']; ?></h3>
                  <h4 style="color: orange;margin: 0;padding: 0 ;">
                    Rp. <?php echo  number_format($perproduk['harga_produk']); ?></h4>
                  <img src="img/apotek.png" style="width: 15px">  Apotik Mahakam JL. Mahakam No. 21 Surabaya<br>
                  <img src="img/star2.png" style="height: 15px">
                </div>
              </div>
            </div>
          <?php } ?>
          </div>
          <div class="container text-center" style="font-family: 'Californian FB';">
            <div class="row">
             

          </section>

         </div>


       </div>
     </div>
     <!-- Produk akhir -->



     <!-- artikel -->
     <footer>
      <div class="container text-center" style="background-color: #F8F8FF;width: 100%;">
        <div class="jumbotron">
          <div class="row" style="padding: 0px; padding-bottom: 0px;">
            <div class="col-sm-12">

              <h4 style="font-family: 'Comic Sans MS';">ARTIKEL KESEHATAN</h4><hr>
              <div class="row" style="text-align: left; ">

                <div class="col-sm-4 wow fadeInLeft">
                 <img src="img/penjakit1.jpg" style="width: 100%; box-shadow: 0 0 2px; ">
                 <h4 style="font-family: 'Comic Sans MS';"> Kenali Bahaya Brucellosis Pada Manusia</h4><hr style="margin: 0;padding: 0;">
                 <div style="font-family: 'Times New Roman'; font-size: 15px;">  Brucellosis adalah infeksi bakteri brucella pada manusia yang ditularkan oleh hewan. Bakteri ini dapat menular melalui produk-produk olahan susu terutama yang belum melalui proses pas... </div><a href="">Lebih lanjut</a>

               </div>
               <div class="col-sm-4 wow fadeIncenter" >
                 <img src="img/penjakit2.jpg" style="width: 100%;box-shadow: 0 0 3px;">
                 <h4 style="font-family: 'Comic Sans MS';">Bronkospasme</h4><hr style="margin: 0;padding: 0;">
                 <div style="font-family: 'Times New Roman'; font-size: 15px;">  Bronkospasme adalah penyempitan saluran pernafasan menuju paru-paru atau bronkus akibat mengencangnya otot-otot dinding bronkial yang melapisinya. Oleh karena itu, asupan oksigen yang masuk akan ...  </div><a href="">Lebih lanjut</a>

               </div>
               <div class="col-sm-4 wow fadeIncenter">
                 <img src="img/penjakit3.jpg" style="width: 100%;box-shadow: 0 0 2px;">
                 <h4 style="font-family: 'Comic Sans MS';"> Kenali Penyakit Batuk Rejan</h4><hr style="margin: 0;padding: 0;">
                 <div style="font-family: 'Times New Roman'; font-size: 15px;">  Batuk rejan atau pertusis adalah batuk keras berkepanjangan akibat infeksi pada paru - paru dan saluran pernafasan yang disebabkan oleh bakteri. Batuk rejan merupakan salah satu bentuk batuk ... </div><a href="">Lebih lanjut</a>


               </div>

             </div>
           </div>
         </div>
       </div>
     </div>
   </footer>
   <!-- artikel -->





   <!-- Footer awal -->
   <footer>
    <div class="container text-center" style="background-color: #E0FFFF;width: 100%;">
      <div class="row">
        <div style=" overflow-x: hidden;">
          <br><h3 style="font-family: 'Comic Sans MS';">Metode Pembayaran</h3><br>


          <img src="img/mastercard.png" style="width: 70%;">
          <hr>
        </div>

        <div class="row" style="text-align: left; ">
          <div class="col-sm-3 wow fadeInLeft">

            <img src="img/apotekku.png" style="width: 200px; margin: 50px;">

          </div>
          <div class="col-sm-3 wow fadeInLeft">

            <h3 style="font-family: 'Comic Sans MS';">Tentang Kami</h3><hr style="margin: 0;padding: 0;">
            <div style="font-family: 'Times New Roman'; font-size: 15px;">Hai Pelanggan Apotikku!
            Kami dengan senang hati akan membantu Anda dalam menemukan produk kesehatan. Dengan pengiriman yang dilakukan oleh merchant terdekat dari lokasi Anda berada, Apotikku memberikan kenyamanan belanja Anda, dan tepat waktu.</div>

          </div>
          <div class="col-sm-2 wow fadeIncenter" >
            <h3 style="font-family: 'Comic Sans MS';">Produk</h3><hr style="margin: 0;padding: 0;">

            <p><a href="">Alat Kesehatan</a> </p>
            <p><a href="">Suplement</a></p>
            <p> <a href="">Obat</a></p>

          </div>
          <div class="col-sm-2 wow fadeIncenter">
            <h3 style="font-family: 'Comic Sans MS';">Informasi</h3><hr style="margin: 0;padding: 0;">
            <p><a href="">Cara Pesan</a> </p>
            <p><a href="">Konfirmasi Pembayaran</a></p>
            <p> <a href="">Hubungi Kami</a></p>

          </div>
          <div class="col-sm-2 wow fadeInRight">
            <h3 style="font-family: 'Comic Sans MS';">Kontak Kami</h3><hr style="margin: 0;padding: 0;">
            <p><a href=""><img src="img/pesan.png" style="width: 20px;"> Email</a> </p>
            <p><a href=""><img src="img/hp.png" style="width: 20px;"> Telephone</a></p>

          </div>
        </div>
        <hr>

        <!-- <img src="img/apotekku.png"><br> -->
        <div style="font-family:  'Calisto MT';"><a href="">Karir</a>  |  <a href="">Ketentuan</a>  |  <a href="">Privacy</a></div>



        <div class="row">
          <div class="col-sm-12"><br>
            <p>&copy; Copyrigth 2019 | Build by . <a target="_blank" href="">Apotekku.com</a></p>
          </div>
        </div>
      </div>


    </div>
  </div>
</footer>


<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>