<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AttendanceResource;
use App\Attendance;

class ReportAttendancesController extends Controller
{
    /**
     * 通報処理
     *
     * @param Attendance $attendance
     * @return AttendanceResource
     */
    public function update( Attendance $attendance )
    {
        $attendance->flag();
 
        return new AttendanceResource($attendance);
    }
}
