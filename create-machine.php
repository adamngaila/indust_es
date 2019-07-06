<?php
include 'header.php';
if (isset($_POST['create_machine'])) {
    $student_obj->create_machine_info($_POST);
}
?>

<div class="container"> 
    <div class="row content">
        
        <h3>Machines</h3>
        <hr/>
        <form method="post" action="" style="width: 600px;">
            <div class="form-group">
                <label for="student_name">Machine name:</label>
                <input type="text" name="machine_name" id="student_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="email_address">Machine details:</label>
                <input type="text" class="form-control" name="machine_details" id="email_address" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact">Machine function:</label>
                <input type="text" class="form-control" name="machine_function" id="contact"  maxlength="50">
            </div>
                        <div class="form-group">
                <label for="contact">Machine capacity:</label>
                <input type="text" class="form-control" name="machine_capacity" id="contact"  maxlength="50">
            </div>  
                        <div class="form-group">
                <label for="contact">Machine status:</label>
                <input type="text" class="form-control" name="machine_status" id="contact"  maxlength="50">
            </div>                       
            <input type="submit" class="button button-green  pull-right" name="create_machine" value="Submit"/>
        </form> 
    </div>
</div>
<hr/>




                
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
