$(document).ready(function(){
	$("input").attr("autocomplete","off");

	$('form,input,select,textarea').attr("autocomplete", "off");

	$('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 15 // Creates a dropdown of 15 years to control year
	  });

	$('[data-toggle="tooltip"]').tooltip({animation: true, delay: {show: 300, hide: 900}});

	$('select').material_select();

	

});