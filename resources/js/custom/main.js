window.onload = function() {

	console.log("window is ready");
	$('.load_page').on('click', function(e) {
		e.preventDefault();
		// console.log("ok");
		let url = $(this).attr('data-url');

		sendAjax(url,'#main_content');
	});

	function sendAjax(url, location) {

		$.ajax({

			url : url,
			method : 'GET',
			// data : '',
			success : function(resp) {

				$(location).empty();
				$(location).html(resp);
			},
			error : function(err){
				console.log(err);
			}
		});
	}


}