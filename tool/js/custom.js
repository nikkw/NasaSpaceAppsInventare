$(document).ready(function() {

	$('#send').click(function() {
		var msg = $('#message').val();
		var byemail = $('#byemail').val();
		var bysms = $('#bysms').val();

		if(msg){

			$.ajax({
                url: 'scripts/send.php',
                type: 'POST',
                data: {
                    msg: msg,
                    byemail: byemail,
                    bysms: bysms
                },
                success: function (data) {
                	$('#modalSuccess').modal('show');

                    console.log(data);
                },
                error: function () {
                	$('#modalError').modal('show');
                }
            });			
		}else{
			$('#modalError').modal('show');

		}
	});
});