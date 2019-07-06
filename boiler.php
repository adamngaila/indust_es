<?php
include 'header1.php';
if (isset($_POST['create_consu'])) {
    $student_obj->create_consu_info($_POST);
}
?>

<div class="container "> 
    <div class="row content ">
        <h3>Boiler</h3>
        <hr/>
        <form method="post" action="" style="width: 600px;" >
            <div class="form-group">
                <label for="student_name">Electricity:</label>
                <input type="text" name="electricity" id="student_name" class="form-control" >
            </div>
            <div class="form-group">
                <label for="email_address">Petrol:</label>
                <input type="text" class="form-control" name="petrol" id="email_address" >
            </div>
            <div class="form-group">
                <label for="contact">LPG:</label>
                <input type="text" class="form-control" name="lpg" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Diesel:</label>
                <input type="text" class="form-control" name="diesel" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Biomass_50mc:</label>
                <input type="text" class="form-control" name="biomass_50mc" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Biomass_30mc:</label>
                <input type="text" class="form-control" name="biomass_30mc" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Kerosine:</label>
                <input type="text" class="form-control" name="kerosine" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Temperature:</label>
                <input type="text" class="form-control" name="temperature" id="contact"  maxlength="50">
            </div>
                  <div class="form-group">
                <label for="contact">Demand:</label>
                <input type="text" class="form-control" name="demand" id="contact"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="gender">Department:</label>
                <select class="form-control" name="dep_name" id="gender" required>
                    <option value="" selected>Select</option>
                    <option value="energy" >energy</option>
                    <option value="management" >management</option>
                </select>
            </div> 
            <input type="submit" class="button button-green  pull-right" name="create_consu" value="Submit"/>
        </form> 
    </div>
</div>
<hr/>
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
