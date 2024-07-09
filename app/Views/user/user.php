<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apex Dental</title>

    <!-- LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- style -->
    <link rel="stylesheet" href="/css/user.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- logo title -->
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg position-fixed w-100">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img class="d-inline-block align-text-top me-3" src="/img/logo-1.png" width="50"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-3">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="#pemesanan">Booking</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="#keunggulan">Services</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="#discount-plans">Discount Plans</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="<?= site_url('profil'); ?>">Profil</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="<?= site_url('logout'); ?>">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- HERO -->
    <section id="hero">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-md-6 tagline">
            <h2>Apex Dental</h2>
            <h1>Solution</h1>
            <h3>We Make Your Smile Healthy</h3>
            <div class="bar py-2"></div>
            <p>Tersedia perawatan gigi terbaik di Klinik Apex Dental Solution. Dengan dokter gigi berpengalaman dan peralatan modern, kami siap memenuhi kebutuhan Anda. Kunjungi kami sekarang untuk senyuman sehat dan indah.</p>
            <button class="button-lg-primary" onclick="window.location.href='#pemesanan'">Booking sekarang</button>
          </div>
          <div class="col-md-6 d-flex justify-content-center gambar">
            <img src="/img/pict1.jpeg" class="img-hero rounded-circle" width="460" height="450" >
          </div>
        </div>
      </div>
    </section>

    <!-- PEMESANAN -->
    <section id="pemesanan">
      <div class="container pemesanan">
        <div class="row">
          <div class="col-md-6">
            <div class="card-book w-100">
              <h3>Membuat Janji Tamu</h3>
              <form enctype='multipart/form-data' action="<?= site_url('viewEachOrder_store2'); ?>" method="post">
                <div class="form-group">
                  <label for="c_name">Nama Lengkap:</label>
                  <input type="text" class="form-control" name="nama" required>
                  <label for="c_name">Email:</label>
                  <input type="text" class="form-control" name="email" required>
                  <label for="c_name">Telepon:</label>
                  <input type="text" class="form-control" name="telepon" required>
                  <label for="c_name">Waktu:</label>
                  <input type="text" class="form-control" name="waktu" required>
                  <label for="c_name">Keluhan:</label>
                  <input type="text" class="form-control" name="keluhan" required>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-secondary" name="upload" style="margin-top: 20px;">Tambahkan</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="/img/download.jpeg" class="img-fluid" alt="Gambar" style="max-width: 100%; max-height: 100%; border-radius: 30px">
          </div>
        </div>
      </div>
    </section>

    <!-- KEUNGGULAN KAMI -->
    <section id="keunggulan" class="py-5">
        <div class="container keunggulan">
          <h2 class="text-center mb-5">Keunggulan Kami</h2>
          <div class="row">
            <div class="col-md-4 text-center">
              <div class="feature-box p-4">
                <img src="/img/dokterk.jpeg" alt="Pelayanan Berkualitas" class="mb-3">
                <h4>Pelayanan Berkualitas</h4>
                <p>Menyajikan tim dokter gigi yang berpengalaman dan terlatih untuk memberikan perawatan berkualitas tinggi kepada pasien. Dengan fokus pada kenyamanan dan keamanan, klinik dental tersebut menawarkan beragam perawatan mulai dari pembersihan gigi hingga prosedur restoratif yang kompleks.</p>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="feature-box p-4">
                <img src="/img/Keunggulan3.jpeg" alt="Perawatan Terkini" class="mb-3">
                <h4>Perawatan Terkini</h4>
                <p>Menghadirkan peralatan medis modern dan teknik perawatan terkini untuk memastikan pasien mendapatkan perawatan gigi yang paling mutakhir. Ini termasuk penggunaan teknologi laser untuk perawatan periodontal dan prosedur restoratif yang minim invasif.</p>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="feature-box p-4">
                <img src="/img/Keunggulan1 .jpeg" alt="Kemudahan Akses Pasien" class="mb-3">
                <h4>Kemudahan Akses Pasien</h4>
                <p>Memudahkan pasien untuk mendaftar dan membuat janji temu secara digital melalui website klinik dental. Ini meningkatkan kenyamanan dan fleksibilitas bagi pasien dalam mengatur perawatan mereka.</p>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- Servis -->
    <section class="services">
  <div class="service-box">
      <h2>Scalling Gigi</h2>
        <img src="/img/scalling.jpeg" alt="Scaling Gigi">
        <p>Perawatan scalling gigi tersedia mulai dari harga 100 ribu di Klinik Apex Dental Solution. Dengan prosedur yang efisien dan terjangkau, kami membersihkan plak dan tartar yang menumpuk pada gigi Anda, menjaga kesehatan mulut Anda tetap optimal. Jadwalkan kunjungan Anda hari ini untuk mendapatkan senyuman yang lebih sehat dan segar!</p>
  </div>
  <div class="service-box">
      <h2>Tambal Gigi</h2>
      <img src="/img/tambal.jpeg" alt="Tambal Gigi">
      <p>Perbaikan gigi dengan tambal mulai dari harga 150 ribu di Klinik Apex Dental Solution. Dengan teknik yang canggih dan biaya terjangkau, kami mengembalikan fungsi dan estetika gigi Anda dengan hasil yang tahan lama. Segera buat janji untuk mendapatkan perawatan gigi yang berkualitas dan terpercaya.</p>
  </div>
  <div class="service-box">
      <h2>Teeth Whitening</h2>
      <img src="/img/whitening.jpeg" alt="Teeth Whitening">
      <p>Disini kami juga menawarkan layanan whitening gigi yang efektif untuk membantu Anda mendapatkan senyum cerah dan bersinar. Proses whitening kami menggunakan teknologi terbaru dan bahan yang aman untuk memutihkan gigi Anda tanpa menyebabkan kerusakan..</p>
  </div>
</section>


    <section class="discount-plans" id="discount-plans">
    <h1>DISCOUNT PLANS</h1>
    <div class="plans-container">
      <?php foreach($diskon as $key => $post) : ?>
        <div class="plan-card">
        <?php echo '<img height="200px" width="150px" src="' . base_url('img/' . $post['foto']) . '">';?></td>
        <a href="#pemesanan" class="btn btn-primary">Booking Sekarang</a>
        </div>
      <?php endforeach ?>
    </div>
    </section>

    <!-- dentis -->
    <section class="our-dentist">
        <h1>Our Dentist</h1>
        <div class="dentist-container">
          <?php foreach($dokter as $key => $post) : ?>
            <div class="dentist-card">
                <?php echo '<img height="100px" src="' . base_url('img/' . $post['foto']) . '">';?>
                <h2><?php echo $post['nama'] ?></h2>
                <p><?php echo $post['deskripsi'] ?></p>
            </div>
          <?php endforeach ?>
        </div>
    </section>

    <!-- testimoni -->
    <section class="testimoni-section">
        <h2>Testimoni</h2>
        <div class="testimoni-container">
        <?php foreach($testimoni as $testi => $post) : ?>
            <div class="testimoni-card">
                <div class="image-container">
                  <?php echo '<img height="250px" width="250px" src="' . base_url('img/' . $post['foto']) . '">';?>
                </div>
                <div class="testimoni-content">
                    <h3>Review ApexHolic</h3>
                    <p><strong><?php echo $post['nama_testi'] ?></strong> ⭐⭐⭐⭐⭐</p>
                    <p><?php echo $post['deskripsi'] ?></p>
                </div>
            </div>
          <?php endforeach ?>
        </div>
    </section>


    <!-- About -->
    <div class="content">
        <!-- Konten lain -->
    </div>
    <footer id="unique-footer" class="d-flex align-items-center position-relative w-100">
        <div class="container bawah">
            <div class="row">
                <div class="col-md-6">
                    <h4>Contact Us</h4>
                    <p>Jl. Margo Basuki No.35-37, Jetis, Mulyoagung, Kec. Dau, Kab Malang</p>
                    <p>Whatsapp: 087 844 699 690</p>
                </div>
                <div class="col-md-6 text-md-end">
                <h4>Follow Us On</h4>
<a href="https://www.instagram.com/apexdental.id/"><i class="bi bi-instagram"></i></a>
<a href="https://wa.me/+6287844699690"><i class="bi bi-whatsapp"></i></a>

                </div>
            </div>
        </div>
    </footer>
     </body>
  <!-- SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>
