<?php
include 'header.php';
$student_list = $student_obj->staff_list();
?>
<div class="container " > 
    <div class="row content">
        <a  href="create-staff.php"  class="button button-purple mt-12 pull-right">Add staff</a> 
        <h3>Staff List</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>


        <table class="table">
            <thead>
                <tr>
                    <th>Staff name</th>                    
                    <th>Position</th>  
                    <th>Department</th>
                    <th class="text-right">Action</th>
                </tr> 
            </thead>
            <tbody>
<?php
if ($student_list->num_rows > 0) {
  while ($row = $student_list->fetch_assoc()) {
     ?>

             <tr>
                <td><?php echo $row["staff_name"] ?></td>
                <td><?php echo $row["position"] ?></td>
                <td><?php echo $row["dep_name"] ?></td>               
                <td class="text-right">
                    <a  href="<?php echo 'staff.php?id=' . $row["staff_id"] ?>" class="button button-red">Delete</a>  
                    <!--a  href="<?php echo 'update-student-info.php?id=' . $row["staff_id"] ?>" class="button button-blue">Edit</a>  
                    <a href="<?php echo 'read-student-info.php?id=' . $row["staff_id"] ?>" class="button button-green">View</a-->
                </td>
            </tr>
    <?php
    }
}
?>
<?php
  if(isset($_GET['id'])){
  $staff_info=$student_obj->delete_staff_info_by_id($_GET['id']); 
     
 }
?>

           </tbody>
        </table>

    </div>
</div>
<?php
include 'footer.php';
?>  

