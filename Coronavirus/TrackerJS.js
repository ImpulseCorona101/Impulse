
const cases = document.getElementById("cases");
const cured = document.getElementById("cured");
const death = document.getElementById("death");

const heading = document.getElementById("heading");

const myform = document.querySelector(".myform");

const stateInput = document.getElementById("state");



$.getJSON("https://api.covid19india.org/data.json", function(data) {

    element = data.statewise[0];
    totalconfirmed = element.confirmed;
    totaldeaths = parseInt(element.deaths) + parseInt(element.deltadeaths);
    totalcured = element.recovered;
    cases.innerHTML = " Total Cases : " + totalconfirmed;
    cured.innerHTML = " Total Cured : " + totalcured;
    death.innerHTML = " Total Death : "+ totaldeaths;
   

});




myform.addEventListener('submit',onSubmit);

function onSubmit(e){
    e.preventDefault();
    const stateInput = document.getElementById("state");
    console.log(stateInput.value);

    $.getJSON("https://api.covid19india.org/data.json", function(data) {

    for (let i = 1; i < 38; i++) {
        if (data.statewise[i].state == stateInput.value) {
            element = data.statewise[i];
            totalconfirmed = element.confirmed;
            totaldeaths = parseInt(element.deaths) + parseInt(element.deltadeaths);
            totalcured = element.recovered;

            cases.innerHTML = " Total Cases : " + totalconfirmed;
            cured.innerHTML = " Total Cured : " + totalcured;
            death.innerHTML = " Total Death : "+ totaldeaths;
            heading.innerHTML = "Current " + stateInput.value + " Status"
            break;

        }
    }

});
}

