<?php
 include 'header.php';
 

 if(isset($_GET['id'])){
  $student_info=$student_obj->view_student_by_student_id($_GET['id']);
  


     
 }else{
  header('Location: cost.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content"> 

       
          
           
             <a  href="cost.php"  class="button button-purple mt-12 pull-right">View Cost</a> 
     
 <h3>View Cost Info</h3>
       
    
     <hr/>


    <label >Electricity: cost</label>
   <?php  if(isset($student_info['electricity'])){echo $student_info['electricity']; }?>

<br/>
    <label>Petrol cost:</label>
  <?php  if(isset($student_info['petrol'])){echo $student_info['petrol'];} ?>
    
    <br/>
    <label >LPG cost:</label>
      <?php  if(isset($student_info['lpg'])){echo $student_info['lpg'];} ?>
    <br/>

  <label >Diesel cost:</label>
   <?php  if(isset($student_info['diesel'])){echo $student_info['diesel'];} ?>
  <br/>
    <label >Biomass_50mc cost:</label>
      <?php  if(isset($student_info['biomass_50mc'])){echo $student_info['biomass_50mc'];} ?>
  <br/>

        <label >Biomass_30mc cost:</label>
      <?php  if(isset($student_info['biomass_30mc'])){echo $student_info['biomass_30mc'];} ?>
  <br/>

        <label >Kerosine cost:</label>
      <?php  if(isset($student_info['kerosine'])){echo $student_info['kerosine'];} ?>
  <br/>       

        <label >Demand cost:</label>
      <?php  if(isset($student_info['demand'])){echo $student_info['demand'];} ?>
  <br/>

   <label >Date:</label>
      <?php  if(isset($student_info['datetime'])){echo $student_info['datetime'];} ?>
  <br/>

        <label >Department:</label>
      <?php  if(isset($student_info['dep_name'])){echo $student_info['dep_name'];} ?>
  <br/>

    <a href="<?php echo 'update-cost.php?id='.$student_info["cost_Id"] ?>" class="button button-blue">Edit</a>

   
  
     
   
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

