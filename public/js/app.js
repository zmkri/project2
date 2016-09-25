function printOut(el){
		var restorepage = document.body.innerHTML;
		var printOut = document.getElementById(el).innerHTML;
		document.body.innerHTML = printOut;
		window.print();
		document.body.innerHTML = restorepage;
	}