

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h2>Modificar usuario</h2>

      <?php
      foreach ($infouser->result() as $row) 
      {                                                  

        echo form_open_multipart('user/modificarbd'); ?>
        <input type="hidden" name="iduser" value="<?php echo $row->iduser; ?>">
        <input type="text" name="nombres" placeholder="Ingrese nombres" value="<?php echo $row->nombres; ?>">
        <input type="text" name="primerApellido" placeholder="Ingrese primer apellido" value="<?php echo $row->primerApellido; ?>">
        <input type="text" name="segundoApellido" placeholder="Ingrese segundo apellido" value="<?php echo $row->segundoApellido; ?>">
        <input type="text" name="edad" placeholder="Ingrese edad" value="<?php echo $row->edad; ?>">  

        <br>
          <input type="file" name="userfile">
        <br>      
                
        <button type="submit" class="btn btn-primary">MODIFICAR USUARIO</button>
        <?php 
        form_close(); 
      }

      ?>

     
      
    </div>
    
  </div>


</div>


