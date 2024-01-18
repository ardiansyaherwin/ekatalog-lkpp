function populateDataSikap(data,kualifikasi){
	var html = "";
	if(kualifikasi == "izin_usaha"){
		$.each(data.izin_usaha,function(key, val){
			html+= "<tr>";
			html+= "<td>"+ val.jni_nama +"</td>";
			html+= "<td>"+ val.ius_no +"</td>";
			html+= "<td>"+ val.ius_berlaku +"</td>";
			html+= "<td>"+ val.ius_instansi +"</td>";
			html+= "<td>"+ val.status_verifikasi +"</td>";
			html+="</tr>";
		});
	}
	else if(kualifikasi == "akta"){
		var akta = data.akta;
		var pendirian = akta != null ? akta.akta_pendirian : "";
		var perubahan = akta != null ? akta.akta_perubahan : "";

		// console.log(pendirian);
		// console.log(perubahan);

		//pendirian
		if(pendirian != null){
			html = "";
			$.each(pendirian,function(key, val){
				html+= "<tr>";
				html+= "<td>"+ val.lhk_no +"</td>";
				html+= "<td>"+ val.lhk_tanggal +"</td>";
				html+= "<td>"+ val.lhk_notaris +"</td>";
				html+= "<td>"+ val.status_verifikasi +"</td>";
				html+="</tr>";
			});
			
			$("#tbl-akta-pendirian tbody").html(html);
		}
		
		//perubahan
		if(perubahan != null){
			html = "";
			$.each(perubahan,function(key, val){
				html+= "<tr>";
				html+= "<td>"+ val.lhk_no +"</td>";
				html+= "<td>"+ val.lhk_tanggal +"</td>";
				html+= "<td>"+ val.lhk_notaris +"</td>";
				html+= "<td>"+ val.status_verifikasi +"</td>";
				html+="</tr>";
			});
			
			$("#tbl-akta-perubahan tbody").html(html);
		}

	}
	else if(kualifikasi == "pengurus"){
		$.each(data.pengurus,function(key, val){
			html+= "<tr>";
			html+= "<td>"+ val.pgr_nama +"</td>";
			html+= "<td>"+ val.pgr_ktp +"</td>";
			html+= "<td>"+ val.pgr_alamat +"</td>";
			html+= "<td>"+ val.pgr_jabatan +"</td>";
			html+= "<td>"+ val.status_verifikasi +"</td>";
			html+="</tr>";
		});
	}
	else if(kualifikasi == "pemilik"){
		$.each(data.pemilik,function(key, val){
			html+= "<tr>";
			html+= "<td>"+ val.pml_nama +"</td>";
			html+= "<td> - </td>";
			html+= "<td>"+ val.pml_alamat +"</td>";
			html+= "<td>"+ val.pml_saham +" Lembar</td>";
			html+= "<td>"+ val.status_verifikasi +"</td>";
			html+="</tr>";
		});
	}
	else if(kualifikasi == "tenaga_ahli"){
		$.each(data.tenaga_ahli,function(key, val){
			html+= "<tr>";
			html+= "<td>"+ val.sta_nama +"</td>";
			html+= "<td>"+ val.sta_ktp +"</td>";
			html+= "<td>"+ val.sta_tgllahir +"</td>";
			html+= "<td>"+ val.sta_pendidikan +"</td>";
			html+= "<td>"+ val.sta_pengalaman +" Tahun </td>";
			html+= "<td>"+ val.sta_keahlian +"</td>";
			html+= "<td>"+ val.status_verifikasi +"</td>";
			html+="</tr>";
		});
	}
	else if(kualifikasi == "peralatan"){
		$.each(data.peralatan,function(key, val){
			html+= "<tr>";
			html+= "<td>"+ val.alt_jenis +"</td>";
			html+= "<td>"+ val.alt_jumlah +"</td>";
			html+= "<td>"+ val.alt_kapasitas +"</td>";
			html+= "<td>"+ val.alt_merktipe +"</td>";
			html+= "<td>"+ val.alt_kondisi +"</td>";
			html+= "<td>"+ val.alt_thpembuatan +"</td>";
			html+= "<td>"+ val.alt_lokasi +"</td>";
			html+= "<td>"+ val.alt_kepemilikan +"</td>";
			html+= "<td>"+ val.status_verifikasi +"</td>";
			html+="</tr>";
		});
	}
	else if(kualifikasi == "pengalaman"){
		$.each(data.pengalaman,function(key, val){

			var tglkontrak = val.pgl_tglkontrak == "null" ? "-" : val.pgl_tglkontrak;
			var slskontrak = val.pgl_slskontrak == "null" ? "-" : val.pgl_slskontrak;

			html+= "<tr>";
			html+= "<td>"+ val.pgl_kegiatan +"</td>";
			html+= "<td>"+ val.pgl_lokasi +"</td>";
			html+= "<td>"+ val.pgl_pembtgs +"</td>";
			html+= "<td>"+ val.pgl_almtpembtgs +"</td>";
			html+= "<td>"+ tglkontrak +"</td>";
			html+= "<td>"+ slskontrak +"</td>";
			html+= "<td>"+ val.pgl_nilai +"</td>";
			html+= "<td>"+ val.kategori_keterangan +"</td>";
			html+= "<td>"+ val.status_verifikasi +"</td>";
			html+="</tr>";
		});
	}
	else if(kualifikasi == "pajak"){
		$.each(data.pajak,function(key, val){
			html+= "<tr>";
			html+= "<td>"+ val.jnp_nama +"</td>";
			html+= "<td>"+ val.pjk_tanggal +"</td>";
			html+= "<td>"+ val.pjk_no +"</td>";
			html+= "<td>"+ val.status_verifikasi +"</td>";
			html+="</tr>";
		});
	}

	return html;
}