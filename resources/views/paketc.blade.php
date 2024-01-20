<!DOCTYPE html>

<html lang="id">
    <head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<title id="dynamicTitle">E-Katalog 5.0</title>
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
		

	
<style type="text/css">
    .ui.ui.ui.label.blue {
        border-color: transparent;
        border-radius: 100%;
        color: #fff;
        background-color: rgba(33, 133, 208, 0.8);
        font-size: 12px;
    }
</style>

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

		
		window.sessionStorage.setItem("aktifUser", "{&quot;user_id&quot;:472648531,&quot;role_basic_name&quot;:&quot;penyedia&quot;,&quot;nama_lengkap&quot;:&quot;PT ADILAWE APIN TAWA&quot;,&quot;email&quot;:&quot;ptadilaweapintawa.lpse@gmail.com&quot;,&quot;jabatan&quot;:&quot;&quot;,&quot;no_sert_pbj&quot;:&quot;&quot;,&quot;nip&quot;:&quot;&quot;,&quot;no_tlp&quot;:&quot;&quot;,&quot;is_panitia_pp&quot;:false}");
		if (window.sessionStorage.getItem("jt") === null || window.sessionStorage.getItem("jt") === "")
			window.sessionStorage.setItem("jt", "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0NzI2NDg1MzEsInNlc3Npb25faWQiOiJlMTJiNDc0Yi05NzIxLTQzNmQtYjM1Zi1iOGU5ZTRlMmFkZWUiLCJleHAiOjE3MDUxNzk3NzF9.uuMmdMwKFSE-YLEBY4qZfZ9CvgwOgrnE0cSnRyZwe_0");
		window.sessionStorage.setItem("bhost", "https://e-purchasing.lkpp.go.id/api/v2")
		

		
		window.sessionStorage.setItem("lang", "id")
		
		window.sessionStorage.setItem("backUrl", "/v2/purchasing/paket")
		
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
	<input type="hidden" name="authenticityToken" value="fd0510feff2c1cc8e5495c52ba92cd9259619845"/>

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
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="white-space: nowrap;overflow:hidden;text-overflow:ellipsis;max-width: 120px;"><i aria-hidden="true" class="fa fa-user"></i> PT ADILAWE APIN TAWA <span class="caret"></span></a>
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
   				
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">

            <h4>Daftar Paket</h4>
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button id="buttonToggleBpmn" class="btn btn-link" data-toggle="collapse"
                                    data-target="#collapsable-canvas">
                                Tampilkan BPMN
                            </button>
                        </h5>
                    </div>
                </div>

                <div id="collapsable-canvas" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div id="canvas" style="height: 400px; border: 2px solid black;"></div>
                    <div style="position: absolute;top: 220px; right: 30px; display: grid;grid-gap: 3px; z-index: 2;">
                        <a href="/v2/purchasing/paket">
                            <button class="btn btn-default icon black">
                                <span class="fa fa-undo"></span>
                            </button>
                        </a>
                        <button id="btnzoomin" class="btn btn-default">
                            <span class="fa fa-plus"></span>
                        </button>
                        <button id="btnfit" class="btn btn-default">
                            <span class="fa fa-compress"></span>
                        </button>
                        <button id="btnzoomout" class="btn btn-default">
                            <span class="fa fa-minus"></span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body" style="overflow-x:auto;">
                    <!-- Data Table -->
                    <div id="list-paket">
<table aria-describedby="mydesc" class="table table-striped" id="tblPenawaran">
<thead>
<tr>
	<th scope="col" class="header-center">
		<div>Nomor</div>
	</th>
	<th scope="col" class="header-center">
		<div>Paket</div>
	</th>
	<th scope="col" class="header-center">
		<div>Komoditas</div>
	</th>
	<th scope="col" class="header-center">
		<div>Satuan Kerja</div>
	</th>
	<th scope="col" class="header-center">
		<div>Instansi</div>
	</th>
	<th scope="col" class="header-center">
		<div>Nama Penyedia</div>
	</th>
	<th scope="col" class="header-center">
		<div>Tanggal Buat</div>
	</th>
	<th scope="col" class="header-center">
		<div>Posisi</div>
	</th>
	<th scope="col" class="header-center">
		<div>Jenis Paket</div>
	</th>
	<th scope="col" class="header-center">
		<div>Negosiasi</div>
	</th>
	<th scope="col" class="header-center">
		<div>Total Produk</div>
	</th>
	<th scope="col" class="header-center">
		<div>Total Harga</div>
	</th>
	<th scope="col" class="header-center">
		<div>Status</div>
	</th>
	<th scope="col" class="header-center">
		<div>Lacak Status</div>
	</th>
</tr>
<tr>
	<td scope="col" class="header-center">
		<div></div>
	</td>
	<td scope="col" class="header-center">
		<div>
			<div>
				<input type="text" class="form-control" id="paket" placeholder="Paket"></div>
		</div>
	</td>
	<td scope="col" class="header-center">
		<div>
			<div>
				<input type="text" class="form-control" id="komoditas" placeholder="Komoditas"></div>
		</div>
	</td>
	<td scope="col" class="header-center">
		<div>
			<div>
				<input type="text" class="form-control" id="satuanKerja" placeholder="Satuan Kerja"></div>
		</div>
	</td>
	<td scope="col" class="header-center">
		<div>
			<div>
				<input type="text" class="form-control" id="instansi" placeholder="Instansi"></div>
		</div>
	</td>
	<td scope="col" class="header-center">
		<div>
			<div>
				<input type="text" class="form-control" id="namaPenyedia" placeholder="Nama Penyedia"></div>
		</div>
	</td>
	<td scope="col" class="header-center">
		<div>
			<div class="rdt">
				<input type="text" class="form-control" value="">
				<div class="rdtPicker">
					<div class="wrapper">
						<div class="rdtDays">
							<table>
							<thead>
							<tr>
								<th class="rdtPrev">
									<span>‹</span>
								</th>
								<th class="rdtSwitch" colspan="5" data-value="0">January 2024</th>
								<th class="rdtNext">
									<span>›</span>
								</th>
							</tr>
							<tr>
								<th class="dow">Su</th>
								<th class="dow">Mo</th>
								<th class="dow">Tu</th>
								<th class="dow">We</th>
								<th class="dow">Th</th>
								<th class="dow">Fr</th>
								<th class="dow">Sa</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td data-value="31" data-month="11" data-year="2023" class="rdtDay rdtOld">31</td>
								<td data-value="1" data-month="0" data-year="2024" class="rdtDay">1</td>
								<td data-value="2" data-month="0" data-year="2024" class="rdtDay">2</td>
								<td data-value="3" data-month="0" data-year="2024" class="rdtDay">3</td>
								<td data-value="4" data-month="0" data-year="2024" class="rdtDay">4</td>
								<td data-value="5" data-month="0" data-year="2024" class="rdtDay">5</td>
								<td data-value="6" data-month="0" data-year="2024" class="rdtDay">6</td>
							</tr>
							<tr>
								<td data-value="7" data-month="0" data-year="2024" class="rdtDay">7</td>
								<td data-value="8" data-month="0" data-year="2024" class="rdtDay">8</td>
								<td data-value="9" data-month="0" data-year="2024" class="rdtDay">9</td>
								<td data-value="10" data-month="0" data-year="2024" class="rdtDay">10</td>
								<td data-value="11" data-month="0" data-year="2024" class="rdtDay">11</td>
								<td data-value="12" data-month="0" data-year="2024" class="rdtDay">12</td>
								<td data-value="13" data-month="0" data-year="2024" class="rdtDay">13</td>
							</tr>
							<tr>
								<td data-value="14" data-month="0" data-year="2024" class="rdtDay rdtToday">14</td>
								<td data-value="15" data-month="0" data-year="2024" class="rdtDay">15</td>
								<td data-value="16" data-month="0" data-year="2024" class="rdtDay">16</td>
								<td data-value="17" data-month="0" data-year="2024" class="rdtDay">17</td>
								<td data-value="18" data-month="0" data-year="2024" class="rdtDay">18</td>
								<td data-value="19" data-month="0" data-year="2024" class="rdtDay">19</td>
								<td data-value="20" data-month="0" data-year="2024" class="rdtDay">20</td>
							</tr>
							<tr>
								<td data-value="21" data-month="0" data-year="2024" class="rdtDay">21</td>
								<td data-value="22" data-month="0" data-year="2024" class="rdtDay">22</td>
								<td data-value="23" data-month="0" data-year="2024" class="rdtDay">23</td>
								<td data-value="24" data-month="0" data-year="2024" class="rdtDay">24</td>
								<td data-value="25" data-month="0" data-year="2024" class="rdtDay">25</td>
								<td data-value="26" data-month="0" data-year="2024" class="rdtDay">26</td>
								<td data-value="27" data-month="0" data-year="2024" class="rdtDay">27</td>
							</tr>
							<tr>
								<td data-value="28" data-month="0" data-year="2024" class="rdtDay">28</td>
								<td data-value="29" data-month="0" data-year="2024" class="rdtDay">29</td>
								<td data-value="30" data-month="0" data-year="2024" class="rdtDay">30</td>
								<td data-value="31" data-month="0" data-year="2024" class="rdtDay">31</td>
								<td data-value="1" data-month="1" data-year="2024" class="rdtDay rdtNew">1</td>
								<td data-value="2" data-month="1" data-year="2024" class="rdtDay rdtNew">2</td>
								<td data-value="3" data-month="1" data-year="2024" class="rdtDay rdtNew">3</td>
							</tr>
							<tr>
								<td data-value="4" data-month="1" data-year="2024" class="rdtDay rdtNew">4</td>
								<td data-value="5" data-month="1" data-year="2024" class="rdtDay rdtNew">5</td>
								<td data-value="6" data-month="1" data-year="2024" class="rdtDay rdtNew">6</td>
								<td data-value="7" data-month="1" data-year="2024" class="rdtDay rdtNew">7</td>
								<td data-value="8" data-month="1" data-year="2024" class="rdtDay rdtNew">8</td>
								<td data-value="9" data-month="1" data-year="2024" class="rdtDay rdtNew">9</td>
								<td data-value="10" data-month="1" data-year="2024" class="rdtDay rdtNew">10</td>
							</tr>
							</tbody>
							</table>
						</div>
						<div class="controls">
							<div class="btn btn-sm">Today</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</td>
	<td scope="col" class="header-center">
		<div>
			<div>
				<select type="text" class="form-control" id="posisi" placeholder="Posisi">
					<option></option>
					<option value="pejabat pengadaan">pejabat pengadaan</option>
					<option value="ppk">ppk</option>
					<option value="penyedia">penyedia</option>
					<option value="distributor">distributor</option>
				</select>
			</div>
		</div>
	</td>
	<td scope="col" class="header-center">
		<div>
			<div>
				<select type="text" class="form-control" id="kompetisi" placeholder="Kompetisi">
					<option></option>
					<option value="Purchasing">Purchasing</option>
					<option value="Purchasing Pemenang Tender">Purchasing Pemenang Tender</option>
					<option value="Purchasing Non K/L/PD">Purchasing Non K/L/PD</option>
					<option value="Kompetisi Produk">Kompetisi Produk</option>
					<option value="Kompetisi Spesifikasi">Kompetisi Spesifikasi</option>
				</select>
			</div>
		</div>
	</td>
	<td scope="col" class="header-center">
		<div>
			<div>
				<select type="text" class="form-control" id="negosiasi" placeholder="Negosiasi">
					<option></option>
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
	</td>
	<td scope="col" class="header-center">
		<div></div>
	</td>
	<td scope="col" class="header-center">
		<div></div>
	</td>
	<td scope="col" class="header-center">
		<div></div>
	</td>
	<td scope="col" class="header-center">
		<div></div>
	</td>
</tr>
</thead>
<tbody>
<tr>
	<td scope="col" class="header-center">1.</td>
	<td scope="col" class="header-center">
		<a target="_blank" href="/v2/id/purchasing/paket/detail/8381522"><strong>4291204005-KD-186110036</strong><br>
		Pekerjaan Belanja Penyediaan Bahan Bufferstok Persediaan Peralatan Kebencanaan</a>
	</td>
	<td scope="col" class="header-center">Peralatan Kebersihan dan Perlengkapan Rumah Tangga</td>
	<td scope="col" class="header-center">Sentra Terpadu Inten Suweno Di Bogor</td>
	<td scope="col" class="header-center">Kementerian Sosial R.I</td>
	<td scope="col" class="header-center">PT. Adilawe Apin Tawa</td>
	<td scope="col" class="header-center">10 Januari 2024</td>
	<td scope="col" class="header-center">PPK</td>
	<td scope="col" class="header-center">Purchasing</td>
	<td scope="col" class="header-center">Ya</td>
	<td scope="col" class="header-center">1</td>
	<td scope="col" class="header-center">
		<div style="padding-left: 0px;">Rp&nbsp;10.622.801.250,00</div>
	</td>
	<td scope="col" class="header-center">Paket batal</td>
	<td scope="col" class="header-center">
		<a href="/v2/id/purchasing/paket/detail/8381522"><button><i class="fa fa-fw fa-eye"></i></button></a>
	</td>
</tr>
<tr>
	<td scope="col" class="header-center">1.</td>
	<td scope="col" class="header-center">
		<a target="_blank" href="/v2/id/purchasing/paket/detail/8381523"><strong>2822708999-KD-186134362</strong><br>
		Pekerjaan Belanja Penyediaan Bahan Bufferstok Kebencanaan Barang Bantuan Keluarga (Kids Ware)</a>
	</td>
	<td scope="col" class="header-center">Peralatan Kebersihan dan Perlengkapan Rumah Tangga</td>
	<td scope="col" class="header-center">Sentra Terpadu Inten Suweno Di Bogor</td>
	<td scope="col" class="header-center">Kementerian Sosial R.I</td>
	<td scope="col" class="header-center">PT. Adilawe Apin Tawa</td>
	<td scope="col" class="header-center">10 Januari 2024</td>
	<td scope="col" class="header-center">PPK</td>
	<td scope="col" class="header-center">Purchasing</td>
	<td scope="col" class="header-center">Ya</td>
	<td scope="col" class="header-center">15.000</td>
	<td scope="col" class="header-center">
		<div style="padding-left: 0px;">Rp&nbsp;7.914.375.000,00</div>
	</td>
	<td scope="col" class="header-center">Paket batal</td>
	<td scope="col" class="header-center">
		<a href="/v2/id/purchasing/paket/detail/8381523"><button><i class="fa fa-fw fa-eye"></i></button></a>
	</td>
</tr>

<tr>
	<td scope="col" class="header-center">1.</td>
	<td scope="col" class="header-center">
		<a target="_blank" href="/v2/id/purchasing/paket/detail/8381524"><strong>2824200999-KD-186134717</strong><br>
		Pekerjaan Belanja Penyediaan Bahan Bufferstok Kebencanaan Barang Bantuan Keluarga (Family Kit) Tahun 2024</a>
	</td>
	<td scope="col" class="header-center">Peralatan Kebersihan dan Perlengkapan Rumah Tangga</td>
	<td scope="col" class="header-center">Sentra Terpadu Inten Suweno Di Bogor</td>
	<td scope="col" class="header-center">Kementerian Sosial R.I</td>
	<td scope="col" class="header-center">PT. Adilawe Apin Tawa</td>
	<td scope="col" class="header-center">08 Januari 2024</td>
	<td scope="col" class="header-center">PPK</td>
	<td scope="col" class="header-center">Purchasing</td>
	<td scope="col" class="header-center">Ya</td>
	<td scope="col" class="header-center">15.000</td>
	<td scope="col" class="header-center">
		<div style="padding-left: 0px;">Rp&nbsp;12.622.500.000,00</div>
	</td>
	<td scope="col" class="header-center">Paket batal</td>
	<td scope="col" class="header-center">
		<a href="/v2/id/purchasing/paket/detail/8381524"><button><i class="fa fa-fw fa-eye"></i></button></a>
	</td>
</tr>

</tbody>
</table>
					</div>
                    <!-- End Data Table -->
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

		

		
        
<!-- viewer distro (with pan and zoom) -->
<script src="/public/bpmn-js/dist/bpmn-viewer.production.min.js"></script>
<script src="{{ asset('paket/bpmn-js/bpmn-navigated-viewer.production.min.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {

    });
    let isLoaded = false;
    $('#collapsable-canvas')
        .on('hide.bs.collapse', function () {
            $('#buttonToggleBpmn').text("Tampilkan BPMN");
        })
        .on('show.bs.collapse', function () {
            $('#buttonToggleBpmn').text("Sembunyikan BPMN");
            if (!isLoaded) {
                renderBpmn();
                isLoaded = true;
            }
        });

    const renderBpmn = (async function () {
        const diagramUrl = "/bpmn/xml/epurchasing";
        const bpmnViewer = new BpmnJS({
            container: '#canvas'
        });

        const response = await fetch(diagramUrl);
        const data = await response.json();

        await bpmnViewer.importXML(data.bpmn20Xml);
        const canvas = bpmnViewer.get('canvas');
        let zoomlevel = canvas.zoom('fit-viewport');
        $("#btnzoomin").on("click", function () {
            if (zoomlevel < 1.5) {
                zoomlevel += 0.1;
                canvas.zoom(zoomlevel);
            }
        });
        $("#btnfit").on("click", function () {
            zoomlevel = canvas.zoom('fit-viewport');
            canvas.zoom(zoomlevel);
        });
        $("#btnzoomout").on("click", function () {
            if (zoomlevel > 0.3) {
                zoomlevel -= 0.1;
                canvas.zoom(zoomlevel);
            }
        });

        const overlays = bpmnViewer.get('overlays'),
                elementRegistry = bpmnViewer.get('elementRegistry');

        const activityIds = [
            
            "memproses_paket",
            
            "proses_negosiasi",
            
            "persetujuan_panitia",
            
            "persetujuan_penyedia",
            
            "mengirimkan_ke_ppk",
            
            "review_paket",
            
            "proses_kontrak_ppk",
            
            "melakukan_pengiriman_dan_penerimaan",
            
            "proses_adendum_kontrak",
            
            "verifikasi_penyelesaian_paket",
            
        ];
        const cn = [
            
            0,
            
            0,
            
            0,
            
            0,
            
            0,
            
            0,
            
            0,
            
            0,
            
            0,
            
            0,
            
        ];
        let countcn = 0;
        $.each(activityIds, function (i, v) {
            const shape = elementRegistry.get(v);
            if (!shape) {
                //console.log(v);
                return;
            }
            let overlayHtml = $('<a />', {
                href: '/v2/purchasing/paket?activityId=' + v,
                id: v,
                style: 'display: block'
            })
                    .css({
                        width: shape.width,
                        height: shape.height
                    });
            overlays.add(v, {
                position: {
                    top: 0,
                    left: 0
                },
                html: overlayHtml

            });
            overlayHtml = $('<a class="ui blue circular label floating">' + cn[countcn] + '</a>')
                    .css({
                        width: shape.width,
                        height: shape.height
                    });
            overlays.add(v, {
                position: {
                    top: 65,
                    left: -10
                },
                html: overlayHtml
            });
            countcn++;
        });
    });
</script>



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
		
		<script type="text/javascript" src="{{ asset('paket/emojis.js') }}" charset="utf-8"></script>
		<script type="text/javascript" src="{{ asset('paket/jquery.toast.min.js') }}"></script>
		<converse-root></converse-root>
		<!-- <script type="text/javascript">

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
							let userOpenfire = 'AAT2024_1'
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
				let userOpenfire = 'AAT2024_1'
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
		</script> -->
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"845035e99f483d83","version":"2023.10.0","token":"abed2acbc5e94e58a6f266a2f51452e8"}' crossorigin="anonymous"></script>
</body>
</html>