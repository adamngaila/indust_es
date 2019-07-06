<?php
include 'header.php';
if (isset($_POST['create_dep'])) {
    $student_obj->create_dep_info($_POST);
}
?>
 

<div class="container"> 
    <div class="row content">
        
        <h3>Department</h3>
        <hr/>
        <form method="post" action="" style="width: 600px;">
            <div class="form-group">
                <label for="student_name">Department name:</label>
                <input type="text" name="dep_name" id="student_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="email_address">Department function:</label>
                <input type="text" class="form-control" name="dep_function" id="email_address" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact">Department phone:</label>
                <input type="text" class="form-control" name="dep_phone" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Department machine:</label>
                <input type="text" class="form-control" name="machine_name" id="contact"  maxlength="50">
            </div>                       
            <input type="submit" class="button button-green  pull-right" name="create_dep" value="Submit"/>
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
