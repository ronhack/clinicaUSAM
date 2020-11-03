<div class="container">
  <form class="text-center p-5" action="<?php echo base_url();?>login/auth" method="POST" autocomplete="off">
    <div class="row justify-content-center">
      <div class="col-md-6 mb-4">
        <a class="img-fluid" href="<?php echo base_url().'login';?>">
          <img src="<?php echo base_url().'assets/img/svg/hospital.svg';?>" height="150px" alt="Ride SV logo blanco">
        </a>
      </div>
    </div>
    <p class="h4 mb-4">Clínica USAM</p>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <input type="text" id="usuario" name="usuario" class="form-control mb-4" placeholder="Usuario" value="<?php echo set_value('usuario');?>">
        <?php echo form_error('usuario'); ?>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <input type="password" id="clave" name="clave" class="form-control mb-4" placeholder="Contraseña" value="<?php echo set_value('clave');?>">
        <?php echo form_error('clave'); ?>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <button style="border-radius: 25px" class="btn pink darken-4 mx-0 text-white btn-block my-4" type="submit" name="login">Iniciar sesión</button>
      </div>
    </div>  
  </form>

</div>