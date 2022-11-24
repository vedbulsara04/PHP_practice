<?php

class Transport
{
	function id($driver_id){
		echo "Driver ID : ".$driver_id;
	}
}

class Road extends Transport
{
	function car($car_no){
		echo "Car No : ".$car_no;
	}
}

class Rail extends Transport
{
	function train($pnr){
		echo "PNR : ".$pnr;
	}
}


$obj_road= new Road();
$obj_road->id(18);
echo "<br>";
$obj_road->car("81");
echo "<br>";
$obj_rail=new Rail();
$obj_rail->id(18);
echo "<br>";
$obj_rail->train("PNR100");

?>