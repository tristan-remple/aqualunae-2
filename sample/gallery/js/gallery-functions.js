function thumbNav() {
    var thumbSet = this.getAttribute("id");
    if (this.hasFocus()) {
        alert("focused thumbs");
    } else {
        alert("unfocused thu,,");
    }
}

function toggleSection() {
    var controller = this.getAttribute("aria-controls");
    var state = this.getAttribute("aria-expanded");

    if (state == "true") {
        document.getElementById(controller).classList.add("hidden");
        this.setAttribute("aria-expanded", "false");
    } else if (state == "false") {
        document.getElementById(controller).classList.remove("hidden");
        this.setAttribute("aria-expanded", "true");
    }
}

function showImage() {
    var selection = this.id;
    for (let i = 0; i < galleryData.length; i++) {

        var current = galleryData[i].Contents;

        for (let thumb = 0; thumb < current.length; thumb++) {
            if (current[thumb].Id == selection) {
                var imgfile = current[thumb].Filename;
                var date = current[thumb].Date;
                var description = current[thumb].Description;
                var alt = current[thumb].Alt;

                document.getElementById("full").src = `img/${imgfile}`;
                document.getElementById("full").alt = alt;
                document.getElementById("date").innerText = date;
                document.getElementById("description").innerHTML = description;

                var thumbs = document.getElementsByClassName("thumb-box");
                for (let i = 0; i < thumbs.length; i++) {
                    thumbs[i].setAttribute("aria-selected", "false");
                }

                this.setAttribute("aria-selected", "true");
            }
        }
    }
}

var galleryData = null;

function parseJSON(file) {
    galleryData = JSON.parse(file);
    var html = "";

    for (let i = 0; i < galleryData.length; i++) {
        html = `${html}<h2 id="section-${galleryData[i].Section}" class="subtitle gallery-section" aria-expanded="true" aria-controls="${galleryData[i].Section}">Section ${galleryData[i].Title}</h2>
        <div id="${galleryData[i].Section}" class="thumb-group" aria-labelledby="section-${galleryData[i].Section}" tabindex="0"><p id="text-${galleryData[i].Section}" class="gal-desc">${galleryData[i].Description}</p>`;

        var current = galleryData[i].Contents;

        for (let thumb = 0; thumb < current.length; thumb++) {
            html = `${html}<div class="thumb-box" id="${current[thumb].Id}" tabindex="-1" aria-selected="false">
            <div class="overlay">${current[thumb].Warnings}</div>
            <img class="thumbnail" src="img/${current[thumb].Thumbnail}" alt="${current[thumb].ThumbAlt}">
            </div>`;
        }

        html= `${html}</div>`;
    }

    document.getElementById("gallery-contents").innerHTML = html;

    var thumbs = document.getElementsByClassName("thumb-box");
    for (let i = 0; i < thumbs.length; i++) {
        thumbs[i].addEventListener('click', showImage, false);
    }

    var headers = document.getElementsByClassName("gallery-section");
    for (let i = 0; i < headers.length; i++) {
        headers[i].addEventListener('click', toggleSection, false);
    }

    var sections = document.getElementsByClassName("thumb-group");
    for (let i = 0; i < sections.length; i++) {
        sections[i].addEventListener('focus', thumbNav, false);
    }
}

function readTextFile(file) {

    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("GET", file, true);

    rawFile.onreadystatechange = function() {
  
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            parseJSON(rawFile.responseText);
        }
    }

    rawFile.send(null);
}

readTextFile('js/images.json');