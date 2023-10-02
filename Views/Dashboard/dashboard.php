<?php headerAdmin($data); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i><?= $data['page_title'] ?></h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <?php if(!empty($_SESSION['permisos'][2]['r'])){ ?>
        <div class="col-md-6 col-lg-3">
          <a href="<?= base_url() ?>/usuarios" class="linkw">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-users fa-3x"></i>
              <div class="info">
                <h4>Usuarios</h4>
                <p><b><?= $data['usuarios'] ?></b></p>
              </div>
            </div>
          </a>
        </div>
        <?php } ?>


        <?php if(!empty($_SESSION['permisos'][8]['r'])){ ?>
        <div class="col-md-6 col-lg-3">
          <a href="<?= base_url() ?>/voluntarios" class="linkw">
            <div class="widget-small warning coloured-icon"><i class="icon fas fa-handshake fa-3x"></i>
              <div class="info">
                <h4>Voluntarios</h4>
                <p><b><?= $data['voluntarios'] ?></b></p>
              </div>
            </div>
          </a>
        </div>
        <?php } ?>



      </div>
   

  

    </main>
<?php footerAdmin($data); ?>

<script>


</script>
    