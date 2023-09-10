<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="nav">
    <div class="container">
      <a class="navbar-brand navtext" href="#">
        <img src="user/asset/img/logo-semudah1.png" alt="" width="140" height="28"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto ">
          <li class="nav-item">
            <a class="nav-link me-4" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item d-none">
            <a class="nav-link me-4" aria-current="page" href="#layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-4" aria-current="page" href="#carapesan">Cara pesan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-4" aria-current="page" href="#footer">Tentang kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-4" aria-current="page" href="#">Daftar teknisi</a>
          </li>
        </ul>

        <div class="auth">
          <img class="profilpic" src="user/asset/img_user/<?= $_SESSION['foto']; ?>" width="40" height="40" alt="" style="border-radius : 50%;">
          <a class="nav-link me-4 userdashboard" aria-current="page" href="#">Dashboard saya</a>
          <a href="user/logout.php">Log out</a>
        </div>
      </div>
    </div>
  </nav>
</div>