<?php
include 'header.php';
$student_list = $student_obj->cost_list();
?>
<div class="container " > 
    <div class="row content">
         
        <h3>Cost List</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>



        <table class="table-responsive table table-striped table-bordered table-hover">
            <thead style="border: 1px solid black;">
                <tr style="border: 1px solid black;">
                    <th style="border: 1px solid black;">Electricity cost</th>                    
                    <th style="border: 1px solid black;">Petrol cost</th>  
                    <th style="border: 1px solid black;">LPG cost</th>                  
                    <th style="border: 1px solid black;">Diesel cost</th>
                    <th style="border: 1px solid black;">Biomass_50mc cost</th>
                    <th style="border: 1px solid black;">Biomass_30mc cost</th>
                    <th style="border: 1px solid black;">Kerosine cost</th>            
                    <th style="border: 1px solid black;">Demand cost</th>
                    <th style="border: 1px solid black;">Date</th>
                    <th style="border: 1px solid black;">Department</th>
                    <th class="text-right" style="border: 1px solid black;">Action</th>
                </tr>
            </thead>
            <tbody style="border: 1px solid black;">
<?php
if ($student_list->num_rows > 0) {
  while ($row = $student_list->fetch_assoc()) {
     ?>

             <tr style="border: 1px solid black;">
                <td style="border: 1px solid black;"><?php echo $row["electricitycost"] ?></td>
                <td style="border: 1px solid black;"><?php echo $row["petrolcost"] ?></td>
                <td style="border: 1px solid black;"><?php echo $row["lpgcost"] ?></td>
                <td style="border: 1px solid black;"><?php echo $row["dieselcost"] ?></td>
                <td style="border: 1px solid black;"><?php echo $row["biomass_50mccost"] ?></td>
                <td style="border: 1px solid black;"><?php echo $row["biomass_30mccost"] ?></td>
                <td style="border: 1px solid black;"><?php echo $row["kerosinecost"] ?></td>         
                <td style="border: 1px solid black;"><?php echo $row["demandcost"] ?></td>
                <td style="border: 1px solid black;"><?php echo $row["datetime"] ?></td>
                <td style="border: 1px solid black;"><?php echo $row["dep_name"] ?></td>               
                <td class="text-right" style="border: 1px solid black;">
                    <a  href="<?php echo 'cost.php?id=' . $row["cost_Id"] ?>" class="button button-red">Delete</a>  
                    <!--a  href="<?php echo 'update-cost.php?id=' . $row["cost_Id"] ?>" class="button button-blue">Edit</a>  
                    <a href="<?php echo 'read-cost.php?id=' . $row["cost_Id"] ?>" class="button button-green">View</a-->
                </td>
            </tr>
    <?php
    }
}
?>
<?php
  if(isset($_GET['id'])){
  $cost_info=$student_obj->delete_cost_info_by_id($_GET['id']);
 
     
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
