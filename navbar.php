  <!-- Navbar Start -->
  <div class="container-fluid bg-dark" id="top">
      <div class="container">
          <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
              <a href="index.php" class="navbar-brand">
                  <h1 class="text-primary mb-0 display-5">List<span class="text-white">Kit</span><i class="fa fa-user text-primary ms-3"></i></h1>
              </a>
              <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="fa fa-bars text-dark"></span>
              </button>
              <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                  <div class="navbar-nav ms-auto">
                      <?php
                        if (isset($_SESSION['MEMBER'])) {
                            $data = $_SESSION['MEMBER'];
                        ?>
                          <div class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?= $data['fullname']; ?></a>
                              <div class="dropdown-menu m-0 bg-primary">
                                  <?php
                                    if ($_SESSION['MEMBER']['role'] == 'admin') {
                                    ?>
                                      <a href="index.php?hal=member" class="dropdown-item">Member</a>
                                  <?php } ?>
                                  <a href="index.php?hal=agama" class="dropdown-item">Agama</a>
                                  <a href="index.php?hal=mahasiswa" class="dropdown-item">Mahasiswa</a>
                              </div>
                          </div>
                      <?php } ?>
                      <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                      <?php
                        if (isset($_SESSION['MEMBER'])) {
                        ?>
                          <a href="logout.php"><button type="button" class="my-2 btn btn-primary border-2 rounded-pill animated">Logout</button></a>
                      <?php } else { ?>
                          <a href="login.php"><button type="button" class="my-2 btn btn-primary border-2 rounded-pill animated">Login</button></a>
                      <?php } ?>
                  </div>
              </div>
          </nav>
      </div>
  </div>
  <!-- Navbar End -->