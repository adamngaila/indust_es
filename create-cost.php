
<?php
include 'header.php';
if (isset($_POST['create_cost'])) {
    $student_obj->create_cost_info($_POST);
}
?>   

<div class="container"> 
    <div class="row content">
        
        <h3>Cost recording</h3>
        <hr/>
        <form method="post" action="" style="width: 600px;">
            <div class="form-group">
                <label for="student_name">Electricity cost:</label>
                <input type="text" name="electricitycost" id="student_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="email_address">Petrol cost:</label>
                <input type="text" class="form-control" name="petrolcost" id="email_address" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact">LPG cost:</label>
                <input type="text" class="form-control" name="lpgcost" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Diesel cost:</label>
                <input type="text" class="form-control" name="dieselcost" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Biomass_50mc cost:</label>
                <input type="text" class="form-control" name="biomass_50mccost" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Biomass_30mc cost:</label>
                <input type="text" class="form-control" name="biomass_30mccost" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Kerosine cost:</label>
                <input type="text" class="form-control" name="kerosinecost" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Demand cost:</label>
                <input type="text" class="form-control" name="demandcost" id="contact"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="End_date">Department:</label>
                <select  class="form-control" name="Department">
                    <option value="Brewering" selected>Brewering</option>
                    <option value="Utility and Maintenance">Utility and Maintenance</option>
                    <option value="Chiller">Chiller</option>
                    <option value="Administration">Administration</option>
                    <option value="Store">Store</option>
                </select>
            </div>
            <input type="submit" class="button button-green  pull-right" name="create_cost" value="Submit"/>
        </form> 
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
