<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

   <div class="bannerc">
  <div class="fondon">
    <figure class="logo pull-left">
      <img src="../img/giotex.png" alt="GIOTEX" class="img-responsive">
    </figure>
    <div class="pull-right">
      <nav>
        <ul>
          <a class="selector" href="../index.php">INICIO</a>
          <a class="selector" href="nosotros.php">NOSOTROS</a>
          <a class="selector" href="servicios.php">¿COMO INVERTIR?</a>
          <a class="selector" id="select" href="contacto.php">CONTACTO</a>
        </ul>
      </nav>
    </div>
     <div class="op-menu">
        <i class="fa fa-bars fa-2x abrir" aria-hidden="true"></i>
      </div>
    <div class="textb">
      <h1 class="tit-h1cont" style="color: #fff;">¡CONTACTANOS!</h1>
    </div>
  </div>
</div>

     <div class="container animated fadeIn" style="padding: 5% 0%;">

  <div class="row delete-br elimi-hr">
    <h1 class="header-title"> Formulario de contacto </h1>
    <hr> <br><br>
    <div class="col-sm-12" id="parent">
      <div class="col-sm-6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.748062237785!2d-93.07206648597878!3d16.739417888469973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed27a5abf034b5%3A0xd6dc0d5b91f6fb82!2sAv+Covadonga+567A%2C+La+Misi%C3%B3n%2C+29096+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1512085426016" width="100%" height="320px;" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-sm-6">
        <form action="form.php" class="contact-form" method="post" >
  
            <div class="form-group">
              <input type="text" class="form-control" id="txtNOMBRE" name="nm" placeholder="Escribe tu nombre completo" required="">
            </div>
        
        
            <div class="form-group form_left">
              <input type="email" class="form-control" id="txtCORREO" name="em" placeholder="Escribe tu correo completo" required="">
            </div>
        
          <div class="form-group">
               <input type="text" class="form-control" id="txtTELEFONO" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Escribe tu teléfono completo" required="">
          </div>
          <div class="form-group">
          <textarea class="form-control textarea-contact" rows="5" id="txtCOMENTARIO" name="FB" placeholder="Escribe tu comentario completo" required=""></textarea>
          <br>

           <div id="_AJAX_PRE_"></div>
            <button class="btn btn-default btn-send" onclick="sendCORREO()"> <span class="glyphicon fa fa-send"></span> ENVIAR </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container second-portion">
  <div class="row">
        <!-- Boxes de Acoes -->
      <div class="col-sm-6 col-md-3">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">CORREO</h3>
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; info@inmobiliariagiotex.com
              <br>
              <br>
              <i class="fa fa-globe" aria-hidden="true"></i> &nbsp; www.inmobiliariagiotex.com
            </p>
          
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
      
        <div class="col-sm-6 col-md-3">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">TELEFONO</h3>
              <p>
              <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp; PENDIENTE
               
            </p>
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
    <div class="clearfix visible-sm"></div>
    <div class="col-sm-6 col-md-3">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">DIRECCION</h3>
              <p>
               <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Av. Covadonga #567-A por C. San Pedro y C. La Piedad. Col. La Mision. Tuxtla Gutierrez, Chiapas. C.P. 29096.
            </p>
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>  
    
    <div class="col-sm-6 col-md-3">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">HORARIO</h3>
              <p>
               <i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp; Lunes a Viernes de 9 am a 6 pm
            </p>
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>        
    
      
  </div>
</div>

</div>

<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/botonarriba.js"></script>
</body>
</html>
