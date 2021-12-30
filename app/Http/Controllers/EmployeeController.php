<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeInfo;


class EmployeeController extends Controller
{
      public function getAllEmployees() {
      $EmployeeInfo = EmployeeInfo::get()->toJson(JSON_PRETTY_PRINT);
    return response($EmployeeInfo, 200);
    }

    public function createEmployee(Request $request) {
        $EmployeeInfo = new EmployeeInfo;
        $EmployeeInfo->name = $request->name;
        $EmployeeInfo->department = $request->department;
        $EmployeeInfo->save();

        return response()->json([
            "message" => "Employee record created"
        ], 201);
    }

    public function getEmployee($id) {
      // logic to get a student record goes here
    }

    public function updateEmployee(Request $request, $id) {
      // logic to update a student record goes here
    }

    public function deleteEmployee ($id) {
      // logic to delete a student record goes here
    }
}
