<?php
include 'header.php';
$student_list = $student_obj->machine_list();
?>
<div class="container " > 
    <div class="row content">
        <a  href="create-machine.php"  class="button button-purple mt-12 pull-right">Add machine</a> 
        <h3>Machine</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <table class="table" style="border: 1px solid black;">
            <thead style="border: 1px solid black;">
                <tr style="border: 1px solid black;">
                    <th style="border: 1px solid black;">Machine name</th>
                    <th style="border: 1px solid black;">Machine details</th>
                    <th style="border: 1px solid black;">Machine function</th>
                    <th style="border: 1px solid black;">Machine capacity</th>
                    <th style="border: 1px solid black;">Machine status</th>
                    <th class="text-right" style="border: 1px solid black;">Action</th>
                </tr>
            </thead>
            <tbody style="border: 1px solid black;">
<?php
if ($student_list->num_rows > 0) {
  while ($row = $student_list->fetch_assoc()) {
     ?>
             <tr style="border: 1px solid black;">
                <td style="border: 1px solid black;"><?php echo $row["machine_name"] ?></td>
                <td style="border: 1px solid black;"><?php echo $row["machine_details"] ?></td>
                <td style="border: 1px solid black;"><?php echo $row["machine_function"] ?></td>
                <td style="border: 1px solid black;"><?php echo $row["machine_capacity"] ?></td>
                <td style="border: 1px solid black;"><?php echo $row["machine_status"] ?></td>
                <td class="text-right" style="border: 1px solid black;">
                    <a  href="<?php echo 'machine.php?id=' . $row["machine_id"] ?>" class="button button-red">Delete</a>  
                    <!--a  href="<?php echo 'update-student-info.php?id=' . $row["machine_id"] ?>" class="button button-blue">Edit</a>  
                    <a href="<?php echo 'read-student-info.php?id=' . $row["machine_id"] ?>" class="button button-green">View</a-->
                </td>
            </tr>
    <?php
    }
}
?>
<?php
  if(isset($_GET['id'])){
  $machine_info=$student_obj->delete_machine_info_by_id($_GET['id']);
 
     
 }
?>
           </tbody>
        </table>

    </div>
</div>
<?php
include 'footer.php';
?>  

