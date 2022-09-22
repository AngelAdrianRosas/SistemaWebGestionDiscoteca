

<div class="container">
  <div class="row">
    <div class="col-md-12">        

      <h1><STRONG>Lista de clientes habilitados.</STRONG></h1>

      <?php echo form_open_multipart('cliente/deshabilitados'); ?>
       <button type="submit" name="buton2" class="btn btn-warning">VER CLIENTES DESHABILITADOS</button>
      <?php echo form_close(); ?>

      <?php echo form_open_multipart('cliente/agregar'); ?>
      <button type="submit" class="btn btn-primary">AGREGAR CLIENTE</button>
      <?php echo form_close(); ?>

      <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Primer apellido</th>
                <th scope="col">Segundo apellido</th>
                <th scope="col">Eliminar</th>
                <th scope="col">Modificar</th>  
                <th scope="col">Deshabilitar</th> 
              </tr>
            </thead>
          <tbody>

 <?php
 $indice=1;
      foreach ($cliente->result() as $row) {
       ?>
           <tr>
            <th scope="row"><?php echo $indice; ?></th>
            <td><?php echo $row->nombres; ?></td>
            <td><?php echo $row->apellidoPaterno; ?></td>
            <td><?php echo $row->apellidoMaterno; ?></td>

          
            <td>
                <?php echo form_open_multipart("cliente/eliminarbd"); ?>
                <input type="hidden" name="idcliente" value="<?php echo $row->idcliente; ?>">
                <input type="submit" name="buttonx" value="Eliminar" class="btn btn-danger">
                <?php echo form_close(); ?>
            </td>

            <td>             
                <?php echo form_open_multipart("cliente/modificar"); ?>
                <input type="hidden" name="idcliente" value="<?php echo $row->idcliente; ?>">
                <input type="submit" name="buttony" value="Modificar" class="btn btn-danger">
                <?php echo form_close(); ?>
            </td>



              <td>
                <?php echo form_open_multipart("cliente/deshabilitarbd"); ?>
                <input type="hidden" name="idcliente" value="<?php echo $row->idcliente; ?>">
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


