var ConverterService = 
{
	getIndex: function(celsius, callback)
	{
		$.ajax({
		  url: 'service/converter.action.php',
		  data: {'celsius': celsius},
		  success: function(result) 
		  {
		  	callback(parseFloat(result));
		  },
		  error: function() 
		  {
		  	callback(null);
		  }
		});
	}
};