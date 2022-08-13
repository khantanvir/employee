@extends('adminpanel')
@section('admin')
<div class="content-body">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Company</h4>
                </div>
                <div class="">
                           <div>
                            <form method="post" action="{{ URL::to('company-store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="basic-form">
                                        <input type="hidden" name="company_id" value="{{ (!empty($company->id))?$company->id:'' }}" class="form-control input-default ">
                                        <h4 class="card-title">Name</h4>
                                        <div class="mb-3">
                                            <input type="text" name="name" value="{{ (!empty($company->name))?$company->name:old('name') }}" class="form-control input-default ">
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div><br>
                                        <h4 class="card-title">Email</h4>
                                        <div class="mb-3">
                                            <input type="text" name="email" value="{{ (!empty($company->email))?$company->email:old('email') }}" class="form-control input-default ">
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div><br>
                                        <h4 class="card-title">Website</h4>
                                        <div class="mb-3">
                                            <input type="text" name="website" value="{{ (!empty($company->website))?$company->website:old('website') }}" class="form-control input-default ">
                                            @if ($errors->has('website'))
                                                <span class="text-danger">{{ $errors->first('website') }}</span>
                                            @endif
                                        </div><br>
                                        <h4 class="card-title">Logo</h4>
                                        <div class="input-group">
                                            <div class="form-file">
                                                <input type="file" name="logo" class="form-file-input form-control">
                                            </div>
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