<?php
namespace local_ai_course_creator\form;
defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/formslib.php');

class upload_form extends \moodleform {
    public function definition() {
        $mform = $this->_form;

        $mform->addElement('header', 'general',
            get_string('pluginname', 'local_ai_course_creator'));

        $mform->addElement('filepicker', 'coursefile',
            get_string('uploadfile', 'local_ai_course_creator'), null,
            ['maxbytes' => 20971520, 'accepted_types' => ['.pdf', '.pptx', '.docx']]
        );
        $mform->addRule('coursefile', null, 'required');

        $mform->addElement('select', 'difficulty',
            get_string('difficulty', 'local_ai_course_creator'), [
                'easy'   => get_string('easy',   'local_ai_course_creator'),
                'medium' => get_string('medium', 'local_ai_course_creator'),
                'hard'   => get_string('hard',   'local_ai_course_creator'),
            ]
        );
        $mform->setDefault('difficulty', 'medium');

        $mform->addElement('text', 'duration',
            get_string('duration', 'local_ai_course_creator'));
        $mform->setType('duration', PARAM_INT);
        $mform->setDefault('duration', 4);

        $this->add_action_buttons(false,
            get_string('generatecourse', 'local_ai_course_creator'));
    }
}
