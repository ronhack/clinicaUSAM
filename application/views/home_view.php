<div class="container my-5">
  <!--Section: Content-->
  <section class="dark-grey-text">

    <div class="row pr-lg-5">
      <div class="col-md-7 mb-4">

        <div class="view">
          <?php if($this->session->userdata('login') === TRUE){ ?>
            <img src="<?=base_url('assets/img/svg/logueado.svg');?>" class="img-fluid" alt="clinica_usam">
          <?php }else{ ?>
            <img src="<?=base_url('assets/img/svg/inicio.svg');?>" class="img-fluid" alt="clinica_usam">
          <?php } ?>
        </div>

      </div>
      <div class="col-md-5 d-flex align-items-center">
        <div>
          <?php if($this->session->userdata('login') === TRUE){ ?>
            <h3 class="font-weight-bold mb-4">Bienvenido a Clínica USAM</h3>
            <p>Recuerda lavar tus manos y usar siempre tu mascarilla. <strong>Mantener la distancia te mantiene seguro</strong>.</p>
          <?php }else{ ?>
            <h3 class="font-weight-bold mb-4">Universidad Salvadoreña Alberto Masferrer</h3>
            <p>Proyecto web desarrollado con el framework CodeIgniter 3 de PHP, por <strong>Ronald Orellana.</strong></p>
          <?php } ?>
          <?php if(!$this->session->userdata('login')): ?>
            <a style="border-radius: 25px" class="btn pink darken-4 btn-sm mx-0 text-white" href="<?=base_url().'login';?>">Iniciar sesión</a>
          <?php endif; ?>
        </div>
      </div>
    </div>

  </section>
  <!--Section: Content-->
</div>