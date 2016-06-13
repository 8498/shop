	var modalSignIn = document.getElementById('modalSignIn');
	
	var buttonSignInModal = document.getElementById('buttonSignInModal');
	
	buttonSignInModal.onclick = showSignInModal;
	
	var closeSignInModal = document.getElementById('closeSignInModal');
	
	closeSignInModal.onclick = hideSignInModal;
	
	var modalSignUp = document.getElementById('modalSignUp');
	
	var buttonSignUpModal = document.getElementById('buttonSignUpModal');
	
	buttonSignUpModal.onclick = showSignUpModal;
	
	var closeSignUpModal = document.getElementById('closeSignUpModal');
	
	closeSignUpModal.onclick = hideSignUpModal;

	function showSignInModal() {
		modalSignIn.style.display = "block";
		return false;
	}
	function hideSignInModal() {
		modalSignIn.style.display = "none";
	}

	function showSignUpModal() {
		modalSignUp.style.display = "block";
		return false;
	}
	
	function hideSignUpModal() {
		modalSignUp.style.display = "none";
	}