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
 * Adds user citation settings in navigation block.
 *
 * @package    local_eexcess
 * @copyright  bit media e-solutions GmbH <gerhard.doppler@bitmedia.cc>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('user_setting_citation_form.php');
require_once('locallib.php');
require_login();
$title = get_string('citation', 'local_eexcess');
$tablename = "local_eexcess_citation";
$userid = $USER->id;

if (optional_param('submitbutton', false, PARAM_ACTION)) {
    $systemcontext = context_system::instance();
    if (isloggedin() && has_capability('local/eexcess:managedata', $systemcontext)) {
        $usersetting = $DB->get_record($tablename, array("userid" => $userid), $fields = '*', $strictness = IGNORE_MISSING);

        if ($usersetting == false) {
            /* Insert*/
            $s = new stdClass();
            $s->id = null;
            $s->userid = $userid;
            $s->citation = optional_param("changecit", false, PARAM_TEXT);
            $DB->insert_record($tablename, $s);
        } else {
            /* Update*/
            $usersetting->citation = optional_param("changecit", false, PARAM_TEXT);
            $DB->update_record($tablename, $usersetting);
        }
    }
}
$url = '/local/eexcess/eexcess_citation.php';
local_eexcess_setup_page($url);
$form = new local_eexcess_citation_form();

echo $OUTPUT->header();
echo $OUTPUT->heading($title);
$form->display();
echo $OUTPUT->footer();