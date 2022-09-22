

<div class="container">
  <div class="row">
    <div class="col-md-12">      
                  
      <h1>Lista de usuarios habilitados</h1>

      <?php echo form_open_multipart('user/deshabilitados'); ?>
       <button type="submit" name="buton2" class="btn btn-warning">VER USUARIOS DESHABILITADOS</button>
      <?php echo form_close(); ?>

      <?php echo form_open_multipart('user/agregar'); ?>
      <button type="submit" class="btn btn-primary">AGREGAR USUARIO</button>
      <?php echo form_close(); ?>

      <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Imagen</th>      
                <th scope="col">Nombre/s</th>
                <th scope="col">Primer apellido</th>
                <th scope="col">Segundo apellido</th>
                <th scope="col">Tipo</th>
                <th scope="col">Edad</th>
                 <!--<th scope="col">Eliminar</th>-->
                <th scope="col">Modificar</th>  
                <th scope="col">Deshabilitar</th> 
              </tr>
            </thead>
          <tbody>

 <?php
 $indice=1;
      //foreach ($usuarios->result() as $row) {
      foreach ($user->result() as $row) {
       ?>
           <tr>
            <th scope="row"><?php echo $indice; ?></th>  
            <td>
              <?php
              $imagen=$row->imagen;
              if($imagen=="")
              {
                ?>
                <img src="<?php echo base_url(); ?>/uploads/user.png" width="50px">
                <?php
              }
              else
              {
                ?>
                <img src="<?php echo base_url(); ?>/uploads/<?php echo $imagen; ?>" width="50px">
                <?php
              }
              ?>
            </td>
            <td><?php echo $row->nombres; ?></td>
            <td><?php echo $row->primerApellido; ?></td>
            <td><?php echo $row->segundoApellido; ?></td>
            <td><?php echo $row->tipo; ?></td>  
            <td><?php echo $row->edad; ?></td>  

           

            <!-- <td>
                <?php echo form_open_multipart("user/eliminarbd"); ?>
                <input type="hidden" name="iduser" value="<?php echo $row->iduser; ?>">
                <input type="submit" name="buttonx" value="Eliminar" class="btn btn-danger">
                <?php echo form_close(); ?>
            </td> -->

              <td>
                <?php echo form_open_multipart("user/modificar"); ?>
                <input type="hidden" name="iduser" value="<?php echo $row->iduser; ?>">
                <input type="submit" name="buttony" value="Modificar" class="btn btn-danger">
                <?php echo form_close(); ?>
              </td>


              <td>
                <?php echo form_open_multipart("user/deshabilitarbd"); ?>
                <input type="hidden" name="iduser" value="<?php echo $row->iduser; ?>">
                <input type="submit" name="buttonz" value="Deshabilitar" class="btn btn-warning">
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


