@extends('layouts/master')

@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $error)
								<p>{{$error}}</p>
							@endforeach
                        </div>
                    @endif
					<div class="card">
						<div class="card-header">Manage Roles: Add</div>
						<div class="card-body">
							<form action="{{url('/admin/add_role')}}" method="POST">
                                @csrf
								<div class="row form-group">
									<div class="col-6 col-sm-6">
										<label class="form-control-label">Name</label>
										<input type="text" name="name" class="form-control">
										
									</div> 
									
									<div class="col-6 col-sm-6">
										<label class="form-control-label mt-2">Email</label>
										<input type="email" name="email" class="form-control">
										
									</div>
									<div class="col-6 col-sm-6">
										<label class="form-control-label mt-2">Password</label>
										<input type="password" name="password" class="form-control">
										
									</div>
									
									<div class="col-6 col-sm-6">
										<label class="form-control-label mt-2"> Role Assign</label>
										<select name="role_id" class="form-control">
											<option value=" ">Please select</option>
											<option value="2">Designer</option>
											<option value="3">Developer</option>
											<option value="4">Seo</option>
											<option value="5">Tester</option>
										</select>
										
									</div>
									<input type="hidden" name="s" value="ok">
								</div>
								
								<div class="row">
									<div class="col-12 col-sm-12 text-right">
										<button type="submit" class="btn btn-sm btn-secondary">Back</button>
										<button type="submit" class="btn btn-sm btn-primary">Submit</button>
									</div>
								</div>
								
							</form>
						</div>
					</div>
                </div>
			</div>	
		</div>
	</div>
    @endsection
    