<?php $titre = 'home' ?>
<?php include $chemin.'content/header.php' ?>
<body>
  <div class="wrapper  mb-5" >
    <div class="main-header" data-background-color="purple">
      <!-- Logo Header -->
      <?php include $chemin.'content/header_logo.php' ?>
      <!-- End Logo Header -->

      <!-- Navbar Header -->
      <?php include $chemin.'content/navbar.php' ?>
      <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
    <?php include $chemin.'content/sidebar.php' ?>
    <!-- End Sidebar -->

    <div class="main-panel mb-5">
      <div class="content mb-5">
        <div class="large-12 columns">
          <div id="owl-demo" class="owl-carousel owl-theme owl-img-responsive">
            <div class="item">
              <img src="<?= $assets ?>/img/chaine/futur.jpg" alt="..." class="avatar-img">
            </div>
            <div class="item">
              <img src="<?= $assets ?>/img/chaine/future.jpg" alt="..." class="avatar-img">
            </div>
            <div class="item">
              <img src="<?= $assets ?>/img/chaine/futur.jpg" alt="..." class="avatar-img">
            </div>
            <div class="item">
              <img src="<?= $assets ?>/img/chaine/future.jpg" alt="..." class="avatar-img">
            </div>
            </div>
          </div> 

          <div class="">
            <div class="d-flex justify-content-between">
              <h3 class="ml-2 fw-bold"><b>Série</b></h3>
              <h4 class="text-info mr-2"><a href="lecture.php?lien=https://tgn.bozztv.com/ssh101/ssh101/evtele/playlist.m3u8&image=evtele.png" class="" style="text-decoration: none;">Voir tous <i class="fas fa-angle-right" style="font-size: 20px;"></i></a></h4>
            </div>

            <div id="owl-demo5" class="owl-carousel owl-theme owl-img-responsive">

              <div class="item">
                <a href="lecture.php?lien=https://tgn.bozztv.com/ssh101/ssh101/evtele/playlist.m3u8&image=evtele.png" class="" style="text-decoration: none;">
                  <div class="card shadow-sm" style="height: 100px;">
                    <div class="card-body">
                      <img src="<?= $assets ?>/img/chaine/evtele.png" alt="..." class="avatar-img">
                    </div>
                  </div>
                </a>
              </div>

            </div>
          </div>


          
          </div>
              
        </div>
      </div>
      <?php include $chemin.'content/footer.php' ?>
    </div>

  </div>
  
  <?php include $chemin.'content/script.php' ?>
</body>
</html>