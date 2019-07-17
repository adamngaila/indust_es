<?php
include 'header1.php';
if (isset($_POST['create_consu'])) {
    $student_obj->create_consu_info($_POST);
}
?>

<div class="container "> 
    <div class="row content ">
        <h3>header</h3>
        <hr/>
        <form method="post" action="" style="width: 600px;" >
            <div class="form-group">
                <label for="student_name">Has the energy policy been established and implemented by top management?:</label>
                <input type="text" name="electricity" id="student_name" class="form-control" >
            </div>
            <div class="form-group">
                <label for="email_address">Have the necessary resources been provided for the establishment and maintenance of the EnMS?:  </label>
                <input type="text" class="form-control" name="petrol" id="email_address" >
            </div>
            <div class="form-group">
                <label for="contact">Has the importance of the EnMS for the company been made sufficiently clear to employees?:</label>
                <input type="text" class="form-control" name="lpg" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Have criteria and methods for ensuring the effective operation and monitoring of the EnMS been determined?:</label>
                <input type="text" class="form-control" name="diesel" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Has the company conducted and documented an energy planning process?:</label>
                <input type="text" class="form-control" name="biomass_50mc" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Has the company identified and implemented all applicable legal and other requirements?:</label>
                <input type="text" class="form-control" name="biomass_30mc" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Have possibilities for improving energy performance been identified?:</label>
                <input type="text" class="form-control" name="kerosine" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Have strategic and operational objectives been established for fixed time-frames based on preliminary work?:</label>
                <input type="text" class="form-control" name="temperature" id="contact"  maxlength="50">
            </div>
                  <div class="form-group">
                <label for="contact">Are the objectives and action plans documented and regularly updated?:</label>
                <input type="text" class="form-control" name="demand" id="contact"  maxlength="50">
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
