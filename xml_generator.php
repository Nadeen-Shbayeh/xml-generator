<?php

$students = [
    [
        'student_id' => 1,
        'name' => 'أحمد محمد',
        'major' => 'هندسة كمبيوتر',
        'phone' => '0791234567'
    ],
    [
        'student_id' => 2,
        'name' => 'فاطمة علي',
        'major' => 'إدارة أعمال',
        'phone' => '0797654321'
    ],
    [
        'student_id' => 3,
        'name' => 'محمد سعيد',
        'major' => 'طب',
        'phone' => '0781122334'
    ]
];

$courses = [
    [
        'course_code' => 'CS101',
        'course_name' => 'مقدمة في علوم الكمبيوتر'
    ],
    [
        'course_code' => 'BUS201',
        'course_name' => 'مبادئ إدارة الأعمال'
    ],
    [
        'course_code' => 'MED301',
        'course_name' => 'تشريح الإنسان'
    ]
];

$registrations = [
    [
        'student_id' => 1,
        'course_code' => 'CS101'
    ],
    [
        'student_id' => 2,
        'course_code' => 'BUS201'
    ],
    [
        'student_id' => 3,
        'course_code' => 'MED301'
    ]
];


$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><university/>');


$studentsElement = $xml->addChild('students');
foreach ($students as $student) {
    $studentElement = $studentsElement->addChild('student');
    $studentElement->addChild('student_id', $student['student_id']);
    $studentElement->addChild('name', $student['name']);
    $studentElement->addChild('major', $student['major']);
    $studentElement->addChild('phone', $student['phone']);
}


$coursesElement = $xml->addChild('courses');
foreach ($courses as $course) {
    $courseElement = $coursesElement->addChild('course');
    $courseElement->addChild('course_code', $course['course_code']);
    $courseElement->addChild('course_name', $course['course_name']);
}


$registrationsElement = $xml->addChild('registrations');
foreach ($registrations as $registration) {
    $registrationElement = $registrationsElement->addChild('registration');
    $registrationElement->addChild('student_id', $registration['student_id']);
    $registrationElement->addChild('course_code', $registration['course_code']);
}


$xml->asXML('university_data.xml');

echo "تم إنشاء الملف XML بنجاح!";
?>
