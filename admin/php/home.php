<h2>Editar el Home</h2>
         <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Datos actualizados con éxito
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
         <form method="post" action="php/uhome.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-6">
  <img src="../assets/img/<?=$data['profilepic']?>" class="oo img-thumbnail"><br>
  <label>Foto de perfil (mínimo 600px X 600px, tamaño máximo 2mb)</label>
  <div class="custom-file">
    <input type="file" name="profile" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="profilepic">Elige la foto de perfil...</label>
  </div></div>

  <div class="form-group col-md-6">
  <label></label>
  <div class="custom-file">
  </div></div>
  
   <div class="form-group col-md-6">
      <label for="name">Nombre</label>
      <input type="name" name="name" value="<?=$data['name']?>" class="form-control" id="name" placeholder="Nombre Apellido">
    </div>
    
    <div class="form-group col-md-6">
      <label for="email">Correo eléctronico</label>
      <input type="email" name="email" value="<?=$data['emailid']?>" class="form-control" id="email" placeholder="example@gmail.com">
    </div>
            
    <div class="form-group col-md-6">
      <label for="linkedin">Linkedin</label>
      <input type="text" class="form-control" value="<?=$data['linkedin']?>" name="linkedin" id="linkedin" placeholder="https://linkedin.com/url">
    </div>

    <div class="form-group col-md-6">
      <label for="github">Github</label>
      <input type="text" class="form-control"  value="<?=$data['github']?>" name="github" id="github" placeholder="https://github.com/url">
    </div>
    
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="profession">Títulos de las profesiones (Separar con ',' coma)</label>
    <input type="text" class="form-control" name="profession" value="<?=$data['professions']?>" id="profession" placeholder="Estudiante, Programador, Etc">
  </div>
  <div class="form-group col-md-6">
    <label for="mobile">Número de teléfono</label>
    <input type="text" class="form-control" value="<?=$data['mobile']?>" name="mobile" id="mobile" placeholder="+11111111111">
  </div>
             </div>
  <input type="submit" name="save" class="btn btn-primary" value="Guardar Cambios">
</form>