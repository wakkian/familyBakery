$(function(){
	$.ajaxSetup({
		headers:{
			'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
		}
	});
	//buka pop up hapus
	$('[data-js=open-remove]').on('click',function(e){
		console.log('Clicked');
		$("#remove").modal();
	});
	$('[data-js-type=modal-submit]').on('click', function(e){
		$.ajax({
			url:"deletecabang",
			method: "POST",
			dataType: "json",
			data:{ id: $("[data-js=open-remove]").find('span').attr('id')},
			success: function(result){
				console.log("Success : ", result);
				if(result.Success){
					document.location.relode(true);
				}else if(result.Error){
					console.log('Error form the Server ' result.Error);
				}
			},
			error: function(error){
				console.log("AJAX ERROR: ", error);
			}
		});
	});
})