<?php
class Student
{
    private $conn;
    function __construct() {
    session_start();
    $servername = "bbj31ma8tye2kagi.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbname = "xdvjkpkp986nwt21";
    $username = "zx0hce4ovc2os4cs";
    $password = "x2den1myinx55q73";
  

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
       }else{
        $this->conn=$conn;  
       }

    } 

//kwajili ya page ya forecasting


  public function forecast_info($post_data=array()){

  if(isset($post_data['forecast'])){

      $Start_Date= mysqli_real_escape_string($this->conn,trim($post_data['Start_Date']));
      $End_date= mysqli_real_escape_string($this->conn,trim($post_data['End_date']));

       $sql = "SELECT AVG(energy) AS average_energy FROM daily_consumption where datetim between '$Start_Date' and '$End_date'";
       $result=  $this->conn->query($sql) ;        
       $row = $result->fetch_assoc();
 
  ?> <h3><?php echo "Forecasting: ".$row['average_energy'];?></h3><?php

       }
       }


//kwajili ya page ya consumption planning
  //kwajili ya page ya consumption planning
  public function forecast_dep($post_data=array()){

  if(isset($post_data['forecast1'])){

      $plan= mysqli_real_escape_string($this->conn,trim($post_data['plan']));
      $Department= mysqli_real_escape_string($this->conn,trim($post_data['Department']));

       $sum=$plan*$Department; 
  ?> <h3><?php echo "Consumption plan for ".$Department "is : ".$sum;?></h3><?php
       }
       }


//kwajili ya enegy intensity analysis
  public function forecast_en($post_data=array()){

  if(isset($post_data['forecast2'])){

      $Start_Date= mysqli_real_escape_string($this->conn,trim($post_data['Start_Date']));
      $End_date= mysqli_real_escape_string($this->conn,trim($post_data['End_date']));      

       $sql = "SELECT SUM(energy) AS sum_energy FROM daily_consumption where datetim between '$Start_Date' and '$End_date'";
       $result=  $this->conn->query($sql);        
       $row = $result->fetch_assoc();
       $a=$row['sum_energy'];
       $en=$a/2;

 
  ?> <h3><?php echo "Consumption plan: ".$en;?></h3><?php
       }
       }

//kwajil ya cost intensity analysis
  public function forecast_cos($post_data=array()){

  if(isset($post_data['forecast3'])){

      $Start_Date= mysqli_real_escape_string($this->conn,trim($post_data['Start_Date']));
      $End_date= mysqli_real_escape_string($this->conn,trim($post_data['End_date']));      

       $sql = "SELECT SUM(energy) AS sum_energy FROM daily_consumption where datetim between '$Start_Date' and '$End_date'";
       $result=  $this->conn->query($sql);        
       $row = $result->fetch_assoc();
       $a=$row['sum_energy'];
       $cos=$a*2;

 
  ?> <h3><?php echo "Consumption plan: ".$cos;?></h3><?php
       }
       }


    public function consu_list(){
        
       $sql = "SELECT * FROM daily_consumption ORDER BY id asc limit 20";
       $result=  $this->conn->query($sql);
       return $result;  
    }        
    
    
    public function cost_list(){
        
       $sql = "SELECT * FROM cost ORDER BY cost_Id asc ";
       $result=  $this->conn->query($sql);
       return $result;  
    }

    public function dep_list(){
        
       $sql = "SELECT * FROM department ORDER BY dep_id asc ";
       $result=  $this->conn->query($sql);
       return $result;  
    }

    public function machine_list(){
        
       $sql = "SELECT * FROM machinary ORDER BY machine_id asc ";
       $result=  $this->conn->query($sql);
       return $result;  
    }

    public function staff_list(){
        
       $sql = "SELECT * FROM staff ORDER BY staff_id asc ";
       $result=  $this->conn->query($sql);
       return $result;  
    }




  public function create_consu_info($post_data=array()){
         
       if(isset($post_data['create_consu'])){
       $electricity= mysqli_real_escape_string($this->conn,trim($post_data['electricity(KWh)']));
       $petrol= mysqli_real_escape_string($this->conn,trim($post_data[' electricity(GJ)']));
       $lpg= mysqli_real_escape_string($this->conn,trim($post_data['lpg']));
       $diesel= mysqli_real_escape_string($this->conn,trim($post_data['diesel']));
       $biomass_50mc= mysqli_real_escape_string($this->conn,trim($post_data['total_energy(GJ)']));
       $biomass_30mc= mysqli_real_escape_string($this->conn,trim($post_data['production_units(HL)']));
       $kerosine= mysqli_real_escape_string($this->conn,trim($post_data['Pressure']));
       $temperature= mysqli_real_escape_string($this->conn,trim($post_data['temperature']));
       $demand= mysqli_real_escape_string($this->conn,trim($post_data['demand']));
       $dep_name= mysqli_real_escape_string($this->conn,trim($post_data['dep_name']));

       $sql="INSERT INTO daily_consumption (electricity(KWh), electricity(GJ), lpg, diesel, total_energy(GJ), production_units(HL), Pressure, temperature, demand, dep_name) VALUES ('$electricity', '$petrol', '$lpg', '$diesel', '$biomass_50mc', '$biomass_30mc', '$kerosine', '$temperature', '$demand', '$dep_name')";
        
        $result=  $this->conn->query($sql);
        
           if($result){
           
               $_SESSION['message']="Successfully";
               
            
           }
          
       unset($post_data['create_consu']);
       }
       
        
    }


    

    public function create_cost_info($post_data=array()){
         
       if(isset($post_data['create_cost'])){
       $electricitycost= mysqli_real_escape_string($this->conn,trim($post_data['electricitycost']));
       $petrolcost= mysqli_real_escape_string($this->conn,trim($post_data['petrolcost']));
       $lpgcost= mysqli_real_escape_string($this->conn,trim($post_data['lpgcost']));
       $dieselcost= mysqli_real_escape_string($this->conn,trim($post_data['dieselcost']));
       $biomass_50mccost= mysqli_real_escape_string($this->conn,trim($post_data['biomass_50mccost']));
       $biomass_30mccost= mysqli_real_escape_string($this->conn,trim($post_data['biomass_30mccost']));
       $kerosinecost= mysqli_real_escape_string($this->conn,trim($post_data['kerosinecost']));
       $demandcost= mysqli_real_escape_string($this->conn,trim($post_data['demandcost']));
       $dep_name= mysqli_real_escape_string($this->conn,trim($post_data['dep_name']));

       $sql="INSERT INTO cost (electricitycost, petrolcost, lpgcost, dieselcost, biomass_50mccost, biomass_30mccost, kerosinecost, demandcost, dep_name) VALUES ('$electricitycost', '$petrolcost', '$lpgcost', '$dieselcost', '$biomass_50mccost', '$biomass_30mccost', '$kerosinecost', '$demandcost', '$dep_name')";
        
        $result=  $this->conn->query($sql);
        
           if($result){
           
               $_SESSION['message']="Successfully";
               
              
           }
          
       unset($post_data['create_cost']);
       }
       
        
    }


    public function create_dep_info($post_data=array()){
         
       if(isset($post_data['create_dep'])){
       $dep_name= mysqli_real_escape_string($this->conn,trim($post_data['dep_name']));
       $dep_function= mysqli_real_escape_string($this->conn,trim($post_data['dep_function']));
       $dep_phone= mysqli_real_escape_string($this->conn,trim($post_data['dep_phone']));       
       $machine_name= mysqli_real_escape_string($this->conn,trim($post_data['machine_name']));

       $sql="INSERT INTO department (dep_name, dep_function, dep_phone, machine_name) VALUES ('$dep_name', '$dep_function', '$dep_phone', '$machine_name')";
        
        $result=  $this->conn->query($sql);
        
           if($result){
           
               $_SESSION['message']="Successfully";
               
            
           }
          
       unset($post_data['create_dep']);
       }
       
        
    }



  public function create_machine_info($post_data=array()){
         
       if(isset($post_data['create_machine'])){
       $machine_name= mysqli_real_escape_string($this->conn,trim($post_data['machine_name']));
       $machine_details= mysqli_real_escape_string($this->conn,trim($post_data['machine_details']));
       $machine_function= mysqli_real_escape_string($this->conn,trim($post_data['machine_function']));
       $machine_capacity= mysqli_real_escape_string($this->conn,trim($post_data['machine_capacity']));
       $machine_status= mysqli_real_escape_string($this->conn,trim($post_data['machine_status']));

       $sql="INSERT INTO machinary (machine_name, machine_details, machine_function, machine_capacity, machine_status) VALUES ('$machine_name', '$machine_details', '$machine_function', '$machine_capacity', '$machine_status')";
        
        $result=  $this->conn->query($sql);
        
           if($result){
           
               $_SESSION['message']="Successfully";
               
              
           }
          
       unset($post_data['create_machine']);
       }
       
        
    }


    public function create_staff_info($post_data=array()){
         
       if(isset($post_data['create_staff'])){
       $staff_name= mysqli_real_escape_string($this->conn,trim($post_data['staff_name']));
       $position= mysqli_real_escape_string($this->conn,trim($post_data['position']));
       $dep_name= mysqli_real_escape_string($this->conn,trim($post_data['dep_name']));

       $sql="INSERT INTO staff (staff_name, position, dep_name) VALUES ('$staff_name', '$position', '$dep_name')";
        
        $result=  $this->conn->query($sql);
        
           if($result){
           
               $_SESSION['message']="Successfully";
               
              
           }
          
       unset($post_data['create_staff']);
       }
       
        
    }
    
    
    

    
    public function update_consu_info($post_data=array()){
       if(isset($post_data['update_consu'])&& isset($post_data['id'])){
           
       $electricity= mysqli_real_escape_string($this->conn,trim($post_data['electricity']));
       $petrol= mysqli_real_escape_string($this->conn,trim($post_data['petrol']));
       $lpg= mysqli_real_escape_string($this->conn,trim($post_data['lpg']));
       $diesel= mysqli_real_escape_string($this->conn,trim($post_data['diesel']));
       $biomass_50mc= mysqli_real_escape_string($this->conn,trim($post_data['biomass_50mc']));
       $biomass_30mc= mysqli_real_escape_string($this->conn,trim($post_data['biomass_30mc']));
       $kerosine= mysqli_real_escape_string($this->conn,trim($post_data['kerosine']));
       $demand= mysqli_real_escape_string($this->conn,trim($post_data['demand']));
       $dep_name= mysqli_real_escape_string($this->conn,trim($post_data['dep_name']));
       $id= mysqli_real_escape_string($this->conn,trim($post_data['id']));

       $sql="UPDATE daily_consumption SET electricity(KWh)='$electricity', electricity(GJ)='$petrol', lpg='$lpg', diesel='$diesel', total energy(GJ)='$biomass_50mc', production units(HL)='$biomass_30mc', Pressure='$kerosine', demand='$demand', dep_name='$dep_name' WHERE id =$id";
     
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully";
           }
       unset($post_data['update_consu']);
       }   
    }

    public function update_cost_info($post_data=array()){
       if(isset($post_data['update_cost'])&& isset($post_data['id'])){
           
       $electricitycost= mysqli_real_escape_string($this->conn,trim($post_data['electricitycost']));
       $petrolcost= mysqli_real_escape_string($this->conn,trim($post_data['petrolcost']));
       $lpgcost= mysqli_real_escape_string($this->conn,trim($post_data['lpgcost']));
       $dieselcost= mysqli_real_escape_string($this->conn,trim($post_data['dieselcost']));
       $biomass_50mccost= mysqli_real_escape_string($this->conn,trim($post_data['biomass_50mccost']));
       $biomass_30mccost= mysqli_real_escape_string($this->conn,trim($post_data['biomass_30mccost']));
       $kerosinecost= mysqli_real_escape_string($this->conn,trim($post_data['kerosinecost']));
       $demandcost= mysqli_real_escape_string($this->conn,trim($post_data['demandcost']));
       $dep_name= mysqli_real_escape_string($this->conn,trim($post_data['dep_name']));
       $cost_Id= mysqli_real_escape_string($this->conn,trim($post_data['cost_Id']));

       $sql="UPDATE cost SET electricitycost='$electricitycost', petrolcost='$petrolcost', lpgcost='$lpgcost', dieselcost='$dieselcost', biomass_50mccost='$biomass_50mccost', biomass_30mccost='$biomass_30mccost', kerosinecost='$kerosinecost', demandcost='$demandcost', dep_namecost='$dep_namecost' WHERE cost_Id =$cost_Id";
     
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully";
           }
       unset($post_data['update_cost']);
       }   
    }
    
    public function update_dep_info($post_data=array()){
       if(isset($post_data['update_dep'])&& isset($post_data['id'])){
           
       $dep_name= mysqli_real_escape_string($this->conn,trim($post_data['dep_name']));
       $dep_function= mysqli_real_escape_string($this->conn,trim($post_data['dep_function']));
       $dep_phone= mysqli_real_escape_string($this->conn,trim($post_data['dep_phone']));       
       $machine_name= mysqli_real_escape_string($this->conn,trim($post_data['machine_name']));
       $dep_id= mysqli_real_escape_string($this->conn,trim($post_data['dep_id']));

       $sql="UPDATE department SET dep_name='$dep_name',dep_function='$dep_function',dep_phone='$dep_phone',machine_name='$machine_name', WHERE dep_id =$dep_id";
     
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully";
           }
       unset($post_data['update_dep']);
       }   
    }
    
    public function update_machine_info($post_data=array()){
       if(isset($post_data['update_machine'])&& isset($post_data['id'])){
           
       $machine_name= mysqli_real_escape_string($this->conn,trim($post_data['machine_name']));
       $machine_details= mysqli_real_escape_string($this->conn,trim($post_data['machine_details']));
       $machine_function= mysqli_real_escape_string($this->conn,trim($post_data['machine_function']));
       $machine_capacity= mysqli_real_escape_string($this->conn,trim($post_data['machine_capacity']));
       $machine_status= mysqli_real_escape_string($this->conn,trim($post_data['machine_status']));
       $machine_id= mysqli_real_escape_string($this->conn,trim($post_data['machine_id']));

       $sql="UPDATE machinary SET machine_name='$machine_name',machine_details='$machine_details',machine_function='$machine_function',machine_capacity='$machine_capacity',machine_status='$machine_status' WHERE machine_id =$machine_id";
     
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully";
           }
       unset($post_data['update_machine']);
       }   
    }
    
    public function update_staff_info($post_data=array()){
       if(isset($post_data['update_staff'])&& isset($post_data['id'])){
           
       $staff_name= mysqli_real_escape_string($this->conn,trim($post_data['staff_name']));
       $position= mysqli_real_escape_string($this->conn,trim($post_data['position']));
       $dep_name= mysqli_real_escape_string($this->conn,trim($post_data['dep_name']));
       $staff_id= mysqli_real_escape_string($this->conn,trim($post_data['staff_id']));

       $sql="UPDATE staff SET staff_name='$staff_name',position='$position',dep_name='$dep_name' WHERE staff_id =$staff_id";
     
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully";
           }
       unset($post_data['update_staff']);
       }   
    }
    
    
    


    public function delete_machine_info_by_id($id){
        
       if(isset($id)){
       $machine_id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  machinary  WHERE machine_id =$machine_id";
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Deleted";
            
           }
       }
         
    }
    


    public function delete_dep_info_by_id($id){
        
       if(isset($id)){
       $dep_id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  department  WHERE dep_id =$dep_id";
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Deleted";
            
           }
       }
        
    }
    


    public function delete_consu_info_by_id($id){
        
       if(isset($id)){
       $id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  daily_consumption  WHERE id =$id";
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Deleted";
            
           }
       }
      

    }


    public function delete_cost_info_by_id($id){
        
       if(isset($id)){
       $cost_Id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  cost  WHERE cost_Id =$cost_Id";
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Deleted";
            
           }
       }
        
    }


    public function delete_staff_info_by_id($id){
        
       if(isset($id)){
       $staff_id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  staff  WHERE staff_id =$staff_id";
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Deleted";
            
           }
       }
        
    }






    function __destruct() {
    mysqli_close($this->conn);  
    }
    
}

?> 
