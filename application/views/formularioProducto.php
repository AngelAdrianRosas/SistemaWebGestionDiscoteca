

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h2>Agregar producto</h2>

      <?php echo form_open_multipart('producto/agregarbd'); ?>

      <!-- <input type="text" name="nombre" placeholder="Ingrese nombre"> -->
       <div class="mb-3">
        <!-- <label class="form_label">Nombre :</label>
        <input type="text" class="form_control" name="nombre" placeholder="Escriba el nombre">  -->
        <label for="nombre">Nombre:</label>
        <input class="form-control" name="nombre" required type="text" id="nombre" placeholder="Escriba el nombre">        
      </div>
      <br>
      <!-- <input type="text" name="precio" placeholder="Ingrese precio"> -->
      <div class="mb-3">
        <!-- <label class="form_label">Precio :</label>
        <input type="text" class="form_control" name="precio" placeholder="Escriba el precio"> -->
        <label for="nombre">Precio:</label>
        <input class="form-control" name="precio" required type="number" id="precio" placeholder="Escriba el precio">        
      </div>
      <br>
      <!-- <input type="text" name="stock" placeholder="Ingrese stock"> -->
      <div class="mb-3">
        <!-- <label class="form_label">Stock :</label>
        <input type="text" class="form_control" name="stock" placeholder="Escriba el stock">         -->
        <label for="stock">Stock:</label>
        <input class="form-control" name="stock" required type="number" id="stock" placeholder="Escriba el stock">        
      </div>
      <br>     
      <button type="submit" class="btn btn-primary">AGREGAR PRODUCTO</button>

      <?php form_close(); ?>

     
      
    </div>
    
  </div>


</div>


