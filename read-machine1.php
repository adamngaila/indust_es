<?php
 include 'header.php';
 

 if(isset($_GET['id'])){
  $student_info=$student_obj->view_student_by_student_id($_GET['id']);
  


     
 }else{
  header('Location: machine.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content"> 

       
          
           
             <a  href="machine.php"  class="button button-purple mt-12 pull-right">View Machine</a> 
     
 <h3>View Machine Info</h3>
       
    
     <hr/>

    <label >Machine name:</label>
   <?php  if(isset($student_info['machine_name'])){echo $student_info['machine_name']; }?>

<br/>
    <label>Machine details:</label>
  <?php  if(isset($student_info['machine_details'])){echo $student_info['machine_details'];} ?>
    
    <br/>
    <label >Machine function:</label>
      <?php  if(isset($student_info['machine_function'])){echo $student_info['machine_function'];} ?>
    <br/>

  <label >Machine capacity:</label>
   <?php  if(isset($student_info['machine_capacity'])){echo $student_info['machine_capacity'];} ?>
  <br/>

    <label >Machine status:</label>
   <?php  if(isset($student_info['machine_status'])){echo $student_info['machine_status'];} ?>
  <br/>
   
    <a href="<?php echo 'update-machine.php?id='.$student_info["machine_id"] ?>" class="button button-blue">Edit</a>

   
  
     
   
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

