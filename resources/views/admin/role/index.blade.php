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
					<h1 class="title-1">Manage Roles</h1>
				</div>
				<div class="col-md-6 col-6 text-right">
					<a href="{{url('/admin/add')}}" class="au-btn au-btn-icon au-btn--green">
					<i class="zmdi zmdi-plus"></i>add item</a>
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
									<th>Email</th>
									<th>Role</th>
									<th>status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								
								
							</tbody>
						</table>
					</div>
					<!-- END DATA TABLE-->
				</div>
			</div>
		</div>
	</div>
	@endsection
            
	