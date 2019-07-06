<?php
 include 'header.php';

  if(isset($_GET['id'])){ 
  $consu_info=$student_obj->delete_consu_info_by_id($_GET['id']);
 
     
 }else{
  header('Location: consu.php');
 }

  if(isset($_GET['id'])){
  $cost_info=$student_obj->delete_cost_info_by_id($_GET['id']);
 
     
 }else{
  header('Location: cost.php');
 }

  if(isset($_GET['id'])){
  $dep_info=$student_obj->delete_dep_info_by_id($_GET['id']);
 
     
 }else{
  header('Location: dep.php');
 }

  if(isset($_GET['id'])){
  $machine_info=$student_obj->delete_machine_info_by_id($_GET['id']);
 
     
 }else{
  header('Location: machine.php');
 }

  if(isset($_GET['id'])){
  $staff_info=$student_obj->delete_staff_info_by_id($_GET['id']);
 
     
 }else{
  header('Location: staff.php');
 }
 
 ?>
 