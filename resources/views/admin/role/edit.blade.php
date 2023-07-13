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
							<form action="{{url('/admin/update/'.$result->id)}}" method="POST">
                                @csrf
                                @method('PUT')
								<div class="row form-group">
									<div class="col-6 col-sm-6">
										<label class="form-control-label">Name</label>
										<input type="text" value="{{$result->name}}" name="name" class="form-control">
										
									</div> 
									
									<div class="col-6 col-sm-6">
										<label class="form-control-label mt-2">Email</label>
										<input type="email" value="{{$result->email}}" name="email" class="form-control">
										
									</div>
									<div class="col-6 col-sm-6">
										<label class="form-control-label mt-2"> Role Assign</label>
										<select name="role_id" class="form-control">
											<option value=" ">Please select</option>
											<option {{ $result->role_id == 2 ? "selected" : ""}} value="2">Designer</option>
											<option {{ $result->role_id == 3 ? "selected" : ""}} value="3">Developer</option>
											<option {{ $result->role_id == 4 ? "selected" : ""}} value="4">Seo</option>
											<option {{ $result->role_id == 5 ? "selected" : ""}} value="5">Tester</option>
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
    