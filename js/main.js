//two functions one for the mobile contact page and one for the regular contact page
//divided this way because the form needed to be doubled

$('#contactBtn').on('click', function() {
	var name = $('#name').val();
	var email = $('#email').val();
	var msg = $('#message').val();
	var cont = true;

	var nameLabel = "<span ";
	var emailLabel = "<span ";
	var msgLabel = "<span ";

	if (name == "") {
		nameLabel += "class='red'>Name</span>";
		cont = false;
	} else {
		nameLabel += ">Name</span>";
	}

	if (email == "") {
		emailLabel += "class='red'>Email</span>";
		cont = false;
	} else {
		emailLabel += ">Email</span>";
	}

	if (msg == "") {
		msgLabel += "class='red'>Message</span>";
		cont = false;
	} else {
		msgLabel += ">Message</span>";
	}

	$("#nameLabel").html(nameLabel);
	$("#emailLabel").html(emailLabel);
	$("#msgLabel").html(msgLabel);

	if (cont) {
		$.ajax({
			url:"contact.php",
			data:"name=" + name + "&email=" + email + "&message=" + msg,
			method:"POST",
			success:function() {
				$("#contactForm").html("<h2 class='secHead'>Message Sent!</h2>");
			}
		});
	}
});


$('#mobileContactBtn').on('click', function() {
	var name = $('#mobileName').val();
	var email = $('#mobileEmail').val();
	var msg = $('#mobileMessage').val();
	var cont = true;

	var nameLabel = "<span ";
	var emailLabel = "<span ";
	var msgLabel = "<span ";

	if (name == "") {
		nameLabel += "class='red'>Name</span>";
		cont = false;
	} else {
		nameLabel += ">Name</span>";
	}

	if (email == "") {
		emailLabel += "class='red'>Email</span>";
		cont = false;
	} else {
		emailLabel += ">Email</span>";
	}

	if (msg == "") {
		msgLabel += "class='red'>Message</span>";
		cont = false;
	} else {
		msgLabel += ">Message</span>";
	}

	$("#mobileNameLabel").html(nameLabel);
	$("#mobileEmailLabel").html(emailLabel);
	$("#mobileMsgLabel").html(msgLabel);

	if (cont) {
		$.ajax({
			url:"contact.php",
			data:"name=" + name + "&email=" + email + "&message=" + msg,
			method:"POST",
			success:function() {
				$("#mobileContactForm").html("<h2 class='secHead'>Message Sent!</h2>");
			}
		});
	}
});