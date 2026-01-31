<?php

return [
    'user' => [
        'model' => env('ATTENDANCE_USER_MODEL', null),
        'table' => env('ATTENDANCE_USER_TABLE', null),
        'foreign_key' => env('ATTENDANCE_USER_FOREIGN_KEY', 'user_id'),
        'owner_key' => env('ATTENDANCE_USER_OWNER_KEY', 'id'),
        'timestamps' => env('ATTENDANCE_USER_TIMESTAMPS', null),
    ],
    'employee' => [
        'relations' => env('ATTENDANCE_EMPLOYEE_RELATIONS', ''),
    ],
];
