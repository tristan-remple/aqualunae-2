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
 * We establish counts of guesses and correct guesses, both set to 0.
 * 
 * (Repeating code)
 * We use a random number generator to select four items from the list.
 * We use a second random number generator to decide which of these is the correct choice.
 * We know that our flags are all labelled as <country_name>.png
 * So we need to convert the spaces in the country names to underscores in order to reference those files.
 * We use a simple regular expression to accomplish this, and display the flag corresponding to the correct choice.
 * Reading from the file, we generate a list of HTML options to insert into the dropdown menu.
 * Upon finishing the list, we replace the placeholder list items in quiz.html with the new country list.
 * 
 * The user confirms their choice.
 * We read the new value (a country name), and then find the option element that matches it.
 * We compare their choice to the country flag displayed.
 * Their count of guesses is increased, and if they won, so does their count of correct guesses.
 * This brings us back to the top of the repeating code.
 * 
 * (End repeating code)
 * When the user's guess count reaches 10, the game is over.
 * We read the file containing the high scores, and compare the users score against them, from top to bottom.
 * If the user's correct guess count is higher than a score on the scoreboard, they got a high score.
 * 
 * In that case, we congratulate them prompt them to enter their initials.
 * Their score, initials, and the timestamp are assigned to variables in an object.
 * This object is pushed into the local array that was read from the JSON file.
 * We keep the index of that object in a new variable.
 * The last object in the array is dropped.
 * The new array is written to the high scores file.
 * 
 * We are now ready to display the score board.
 * We read the array of high scores and generate html code to display them.
 * If the user's score is on the board, we give it a special class to highlight it.
 * 
 * The user's navigation options are both links, one leading back to the index and one returning to the quiz page.
 */

// some variables need to be called upon in multiple functions, and setting them to global is the easiest way
var countryInfo = '';
var correctGuesses = 0;
var country = false;

// this function takes the response from an XMLHttpRequest and reads the JSON data out of it and into the options menu
function parseCountryJSON(responseRaw) {

  // we parse the JSON file into usable javascript
  countryInfo = JSON.parse(responseRaw);

  // once the countries are available to us, we generate a question
  genQuestion();

}

// this function generates and displays the score board
function showScore(board) {

  // it starts with the header
  var newHtml = '<h1 class="title">Score Board</h1><ul>';

  // it loops through the leader board
  for (let i = 0; i < board.length; i++) {
    newHtml = `${newHtml}<li class="leader`;
    
    // if there is a new entry, it changes the username from [true]
    if (board[i].User == true) {

      // it gets their initials
      var initials = document.getElementById("initials").value;

      // and removes punctuation and shortens the input to 3 letters
      var cleanInitials = initials.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()]/g,"")
      var cleanShortInitials = cleanInitials.slice(0, 3);

      // once the initials are acceptable, they are used
      board[i].User = cleanShortInitials;
      
      // and highlights their position on the board
      newHtml = `${newHtml} new-entry`;
    }

    // it generates the listings
    newHtml = `${newHtml}">
    <h2 class="score-number">${i + 1}</h2>
    <h3 class="score-name">${board[i].User} : ${board[i].Score}</h3>
    <p class="score-date">${board[i].Timestamp}</p>
    </li>`;
  }

  // at the end of the loop, it closes the list and places a button at the bottom
  newHtml = `${newHtml}</ul><a id="end-quiz" href="index.html" class="button bottom">Return to Index</a>`;

  // once the new contents of the block have been generated, it places them
  document.getElementById("flag-choice").innerHTML = newHtml;

  // and then shows that block
  document.getElementById("flag-choice").classList.remove("hidden");

}

// this function tells the user their score and decides whether they're on the scoreboard
function calculateScore(responseRaw) {

  // first, it parses the original score board
  var oldScoreBoard = JSON.parse(responseRaw);

  // it generates text to tell the user how many flags they guessed correctly
  var newHtml = `
    <h1 class="title">Congratulations</h1>
    <p>You correctly identified ${correctGuesses} out of 10 flags.<br>
  `;

  // it sets the initial placement value to an impossible number
  var placement = -1;

  // it loops through the scoreboard from top to bottom
  for (let i = 0; i < oldScoreBoard.length; i++) {

    // if the users score is higher than the score on the scoreboard
    if (oldScoreBoard[i].Score < correctGuesses) {

      // the user's placement is assigned to that place
      placement = i;

      // they are informed that they're on the scoreboard and given the prompt to enter their initials
      newHtml = `${newHtml}<strong>You're on the scoreboard!</strong></p>
      <form id="enter-initials">
      <label for="initials">Enter your initials:</label>
      <input type="text" name="initials" class="button" id="initials">
      </form>
      <button id="continue" class="button">Submit</button>`;

      // and the loop is broken, preventing them from appearing multiple times
      break;
    } 
  }

  // a new scoreboard is created from the old scoreboard
  var newScoreBoard = oldScoreBoard;

  // if the user's placement is still set to a negative number, they are informed that they didn't make it
  if (placement == -1) {
    newHtml = `${newHtml}That does not put you on our scoreboard.<br>Better luck next time!</p>
    <button id="continue" class="button">Show Scores</button>`;
  
    // if the user's placement is set to a positive number
  } else {

    // we get the date and time
    var date = new Date();
    var localDate = date.toLocaleString();

    // we create a new entry for the scoreboard with their guesses and the timestamp
    var newEntry = {
      "Score": correctGuesses,

      // and we set their username to a value that they cannot enter, as a placeholder
      "User": true,
      "Timestamp": localDate
    };

    // the user's score is placed into the scoreboard
    newScoreBoard.splice(placement, 0, newEntry);

    // the last entry on the scoreboard is removed
    newScoreBoard.pop();

    // and if we could send this data back to the server, we would
    // but i'm not sure how to do that
    var writeThis = JSON.stringify(newScoreBoard);
  }

  // the option to restart the quiz is added to the bottom
  newHtml = newHtml+'<a id="start-quiz" href="quiz.html" class="button bottom">Restart Quiz</a>';

  // the box content is switched to the content we just generated
  document.getElementById("flag-display").innerHTML = newHtml;

  // and the other box is hidden while we perform other operations
  document.getElementById("flag-choice").classList.add("hidden");

  // to the continue button we added earlier, we add a listener that triggers our next function
  document.getElementById("continue").addEventListener('click', function() { showScore(newScoreBoard) }, false);
}

// this function generates a question for the quiz
function genQuestion() {

  // first we set up a "blank" option
  var countryHtml = '<option value="">Select:</option>';

  // we also set up a blank array for the valid choices
  var choices = [];

  // we set up a 4x loop
  for (let i = 0; i < 4; i++) {

    // we choose a random country's index number
    var cntry = parseInt(Math.random() * countryInfo.length);

    // and push it into the array
    choices.push(cntry);

    // we add a new option to the countryHtml variable
    // the options have:
    //  * an id, used to find them later
    //  * a value, which is passed back to their form element and used in other functions
    //  * a name, which is the only immediately visible portion to the user
    countryHtml = `${countryHtml}<option id="${countryInfo[cntry].Name}" value="${countryInfo[cntry].Name}">${countryInfo[cntry].Name}</option>`;
  }

  // we decide which option is the correct choice at random
  var correct = parseInt(Math.random() * 4);

  // we find the name of the correct country
  var corCntry = choices[correct];

  // this resets a global variable
  country = countryInfo[corCntry].Name;

  // we find the flag image, which is labeled with the country name, using underscores instead of spaces where applicable
  var flagPic = 'flags/' + country.replace(/ /g, '_') + '.png';

  // we get the previous question's guess count
  var prevGuess = parseInt(document.getElementById("gCount").innerText);

  // if the quiz is just starting
  if (prevGuess == 0) {
    // we add the listener for the user submitting their choice
    document.getElementById("submit").addEventListener('click', function() { countrySelection() }, false);
  }

  // we increment the guess count
  var currentGuess = prevGuess + 1;

  // once the list has been fully generated, we insert it into the country-list select element
  document.getElementById("country-list").innerHTML = countryHtml;

  // we display the country flag
  document.getElementById("flag").src = flagPic;

  // we show the user their guess count
  document.getElementById("gCount").innerText = currentGuess;

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
      // there are different functions for different files
      if (file == "countries.json") {
        parseCountryJSON(rawFile.responseText);
      } else if (file == "high_scores.json") {
        calculateScore(rawFile.responseText);
      }
    }
  }

  // once all parameters and expectations of the request have been set, we send it
  rawFile.send(null);
}

// we want the list to populate as soon as the index document loads, so this fucntion is called immediately
window.addEventListener("load", function() { readTextFile("countries.json") }, false);

// this function reacts to the user making a country selection
function countrySelection() {

  // first, we retrieve the new value of the dropdown menu
  var select = document.getElementById("country-list").value;

  // if the guess is correct, we increment the global correct guesses count
  if (select == country) {
    correctGuesses++;
  }

  // we read the current guess count (total)
  var guessCount = parseInt(document.getElementById("gCount").innerText);
  
  // if the count has reached 10
  if (guessCount > 9) {
    // we start the chain of functions that ends the quiz
    // note that the high_scores.json file has been altered to have some actual scores
    // and to display the date in the same format we are using
    readTextFile("high_scores.json");

  // if the count has not reached 10
  } else if (guessCount < 10) {

    // we generate another question
    genQuestion();
  }
}