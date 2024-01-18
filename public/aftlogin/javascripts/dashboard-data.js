window.chartColors = {
	red: 'rgb(255, 99, 132)',
	orange: 'rgb(255, 159, 64)',
	yellow: 'rgb(255, 205, 86)',
	green: 'rgb(75, 192, 192)',
	blue: 'rgb(54, 162, 235)',
	purple: 'rgb(153, 102, 255)',
	grey: 'rgb(201, 203, 207)'
};

// Info Penjualan
var MONTHS = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"];
var color = Chart.helpers.color;
var barChartData = {
		labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
		datasets: [{
			label: 'Produk',
			backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
			borderColor: window.chartColors.red,
			borderWidth: 1,
			data: [
			       100,22,47,20,55,87,34,22,98,113,50,19
			]
		}]
};

window.onload = function() {
	var penjualanE = document.getElementById("info-penjualan");
	var omsetE = document.getElementById("omset");

	if(penjualanE != null && omsetE != null ){
        var penjualan = penjualanE.getContext("2d");
        var omset = omsetE.getContext("2d");
        window.myBar = new Chart(penjualan, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                }
            }
        });
        window.myBar = new Chart(omset, {
            type: 'line',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                }
            }
        });
	}

}