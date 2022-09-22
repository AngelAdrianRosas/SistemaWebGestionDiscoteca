

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h2>Agregar cliente</h2>

      <?php echo form_open_multipart('cliente/agregarbd'); ?>

      <!-- <input type="text" name="nombres" placeholder="Ingrese nombre/es"> -->
      <div class="mb-3">
        <!-- <label class="form_label">Ingrese nombre/s :</label>
        <input type="text" class="form_control" name="nombres" placeholder="Escriba el nombre"> -->
        <label for="nombres">Nombre/s:</label>
        <input class="form-control" name="nombres" required type="text" id="nombres" placeholder="Escriba el nombre">             
      </div>
      <br>
      <!-- <input type="text" name="apellidoPaterno" placeholder="Ingrese apellido paterno"> -->
      <div class="mb-3">
        <!-- <label class="form_label">Inrese primer apellido :</label>
        <input type="text" class="form_control" name="apellidoPaterno" placeholder="Escriba el primer apellido"> -->
           <label for="apellidoPaterno">Primer apellido:</label>
        <input class="form-control" name="apellidoPaterno" required type="text" id="apellidoPaterno" placeholder="Escriba el primer apellido">            
      </div>
      <br>
      <!--<input type="text" name="apellidoMaterno" placeholder="Ingrese apellido materno"> -->
      <div class="mb-3">
        <!-- <label class="form_label">Inrese segundo apellido :</label>
        <input type="text" class="form_control" name="apellidoMaterno" placeholder="Escriba el segundo apellido"> -->
         <label for="apellidoMaterno">Segundo apellido:</label>
        <input class="form-control" name="apellidoMaterno" required type="text" id="apellidoMaterno" placeholder="Escriba el segundo apellido">            
      </div>       
      
      <br>           
      <button type="submit" class="btn btn-primary">AGREGAR CLIENTE</button>
      

      <?php form_close(); ?>

     
      
    </div>
    
  </div>


</div>


