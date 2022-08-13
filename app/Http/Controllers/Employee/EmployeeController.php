<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use App\Helper\Service;
use App\Models\Company\Company;
use App\Models\Employee\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests\Employee\EmployeeRequest;

class EmployeeController extends Controller
{
    use Service;
    public function index(){

    }
    //create employee
    public function create($id=NULL){
        $data['page_title'] = 'Employee | Create';
        $data['employees'] = true;
        $data['create_employee'] = true;
        $data['all_companies'] = Company::all();
        if(!empty($id)){
            $data['employee'] = Employee::where('id',$id)->first();
            if(empty($data['employee'])){
                Session::flash('error','Employee Data Not Found!');
                return redirect('employee-all');
            }
        }
        return view('employee/create',$data);
    }
    //store company
    public function store(EmployeeRequest $request){
        $employee_id = $request->input('employee_id');
        if(!empty($employee_id)){
            $employee = Employee::where('id',$employee_id)->first();
            $employee->update_by = Auth::user()->id;
        }else{
            $employee = new Employee();
            $employee->create_by = Auth::user()->id;
        }
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->company_id = $request->input('company_id');
        $employee->status = 0;
        $employee->is_deleted = 0;
        //logo upload
        
        //url modify
        if(empty($employee_id)){
            $url_modify = Service::slug_create($request->input('first_name').'-'.$request->input('last_name'));
            $checkSlug = Employee::where('url', 'LIKE', '%' . $url_modify . '%')->count();
            if ($checkSlug > 0) {
                $new_number = $checkSlug + 1;
                $new_slug = $url_modify . '-' . $new_number;
                $employee->url = $new_slug;
            } else {
                $employee->url = $url_modify;
            }
        }
        $employee->save();
        Session::flash('employee_id',$employee->id);
        Session::flash('success',(!empty($employee_id))?'Employee data Updated successfully':'Employee data Saved Successfully');
        if(!empty(Session::get('current_url1'))){
            return redirect(Session::get('current_url1'));
        }else{
            return redirect('employee-all');
        }
        
    }
    //all company
    public function all(){
        $data['page_title'] = 'Employee | List Of Employee';
        $data['employees'] = true;
        $data['all_employee'] = true;
        $data['current'] = URL::full();
        Session::put('current_url1',$data['current']);
        $data['list_employees'] = Employee::where('is_deleted',0)->orderBy('id','desc')->paginate(10);
        return view('employee/all',$data);
    }
    //company status change 
    public function employee_status_change(Request $request){
        $employee_id = $request->input('employee_id');
        $employee = Employee::find($employee_id);
        if(empty($employee)){
            $data['result'] = array(
                'key'=>101,
                'val'=>'Employee Data Not Found!'
            );
            return response()->json($data,200);
        }
        $update = Employee::where('id',$employee->id)->update(['status'=>$request->input('status')]);
        $data['result'] = array(
            'key'=>200,
            'val'=>'Employee Updated!'
        );
        return response()->json($data,200);
    }
    //company value delete 
    public function employee_value_delete($id=NULL){
        if(empty($id)){
            Session::flash('warning','Employee Id Not Found!');
            return redirect()->back();
        }
        $employeeValue = Employee::find($id);
        if(empty($employeeValue)){
            Session::flash('error','Employee Data Not Found!');
            return redirect()->back();
        }
        $delete = Employee::where('id',$employeeValue->id)->update(['is_deleted'=>1]);
        Session::flash('success','Employee Data Deleted Successfully!');
        if(!empty(Session::get('current_url1'))){
            return redirect(Session::get('current_url1'));
        }else{
            return redirect('employee-all');
        }
    }
    //all deleted item of company, employee
    public function deleted_items(){
        $data['page_title'] = 'Employee | All Deleted Items';
        $data['employees'] = true;
        $data['employee_deleted_items'] = true;
        $data['employee_deleted_list'] = Employee::where('is_deleted',1)->orderBy('id','desc')->paginate(1);
        return view('employee/deletedItem',$data);
    }
    //roll back company value 
    public function roll_back_employee_value(Request $request){
        $employeeValue = Employee::find($request->input('employee_id'));
        if(empty($employeeValue)){
            $data['result'] = array(
                'key'=>101,
                'val'=>'Employee Data Not Found'
            );
            return response()->json($data,200);
        }
        $delete = Employee::where('id',$employeeValue->id)->update(['is_deleted'=>$request->input('is_deleted')]);
        $data['result'] = array(
            'key'=>200,
            'val'=>'Employee Value Roll Back Successfully'
        );
        return response()->json($data,200);
    }
}
