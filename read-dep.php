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










 



                
                </div>


            </div>


                    </div>
                    <!--End Chat Panel Example-->
                </div>
            </div>


         


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>

</html>
