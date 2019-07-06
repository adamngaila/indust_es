
                <?php
include 'header.php';
$student_list = $student_obj->consu_list();
?>
<div class="container " > 
    <div class="row content">
    
        <h3>Consumption</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <table class="table-responsive table table-striped table-bordered table-hover">
            <thead style="border: 1px solid black ;">
                <tr style="border: 1px solid black;">
                    <th style="border: 1px solid black;">Electricity(KWh)</th>                    
                    <th style="border: 1px solid black;">Electricity(GJ)</th>  
                    <th style="border: 1px solid black;">LPG</th>                  
                    <th style="border: 1px solid black;">Diesel</th>
                    <th style="border: 1px solid black;">Total energy(GJ)</th>
                    <th style="border: 1px solid black;">production Units(HL)</th>
                    <th style="border: 1px solid black;">Pressure</th>
                    <th style="border: 1px solid black;">Temperature</th>
                    <th style="border: 1px solid black;">Demand</th>
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

             <tr style="border: 1px solid black;" >
                <td style="border-width: 1px"><?php echo $row["electricity(KWh)"] ?></td>
                <td style="border: 0.1px solid black;"><?php echo $row["electricity(GJ)"] ?></td>
                <td style="border: 0.1px solid black;"><?php echo $row["lpg"] ?></td>
                <td style="border: 0.1px solid black;"><?php echo $row["diesel"] ?></td>
                <td style="border: 0.1px solid black;"><?php echo $row["total_energy(GJ)"] ?></td>
                <td style="border: 0.1px solid black;"><?php echo $row["production_units(HL)"] ?></td>
                <td style="border: 0.1px solid black;"><?php echo $row["Pressure"] ?></td> 
                <td style="border: 0.1px solid black;"><?php echo $row["temperature"] ?></td>
                <td style="border: 0.1px solid black;"><?php echo $row["demand"] ?></td>
                <td style="border: 0.1px solid black;"><?php echo $row["datetim"] ?></td>
                <td style="border: 0.1px solid black;"><?php echo $row["dep_name"] ?></td>               
                <td class="text-right" style="border: 1px solid black;">
                    <a  href="<?php echo 'consu.php?id=' . $row["id"] ?>" class="button button-red">Delete</a>  
                    <!--a  href="<?php echo 'update-student.php?id=' . $row["id"] ?>" class="button button-blue">Edit</a>  
                    <a href="<?php echo 'read-consu.php?id=' . $row["id"] ?>" class="button button-green">View</a-->
                </td>
            </tr>
    <?php
    }
}
?>
<?php
 if(isset($_GET['id'])){ 
  $consu_info=$student_obj->delete_consu_info_by_id($_GET['id']);
 
     }
 ?>    
           </tbody>
        </table>

    </div>
</div>
<?php
include 'footer.php';
?>  


                
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
