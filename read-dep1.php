<?php
 include 'header.php';
 

 if(isset($_GET['id'])){
  $student_info=$student_obj->view_student_by_student_id($_GET['id']);
  


     
 }else{
  header('Location: dep.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content"> 

       
          
           
             <a  href="dep.php"  class="button button-purple mt-12 pull-right">View Department</a> 
     
 <h3>View Department Info</h3>
       
    
     <hr/>

      
    <label >Department name</label>
   <?php  if(isset($student_info['dep_name'])){echo $student_info['dep_name']; }?>

<br/>
    <label>Department function:</label>
  <?php  if(isset($student_info['dep_function'])){echo $student_info['dep_function'];} ?>
    
    <br/>
    <label >Department phone:</label>
      <?php  if(isset($student_info['dep_phone'])){echo $student_info['dep_phone'];} ?>
    <br/>

  <label >Department machine:</label>
   <?php  if(isset($student_info['machine_name'])){echo $student_info['machine_name'];} ?>
  <br/>
   
    <a href="<?php echo 'update-dep.php?id='.$student_info["dep_id"] ?>" class="button button-blue">Edit</a>

   
  
     
   
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

