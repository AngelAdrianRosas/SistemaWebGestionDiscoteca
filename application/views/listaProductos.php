

<div class="container">
  <div class="row">
    <div class="col-md-12">


       <h1>Lista de productos habilitados</h1>
      
      <?php echo form_open_multipart('producto/deshabilitados'); ?>
       <button type="submit" name="buton2" class="btn btn-warning">VER PRODUCTOS DESHABILITADOS</button>
      <?php echo form_close(); ?>
      
      <br>
      <a target="_blank" href="<?php echo base_url(); ?>index.php/producto/listapdf">
        <button class="btn btn-succes btn-block">Lista de productos </button>
      </a>
      <br>

      <?php echo form_open_multipart('producto/agregar'); ?>
      <button type="submit" class="btn btn-primary">AGREGAR PRODUCTO</button>
      <?php echo form_close(); ?> 
             
   

      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Foto</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
      <th scope="col">Creado en</th>
      <th scope="col">Modificar</th>
      <!-- <th scope="col">Eliminar</th>  -->
      <th scope="col">Deshabilitar</th> 
      
    </tr>
  </thead>
  <tbody>

 <?php
 $indice=1;
      foreach ($producto->result() as $row) {
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
            <td><?php echo $row->nombre; ?></td>
            <td><?php echo $row->precio; ?></td>
            <td><?php echo $row->stock; ?></td>
            <td><?php echo formatearFecha($row->creado); ?></td>


            <td>
                <?php echo form_open_multipart("producto/modificar"); ?>
                <input type="hidden" name="idproducto" value="<?php echo $row->idproducto; ?>">
                <input type="submit" name="buttony" value="Modificar" class="btn btn-danger">
                <?php echo form_close(); ?>
            </td>


            <!-- <td>
                <?php echo form_open_multipart("producto/eliminarbd"); ?>
                <input type="hidden" name="idproducto" value="<?php echo $row->idproducto; ?>">
                <input type="submit" name="buttonx" value="Eliminar" class="btn btn-danger">
                <?php echo form_close(); ?>
            </td> -->


              <td>
                <?php echo form_open_multipart("producto/deshabilitarbd"); ?>
                <input type="hidden" name="idproducto" value="<?php echo $row->idproducto; ?>">
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


