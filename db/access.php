<?php
$capabilities = [
    'block/my_course_progress:addinstance' => [
        'riskbitmask' => RISK_SPAM,
        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => [
            'student' => CAP_ALLOW
        ],
    ],
];
