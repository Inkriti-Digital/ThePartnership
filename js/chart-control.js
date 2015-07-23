var pieData1 = [
	{
		value: 57,
		color:"#f33043",
		highlight: "#f33043",
		label: "Early Career"
	},
	{
		value: 38,
		color: "#9ddada",
		highlight: "#9ddada",
		label: "Mid-Career"
	},
	{
		value: 4,
		color: "#69ccca",
		highlight: "#69ccca",
		label: "Next Generation"
	},
	{
		value: 1,
		color: "#3fbfae",
		highlight: "#3fbfae",
		label: "Executive"
	}
];

var pieData2 = [
	{
		value: 57,
		color:"#f33043",
		highlight: "#f33043",
		label: "Early Career"
	},
	{
		value: 38,
		color: "#9ddada",
		highlight: "#9ddada",
		label: "Mid-Career"
	},
	{
		value: 4,
		color: "#69ccca",
		highlight: "#69ccca",
		label: "Next Generation"
	},
	{
		value: 1,
		color: "#3fbfae",
		highlight: "#3fbfae",
		label: "Executive"
	},
	{
		value: 1,
		color: "#fcb3ac",
		highlight: "#fcb3ac",
		label: "C-Suite"
	}

];

var pieData3 = [
	{
		value: 100,
		color:"#f33043",
		highlight: "#f33043",
		label: "option"
	},
	{
		value: 100,
		color: "#9ddada",
		highlight: "#9ddada",
		label: "option"
	},
	{
		value: 20,
		color: "#69ccca",
		highlight: "#69ccca",
		label: "option"
	},
	

];

window.onload = function(){
	var ctx1 = document.getElementById("chart-area1").getContext("2d");
	window.myPie = new Chart(ctx1).Pie(pieData1);

	var ctx2 = document.getElementById("chart-area2").getContext("2d");
	window.myPie = new Chart(ctx2).Pie(pieData2);

	var ctx3 = document.getElementById("chart-area3").getContext("2d");
	window.myPie = new Chart(ctx3).Pie(pieData3);

	// animationEasing : "easeOut";
};
