//reusable class toggle function:
// ontouchstart="classToggle('nav', 'toggle-reveal')"
// 
(function () {
	let button = document.getElementById('menu-toggle');
	function classToggle(id, className) {
	 	return document.getElementById(id).classList.toggle(className);
	}

	function navToggle(event) {
		classToggle('nav', 'toggle-reveal');
		event.preventDefault();
		event.stopPropagation();
	}

	
	(function addClassToggle (){
		button.addEventListener('touchstart', navToggle, false);
	})();


	return button;
})();
