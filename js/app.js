

$(document).ready(function(){
	// use bloodhound which allows use to perform search on the frontend
	var address = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('address'),
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		remote: 'address.php?query=%QUERY'
	});

	address.initialize();

	$('#addreses').typeahead({
		hint: true,
		highlight: true,
		minLenght: 1
	}, 

	{
		name: 'address',
		displayKey: 'address',
		source: address.ttAdapter()
	});
});