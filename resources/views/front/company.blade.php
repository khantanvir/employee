@extends('userpanel')
@section('frontend')


<section class="contact-form section">
	<div class="container">
		<div class="row">
			
			<div class="col-12">
				<table class="table">
                    <thead>
                      <tr>
                        <th><strong>Name</strong></th>
                        <th><strong>Id</strong></th>
                        <th><strong>Email</strong></th>
                        <th><strong>Logo</strong></th>
                        <th><strong>Website</strong></th>
                        <th><strong>Status</strong></th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($list_of_company as $row)
                        <tr class="{{ (!empty(Session::get('company_id')) && Session::get('company_id')==$row->id)?'table-primary':'' }}">
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->email }}</td>
                            <td><img src="{{ URL::to('public/company/logo/'.$row->logo) }}" width="100px" height="50"></td>
                            <td>{{ $row->website }}</td>
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
                        {!! $list_of_company->links() !!}
                    </ul>
                </nav>
			</div>
		</div>
	</div>
</section>
@endsection