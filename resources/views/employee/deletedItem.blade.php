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
                                    <th><strong>Action</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($employee_deleted_list as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->first_name }}</td>
                                    <td>{{ $row->last_name }}</td>
                                    <td>{{ $row->Company->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>
                                        <input class="roll-back-employee-value" type="checkbox" data-id="{{ $row->id }}" data-toggle="toggle" {{ ($row->is_deleted==0)?'checked':'' }} data-on="Active" data-off="Roll Back" data-onstyle="success" data-offstyle="danger">
                                    </td>
                                </tr>
                                @empty
                                <p class="bg-danger text-white p-1">No Item Found</p>
                                @endforelse
                            </tbody>
                        </table>
                        <nav>
                            <ul class="pagination pagination-xs pagination-gutter  pagination-warning">
                                {!! $employee_deleted_list->links() !!}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop