<?php
include 'header.php';
$student_list = $student_obj->staff_list();
?>
<div class="container " > 
    <div class="row content">
        
        <h3>Staff List</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>


        <table class="table-responsive table table-striped table-bordered table-hover">
            <thead style="border: 1px solid black;">
                <tr style="border: 1px solid black;">
                    <th style="border: 1px solid black;">Staff name</th>                    
                    <th style="border: 1px solid black;">Position</th>  
                    <th style="border: 1px solid black;">Department</th>
                    <th class="text-right">Action</th>
                </tr> 
            </thead>
            <tbody>
<?php
if ($student_list->num_rows > 0) {
  while ($row = $student_list->fetch_assoc()) {
     ?>

             <tr>
                <td style="border: 1px solid black;"><?php echo $row["staff_name"] ?></td>
                <td style="border: 1px solid black;"><?php echo $row["position"] ?></td>
                <td style="border: 1px solid black;"><?php echo $row["dep_name"] ?></td>               
                <td style="border: 1px solid black;" class="text-right">
                    <a  href="<?php echo 'staff.php?id=' . $row["staff_id"] ?>" class="button button-red">Delete</a>  
                    <!--a  href="<?php echo 'update-student-info.php?id=' . $row["staff_id"] ?>" class="button button-blue">Edit</a>  
                    <a href="<?php echo 'read-student-info.php?id=' . $row["staff_id"] ?>" class="button button-green">View</a-->
                </td>
            </tr>
    <?php
    }
}
?>
<?php
  if(isset($_GET['id'])){
  $staff_info=$student_obj->delete_staff_info_by_id($_GET['id']); 
     
 }
?>

           </tbody>
        </table>

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
