var pieData1 = [
	{
		value: 170,
		color:"#f33043",
		highlight: "#FF5A5E",
		label: "option"
	},
	{
		value: 10,
		color: "#fcb3ac",
		highlight: "#FF5A5E",
		label: "option"
	},
	{
		value: 20,
		color: "#3fbfae",
		highlight: "#5AD3D1",
		label: "option"
	},
	{
		value: 100,
		color: "#69ccca",
		highlight: "#3da9a9",
		label: "option"
	},
	{
		value: 40,
		color: "#9ddada",
		highlight: "#3da9a9",
		label: "option"
	}
];

var pieData2 = [
	{
		value: 170,
		color:"#f33043",
		highlight: "#FF5A5E",
		label: "option"
	},
	{
		value: 100,
		color: "#69ccca",
		highlight: "#3da9a9",
		label: "option"
	},
	{
		value: 40,
		color: "#9ddada",
		highlight: "#3da9a9",
		label: "option"
	}

];

var pieData3 = [
	{
		value: 100,
		color:"#f33043",
		highlight: "#FF5A5E",
		label: "option"
	},
	{
		value: 100,
		color: "#fcb3ac",
		highlight: "#FF5A5E",
		label: "option"
	},
	{
		value: 20,
		color: "#3fbfae",
		highlight: "#5AD3D1",
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
