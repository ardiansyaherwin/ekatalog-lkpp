<!DOCTYPE html>

<html lang="id">
    <head>
        <title>E-Katalog 5.0</title>
	    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">        
        <link rel="stylesheet" media="screen" href="{{ asset('/stylesheets/app.min.css') }}">
        <link rel="stylesheet" media="screen" href="{{ asset('/stylesheets/landing.css') }}">
		<!--<link rel="stylesheet" media="screen" href="{{ asset('/fa/css/font-awesome.min.login.css') }}">-->
        <link rel="stylesheet" media="screen" href="{{ asset('/plugins/spinner/dist/loading.min.css') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
        <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.ico') }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        
    </head>
    <body id="custom-body">
    	<div id="main">
    		<!-- Content -->
   			<div class="main-content-wrapper">
   				
<div class="container">

	<div class="login-wrapper">

		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-2 col-md-offset-5 col-lg-2 col-lg-offset-5">
				<div class="login-header">
					<a href="/">
						<img alt="E-Katalog LKPP" class="img img-responsive center-block" src="{{ URL::to('/image/logo_merah.png') }}" />
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
				
					<div class="login-body">
						
						
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#penyedia"
																	  aria-controls="penyedia" role="tab" data-toggle="tab">Login Penyedia</a></li>
							<li role="presentation"><a href="#non-penyedia"
													   aria-controls="non-penyedia" role="tab" data-toggle="tab">Login Non Penyedia</a></li>
						</ul>

						<div class="tab-content">
							<!-- Login Penyedia -->
							<div role="tabpanel" class="tab-pane active" id="penyedia">
								<!--<form action="/home" accept-charset="utf-8" enctype="application/x-www-form-urlencoded" id="formLoginPenyedia" >
<input type="hidden"/>-->
							<form action="{{ url('login') }}" method="POST">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Username"
											   />
									</div>
									<div class="form-group">
										<input type="password" class="form-control"
											   placeholder="Kata Sandi" />
									</div>
									<input type="hidden" class="backUrl" value="">
									<button class="btn btn-block btn-md btn-danger" type="button" id="btnLoginPenyedia" onclick="window.location='{{ url("/home") }}'">Login</button>
								
<!--</form>-->
</form>
							</div>
							<!-- Login Non Penyedia -->
							<div role="tabpanel" class="tab-pane" id="non-penyedia">
								<form action="/admin.userctr/loginlokalsubmit" method="post" accept-charset="utf-8" enctype="application/x-www-form-urlencoded" id="formLoginNonPenyedia" >
<input type="hidden"/>

									<div class="form-group">
										<input type="text" class="form-control" placeholder="Username"
											   name="username" value="" />
									</div>
									<div class="form-group">
										<input type="password" class="form-control"
											   placeholder="Kata Sandi" name="password" />
									</div>
									<input type="hidden" class="backUrl" name="backUrl" value="">
									<button class="btn btn-block btn-md btn-danger" type="button" id="btnLoginNonPenyedia">Login</button>
								
</form>      
							 
							</div>
						</div>
					</div>
				
				

				<div class="login-footer">
					
						<p>Belum punya akun sebagai Penyedia Katalog Elektronik? <a href="#" data-toggle="modal" data-target="#infoPenyediaDaftar"> Daftar disini </a></p>
					
					<a href="/"><span class="fa fa-arrow-circle-left"></span> Kembali ke Beranda</a>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="infoPenyediaDaftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"
									aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 style="text-align: left;" class="modal-title" id="myModalLabel">Informasi</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<p style="text-align: left;">
									&#x2022; Apabila belum memiliki akun sebagai Penyedia, silakan daftar melalui website LPSE. Pilih lokasi LPSE terdekat dengan kantor Pelaku Usaha supaya mempermudah saat dilakukan verifikasi oleh LPSE. Informasi lokasi LPSE dapat dilihat di laman <a href="https://eproc.lkpp.go.id/lpse/index" target="_blank">https://eproc.lkpp.go.id/lpse/index</a>
								</p>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default btn-md" data-dismiss="modal"><i aria-hidden="true" class="fa fa-close"></i> Tutup</button>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>

   			</div>
   			<!-- End Content -->
   			
   			<!-- Footer -->
   			<div class="main-footer-wrapper">
   				<div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="https://www.facebook.com/eprocurement.lkpp/" target="_blank" rel="noopener noreferrer" class="btn btn-social-icon btn-facebook">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="https://twitter.com/eproc_lkpp/" target="_blank" rel="noopener noreferrer" class="btn btn-social-icon btn-twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                            <a href="https://www.instagram.com/eproc.lkpp/" target="_blank" rel="noopener noreferrer" class="btn btn-social-icon btn-instagram">
                                <span class="fa fa-instagram"></span>
                            </a>
                            
                                
                            
                        </div>
                    </div>
                    <br>
	        		<div class="row">
	        			<div class="col-md-12">
		        			&copy; 2022 Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah (LKPP)
		        		</div>
	        		</div>
	        	</div>
   			</div>
   			<!-- End Footer -->
    	</div>
        
        <script src="{{ asset('/javascripts/jquery-1.12.1.min.js') }}" type="text/javascript"> </script>
        <script src="{{ asset('/javascripts/bootstrap.min.js') }}" type="text/javascript"> </script>
        <script src="{{ asset('/javascripts/utility.js') }}" type="text/javascript"> </script>
	    <script src="{{ asset('/javascripts/bootstrap-datatables-v2.min.js') }}" type="text/javascript"> </script>
        <script src="{{ asset('/javascripts/jquery.bootstrap.wizard.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('/javascripts/jquery.loading.min.js') }}"></script>
        
<script type="text/javascript">
	$(document).ready(function() {
		var backUrl = window.sessionStorage.getItem("backUrl");
		window.sessionStorage.setItem("jt", "");
		$(".backUrl").val(backUrl);
		$('a[href="#penyedia"]').tab('show');
	});

	$("a[role='tab']").click(function() {
				var href = $(this).attr("href");
				document.cookie = "loginTab=" + href
						+ "; expires=Thu, 22 Sep 2050 12:00:00 UTC; path=/";
	});

	$('#btnLoginPenyedia').click(function () {
		$.showLoading()
		$('#formLoginPenyedia').submit()
	});

	$('#btnLoginNonPenyedia').click(function () {
		$.showLoading()
		$('#formLoginNonPenyedia').submit()
	});
</script>

    <!--<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"844d835a2c3940b0","version":"2023.10.0","token":"abed2acbc5e94e58a6f266a2f51452e8"}' crossorigin="anonymous"></script>-->
</body>
</html>