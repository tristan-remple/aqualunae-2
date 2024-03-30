(function(){

    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    function trackButton(event) {
        event.preventDefault()
        gtag('event', 'select_content', {
            content_type: "button",
            content_id: event.target.id,
            page: "leaderboard"
        })
        window.location.href = event.target.href
    }

    const boardDisplay = document.getElementById("leaderboard")

    const title = document.createElement("h1")
    title.innerText = "Leaderboard"
    boardDisplay.appendChild(title)

    let size = 0
    let time = ""
    const queryString = window.location.search
    // const queryString = ?size=6&time=2:34
    const queryArray = queryString.split("&")
    const zeroArray = queryArray[0].split("=")
    let oneArray = ["", ""]
    if (queryArray[1]) {
        oneArray = queryArray[1].split("=")
    }
    if (zeroArray[0].includes("size")) {
        size = zeroArray[1]
    } else if (oneArray && oneArray[0].includes("size")) {
        size = oneArray[1]
    }
    if (zeroArray[0].includes("time")) {
        time = zeroArray[1]
    } else if (oneArray && oneArray[0].includes("time")) {
        time = oneArray[1]
    }
    
    function displayBoard(boardSize) {

        const navigation = document.createElement("div")
        const navText = document.createElement("p")
        navText.innerText = "Currently displaying leaders for board size " + boardSize
        navigation.appendChild(navText)

        const navList = document.createElement("div")
        navList.classList.add("rowbox")
        navigation.appendChild(navList)

        boardDisplay.appendChild(navigation)

        fetch("leaderboard.json")
        .then(reponse => reponse.json())
        .then(leaderboard => {

            const sizeOnly = leaderboard.map(leader => leader.puzzleSize)
            const sizes = [...new Set(sizeOnly)]
            sizes.forEach(sz => {
                const sizeLink = document.createElement("a")
                sizeLink.classList.add("button")
                sizeLink.href = "leaderboard.html?size=" + sz
                sizeLink.innerText = sz
                sizeLink.id = sz
                sizeLink.addEventListener("click", function(event) { trackButton(event) })
                navList.appendChild(sizeLink)
            })

            leaderboard.sort(function(a, b) { return parseInt(a.solveTime.replace(":", "")) - parseInt(b.solveTime.replace(":", "")) })
            const sizeLeaders = leaderboard.filter(leader => leader.puzzleSize == boardSize)

            for (let i = 0; i < 5; i++) {
                if (sizeLeaders[i]) {
                    const leaderEntry = document.createElement("div")
                    leaderEntry.classList.add("leader-entry")
                    const offset = i + 1
                    leaderEntry.innerText = offset + ". " + sizeLeaders[i].name + " - " + sizeLeaders[i].solveTime
                    boardDisplay.appendChild(leaderEntry)
                }
            }

            if (time !== "") {
                const leaderForm = document.createElement("form")
                leaderForm.action = "handleLeader.php"
                leaderForm.setAttribute("method", "POST")

                const text = document.createElement("p")
                text.innerText = "Your solve time was " + time + ".\nEnter your name for a chance to be on the leaderboard."
                leaderForm.appendChild(text)

                const name = document.createElement("label")
                name.innerHTML = "Name: "
                const input = document.createElement("input")
                input.type = "text"
                input.name="name"
                name.appendChild(input)
                leaderForm.appendChild(name)

                leaderForm.innerHTML += "<br>"

                const formTime = document.createElement("input")
                formTime.type = "hidden"
                formTime.name = "time"
                formTime.value = time
                leaderForm.appendChild(formTime)

                const formSize = document.createElement("input")
                formSize.type = "hidden"
                formSize.name = "size"
                formSize.value = size
                leaderForm.appendChild(formSize)

                const submit = document.createElement("input")
                submit.type = "submit"
                submit.classList.add("button")
                leaderForm.appendChild(submit)

                function postScore() {
                    timeArray = time.split(":")
                    seconds = (timeArray[0] * 60) + timeArray[1]

                    gtag('event', 'post_score', {
                        score: seconds,
                        level: size,
                        character: input.value
                    })
                }
                
                submit.addEventListener("click", postScore)

                boardDisplay.appendChild(leaderForm)
            }
        })
    }

    displayBoard(size)

})()