<?php

namespace App\Actions;

use App\Employee;

class EmployeeActions
{
    public function addImage(Employee $employee, string $path, string $collection)
    {
        $employee
            ->addMedia($path)
            ->withResponsiveImages()
            ->preservingOriginal()
            ->toMediaCollection($collection);
    }
}
