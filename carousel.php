 <!-- Carousel Start -->
 <div class="container-fluid carousel px-0 mb-0">
     <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
         <ol class="carousel-indicators">
             <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
             <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
         </ol>
         <div class="carousel-inner" role="listbox">
             <div class="carousel-item active">
                 <img src="img/bg.jpg" class="img-fluid w-100" alt="First slide" />
                 <div class="carousel-caption">
                     <div class="container carousel-content">
                         <h4 class="text-white mb-4 animated slideInDown">NF Computer</h4>
                         <h1 class="text-white display-1 mb-4 animated slideInDown"><span class="text-primary">List Mahasiswa</span> Akademi Fullstack Web Developer</h1>
                         <?php
                            if (isset($_SESSION['MEMBER'])) {
                            ?>
                             <a href="index.php?hal=mahasiswa" class="me-2"><button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Get Started</button></a>
                         <?php } else {
                            ?>
                             <a href="login.php" class="me-2"><button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Get Started</button></a>
                         <?php } ?>
                     </div>
                 </div>
             </div>
             <div class="carousel-item">
                 <img src="img/bg-2.jpg" class="img-fluid w-100" alt="Second slide" />
                 <div class="carousel-caption">
                     <div class="container carousel-content">
                         <h4 class="text-white mb-4 animated slideInDown">NF Computer</h4>
                         <h1 class="text-white display-1 mb-4 animated slideInDown"><span class="text-primary">List Mahasiswa</span> Akademi Fullstack Web Developer</h1>
                         <?php
                            if (isset($_SESSION['MEMBER'])) {
                            ?>
                             <a href="index.php?hal=mahasiswa" class="me-2"><button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Get Started</button></a>
                         <?php } else {
                            ?>
                             <a href="login.php" class="me-2"><button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Get Started</button></a>
                         <?php } ?>
                     </div>
                 </div>
             </div>
         </div>
         <button class="carousel-control-prev btn btn-primary border border-2 border-start-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next btn btn-primary border border-2 border-end-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
         </button>
     </div>
 </div>
 <!-- Carousel End -->