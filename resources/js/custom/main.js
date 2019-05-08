window.onload = function() {

	console.log("window is ready");
	$('.load_page').on('click', function(e) {
		e.preventDefault();
		// console.log("ok");
		let url = $(this).attr('data-url');

		sendAjax(url);
	});

	function sendAjax(url) {

		$.ajax({

			url : url,
			method : 'GET',
			// data : '',
			success : function(resp) {

				// $('#main_content').empty();
				$('#main_content').html(resp);
			},
			error : function(err){
				console.log(err);
			}
		});
	}


}