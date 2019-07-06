<?php
include 'header.php';
if (isset($_POST['create_staff'])) {
    $student_obj->create_staff_info($_POST);
}
?>

<div class="container"> 
    <div class="row content">
        
        <h3>Staffs</h3>
        <hr/>
        <form method="post" action="" style="width: 600px;">
            <div class="form-group">
                <label for="student_name">Staff name:</label>
                <input type="text" name="staff_name" id="student_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="email_address">Position:</label>
                <input type="text" class="form-control" name="position" id="email_address" required maxlength="50">
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
            <input type="submit" class="button button-green  pull-right" name="create_staff" value="Submit"/>
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
