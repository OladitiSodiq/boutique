function sendData(path, data, notification = {}) {
	const { type, title, text } = notification
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
	    }
	});
	$.post(path,
	    data,
	    function(data, status) {
	    	const { error } = data
	    	if (!error) {
	    		notify(type, title, text)
	    	} else {
	    		notify('alert', 'Error', 'Error Occured. Try again')
	    	}
	    });
}