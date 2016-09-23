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

function xmldb_local_calendar_upgrade($oldversion) {
	global $CFG, $DB;
	
if ($oldversion < 2016092201) {

	// Define table events to be created.
	$table = new xmldb_table('events');

	// Adding fields to table events.
	$table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
	$table->add_field('name', XMLDB_TYPE_TEXT, null, null, null, null, null);
	$table->add_field('date', XMLDB_TYPE_TEXT, null, null, null, null, null);
	$table->add_field('module', XMLDB_TYPE_TEXT, null, null, null, null, null);

	// Adding keys to table events.
	$table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

	// Conditionally launch create table for events.
	if (!$dbman->table_exists($table)) {
		$dbman->create_table($table);
	}

	// Calendar savepoint reached.
	upgrade_plugin_savepoint(true, 2016092201, 'local', 'calendar');
}


?>