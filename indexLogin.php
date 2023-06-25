 <?php 

  include('admin/koneksi.php');

  // $query = mysqli_query($koneksi, 'SELECT * FROM produk');
  $showMinuman = mysqli_query($koneksi, "SELECT * FROM produk WHERE jenis_menu ='Minuman'");
  $showMakanan = mysqli_query($koneksi, "SELECT * FROM produk WHERE jenis_menu ='Makanan'");
  $result1 = mysqli_fetch_all($showMinuman, MYSQLI_ASSOC);
  $result2 = mysqli_fetch_all($showMakanan, MYSQLI_ASSOC);   
  // $query = mysqli_query($koneksi, 'SELECT * FROM produk');  
  
  session_start();
  if(!isset($_SESSION['login_user'])) {
    // header("location: index.php");
  }else{ 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TH38ROTHER COFFEE</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- My Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Navbar start -->
  <nav class="navbar">
    <a href="index.html" class="navbar-logo"> <img class="" src="" alt=""> TH38ROTHER <span>Coffee</span></a>
    
    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="mycart.php">Pesanan Anda</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="navbar-extra">
      <a href="logout.php" onClick="return confirm('Anda yakin ingin keluar ?')" id="logout"><i data-feather="user"></i> Logout</a>
      <!-- <a href='mycart.php' id='shopping-cart'><span></span><i data-feather='shopping-cart'></i><a id='count'>0</a></a> -->
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>

    <!-- Search Form start -->
    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box"><i data-feather="search"></i></label>
    </div>
    <!-- Search Form end -->

    <!-- Shopping Cart start -->
   <div class="shopping-cart">
     <div id="root"></div> 
      <div class="sidebar"></div>
          <div id="cart-item">your cart is empty</div>
          <div class="foot">
            <h3>Total</h3>
            <h2 id="total">Rp. 0.00</h2>
          </div>
    </div>
    <!-- Shopping Cart end -->

  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section class="hero" id="home">
    <main class="content">
      <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
      <p>Satu satunya cara untuk melakukan pekerjaan hebat adalah dengan mencintai apa yang kamu lakukan</p>
      <!-- <a href="#" class="cta">Beli Sekarang</a> -->
    </main>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/service-3.jpg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa kami memilih kopi?</h3>
        <p>“Kami didorong oleh gagasan sederhana bahwa setiap orang berhak mendapatkan secangkir kopi yang lebih nikmat dan tugas kami adalah menemukan cara untuk menyajikannya kepada mereka.”</p>
        <p>Pada awalnya, Kedai Kopi Th38rother coffee hanya menawarkan sedikit variasi kopi seperti espresso, Americano, dan pour-over coffee. Namun, seiring berjalannya waktu  popularitas kedai pun meningkat, Dan mulai memperluas menu dengan minuman kopi kreatif seperti cappuccino, latte, dan macchiato. 
          serta juga menambahkan pilihan minuman dingin seperti frappe, smoothie, dan es krim kopi untuk mengakomodasi selera yang beragam..</p>
      </div>
    </div>
  </section>
  <!-- About Section end -->

  <!-- Menu Section start -->
  <section id="menu" class="menu">
    <h2><span>Menu</span> Minuman</h2>
    <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, repellendus numquam quam tempora voluptatum. -->
    </p>

    <div class="row">
      <?php foreach($result1 as $result1) : ?>
        <div class="row">
          <div class="menu-card">
            <img src="admin/upload/<?php echo $result1['gambar'] ?>" class="menu-card-img">
            <h3 class="menu-card-title"><?php echo $result1['nama_menu'] ?></h3>
            <p class="menu-card-price">IDR <?php echo number_format($result1['harga']); ?></p>
            <a href="beli.php?id_menu=<?php echo $result1['id_menu']; ?>" class="button">add to cart</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="menu" class="menu">
    <h2><span>Menu</span> Makanan</h2>
    <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, repellendus numquam quam tempora voluptatum. -->
    </p>

    <div class="row">
      <?php foreach($result2 as $result2) : ?>
        <div class="row">
          <div class="menu-card">
            <img src="admin/upload/<?php echo $result2['gambar'] ?>" class="menu-card-img">
            <h3 class="menu-card-title"><?php echo $result2['nama_menu'] ?></h3>
            <p class="menu-card-price">IDR <?php echo number_format($result2['harga']); ?></p>
            <a href="beli.php?id_menu=<?php echo $result2['id_menu']; ?>" class="button">add to cart</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
  <!-- Menu Section end -->

  <!-- Products Section start -->
  <!-- <section class="products" id="products"> -->
    <!-- <h2><span>Produk Unggulan</span> Kami</h2> -->
    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo unde eum, ab fuga possimus iste.</p> -->

    <!-- <div class="row">
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a> 
          <a href="#" class="item-detail-button-chocolate"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/kopi4.jpg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>TH38ROTHER COFFE</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
          </div>
       <div class="product-price">IDR 30K <span>IDR 55K</span></div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons">
         <a href="#"><i data-feather="shopping-cart"></i></a> 
          <a href="#" class="item-detail-button-greentea"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/kopi2.jpg" alt="Product 2">
        </div>
        <div class="product-content">
          <h3>TH38ROTHER COFFE</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a> 
          <a href="#" class="item-detail-button-redvelved"><i data-feather="eye"></i></a>
         </div>
          <div class="product-image">
          <img src="img/products/kopi3.jpg" alt="Product 3">
          </div>
          <div class="product-content">
          <h3>TH38ROTHER COFFE</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons">
         <a href="#"><i data-feather="shopping-cart"></i></a> 
          <a href="#" class="item-detail-button-gulaaren"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/kopi1.jpg" alt="Product 4">
        </div>
        <div class="product-content">
          <h3>TH38ROTHER COFFE</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons">
         <a href="#"><i data-feather="shopping-cart"></i></a> 
          <a href="#" class="item-detail-button-avocadocaramel"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/kopi5.jpg" alt="Product 5">
        </div>
        <div class="product-content">
          <h3>TH38ROTHER COFFE</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons">
         <a href="#"><i data-feather="shopping-cart"></i></a> 
          <a href="#" class="item-detail-button-taro"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/kopi6.jpg" alt="Product 6">
        </div>
        <div class="product-content">
          <h3>TH38ROTHER COFFE</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- Products Section end -->

  <!-- Contact Section start -->
  <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, provident. -->
    </p>

    <div class="row">
      <!-- <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d107.57311709235512!3d-6.903444341687889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1672408575523!5m2!1sen!2sid"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe> -->
      <iframe
       src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.450797433174!2d106.69324927675933!3d-6.248877399831147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa6904d25c1f%3A0xafd8b6ecc27e18d9!2sParung%20Serab%2C%20Kec.%20Ciledug%2C%20Kota%20Tangerang%2C%20Banten!5e0!3m2!1sid!2sid!4v1684607607925!5m2!1sid!2sid" 
       allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

      <form action="" method="POST">
        <input class="input" type="text" name="nama" placeholder="Nama" required>
        <input class="input" type="email" name="email" placeholder="Email" required>
        <input class="input" type="text" name="telp" placeholder="No. Telp" required>
        <textarea class="textarea" name="pesan" placeholder="Masukan Pesan Anda"></textarea> 
        <center><button type="submit" class="button" name="kirim">Kirim Pesan</button></center>
        <!-- <button type="submit" class="btn" name="submit">Kirim Pesan</button> -->
    </form>
    <?php
      if(isset($_POST["kirim"])){
        $nama = $_POST["nama"];
        $email = $_POST["email"]; 
        $noTelp = $_POST["telp"];
        $pesan = $_POST["pesan"];

        
        
        //Menginput data ke tabel
          $hasil=mysqli_query($koneksi, "INSERT INTO form_kontak (nama,email,no_telp,pesan) VALUES('$nama','$email','$nsoTelp','$pesan')");
        
        //Kondisi apakah berhasil atau tidak
          if ($hasil)
          {
          echo "<script>
                alert('Anda Berhasil Mengirim Pesan !');
              </script>";
          }
          else 
          {
          echo "<script>
                alert('Gagal Mengirim Pesan !');
              </script>";
          } 
      }
    ?>
    </div>
  </section>
  <!-- Contact Section end -->

  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="https://instagram.com/th38rother_burger_coffee?igshid=MzRlODBiNWFlZA=="><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="credit">
      <p>Created by <a href="">whytrichya</a>. | &copy; 2023.</p>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Modal Box Item Detail Chocolate -->
  <div class="modal" id="item-detail-modal-chocolate">
    <div class="modal-container">
      <a href="#" class="close-icon chocolate"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/kopi4.jpg" alt="Product 1">
        <div class="product-content">
          <h3>Product 1</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis obcaecati
            ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus voluptatibus!</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
          <!-- <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Box Item Detail Green Tea -->
  <div class="modal" id="item-detail-modal-greentea">
    <div class="modal-container">
      <a href="#" class="close-icon greentea"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/kopi2.jpg" alt="Product 1">
        <div class="product-content">
          <h3>Product 2</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis obcaecati
            ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus voluptatibus!</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
          <!-- <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a> -->
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal Box Item Detail Red Velved -->
  <div class="modal" id="item-detail-modal-redvelved">
    <div class="modal-container">
      <a href="#" class="close-icon redvelved"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/kopi3.jpg" alt="Product 1">
        <div class="product-content">
          <h3>Product 3</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis obcaecati
            ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus voluptatibus!</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
          <!-- <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a> -->
        </div>
      </div>
    </div>
  </div>

   <!-- Modal Box Item Detail Gula Aren -->
   <div class="modal" id="item-detail-modal-gulaaren">
    <div class="modal-container">
      <a href="#" class="close-icon gulaaren"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/kopi1.jpg" alt="Product 1">
        <div class="product-content">
          <h3>Product 4</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis obcaecati
            ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus voluptatibus!</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
          <!-- <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a> -->
        </div>
      </div>
    </div>
  </div>

   <!-- Modal Box Item Detail Avocado Caramel -->
   <div class="modal" id="item-detail-modal-avocadocaramel">
    <div class="modal-container">
      <a href="#" class="close-icon avocadocaramel"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/kopi5.jpg" alt="Product 1">
        <div class="product-content">
          <h3>Product 5</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis obcaecati
            ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus voluptatibus!</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
          <!-- <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a> -->
        </div>
      </div>
    </div>
  </div>

   <!-- Modal Box Item Detail Taro -->
   <div class="modal" id="item-detail-modal-taro">
    <div class="modal-container">
      <a href="#" class="close-icon taro"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/kopi6.jpg" alt="Product 1">
        <div class="product-content">
          <h3>Product 6</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis obcaecati
            ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus voluptatibus!</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
          <!-- <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a> -->
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal Box Item Detail end -->

  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <!-- My Javascript -->
  <script src="js/script.js"></script>
</body>

</html>
<?php } ?>