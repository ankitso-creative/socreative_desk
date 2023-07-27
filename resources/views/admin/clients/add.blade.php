@extends('layouts/master')

@section('content')
<style>
	.select2-container {
    	width: 100% !important;
	}
</style>
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
						<div class="card-header">Manage Projects: Add</div>
						<div class="card-body">
							<form action="{{url('/admin/add_clients')}}" method="POST">
                                @csrf
								<div class="row form-group">
									<div class="col-12 col-sm-12">
										<label class="form-control-label">Name</label>
										<input type="text" name="name" class="form-control">
									</div> 
									<div class="col-12 col-sm-12">
										<label class="form-control-label mt-2"> Assign To</label>
										<select name="assign_user_id[]" multiple class="form-control mySelect2">
											
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
	
   	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.mySelect2').select2({});
		});
	</script>
@endsection