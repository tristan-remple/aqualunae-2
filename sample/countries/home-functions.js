/**
 * Final Project for PROG1700
 * Fall 2022 at NSCC
 * Tristan Remple
 * 
 * This code includes the codepen example that was provided to us.
 * 
 * PSEUDOCODE
 * 
 * We fetch the JSON file containing the country info from the server using an XML/HTTP request.
 * When we have confirmed the file, we parse the JSON data.
 * Reading from the file, we generate a long list of HTML options to insert into the dropdown menu.
 * This list uses some unconventional HTML properties, which are only there to help this script.
 * Upon finishing the list, we replace the placeholder list items in index.html with our actual country list.
 * 
 * These functions are called as soon as this file loads.
 * Our other functions are only called when the user triggers them.
 * 
 * When the user selects a country from the dropdown menu, we use a listener to detect that the field's value has changed.
 * We read the new value (a country name), and then find the option element that matches it.
 * From the option element, we read the population and the area of the country.
 * We know that the area given in the JSON file is in miles.
 * We do calculations to figure out:
 *  * The area in kilometers
 *  * The population density, referencing both miles and kilometers
 *  * The percentage of the world population, assuming the current world population is 8 billion
 * Then we pass these values into an object and round them to 3 decimal places.
 * 
 * We know that our flags are all labelled as <country_name>.png
 * So we need to convert the spaces in the country names to underscores in order to reference those files.
 * We use a simple regular expression to accomplish this.
 * 
 * We generate new contents for the main paragraph, using the calculated object from earlier.
 * We change the inner HTML of the paragraph to update it.
 * We also change the inner HTML of the title to update that.
 * For the image and the Wikipedia link, we need to change the SRC and HREF, respectively.
 * Luckily, Wikipedia articles are clearly named in their URLs.
 * 
 * We create a new event listener to pay attention to user requests to switch the units of measurement.
 * And we pass our object of measurements into the function called by that listener.
 * 
 * Once the entire article has been populated, we removed the hidden class, allowing the user to see it.
 * 
 * When the user clicks on the Switch Units button, its attached listener first asks what text was visible on the button.
 * If the button text said "Show Miles", we use the object of info from the previous function to re-generate the paragraph HTML.
 * This time, we use the imperial values for both the area and the density.
 * We also change the button text to say "Show KM", in case the user would like to switch back.
 * 
 * If the button text said "Show KM", we generate the paragraph with metric values instead.
 * And we change the button to allow the user to switch back.
 * 
 */

// function to toggle back and forth between imperial and metric
function switchUnits(info) {

  // the request variable is what the user requested. that is to say, what button was displayed when they clicked on it
  var request = document.getElementById("switch-units").innerText;

  // if they requested miles
  if (request == "Show Miles") {

    // we give them miles
    // this functionality uses the object that was passed into the function
    var newHtml = `
      <strong>Population:</strong> ${info.Population}<br>
      <strong>Area:</strong> ${info.AreaMiles} miles<br>
      <strong>Density:</strong> ${info.DensityMiles} people per square mile<br>
      <strong>Percent of world population:</strong> ${info.Percentage}`;

    // we switch both the paragraph and the button text
    var buttontext = "Show KM";
    document.getElementById("info").innerHTML = newHtml;
    document.getElementById("switch-units").innerText = buttontext;

  // if they requested kilometers
  } else if (request == "Show KM") {

    // we give them kilometers
    // this functionality uses the object that was passed into the function
    var newHtml = `
      <strong>Population:</strong> ${info.Population}<br>
      <strong>Area:</strong> ${info.AreaKM} kilometers<br>
      <strong>Density:</strong> ${info.DensityKM} people per square kilometer<br>
      <strong>Percent of world population:</strong> ${info.Percentage}`;

    // we switch both the paragraph and the button text
    var buttontext = "Show Miles";
    document.getElementById("info").innerHTML = newHtml;
    document.getElementById("switch-units").innerText = buttontext;

  }

}

// this function takes the response from an XMLHttpRequest and reads the JSON data out of it and into the options menu
function parseCountryJSON(responseRaw) {

  // first we set up a "blank" option
  var countryHtml = '<option value="">Select:</option>';

  // we parse the JSON file into usable javascript
  var countryInfo = JSON.parse(responseRaw);

  // having received a long array, we loop through it
  for (let i = 0; i < countryInfo.length; i++) {

    // we add a new option to the countryHtml variable with each loop
    // the options have:
    //  * an id, used to find them later
    //  * a value, which is passed back to their form element and used in other functions
    //  * population and area attributes, which are only read or used within this file
    //  * a name, which is the only immediately visible portion to the user
    countryHtml = `${countryHtml}<option id="${countryInfo[i].Name}" value="${countryInfo[i].Name}" population="${countryInfo[i].Population}" area="${countryInfo[i].Area}">${countryInfo[i].Name}</option>`;
  }  

  // once the list has been fully generated, we insert it into the country-list select element
  document.getElementById("country-list").innerHTML = countryHtml;
}

// this function retrieves the file of country data from the server
// if it succeeds, it calls upon the parseCountryJSON function to read the file
function readTextFile(file) {

  // first, we use the javascript built-in object XMLHttpRequest and assign it to a variable
  var rawFile = new XMLHttpRequest();

  // we tell the request what type of file to expect
  rawFile.overrideMimeType("application/json");

  // we specify what type of request we are making, and add the filename which was passed into this function
  // we allow the request to be asynchronous with the true parameter
  rawFile.open("GET", file, true);

  // when the state of the request changes, we ask it what has changed
  // this is kind of like a listener
  rawFile.onreadystatechange = function() {

    // if it is at its most ready state and it has not encountered any errors
    if (rawFile.readyState === 4 && rawFile.status == "200") {

      // we call on the function that reads the file
      parseCountryJSON(rawFile.responseText);
    }
  }

  // once all parameters and expectations of the request have been set, we send it
  rawFile.send(null);
}

// we want the list to populate as soon as the index document loads, so this fucntion is called immediately
readTextFile("countries.json");

// this function reacts to the user making a country selection
function countrySelection() {

  // first, we retrieve the new value of the dropdown menu
  var country = this.value;

  // we find the option element that corresponds to that value
  var choice = document.getElementById(country);

  // we read the population and area from the option element
  // they need to be read as numbers
  var areaInMiles = parseInt(choice.getAttribute("area"));
  var population = parseInt(choice.getAttribute("population"));

  // we do some calculations to find out the rest of the information to display
  var areaInKM = areaInMiles * 2.59;
  var densityMiles = population / areaInMiles;
  var densityKM = population / areaInKM;
  var worldPop = 8000000000;
  var percentage = population / worldPop * 100;

  // we drop all the calculated values in an object, and round them to 3 decimal places
  var measure = {
    "AreaMiles": areaInMiles.toFixed(3),
    "AreaKM": areaInKM.toFixed(3),
    "DensityMiles": densityMiles.toFixed(3),
    "DensityKM": densityKM.toFixed(3),
    "Population": population.toFixed(3),
    "Percentage": percentage.toFixed(3)
  };

  // we find the flag image, which is labeled with the country name, using underscores instead of spaces where applicable
  var flagPic = 'flags/' + country.replace(/ /g, '_') + '.png';

  // we generate the new paragraph contents
  var newHtml = `
    <strong>Population:</strong> ${measure.Population}<br>
    <strong>Area:</strong> ${measure.AreaKM} kilometers<br>
    <strong>Density:</strong> ${measure.DensityKM} people per square kilometer<br>
    <strong>Percent of world population:</strong> ${measure.Percentage}
  `;

  // the switch units button must be generated anew every time or it functions inconsistently
  document.getElementById("unit-toggle").innerHTML = '<button id="switch-units" class="button">Show Miles</button>';

  // once we know all the desired values, we plug them into the page
  document.getElementById("title").innerHTML = country;
  document.getElementById("flag").src = flagPic;
  document.getElementById("info").innerHTML = newHtml;
  document.getElementById("learn-more").href = "https://en.wikipedia.org/wiki/"+country;

  // we add an event listener to tell us when the user wants to switch units of measurement
  // and we pass our object full of numbers into it
  document.getElementById("switch-units").addEventListener('click', function(){ switchUnits(measure) }, false);

  // once everything is ready, we un-hide the article
  document.getElementById("country-details").classList.remove("hidden");
    
}

// we listen for the user making any change in their selection to the country menu
// if a change occurs, we call the countrySelection function
document.getElementById("country-list").addEventListener('change', countrySelection, false);