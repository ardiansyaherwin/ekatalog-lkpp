<!DOCTYPE html>

<html lang="id">
    <head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<title id="dynamicTitle">E-Katalog 5.0</title>
		<meta name="description" id="dynamicDescription" content="E-Katalog 5.0">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        
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
		<link rel="stylesheet" media="screen" href="{{ asset('aftlogin/javascripts/fileupload/font/font-fileuploader.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('aftlogin/javascripts/lightgallery/css/lightgallery.min.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('aftlogin/javascripts/fileupload/jquery.fileuploader.min.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('aftlogin/javascripts/jquery-tags/jquery.tagsinput.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('aftlogin/javascripts/ekko-lightbox.min.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('aftlogin/javascripts/jquery-ui.min.css') }}">
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

		
		window.sessionStorage.setItem("aktifUser", "{&quot;user_id&quot;:472648531,&quot;role_basic_name&quot;:&quot;penyedia&quot;,&quot;nama_lengkap&quot;:&quot;PT ADILAWE APIN TAWA&quot;,&quot;email&quot;:&quot;ptadilaweapintawa.lpse@gmail.com&quot;,&quot;jabatan&quot;:&quot;&quot;,&quot;no_sert_pbj&quot;:&quot;&quot;,&quot;nip&quot;:&quot;&quot;,&quot;no_tlp&quot;:&quot;&quot;,&quot;is_panitia_pp&quot;:false}");
		if (window.sessionStorage.getItem("jt") === null || window.sessionStorage.getItem("jt") === "")
			window.sessionStorage.setItem("jt", "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0NzI2NDg1MzEsInNlc3Npb25faWQiOiI0OGI3YjA5ZS1lOGVjLTQwYTktYWQ0Yi05ODI2M2NmZDU2MDEiLCJleHAiOjE3MDUxNTk2MTF9.HtFTajb1dJN8V-Cx-YdqjyXQJJp9CWolVObGDq-Bj7Y");
		window.sessionStorage.setItem("bhost", "https://e-purchasing.lkpp.go.id/api/v2")
		

		
		window.sessionStorage.setItem("lang", "id")
		
		window.sessionStorage.setItem("backUrl", "/home")
		
	</script>
    </head>
    <body>
    	<div id="mobile-menu" class="menu-wrapper">
   			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span class="fa fa-close"></span></a>
    		<ul><li><a href="/home">Beranda</a></li><li><a href="/pengumuman">Pengumuman</a></li><li><a href="#prakatalogMenu" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="prakatalogMenu">Pra Katalog</a><ul class="collapse" id="prakatalogMenu"><li><a href="/v2/prakatalog/penawaran"><i class="fa fa-angle-double-right"></i> Penawaran Baru</a></li><li><a href="/prakatalog/penawaran"><i class="fa fa-angle-double-right"></i> Penawaran Lama</a></li></ul></li><li><a href="#katalogMenu" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="katalogMenu">Produk</a><ul class="collapse" id="katalogMenu"><li><a href="/v3/katalog/produk/create"><i class="fa fa-angle-double-right"></i> Tambah Produk</a></li><li><a href="/kataIog/produk"><i class="fa fa-angle-double-right"></i> Daftar Produk</a></li><li><a href="/katalog/produk/report"><i class="fa fa-angle-double-right"></i> Kelola Laporan</a></li><li><a href="/katalog/produk/permohonan"><i class="fa fa-angle-double-right"></i> Permohonan Label</a></li></ul></li><li><a href="#permohonanMenu" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="permohonanMenu">Permohonan Pembaruan</a><ul class="collapse" id="permohonanMenu"><li><a href="/katalog/produk/permohonan-pembaruan"><i class="fa fa-angle-double-right"></i> Permohonan Pembaruan</a></ul></li><li><a href="/minikompetisi">Kompetisi</a></li><li><a href="#paketMenu" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="paketMenu">Paket</a><ul class="collapse" id="paketMenu"><li><a href="/purchasing/pre-order"><i class="fa fa-angle-double-right"></i> Pre Order</a></li><li><a href="/v2/purchasing/paket"><i class="fa fa-angle-double-right"></i> Paket Baru</a></li><li><a href="/purchasing/paket"><i class="fa fa-angle-double-right"></i> Paket Lama</a></li></ul></li><li><a href="#profilMenu" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="profilMenu">Profil</a><ul class="collapse" id="profilMenu"><li><a href="/masterdata/profil-penyedia"><i class="fa fa-angle-double-right"></i> Pengaturan</a></li><li><a href="/penyedia/distributor/penawaran"><i class="fa fa-angle-double-right"></i> Daftar Distributor/Reseller/Pelaksana Pekerjaan/Pengirim Barang</a></li><li><a href="/profil/syarat-kualifikasi-penyedia"><i class="fa fa-angle-double-right"></i> Daftar Syarat Kualifikasi Penyedia</a></li></ul></li><li><a href="/log-aktivitas">Log Aktivitas</a></li><li><a href="/berita">Berita</a></li><li><a href="#monevMenu" class="" data-toggle="collapse" aria-expanded="true" aria-controls="monevMenu">Monev</a><ul class="collapse in" id="monevMenu" aria-expanded="true" style=""><li><a target="_blank" href="http://redash-e-katalog.lkpp.go.id/public/dashboards/BnXT185EjSxCxNa4YgFPoy7oiA6M4VKtD2sa4W8L?refresh=21600?org_slug=default"><i class="fa fa-angle-double-right"></i>Dashboard Transaksi</a></li><li><a target="_blank" href="https://redash-e-katalog.lkpp.go.id/"><i class="fa fa-angle-double-right"></i>Dashboard Patroli</a></li></ul></li><li><a href="/unduh">Unduh</a></li><li><a href="/faq">Tanya Jawab</a></li><li><a href="/syarat-ketentuan">Syarat dan Ketentuan</a></li><li><a href="/hub-kami">Hubungi Kami</a></li><li><a href="/admin.userctr/logout">Logout</a></li></ul>
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
	<input type="hidden" name="authenticityToken" value="d37d579649766f55b8691bc1083987e202a0fb50"/>

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
											<li><a href="/">Logout</a></li>
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
							<ul class="nav navbar-nav"><li><a href="/home" id="beranda">Beranda</a></li><li><a href="/pengumuman" id="pengumuman">Pengumuman</a></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pra Katalog <span class="caret"></span></a><ul class="dropdown-menu"><li><div style="overflow-y: auto!important; max-height: 450px!important" class="container-fluid"><div class="row"><a href="/v2/prakatalog/penawaran">Penawaran Baru</a><a href="/prakatalog/penawaran">Penawaran Lama</a></div></div></li></ul></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk <span class="caret"></span></a><ul class="dropdown-menu"><li><div style="overflow-y: auto!important; max-height: 450px!important" class="container-fluid"><div class="row"><a href="/v3/katalog/produk/create">Tambah Produk</a><a href="/kataIog/produk">Daftar Produk</a><a href="/katalog/produk/report">Kelola Laporan</a><a href="/katalog/produk/permohonan">Permohonan Label</a></div></div></li></ul></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Permohonan Pembaruan <span class="caret"></span></a><ul class="dropdown-menu"><li><div style="overflow-y: auto!important; max-height: 450px!important" class="container-fluid"><div class="row"><a href="/katalog/produk/permohonan-pembaruan">Permohonan Pembaruan</a></div></div></li></ul></li><li><a href="/minikompetisi">Kompetisi</a></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Paket <span class="caret"></span></a><ul class="dropdown-menu"><li><div style="overflow-y: auto!important; max-height: 450px!important" class="container-fluid"><div class="row"><a href="/purchasing/pre-order">Pre Order</a><a href="/v2/purchasing/paket">Paket Baru</a><a href="/purchasing/paket">Paket Lama</a></div></div></li></ul></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <span class="caret"></span></a><ul class="dropdown-menu"><li><div style="overflow-y: auto!important; max-height: 450px!important" class="container-fluid"><div class="row"><a href="/masterdata/profil-penyedia">Pengaturan</a><a href="/penyedia/distributor/penawaran">Daftar Distributor/Reseller/Pelaksana Pekerjaan/Pengirim Barang</a><a href="/profil/syarat-kualifikasi-penyedia">Daftar Syarat Kualifikasi Penyedia</a></div></div></li></ul></li><li><a href="/log-aktivitas">Log Aktivitas</a></li><li><a href="/berita">Berita</a></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Monev <span class="caret"></span></a><ul class="dropdown-menu"><li><div class="container-fluid"><div class="row"><a target="_blank" href="http://redash-e-katalog.lkpp.go.id/public/dashboards/BnXT185EjSxCxNa4YgFPoy7oiA6M4VKtD2sa4W8L?refresh=21600?org_slug=default">Dashboard Transaksi</a><a target="_blank" href="https://redash-e-katalog.lkpp.go.id/">Dashboard Patroli</a></div></div></li></ul></li><li><a href="/unduh">Unduh</a></li><li><a href="/faq">Tanya Jawab</a></li><li><a href="/syarat-ketentuan">Syarat dan Ketentuan</a></li><li><a href="/hub-kami">Hubungi Kami</a></li></ul>
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
    .alertLaporanParent {
        padding: 20px;
        background-color: #FBF5E1;
        color: black;
        opacity: 1;
        transition: opacity 0.6s;
        margin-bottom: 15px;
        z-index: 1;
        display: flex;
        position: relative;
        height: 80px;
    }
    .alertLaporanChild {
        padding: 20px;
        background-color: #FBF5E1;
        color: black;
        opacity: 1;
        transition: opacity 0.6s;
        z-index: 1;
        display: flex;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        margin-left: 15px;
        height: 80px;
        max-width: 1110px;
    }
    .bumdesSni{
        width: 120px;
    }
    @media only screen and (max-width: 767px) {
        .bumdesSni{
            width: 80px;
            margin: 5px;
        }
    }
</style>
<div class="container"> 
    <div class="col-md-12">
        <!--  Tampilan setelah login -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 250px">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                
                
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                
                    
                
            
                <div class="item" style="width: 100%;max-height: 250px; color: #cf3c4c">
                    <img alt="E-Katalog LKPP" width="1110px" height="250px" style="width: 100%; height: 250px " src="{{ URL::to('aftlogin/image/rsbjx2lc9no6ifzoe3-slider-3(1).jpg') }}" onerror="this.src='/cms.bannerctr/download?namaFile=slider-image-not-found.jpg';"/>
                </div>
            
            </div>
            <!-- Left and right controls -->
            <a href="#myCarousel" data-slide="prev" style="position: absolute;top: 50%;left: 1%;font-size:3em">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#myCarousel" data-slide="next" style="position: absolute;top: 50%;right: 1%;font-size:3em">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>


            <!-- Main Slider -->
		
		
		
		
		
		
            <!-- End Main Slider -->
        </div>
    </div>


	
	
        
        
        
            <div class="modal fade" id="home-notifikasi" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Pemberitahuan</h4>
                        </div>
                        <div class="modal-body">
                            <p style="text-align: justify;">- Segera update KBLI Penyedia Katalog Elektronik dan pastikan sudah tercatat pada Profil Penyedia. Tata cara update KBLI Penyedia dapat dilihat <a href="../unduh/download-file/396" target="_blank" rel="noopener">disini.</a></p>
<p style="text-align: justify;">- Bagi Para Penyedia Katalog Elektronik harap pastikan kembali bahwa harga produk yang ditayangkan merupakan <strong>harga terbaik, wajar dan kompetitif</strong>. <strong>Hindari terjadinya kerugian penggunaan/belanja keuangan Negara</strong>. Apabila ditemukan adanya harga yang tidak wajar, maka Pengelola Katalog Elektronik berhak melakukan <strong>Penghentian Produk dalam transaksi E-Purchasing (Freeze) atau Penurunan Pencantuman Produk</strong>.</p>
<p style="text-align: justify;">- Penyedia Katalog Elektronik <strong>tidak menjual</strong> barang/jasa melalui E-Purchasing dengan harga yang lebih mahal dari harga barang/jasa yang dijual selain melalui E-Purchasing pada periode penjualan, volume produk, tempat (kota/kabupaten) yang sama dan spesifikasi teknis yang sama.</p>
<p style="text-align: justify;">- Apabila Penyedia Katalog Elektronik, berdasarkan hasil pemeriksaan oleh Auditor/Aparat Penegak Hukum terdapat Kerugian Negara yang timbul akibat Syarat dan Ketentuan Penyedia Katalog Elektronik maka Penyedia Katalog Elektronik wajib mengembalikan seluruh Kerugian Negara tersebut dan <strong>dikenakan sanksi</strong> berdasarkan Peraturan Perundang-Undangan yang berlaku.</p>
<p style="text-align: justify;">- Bagi Para Pemesan (PPK/PP) atau Penyedia Katalog Elektronik dapat melakukan pengaduan melalui fitur "Laporkan" apabila menemukan harga yang tidak wajar maupun pelanggaran lainnya.</p>
<p style="text-align: justify;">- RUP dapat ditarik manual oleh PP/PPK ketika membuat paket ePurchasing, lihat <a href="../faq/detail-faq/Saya-sudah-membuat-paket-RUP-tetapi-kenapa-RUP-tersebut-tidak-dapat-dicari-di-ePurchasing-sewaktu-membuat-Paket" target="_blank" rel="noopener">disini</a></p>
<p style="text-align: justify;">- Pemberitahuan pembukaan akses kepada seluruh PP/PPK K/L/PD pada Katalog Lokal/Sektoral, lihat <a href="../berita/baca-berita/Pembukaan-Akses-ePurchasing-untuk-seluruh-PP-dan-PPK-di-KLPD-pada-Katalog-LokalSektoral" target="_blank" rel="noopener">disini</a></p>
<p style="text-align: justify;">- Panduan negosiasi harga saat ePurchasing bagi PP/PPK dapat dilihat <a title="Panduan Penyelenggaraan E-Purchasing Katalog Melalui Metode Negosiasi Harga Bagi PPK dan PP" href="https://jdih.lkpp.go.id/regulation/surat-edaran-deputi-ii/surat-edaran-deputi-ii-nomor-2-tahun-2021" target="_blank" rel="noopener">disini</a>.</p>
<p style="text-align: justify;">- Ongkos kirim selain Komoditas Obat 2020 bersifat <strong>at cost</strong> (sesuai dengan jumlah pengeluaran riil yang tercantum dalam <strong>invoice</strong>). Nilai Referensi ongkos kirim yang ditayangkan sepenuhnya merupakan tanggungjawab penyedia Katalog Elektronik dan hanya sebagai referensi. Ongkos kirim harus dinegosiasikan oleh pemesan/pembeli ketika melakukan transaksi ePurchasing.</p>
<p style="text-align: justify;">- Pembuatan akun Faskes Swasta peserta JKN dikoordinir oleh Kementerian Kesehatan - Direktorat Tata Kelola Obat Publik dan Perbekalan Kesehatan.<strong>&nbsp;</strong><strong>Faskes Swasta Peserta JKN</strong> yang telah memiliki&nbsp;akun ePurchasing <strong>hanya dapat membeli di Etalase Obat dan Alat Kesehatan&nbsp;</strong>saja.&nbsp;</p>
<p class="MsoListParagraphCxSpLast" style="margin: 0cm 0cm 0cm 21.3pt; font-size: 12pt; font-family: 'Times New Roman', serif; text-align: justify; text-indent: -18pt;">&nbsp;</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        
	


    <!-- Komoditas -->
<!-- Komoditas -->
<div class="row">
    <div class="col-md-12 wrapper-category">
        <div class="row nav-tab">
            <a href="/publikctr/popularcommoditylist?jenis=Nasional">
                <div class="col-md-2 col-sm-2 col-xs-2 comp-category active" title="Etalase Produk Nasional">
                    <div class="wrapper">
                        <img alt="E-Katalog LKPP" width="24px" height="24px" src="{{ URL::to('/image/img/k-nasional.svg') }}">
                        <h4 class="center-text title-category">Nasional</h4>
                    </div>
                </div>
            </a>
            <a href="/publikctr/popularcommoditylist?jenis=Lokal">
                <div class="col-md-2 col-sm-2 col-xs-2 comp-category active" title="Etalase Produk Lokal">
                    <div class="wrapper">
                        <img alt="E-Katalog LKPP" width="24px" height="24px" src="{{ URL::to('/image/img/k-lokal.svg') }}">
                        <h4 class="center-text title-category">Lokal</h4>
                    </div>
                </div>
            </a>
            <a href="/publikctr/popularcommoditylist?jenis=Sektoral">
                <div class="col-md-2 col-sm-2 col-xs-2 comp-category active" title="Etalase Produk Sektoral">
                    <div class="wrapper">
                        <img alt="E-Katalog LKPP" width="24px" height="24px" src="{{ URL::to('/image/img/k-sektoral.svg') }}">
                        <h4 class="center-text title-category">Sektoral</h4>
                    </div>
                </div>
            </a>
            <a href="/publikctr/popularcommoditylist?jenis=UKM">
                <div class="col-md-2 col-sm-2 col-xs-2 comp-category active" title="Etalase Produk UKM">
                    <div class="wrapper">
                        <img alt="E-Katalog LKPP" width="24px" height="24px" src="{{ URL::to('/image/img/k-ukm.svg') }}" alt="">
                        <h4 class="center-text title-category">UMKK</h4>
                    </div>
                </div>
            </a>
            <a href="/publikctr/popularcommoditylist?jenis=Inovasi">
                <div class="col-md-2 col-sm-2 col-xs-2 comp-category active" title="Etalase Produk Inovasi">
                    <div class="wrapper">
                        <img alt="E-Katalog LKPP" width="24px" height="24px" src="{{ URL::to('/image/img/k-inovasi.svg') }}">
                        <h4 class="center-text title-category">Inovasi</h4>
                    </div>
                </div>
            </a>
            <a href="/publikctr/popularcommoditylist?jenis=TKDN">
                <div class="col-md-2 col-sm-2 col-xs-2 comp-category active" title="Etalase Produk TKDN">
                    <div class="wrapper">
                        <img alt="E-Katalog LKPP" width="24px" height="24px" src="{{ URL::to('/image/img/bbi.svg') }}">
                        <h4 class="center-text title-category">TKDN</h4>
                    </div>
                </div>
            </a>
        </div>
        <br>
        <div class="row justify-content-center" style="display: flex;justify-content: center;align-items: center;">
            <a href="/publikctr/popularcommoditylist?jenis=Bumdes">
                <div class="col-md-1 col-sm-1 col-xs-1 comp-category active bumdesSni" title="BUMDes">
                    <div class="wrapper">
                        <h4 class="center-text title-category">BUMDes</h4>
                    </div>
                </div>
            </a>
            <a href="/publikctr/popularcommoditylist?jenis=SNI">
                <div class="col-md-1 col-sm-1 col-xs-1 comp-category active bumdesSni" title="SNI">
                    <div class="wrapper">
                        <h4 class="center-text title-category">SNI</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- End Komoditas -->

    <!-- End Komoditas -->

    <!-- Usulan -->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="home-usulan-wrapper">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="home-usulan-header">
                            <h4>Pengumuman</h4>
						
                            <div class="pull-right">
                                <a href="/pengumuman" class="btn btn-md btn-danger">
								Lihat Selengkapnya <i aria-hidden="true" class="fa fa-angle-down"></i>
                                </a>
                            </div>
						
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card-list">
					
						
							<div class="col-sm-6 col-md-3 col-lg-3">
    <div class="card-item" style="height: 366px;">
        <div class="card-item-image">
            
            
                <img alt="E-Katalog LKPP" width="239px" height="93px" style="width: 100%; height: 93px" src="{{ URL::to('/image/katlokal-02.jpg') }}" class="img img-responsive" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
            
            
        </div>
        <div class="card-item-detail">
            <div class="card-item-title">
                <a href="/v2/admin/usulan/detail-pengumuman/18659">
                    <h5>
                    Pendaftaran Penyedia Cetak dan Penggandaan Kabupat...
                    </h5>
                </a>
            </div>
            <div class="card-item-description">
                <p title="">
                Etalase Produk : Cetak dan Penggandaan Kabupate...
                </p>
                <p>Tanggal Mulai:
                14 Juli 2022
                </p>
                <p>Tanggal Akhir:
                
                </p>
            </div>
            <div class="card-item-footer">
                <a href="/v2/admin/usulan/detail-pengumuman/18659">
                
                   Detail
                </a>
            </div>
            <div class="card-item-badges" style="text-align: center">
            
            
            Lokal
            
            
            </div>
        </div>
    </div>
</div>
						
							<div class="col-sm-6 col-md-3 col-lg-3">
    <div class="card-item" style="height: 366px;">
        <div class="card-item-image">
            
            
                <img alt="E-Katalog LKPP" width="239px" height="93px" style="width: 100%; height: 93px" src="{{ URL::to('/image/katlokal-02.jpg') }}" class="img img-responsive" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
            
            
        </div>
        <div class="card-item-detail">
            <div class="card-item-title">
                <a href="/v2/admin/usulan/detail-pengumuman/87444">
                    <h5>
                    Pendaftaran Penyedia Etalase Peralatan dan Perleng...
                    </h5>
                </a>
            </div>
            <div class="card-item-description">
                <p title="">
                Etalase Produk : Peralatan dan Perlengkapan Ola...
                </p>
                <p>Tanggal Mulai:
                12 Januari 2024
                </p>
                <p>Tanggal Akhir:
                
                </p>
            </div>
            <div class="card-item-footer">
                <a href="/v2/admin/usulan/detail-pengumuman/87444">
                
                   Detail
                </a>
            </div>
            <div class="card-item-badges" style="text-align: center">
            
            
            Lokal
            
            
            </div>
        </div>
    </div>
</div>
						
							<div class="col-sm-6 col-md-3 col-lg-3">
    <div class="card-item" style="height: 366px;">
        <div class="card-item-image">
            
            
                <img alt="E-Katalog LKPP" width="239px" height="93px" style="width: 100%; height: 93px" src="{{ URL::to('/image/katlokal-02.jpg') }}" class="img img-responsive" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
            
            
        </div>
        <div class="card-item-detail">
            <div class="card-item-title">
                <a href="/v2/admin/usulan/detail-pengumuman/85059">
                    <h5>
                    Pengumuman  Pendaftaran Etalase Produk Pekerjaan K...
                    </h5>
                </a>
            </div>
            <div class="card-item-description">
                <p title="">
                Etalase Produk : Pekerjaan Konstruksi Jalan dan...
                </p>
                <p>Tanggal Mulai:
                28 Juli 2023
                </p>
                <p>Tanggal Akhir:
                
                </p>
            </div>
            <div class="card-item-footer">
                <a href="/v2/admin/usulan/detail-pengumuman/85059">
                
                   Detail
                </a>
            </div>
            <div class="card-item-badges" style="text-align: center">
            
            
            Lokal
            
            
            </div>
        </div>
    </div>
</div>
						
							<div class="col-sm-6 col-md-3 col-lg-3">
    <div class="card-item" style="height: 366px;">
        <div class="card-item-image">
            
            
                <img alt="E-Katalog LKPP" width="239px" height="93px" style="width: 100%; height: 93px" src="{{ URL::to('/image/katlokal-02.jpg') }}" class="img img-responsive" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
            
            
        </div>
        <div class="card-item-detail">
            <div class="card-item-title">
                <a href="/v2/admin/usulan/detail-pengumuman/87443">
                    <h5>
                    Pendaftaran Penyedia Etalase Jasa Penyediaan Layan...
                    </h5>
                </a>
            </div>
            <div class="card-item-description">
                <p title="">
                Etalase Produk : Jasa Penyediaan Layanan dan Pe...
                </p>
                <p>Tanggal Mulai:
                12 Januari 2024
                </p>
                <p>Tanggal Akhir:
                
                </p>
            </div>
            <div class="card-item-footer">
                <a href="/v2/admin/usulan/detail-pengumuman/87443">
                
                   Detail
                </a>
            </div>
            <div class="card-item-badges" style="text-align: center">
            
            
            Lokal
            
            
            </div>
        </div>
    </div>
</div>
						
							<div class="col-sm-6 col-md-3 col-lg-3">
    <div class="card-item" style="height: 366px;">
        <div class="card-item-image">
            
            
                <img alt="E-Katalog LKPP" width="239px" height="93px" style="width: 100%; height: 93px" src="{{ URL::to('/image/katlokal-02.jpg') }}" class="img img-responsive" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
            
            
        </div>
        <div class="card-item-detail">
            <div class="card-item-title">
                <a href="/v2/admin/usulan/detail-pengumuman/87442">
                    <h5>
                    Pendaftaran Penyedia Etalase Akomodasi, Sewa Tempa...
                    </h5>
                </a>
            </div>
            <div class="card-item-description">
                <p title="">
                Etalase Produk : Akomodasi, Sewa Tempat Rapat, ...
                </p>
                <p>Tanggal Mulai:
                12 Januari 2024
                </p>
                <p>Tanggal Akhir:
                
                </p>
            </div>
            <div class="card-item-footer">
                <a href="/v2/admin/usulan/detail-pengumuman/87442">
                
                   Detail
                </a>
            </div>
            <div class="card-item-badges" style="text-align: center">
            
            
            Lokal
            
            
            </div>
        </div>
    </div>
</div>
						
							<div class="col-sm-6 col-md-3 col-lg-3">
    <div class="card-item" style="height: 366px;">
        <div class="card-item-image">
            
            
                <img alt="E-Katalog LKPP" width="239px" height="93px" style="width: 100%; height: 93px" src="{{ URL::to('/image/katlokal-02.jpg') }}" class="img img-responsive" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
            
            
        </div>
        <div class="card-item-detail">
            <div class="card-item-title">
                <a href="/v2/admin/usulan/detail-pengumuman/76104">
                    <h5>
                    Pendaftaran Penyedia Etalase Produk Pengadaan dan ...
                    </h5>
                </a>
            </div>
            <div class="card-item-description">
                <p title="">
                Etalase Produk : Pengadaan dan Pemasangan Perle...
                </p>
                <p>Tanggal Mulai:
                10 Maret 2023
                </p>
                <p>Tanggal Akhir:
                
                </p>
            </div>
            <div class="card-item-footer">
                <a href="/v2/admin/usulan/detail-pengumuman/76104">
                
                   Detail
                </a>
            </div>
            <div class="card-item-badges" style="text-align: center">
            
            
            Lokal
            
            
            </div>
        </div>
    </div>
</div>
						
							<div class="col-sm-6 col-md-3 col-lg-3">
    <div class="card-item" style="height: 366px;">
        <div class="card-item-image">
            
            
            
                <img alt="E-Katalog LKPP" width="239px" height="93px" style="width: 100%; height: 93px" src="{{ URL::to('/image/katlokal-02.jpg') }}" class="img img-responsive" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
            
        </div>
        <div class="card-item-detail">
            <div class="card-item-title">
                <a href="/v2/admin/usulan/detail-pengumuman/87426">
                    <h5>
                    Jasa Pengemudi Dewan Ketahanan Nasional
                    </h5>
                </a>
            </div>
            <div class="card-item-description">
                <p title="">
                Etalase Produk : Jasa Pengemudi Dewan Ketahanan...
                </p>
                <p>Tanggal Mulai:
                1 Januari 2024
                </p>
                <p>Tanggal Akhir:
                
                </p>
            </div>
            <div class="card-item-footer">
                <a href="/v2/admin/usulan/detail-pengumuman/87426">
                
                   Detail
                </a>
            </div>
            <div class="card-item-badges" style="text-align: center">
            
            
            
            Sektoral
            
            </div>
        </div>
    </div>
</div>
						
							<div class="col-sm-6 col-md-3 col-lg-3">
    <div class="card-item" style="height: 366px;">
        <div class="card-item-image">
            
            
            
                <img alt="E-Katalog LKPP" width="239px" height="93px" style="width: 100%; height: 93px" src="{{ URL::to('/image/katlokal-02.jpg') }}" class="img img-responsive" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
            
        </div>
        <div class="card-item-detail">
            <div class="card-item-title">
                <a href="/v2/admin/usulan/detail-pengumuman/87422">
                    <h5>
                    Pendaftaran Penyedia Jasa Pramubakti Dewan Ketahan...
                    </h5>
                </a>
            </div>
            <div class="card-item-description">
                <p title="">
                Etalase Produk : Jasa Pramubakti Dewan Ketahana...
                </p>
                <p>Tanggal Mulai:
                1 Januari 2024
                </p>
                <p>Tanggal Akhir:
                
                </p>
            </div>
            <div class="card-item-footer">
                <a href="/v2/admin/usulan/detail-pengumuman/87422">
                
                   Detail
                </a>
            </div>
            <div class="card-item-badges" style="text-align: center">
            
            
            
            Sektoral
            
            </div>
        </div>
    </div>
</div>
						
					
					
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Usulan -->

    <!-- Produk Populer -->
    <!-- <div class="row">
		<div class="col-md-12">
			<div class="home-produk-wrapper">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h4>Produk Terpopuler</h4>
					</div>
				</div>
				<div class="row">
					
	
	
		
			
				
					
					
			
			
				
					
				
				
					
						
						
					
				
			
		
	
	

				</div>
			</div>
		</div>
	</div>-->
    <!-- End Produk Populer -->

    <!-- Latest News -->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="home-berita-wrapper">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="home-berita-header">
                            <h4>Berita</h4>
                            <div class="pull-right">
                                <a href="/berita" class="btn btn-md btn-danger">
								Lihat Selengkapnya <i aria-hidden="true" class="fa fa-angle-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
				<div class="card-list">

    
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="card-item" style="height: 366px;">
                <div class="card-item-image">
                    
                    <a href="/berita/baca-berita/1839/Pengumuman-Vendor-Conference-Kementerian-Kesehatan">
                        
                        <img alt="E-Katalog LKPP" width="239px" height="139px" style="width: 100%; height: 139px" class="img img-responsive" src="/cms/berita/download/gambar-compresses/1839?namaFile=51179444749195.png&amp;width=239&amp;height=139" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
                    </a>
                    
                </div>
                <div class="card-item-detail">
                    <div class="card-item-title">
                        <a href="/berita/baca-berita/1839/Pengumuman-Vendor-Conference-Kementerian-Kesehatan"><h5>Pengumuman Vendor Conference Kementerian Kesehatan...</h5></a>
                    </div>
                    <div class="card-item-description">
                        <p>11 Jan 2024</p>
                        <p>Sehubungan dengan akan dilaksanakannya International Vendor Conference pada Project Strengthening of...</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="card-item" style="height: 366px;">
                <div class="card-item-image">
                    
                    <a href="/berita/baca-berita/1838/Pengumuman-Pemberian-Label-Official-Vendor-PT-Sejahtera-Wahana-Gemilang-PPNAOVR214--">
                        
                        <img alt="E-Katalog LKPP" width="239px" height="139px" style="width: 100%; height: 139px" class="img img-responsive" src="" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
                    </a>
                    
                </div>
                <div class="card-item-detail">
                    <div class="card-item-title">
                        <a href="/berita/baca-berita/1838/Pengumuman-Pemberian-Label-Official-Vendor-PT-Sejahtera-Wahana-Gemilang-PPNAOVR214--"><h5>Pengumuman Pemberian Label Official Vendor PT Seja...</h5></a>
                    </div>
                    <div class="card-item-description">
                        <p>10 Jan 2024</p>
                        <p>Yth. Kepada Pelaku Usaha/ Pihak lain yang berkepentingan Sehubungan dengan permohonan pemberian labe...</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="card-item" style="height: 366px;">
                <div class="card-item-image">
                    
                    <a href="/berita/baca-berita/1837/Pengumuman-Pemberian-Label-Official-Vendor-PT-Trijati-Primula-PPNAOVR19674">
                        
                        <img alt="E-Katalog LKPP" width="239px" height="139px" style="width: 100%; height: 139px" class="img img-responsive" src="" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
                    </a>
                    
                </div>
                <div class="card-item-detail">
                    <div class="card-item-title">
                        <a href="/berita/baca-berita/1837/Pengumuman-Pemberian-Label-Official-Vendor-PT-Trijati-Primula-PPNAOVR19674"><h5>Pengumuman Pemberian Label Official Vendor PT Trij...</h5></a>
                    </div>
                    <div class="card-item-description">
                        <p>10 Jan 2024</p>
                        <p>Yth. Kepada Pelaku Usaha/ Pihak lain yang berkepentingan Sehubungan dengan permohonan pemberian labe...</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="card-item" style="height: 366px;">
                <div class="card-item-image">
                    
                    <a href="/berita/baca-berita/1836/Pemberitahuan-Pengadaan-Antropometri-Kit-Di-Lingkungan-Kantor-Pusat-Kementerian-Kesehatan">
                        
                        <img alt="E-Katalog LKPP" width="239px" height="139px" style="width: 100%; height: 139px" class="img img-responsive" src="/cms/berita/download/gambar-compresses/1836?namaFile=244668532050857.png&amp;width=239&amp;height=139" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
                    </a>
                    
                </div>
                <div class="card-item-detail">
                    <div class="card-item-title">
                        <a href="/berita/baca-berita/1836/Pemberitahuan-Pengadaan-Antropometri-Kit-Di-Lingkungan-Kantor-Pusat-Kementerian-Kesehatan"><h5>Pemberitahuan Pengadaan Antropometri Kit Di Lingku...</h5></a>
                    </div>
                    <div class="card-item-description">
                        <p>09 Jan 2024</p>
                        <p>PENGUMUMAN NOMOR: BJ.01.04/A.VI/0145/2024 Tentang Pemberitahuan Pengadaan Antropometri Kit Di Lingku...</p>
                    </div>
                </div>
            </div>
        </div>
    


</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Latest News -->

    <!-- Poling -->


























    <!-- End Poling -->
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
        <script src="{{ asset('aftlogin/rjs/bundle.js') }}" type="text/javascript"> </script>
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
	    <script src="{{ asset('aftlogin/javascripts/select2/js/i18n/id.js') }}" type="text/javascript"> </script>
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

		

		
        


<script>
    //function loadPooling(){
    //    $.ajax({
    //        url: '/pollingpilihan',
    //data: {"polId": polId,"vote": polPilih},
    //        type: 'GET',
    //        success: function(res){
    //            var elm = '';
    // console.log(res.pollingForm.length);
    //            if(res.pollingForm.length <= 0){
    //                $('.polling').hide();
    //			}else {
    //                for (var i = 0; i < res.pollingForm.length; i++) {
    //                    var pol = res.pollingForm[i];
    //                    var elm2 = '';
    //                    for (var c = 0; c < res.pollingList.length; c++) {
    //                        var polPilihan = res.pollingList[c];
    //                        if (polPilihan.polling_id == pol.id) {
    //                            elm2 += '<div class="row">\n' +
    //                                    '                        <div class="col-md-10 col-md-offset-1">\n' +
    //                                    '                            <input type="hidden" name="pol_id" id="pol_id" value="' + polPilihan.polling_id + '">\n' +
    //                                    '                            <div class="form-group">\n' +
    //                                    '                                <div class="radio">\n' +
    //                                    '                                    <label>\n' +
    //                                    '                                        <input type="radio" name="vote" value="' + polPilihan.id + '">\n' +
    //                                    polPilihan.pilihan_jawaban +
    //                                    '                                    </label>\n' +
    //                                    '                                </div>\n' +
    //                                    '                            </div>\n' +
    //                                    '                        </div>\n' +
    //                                    '</div>';
    //                            delete polPilihan[c];
    //                        }

    //                   }
    //                    var awal = '';
    //                    if (i == 0) {
    //                        awal = ' active';
    //                    }
    //                    elm += '<div class="item' + awal + '"><div class="col-md-10">' +
    //                            '<h5>' + pol.subjek + '</h5>' +
    //                            '<form class="form-horizontal">' +
    //                            elm2 +
    //                            '<div class="row">\n' +
    //                            '                <div class="col-md-4 col-md-offset-8">\n' +
    //                            '                    <button type="button" onclick="submitPolling(' + pol.id + ')" class="btn btn-danger btn-sm btn-block">vote</button>\n' +
    //                            '                </div>\n' +
    //                            '            </div>' +
    //                            '</form>' +
    //                            '</div></div>';

    //                }
    //                if (res.pollingForm.length == 1) {
    //                    $("#btnslide1").hide();
    //                    $("#btnslide2").hide();
    //                    $("#btnslide1M").hide();
    //                    $("#btnslide2M").hide();
    //                }
    //                $("#listPooling").append(elm);
    //                $("#listPoolingM").append(elm);
    //            }
    //        },
    //        error: function(){
    //            alert('gagal ambil pooling data');
    //        },
    //        timeout: 10000 // sets timeout to 3 second
    //    });
    //}

    // document.addEventListener('DOMContentLoaded', function() {
    //     // your code here
    //     setTimeout(
    //             loadPooling(), 5000);
    // }, false);

    $(document).ready(function(){

        // loop carousel
		var i;
        for(i = 0; i < 1; i++) {
            $('<li data-target="#myCarousel" data-slide-to="'+i+'"></li>').appendTo('.carousel-indicators')
        }

        $('.item').first().addClass('active');
        $('.carousel-indicators > li').first().addClass('active');
        $('#myCarousel').carousel();

        $('.closeAlert').click(function () {
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
        });
    });

    function redirectNotification(){
        window.location.href = "/purchasing/paket/detail/PROCESS";
    }

    function requestAdendumKontrak() {
        $.ajax({
            type: 'POST',
            url: '/masterdata.penyediactr/requestadendumkontrak',
            dataType: 'json',
            success: function (data) {
                // console.log(data);
            }
        });

    };
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
		
		<script type="text/javascript" src="{ asset('aftlogin/javascripts/conversejsdist/emojis.js') }}" charset="utf-8"></script>
		<script type="text/javascript" src="{ asset('aftlogin/javascripts/toast/jquery.toast.min.js') }}"></script>
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
		</script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"844e49bb6b8144c0","version":"2023.10.0","token":"abed2acbc5e94e58a6f266a2f51452e8"}' crossorigin="anonymous"></script>
</body>
</html>