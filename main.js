function main() {
	/*esconde os itens*/
	$('#01').hide();
	$('#02').hide();
	$('#03').hide();
	$('#04').hide();
	$('#05').hide();
	$('#06').hide();
	$('#07').hide();
	$('#08').hide();
	$('#09').hide();
	$('#10').hide();
	$('#11').hide();

	/*aparecem os itens um a um*/
	$('#01').fadeIn(600);
	$('#02').fadeIn(800);
	$('#03').fadeIn(1000);
	$('#04').fadeIn(1200);
	$('#05').fadeIn(1400);
	$('#06').fadeIn(1600);
	$('#07').fadeIn(1800);
	$('#08').fadeIn(2000);
	$('#09').fadeIn(2200);
	$('#10').fadeIn(2400);
	$('#11').fadeIn(2600);
}

$(document).ready(main);