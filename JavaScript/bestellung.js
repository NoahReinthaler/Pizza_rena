
'use strict';
document.addEventListener('DOMContentLoaded', function () {
	document.Testform.Pizza.addEventListener('change', CheckAuswahl);

	function CheckAuswahl() {
		var menu = document.Testform.Pizza;
		document.querySelector('output')
			.innerHTML = menu.options[menu.selectedIndex].value;
	}
});
