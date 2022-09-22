

<div class="container">
  <div class="row">
    <div class="col-md-12">

      
      <h2>Agregar usuario</h2>

      <?php echo form_open_multipart('user/agregarbd'); ?>

      <input type="text" name="login" placeholder="Ingrese Login">
      <input type="text" name="password" placeholder="Ingrese Password">
      <select name="tipo" >
           <option value="Admin">Administrador</option>
           <option value="Guest">Invitado</option>
      </select>      
      <input type="text" name="nombres" placeholder="Ingrese nombre/s">
      <input type="text" name="primerApellido" placeholder="Ingrese primer apellido">
      <input type="text" name="segundoApellido" placeholder="Ingrese segundo apellido">
      <input type="text" name="edad" placeholder="edad">
      

      <button type="submit" class="btn btn-primary">CREAR USUARIO</button>

      <?php form_close(); ?>

     
      
    </div>
    
  </div>


</div>


