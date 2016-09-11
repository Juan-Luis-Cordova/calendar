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

/**
Aqui especifico las capability
Lo que hacen y si es que pueden ejecutarlas
Tipos de user:
			manager, teacher y student
Capability que pueden hacer (en escencia, CRUD): 
			agregar eventos, agregar asignaturas, agregar calendarios
			leer calendario actual, leer historial de calendarios, leer asignaturas, leer eventos
			editar eventos, editar asignaturas, editar preferencias de calendario
			borrar eventos, borrar asignaturas, borrar calendarios
*/
	
defined('MOODLE_INTERNAL') || die();

$capabilities = array(
		
		'local/calendar:createevent' => array(
				'captype' => 'write',
				'contextlevel' => xxx,
				'archetypes' => array(
						'student' => CAP_ALLOW,
						'manager' => CAP_ALLOW,
						'teacher' => CAP_ALLOW
									 ))
		,
		
		'local/calendar:createcourse' => array(
				'captype' => 'write',
				'contextlevel' => xxx,
				'archetypes' => array(
						'student' => CAP_ALLOW,
						'manager' => CAP_ALLOW,
						'teacher' => CAP_ALLOW
				))
		
		,
		
		'local/calendar:createcalendar' => array(
				'captype' => 'write',
				'contextlevel' => xxx,
				'archetypes' => array(
						'student' => CAP_ALLOW,
						'manager' => CAP_ALLOW,
						'teacher' => CAP_ALLOW
				))
		,
		
		'local/calendar:readcalendar' => array(
				'captype' => 'read',
				'contextlevel' => xxx,
				'archetypes' => array(
						'student' => CAP_ALLOW,
						'manager' => CAP_ALLOW,
						'teacher' => CAP_ALLOW
				))
		,
		
		'local/calendar:readcalendarhistory' => array(
				'captype' => 'read',
				'contextlevel' => xxx,
				'archetypes' => array(
						'student' => CAP_ALLOW,
						'manager' => CAP_ALLOW
				))
		,
		
		'local/calendar:readcourse' => array(
				'captype' => 'read',
				'contextlevel' => xxx,
				'archetypes' => array(
						'student' => CAP_ALLOW,
						'manager' => CAP_ALLOW,
						'teacher' => CAP_ALLOW
				))
		
		,
		
		'local/calendar:readevent' => array(
				'captype' => 'read',
				'contextlevel' => xxx,
				'archetypes' => array(
						'student' => CAP_ALLOW,
						'manager' => CAP_ALLOW,
						'teacher' => CAP_ALLOW
				))
		
		,
		
		'local/calendar:editevent' => array(
				'captype' => 'edit',
				'contextlevel' => xxx,
				'archetypes' => array(
						'student' => CAP_ALLOW,
						'manager' => CAP_ALLOW,
						'teacher' => CAP_ALLOW
				))
		
		,
		
		'local/calendar:editecourse' => array(
				'captype' => 'edit',
				'contextlevel' => xxx,
				'archetypes' => array(
						'student' => CAP_ALLOW,
						'manager' => CAP_ALLOW,
						'teacher' => CAP_ALLOW
				))
		
		,
		
		'local/calendar:editecalendarpreference' => array(
				'captype' => 'edit',
				'contextlevel' => xxx,
				'archetypes' => array(
						'student' => CAP_ALLOW,
						'manager' => CAP_ALLOW,
						'teacher' => CAP_ALLOW
				))
		
		,
		
		'local/calendar:deletecalendar' => array(
				'captype' => 'delete',
				'contextlevel' => xxx,
				'archetypes' => array(
						'student' => CAP_ALLOW,
						'manager' => CAP_ALLOW,
						'teacher' => CAP_ALLOW
				))
		,
		
		'local/calendar:deleteevent' => array(
				'captype' => 'delete',
				'contextlevel' => xxx,
				'archetypes' => array(
						'student' => CAP_ALLOW,
						'manager' => CAP_ALLOW,
						'teacher' => CAP_ALLOW
				))
		
		,
		
		'local/calendar:deletecourse' => array(
				'captype' => 'delete',
				'contextlevel' => xxx,
				'archetypes' => array(
						'student' => CAP_ALLOW,
						'manager' => CAP_ALLOW,
						'teacher' => CAP_ALLOW
				))
		
		
		
		
		
		
					  );
?>
