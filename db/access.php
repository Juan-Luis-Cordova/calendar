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
			student
Capability que pueden hacer (en escencia, CRUD): 
			agregar eventos
			leer eventos del dia, leer todos los eventos
			editar eventos
			borrar eventos
*/
	
defined('MOODLE_INTERNAL') || die();

$capabilities = array(

		'local/calendar:createevent' => array(
				'captype' => 'write',
				'contextlevel' => CONTEXT_COURSE,
				'archetypes' => array(
						'student' => CAP_ALLOW,
				))
		,

		'local/calendar:readcalendar' => array(
				'captype' => 'read',
				'contextlevel' => CONTEXT_COURSE,
				'archetypes' => array(
						'student' => CAP_ALLOW,
				))

		,

		'local/calendar:readevent' => array(
				'captype' => 'read',
				'contextlevel' => CONTEXT_COURSE,
				'archetypes' => array(
						'student' => CAP_ALLOW,
				))

		,

		'local/calendar:editevent' => array(
				'captype' => 'write',
				'contextlevel' => CONTEXT_COURSE,
				'archetypes' => array(
						'student' => CAP_ALLOW,
				))

		,

		'local/calendar:deleteevent' => array(
				'captype' => 'write',
				'contextlevel' => CONTEXT_COURSE,
				'archetypes' => array(
						'student' => CAP_ALLOW,
				))

		




);
?>
