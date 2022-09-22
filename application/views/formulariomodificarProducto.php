

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h2>Modificar producto</h2>

      <?php
      foreach ($infoproducto->result() as $row) 
      {                                                  

        echo form_open_multipart('producto/modificarbd'); ?>


        <input type="hidden" name="idproducto" value="<?php echo $row->idproducto; ?>">


        <input type="text" name="nombre" placeholder="Ingrese nombre" value="<?php echo $row->nombre; ?>">
        <input type="text" name="precio" placeholder="Ingrese precio" value="<?php echo $row->precio; ?>">
        <input type="text" name="stock" placeholder="Ingrese stock" value="<?php echo $row->stock; ?>">

        <br>

        <input type="file" name="userfile">

        <br>
                
        <button type="submit" class="btn btn-primary">MODIFICAR PRODUCTO</button>
        <?php 
        form_close(); 
      }

      ?>

     
      
    </div>
    
  </div>


</div>


