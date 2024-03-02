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
          <div class="page-inner">
            <h4 class="page-title">Catégories</h4>
              <div class="large-12 columns">

                <div class="row">
                  <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round shadows-sm">
                      <div class="card-body ">
                        <div class="row">
                          <div class="col-4">
                            <div class="icon-big text-center">
                              <img src="<?= $assets ?>/img/chaine/cinema2.png" alt="..." class="avatar-img avatar">
                            </div>
                          </div>
                          <div class="col-8 col-stats">
                            <div class="numbers">
                              <h4 class="card-title fw-bold">Cinéma</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round shadows-sm">
                      <div class="card-body ">
                        <div class="row">
                          <div class="col-4">
                            <div class="icon-big text-center">
                              <img src="<?= $assets ?>/img/chaine/sport.png" alt="..." class="avatar-img avatar">
                            </div>
                          </div>
                          <div class="col-8 col-stats">
                            <div class="numbers">
                              <h4 class="card-title fw-bold">Sport</h4>
                            </div>
                          </div>
                        </div>
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