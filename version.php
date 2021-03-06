<?php
/**
 * Slim Topics Information
 *
 * A topic based format that is identical to the standard topics format except the 'Topic Outline' header and
 * 'section number' have been removed.  Full installation instructions, code adaptions and credits are included
 * in the 'Readme.txt' file.
 *
 * @package    course/format
 * @subpackage slimtopics
 * @version    See the value of '$plugin->version' in version.php.
 * @copyright  &copy; 2012-onwards G J Barnard in respect to modifications of standard topics format.
 * @author     G J Barnard - gjbarnard at gmail dot com and {@link http://moodle.org/user/profile.php?id=442195}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2012032700;        // The current plugin version (Date: YYYYMMDDXX)
$plugin->maturity = MATURITY_RC;
$plugin->requires  = 2011120500.00; // 2.2
$plugin->component = 'format_slimtopics';    // Full name of the plugin (used for diagnostics)
$plugin->release = '2.2.1';
