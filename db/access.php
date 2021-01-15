<?php

defined('MOODLE_INTERNAL') || die();

$capabilities = [
	'mod/vimeo:view' => [
		'captype' => 'view',
		'contextlevel' => CONTEXT_MODULE,
		'archetypes' => [
			'editingteacher' => CAP_ALLOW,
		],
		'clonepermissionsfrom' => 'moodle/course:view',
	],
	'mod/vimeo:edit' => [
		'captype' => 'write',
		'contextlevel' => CONTEXT_MODULE,
		'archetypes' => [],
	],
];
