@extends('userpanel')
@section('frontend')


<section class="contact-form section">
	<div class="container">
		<div class="row">
			
			<div class="col-12">
				<table class="table">
                    <thead>
                      <tr>
                        <th><strong>Id</strong></th>
                        <th><strong>First Name</strong></th>
                        <th><strong>Last Name</strong></th>
                        <th><strong>Company</strong></th>
                        <th><strong>Email</strong></th>
                        <th><strong>Phone</strong></th>
                        <th><strong>Status</strong></th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($list_of_employee as $row)
                        <tr class="{{ (!empty(Session::get('employee_id')) && Session::get('employee_id')==$row->id)?'table-primary':'' }}">
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->first_name }}</td>
                            <td>{{ $row->last_name }}</td>
                            <td>{{ $row->Company->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>
                                @if($row->status==0)
                                <span class="badge rounded-pill bg-success">Active</span>
                                @endif
                            </td>
                            
                        </tr>
                        @empty
                        <p class="bg-danger text-white p-1">No Item Found</p>
                        @endforelse
                    </tbody>
                  </table>
                  <nav>
                    <ul class="pagination pagination-xs pagination-gutter  pagination-warning">
                        {!! $list_of_employee->links() !!}
                    </ul>
                </nav>
			</div>
		</div>
	</div>
</section>
@endsection