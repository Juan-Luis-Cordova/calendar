<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


class calendar {

	public $id; // el id del evento
	public $name; // este y los siguientes 3 sirven como variables de edicion y adicion a la db
	public $month;
	public $day;
	public $module;
	public $currentday; //para conseguirnos el numero del dia actual
	
	

//MOSTRAR todos los eventos con la opcion de eliminarlos
//
public function calendar_showevents() {
	global  $CG, $DB;
	
		$this->connect();
		$result = $DB->get_records_sql('SELECT * FROM {calendar}');

		echo "";
		echo "<table >";
		echo "<tr>";
		echo "<th>Event</th>
			  <th>Module</th>
			  <th>Day</th>
			  <th>Month</th>
			  <th>Delete</th>";
		echo "</tr>";
		
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<td> ".$row['name']."</td>
				  <td> ".$row['module']."</td>
				  <td> ".$row['day']."</td>
				  <td> ".$row['month']."</td>
				  <td><a href='event_delete.php?id=".$row['id']."'> Eliminar </a>   </td>";
		}
		echo "</table >";
		
}

//
//SOLO MOSTRAR los eventos del dia actual
//
public function calendar_showcurrentdayevents() {
	
	global  $CG, $DB;
	$currentday=date("d");
	$result = $DB->get_records($table,array('date'=>'$currentday'));

	echo "<table >";
	echo "<tr>";
	echo "<th>Event</th><th>Module</th>";
	echo "</tr>";

	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		"<td>".$row['name']."</td>
		 <td>".$row['module']."</td>
		 </tr>";
	}
	echo "</table>";

}


//CREAR eventos, para ello metemos los datos creados de event_create y asignados en event_createResult

public function calendar_createevent() {
	global  $CG, $DB;
	
//variables traidas de la pagina en la que se crea el evento (de event_create y event_createResult	
		$record->name         = '$name';
		$record->month        = '$month';
		$record->day          = '$day';
		$record->module       = '$module';
			$DB->insert_record('events', $record, false);

}

		
//ELIMINAR evento		
		
		public function calendar_deleteevent() {
			global  $CG, $DB;
			$deleteRecords-> id = '$id';
			$DB->delete_records('events', array ($delRecords) , false);
		}
	

			
		
		
		
}

?>
