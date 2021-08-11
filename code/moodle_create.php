<?php
function create_action()
{
    // ...
    $data = ['courses' => [
        [
            'fullname'  => studip_utf8encode(
                $this->course->getFullname('number-name-semester')),
            'shortname' => md5(uniqid())
            // ...
        ]
    ]];

    $response      = Moodle\REST::post('core_course_create_courses', $data);
    $moodle_course = array_pop($response);

    // ...
}
