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
            <h4 class="page-title">Cinéma</h4>
              <div class="large-12 columns">

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