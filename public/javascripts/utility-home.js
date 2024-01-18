//SETUJU SYARAT KETENTUAN
$(document).ready(function(){
	$("#btnSetuju").attr("disabled", !this.checked);
	$("#setujuSyaratKetentuan").click(function() {
	  $("#btnSetuju").attr("disabled", !this.checked);
	});
});

//SCROLL NAVBAR
$(".navbar-publik").removeClass("scrolled");
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
        $(".navbar-publik").addClass("scrolled");
    } else {
    	$(".navbar-publik").removeClass("scrolled");
    }
});

//STICKY-HEADER
$(".helper-menu").removeClass("sticky-header");
$(window).scroll(function() {
	var scroll = $(window).scrollTop();

    if (scroll >= 30) {
        $(".helper-menu").addClass("sticky-header");
        $(".sticked-navbar").addClass("sticky-header");
        $(".komoditas-menu-wrapper").addClass("sticky-header");
        $(".navbar-menu").addClass("sticky-header");
    } else {
    	$(".helper-menu").removeClass("sticky-header");
    	$(".sticked-navbar").removeClass("sticky-header");
    	$(".komoditas-menu-wrapper").removeClass("sticky-header");
    	$(".navbar-menu").removeClass("sticky-header");
    }
});

// HOME NOTIFIKASI
$(document).ready(function(){
	var width = $(window).width();  
    if(width > 767){
    	$("#home-notifikasi").modal();
        $("#home-syarat-ketentuan").modal(); 
        $("#paket-notifikasi").modal();
    }
});

// FILTER BERITA
function openKategoriBerita() {
    document.getElementById("mobile-sidebar").style.width = "100%";
    $('.kategori-berita').show();
    $('.berita-populer').hide();
    $('.berita-terbaru').hide();
    $('.filter-berita').show();
}
function openKategoriProduk() {
    document.getElementById("mobile-sidebar").style.width = "100%";
}


function openBeritaPopuler() {
    document.getElementById("mobile-sidebar").style.width = "100%";
    $('.berita-populer').show();
    $('.berita-terbaru').hide();
    $('.filter-berita').hide();
    $('.kategori-berita').hide();
}
function openBeritaTerbaru() {
    document.getElementById("mobile-sidebar").style.width = "100%";
    $('.berita-terbaru').show();
    $('.berita-populer').hide();
    $('.filter-berita').hide();
    $('.kategori-berita').hide();
}
function closeSidebarBerita() {
    document.getElementById("mobile-sidebar").style.width = "0";
}

//filter pengumuman
function openFilterPengumuman() {
    $("#mobile-sidebar").css("width","100%");
}
function closeSidebar() {
    $("#mobile-sidebar").css("width","0");
}
function showEtalase() {
    show = !show;
    $("#id-etalase").toggle();
    console.log(show);
    if (show) {
        $("#mobile-sidebar .id-etalase").removeClass("displaynone");
        $("#mobile-sidebar .span-id-toggle").removeClass("glyphicon-triangle-bottom");
        $("#mobile-sidebar .span-id-toggle").addClass("glyphicon-triangle-top");

        $(".hidden-mobile .id-etalase").removeClass("displaynone");
        $(".hidden-mobile .span-id-toggle").removeClass("glyphicon-triangle-bottom");
        $(".hidden-mobile .span-id-toggle").addClass("glyphicon-triangle-top");
    } else {
        $("#mobile-sidebar .id-etalase").addClass("displaynone");
        $("#mobile-sidebar .span-id-toggle").removeClass("glyphicon-triangle-top");
        $("#mobile-sidebar .span-id-toggle").addClass("glyphicon-triangle-bottom");

        $(".hidden-mobile .id-etalase").addClass("displaynone");
        $(".hidden-mobile .span-id-toggle").removeClass("glyphicon-triangle-top");
        $(".hidden-mobile .span-id-toggle").addClass("glyphicon-triangle-bottom");
    }
}
function showSidebar() {
    $("#mobile-sidebar").css("width","100%");
}
//filter pengumuman
function openFilterKomoditas() {
    $("#mobile-sidebar").css("width","100%");
}

function openFilterManufaktur() {
    $("#mobile-sidebar").css("width","100%");
}
function openFilterPenawaran() {
    $("#mobile-sidebar").css("width","100%");
}

function openFilterAdminUsulan() {
    $("#mobile-sidebar").css("width","100%");
}

function openFilterPembaharuan() {
    $("#mobile-sidebar").css("width","100%");
}

function openFilterKatalogProduk() {
    document.getElementById("mobile-sidebar").style.width = "100%";
}

function openFilterKatalogProdukOls() {
    document.getElementById("mobile-sidebar").style.width = "100%";
}

function openDaftarLaporan() {
    $("#mobile-sidebar").css("width","100%");
}

function openFilterCmsUnduh() {
    $(".span-hide").toggleClass("show");
    $(".hidden-mobile").toggleClass("show");
}

function openFilterReportKomoditasTayang() {
    $("#mobile-sidebar").css("width","100%");
}

function openFilterReportProdukTayangTransaksi() {
    $("#mobile-sidebar").css("width","100%");
}

function openFilterMasterdataRup() {
    $("#mobile-sidebar").css("width","100%");
}

function openFilterMasterdataBpom() {
    $("#mobile-sidebar").css("width","100%");
}
function openFilterMasterdataPenyedia() {
    $("#mobile-sidebar").css("width","100%");
}

function openFilterCmsFaq() {
    $(".span-hide").toggleClass("show");
    $(".hidden-mobile").toggleClass("show");
}
function toggleUkm() {
    $(".non").toggleClass("hide");
    if (!$(".produk-list-wrapper .card-list .col-md-3").hasClass('ukm')){
        if (!$(".produk-list-wrapper .item-empty").hasClass('.append-empty')) { 
            $(".produk-list-wrapper .item-empty.append-empty").remove();
            $('.produk-list-wrapper').append('<div class="item-empty append-empty"><h3>Maaf, Produk yang anda cari tidak dapat ditemukan</h3><p>Produk yang anda cari tidak ditemukan, Silahkan kembali melakukan pencarian dengan kata kunci lain</p></div>')
        }
    }
}
function openFilterCmsBerita() {
    $(".span-hide").toggleClass("show");
    $(".hidden-mobile").toggleClass("show");
}

function openFilterKategoriKonten() {
    $(".span-hide").toggleClass("show");
    $(".hidden-mobile").toggleClass("show");
}

function openFilterKontenStatis() {
    $(".span-hide").toggleClass("show");
    $(".hidden-mobile").toggleClass("show");
}

function openFilterPurchasingPaket() {
    $(".span-hide").toggleClass("show");
    $(".hidden-mobile").toggleClass("show");
}

function openFilterAdminUser() {
    $("#mobile-sidebar").css("width","100%");
}

function openFilterLaporanProduk() {
    $(".span-hide").toggleClass("show");
    $(".hidden-mobile").toggleClass("show");
}

function openFilterProduk() {
    $("#mobile-sidebar").css("width","100%");
}

// FILTER USULAN
function openFilterUsulan() {
    document.getElementById("usulan-filter").style.width = "100%";
}
function closeFilterUsulan() {
    document.getElementById("usulan-filter").style.width = "0";
}

// IMAGE POPUP
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({
    	alwaysShowClose: true,
        onShown: function() {
        },
        onNavigate: function(direction, itemIndex) {
        }
    });
});

//PERBANDINGAN
function setCookie(key, value, hours) {
    var date = new Date();
    date.setTime(date.getTime() + Number(hours) * 3600 * 1000);
    document.cookie = key + "=" + value + "; path=/;expires = " + date.toGMTString();
}

function getCookie(key) {
    var name = key + "=",
        ca = document.cookie.split(';'),
        i,
        c,
        ca_length = ca.length;
    for (i = 0; i < ca_length; i += 1) {
        c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) !== -1) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

$(document).ready(function() {
	$(document).on('click', '.btn-minimize', function(){
        $('.compare-list-wrapper').slideToggle(400, function(){
            // console.log("toggle done, visible = " + $('.compare-list-wrapper').is(':visible'));
            if($('.compare-list-wrapper').is(':visible')){
                $('#minimize-compare-list').show();
                $('#restore-compare-list').hide();
            }
            else{
                $('#minimize-compare-list').hide();
                $('#restore-compare-list').show();
            }
        });
    });
});


//WILAYAH JUAL
function valueChanged() {
	if ($('.prov').is(':checked')){
		$('.subwilayah-list-item').addClass('selected');
	}
}

//KATEGORI
$(document).ready(function() {
    $(document).on('click', '.kategori-list>.kategori-list-item', function(){

        var value = $(this).data('value');
        // console.log("value"+value);
        if (value !== undefined) {
            $(this).toggleClass("selected");
            $(".parent-item-" + value).toggleClass("selected");
            $('.kategori-list-item').not(this).removeClass('selected');
            $('.subkategori-list-item ').not(".parent-item-" + value).removeClass('selected');
            $('.hidden-cat').val(value === -99 ? "" : value);

            var haveSubcategory = $(".parent-item-" + value).length==0;
            if(haveSubcategory)
                $(".filter-form").submit();
        }
    });
    $(document).on('click', '.subkategori-list-item.selected .kategori-list-item', function(){

        var value = $(this).data('value');
        // console.log("value"+value);
        if (value !== undefined) {
            $(this).toggleClass("selected");
            $('.kategori-list-item').not(this).removeClass('selected');
            $(".parent-item-" + value).toggleClass("selected");
            $('.hidden-cat').val(value === -99 ? "" : value);

            var haveSubcategory = $(".parent-item-" + value).length==0;
            if(haveSubcategory)
                $(".filter-form").submit();
        }
    });
    $( window ).load(function() {
        var value = $('.kategori-list-item.selected').data('value');
        $('.parent-item-'+value).addClass('selected');
        var secondsub = $('.subkategori-list-item.selected>.kategori-list-item.selected').data('value');
        $('.parent-item-'+secondsub).addClass('selected');
    });

});

// MENU KOMODITAS
$(document).ready(function() {

    $(document).on('click', '.komoditas-menu', function(){
        show(true);
        $('.btn-komoditas').addClass('focus');
    });

	$(document).on('click', '.komoditas-menu', function(){
        show(true);
	});

    $(document).on('mouseover', '#nasional-list', function(){
		$('.subkomoditas-list-item').removeClass('selected');
        $('#nasional-item').addClass('selected');
        $(this).parent().css('background-color','#EEEEEE');
        $('#lokal-list').parent().css('background-color','#FFFFFF');
        $('#sektoral-list').parent().css('background-color','#FFFFFF');
    });
    $(document).on('mouseover', '#lokal-list', function(){
		$('.subkomoditas-list-item').removeClass('selected');
        $('#lokal-item').addClass('selected');
        $(this).parent().css('background-color','#EEEEEE');
        $('#nasional-list').parent().css('background-color','#FFFFFF');
        $('#sektoral-list').parent().css('background-color','#FFFFFF');
    });
    $(document).on('mouseover', '#sektoral-list', function(){
		$('.subkomoditas-list-item').removeClass('selected');
        $('#sektoral-item').addClass('selected');
        $(this).parent().css('background-color','#EEEEEE');
        $('#nasional-list').parent().css('background-color','#FFFFFF');
        $('#lokal-list').parent().css('background-color','#FFFFFF');
    });

    $(document).mouseup(function(e){
    	$('.subkomoditas-list-item').removeClass('selected');
    	show(false);
    	$('.btn-komoditas').removeClass('focus');
    });

    function show(status) {
        if (status) {
            /*$('.komoditas-menu-list').removeClass('hidden');
            $('.overlay').removeClass('hidden');*/
            $('.komoditas-menu-list').show();
            $('.overlay').show();
        } else {
            /*$('.komoditas-menu-list').addClass('hidden');
            $('.overlay').addClass('hidden');*/
            $('.komoditas-menu-list').hide();
            $('.overlay').hide();
        }
    }

});



//SIDEBAR
/* Show sidebar nav on mobile */
document.addEventListener("DOMContentLoaded", function() {
    let btn = document.getElementById("btnToggleNav");

    if (btn) {
        btn.addEventListener("click", function() {
            openNav()
        });
    }
});

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mobile-menu").style.width = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mobile-menu").style.width = "0";
}

function formatOption(option) {
	var $option = $(
		'<div><strong>' + option.text + '</strong></div><div>' + option.title + '</div>'
	);
	return $option;
}

// FORM USER
$(document).ready(function() {

    var selected_komoditas = $(".selected-komoditas");
    var all_komoditas = $(".all-komoditas");
    var selected_paket = $(".selected-paket");
    var all_paket = $(".all-paket");
    var no_override = $(".no-override");
    var can_override = $(".can-override");

    $(".override-role").on('click change', function(e) {
        var value = $(this).data('value');
        if (value === 1) {
            $('.override-content-role').css('display', 'block');
        } else {
            $('.override-content-role').hide();
        }
    });
    $(".override-data-user").on('click change', function(e) {
        var value = $(this).data('value');
        if (value === 1) {
            $('.override-content-user').css('display', 'block');
            $('#batasmulai').prop('required',true);
            $('#batasselesai').prop('required',true);
            $('#batasdurasi').prop('required',true);
        } else {
            $('#batasmulai').prop('required',false);
            $('#batasselesai').prop('required',false);
            $('#batasdurasi').prop('required',false);
            $('.override-content-user').hide();
        }
    });

    $("#batasmulai").on('click change', function(e) {
        var value = $(this).data('value');
        console.log(value);
        onChangeDate();
    });

    $("#batasselesai").on('click change', function(e) {
        var value = $(this).data('value');
        // console.log(value);
        onChangeDate();
    });

    function onChangeDate(){
        var batasMulai = $('#batasmulai').val();
        var batasSelesai = $('#batasselesai').val();
        if(batasmulai != null && batasselesai!= null && batasmulai!='' && batasSelesai!=''){
            var spdtmulai = batasMulai.split("-");
            var spdtselesai = batasSelesai.split("-");
            var dtmulai = new Date(parseInt(spdtmulai[2]), parseInt(spdtmulai[1])-1, spdtmulai[0]);
            var dtselesai = new Date(parseInt(spdtselesai[2]), parseInt(spdtselesai[1])-1, spdtselesai[0]);
            if(dtmulai > dtselesai){
                showMessage('Batas selesai harus lebih besar dari batas mulai.', true);
                $('#batasmulai').val(null);
                $('#batasselesai').val(null);
                $('#batasdurasi').val(null);
            }else{
                var dateDiff = Math.round((dtselesai-dtmulai)/(1000*60*60*24));
                $('#batasdurasi').val(dateDiff);
                showMessage("", false)
            }
        }
    }

    function showMessage(message, show) {
        var container = jQuery('.message-container');
        if (show) {
            container.html('<div class="alert alert-danger">'+message+'</div>');
        } else {
            container.html('');
        }
    }

    overrideContentVisibility(".override-role", '.override-content-role');
    overrideContentVisibility(".override-commodity",".override-content-commodity");
    overrideContentVisibility(".override-package",".override-content-package");
    overrideContentVisibility(".override-data-user", '.override-content-user');


    function overrideContentVisibility(checkBox, container) {
        $(checkBox).on('click change', function(e) {
            var value = $(this).data('value');
            if (value === 1) {
                $(container).css('display', 'block');
            } else {
                $(container).hide();
            }
        });
    }

    if(all_komoditas.is(':checked'))
        $(".tabel-komoditas").hide();

    if(selected_komoditas.is(':checked'))
        $(".tabel-komoditas").show();

    if(all_paket.is(':checked'))
        $(".tabel-paket").hide();

    if(selected_paket.is(':checked'))
        $(".tabel-paket").show();
    
    if(no_override.is(':checked'))
    	$(".tabel-role-access").hide();
    
    if(can_override.is(':checked'))
    	$(".tabel-role-access").show();
    
    //show-hide komoditas
    $(".all-komoditas").click(function(){
    	$(".tabel-komoditas").hide();
    });

    $(".selected-komoditas").click(function(){
    	$(".tabel-komoditas").show();
    });
    
    //show-hide paket
    $(".all-paket").click(function(){
    	$(".tabel-paket").hide();
    });
    $(".selected-paket").click(function(){
    	$(".tabel-paket").show();
    });
    
    //allow override
    $(".no-override").click(function(){
    	$(".override-content").hide();
    });
    $(".can-override").click(function(){
    	$(".override-content").show();
    });

});


//Datepicker
$(".datepicker, .input-daterange").datepicker({
	format: 'dd-mm-yyyy',
	language: 'id',
    todayBtn: "linked",
    autoclose: true,
    toggleActive: true
});

//Popup
$(".popup").click(function(ev){
	ev.preventDefault();
	var href=$(this).attr("href");
	var win=window.open(href, "popup", "menubar=no");
	win.focus();
	return false;
});
//ajax-loaded elements
$("table").on("click", 'a.popup', function(ev) {
	ev.preventDefault();
	var href=$(this).attr("href");
	var win=window.open(href, "popup", "menubar=no");
	win.focus();
	return false;
});

//delete confirm
$('body').on("click", ".delete", function(){
	var attr = $(this).attr("totalChild");
	if(attr != undefined && attr != false){
		if(attr > 1){
			alert('Data tidak dapat dihapus karena masih berhubungan dengan data yang lain.');
			return false;
		}
	}
	return confirm('Anda yakin akan menghapus data ini?');
});

//--- import excel
function doupload(e,callback) {
	var files = e.target.files;
	var f = files[0];
	{
		var reader = new FileReader();
		var name = f.name;
		reader.onload = function (e) {
			var data = e.target.result;
			try {
				var wb = XLSX.read(data, {type: 'binary'});
				callback(wb);
				alert("Berhasil Upload Template.");
			}catch(err){
				alert("Format template yang anda unggah tidak valid.");
			}
		};
		reader.readAsBinaryString(f);
	}
};

function to_json(workbook, startRow) {
	var result = {};
	workbook.SheetNames.forEach(function (sheetName) {

		var ws = workbook.Sheets[sheetName];

		//skip row, dimulai dari row ke 'startRow'
		var range = XLSX.utils.decode_range(ws['!ref']);
		range.s.r = startRow;
		ws['!ref'] = XLSX.utils.encode_range(range);

		var roa = XLSX.utils.sheet_to_json(ws);

		if (roa.length > 0)
			result[sheetName] = roa;

	});

	return result;
};

$(".checkall").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});

$(".checkall_cms").click(function(){
    $('.check_cms').not(this).prop('checked', this.checked);
});

$(".checkAllGroupRole").click(function(){
    var current =  this.getAttribute("alt");
    $('.check_' + current).not(this).prop('checked', this.checked);
});

$(".checkall_komoditas").click(function(){
    $('.check_komoditas').not(this).prop('checked', this.checked);
});

$(".checkall_commodity").click(function(){
    $('.commodity_td').find('input:checkbox').prop('checked', this.checked);
});


$(".checkall_commodity_national").click(function(){
    $('.commodity_national_td').find('input:checkbox').prop('checked', this.checked);
});


$(".checkall_commodity_local").click(function(){
    $('.commodity_local_td').find('input:checkbox').prop('checked', this.checked);
});


$(".checkall_commodity_sectoral").click(function(){
    $('.commodity_sectoral_td').find('input:checkbox').prop('checked', this.checked);
});

$(".checkall_prakatalog").click(function(){
    $('.check_prakatalog').not(this).prop('checked', this.checked);
});

$(".checkall_Services").click(function(){
    $('.check_Services').not(this).prop('checked', this.checked);
});

function myParseFloat(data){
    if(data == null){
        return false;
    }
    return parseFloat(data.replace(/,/gi,""));
}

$.fn.convertThousand = function(options){

    if($().formatCurrency){
        this.each(function(){
            var t = $(this);
            var x = myParseFloat(t.val());
            if(isNaN(x)){
                x = 0;
            }
            var x = x.toFixed(2);
            t.val(x);
            t.formatCurrency({
                symbol: ""
                ,negativeFormat: "-%s%n"
            });
        });
    }
};

$.fn.onChangeCurrencyFormatter = function (locale) {
    // get sanitized version from data-value
    $(this).keydown(function (event) {
        //console.log(locale);

        if (event.shiftKey == true) {
            event.preventDefault();
        }

        if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105) || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {

        } else {
            event.preventDefault();
        }

        if($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
            event.preventDefault();

    });
    $(this).blur(function () {
        //alert("ok");
        var data = formatting($(this).val());
        $(this).val(data.formatted);
        $(this).attr("data-value", data.sanitized);
    });

    // $(this).on('keyup', function(){
    //     var data = formatting($(this).val());
    //     $(this).val(data.formatted);
    //     $(this).attr("data-value", data.sanitized);
    // });

    firstTime($(this));

    function firstTime(view) {
        // console.log(view.val());
        view.val(formatting(view.val()).formatted);
    }

    function formatting(value) {
        // console.log(value);
        value = value === undefined ? '' : value;
        var data = {};
        data.raw = value;
        data.sanitized = value.replace(/(?!-)[^0-9.]/g, '');
        if (data.sanitized !== '' && !isNaN(data.sanitized)) {
            var n = parseFloat(data.sanitized);
        }
        data.formatted = data.sanitized.length > 0 ? n.toLocaleString("en",{minimumFractionDigits: 1}) : '';
        return data;
    }

};

jQuery(document).ready(function () {
    jQuery('#search-bar').autocomplete({
        delay: 500,
        source: function( request, response ) {
            var term = strip(request.term);
            jQuery('.hidden-q').val(term);
            if (term && term.length > 2){
                jQuery.ajax({
                    url: jQuery('#search-bar').data('url'),
                    dataType: "JSON",
                    data: {
                        q: term
                    },
                    success: function( data ) {
                        response( data );
                    }
                });
            }
        },
        create: function (event,ui){
            jQuery(this).data('ui-autocomplete')._renderItem = function (ul, item) {
                return jQuery('<li>')
                    .append('<a href="' + item.url + '">' + item.desc + '</a>')
                    .appendTo(ul);
            };
        }
    });
});

function strip(html){
    var doc = new DOMParser().parseFromString(html, 'text/html');
    return doc.body.textContent || "";
 }


function htmlUnescape(value){
    if (value) {
        var result = JSZip.base64.decode(value);
        return result;
    } else {
        return '';
    }
}

function htmlEscape(value) {
    if (value) {
        var result = JSZip.base64.encode(value);
        return result;
    } else {
        return '';
    }
}


//--- end of import excel


$(document).ready(function() {
    $('.filter-price').each(function (i, field) {
        $(field).onChangeCurrencyFormatter("id");
    });
});