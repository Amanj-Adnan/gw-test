<?php

namespace App\Imports;

use App\Models\Employees;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployeesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employees([
            'manager_id'=>$row[0],
            'id'     => $row[1],
            'name'    => $row[2],
            'age'    => $row[3],
            'gender'    => $row[4],
            'salary'    => $row[5],
            'job-title'    => $row[6],
            'hired-date'    => $row[7],
        ]);
    }
}
