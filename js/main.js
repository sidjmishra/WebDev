// Text area focus
const inputs = document.querySelectorAll('.input');

function addcl() {
	let parent = this.parentNode.parentNode;
	parent.classList.add('focus');
}

function remcl() {
	let parent = this.parentNode.parentNode;
	if (this.value == '') {
		parent.classList.remove('focus');
	}
}

inputs.forEach((input) => {
	input.addEventListener('focus', addcl);
	input.addEventListener('blur', remcl);
});

// Slider
function startSlide(pause) {
	var slides = document.querySelectorAll('#slides .slide');
	var currentSlide = 0;
	var slideInterval = setInterval(nextSlide, pause * 1000);

	function nextSlide() {
		slides[currentSlide].className = 'slide';
		currentSlide = (currentSlide + 1) % slides.length;
		slides[currentSlide].className = 'slide showing';
	}
}

// Calculator
function addition(a, b) {
	document.getElementById('ans').value = (parseFloat(a) + parseFloat(b));
}

function subtraction(a, b) {
	document.getElementById('ans').value = (parseFloat(a) - parseFloat(b));
}

function multiplication(a, b) {
	document.getElementById('ans').value = (parseFloat(a) * parseFloat(b));
}

function division(a, b) {
	document.getElementById('ans').value = (parseFloat(a) / parseFloat(b));
}

// Form Validation
function formValidate(a) {
	const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(re.test(a)) {
		document.getElementById('validate1').innerHTML = "";
	} else {
		document.getElementById('validate1').innerHTML = "Please Enter Valid EmailId!!";
	}
}

function formPassword(a) {
	const decimal =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
	if(decimal.test(a)) {
		document.getElementById('validate2').innerHTML = "";
	} else {
		document.getElementById('validate2').innerHTML = "Password should contain atleast 1 Upper, 1 Lower, 1 Special, 1 Numeric and length 8-15 chars";
	}
}