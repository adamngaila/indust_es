<?php
 include 'header.php';
 

 if(isset($_GET['id'])){
  $student_info=$student_obj->view_student_by_student_id($_GET['id']);
  


     
 }else{
  header('Location: staff.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content"> 

       
          
           
             <a  href="staff.php"  class="button button-purple mt-12 pull-right">View Staff</a> 
     
 <h3>View Staff Info</h3>
       
    
     <hr/>



                    <th>Staff name</th>                    
                    <th>Position</th>  
                    <th>Department</th>
                    <th class="text-right">Action</th>
                </tr> 
            </thead>
            <tbody>
<?php
if ($student_list->num_rows > 0) {
  while ($row = $student_list->fetch_assoc()) {
     ?>

             <tr>
                <td><?php echo $row["staff_name"] ?></td>
                <td><?php echo $row["position"] ?></td>
                <td><?php echo $row["dep_name"] ?></td>

    <label >Staff name:</label>
   <?php  if(isset($student_info['machine_name'])){echo $student_info['machine_name']; }?>

<br/>
    <label>Position:</label>
  <?php  if(isset($student_info['machine_details'])){echo $student_info['machine_details'];} ?>
    
    <br/>
    <label >Department:</label>
      <?php  if(isset($student_info['machine_function'])){echo $student_info['machine_function'];} ?>
    <br/>

   
    <a href="<?php echo 'update-staff.php?id='.$student_info["staff_id"] ?>" class="button button-blue">Edit</a>

   
  
     
   
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

