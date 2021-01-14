<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin capabilities are defined here.
 *
 * @package     vimeo
 * @category    access
 * @copyright   2021 John Sanders <john.sanders@warnermedia.com>, David Mudrák <david@moodle.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = [

	'mod/vimeo:view' => [
		'captype' => 'view',
		'contextlevel' => CONTEXT_MODULE,
		'archetypes' => [
			'student' => CAP_ALLOW,
			'editingteacher' => CAP_ALLOW,
		],
		'clonepermissionsfrom' => 'moodle/course:view',
	],

	'mod/vimeo:edit' => [
		'captype' => 'write',
		'archetypes' => [],
	],
];