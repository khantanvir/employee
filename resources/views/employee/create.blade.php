@extends('adminpanel')
@section('admin')
<div class="content-body">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Employee</h4>
                </div>
                <div class="">
                           <div>
                            <form method="post" action="{{ URL::to('employee-store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="basic-form">
                                        <input type="hidden" name="employee_id" value="{{ (!empty($employee->id))?$employee->id:'' }}" class="form-control input-default ">
                                        <h4 class="card-title">First Name</h4>
                                        <div class="mb-3">
                                            <input type="text" name="first_name" value="{{ (!empty($employee->first_name))?$employee->first_name:old('first_name') }}" class="form-control input-default ">
                                            @if ($errors->has('first_name'))
                                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                            @endif
                                        </div><br>
                                        <h4 class="card-title">Last Name</h4>
                                        <div class="mb-3">
                                            <input type="text" name="last_name" value="{{ (!empty($employee->last_name))?$employee->last_name:old('last_name') }}" class="form-control input-default ">
                                            @if ($errors->has('last_name'))
                                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                            @endif
                                        </div><br>

                                        <div class="mb-3">
                                            <h4 class="card-title">Select Company</h4>
                                            <select name="company_id" class="default-select form-control wide mb-3">
                                                <option value="">Select Company</option>
                                                @foreach($all_companies as $key => $row)
                                                    <option {{ (!empty($employee->company_id) && $employee->company_id==$row->id)?'selected':'' }} value="{{ $row->id }}">{{ $row->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('company_id'))
                                                <span class="text-danger">{{ $errors->first('company_id') }}</span>
                                            @endif
                                        </div><br>


                                        <h4 class="card-title">Email</h4>
                                        <div class="mb-3">
                                            <input type="text" name="email" value="{{ (!empty($employee->email))?$employee->email:old('email') }}" class="form-control input-default ">
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div><br>
                                        <h4 class="card-title">Phone</h4>
                                        <div class="mb-3">
                                            <input type="text" name="phone" value="{{ (!empty($employee->phone))?$employee->phone:old('phone') }}" class="form-control input-default ">
                                            @if ($errors->has('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div><br>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>

                            </form>
                        </div>
                       
                    <div>

        </div>
    </div>
</div>
@stop