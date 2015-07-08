var pieData1 = [
	{
		value: 300,
		color:"#F7464A",
		highlight: "#FF5A5E",
		label: "Red"
	},
	{
		value: 50,
		color: "#46BFBD",
		highlight: "#5AD3D1",
		label: "Green"
	},
	{
		value: 100,
		color: "#FDB45C",
		highlight: "#FFC870",
		label: "Yellow"
	},
	{
		value: 40,
		color: "#949FB1",
		highlight: "#A8B3C5",
		label: "Grey"
	},
	{
		value: 120,
		color: "#4D5360",
		highlight: "#616774",
		label: "Dark Grey"
	}
];

var pieData2 = [
	{
		value: 50,
		color:"#F7464A",
		highlight: "#FF5A5E",
		label: "Red"
	},
	
	{
		value: 100,
		color: "#FDB45C",
		highlight: "#FFC870",
		label: "Yellow"
	},
	
	{
		value: 120,
		color: "#4D5360",
		highlight: "#616774",
		label: "Dark Grey"
	}

];

var pieData3 = [
	{
		value: 90,
		color:"#F7464A",
		highlight: "#FF5A5E",
		label: "Red"
	},
	{
		value: 50,
		color: "#46BFBD",
		highlight: "#5AD3D1",
		label: "Green"
	},
	{
		value: 100,
		color: "#FDB45C",
		highlight: "#FFC870",
		label: "Yellow"
	},
	{
		value: 200,
		color: "#4D5360",
		highlight: "#616774",
		label: "Dark Grey"
	}

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