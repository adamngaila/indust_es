
<?php
include 'header1.php';
if (isset($_POST['forecast3'])) {
    $student_obj->forecast_cos($_POST);
}
?>
<div class="container"> 
    <div class="row content">
        
        
        <hr/>
        <form method="post" action="" style="width: 250px;">
            <div class="form-group">
                <label for="Start_Date">Start Date:</label>
                <input type="Date" name="Start_Date" id="Start_Date" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="End_date">End date:</label>
                <input type="Date" class="form-control" name="End_date" id="End_date" required maxlength="50">
            </div>
                                      
            <input type="submit" class="button button-green  pull-right" name="forecast3" value="Submit"/>
        </form> 
    </div>
</div>





  
<div class="container " > 
    <div class="row content">
    
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
