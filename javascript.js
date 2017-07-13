var copenhagen = "2618425";
var pittsburgh = "5206379";
var morgantown = "4815352";
var orlando    = "4167147";
var apiKey 	   = "xxx"

function getPiHole() {
	$.ajax({
		url: 'getPiHole.php',
		success: function(data){
			var api = JSON.parse(data);
			document.getElementById("ads_blocked_today").innerHTML = api.ads_blocked_today;
			document.getElementById("ads_percentage_today").innerHTML = Math.round(parseFloat(api.ads_percentage_today)*100) / 100 + "%";
			document.getElementById("dns_queries_today").innerHTML = api.dns_queries_today;
			document.getElementById("domains_being_blocked").innerHTML = api.domains_being_blocked;
		}
	});
}

function getRSQuote() {
	$.ajax({
		url: 'http://ron-swanson-quotes.herokuapp.com/v2/quotes',
		success: function(data){
			document.getElementById("Quote").innerHTML = data;
		}
	});
}

function getTrakt() {
	$.ajax({
		url: 'getCalendar.php',
		success: function(data){
			var trakt = JSON.parse(data);
			var HTML = "<table><th>Date</th><th>Show</th><th>S/E</th><th>To Watch</th>";
			for(var i = 0; i < trakt.length; i++) {
				console.log(trakt[i].episode.title);
				var date = new Date(trakt[i].first_aired);
				console.log(date);
				HTML += "<tr>";
				HTML += "<td>" + String(date.getDate())+"/"+String(date.getMonth()) + "</td><td>" + trakt[i].show.title + "</td><td>S" + trakt[i].episode.season + "E" + trakt[i].episode.number + "</td><td>" + trakt[i].show.ids.trakt + "</td></tr>";

			}
			HTML += "</table>";
			document.getElementById("calendar").innerHTML = HTML;
		}
	});
}

function getTemp() {
	$.ajax({
		url: 'getTemp.php',
		success: function(data){
			var temperature = JSON.parse(data);
			document.getElementById("FtempC").innerHTML = temperature.Temperature.Celsius + "&#176;C";
			document.getElementById("FtempF").innerHTML = temperature.Temperature.Fahrenheit + "&#176;F";
		}
	});
}

function getCurrency() {
	$.ajax({
		url: 'getCurrency.php',
		success: function(data){
			var currency = JSON.parse(data);
			document.getElementById("CurrU").innerHTML = Math.round(1/(parseFloat(currency.rates.USD))*100) / 100 + " &dollar;";
			document.getElementById("CurrE").innerHTML = Math.round(1/(parseFloat(currency.rates.EUR))*100) / 100 + " &euro;";
			document.getElementById("CurrS").innerHTML = Math.round(1/(parseFloat(currency.rates.SEK))*100) / 100 + " SEK";
			document.getElementById("CurrG").innerHTML = Math.round(1/(parseFloat(currency.rates.GBP))*100) / 100 + " &pound;";
		}
	});
}

function getTrain() {
	$.ajax({
		url: 'getTrain.php',
		success: function(data){
			var train = JSON.parse(data);
			var HTML1 = "<table><tr><th>Departure</th><th>Line</th><th>Towards</th></tr>";
			var HTML2 = "<table><tr><th>Departure</th><th>Line</th><th>Towards</th></tr>";
			var HTML12 = "<table><tr><th>Departure</th><th>Line</th><th>Towards</th></tr>";
			var HTML24 = "<table><tr><th>Departure</th><th>Line</th><th>Towards</th></tr>";

			for(var i = 0; i < train.DepartureBoard.Departure.length; i++) {
				var obj = train.DepartureBoard.Departure[i];
				if (obj.rtTrack == "1") {
					if (obj.name == "A") {
						HTML1+="<tr style=\"color:#3498db\">"
					} else if (obj.name == "E") {
						HTML1+="<tr style=\"color:#9b59b6\">";
					}
					HTML1 += "<td>" + obj.time + "</td><td>" + obj.name + "</td><td>" + obj.finalStop + "</td></tr>";
				}
				if (obj.rtTrack == "2") {
					if (obj.name == "A") {
						HTML2+="<tr style=\"color:#3498db\">"
					} else if (obj.name == "E") {
						HTML2+="<tr style=\"color:#9b59b6\">";
					}
					HTML2 += "<td>" + obj.time + "</td><td>" + obj.name + "</td><td>" + obj.finalStop + "</td></tr>";
				}
				if (obj.rtTrack == "12") {
					if (obj.name == "F") {
						HTML12+="<tr style=\"color:#f39c12\">"
					} else if (obj.name == "M") {
						HTML12+="<tr style=\"color:#f1c40f\">";
					}
					HTML12 += "<td>" + obj.time + "</td><td>" + obj.name + "</td><td>" + obj.finalStop + "</td></tr>";
				}
				if (obj.rtTrack == "24" || obj.rtTrack == "23") {
					HTML24 += "<tr style=\"color:#95a5a6\"><td>" + obj.time + "</td><td>" + obj.name + "</td><td>" + obj.finalStop + "</td></tr>";
				}
			}
			HTML1+="</table>";
			HTML2+="</table>";
			HTML12+="</table>";
			HTML24+="</table>";
			document.getElementById("Track1").innerHTML = HTML1;
			document.getElementById("Track2").innerHTML = HTML2;
			document.getElementById("Track12").innerHTML = HTML12;
			document.getElementById("Track24").innerHTML = HTML24;
		}
	});
}

function startTime() {
	var today = new Date();
	var h = today.getHours();
	var m = today.getMinutes();
	var s = today.getSeconds();
	m = checkTime(m);
	s = checkTime(s);
	document.getElementById('Ctime').innerHTML =
	h + ":" + m;
	var t = setTimeout(startTime, 500);
}

function checkTime(i) {
	if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
	return i;
}

function getWeatherF(city,api) {
	var apikey = api;
	var weather = "";
	$.ajax({
		url: 'http://api.openweathermap.org/data/2.5/weather?id='+city+'&APPID='+apikey+'&units=metric',
		success: function(data){
			var c = data.main.temp.toFixed(2);
			var f = (c*1.8+32).toFixed(2);
			var icon = '<img src=icons/' + data.weather[0].icon + '.png align="middle" style="width:128px;height:128px;">';	
			document.getElementById("tempCPH").innerHTML = c+"&#176;C " + f + "&#176;F";
			document.getElementById("descCPH").innerHTML = data.weather[0].description + "<p></p>" + icon;
		}
	});
}

function getWeatherB(city,api) {
	var apikey = api;
	var weather = "";
	$.ajax({
		url: 'http://api.openweathermap.org/data/2.5/weather?id='+city+'&APPID='+apikey+'&units=metric',
		success: function(data){
			var c = data.main.temp.toFixed(2);
			var f = (c*1.8+32).toFixed(2);
			var icon = '<img src=icons/' + data.weather[0].icon + '.png align="middle" style="width:128px;height:128px;">';	
			document.getElementById("tempOrlando").innerHTML = c+"&#176;C " + f + "&#176;F";
			document.getElementById("descOrlando").innerHTML = data.weather[0].description + "<p></p>" + icon;
		}
	});
}

function startup() {
	getPiHole();
	getRSQuote();
	getTemp();
	getCurrency();
	getTrain();
	getTrakt();
	startTime();
	getWeatherF(copenhagen,apiKey);
	getWeatherB(orlando, apiKey);
}



