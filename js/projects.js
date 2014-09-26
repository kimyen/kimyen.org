var dashboard = {
	header : "Dashboard <small> Sage Bionetworks</small>"
	
};
var kubi = {
	header : "Kubi Operations <small> Human Centered Robotic Lab - University of Washington </small>"
};
var campusPath = {
	header : "Campus Path <small> University of Washington </small>"
};
var bj = {
	header : "Black Jack <small> Bellevue College </small>"
};

$(document).ready(function() {
	$('.portfolio-item').click(function(){
		var id = this.id;
		$('#project-header').html(window[id].header);
	});
});