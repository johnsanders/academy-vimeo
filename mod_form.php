<?php

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/course/moodleform_mod.php');

class mod_vimeo_mod_form extends moodleform_mod
{
	public function definition()
	{
		global $CFG;

		$mform = $this->_form;

		$mform->addElement('header', 'general', get_string('general', 'form'));
		$mform->addElement('text', 'name', get_string('vimeoname', 'vimeo'), array('size' => '64'));
		$mform->addElement('text', 'vimeourl', get_string('vimeourl', 'vimeo'), array('size' => '256'));

		if (!empty($CFG->formatstringstriptags)) {
			$mform->setType('name', PARAM_TEXT);
		} else {
			$mform->setType('name', PARAM_CLEANHTML);
		}

		$mform->addRule('name', null, 'required', null, 'client');
		$mform->addRule('name', get_string('maximumchars', '', 255), 'maxlength', 255, 'client');
		$mform->addRule('vimeourl', null, 'required', null, 'client');
		$mform->addRule('vimeourl', get_string('maximumchars', '', 255), 'maxlength', 255, 'client');
		$mform->addRule('vimeourl', 'Not a valid Vimeo url', 'regex', '/vimeo.com\/([0-9]+).+/i');
		$mform->addHelpButton('vimeourl', 'vimeourl', 'vimeo');

		$this->standard_intro_elements();

		// Add standard elements.
		$this->standard_coursemodule_elements();

		// Add standard buttons.
		$this->add_action_buttons();
	}
}
