var dashboard = {
	header : "Dashboard <small> Sage Bionetworks</small>",
	description: "<p>Sage is popular with the Synapse software that helps scientists and cancer researchers to store, manage and share data. Dashboard is a web application that shows how users use Synapse.</p><p>I took requests from other developers and data scientists, and implemented new metrics for Dashboard. Also I’m working on building and maintaining a data warehouse on Amazon Redshift.</p>",
	technology: "<ul><li>Eclipse Luna</li><li>Scala IDE for Eclipse</li><li>Redis</li><li>Play Framework</li></ul>",
	source: "<button class='button'><a href='https://github.com/kimyen/dashboard'>Dashboard</a></button> <button class='button'><a href='https://github.com/kimyen/dashboard-ui'>Dashboard UI</a></button>"
};
var kubi = {
	header : "Kubi Operations <small> Human Centered Robotic Lab - University of Washington </small>",
	description: "<p>Kubi is a robot that gives users the freedom to interact while video conferencing. I designed the robot facial expressions and actions on Nexus 7 using Eclipse for Android Developers. I’m working on merging and syncing a chatbot, robot movements, and facial expressions together so that users can have a human-like conversation with the robot.</p>",
	technology: "",
	source: ""
};
var campusPath = {
	header : "Campus Path <small> University of Washington </small>",
	description: "",
	technology: "",
	source: ""
};
var bj = {
	header : "Black Jack <small> Bellevue College </small>",
	description: "",
	technology: "",
	source: ""
};

$(document).ready(function() {
	$('.portfolio-item').click(function(){
		var id = this.id;
		$('#project-header').html(window[id].header);
		$('#project-description').html(window[id].description);
		$('#technology').html(window[id].technology);
		$('#source-code').html(window[id].source);
	});
	$('#dashboard').trigger("click");
});