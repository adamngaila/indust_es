--
  /*datetime datetime NOT NULL DEFAULT CURRENT_TIMESTAMP*/


CREATE TABLE machinary (
  machine_id int(11) NOT NULL AUTO_INCREMENT,
  machine_name varchar(50) NOT NULL,
  machine_details varchar(100) NOT NULL,
  machine_function varchar(100) NOT NULL,
  machine_capacity varchar(45) NOT NULL,
  machine_status varchar(45) NOT NULL,
  PRIMARY KEY (machine_id)
);


CREATE TABLE department (
  dep_id int(10) NOT NULL AUTO_INCREMENT,
  dep_name varchar(45) NOT NULL,
  dep_function varchar(100) NOT NULL,
  dep_phone varchar(20) NOT NULL,
  machine_name varchar(50) NOT NULL,
  PRIMARY KEY (dep_id)
);


CREATE TABLE daily_consumption (
  id int(11) NOT NULL AUTO_INCREMENT,
  electricity varchar(20) NULL,
  petrol varchar(20) NULL,
  lpg varchar(20) NULL,
  diesel varchar(20) NULL,
  biomass_50mc varchar(20) NULL,
  biomass_30mc varchar(20) NULL,
  kerosine varchar(20) NULL,
  temperature varchar(20) NULL,
  demand varchar(20) NULL,
  datetime datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  dep_name varchar(45) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE cost (
  cost_Id int(11) NOT NULL AUTO_INCREMENT,
  electricitycost varchar(20) NULL,
  petrolcost varchar(20) NULL,
  lpgcost varchar(20) NULL,
  dieselcost varchar(20) NULL,
  biomass_50mccost varchar(20) NULL,
  biomass_30mccost varchar(20) NULL,
  kerosinecost varchar(20) NULL,  
  demandcost varchar(20) NULL,
  datetime datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  dep_name varchar(45) NOT NULL,
  PRIMARY KEY (cost_Id)
);



CREATE TABLE staff (
  staff_id int(11) NOT NULL AUTO_INCREMENT,
  staff_name varchar(50) NOT NULL,
  position varchar(20) NOT NULL,
  dep_name varchar(45) NOT NULL,
  PRIMARY KEY (staff_id)
);
