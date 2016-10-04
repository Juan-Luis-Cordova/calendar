<html>
<head></head>
<body>
<?php
        

$a=phpversion();
        $a;
        
     $name=$_Request['name'];
	 $month=$_Request['month'];
	 $day=$_Request['day'];
	 $module=$_Request['module'];

     $a= new calendar;

    $a->eventname=$name;
	$a->eventmonth=$month;
	$a->eventday =$day;
	$a->eventmodule =$module;

     $a->calendar_createevent();
      
echo 'Creado Exitosamente'

        ?>

</html>





</body>
</html>