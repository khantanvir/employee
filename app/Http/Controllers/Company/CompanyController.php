<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Company\CompanyRequest;
use App\Models\Company\Company;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use App\Helper\Service;
use App\Models\Employee\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CompanyController extends Controller
{
    use Service;
    public function index(){
        
    }
    //create function 
    public function create($id=NULL){
        $data['page_title'] = 'Company | Create';
        $data['companies'] = true;
        $data['create_company'] = true;
        if(!empty($id)){
            $data['company'] = Company::where('id',$id)->first();
            if(empty($data['company'])){
                Session::flash('error','Company Data Not Found!');
                return redirect('company-all');
            }
        }
        return view('company/create',$data);
    }
    //store company
    public function store(CompanyRequest $request){
        $company_id = $request->input('company_id');
        if(!empty($company_id)){
            $company = Company::where('id',$company_id)->first();
            $company->update_by = Auth::user()->id;
        }else{
            $company = new Company();
            $company->create_by = Auth::user()->id;
        }
        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->website = $request->input('website');
        //logo upload
        $image = $request->file('logo');
        if($request->hasFile('logo')){
            if(!empty($company->logo)){
                $updateFileName = base_path().'/public/company/logo/'.$company->logo;
                if(File::exists($updateFileName)){
                    File::delete($updateFileName);
                }
            }
            $ext = $image->getClientOriginalExtension();
            $filename = $image->getClientOriginalName();
            $filename = rand(1000,100000).'.'.$ext;
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(100,50);
            $image_resize->save(public_path('company/logo/' .$filename));
            $company->logo = $filename;
        }
        //url modify
        if(empty($company_id)){
            $url_modify = Service::slug_create($request->input('name'));
            $checkSlug = Company::where('url', 'LIKE', '%' . $url_modify . '%')->count();
            if ($checkSlug > 0) {
                $new_number = $checkSlug + 1;
                $new_slug = $url_modify . '-' . $new_number;
                $company->url = $new_slug;
            } else {
                $company->url = $url_modify;
            }
        }
        $company->save();
        Session::flash('company_id',$company->id);
        Session::flash('success',(!empty($company_id))?'Company data Updated successfully':'Company data Saved Successfully');
        if(!empty(Session::get('current_url'))){
            return redirect(Session::get('current_url'));
        }else{
            return redirect('company-all');
        }
        
    }
    //all company
    public function all(){
        $data['page_title'] = 'Company | List Of Company';
        $data['companies'] = true;
        $data['all_company'] = true;
        $data['current'] = URL::full();
        Session::put('current_url',$data['current']);
        $data['list_companies'] = Company::where('is_deleted',0)->orderBy('id','desc')->paginate(10);
        return view('company/all',$data);
    }
    //company status change 
    public function company_status_change(Request $request){
        $company_id = $request->input('company_id');
        $company = Company::find($company_id);
        if(empty($company)){
            $data['result'] = array(
                'key'=>101,
                'val'=>'Company Data Not Found!'
            );
            return response()->json($data,200);
        }
        $update = Company::where('id',$company->id)->update(['status'=>$request->input('status')]);
        $data['result'] = array(
            'key'=>200,
            'val'=>'Company Updated!'
        );
        return response()->json($data,200);
    }
    //company value delete 
    public function company_value_delete($id=NULL){
        if(empty($id)){
            Session::flash('warning','Company Id Not Found!');
            return redirect()->back();
        }
        $companyValue = Company::find($id);
        if(empty($companyValue)){
            Session::flash('error','Company Data Not Found!');
            return redirect()->back();
        }
        $delete = Company::where('id',$companyValue->id)->update(['is_deleted'=>1]);
        Session::flash('success','Company Data Deleted Successfully!');
        if(!empty(Session::get('current_url'))){
            return redirect(Session::get('current_url'));
        }else{
            return redirect('company-all');
        }
    }
    //all deleted item of company, employee
    public function deleted_items(){
        $data['page_title'] = 'Company | All Deleted Items';
        $data['companies'] = true;
        $data['company_deleted_items'] = true;
        $data['company_deleted_list'] = Company::where('is_deleted',1)->orderBy('id','desc')->paginate(1);
        return view('company/deletedItem',$data);
    }
    //roll back company value 
    public function roll_back_company_value(Request $request){
        $companyValue = Company::find($request->input('company_id'));
        if(empty($companyValue)){
            $data['result'] = array(
                'key'=>101,
                'val'=>'Company Data Not Found'
            );
            return response()->json($data,200);
        }
        $delete = Company::where('id',$companyValue->id)->update(['is_deleted'=>$request->input('is_deleted')]);
        $data['result'] = array(
            'key'=>200,
            'val'=>'Company Value Roll Back Successfully'
        );
        return response()->json($data,200);
    }
    //get company list 
    public function get_company_list($search=NULL){
        if(!empty($search)){
            $list = Company::where('name','LIKE','%'.$search.'%')->where('status',0)->where('is_deleted',0)->get();
            $data['result'] = array(
                'key'=>200,
                'val'=>$list
            );
            return response()->json($data,200);
        }else{
            $list = Company::where('status',0)->where('is_deleted',0)->get();
            $data['result'] = array(
                'key'=>200,
                'val'=>$list
            );
            return response()->json($data,200);
        }

    }
    //get employee list
    public function get_employee_list($search=NULL){
        if(!empty($search)){
            $list = Employee::where('first_name','LIKE','%'.$search.'%')->orWhere('last_name','LIKE','%'.$search.'%')->where('status',0)->where('is_deleted',0)->get();
        }else{
            $list = Employee::where('status',0)->where('is_deleted',0)->get();
        }
        $emp = array();
        foreach($list as $row){
            $emp[] = array(
                'first_name'=>$row->first_name,
                'last_name'=>$row->last_name,
                'company'=>$row->Company->name,
                'email'=>$row->email,
                'phone'=>$row->phone,
            );
        }
        $data['result'] = array(
            'key'=>200,
            'val'=>$emp
        );
        return response()->json($data,200);
    }
}
