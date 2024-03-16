(function(){

    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-694D2YNCCC');

    // change the square
    function toggleSquare(event, json){

        // find out what square was clicked
        const active = event.target;
        let squareID = active.id;

        // an inner square is used for visual highlighting, so it needs to be accounted for
        if (squareID === "") {
            squareID = active.parentNode.id;
        }

        // use the square's id to find its location
        const squareCoords = squareID.split("-");
        const row = squareCoords[0];
        const col = squareCoords[1];

        // map the square to the data
        const chosenCell = json.rows[row][col];

        // change the current state of the cell
        if (chosenCell.currentState !== 2) {
            chosenCell.currentState++;
        } else {
            chosenCell.currentState = 0;
        }

        // send data to analytics
        const size = json.rows.length;
        gtag('event', 'select_content', {
            content_type: "square",
            content_id: squareID,
            level_name: size
        })

        // set the progress checker to blank
        document.getElementById("display-check").innerText = ".";

        // redraw the board
        drawBoard(json, false);
    }

    // since im using custom css for the checkbox
    // it needs to be tied to the real checkbox
    function toggleCheck() {

        // find the checkbox
        const checkbox = document.getElementById("progress-checkbox");
        const visibleCheck = document.getElementById("visible-check");

        // toggle both the visible state and the true state
        if (checkbox.checked === false) {
            checkbox.checked = true;
            visibleCheck.innerText = "✓";
        } else {
            checkbox.checked = false;
            visibleCheck.innerText = "";
        }
    }

    // check the puzzle
    function checkPuzzle(json) {

        // find and set some required info
        const size = json.rows.length;
        const checkbox = document.getElementById("progress-checkbox");
        let incorrect = 0;
        let incomplete = 0;

        // loop through the puzzle cells
        for (let r = 0; r < size; r++){
            for (let c = 0; c < size; c++){

                // check if the cell is wrong
                if (json.rows[r][c].currentState !== json.rows[r][c].correctState && json.rows[r][c].currentState !== 0) {

                    // if the cell is wrong in the data, find it on the document
                    let wrongSquare = document.getElementById(r+"-"+c);

                    // if the user has indicated they'd like to see their mistakes
                    // or if they're in challenge mode
                    if (checkbox === null || checkbox.checked) {

                        // add an X to the square to mark it
                        wrongSquare.innerText = "×";
                    }

                    // and increase the count of incorrect squares
                    incorrect++;

                // if the square is "grey", increment the incomplete counter
                } else if (json.rows[r][c].currentState === 0) {
                    incomplete++;
                }
            }
        } // end for loop

        // find the gameboard and the place where the validation text displays
        const board = document.getElementById("gameBoard");
        const displayCheck = document.getElementById("display-check");

        // if the incorrect and incomplete counters are both still 0
        // display a congratulatory message
        if (incomplete === 0 && incorrect === 0) {
            displayCheck.innerText = "You did it!";
            gtag('event', 'level_end', {
                level_name: size,
                success: true
            })

        // if the user is not in challenge mode
        } else if (board.getAttribute("data-challenge") === "false") {

            // check progress
            if (incorrect > 0) {
                displayCheck.innerText = "Something is wrong.";
            } else  {
                displayCheck.innerText = "So far so good."
            }
        
        // if the user is in challenge mode
        } else {

            // checking it locks the puzzle and tells the user what is wrong
            if (incomplete > 0) {
                displayCheck.innerText = "Puzzle incomplete.";
            } else {
                displayCheck.innerText = "Puzzle incorrect.";
            }

            gtag('event', 'level_end', {
                level_name: size,
                success: false
            })
        }
    }

    // function to draw the board
    function drawBoard(json, finished) {

        // find the place where the board should be
        const table = document.getElementById("gameBoard");

        // clear it to make sure nothing is already there
        table.innerHTML = "";

        // find the size of the puzzle and loop through it
        const size = json.rows.length;
        for (let r = 0; r < size; r++){

            // create each row
            let row = document.createElement('tr');
            for (let c = 0; c < size; c++){

                // create each cell and give them each an id
                let cell = document.createElement('td');
                cell.id = r + "-" + c;

                // use css classes to add colors
                if (json.rows[r][c].currentState === 0) {
                    cell.classList.add("blank");
                } else if (json.rows[r][c].currentState === 1) {
                    cell.classList.add("first");
                } else {
                    cell.classList.add("second");
                }

                // finished is for challenge mode
                if (json.rows[r][c].canToggle === true && finished === false) {

                    // toggle-able squares get a second inner square that lights up when you hover them
                    const cannToggle = document.createElement("div");
                    cannToggle.classList.add("can-toggle");
                    cell.appendChild(cannToggle);

                    // even listener is added to the cell, not the inner hover layer
                    cell.addEventListener("click", function clicker(event){
                        toggleSquare(event, json);
                    });

                // add a lock icon to identify cells that are locked
                } else if (json.rows[r][c].canToggle === false) {
                    cell.innerText = "⚿";
                }
                row.appendChild(cell);
            }
            table.appendChild(row);
        }

        // add a listener to check the puzzle
        const checkButton = document.getElementById("check-button");

        // check button is null in challenge mode
        if (checkButton !== null) {
            checkButton.addEventListener("click", function(){
                checkPuzzle(json);
            });
        }
        
    }

    // challenge mode:
    // -you are timed
    // -you can only check the puzzle once (ideally when it's done)
    function startChallenge() {
        if (confirm("Starting a challenge will initiate a new puzzle.")) {
            newPuzzle(true);
        }
    }

    // timer declared in "global" scope so i don't have to pass it around the challenge functions
    let timer;

    // the timer for challenge mode
    function challengeCounter() {

        // find where the timer is
        const progressParent = document.getElementById("progress-box");
        const progressBox = progressParent.firstChild;
        let time = progressBox.innerText;

        // identify the current time
        let timeArray = time.split(":");
        let minutes = parseInt(timeArray[0]);
        let seconds = parseInt(timeArray[1]);

        // increment the time
        if (seconds !== 59) {
            seconds++;
        } else {
            seconds = 0;
            minutes++;
        }

        // create a string representation of the time
        let newTime = "";
        if (seconds > 9) {
            newTime = minutes + ":" + seconds;
        } else {
            newTime = minutes + ":0" + seconds;
        }
        progressBox.innerText = newTime;

        // make the timer recursive
        timer = setTimeout(challengeCounter, 1000);
    }

    // when you have completed (or given up on) a challenge, you can check it
    function endChallenge(json) {

        // the timer is stopped
        clearTimeout(timer);

        // the button used to end the challenge is removed
        const timeButton = document.getElementById("time-button");
        const buttonHolder = timeButton.parentNode;
        buttonHolder.removeChild(timeButton);

        // and then remade as a button to start a new puzzle
        // because it's easier to remake the button than to remove an anonymous event listener
        const restartButton = document.createElement("button");
        restartButton.id = "restart";
        restartButton.innerText = "New Puzzle";
        restartButton.addEventListener("click", function(){
            newPuzzle(false);
        });

        // because the button is being remade, it would default to showing after the help icon
        // which is undesirable
        const help = document.getElementById("help");
        buttonHolder.insertBefore(restartButton, help);

        // the board is redrawn but squares are no longer togglable
        drawBoard(json, true);

        // the puzzle is checked
        checkPuzzle(json);
    }

    // super simple explanation of the game
    // not actually a feature, i just felt like it would be wrong to display a game without displaying the rules
    // it also explains challenge mode
    function showHelp() {
        alert("Three In A Row Puzzle Game\nGoal: Fill in all the squares without any three in a row being the same color.\nChallenge Mode: A timer will start recording how long it takes you to complete the puzzle. You will not be able to check your progress during challenge mode.");
    }

    // fetch a new puzzle
    // the challenge parameter is a boolean
    function newPuzzle(challenge) {
        fetch("https://prog2700.onrender.com/threeinarow/random")
        .then(response => response.json())
        .then(json => {

            const size = json.rows.length;
            gtag('event', 'level_start', {
                level_name: size
            })

            // find the main container and wipe it
            const div = document.getElementById("theGame");
            div.innerHTML = "";

            // generate the title
            const title = document.createElement("h1");
            title.innerText = "Three in a Row Puzzle Game";
            div.appendChild(title);

            // generate the table
            const table = document.createElement("table");
            table.id = "gameBoard";
            div.appendChild(table);

            // blank element where the text from the "check puzzle" button displays
            const displayCheck = document.createElement("div");
            displayCheck.id = "display-check";

            // needs a . in order to consistently take up the same amount of space
            displayCheck.innerText = ".";
            div.appendChild(displayCheck);

            // rowbox is a flex-row, the rest of the page is a flex-column
            // rowbox is for buttons
            const rowbox = document.createElement("div");
            rowbox.classList.add("rowbox");
            rowbox.id = rowbox;

            // progress box displays either the toggle to display incorrect squares
            // or the timer, in challenge mode
            const progressBox = document.createElement("div");
            progressBox.id = "progress-box";

            // time button will either start or end the challenge
            const timeButton = document.createElement("button");

            // check whether challenge mode is off
            if (challenge === false) {

                // the button to check the puzzle is created here
                // but the listener is added when the board is drawn
                const checkButton = document.createElement("button");
                checkButton.innerText = "Check Puzzle";
                checkButton.id = "check-button";
                rowbox.appendChild(checkButton);

                // button to initiate challenge mode
                timeButton.innerText = "Challenge Mode";
                timeButton.id = "time-button";
                timeButton.addEventListener("click", function(){
                    startChallenge();
                });

                // checkbox that toggles visibility of incorrect squares
                // due to css limitations, the actual checkbox is not visible
                const check = document.createElement("input");
                check.type = "checkbox";
                check.id = "progress-checkbox";

                // this div is the visible "checkbox"
                const visibleCheck = document.createElement("div");
                visibleCheck.id = "visible-check";
                visibleCheck.innerText = "";
                visibleCheck.addEventListener("click", toggleCheck);

                // the checkbox, the visible check box, and the label all get thrown into one container
                const checkContainer = document.createElement("div");
                checkContainer.id = "check-container";
                const checkLabel = document.createElement("p");
                checkLabel.innerHTML = "Show incorrect squares";

                checkContainer.appendChild(check);
                checkContainer.appendChild(visibleCheck);
                checkContainer.appendChild(checkLabel);

                // which is then placed in the progress box
                progressBox.appendChild(checkContainer);

                div.appendChild(progressBox);

                // this is used in the check puzzle function
                table.setAttribute("data-challenge", "false");
            
            // if you are in challenge mode
            } else {

                // instead of a check puzzle button, you have an end challenge button
                timeButton.innerText = "End Challenge";
                timeButton.id = "time-button";
                timeButton.addEventListener("click", function(){
                    endChallenge(json);
                });
                table.setAttribute("data-challenge", "true");

                // and instead of toggling incorrect square visibility
                // you have a timer
                const progressText = document.createElement("p");
                progressText.innerText = "0:00";
                progressBox.appendChild(progressText);
                div.appendChild(progressBox);

                // the timer is initiated immediately
                challengeCounter();
            }
            rowbox.appendChild(timeButton);

            // the help button just displays an alert with the rules
            const help = document.createElement("button");
            help.id = "help";
            help.classList.add("small-button");
            help.innerText = "?";
            help.addEventListener("click", showHelp);
            rowbox.appendChild(help);

            div.appendChild(rowbox);

            // once all the elements of the page are placed, the puzzle board is filled in
            drawBoard(json, false);
        });
    }

    // upon loading the page, start a new puzzle (not challenge mode)
    newPuzzle(false);

    // function that pauses link navigation to register events with analytics
    function trackButton(event) {
        event.preventDefault()
        gtag('event', 'select_content', {
            content_type: "button",
            content_id: event.target.id
        })
        window.location.href = event.target.href
    }

    // add analytics to the two navugation buttons
    const commentButton = document.getElementById("comment-nav")
    commentButton.addEventListener("click", function(event) { trackButton(event) })

    const leaderButton = document.getElementById("leaderboard-nav")
    leaderButton.addEventListener("click", function(event) { trackButton(event) })

})();