/*
 * TMT Members Theme Function (chk user)
 * user login & logout check.
 *
 */
 
$(document).ready(function($) {

/*//////////////////////////////////////
 * LOG IN
/*//////////////////////////////////////

	$.ajax({
		url : url_select_all_chkusr,
		dataType: 'json'
	}) // END SELECT //
	.done(function(data) {


/*//////////////////////////////////////
 * CLICK LOGIN
/*//////////////////////////////////////
	
		$('#wp-submit').mousedown(function(){
			var user_login = $('#user_login').val();

			total = data;
			for (var i = 0; i < total.length; i++) {
				if(data[i].userLogin == user_login){
					var userId = data[i].id;
					var userStatus = 'login';
					$.ajax({
						url: url_insert_chkusr,
						type: "POST",
						data: { user_id: userId, user_status: userStatus }
					}) // END INSERT //
					.done(function(data){
						// done
					}) // END DONE INSERT LOGIN //
					.fail(function(data){
						alert('FAIL \nINSERT LOGIN \nUSER LOGIN & LOGOUT CHK \nTMT.CHKUSER');
					}) // END FAIL INSERT LOGIN //
				}else{}
			} // END FOR VAR LOOP //	
		}) // END CLICK LOGIN //	
	}) // END DONE SELECT LOGIN //
	.fail(function(data){
		alert('FAIL \nSELECTALL -> LOGIN \nUSER LOGIN & LOGOUT CHK \nTMT.CHKUSER');
	}); // END FAIL SELECT LOGIN //
	

/*//////////////////////////////////////
 * LOG OUT
/*//////////////////////////////////////

	$('.ab-item').mousedown(function(){
		var userId = $('#chkuser').val();
		var userStatus = 'logout';
		$.ajax({
			url: url_insert_chkusr,
			type: "POST",
			data: { user_id: userId, user_status: userStatus }
		}) // END INSERT //
		.done(function(data){
			// done
		})// END DONE INSERT LOGOUT
		.fail(function(data){
			alert('FAIL \nINSERT LOGOUT \nUSER LOGIN & LOGOUT CHK \nTMT.CHKUSER');
		})
	}) // END MOUSEDOWN LOGOUT READY //
}); // END JQUERY READY //