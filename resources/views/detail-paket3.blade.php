<!DOCTYPE html>

<html lang="id">
    <head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<title id="dynamicTitle">E-Katalog 5.0</title>
		<meta name="description" id="dynamicDescription" content="E-Katalog 5.0">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
 <!--<link rel="stylesheet" media="screen" href="/public/stylesheets/app.min.css">
		<link rel="stylesheet" media="screen" href="/public/fa/css/font-awesome.min.css">-->
				<!--<link rel="stylesheet" media="screen" href="/public/fa/css/font-awesome.min.css">-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" media="screen" href="{{ asset('stylesheets/app.min.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('stylesheets/bootstrap-datatables-v1_10_8.min.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('stylesheets/landing.css') }}">
        <link rel="stylesheet" media="screen" href="{{ asset('stylesheets/bootstrap-social.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('aftlogin/stylesheet/input-icon.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('aftlogin/javascripts/datepicker/css/bootstrap-datepicker.min.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('javascripts/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('javascripts/select2/css/select2.min.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('aftlogin/javascripts/sweetalart2/sweetalert2.min.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('aftlogin/javascripts/fileupload/front/font-fileuploader.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('aftlogin/javascripts/lightgallery/css/lightgallery.min.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('aftlogin/javascripts/fileupload/jquery.fileuploader.min.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('aftlogin/javascripts/jquery-tags/jquery.tagsinput.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('javascripts/ekko-lightbox.min.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('javascripts/jquery-ui.min.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('plugins/spinner/dist/loading.min.css') }}">
		<link rel="stylesheet" href="{{ asset('aftlogin/bpmn-jsd-dist-assets/diagram-js.css') }}"/>
		<link rel="stylesheet" href="{{ asset('aftlogin/bpmn-jsd-dist-assets/front-css/bpmn.css') }}"/>
		<link rel="stylesheet" href="{{ asset('stylesheets/datetimepicker.css') }}"/>
		<link rel="stylesheet" media="screen" href="{{ asset('aftlogin/stylesheet/app-custom.css') }}">
		

	
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-K59543X46E"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-K59543X46E');
		</script>
	
	<script>

		
		window.sessionStorage.setItem("aktifUser", "{&quot;user_id&quot;:47139931,&quot;role_basic_name&quot;:&quot;penyedia&quot;,&quot;nama_lengkap&quot;:&quot;PT INDI DAYA NUSAREKA&quot;,&quot;email&quot;:&quot;info@indidayanusareka.com&quot;,&quot;jabatan&quot;:&quot;&quot;,&quot;no_sert_pbj&quot;:&quot;&quot;,&quot;nip&quot;:&quot;&quot;,&quot;no_tlp&quot;:&quot;&quot;,&quot;is_panitia_pp&quot;:false}");
		if (window.sessionStorage.getItem("jt") === null || window.sessionStorage.getItem("jt") === "")
			window.sessionStorage.setItem("jt", "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0NzEzOTkzMSwic2Vzc2lvbl9pZCI6IjRmNTQyNmU0LTIxNGUtNDU4NS1hYTNhLWE1MWE2ODAzNjFjNiIsImV4cCI6MTcwNTE5OTMzMn0.VG1J4WpKzq2y-y3dlXrpUIqHRLDOnP6wCQ6W4Etie4Y");
		window.sessionStorage.setItem("bhost", "https://e-purchasing.lkpp.go.id/api/v2")
		

		
		window.sessionStorage.setItem("lang", "id")
		
		window.sessionStorage.setItem("backUrl", "/v2/id/purchasing/paket/detail/8288704")
		
	</script>
    </head>
    <body>
    	<div id="mobile-menu" class="menu-wrapper">
   			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span class="fa fa-close"></span></a>
    		<ul><li><a href="/home">Beranda</a></li><li><a href="/pengumuman">Pengumuman</a></li><li><a href="#prakatalogMenu" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="prakatalogMenu">Pra Katalog</a><ul class="collapse" id="prakatalogMenu"><li><a href="/v2/prakatalog/penawaran"><i class="fa fa-angle-double-right"></i> Penawaran Baru</a></li><li><a href="/prakatalog/penawaran"><i class="fa fa-angle-double-right"></i> Penawaran Lama</a></li></ul></li><li><a href="#katalogMenu" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="katalogMenu">Produk</a><ul class="collapse" id="katalogMenu"><li><a href="/v3/katalog/produk/create"><i class="fa fa-angle-double-right"></i> Tambah Produk</a></li><li><a href="/katalog/produk"><i class="fa fa-angle-double-right"></i> Daftar Produk</a></li><li><a href="/katalog/produk/report"><i class="fa fa-angle-double-right"></i> Kelola Laporan</a></li><li><a href="/katalog/produk/permohonan"><i class="fa fa-angle-double-right"></i> Permohonan Label</a></li></ul></li><li><a href="#permohonanMenu" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="permohonanMenu">Permohonan Pembaruan</a><ul class="collapse" id="permohonanMenu"><li><a href="/katalog/produk/permohonan-pembaruan"><i class="fa fa-angle-double-right"></i> Permohonan Pembaruan</a></ul></li><li><a href="/minikompetisi">Kompetisi</a></li><li><a href="#paketMenu" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="paketMenu">Paket</a><ul class="collapse" id="paketMenu"><li><a href="/purchasing/pre-order"><i class="fa fa-angle-double-right"></i> Pre Order</a></li><li><a href="/v2/purchasing/paket"><i class="fa fa-angle-double-right"></i> Paket Baru</a></li><li><a href="/purchasing/paket"><i class="fa fa-angle-double-right"></i> Paket Lama</a></li></ul></li><li><a href="#profilMenu" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="profilMenu">Profil</a><ul class="collapse" id="profilMenu"><li><a href="/masterdata/profil-penyedia"><i class="fa fa-angle-double-right"></i> Pengaturan</a></li><li><a href="/penyedia/distributor/penawaran"><i class="fa fa-angle-double-right"></i> Daftar Distributor/Reseller/Pelaksana Pekerjaan/Pengirim Barang</a></li><li><a href="/profil/syarat-kualifikasi-penyedia"><i class="fa fa-angle-double-right"></i> Daftar Syarat Kualifikasi Penyedia</a></li></ul></li><li><a href="/log-aktivitas">Log Aktivitas</a></li><li><a href="/berita">Berita</a></li><li><a href="#monevMenu" class="" data-toggle="collapse" aria-expanded="true" aria-controls="monevMenu">Monev</a><ul class="collapse in" id="monevMenu" aria-expanded="true" style=""><li><a target="_blank" href="http://redash-e-katalog.lkpp.go.id/public/dashboards/BnXT185EjSxCxNa4YgFPoy7oiA6M4VKtD2sa4W8L?refresh=21600?org_slug=default"><i class="fa fa-angle-double-right"></i>Dashboard Transaksi</a></li><li><a target="_blank" href="https://redash-e-katalog.lkpp.go.id/"><i class="fa fa-angle-double-right"></i>Dashboard Patroli</a></li></ul></li><li><a href="/unduh">Unduh</a></li><li><a href="/faq">Tanya Jawab</a></li><li><a href="/syarat-ketentuan">Syarat dan Ketentuan</a></li><li><a href="/hub-kami">Hubungi Kami</a></li><li><a href="/admin.userctr/logout">Logout</a></li></ul>
    	</div>

    	<div id="main" class="main-wrapper">
   			<!-- Header -->
   			<div class="main-header-wrapper">
   				<div class="helper-menu">
   					<div class="container-fluid">
   						<ul>
	   						
	   						
	   						
	   						
	   						
							
								
								<li>
									<a href="/all-message" style="text-decoration: none">
										
									</a>
								</li>
							
							<li><a href="/language/change?lang=id"><img alt="E-Katalog LKPP" width="15" height="15" src="{{ URL::to('/image/id.png') }}" style="width: 15px; height: 15px"></a> |
                                <a href="/language/change?lang=en"><img alt="E-Katalog LKPP" width="15" height="15" src="{{ URL::to('/image/en.png') }}" style="width: 15px; height: 15px"></a></li>
	   					</ul>
   					</div>
   				</div>

   				<nav class="navbar navbar-default sticked-navbar">
					<div class="container-fluid">
						<div class="row">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" id="btnToggleNav">
								<span class="fa fa-bars"></span>
							</button>
							
								<button type="button" class="navbar-toggle collapsed btn-chat">
									<span class="fa fa-wechat"></span>
									Chat
								</button>
							
							
							<a class="navbar-brand" href="/home">
								<img alt="E-Katalog LKPP" width="101" height="30" src="{{ URL::to('/image/nav_logo.png') }}" class="img img-responsive"/>
							</a>
							
							
						</div>

						<div class="collapse navbar-collapse" id="catalog-main-menu">
							<!-- Komoditas -->
							<div class="col-md-1 btn-komoditas" style="width: 9.33333%">
								<div class="komoditas-menu">
									<a href="#">Etalase Produk</a>
								</div>
							</div>
							<!-- End Komoditas -->
							<!-- Search -->
							<div class="col-md-5">
								
<div id="searchbar-container">
	<form method="GET" action="/id/search-produk" class="navbar-form">
	<input type="hidden" name="authenticityToken" value="96f18375096671fdf13e3d066c5be6565e7808a3"/>

		<div class="input-group searchbar-form">
	        <input type="text" id="search-bar" name="q" value="" data-url="/api/product/suggestion" class="form-control" placeholder="Cari Produk"/>
	        <input type="hidden" name="prid" value=""/>
	        <input type="hidden" name="pid" value=""/>
	        <input type="hidden" name="gt" value=""/>
	        <input type="hidden" name="lt" value=""/>
	        <input type="hidden" name="mid" value=""/>
	        <input type="hidden" name="kbid" value=""/>
	        <input type="hidden" name="order" value=""/>
            <input type="hidden" name="cat" class="hidden-cat" value=""/>
			<input type="hidden" value="/id/search-produk"/>
	        <span class="input-group-addon">
	        	<button type="submit" aria-hidden="true"><i aria-hidden="true" class="fa fa-search"></i></button>
	        </span>
	    </div>
	</form>
</div>
<div id="linkcari" hidden>Result: </div>
<div hidden><input id="baseurl" value="http://e-katalog.lkpp.go.id"/><input id="elink" type="text"/><input id="elinkselect" type="text"/></div>
							</div>
							<!-- End Search -->
							<!-- Login -->
							<ul class="nav navbar-nav navbar-right">
								
									
										<li><a href="#" class="btn-chat"><i aria-hidden="true" class="fa fa-wechat"></i> Chat</a></li>
									
									
										
									
									
									
									
									
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="white-space: nowrap;overflow:hidden;text-overflow:ellipsis;max-width: 120px;"><i aria-hidden="true" class="fa fa-user"></i> PT INDI DAYA NUSAREKA <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="/admin.userctr/logout?redirectLogin=false">Logout</a></li>
										</ul>
									</li>
								
								
							</ul>
							<!-- END Login -->
						</div>
						</div>
					</div>
				</nav>
				<!-- List Komoditas -->
					<div class="komoditas-menu-wrapper">
	<div class="overlay" style="display: none;"></div>
	<div class="komoditas-menu-list" style="display: none;">
		<div class="komoditas-list">
			<div class="komoditas-list-item"><a class="komoditas-item-link" id="nasional-list" href="/publikctr/popularcommoditylist?jenis=Nasional">Etalase Produk Nasional </a></div>
			<div class="komoditas-list-item"><a class="komoditas-item-link" id="lokal-list" href="/publikctr/popularcommoditylist?jenis=Lokal">Etalase Produk Lokal </a></div>
			<div class="komoditas-list-item"><a class="komoditas-item-link" id="sektoral-list" href="/publikctr/popularcommoditylist?jenis=Sektoral">Etalase Produk Sektoral </a></div>



		</div>
	</div>
</div>
				<!-- End List Komoditas -->

				<div class="navbar-menu">
					<div class="container-fluid">
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav"><li><a href="/home" id="beranda">Beranda</a></li><li><a href="/pengumuman" id="pengumuman">Pengumuman</a></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pra Katalog <span class="caret"></span></a><ul class="dropdown-menu"><li><div style="overflow-y: auto!important; max-height: 450px!important" class="container-fluid"><div class="row"><a href="/v2/prakatalog/penawaran">Penawaran Baru</a><a href="/prakatalog/penawaran">Penawaran Lama</a></div></div></li></ul></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk <span class="caret"></span></a><ul class="dropdown-menu"><li><div style="overflow-y: auto!important; max-height: 450px!important" class="container-fluid"><div class="row"><a href="/v3/katalog/produk/create">Tambah Produk</a><a href="/katalog/produk">Daftar Produk</a><a href="/katalog/produk/report">Kelola Laporan</a><a href="/katalog/produk/permohonan">Permohonan Label</a></div></div></li></ul></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Permohonan Pembaruan <span class="caret"></span></a><ul class="dropdown-menu"><li><div style="overflow-y: auto!important; max-height: 450px!important" class="container-fluid"><div class="row"><a href="/katalog/produk/permohonan-pembaruan">Permohonan Pembaruan</a></div></div></li></ul></li><li><a href="/minikompetisi">Kompetisi</a></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Paket <span class="caret"></span></a><ul class="dropdown-menu"><li><div style="overflow-y: auto!important; max-height: 450px!important" class="container-fluid"><div class="row"><a href="/purchasing/pre-order">Pre Order</a><a href="/v2/purchasing/paket">Paket Baru</a><a href="/purchasing/paket">Paket Lama</a></div></div></li></ul></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <span class="caret"></span></a><ul class="dropdown-menu"><li><div style="overflow-y: auto!important; max-height: 450px!important" class="container-fluid"><div class="row"><a href="/masterdata/profil-penyedia">Pengaturan</a><a href="/penyedia/distributor/penawaran">Daftar Distributor/Reseller/Pelaksana Pekerjaan/Pengirim Barang</a><a href="/profil/syarat-kualifikasi-penyedia">Daftar Syarat Kualifikasi Penyedia</a></div></div></li></ul></li><li><a href="/log-aktivitas">Log Aktivitas</a></li><li><a href="/berita">Berita</a></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Monev <span class="caret"></span></a><ul class="dropdown-menu"><li><div class="container-fluid"><div class="row"><a target="_blank" href="http://redash-e-katalog.lkpp.go.id/public/dashboards/BnXT185EjSxCxNa4YgFPoy7oiA6M4VKtD2sa4W8L?refresh=21600?org_slug=default">Dashboard Transaksi</a><a target="_blank" href="https://redash-e-katalog.lkpp.go.id/">Dashboard Patroli</a></div></div></li></ul></li><li><a href="/unduh">Unduh</a></li><li><a href="/faq">Tanya Jawab</a></li><li><a href="/syarat-ketentuan">Syarat dan Ketentuan</a></li><li><a href="/hub-kami">Hubungi Kami</a></li></ul>
						</div>
					</div>
				</div>
   			</div>
            <div>
                <p style="margin-bottom: 4%"></p>
            </div>
            <!-- End Header -->

   			<!-- Content -->
   			<div class="main-content-wrapper">
   				
<style>
    .radio-button {
        background-color: #f6f9fc;
        width: 100%;
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #dee3ed;
        border-radius: 0.5rem;
    }

    .radio-button div {
        float: left;
    }
</style>
<div class="container-fluid detail-package">

    <div class="row">
        <div class="col-md-12">
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="/home">Beranda</a></li>
                <li><a href="/v2/purchasing/paket">Daftar Paket</a></li>
                <li class="active">Detail Paket</li>
            </ol>
            <!-- End Breadcrumb -->
        </div>
    </div>
    <div id="rx-detail-paket" dataId="8288704" enabledQris="true" blacklist-persiapan="false" allow-view-dok-persiapan="false">
		<div class="modal fade" tabindex="-1" id="unggahFile" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel">Unggah File</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal">
						<div class="form-group ">
							<label class="col-md-3 control-label">Unggah File</label>
							<div class="col-md-2">
								<div tabindex="0">
									<span class="form-control btn btn-default" style="width: auto;">
									<div class="d-flex flex-column">
										<div>
											<input multiple="" type="file" autocomplete="off" tabindex="-1" style="display: none;"><span href="#" style="color: rgb(73, 80, 87);">Choose file</span>
										</div>
									</div>
									</span>
								</div>
							</div>
							<div class="row"></div>
						</div>
						<div class="form-group ">
							<label class="col-md-3 control-label">Nama File</label>
							<div class="col-md-8">
								<input disabled="" id="input-filename_dokumen" class="form-control" value=""></div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<div>
						<button data-dismiss="modal" type="button" class="btn btn-danger">Batal</button><button data-dismiss="modal" type="button" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" id="prosesPaket" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
				</div>
				<div class="modal-body">
					<div>
						Apakah anda yakin akan memulai memproses paket? Jika klik OK maka paket akan diproses
					</div>
				</div>
				<div class="modal-footer">
					<div>
						<button data-dismiss="modal" type="button" class="btn btn-secondary">Batal</button><button data-dismiss="modal" type="button" class="btn btn-primary">Ok</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" id="kirimPpk" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
				</div>
				<div class="modal-body">
					<div>
						Apakah anda yakin akan mengirimkan paket ke PPK ?” Jika OK maka data sudah tidak dapat diubah<br></div>
				</div>
				<div class="modal-footer">
					<div>
						<button data-dismiss="modal" type="button" class="btn btn-secondary">Batal</button><button data-dismiss="modal" type="button" class="btn btn-primary">Ok</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" id="prosesPersetujuan" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
				</div>
				<div class="modal-body">
					<input type="text" class="form-control" placeholder="Catatan" value=""></div>
				<div class="modal-footer">
					<div>
						<button data-dismiss="modal" type="button" class="btn btn-secondary">Tutup</button><button data-dismiss="modal" type="button" class="btn btn-danger">Tolak</button><button data-dismiss="modal" type="button" class="btn btn-primary">Setuju</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" id="batalPaketDirect" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel">Persetujuan Pembatalan Paket</h4>
				</div>
				<div class="modal-body">
					<div>
						Apakah anda yakin akan membatalkan paket yang sedang diproses ? Jika OK maka paket akan batal<br>
						<br>
						<textarea class="form-control" placeholder="Catatan"></textarea>
						<p>
							*Isi min 20 karakter
						</p>
					</div>
				</div>
				<div class="modal-footer">
					<div>
						<button data-dismiss="modal" type="button" class="btn btn-secondary">Batal</button><button data-dismiss="modal" disabled="" type="button" class="btn btn-primary">Ok</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" id="selesaikanPaket" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel">Form Penilaian Penyedia</h4>
				</div>
				<div class="modal-body">
					<div>
						<div class="row">
							<div class="col-lg-12">
								<p>
									Berikan rating terhadap penyedia yang memproses pembelian paket ini.
								</p>
								<form id="" action="">
									<div class="form-group error">
										<label class="col-md-12 control-label">Akurasi Produk</label>
										<div class="col-md-12">
											<em>Apakah produk yang tiba sesuai dengan produk yang dipesan? Bagaimana kualitas produk yang tiba? Apakah dalam keadaan baik?</em>
										</div>
										<div class="col-md-12">
											<div class="order-rating" style="color: rgb(240, 173, 78);">
												<span class="fa fa-star-o star-rating" data-rating="1"></span><span class="fa fa-star-o star-rating" data-rating="2"></span><span class="fa fa-star-o star-rating" data-rating="3"></span><span class="fa fa-star-o star-rating" data-rating="5"></span>
											</div>
										</div>
									</div>
									<div class="form-group error">
										<label class="col-md-12 control-label">Pelayanan</label>
										<div class="col-md-12">
											<em>Respon penyedia selama proses pembelian paket.</em>
										</div>
										<div class="col-md-12">
											<div class="responsive-rating" style="color: rgb(240, 173, 78);">
												<span class="fa fa-star-o star-rating" data-rating="1"></span><span class="fa fa-star-o star-rating" data-rating="2"></span><span class="fa fa-star-o star-rating" data-rating="3"></span><span class="fa fa-star-o star-rating" data-rating="5"></span>
											</div>
										</div>
									</div>
									<div class="form-group error">
										<label class="col-md-12 control-label">Kecepatan Pengiriman</label>
										<div class="col-md-12">
											<em>Sejak PPK menyetujui pembelian sampai produk tiba ditujuan. Mohon dipertimbangkan dengan bijaksana terkait jarak tempuh,rute pengiriman, bencana alam, dan kondisi-kondisi lainnya yang dapat mempengaruhi pengiriman.</em>
										</div>
										<div class="col-md-12">
											<div class="responsive-rating" style="color: rgb(240, 173, 78);">
												<span class="fa fa-star-o star-rating" data-rating="1"></span><span class="fa fa-star-o star-rating" data-rating="2"></span><span class="fa fa-star-o star-rating" data-rating="3"></span><span class="fa fa-star-o star-rating" data-rating="5"></span>
											</div>
										</div>
									</div>
									<div class="form-group error">
										<label class="col-md-12 control-label">Pesan Tambahan</label>
										<div class="col-md-12">
											<input type="text" class="form-control" placeholder="" value=""></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div>
						<button data-dismiss="modal" type="button" class="btn btn-secondary">Tutup</button><button data-dismiss="modal" type="button" class="btn btn-primary">Selesai</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" id="ratingPenyedia" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel">Form Penilaian Penyedia</h4>
				</div>
				<div class="modal-body">
					<div>
						<div class="row">
							<div class="col-lg-12">
								<p>
									Berikan rating terhadap penyedia yang memproses pembelian paket ini.
								</p>
								<form id="" action="">
									<div class="form-group error">
										<label class="col-md-12 control-label">Akurasi Produk</label>
										<div class="col-md-12">
											<em>Apakah produk yang tiba sesuai dengan produk yang dipesan? Bagaimana kualitas produk yang tiba? Apakah dalam keadaan baik?</em>
										</div>
										<div class="col-md-12">
											<div class="order-rating" style="color: rgb(240, 173, 78);">
												<span class="fa fa-star-o star-rating" data-rating="1"></span><span class="fa fa-star-o star-rating" data-rating="2"></span><span class="fa fa-star-o star-rating" data-rating="3"></span><span class="fa fa-star-o star-rating" data-rating="5"></span>
											</div>
										</div>
									</div>
									<div class="form-group error">
										<label class="col-md-12 control-label">Pelayanan</label>
										<div class="col-md-12">
											<em>Respon penyedia selama proses pembelian paket.</em>
										</div>
										<div class="col-md-12">
											<div class="responsive-rating" style="color: rgb(240, 173, 78);">
												<span class="fa fa-star-o star-rating" data-rating="1"></span><span class="fa fa-star-o star-rating" data-rating="2"></span><span class="fa fa-star-o star-rating" data-rating="3"></span><span class="fa fa-star-o star-rating" data-rating="5"></span>
											</div>
										</div>
									</div>
									<div class="form-group error">
										<label class="col-md-12 control-label">Kecepatan Pengiriman</label>
										<div class="col-md-12">
											<em>Sejak PPK menyetujui pembelian sampai produk tiba ditujuan. Mohon dipertimbangkan dengan bijaksana terkait jarak tempuh,rute pengiriman, bencana alam, dan kondisi-kondisi lainnya yang dapat mempengaruhi pengiriman.</em>
										</div>
										<div class="col-md-12">
											<div class="responsive-rating" style="color: rgb(240, 173, 78);">
												<span class="fa fa-star-o star-rating" data-rating="1"></span><span class="fa fa-star-o star-rating" data-rating="2"></span><span class="fa fa-star-o star-rating" data-rating="3"></span><span class="fa fa-star-o star-rating" data-rating="5"></span>
											</div>
										</div>
									</div>
									<div class="form-group error">
										<label class="col-md-12 control-label">Pesan Tambahan</label>
										<div class="col-md-12">
											<input type="text" class="form-control" placeholder="" value=""></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div>
						<button data-dismiss="modal" type="button" class="btn btn-secondary">Tutup</button><button data-dismiss="modal" type="button" class="btn btn-primary">Selesai</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" id="ratingPpk" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel">Form Penilaian Ppk</h4>
				</div>
				<div class="modal-body">
					<div>
						<div class="row">
							<div class="col-lg-12">
								<p>
									Berikan rating terhadap PPK yang memproses pembelian paket ini.
								</p>
								<form id="" action="">
									<div class="form-group error">
										<label class="col-md-12 control-label">Kecepatan Pembayaran</label>
										<div class="col-md-12">
											<em>Sejak penerimaan dan klausul pembayaran yang tertuang dalam Surat Pesanan.</em>
										</div>
										<div class="col-md-12">
											<div class="payment-rating" style="color: rgb(240, 173, 78);">
												<span class="fa fa-star-o star-rating" data-rating="1"></span><span class="fa fa-star-o star-rating" data-rating="2"></span><span class="fa fa-star-o star-rating" data-rating="3"></span><span class="fa fa-star-o star-rating" data-rating="5"></span>
											</div>
										</div>
									</div>
									<div class="form-group error">
										<label class="col-md-12 control-label">Penerbitan Surat Pesanan</label>
										<div class="col-md-12">
											<em>Sejak paket disetujui hingga pesanan ditandatangani kedua belah pihak dan diunggah dalam Katalog Elektronik.</em>
										</div>
										<div class="col-md-12">
											<div class="order-rating" style="color: rgb(240, 173, 78);">
												<span class="fa fa-star-o star-rating" data-rating="1"></span><span class="fa fa-star-o star-rating" data-rating="2"></span><span class="fa fa-star-o star-rating" data-rating="3"></span><span class="fa fa-star-o star-rating" data-rating="5"></span>
											</div>
										</div>
									</div>
									<div class="form-group error">
										<label class="col-md-12 control-label">Responsif</label>
										<div class="col-md-12">
											<em>Bagaimana respon PPK selama pembelian paket?</em>
										</div>
										<div class="col-md-12">
											<div class="responsive-rating" style="color: rgb(240, 173, 78);">
												<span class="fa fa-star-o star-rating" data-rating="1"></span><span class="fa fa-star-o star-rating" data-rating="2"></span><span class="fa fa-star-o star-rating" data-rating="3"></span><span class="fa fa-star-o star-rating" data-rating="5"></span>
											</div>
										</div>
									</div>
									<div class="form-group error">
										<label class="col-md-12 control-label">Pesan Tambahan</label>
										<div class="col-md-12">
											<input type="text" class="form-control" placeholder="" value=""></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div>
						<button data-dismiss="modal" type="button" class="btn btn-secondary">Tutup</button><button data-dismiss="modal" type="button" class="btn btn-primary">Selesai</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" id="pilihMetodePembayaran" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel">Pembayaran</h4>
				</div>
				<div class="modal-body">
					<div>
						<div class="row">
							<div class="col">
								<h5 style="font-weight: bold;">Pilih Metode Pembayaran</h5>
							</div>
							<div class="col">
								<button class="radio-button">
								<div>
									<input type="radio" name="jenisUsaha" id="jenis-usaha-1" checked="">Metode Pembayaran Reguler</div>
								</button>
							</div>
							<div class="col">
								<button class="radio-button">
								<div>
									<input type="radio" name="jenisUsaha" id="jenis-usaha-2"> Kartu Kredit Indonesia / Kartu Kredit Pemerintah Domestik (KKI/KKPD)
								</div>
								</button>
							</div>
							<div class="col" style="border-top: 1px solid rgb(229, 229, 229);">
								<h5 style="font-weight: bold;">Ringkasan Pembayaran</h5>
								<div class="row">
									<div class="col-sm-6" style="padding: 0px;">
										<h6>Total Harga Paket</h6>
									</div>
									<div class="col-sm-6" style="padding: 0px;">
										<h6 style="text-align: right;"><div style="padding-left: 0px;">Rp&nbsp;143.800.000,00</div></h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary-new" data-dismiss="modal">Bayar</button>
				</div>
			</div>
		</div>
	</div>
	<div class="row hide">
		<div class="col-md-12">
			<p class="bg-danger text-danger" style="padding-left: 2rem;">
				<i class="fa fa-info-circle"></i> Status daftar hitam penyedia aktif, produk tidak dapat dibeli sehingga paket tidak dapat dilanjutkan. Silahkan lakukan pembatalan paket.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="toolbar">
				<a href="/v2/purchasing/paket" class="btn btn-default" style="margin-right: 1rem;"><i aria-hidden="true" class="fa fa-arrow-circle-left"></i> Daftar Paket</a><button class="btn btn-sm btn-warning" style="margin-right: 1rem;" onclick="window.location='{{ url("/downIoad3") }}'">Cetak Detail Paket</button><a href="/v2/id/purchasing/paket/8288704/daftar-produk" class="btn btn-sm btn-warning" style="margin-right: 1rem;">Daftar Produk</a><button class="btn btn-sm btn-warning" style="margin-right: 1rem;">Proses Negosiasi</button><a href="/v2/id/purchasing/paket/8288704/tetapkan-distributor" class="btn btn-sm btn-warning" style="margin-right: 1rem;">Menetapkan Distributor</a><a href="/v2/id/purchasing/paket/8288704/daftar-kontrak" class="btn btn-sm btn-warning" style="margin-right: 1rem;">Daftar Kontrak</a><a href="/v2/id/purchasing/paket/8288704/riwayat-pengiriman-penerimaan" class="btn btn-primary" style="margin-right: 1rem;">Riwayat Pengiriman &amp; Penerimaan</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="detail-wrapper">
			<div class="row">
				<div class="detail-header detail-paket-header">
					<div class="col-md-5">
						<h5>Detail Paket BEJ-P2312-8288704</h5>
					</div>
					<div class="col-md-7">
						<ul class="nav nav-pills">
							<li class="active">
								<a href="#" class="btn-circle">1</a><span>Inisialisasi</span>
							</li>
							<li class="active">
								<a href="#" class="btn-circle">2</a><span>Proses</span>
							</li>
							<li class="active">
								<a href="#" class="btn-circle">3</a><span>Pengiriman</span>
							</li>
							<li class="">
								<a href="#" class="btn-circle">4</a><span>Selesai</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="detail-body">
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-body" style="overflow-x: auto;">
								<ul class="nav nav-tabs tab-detil-produk" role="tablist">
									<li role="presentation" class="active">
										<a href="#informasi-utama" aria-controls="informasi-utama" role="tab" data-toggle="tab">Informasi Utama</a>
									</li>
									<li role="presentation" class="" hidden="">
										<a href="#dokumen-persiapan" aria-controls="dokumen-persiapan" role="tab" data-toggle="tab">Dokumentasi Persiapan</a>
									</li>
									<li role="presentation" class="">
										<a href="#pp-ppk" aria-controls="pp-ppk" role="tab" data-toggle="tab">Pemesan &amp; PPK</a>
									</li>
									<li role="presentation" class="">
										<a href="#penyedia-distributor" aria-controls="penyedia-distributor" role="tab" data-toggle="tab">Penyedia dan Distributor/Reseller/Pelaksana Pekerjaan/Pengirim Barang</a>
									</li>
									<li role="presentation" class="">
										<a href="#sumber-dana" aria-controls="sumber-dana" role="tab" data-toggle="tab">Sumber Dana</a>
									</li>
									<li role="presentation" class="">
										<a href="#diskusi-paket" aria-controls="diskusi-paket" role="tab" data-toggle="tab">Diskusi</a>
									</li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="informasi-utama">
										<div role="tabpanel" class="tab-pane active">
											<div class="detail-list">
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Etalase Produk</div>
														<div class="detail-description col-md-8">BARANG BANTUAN KELUARGA KEMENSOS (FAMILY KIT)</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">ID Paket</div>
														<div class="detail-description col-md-8">2824200999-KD-186134717</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Jenis Paket</div>
														<div class="detail-description col-md-8">Purchasing</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">ID RUP</div>
														<div class="detail-description col-md-8">46689185</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Produk Wilayah</div>
														<div class="detail-description col-md-8">Jawa Barat</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Nama Paket</div>
														<div class="detail-description col-md-8">Pekerjaan Belanja Penyediaan Bahan Bufferstok Kebencanaan Barang Bantuan Keluarga (Family Kit) Tahun 2024</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Pagu Anggaran</div>
														<div class="detail-description col-md-8">
															<div style="padding-left: 0px;">Rp&nbsp;14.000.000.000,00</div>
														</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Instansi</div>
														<div class="detail-description col-md-8">Kementerian Sosial R.I</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Satuan Kerja</div>
														<div class="detail-description col-md-8">Sentra Terpadu Inten Suweno Di Bogor</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">NPWP Satuan Kerja</div>
														<div class="detail-description col-md-8">61.183.406.0-421000</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Alamat Satuan Kerja</div>
														<div class="detail-description col-md-8">
															-Jl. SKB No.19 Karadenan, Bogor, Jawa Barat
														</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Alamat Pengiriman</div>
														<div class="detail-description col-md-8">
															-Jl. SKB No.19 Karadenan, Bogor, Jawa Barat
														</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Tanggal Dibuat</div>
														<div class="detail-description col-md-8">08 Januari 2024</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Tanggal Diubah</div>
														<div class="detail-description col-md-8">08 Januari 2024</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Tahun Anggaran</div>
														<div class="detail-description col-md-8">2024</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Total Produk</div>
														<div class="detail-description col-md-8">15000</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Total Harga</div>
														<div class="detail-description col-md-8">
															<div style="padding-left: 0px;">Rp&nbsp;12.622.500.000,00</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="dokumen-persiapan">
										<div role="tabpanel" class="tab-pane active">
											<div>
												<h4 style="text-align: center;">Dokumen Persiapan Purchasing Tidak Ada</h4>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="pp-ppk">
										<div role="tabpanel" class="tab-pane active">
											<h5>PP/Pemesan</h5>
											<div class="detail-list">
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Nama</div>
														<div class="detail-description col-md-8">Henry Hizkia</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Jabatan</div>
														<div class="detail-description col-md-8">PPK</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">NIP</div>
														<div class="detail-description col-md-8">197212312006041000</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Email</div>
														<div class="detail-description col-md-8">henry.hizkia@kemsos.go.id</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">No. Telp</div>
														<div class="detail-description col-md-8">6285216389837</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">No. Sertifikat PBJ</div>
														<div class="detail-description col-md-8"></div>
													</div>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane">
											<h5>PPK/Pembeli</h5>
											<div class="detail-list">
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Nama</div>
														<div class="detail-description col-md-8">Henry Hizkia</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Jabatan</div>
														<div class="detail-description col-md-8">PPK</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">NIP</div>
														<div class="detail-description col-md-8">198-50313-2009-121-001</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">Email</div>
														<div class="detail-description col-md-8">henry.hizkia@kemsos.go.id</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">No. Telp</div>
														<div class="detail-description col-md-8">6285216389837</div>
													</div>
												</div>
												<div class="detail-item">
													<div class="row">
														<div class="detail-heading col-md-4">No. Sertifikat PBJ</div>
														<div class="detail-description col-md-8"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="penyedia-distributor">
										<div role="tabpanel" class="tab-pane active">
											<div>
												<h5>Penyedia</h5>
												<div class="detail-list">
													<div class="detail-item">
														<div class="row">
															<div class="detail-heading col-md-4">Nama</div>
															<div class="detail-description col-md-8">
																<a href="/v2/id/purchasing/paket/8288704/info-penyedia/1006101">PT. Adilawe Apin Tawa</a>
															</div>
														</div>
													</div>
													<div class="detail-item">
														<div class="row">
															<div class="detail-heading col-md-4">NPWP</div>
															<div class="detail-description col-md-8">84.235.164.5-043.000</div>
														</div>
													</div>
													<div class="detail-item">
														<div class="row">
															<div class="detail-heading col-md-4">Alamat</div>
															<div class="detail-description col-md-8">
																Gedung Graha MIR Lt. 6 Zona A1 Jl. Pemuda No. 09 RT 01/ RW 03, Kelurahan Rawamangun, Kecamatan Pulogadung, Kota Jakarta Timur, DKI Jakarta 13220
															</div>
														</div>
													</div>
													<div class="detail-item">
														<div class="row">
															<div class="detail-heading col-md-4">Situs Web</div>
															<div class="detail-description col-md-8"></div>
														</div>
													</div>
													<div class="detail-item">
														<div class="row">
															<div class="detail-heading col-md-4">Email</div>
															<div class="detail-description col-md-8">ptadilaweapintawa.lpse@gmail.com</div>
														</div>
													</div>
													<div class="detail-item">
														<div class="row">
															<div class="detail-heading col-md-4">No. Telp</div>
															<div class="detail-description col-md-8">02122321146</div>
														</div>
													</div>
													<div class="detail-item">
														<div class="row">
															<div class="detail-heading col-md-4">Fax</div>
															<div class="detail-description col-md-8">02122321146</div>
														</div>
													</div>
												</div>
												<h5>Distributor/Reseller/Pelaksana Pekerjaan/Pengirim Barang</h5>
												<div class="detail-list">
													<div class="detail-item">
														<div class="row">
															<div class="detail-heading col-md-4">Nama</div>
															<div class="detail-description col-md-8">
																<a href="/v2/id/purchasing/paket/8288704/info-distributor/1121571">PT. Sinarmas Karyatama Abadi</a>
															</div>
														</div>
													</div>
													<div class="detail-item">
														<div class="row">
															<div class="detail-heading col-md-4">NPWP</div>
															<div class="detail-description col-md-8">84.235.164.5-043.000</div>
														</div>
													</div>
													<div class="detail-item">
														<div class="row">
															<div class="detail-heading col-md-4">Alamat</div>
															<div class="detail-description col-md-8">
																PT. Sinarmas Karyatama Abadi Jalan Serdang Baru, Kel. Serdang, Kec. Kemayoran Kota Jakarta Pusat, DKI Jakarta 10650
															</div>
														</div>
													</div>
													<div class="detail-item">
														<div class="row">
															<div class="detail-heading col-md-4">Situs Web</div>
															<div class="detail-description col-md-8"></div>
														</div>
													</div>
													<div class="detail-item">
														<div class="row">
															<div class="detail-heading col-md-4">Email</div>
															<div class="detail-description col-md-8">sinarmaskaryatamaabadi@gmail.com</div>
														</div>
													</div>
													<div class="detail-item">
														<div class="row">
															<div class="detail-heading col-md-4">No. Telp</div>
															<div class="detail-description col-md-8">081999043414</div>
														</div>
													</div>
													<div class="detail-item">
														<div class="row">
															<div class="detail-heading col-md-4">Fax</div>
															<div class="detail-description col-md-8">081999043414</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="sumber-dana">
										<div role="tabpanel" class="tab-pane active">
											<div class="panel panel-default">
												<div class="panel-body">
													<div class="panel-heading">
														<div class="title"></div>
													</div>
													<div class="panel-group">
														<div class="detail-item">
															<div class="row">
																<div class="detail-heading col-md-4">Sumber Anggaran</div>
																<div class="detail-description col-md-4">APBN 2024</div>
															</div>
														</div>
														<div class="detail-item">
															<div class="row">
																<div class="detail-heading col-md-4">APBN</div>
																<div class="detail-description col-md-4">WA.6299.EBC.999.001.QC.576112</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="diskusi-paket">
										<div role="tabpanel" class="tab-pane active">
											<div class="panel panel-default">
												<div class="panel-body" style="margin: 3rem;">
													<div class="detail-list">
														<!--<div class="detail-item">
															<div class="panel-group">
																<div class="panel panel-default">
																	<div class="panel panel-heading">
																		<div class="row">
																			<div class="col-md-1" align="left">
																				<img alt="E-Katalog LKPP" class="img-responsive" src="{{ URL::to('/image/icon-chat-list.png') }}" style="height: 35px; width: 35px;">
																			</div>
																			<div class="col-md-8">
																				<p>
																					<strong>Udi Hartadi</strong>
																				</p>
																				<div class="collapse-comment" data-toggle="collapse" data-parent="#accordion" style="text-decoration: none;">
																					apakah instalasi pemasangan cctv dapat dilaksanakan secepatnya??<br>
																					<br>
																					<a aria-hidden="true" class="fa fa-toggle-right fa-lg" style="cursor: pointer;"></a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>-->
														<div class="panel-group" style="margin-top: 2rem;">
															<div class="col-md-12">
																<div class="input-group">
																	<textarea id="comment-text-diskusi" name="comment_textarea" class="form-control" placeholder="Apa yang ingin anda tanyakan mengenai produk ini?" style="height: 35px; resize: vertical;"></textarea><input type="hidden" name="user_penerima" class="user_penerima" id="user_penerima" value=""><a data-toggle="modal" data-target="#unggahFile" class="input-group-addon"><span class="fa fa-paperclip"></span></a><a class="input-group-addon" style="cursor: pointer;"><span class="fa fa-send"></span></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-body" style="overflow-x: auto;">
								<h5>Harga Negosiasi</h5>
								<div class="detail-list">
									<div class="detail-item">
										<div class="row">
											<div class="detail-heading col-md-2">Revisi</div>
											<div class="detail-heading col-md-6">Oleh</div>
											<div class="detail-heading col-md-3">Total Harga (IDR)</div>
											<div class="detail-heading col-md-1">
												<i aria-hidden="true" class="fa fa-check-circle"></i><i aria-hidden="true" class="fa fa-check-circle-o"></i>
											</div>
										</div>
									</div>
									<div class="detail-item">
										<div class="row">
											<div class="detail-description col-md-2">Harga Awal</div>
											<div class="detail-description col-md-6">Henry Hizkia</div>
											<div class="detail-description col-md-3">
												<div style="padding-left: 0px;">Rp&nbsp;900.000,00</div>
											</div>
											<div class="detail-description col-md-1"></div>
										</div>
									</div>
									<div class="detail-item">
										<div class="row">
											<div class="detail-description col-md-2">Rev. 1</div>
											<div class="detail-description col-md-6">Henry Hizkia</div>
											<div class="detail-description col-md-3">
												<div style="padding-left: 0px;">Rp&nbsp;650.000,00</div>
											</div>
											<div class="detail-description col-md-1">
												<i class="fa fa-check-circle-o"></i>
											</div>
										</div>
									</div>
									<div class="detail-item">
										<div class="row">
											<div class="detail-description col-md-2">Rev. 2</div>
											<div class="detail-description col-md-6">PT. Adilawe Apin Tawa</div>
											<div class="detail-description col-md-3">
												<div style="padding-left: 0px;">Rp&nbsp;850.000,00</div>
											</div>
											<div class="detail-description col-md-1">
												<i class="fa fa-check-circle"></i>
											</div>
										</div>
									</div>
									<div class="detail-item">
										<div class="row">
											<div class="detail-description col-md-2">Rev. 3</div>
											<div class="detail-description col-md-6">Henry Hizkia</div>
											<div class="detail-description col-md-3">
												<div style="padding-left: 0px;">Rp&nbsp;700.000,00</div>
											</div>
											<div class="detail-description col-md-1">
												<i class="fa fa-check-circle-o"></i>
											</div>
										</div>
									</div>
									<div class="detail-item">
										<div class="row">
											<div class="detail-description col-md-2">Rev. 4</div>
											<div class="detail-description col-md-6">PT. Adilawe Apin Tawa</div>
											<div class="detail-description col-md-3">
												<div style="padding-left: 0px;">Rp&nbsp;820.000,00</div>
											</div>
											<div class="detail-description col-md-1">
												<i class="fa fa-check-circle"></i>
											</div>
										</div>
									</div>
									<div class="detail-item">
										<div class="row">
											<div class="detail-description col-md-2">Rev. 5</div>
											<div class="detail-description col-md-6">Henry Hizkia</div>
											<div class="detail-description col-md-3">
												<div style="padding-left: 0px;">Rp&nbsp;780.000,00</div>
											</div>
											<div class="detail-description col-md-1">
												<i class="fa fa-check-circle"></i><i class="fa fa-check-circle-o"></i>
											</div>
										</div>
									</div>
								</div>
								<a href="/v2/id/purchasing/paket/riwayat-negosiasi-produk/8288704" class="btn btn-sm btn-primary">Riwayat Negosiasi</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-body" style="overflow-x: auto;">
								<h5>Status</h5>
								<div class="detail-list">
									<div class="detail-item">
										<div class="row">
											<div class="detail-heading col-md-4">Status</div>
											<div class="detail-description col-md-8">Melakukan pengiriman dan penerimaan</div>
										</div>
									</div>
									<div class="detail-item">
										<div class="row">
											<div class="detail-heading col-md-4">Posisi Paket</div>
											<div class="detail-description col-md-8">distributor</div>
										</div>
									</div>
								</div>
								<a href="/v2/id/purchasing/paket/riwayat/8288704" class="btn btn-sm btn-block btn-primary">Riwayat Paket</a>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-body" style="overflow-x: auto;">
								<div class="detail-list">
									<div class="detail-item">
										<div class="row">
											<div class="detail-heading col-md-8">Total Produk</div>
											<div class="detail-description col-md-4">15000</div>
										</div>
									</div>
									<div class="detail-item">
										<div class="row">
											<div class="detail-heading col-md-8">
												Jumlah Produk yang sudah lengkap diterima (berdasarkan penyelesaian penerimaan produk)
											</div>
											<div class="detail-description col-md-4">0</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-body" style="overflow-x: auto;">
								<h5>Status Negosiasi</h5>
								<div class="detail-list">
									<div class="detail-item">
										<div class="row">
											<div class="detail-heading col-md-4">Pemesan</div>
											<div class="detail-description col-md-8">Disetujui 08 Januari 2024</div>
										</div>
									</div>
									<div class="detail-item">
										<div class="row">
											<div class="detail-heading col-md-4">Penyedia</div>
											<div class="detail-description col-md-8">Disetujui 08 Januari 2024</div>
										</div>
									</div>
									<div class="detail-item">
										<div class="row">
											<div class="detail-heading col-md-4">Notifikasi penyedia</div>
											<div class="detail-description col-md-8">PT. Adilawe Apin Tawa</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div style="position: fixed; z-index: 9999; inset: 16px; pointer-events: none;"></div>
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
				<div style="display: none">VERSION: V5.0:202401101639</div>
   			</div>
   			<!-- End Footer -->
    	</div>

        <!-- Modal -->
        <div class="modal fade" id="listBasketModal" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabelKeranjang">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabelKeranjang">Keranjang Belanja</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                </div>
            </div>
        </div>

		

        <script src="{{ asset('javascripts/jquery-1.12.1.min.js') }}" type="text/javascript"> </script>
        <script src="{{ asset('paket/jrs/bundle.js') }}?v=2023.24.2" type="text/javascript"> </script>
        <script src="{{ asset('javascripts/jquery-ui.min.js') }}"></script>
		<script src="{{ asset('javascripts/bootstrap-datatables-v2.min.js') }}" type="text/javascript"> </script>
<!--		<script src="https://code.jquery.com/jquery-1.12.1.min.js" type="text/javascript"> </script>-->
<!--		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>-->
<!--		<script src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js" type="text/javascript"> </script>-->

        <script src="{{ asset('javascripts/bootstrap.min.js') }}" type="text/javascript"> </script>
        <script src="{{ asset('javascripts/jquery.bootstrap.wizard.min.js') }}" type="text/javascript"> </script>
		<!--		<script src="https://unpkg.com/jquery@3.3.1/dist/jquery.js"></script>-->
	    	    <script src="{{ asset('aftlogin/javascripts/datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"> </script>
	    <script src="{{ asset('aftlogin/javascripts/datepicker/locales/bootstrap-datepicker.id.min.js') }}" type="text/javascript"> </script>
	    <script src="{{ asset('aftlogin/javascripts/select2/js/select2.full.min.js') }}" type="text/javascript"> </script>
	    <script src="{{ asset('aftlogin/javascripts/select2/js/i18n/id.js') }}"> </script>
        <script src="{{ asset('aftlogin/javascripts/js-xlsx/jszip.min.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('aftlogin/javascripts/js-xlsx/xlsx.min.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('aftlogin/javascripts/filesaver/FileSaver.min.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('aftlogin/javascripts/blob/Blob.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('aftlogin/javascripts/utility.js') }}" type="text/javascript"> </script>
        <script src="{{ asset('aftlogin/javascripts/sikap-utility.js') }}" type="text/javascript"> </script>
	    <script src="{{ asset('aftlogin/javascripts/moment/min/moment.min.js') }}" type="text/javascript"> </script>
	  	<script src="{{ asset('aftlogin/javascripts/Chart.min.js') }}" type="text/javascript"> </script>
	  	<script src="{{ asset('aftlogin/javascripts/dashboard-data.js') }}" type="text/javascript"> </script>
	    <script src="{{ asset('aftlogin/javascripts/moment/locale/id.js') }}" type="text/javascript"> </script>
	    <script src="{{ asset('aftlogin/javascripts/ekko-lightbox.min.js') }}" type="text/javascript"> </script>
	    <script src="{{ asset('aftlogin/javascripts/sweetalart2/sweetalert2.min.js') }}" type="text/javascript"> </script>
	    <script src="{{ asset('aftlogin/javascripts/fileupload/jquery.fileuploader.min.js') }}" type="text/javascript"> </script>
	    <script src="{{ asset('aftlogin/javascripts/lightgallery/js/lightgallery.min.js') }}" type="text/javascript"> </script>
	    <script src="{{ asset('aftlogin/javascripts/eonasdan/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"> </script>
		<script type="text/javascript" src="{{ asset('aftlogin/javascripts/jquery.ui.widget.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('aftlogin/javascripts/jquery.iframe-transport.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('aftlogin/javascripts/jquery.fileupload.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('aftlogin/javascripts/jquery.fileupload-process.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('aftlogin/javascripts/jquery.fileupload-validate.js') }}"></script>
        <script type="text/javascript" src="{{ asset('aftlogin/javascripts/jquery-tags/jquery.tagsinput.js') }}"></script>
		<script type="text/javascript" src="{{ asset('aftlogin/javascripts/format-currency/jquery.formatCurrency-1.4.0.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('aftlogin/plugin/jquery.loading.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('aftlogin/javascripts/lazy-master/jquery.lazy.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('aftlogin/javascripts/lazy-master/jquery.lazy.plugins.min.js') }}"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>

		

		
        


        <script type="text/javascript">

//            $( "#basketBtn").click(function(e) {
//                e.preventDefault();
//                $('#listBasketModal').modal('show').find('.modal-body').load($(this).attr('href'));
//            });
			$(document).ajaxStart(function(){$.showLoading();});
			$(document).ajaxComplete(function(){$.hideLoading();});
			$(document).ajaxSuccess(function(){$.hideLoading();});
			$(document).ajaxError(function(){$.hideLoading();});

			function submitPolling(polId){
				var polPilih = $("input[name=vote]:checked").val();
				$.ajax({
					url: '/publikctr/submitpolling',
					data: {"polId": polId,"vote": polPilih},
					type: 'POST',
					success: function(res){
						if(res.result == 'ok')
							$('#alert').html('<div class="alert alert-success"><button class="close" data-dismiss="alert" aria-label="Close"><i aria-hidden="true" class="fa fa-close" aria-hidden="true"></i></button>Berhasil melakukan polling</div>').show().fadeOut(3000);
						else if(res.result == 'login')
							$('#alert').html('<div class="alert alert-danger"><button class="close" data-dismiss="alert" aria-label="Close"><i aria-hidden="true" class="fa fa-close" aria-hidden="true"></i></button>Anda harus Login terlebih dahulu</div>').show().fadeOut(3000);
						else if(res.result == 'exist')
							$('#alert').html('<div class="alert alert-danger alert-dismissible"><button class="close" data-dismiss="alert" aria-label="Close"><i aria-hidden="true" class="fa fa-close" aria-hidden="true"></i></button>Anda sudah melakukan polling</div>').show().fadeOut(3000);
						else if(res.result == 'empty')
							$('#alert').html('<div class="alert alert-danger"><button class="close" data-dismiss="alert" aria-label="Close"><i aria-hidden="true" class="fa fa-close" aria-hidden="true"></i></button>Anda belum memilih</div>').show().fadeOut(3000);
						else
							$('#alert').html('<div class="alert alert-danger"><button class="close" data-dismiss="alert" aria-label="Close"><i aria-hidden="true" class="fa fa-close" aria-hidden="true"></i></button>Terjadi Kesalahan, Gagal melakukan polling</div>').show().fadeOut(3000);
					},
					error: function(){
						$('#alert').html('<div class="alert alert-danger"><button class="close" data-dismiss="alert" aria-label="Close"><i aria-hidden="true" class="fa fa-close" aria-hidden="true"></i></button>Terjadi Kesalahan, Gagal melakukan polling</div>').show().fadeOut(3000);
					}
				});
			}
		//bgs-ecatalogue 2018-start
        </script>


		<script type="text/javascript">
        $(document).ready(function(){
            function getEventTarget(e) {
                e = e || window.event;
                return e.target || e.srcElement;
            }

            //ketika diklik
            var ul = document.getElementById('ui-id-1');
            var liclik = document.getElementById('linkcari');
            ul.onclick = function(event) {
                var target = getEventTarget(event);
                var htmlx = ''+target.innerHTML;
                $('#linkcari').append('<div id="linkprod">'+htmlx+'</div>');
                $('#linkcari').trigger('click');
            };

            $('#linkcari').on('click',function (e) {
                var uri = $('#baseurl').val();
                //alert($('#linkprod a').attr('href'));
                window.location.href = uri+$('#linkprod a').attr('href');
            });

            //ketika dienter
            // var li = $('li .ui-menu-item');
            var elink = $('#elink');
            var elinkselect = $('#elinkselect');
		
		
		
            $(window).keydown(function(e){
                var uri = $('#baseurl').val();
                var linkx = null;

                if (e.keyCode == 13 && elink.val()!= '' && elinkselect.val()=="ready") { // enter
                    // console.log("pencet ini "+uri+linkx);
                    window.location.href = uri+elink.val();
                }
                if (e.keyCode == 27 && elink.val()!='') { //esc
                    elink.val('');
                    elinkselect.val('');
                }
                if (e.keyCode == 38) { // up
                    var selected = $(".ui-state-active");
                    linkx = $('#ui-id-1 li.ui-menu-item a.ui-state-active').attr('href');
                    if (!!linkx){
                        elink.val(linkx);
                        elinkselect.val("ready");
                    }else{
                        elinkselect.val("not");
                    }
                    // console.log(linkx+" --- up "+elink.val());
                }
                if (e.keyCode == 40) { // down
                    var selected = $(".ui-state-active");
                    linkx = $('#ui-id-1 li.ui-menu-item a.ui-state-active').attr('href');
                    if (!!linkx){
                        elink.val(linkx);
                        elinkselect.val("ready");
                    }else{
                        elinkselect.val("not");
                    }
                    // console.log(linkx + " --- down "+elink.val());
                }
            });

			// backdate kalender pengiriman paket
            var hari = new Date('');
            var bulan = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];

            var datePengiriman = hari.getFullYear() + ", " + bulan[hari.getMonth()] + ", " + hari.getDate();


            $('#testdatecreate').datepicker({
                startDate: new Date(datePengiriman),
                format: 'dd-mm-yyyy',
                language: 'id'
            })

            // backdate tanggal pengiriman (negosiasi)
            var hari = new Date('');
            var bulan = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];

            var datePengirimanNego = hari.getFullYear() + ", " + bulan[hari.getMonth()] + ", " + hari.getDate();


            $('.batasPengiriman').datepicker({
                startDate: new Date(datePengirimanNego),
                format: 'dd-mm-yyyy',
                language: 'id'
            })

			// comment chat
            // function load_unseen_notification_navbar()
            
                
                
                
                
                    
                        
                        
                    //};
                    
                        
                        
                        
                        
                        
                        
                            
                            
                            
                            
                        //}
                    //});
				//}catch (e) {
					// console.log("error get chat"+e);
				//}
            //}

            
				// console.log("chat is on");

				// load_unseen_notification_navbar();

				// setInterval(function(){
				// 	load_unseen_notification_navbar();
				// }, 5000);

			
			
                // console.log("chat is off");
			

        });
    </script>

				<link rel="stylesheet" media="screen" href="{{ asset('aftlogin/javascripts/conversejsdist/converse.min.css') }}">
		
			<script type="text/javascript" src="{{ asset('aftlogin/javascripts/conversejsdist/converse.min.js') }}" charset="utf-8"></script>
		
		<script type="text/javascript" src="{ asset('paket/emojis.js') }}" charset="utf-8"></script>
		<script type="text/javascript" src="{ asset('paket/jquery.toast.min.js') }}"></script>
		<converse-root></converse-root>
		<script type="text/javascript">

			let isPpk = 'false'
			let isPenyedia = 'true'
			let isPp = 'false'
			let domain = "@chat-e-katalog.lkpp.go.id"
			let boshUrl = "https://chat-e-katalog.lkpp.go.id/http-bind/"
			var otherUser = ""
			let isChatOpen = false;
			let messageLogIn = "Segarkan"
			
			$(".btn-chat").click(function(){
				if (isChatOpen) {
					return
				}
				if (isPenyedia === 'true' || isPpk === 'true' || isPp === 'true'){
					$.ajax({
						url: '/admin.userctr/validateuseropenfire',
						type: 'GET',
						success: function(res){
							let userOpenfire = 'INDIDAYANUSAREKA_1'
							converse.initialize({
								authentication: 'login',
								auto_login: true,
								allow_logout:false,
								show_client_info:false,
								allow_non_roster_messaging: true,
								allow_contact_removal: true,
								allow_chat_pending_contacts: true,
								allow_contact_requests: false,
								allow_adhoc_commands: false,
								show_controlbox_by_default: false,
								muc_show_join_leave: false,
								show_message_avatar: false,
								auto_join_on_invite: true,
								jid: userOpenfire + domain,
								password: userOpenfire,
								auto_away: 30,
								auto_xa: 60,
								auto_reconnect: true,
								bosh_service_url: boshUrl,
								message_archiving: 'always',
								view_mode: 'overlayed',
								autocomplete_add_contact: true,
								singleton:false,
								visible_toolbar_buttons:{
									call: false,
									spoiler: true,
									emoji: true,
									toggle_occupants: true
								},
								blacklisted_plugins: [
									'converse-profile',
									'converse-register',
									'converse-roomslist',
								],
							});
							isChatOpen = true
						},
						error: function(){
							jQuery.toast({
								heading: 'Oops',
								text: 'Mohon maaf, terjadi kesalahan.',
								position: 'bottom-center',
								stack: false,
								icon: 'error',
								hideAfter: 6000
							});
						}
					});
				}
				if (isPpk === 'true' || isPp === 'true'){
					jQuery(document).ready(function($) {
						if( $.fn.dataTable.isDataTable('#tblDafarPenyedia')){
							$("#tblDafarPenyedia").dataTable().fnDestroy();
						}
						$("#tblDafarPenyedia").dataTable({
							"lengthMenu": [ [10, 25, 50, 100], [10, 25, 50, 100] ],
							ajax : {
								url : "/datatablectr/listallpenyedia",
								cache : false,
							},
							order : [ [ 0, "asc" ] ],
							columns : [ {
								"searchable" : false, "className": "header-center",
								render : function(data, type, row, meta) {
									return meta.row + meta.settings._iDisplayStart + 1 + ".";
								}
							}, {
								"searchable" : true
							}, {
								"searchable" : true
							}, {
								"searchable" : false, "className": "header-center"
							} ]
						});
					});
				}

				jQuery('#cariPenyedia').modal('show');
			});

			$(document).on("click", "#btnpilihPenyedia", function() {
				let id = $('input[name=pilihIdUser]:checked', '#cariPenyedia').val();
				if (id == null || id === ""){
					jQuery.toast({
						heading: 'Oops',
						text: 'Silakan pilih penyedia terlebih dahulu!',
						position: 'bottom-center',
						stack: false,
						icon: 'error',
						hideAfter: 6000
					});
				} else {
					jQuery('#cariPenyedia').modal('hide');
					$.ajax({
						url: '/admin.userctr/findbyid',
						data: {"id": id},
						type: 'GET',
						success: function(res){
							if (res != null && res.username_openfire != null){
								otherUser = res.username_openfire + domain
								window.sessionStorage.setItem("otherUserOpenfire", otherUser)
								location.reload()
							}
						},
						error: function(){
							jQuery.toast({
								heading: 'Oops',
								text: 'Mohon maaf, terjadi kesalahan.',
								position: 'bottom-center',
								stack: false,
								icon: 'error',
								hideAfter: 6000
							});
						}
					});
				}
			});

			if ((isPpk === 'true' || isPp === 'true')
					&& window.sessionStorage.getItem("otherUserOpenfire") != null
					&& window.sessionStorage.getItem("otherUserOpenfire") !== ""){

				otherUser = window.sessionStorage.getItem("otherUserOpenfire")
				window.sessionStorage.setItem("otherUserOpenfire", "")
				let userOpenfire = 'INDIDAYANUSAREKA_1'
				converse.initialize({
					authentication: 'login',
					auto_login: true,
					allow_logout:false,
					show_client_info:false,
					allow_non_roster_messaging: true,
					allow_contact_removal: true,
					allow_chat_pending_contacts: true,
					allow_contact_requests: false,
					allow_adhoc_commands: false,
					show_controlbox_by_default: false,
					muc_show_join_leave: false,
					show_message_avatar: false,
					auto_join_on_invite: true,
					jid: userOpenfire + domain,
					password: userOpenfire,
					auto_away: 30,
					auto_xa: 60,
					auto_reconnect: true,
					bosh_service_url: boshUrl,
					message_archiving: 'always',
					view_mode: 'overlayed',
					autocomplete_add_contact: true,
					singleton:false,
					auto_join_private_chats: [
						otherUser
					],
					visible_toolbar_buttons:{
						call: false,
						spoiler: true,
						emoji: true,
						toggle_occupants: true
					},
					blacklisted_plugins: [
						'converse-profile',
						'converse-register',
						'converse-roomslist',
					],
				});
			}

			$("body").on("click", function() {
				setTimeout(() => {
					$('input[value="Log in"]').each(function () {
						if ($(this).val() == "Log in") {
							$(this).val(messageLogIn)
						};
					});
				}, "1000");
			});
		</script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8452137cef129faa","version":"2023.10.0","token":"abed2acbc5e94e58a6f266a2f51452e8"}' crossorigin="anonymous"></script>
</body>
</html>