<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

use App\Http\Requests\EmployeeStoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class EmployeeController extends Controller
{
    public function __construct()
    {
       // $this->authorizeResource(Employee::class, 'employee');
    }

    public function index() {
        // Select * from employees;
        $employees = Employee::all(); // Eloquent
       // dd($employees);
        return view('list', compact('employees'));
    }
    
    public function create() {
        return view('create');
    }
    
    public function store(EmployeeStoreRequest $request) {
               
        $employee = Employee::create($request->all());
        
        
        return redirect()->route('employees.index');
    }
    
    public function edit(Employee $employee) {
        // $employee = Employee::find($id);
        return view('edit', compact('employee'));
    }
    
    public function update(Request $request, Employee $employee) {
       
        $request->validate([
            "first_name" => 'required | max:255',
            "last_name" => 'required | max:255',
            "email" => 'required | email | max:255',
            "phone_number" => 'required | max:15'
        ]);
                
        $employee->update($request->all());

        return redirect()->route('employees.index');
    } 
    
    public function destroy(Employee $employee) {
        
/*         if (! Gate::allows('update-employee', $employee)) {
            abort(403);
        } */

        $employee->delete();

        return redirect()->route('employees.index');
    }
}
