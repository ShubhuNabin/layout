


	$('.load_admin').on('click', function(e) {

		e.preventDefault();

		let url = $(this).attr('data-url');
		sendAjax(url,'#admin_content');

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