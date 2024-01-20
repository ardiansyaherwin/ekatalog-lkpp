<!DOCTYPE html>

<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>E-Katalog 5.0</title>
    <meta name="description" content='E-Katalog adalah aplikasi belanja online yang dikembangkan oleh Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah Pemerintah (LKPP)' />

    
    <link rel="preload" fetchpriority="high" as="image" href="{{ URL::to('/image/rsbjx2lc9no6ifzoe3-slider-3.jpg') }}" >
    

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!--<link rel="stylesheet" media="screen" href="{{ asset('/fa/css/font-awesome.min.css') }}">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" media="screen" href="{{ asset('/stylesheets/app.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('/stylesheets/bootstrap-datatables-v1_10_8.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('/stylesheets/bootstrap-social.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('/stylesheets/landing.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('/javascripts/datapicker/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('/javascripts/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('/javascripts/select2/css/select2.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('/javascripts/jQuery-Tags-Input-master/src/jquery.tagsinput.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('/stylesheets/ekko-lightbox.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('/stylesheets/jquery-ui.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('/plugins/spinner/dist/loading.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('/stylesheets/datetimepicker.css') }}">


    <link rel="shortcut icon" type="image/x-icon" href="/public/images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K59543X46E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-K59543X46E');
    </script>


    <script>
        window.sessionStorage.setItem("backUrl", "/")
    </script>

</head>
<body>

<div id="mobile-menu" class="menu-wrapper">
    <button style="position: absolute; top: 0; left: 0; font-size: 2em; margin-left: 0;" class="closebtn" onclick="closeNav()"><span class="fa fa-close"></span></button>
<ul><li><a href="/">Beranda</a></li><li><a href="/pengumuman">Pengumuman</a></li><li><a href="/berita">Berita</a></li><li><a href='https://s.id/MonevKatalog' target='_blank'>Monev</a></li><li><a href="/unduh">Unduh</a></li><li><a href="/faq">Tanya Jawab</a></li><li><a href="/hub-kami">Hubungi Kami</a></li><li><a href="/user/login">Login</a></li></ul>
</div>

<div id="main" class="main-wrapper">
    <!-- Header -->
    <div class="main-header-wrapper">
        <div class="helper-menu">
            <div class="container-fluid">
                <ul>
                    <li><a href="/language/change?lang=id"><img alt="E-Katalog LKPP" width="15px" height="15px" src="{{ URL::to('/image/id.png') }}" style="width: 15px; height: 15px"></a> |
                        <a href="/language/change?lang=en"><img alt="E-Katalog LKPP" width="15px" height="15px" src="{{ URL::to('/image/en.png') }}" style="width: 15px; height: 15px"></a></li>
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
                        <a class="navbar-brand" href="/">
                            <img alt="E-Katalog LKPP" width="101px" height="30px" src="{{ URL::to('/image/nav_logo.png') }}" class="img img-responsive"/>
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="catalog-main-menu">
                        <!-- Komoditas -->
                        <div class="col-md-1 btn-komoditas" style="width: 9.33333%">
                            <div class="komoditas-menu">
                                <a href="#" style="color: #555555">Etalase Produk</a>
                            </div>
                        </div>
                        <!-- End Komoditas -->
                        <!-- Search -->
                        <div class="col-md-5">
                        
<div id="searchbar-container">
	<form method="GET" action="/id/search-produk" class="navbar-form">
	<input type="hidden" name="authenticityToken" value="d2987b21f4b93b0a9daace193fa77aa5a7425553"/>

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
                            <li><a href="/user/login" style="color: #555555">Login</a></li>
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
                    <div class="komoditas-list-item"><a class="komoditas-item-link" id="nasional-list" href="/publikctr/popularcommoditylist?jenis=Nasional">Etalase Produk Nasional</a></div>
                    <div class="komoditas-list-item"><a class="komoditas-item-link" id="lokal-list" href="/publikctr/popularcommoditylist?jenis=Lokal">Etalase Produk Lokal</a></div>
                    <div class="komoditas-list-item"><a class="komoditas-item-link" id="sektoral-list" href="/publikctr/popularcommoditylist?jenis=Sektoral">Etalase Produk Sektoral</a></div>

                <div class="sub-komoditas-list-item"></div>

                </div>
            </div>
        </div>
        <!-- End List Komoditas -->

        <div class="navbar-menu">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav"><li><a href="/">Beranda</a></li><li><a href="/pengumuman">Pengumuman</a></li><li><a href="/berita">Berita</a></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Monev <span class="caret"></span></a><ul class="dropdown-menu"><li><div class="container-fluid"><div class="row"><a target="_blank" href="http://redash-e-katalog.lkpp.go.id/public/dashboards/BnXT185EjSxCxNa4YgFPoy7oiA6M4VKtD2sa4W8L?refresh=21600?org_slug=default">Dashboard Transaksi</a><a target="_blank" href="https://redash-e-katalog.lkpp.go.id/">Dashboard Patroli</a></div></div></li></ul></li><li><a href="/unduh">Unduh</a></li><li><a href="/faq">Tanya Jawab</a></li><li><a href="/hub-kami">Hubungi Kami</a></li></ul>
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
            
            
            
            
                <div class="item" style="width: 100%;max-height: 250px">
                    <img alt="E-Katalog LKPP" width="1110px" height="250px" style="width: 100%; height: 250px" src="{{ URL::to('/image/rsbjx2lc9no6ifzoe3-slider-3.jpg') }}" onerror="this.src='/cms.bannerctr/download?namaFile=slider-image-not-found.jpg';"/>
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

    
    
        <div class="modal fade" id="home-notifikasi" role="dialog" aria-labelledby="modal-title">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-title">Wajib Dibaca</h4>
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
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
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
                        <img alt="E-Katalog LKPP" width="24px" height="24px" src="{{ URL::to('/image/k-nasional.svg') }}">
                        <h4 class="center-text title-category">Nasional</h4>
                    </div>
                </div>
            </a>
            <a href="/publikctr/popularcommoditylist?jenis=Lokal">
                <div class="col-md-2 col-sm-2 col-xs-2 comp-category active" title="Etalase Produk Lokal">
                    <div class="wrapper">
                        <img alt="E-Katalog LKPP" width="24px" height="24px" src="{{ URL::to('/image/k-lokal.svg') }}">
                        <h4 class="center-text title-category">Lokal</h4>
                    </div>
                </div>
            </a>
            <a href="/publikctr/popularcommoditylist?jenis=Sektoral">
                <div class="col-md-2 col-sm-2 col-xs-2 comp-category active" title="Etalase Produk Sektoral">
                    <div class="wrapper">
                        <img alt="E-Katalog LKPP" width="24px" height="24px" src="{{ URL::to('/image/k-sektoral.svg') }}">
                        <h4 class="center-text title-category">Sektoral</h4>
                    </div>
                </div>
            </a>
            <a href="/publikctr/popularcommoditylist?jenis=UKM">
                <div class="col-md-2 col-sm-2 col-xs-2 comp-category active" title="Etalase Produk UKM">
                    <div class="wrapper">
                        <img alt="E-Katalog LKPP" width="24px" height="24px" src="{{ URL::to('/image/k-ukm.svg') }}" alt="">
                        <h4 class="center-text title-category">UMKK</h4>
                    </div>
                </div>
            </a>
            <a href="/publikctr/popularcommoditylist?jenis=Inovasi">
                <div class="col-md-2 col-sm-2 col-xs-2 comp-category active" title="Etalase Produk Inovasi">
                    <div class="wrapper">
                        <img alt="E-Katalog LKPP" width="24px" height="24px" src="{{ URL::to('/image/k-inovasi.svg') }}">
                        <h4 class="center-text title-category">Inovasi</h4>
                    </div>
                </div>
            </a>
            <a href="/publikctr/popularcommoditylist?jenis=TKDN">
                <div class="col-md-2 col-sm-2 col-xs-2 comp-category active" title="Etalase Produk TKDN">
                    <div class="wrapper">
                        <img alt="E-Katalog LKPP" width="24px" height="24px" src="{{ URL::to('/image/bbi.svg') }}">
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
            
            
            
                <img alt="E-Katalog LKPP" width="239px" height="93px" style="width: 100%; height: 93px" src="{{ URL::to('/image/katsektoral-01.jpg') }}" class="img img-responsive" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
            
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
            
            
            
                <img alt="E-Katalog LKPP" width="239px" height="93px" style="width: 100%; height: 93px" src="{{ URL::to('/image/katsektoral-01.jpg') }}" class="img img-responsive" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
            
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
                        
                        <img alt="E-Katalog LKPP" width="239px" height="139px" style="width: 100%; height: 139px" class="img img-responsive" src="{{ URL::to('/image/51179444749195.png') }}&amp;width=239&amp;height=139" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
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
                        
                        <img alt="E-Katalog LKPP" width="239px" height="139px" style="width: 100%; height: 139px" class="img img-responsive" src="{{ URL::to('/image/244668532050857.png&') }}amp;width=239&amp;height=139" onerror="this.src='{{ URL::to('/image/placeholder.png') }}';"/>
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
</div>

    </div>
    <!-- End Content -->

    <!-- Footer -->
    <div class="main-footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="https://www.facebook.com/eprocurement.lkpp/" target="_blank" aria-label="facebook link" rel="noopener noreferrer" class="btn btn-social-icon btn-facebook">
                        <span class="fa fa-facebook"></span>
                    </a>
                    <a href="https://twitter.com/eproc_lkpp/" target="_blank" aria-label="twitter link" rel="noopener noreferrer" class="btn btn-social-icon btn-twitter">
                        <span class="fa fa-twitter"></span>
                    </a>
                    <a href="https://www.instagram.com/eproc.lkpp/" target="_blank" aria-label="instagram link" rel="noopener noreferrer" class="btn btn-social-icon btn-instagram">
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
     aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Keranjang Belanja</h4>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
</div>

<script src="{{ asset('/javascripts/jquery-1.12.1.min.js') }}" type="text/javascript"> </script>
<script src="{{ asset('/javascripts/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/javascripts/bootstrap.min.js') }}" type="text/javascript"> </script>
<script src="{{ asset('/javascripts/utility-home.js') }}" type="text/javascript"> </script>
<script src="{{ asset('aftlogin/javascripts/moment/min/moment.min.js') }}" type="text/javascript"> </script>
<script src="{{ asset('aftlogin/javascripts/moment/locale/id.js') }}" type="text/javascript"> </script>
<script src="{{ asset('/javascripts/ekko-lightbox.min.js') }}" type="text/javascript"> </script>
<script type="text/javascript" src="{{ asset('/javascripts/jquery.loading.min.js') }}"></script>






<script>

    $(document).ready(function(){
        // loop carousel
        var i;
        for(i = 0; i < 1; i++) {
            $('<li data-target="#myCarousel" data-slide-to="'+i+'"></li>').appendTo('.carousel-indicators')
        }

        $('.item').first().addClass('active');
        $('.carousel-indicators > li').first().addClass('active');
        $('#myCarousel').carousel();
    });
</script>



<script type="text/javascript">

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

        function load_unseen_notification_navbar()
        {
            $(document).ajaxStart(function(){$.hideLoading();});
            $(document).ajaxComplete(function(){$.hideLoading();});
            $(document).ajaxSuccess(function(){$.hideLoading();});
            try{
                var formData = {
                    'produk_id_post'          : $('input[name=produk_id]').val(),
                    'file_post'              : $('input[name=file]').val()
                };
                $.ajax({
                    url:"/chat.chatctr/fetchnewchatforbordernavbar",
                    method:"GET",
                    data:formData,
                    dataType: "json",
                    success:function(data)
                    {
                        JSON.stringify(data);
                        $('.count-notif-pesan').html(data.countNotifPesan);
                    }
                });
            }catch (e) {
                //console.log("error get chat"+e);
            }
        }

    
    
        // console.log("chat is off");
    
    });
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"844d8b16beda4100","version":"2023.10.0","token":"abed2acbc5e94e58a6f266a2f51452e8"}' crossorigin="anonymous"></script>
</body>
</html>