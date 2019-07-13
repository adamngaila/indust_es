
<?php
include 'header1.php';
if (isset($_POST['forecast1'])) {
    $student_obj->forecast_dep($_POST);
}
?>
<div class="container"> 
    <div class="row content"> 
        
        
        <hr/>
	    <div>
	      <div>
		      <h4>Consumption planning is the functionality that enables you to plan how the ofrecasted energy will be used in the industry</h4>
		    </div>
	    </div>
	        <div></div>
	      <div></div>
        <form method="post" action="" style="width: 250px;">
            <div class="form-group">
                <label for="student_name">input the forecasted energy to plan for consumption in various depertment:</label>
                <input type="text" name="plan" id="student_name" class="form-control" >
            </div>
            <div class="form-group">
                <label for="End_date">Department:</label>
				<select  class="form-control" name="Department">
					<option value="0.62" selected>Brewering</option>
					<option value="0.15">Utility and Maintenance</option>
					<option value="0.18">Chiller</option>
					<option value="0.03">Administration</option>
					<option value="0.02">Store</option>
				</select>
            </div>                                       
            <input type="submit" class="button button-green  pull-right" name="forecast1" value="Submit"/>
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
