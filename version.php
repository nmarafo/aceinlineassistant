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
 * Atto text editor aceinlineassistant plugin version file.
 *
 * @package    atto_aceinlineassistant
 * @copyright  2024 Norberto Martín Afonso
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2024092901;        // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires  = 2022111800;        // Requires this Moodle version.
$plugin->dependencies = array(
    'filter_ace_inline' => 2024092700, 
    'qtype_coderunner' => 2024090500    
);
$plugin->release = 'v1.0.3'; 
$plugin->component = 'atto_aceinlineassistant';  // Full name of the plugin (used for diagnostics).
