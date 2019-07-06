<?php
 include 'header.php'; 
 

 if(isset($_GET['id'])){
  $student_info=$student_obj->view_student_by_student_id($_GET['id']);
  


     
 }else{
  header('Location: consu.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content"> 

       
          
           
             <a  href="consu.php"  class="button button-purple mt-12 pull-right">View Consumption</a> 
     
 <h3>View Consumption Info</h3>
       
    
     <hr/>
    
      
    <label >Electricity:</label>
   <?php  if(isset($student_info['electricity'])){echo $student_info['electricity']; }?>

<br/>
    <label>Petrol:</label>
  <?php  if(isset($student_info['petrol'])){echo $student_info['petrol'];} ?>
    
    <br/>
    <label >LPG:</label>
      <?php  if(isset($student_info['lpg'])){echo $student_info['lpg'];} ?>
    <br/>

  <label >Diesel:</label>
   <?php  if(isset($student_info['diesel'])){echo $student_info['diesel'];} ?>
  <br/>
    <label >Biomass_50mc:</label>
      <?php  if(isset($student_info['biomass_50mc'])){echo $student_info['biomass_50mc'];} ?>
  <br/>

        <label >Biomass_30mc:</label>
      <?php  if(isset($student_info['biomass_30mc'])){echo $student_info['biomass_30mc'];} ?>
  <br/>

        <label >Kerosine:</label>
      <?php  if(isset($student_info['kerosine'])){echo $student_info['kerosine'];} ?>
  <br/>

        <label >Temperature:</label>
      <?php  if(isset($student_info['temperature'])){echo $student_info['temperature'];} ?>
  <br/>

        <label >Demand:</label>
      <?php  if(isset($student_info['demand'])){echo $student_info['demand'];} ?>
  <br/>

        <label >Department:</label>
      <?php  if(isset($student_info['dep_name'])){echo $student_info['dep_name'];} ?>
  <br/>

    <a href="<?php echo 'update-consu.php?id='.$student_info["id"] ?>" class="button button-blue">Edit</a>

   
  
     
   
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
