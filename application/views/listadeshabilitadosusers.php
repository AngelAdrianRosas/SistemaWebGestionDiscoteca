

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h1>Lista de usuarios deshabilitados</h1>

      <?php echo form_open_multipart('user/index'); ?>
       <button type="submit" name="buton2" class="btn btn-primary">VER USUARIOS HABILITADOS</button>
      <?php echo form_close(); ?>

           

     <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <!-- <th scope="col">Imagen</th>       -->
                <th scope="col">Nombre/s</th>
                <th scope="col">Primer apellido</th>
                <th scope="col">Segundo apellido</th>
                <th scope="col">Tipo</th>
                <th scope="col">Edad</th>               
                 
              </tr>
            </thead>
          <tbody>

 <?php
 $indice=1;
      foreach ($user->result() as $row) {
      ?>
          <tr>
            <th scope="row"><?php echo $indice; ?></th>
            <td><?php echo $row->nombres; ?></td>
            <td><?php echo $row->primerApellido; ?></td>
            <td><?php echo $row->segundoApellido; ?></td>                  
            <td><?php echo $row->tipo; ?></td> 
            <td><?php echo $row->edad; ?></td>    
            <td>
                <?php echo form_open_multipart("user/habilitarbd"); ?>
                <input type="hidden" name="iduser" value="<?php echo $row->iduser; ?>">
                <input type="submit" name="buttonx" value="Habilitar" class="btn btn-warning">
                <?php echo form_close(); ?>
            </td>

          </tr>
      <?php
      $indice++;     
    }
  ?>

  
  
  
  </tbody>
</table>
      
    </div>
    
  </div>


</div>


