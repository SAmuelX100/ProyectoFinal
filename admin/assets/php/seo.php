<h2>Editar la Sección SEO</h2>
         <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
      Actualizado con éxito
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
         <form method="post" action="php/useo.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-12">
<img src="../assets/img/<?=$data['icon']?>" class="img-thumbnail ooo">
  </div>
  
  <div class="form-group col-md-6">
  <label>Siteicon (Mínimo 100px X 100px, Tamaño máximo 2mb)</label>
  <div class="custom-file">
   
    <input type="file" name="siteicon" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projectpic">Elige la Foto...</label>
  </div></div>
  
   <div class="form-group col-md-6 mt-auto">
      <label for="name">Título de la Página Web</label>
      <input type="name" name="title" value="<?=$data['title']?>" class="form-control" id="name" placeholder="Nombre Apellido">
    </div>
    
   
    
    <div class="form-group col-md-12">
      <label for="email">Palabras clave (Separadas por una coma ',')</label>
      <input type="text" name="keywords" value="<?=$data['keyword']?>" class="form-control" id="email" placeholder="Web Developer,PhP Developer,Portafolio">
    </div>
    <div class="form-group col-md-12">
      <label for="email">Descripción del sitio (Se recomiendan 160 caracteres)</label>
      <input type="text" value="<?=$data['description']?>" name="description" class="form-control" id="email" placeholder="Esto es un Portafolio Web">
    </div>
    <div class="form-group ml-auto">
        <input type="submit" name="seo" class="btn btn-primary" value="Actualizar">
    </div>
  
</form>