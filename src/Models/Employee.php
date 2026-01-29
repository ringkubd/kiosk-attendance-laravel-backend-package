<?php

namespace Anwar\AttendanceSync\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'attendance_employees';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'user_id',
        'business_id',
        'branch_id',
        'department_id',
        'employee_code',
        'face_enrolled',
        'face_embeddings_encrypted',
        'status',
        'sync_status',
        'last_synced_at',
    ];

    protected $casts = [
        'face_enrolled' => 'boolean',
        'last_synced_at' => 'datetime',
    ];
}
