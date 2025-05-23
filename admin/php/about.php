<h2>Editar la Sección de Info</h2>
        <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Datos actualizados con éxito
</div>
      <?php
  }  
 } 
?> 
         <form method="post" action="php/uabout.php">
         <div class="form-row">
             <div class="form-group col-md-12">
    <label for="ptitle">Título Profesional</label>
    <input type="text" name="ptitle" value="<?=$data['heading']?>" class="form-control" id="ptitle" placeholder="Desarrollador Web /Programador">
  </div>
        <div class="form-group col-md-12">
    <label for="psubtitle">Subtítulo</label>
    <input type="text" name="psubtitle" value="<?=$data['subheading']?>" class="form-control" id="psubtitle" placeholder="Actualmente trabajo en...">
  </div>
    <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Breve Descripción Sobre Ti ( Se Puede Usar Código Html)</label>
    <textarea class="form-control" name="shortdesc" id="exampleFormControlTextarea1" rows="3" placeholder="Soy una persona a la que le gusta..."><?=$data['shortdesc'];?></textarea>
  </div>
        <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Descripción Larga Sobre Ti ( Se Puede Usar Código Html)</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="longdesc" placeholder="Me considero..."><?=$data['longdesc'];?>
    </textarea>
  </div>    
        
        <div class="form-group col-md-6">
    <label for="bd">Fecha de Nacimiento</label>
    <input type="text" name="dob" value="<?=$data['dob']?>" class="form-control" id="dob" placeholder="Día Mes, Año">
  </div>
        
         </div>
         <input type="submit" name="save" class="btn btn-primary" value="Guardar Cambios">
         </form>
         <hr>
         <h4 ID="skillsection">Gestión de Competencias</h4>
         
         <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Competencia</th>
              <th>Competencia Porcentaje</th>
              <th>Actualizar</th>
            </tr>
          </thead>
          <tbody>
         <?php
$query2="SELECT * FROM skills";
$queryrun2=mysqli_query($db,$query2);
$count=1;         
while($data2=mysqli_fetch_array($queryrun2)){
    ?>
     <tr>
         <div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Editar Competencia</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="skilleditbox">
       <form method="post" action="php/supdate.php">
       <input type="hidden" name="id" value="<?=$data2['id']?>">
        <div class="form-row">
            <div class="form-group col-md-6">
    <label for="website">Competencia</label>
    <input type="text" name="skill" value="<?=$data2['skill']?>" class="form-control" id="website" placeholder="PHP">
  </div>
       <div class="form-group col-md-6">
    <label for="website">Nivel</label>
    <input type="text" name="score" value="<?=$data2['score']?>" class="form-control" id="website" placeholder="100">
  </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-primary" name="supdate" value="Actualizar">
          </form>
      </div>
    </div>
  </div>
</div>   
          <td>#<?=$count?></td>
              <td><?=$data2['skill']?></td>
         <td><?=$data2['score']?>%</td>
         <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?=$data2['id']?>">
  Editar
</button> <a href="php/supdate.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  Eliminar
             </button></a></td>
            </tr>            
         <?php $count++;
} ?>
             </tbody></table>
             <form action="php/supdate.php" method="post">
                 <div class="form-row">
                     <div class="form-group col-md-5">
    <label for="sn">Nombre de Competencia</label>
    <input type="text" name="skill" class="form-control" id="website" placeholder="PHP" required>
  </div><div class="form-group col-md-5">
    <label for="website">Nivel de Destreza (Sobre 100)</label>
    <input type="text" name="score" class="form-control" id="website" placeholder="100" required>
  </div>
   <div class="form-group col-md-2">
     <label class="text-white">submit</label>
      <input type="submit" name="addskill" class="btn btn-primary form-control" value="Añadir Competencia"> 
   </div>
                
                 </div>
             </form>