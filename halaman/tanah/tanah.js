$(document).ready(function() {
	var Modul=$('section#section-tanah');

	//memanggil fungsi
	selectTanah();
	console.log(selectTanah);

});

function selectTanah(){
	var Modul=$('section#section-tanah');

	$.ajax({
		type	:"POST",
		dataType:"json",
		url		:"halaman/tanah/tanah_proses.php",
		data 	:{action:"viewTanah"},
		success	:function(json){
			Modul.find("table#tabelData tbody").empty();
			$.each(json, function(index,row){
				var isi="<tr>"+
							"<td>"+row.id_data+"</td>"+
            				"<td>"+row.data_waktu+"</td>"+
            				"<td>"+row.moisture+"</td>"+
        				"</tr>";

				Modul.find("table#tabelData tbody").append(isi);
			});
		}
	});
}