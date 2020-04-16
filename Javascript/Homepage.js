const cases = document.querySelector("#cases");
const cured = document.querySelector("#cured");
const death = document.querySelector("#death");

// // For mobile
const mcases = document.querySelector("#mcases");
const mcured = document.querySelector("#mcured");
const mdeath = document.querySelector("#mdeath");

$.getJSON("https://api.covid19india.org/data.json", function(data) {
    state = data.statewise[0];
    totalconfirmed = state.confirmed;
    totaldeaths = parseInt(state.deaths) + parseInt(state.deltadeaths);
    totalcured = state.recovered;

    cases.innerHTML = "Total Cases : " + totalconfirmed;
    cured.innerHTML = "Total Cured : " + totalcured;
    death.innerHTML = "Total Death :" + totaldeaths;

    mcases.innerHTML = "Total Cases : " + totalconfirmed;
    mcured.innerHTML = "Total Cured : " + totalcured;
    mdeath.innerHTML = "Total Death :" + totaldeaths;
});