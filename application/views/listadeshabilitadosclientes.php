

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h1>Lista de clientes deshabilitados</h1>

      <?php echo form_open_multipart('cliente/index'); ?>
       <button type="submit" name="buton2" class="btn btn-primary">VER CLIENTES HABILITADOS</button>
      <?php echo form_close(); ?>

           

     <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Primer apellido</th>
                <th scope="col">Segundo apellido</th>
                <th scope="col">Habilitar</th> 
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
                <?php echo form_open_multipart("cliente/habilitarbd"); ?>
                <input type="hidden" name="idcliente" value="<?php echo $row->idcliente; ?>">
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


