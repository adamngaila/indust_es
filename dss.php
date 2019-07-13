<?php
include 'header1.php';
if (isset($_POST['create_consu'])) {
    $student_obj->create_consu_info($_POST);
}
?>
<hr>
<div class="container "> 
    <div class="row content ">
        <h3>welcome to another part of Expert system, Decision support for energy managers</h3>
        <div> 
        </div>

        <P> With this functionality you can do forecasting of energy consumtion in the futer, plan how you can consumre the forecasted energy to various departments and to generate policy to guide how to achieve that. you can also do analysis of your consumption of energy and get to know how you are performing interms of comsumption, cost and production. Also you can perform energy audit </P>
     
        
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
