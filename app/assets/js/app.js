$(document)
	.on("submit", "form#js-register", function (event) {
		event.preventDefault();

		var _form = $(this);
		var _error = $(".js-error", _form);

		var dataObj = {
			email: $("input[type='email']", _form).val(),
			password: $("input[type='password']", _form).val()
		};
    
		console.log(dataObj.email.length);

		if (dataObj.email.length < 6) {
			_error
				.text("Please enter a valid email address")
				.show();
			return false;
		} else if (dataObj.password.length < 11) {
			_error.text("Please enter a password atleast 11 characters long").show();
			return false;
		}

		// Hides the code when user updates password to more than 11 char
		_error.hide();

		$.ajax({
			type: 'POST',
			url: '../../../ajax/register.ajax.php',
			data: dataObj,
			dataType: 'json',
			async: true,
		})
		.done(function ajaxDone(data) {
			// This is where the data goes
			console.log(data);
			if (data.redirect !== undefined) {
				window.location = data.redirect;
			}			
		})
		.fail(function ajaxFailed(e) {
			// If the request fails
			console.log(e);
		})
		.always(function ajaxAlwaysDoThis(data) {
			// Ajax to always do this
			exit();
		})

    return false;

})