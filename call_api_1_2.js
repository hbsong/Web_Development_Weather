var cityInput = document.getElementById("city-input");
var cityName = document.getElementById("city-name");
var cityName2 = document.getElementById("city-name2");

cityInput.addEventListener("input", cityDisplay);
function cityDisplay() {
    var city = cityInput.value;
    cityName.innerHTML = 'input: ' + city;

    var apiUrl = "http://api.openweathermap.org/data/2.5/weather?q=" + city ;
    $.getJSON(apiUrl, apiReturn);

}

function apiReturn(data) {
    cityInput.addEventListener("mouseleave", cityDisplay);
    function cityDisplay() {
        var temp = data.main.temp - 273.15;
        cityName2.innerHTML = cityInput.value + ": "  + (temp.toFixed(2)) + "°C";
    }
}
