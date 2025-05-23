<?php
include('../../include/db.php');
include('checkupload.php');
$query="SELECT * FROM personal_setup";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

$target_dir = "../../assets/img/";

if(isset($_POST['save'])){
    
$profilepic=$_FILES['profile']['name'];    
    
if($profilepic==""){
    $profilepic=$data['profilepic'];
}else{
    $pdone = Upload('profile',$target_dir);
}
    

    
    
$name=mysqli_real_escape_string($db,$_POST['name']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$linkedin=mysqli_real_escape_string($db,$_POST['linkedin']);
$github=mysqli_real_escape_string($db,$_POST['github']);
$mobile=mysqli_real_escape_string($db,$_POST['mobile']);
$profession=mysqli_real_escape_string($db,$_POST['profession']);   

    


    
if($pdone=="error"){
    header("location:../?edithome=true&msg=error");
}else if($cdone=="error"){
    header("location:../?edithome=true&msg=error");
}else{
$query="UPDATE personal_setup SET ";
$query.="profilepic='$profilepic',";
$query.="name='$name',";
$query.="linkedin='$linkedin',";
$query.="github='$github',";
$query.="professions='$profession',";
$query.="mobile='$mobile',";
$query.="emailid='$email' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?edithome=true&msg=updated");
}    

}    
    
}
