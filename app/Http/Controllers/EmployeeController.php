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
        $EmployeeInfo->gender = $request->gender;
        $EmployeeInfo->dob= $request->dob;
        $EmployeeInfo->address= $request->address;
        $EmployeeInfo->save();

        return response()->json([
            "message" => "Employee record created"
        ], 201);
    }

    public function getEmployee($id) {
       if (EmployeeInfo::where('id', $id)->exists()) {
        $EmployeeInfo = EmployeeInfo::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
        return response($EmployeeInfo, 200);
      } else {
        return response()->json([
          "message" => "Employee not found"
        ], 404);
      }
    }

    public function updateEmployee(Request $request, $id) {
        if (EmployeeInfo::where('id', $id)->exists()) {
        $EmployeeInfo = EmployeeInfo::find($id);
        $EmployeeInfo->name = is_null($request->name) ? $EmployeeInfo->name : $request->name;
        $EmployeeInfo->department = is_null($request->department) ? $EmployeeInfo->department : $request->department;
         $EmployeeInfo->gender = is_null($request->gender) ? $EmployeeInfo->gender : $request->gender;
         $EmployeeInfo->dob = is_null($request->dob) ? $EmployeeInfo->dob : $request->dob;
        $EmployeeInfo->address = is_null($request->address) ? $EmployeeInfo->address : $request->address;
        $EmployeeInfo->save();

        return response()->json([
            "message" => "records updated successfully"
        ], 200);
        } else {
        return response()->json([
            "message" => "Employee not found"
        ], 404);
        
    }
    }

    public function deleteEmployee ($id) {
         if(EmployeeInfo::where('id', $id)->exists()) {
        $EmployeeInfo = EmployeeInfo::find($id);
        $EmployeeInfo->delete();

        return response()->json([
          "message" => "records deleted"
        ], 202);
      } else {
        return response()->json([
          "message" => "Employee not found"
        ], 404);
      }
    }
}
