

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h1>Lista de productos deshabilitados</h1>

      <?php echo form_open_multipart('producto/index'); ?>
       <button type="submit" name="buton2" class="btn btn-primary">VER PRODUCTOS HABILITADOS</button>
      <?php echo form_close(); ?>

           

      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
      <th scope="col">Habilitar</th> 
      <!-- <th scope="col">Modificar</th>
      <th scope="col">Eliminar</th>      
      -->
    </tr> 
  </thead>
  <tbody>

 <?php
 $indice=1;
      foreach ($producto->result() as $row) {
      ?>
          <tr>
            <th scope="row"><?php echo $indice; ?></th>
            <td><?php echo $row->nombre; ?></td>
            <td><?php echo $row->precio; ?></td>
            <td><?php echo $row->stock; ?></td>                  
    

            <td>
                <?php echo form_open_multipart("producto/habilitarbd"); ?>
                <input type="hidden" name="idproducto" value="<?php echo $row->idproducto; ?>">
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


