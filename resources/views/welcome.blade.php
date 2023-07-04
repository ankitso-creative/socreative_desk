@include('common/header')
<style>
.footer-sec {
    background: #fee6de;
}
.copyright p {
    color: #000;
}
body{
    background: #fee6de;
}

@media (min-width: 1500px) and (max-width: 2000px) {
.footer-sec {
    position: inherit;
    bottom: 0;
}
}
</style>
<section class="main-banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 my-auto">
				<div class="banner-content-block">
				<h1>Strengthen <span>Customer</span> Relationship</h1>
				<p>Transform your IT service queries with So-Creative desk.<br>
					Our mission is to improve our customers journey.<br>
					Automate. Customize. Prioritize.</p>
				<div class="main_btn">
					<ul>
						<li><a class="login_btn" href="{{url('/login')}}">Login</a></li>
						<li><a class="contact_btn" href="#contact">Contact</a></li>
					</ul>
				</div>
			    </div>
			</div>
			<div class="col-sm-6 text-center">
				<img src="{{ asset('assets/admin/images/main-banner-image-1.png') }}">
			</div>
		</div>
	</div>
</section>

<section class="form-block" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="contact_form_sec">
					<form action="" id="contact-form">
						<div class="row">
							<div class="col-lg-12 col-12 text-left">
								<h2>Customer Request Form</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-6">
								<div class="form-group">
									<input class="au-input au-input--full" type="text" name="name" placeholder="Name*">
								</div>
								<div class="form-group">
									<input class="au-input au-input--full" type="email" name="email" placeholder="Email*">
								</div>
								<div class="form-group">
									<input class="au-input au-input--full" type="tel" name="phone" placeholder="Phone*">
								</div>
								<div class="form-group">
									<input class="au-input au-input--full" type="text" name="project_name" placeholder="Project Name*">
								</div>
							</div>
							<div class="col-lg-6 col-6">
								<div class="form-group">
									<textarea name="message"  placeholder="Message*" class="au-input au-input--full"></textarea>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-12 p-0 alert_box d-none">
							<div class="alert message">
								Indicates a successful or positive action.
							</div>
						</div>
						<div class="col-lg-12 col-12 text-right p-0">
							
							<div class="form-group">
								<input class="btn btn-success" id="contact-form-submit" type="submit" value="Send">
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="contact-details">
					<h2>Enquiries</h2>
					<ul>
						<li>Customer Enquiries: <a href="mailto:info@so-creative.co.uk">info@so-creative.co.uk</a></li>
						<li>Call Us: <a href="tel:123-456-7890">+44 (0) 7983 3999 02</a></li>
					</ul>
					
				</div>
			</div>
		</div>
	</div>
</section>
@include('common/footer')
<!-- end document-->
<script>
	$(document).on('click','#contact-form-submit',function(e){
        alert('asdsad');
		// e.preventDefault();
		// var reqlength = $('input,textarea').length;
		// var value = $('input,textarea').filter(function() 
		// {
		// 	return this.value != '';
		// });
		// if (value.length>=0 && (value.length !== reqlength)) 
		// {
		// 	$('.alert_box').removeClass('d-none');
		// 	$('.message').removeClass('alert-success');
		// 	$('.message').addClass('alert-danger');
		// 	$('.message').html('Please fill out all required(*) fields.');
		// } 
		// else 
		// {
		// 	var name = $('input[name="name"]').val();
		// 	var email = $('input[name="email"]').val();
		// 	var phone = $('input[name="phone"]').val();
		// 	var project_name = $('input[name="project_name"]').val();
		// 	var message = $('textarea[name="message"]').val();
		// 	var data = "s=ok&name="+name+"&email="+email+"&phone="+phone+"&project_name="+project_name+"&message="+message;
		// 	var path = "ajax/contact_us"
		// 	var result = CallAjax(path,data);
		// 	if(result.status=='success')
		// 	{
		// 		$('.alert_box').removeClass('d-none');
		// 		$('.message').removeClass('alert-danger');
		// 		$('.message').addClass('alert-success');
		// 		$('.message').html(result.html);
		// 		setTimeout(function() {
		// 			$('.alert_box').addClass('d-none');
		// 		}, 2000);
		// 		$('#contact-form input,textarea').val('');
		// 	}
		// 	else
		// 	{
		// 		$('.alert_box').removeClass('d-none');
		// 		$('.message').removeClass('alert-success');
		// 		$('.message').addClass('alert-danger');
		// 		$('.message').html(result.html);
		// 	}
		// }
	})
</script>