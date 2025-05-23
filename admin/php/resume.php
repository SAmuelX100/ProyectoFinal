<h2>Editar la Sección de Currículum</h2>
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
         <form action="php/uresume.php" method="post">
                 <div class="form-row">
                   <div class="form-group col-md-4">
                   <label>Seleccionar Categoría</label>
                    <select name="category" class="custom-select">
  <option value="e" selected>Educación</option>
  <option value="pe">Experiencia Laboral</option>
</select></div>
                     <div class="form-group col-md-8">
    <label for="sn">Nombre del Curso/Puesto</label>
    <input type="text" name="title" class="form-control" id="website" placeholder="Programador" required>
  </div>
   <div class="form-group col-md-8">
    <label for="website">Nombre del Instituto o Empresa</label>
    <input type="text" name="ogname" class="form-control" id="website" placeholder="Universidad Autonoma de Santo Domingo" required>
  </div>
   <div class="form-group col-md-4">
    <label for="website">Duración</label>
    <input type="text" name="year" class="form-control" id="website" placeholder="Año-Año" required>
  </div>
  <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Descripción</label>
    <textarea class="form-control" name="workdesc" id="exampleFormControlTextarea1" rows="3" placeholder="Me encargaba de..."></textarea>
  </div>
   <div class="form-group col-md-2 ml-auto">

      <input type="submit" name="addtoresume" class="btn btn-primary form-control" value="Añadir al Currículum"> 
   </div>
                
                 </div>
             </form>
         
         <table id="rlist" class="table table-striped table-sm .table-responsive ">
          <thead>
            <tr>
              <th>Id</th>
              <th>Categoría</th>
              <th>Curso/Puesto</th>
              <th>Duración</th>
              <th>Instituto/Empresa</th>
              <th>Actualizar</th>
            </tr>
          </thead>
          <tbody>
         <?php
$query2="SELECT * FROM resume";
$queryrun2=mysqli_query($db,$query2);
$count=1;         
while($data2=mysqli_fetch_array($queryrun2)){
    $cat = $data2['category']=='e'?$cat="Education":$cat="Experience";
    ?>
     <tr>
         <div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Editar</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="skilleditbox">
       <form action="php/uresume.php" method="post">
                <input type="hidden" name="id" value="<?=$data2['id']?>">
                 <div class="form-row">
                   <div class="form-group col-md-4">
                   <label>Seleccionar Categoría</label>
                    <select name="category" class="custom-select">
                    <?php 
                        if($data2['category']=='e'){ ?>
                           <option value="e" selected>Educación</option>
  <option value="pe">Experiencia Laboral</option> 
                      <?php  }else{ ?>
                            <option value="e">Educación</option>
  <option value="pe" selected>Experiencia Laboral</option>
                    <?php    }
                        ?>
 
   
</select></div>
                     <div class="form-group col-md-8">
    <label for="sn">Nombre del Curso/Puesto</label>
    <input type="text" name="title" value="<?=$data2['title']?>" class="form-control" id="website" placeholder="Programador" required>
  </div>
   <div class="form-group col-md-8">
    <label for="website">Nombre del Instituto o Empresa</label>
    <input type="text" name="ogname" value="<?=$data2['ogname']?>" class="form-control" id="website" placeholder="Universidad Autonoma de Santo Domingo" required>
  </div>
   <div class="form-group col-md-4">
    <label for="website">Duración</label>
    <input type="text" name="year" value="<?=$data2['year']?>" class="form-control" id="website" placeholder="Año-Año" required>
  </div>
  <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Descripción</label>
    <textarea class="form-control" name="workdesc" id="exampleFormControlTextarea1" rows="3" placeholder="Me encargaba de..."><?=$data2['workdesc']?></textarea>
  </div>
   
                
                 </div>
             
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-primary" name="rupdate" value="Actualizar">
    
      </div>
          </form>
    </div>
  </div>
</div>   
          <td>#<?=$count?></td>
              <td><?=$cat?></td>
         <td><?=$data2['title']?></td>
         <td><?=$data2['year']?></td>
         <td><?=$data2['ogname']?></td>
         
         <td>
         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?=$data2['id']?>">
  Editar
</button> <a href="php/uresume.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
  Eliminar
             </button></a></td>
            </tr>            
         <?php $count++;
} ?>
             </tbody></table>