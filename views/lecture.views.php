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
          <video
          id="my-video"
          class="video-js"
          controls
          preLoad="auto"
          width="360"
          height="220"
          data-setup="{}"
          >
          <source src="<?= $_GET['lien']?>"  type="application/x-mpegURL">
              </video>
          </div>

          <div class="d-flex justify-content-between mt-3">
            <div class="row ml-2 align-items-center">
              <img src="<?= $assets ?>/img/chaine/<?= $_GET['image']?>" height="60" width="60" alt="..." class="img-fluid" 
              >
              <h2 class="ml-2 fw-bold"><b>Ev télé</b></h2>
            </div>
            <div class="d-flex justify-content-between mr-4">
              <h2 class="ml-2 fw-bold"><b><i class="far fa-bookmark text-secondary"></i></b></h2>
            </div>
            </div>


          <div class="mt-5">
            <div class="d-flex justify-content-between">
              <h3 class="ml-2 fw-bold"><b>Contenus Similaire</b></h3>
              
            </div>

            <div class="large-12 columns m-2">

              <div class="row">
                <div class="col-6 col-sm-4 col-lg-2">
                  <div class="card" style="height: 100px;">
                    <div class="card-body text-center">
                        <img src="<?= $assets ?>/img/chaine/evtele.png" alt="..." class="avatar-img mx-auto d-block">
                    </div>
                  </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                  <div class="card" style="height: 100px;">
                    <div class="card-body text-center">
                        <img src="<?= $assets ?>/img/chaine/canalsport.png" alt="..." class="avatar-img mx-auto d-block img-fluid">
                    </div>
                  </div>
                </div>

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