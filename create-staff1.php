<?php
include 'header.php';
if (isset($_POST['create_staff'])) {
    $student_obj->create_staff_info($_POST);
}
?>

<div class="container"> 
    <div class="row content">
        <a  href="staff.php"  class="button button-purple mt-12 pull-right">View Staffs</a> 
        <h3>Staffs</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="student_name">Staff name:</label>
                <input type="text" name="staff_name" id="student_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="email_address">Position:</label>
                <input type="text" class="form-control" name="position" id="email_address" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact">Department:</label>
                <input type="text" class="form-control" name="dep_name" id="contact"  maxlength="50">
            </div>                                         
            <input type="submit" class="button button-green  pull-right" name="create_staff" value="Submit"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

 