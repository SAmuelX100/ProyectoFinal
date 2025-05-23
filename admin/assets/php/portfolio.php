 <h2>Editar Sección de Portafolio</h2>
         <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
¡Proyecto añadido con éxito!
</div>
      <?php
  }  
  if($_GET['msg']=='error'){
      ?>
      <div class="alert alert-danger text-center" role="alert">
  ¡Hay algo mal en la imagen, por favor, compruebe el tipo o el tamaño!
</div>
      <?php
  } } 
?>  
         <form method="post" action="php/uportfolio.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-6">
  <label>Imagen del Proyecto ( Mínimo 600px X 600px, Tamaño Máximo 2mb)</label>
  <div class="custom-file">
    <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projectpic">Elige la Foto...</label>
  </div></div>
  
   <div class="form-group col-md-6 mt-auto">
      <label for="name">Nombre del Proyecto</label>
      <input type="name" name="projectname" class="form-control" id="name" placeholder="Formulario">
    </div>
    
   
    
    <div class="form-group col-md-12">
      <label for="email">URL del Proyecto</label>
      <input type="text" name="projectlink" class="form-control" id="email" placeholder="https://url">
    </div>
    <div class="form-group col-md-2 ml-auto">
        <input type="submit" name="addtoportfolio" class="btn btn-primary" value="Añadir al Portafolio">
    </div>
  
</form>
<table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Imagen del Proyecto</th>
              <th>Nombre del Proyecto</th>
              <th>Actualizar</th>
            </tr>
          </thead>
          <tbody>
         <?php
$query2="SELECT * FROM portfolio";
$queryrun2=mysqli_query($db,$query2);
$count=1;         
while($data2=mysqli_fetch_array($queryrun2)){
    ?>
     <tr>
         <div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Editar Portafolio</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="php/uportfolio.php" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?=$data2['id']?>">
  <div class="form-row">
  <div class="form-group col-md-12">
      <img src="../assets/img/<?=$data2['projectpic']?>" class="oo img-thumbnail">
  </div>
  <div class="form-group col-md-6">
  <label>Imagen del Proyecto ( Mínimo 600px X 600px, Tamaño Máximo 2mb)</label>
  <div class="custom-file">
    <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projectpic">Elige la Foto...</label>
  </div></div>
  
   <div class="form-group col-md-6 mt-auto">
      <label for="name">Nombre del Proyecto</label>
      <input type="name" name="projectname" value="<?=$data2['projectname']?>" class="form-control" id="name" placeholder="Formulario">
    </div>
    
   
    
    <div class="form-group col-md-12">
      <label for="email">URL del Proyecto</label>
      <input type="text" name="projectlink" value="<?=$data2['projectlink']?>" class="form-control" id="email" placeholder="https://url">
    </div>

      </div>
      
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-primary" name="pupdate" value="Actualizar">
          </form>
      </div>
    </div>
  </div>
</div>   
          <td>#<?=$count?></td>
              <td><img src="../assets/img/<?=$data2['projectpic']?>" class="oo img-thumbnail"></td>
         <td><?=$data2['projectname']?></td>
         <td>
             <a href="<?=$data2['projectlink']?>" target="_blank"> <button type="button" class="btn btn-success btn-sm">Visitar</button></a>
         
         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?=$data2['id']?>">
  Editar
</button> <a href="php/uportfolio.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
  Eliminar
             </button></a></td>
            </tr>            
         <?php $count++;
} ?>
             </tbody></table>  