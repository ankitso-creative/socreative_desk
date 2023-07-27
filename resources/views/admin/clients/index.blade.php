@extends('layouts/master')
@section('content')
<!-- MAIN CONTENT-->
<style>
    .switch-success > .switch-input ~ .switch-label {
        background: #ff4b5a !important;
    }
</style>
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-6">
					<h1 class="title-1">Manage Clients</h1>
				</div>
				<div class="col-md-6 col-6 text-right">
					<a href="{{url('/admin/add_client')}}" class="au-btn au-btn-icon au-btn--green">
					<i class="zmdi zmdi-plus"></i>Add Client</a>
				</div>
			</div>
			<div class="row m-t-30">
				<div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					<!-- DATA TABLE-->
					<div class="table-responsive table-earning  m-b-40">
						<table class="table table-borderless table-data3">
							<thead>
								<tr>
									<th>S.no</th>
									<th>Name</th>
									<th>Assignee</th>
									<th>status</th>
									<th>Action</th>
								</tr>
							</thead>
							<!-- <tbody>
								@php
									$count=0;
									$status = '';
									$role = '';
								@endphp
								@foreach($projects as $result) 
									@php
										$count++;
										$status = $result->status == 1 ? "checked" : "";
                                       //$user_ids = explode(',',$result->assign_developer_ids);
                                    @endphp
									
									<tr>
										<td>{{ $count }}</td>
										<td>{{$result->name}}</td>
										<td>{{$result->assign_developer_ids}}</td>
										<td>
											<label class="switch switch-3d switch-success mr-3">
												<input type="checkbox" class="switch-input change_status" {{ $status }} value="{{$result->id}}">
												<span class="switch-label"></span>
												<span class="switch-handle"></span>
											</label>
                                        </td>
										<td>
											<div class="table-data-feature">
												<a href="{{url('/admin/edit_project/'.$result->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Edit">
													<i class="zmdi zmdi-edit"></i>
												</a>
												<a href="{{url('/admin/project_detele/'.$result->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete">
													<i class="zmdi zmdi-delete"></i>
												</a>
											</div>
										</td>
									</tr>
								@endforeach
							</tbody>  -->
						</table>
					</div>
					<!-- END DATA TABLE-->
				</div>
			</div>
		</div>
	</div>
	@endsection
            
	