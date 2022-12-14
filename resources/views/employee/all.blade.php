@extends('adminpanel')
@section('admin')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" integrity="sha512-hievggED+/IcfxhYRSr4Auo1jbiOczpqpLZwfTVL/6hFACdbI3WQ8S9NCX50gsM9QVE+zLk/8wb9TlgriFbX+Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="content-body">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Employee</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th><strong>Id</strong></th>
                                    <th><strong>First Name</strong></th>
                                    <th><strong>Last Name</strong></th>
                                    <th><strong>Company</strong></th>
                                    <th><strong>Email</strong></th>
                                    <th><strong>Phone</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($list_employees as $row)
                                <tr class="{{ (!empty(Session::get('employee_id')) && Session::get('employee_id')==$row->id)?'table-primary':'' }}">
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->first_name }}</td>
                                    <td>{{ $row->last_name }}</td>
                                    <td>{{ $row->Company->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>
                                        <input class="change-employee-status" type="checkbox" data-id="{{ $row->id }}" data-toggle="toggle" {{ ($row->status==0)?'checked':'' }} data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger">
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a title="Edit" href="{{ URL::to('employee-create/'.$row->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="javascript:void(0)" onclick="if(confirm('Are you sure to Delete this Employee Data?')) location.href='{{ URL::to('employee-value-delete/'.$row->id) }}'; return false;" title="Delete" href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <p class="bg-danger text-white p-1">No Item Found</p>
                                @endforelse
                            </tbody>
                        </table>
                        <nav>
                            <ul class="pagination pagination-xs pagination-gutter  pagination-warning">
                                {!! $list_employees->links() !!}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop