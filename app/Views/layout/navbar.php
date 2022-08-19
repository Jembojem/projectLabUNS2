<nav class="navbar navbar-expand-xl">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="/img/logo_uns.png" alt="" width="100">
      Nge-Lab
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link hvr-grow-shadow hvr-underline-from-center <?= ($page == 'home' ? 'active' : '') ?>" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hvr-grow-shadow hvr-underline-from-center " aria-current="page" href="/panel/reservasi">Reservasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hvr-grow-shadow hvr-underline-from-center <?= ($page == 'jadwal' ? 'active' : '') ?>" href="/jadwal">Jadwal</a>
        </li>
        <li class="nav-item dropdown hvr-grow-shadow .hvr-underline-from-center">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fasilitas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item hvr-underline-from-center  <?= ($page == 'failitas' ? 'active' : '') ?>" href="/lab-kom-a">Laboratorium Komputer</a></li>
            <li><a class="dropdown-item hvr-underline-from-center <?= ($page == 'failitas' ? 'active' : '') ?> " href="/lab-robotik">Laboratorium Robotika</a></li>
            <li><a class="dropdown-item hvr-underline-from-center <?= ($page == 'failitas' ? 'active' : '') ?>" href="/fasilitas3">Laboratorium Multimedia</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link hvr-grow-shadow hvr-underline-from-center <?= ($page == 'about' ? 'active' : '') ?>" href="/about">Tentang</a>
        </li>

        <li class="nav-item">
          <a class="nav-link hvr-grow-shadow hvr-underline-from-center <?= ($page == 'contact' ? 'active' : '') ?>" href="/contact">Kontak</a>
        </li>

        <?php if (logged_in()) { ?>
          <li class="nav-item">
            <a class="nav-link hvr-grow-shadow hvr-underline-from-center" href="/panel/dashboard">Dashboard</a>
          </li>
      </ul>
      <div class="d-flex">
        <div class="dropdown">
          <a href="/panel/dashboard" style=" text-decoration: none; color: black;">
            <span style="font-size: 1rem !important;"><?= 'Hello ' . user()->username; ?></span>
            <img src="/img/users/<?= user()->avatar ?>" alt="user" class="rounded-circle" style="width: 4rem !important;">
          </a>
          <!-- <p> <a href="/panel"></a> </p> -->
        </div>
      </div>
    <?php } else { ?>
      </ul>
      <form class="d-flex" role="search">
        <a href="/login"><button type="button" class="button-secondary hvr-grow-shadow .hvr-shutter-out-horizontal">Sign In</button></a>
        <a href="/daftar"><button type="button" class="button-primary hvr-grow-shadow">Sign Up</button></a>
      </form>
    <?php } ?>
    </div>
  </div>
</nav>