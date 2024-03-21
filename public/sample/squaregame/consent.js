(function(){
    // const banner = '<div class="banner"></div>'
    const banner = document.createElement("div")
    banner.id = "banner"
    banner.innerText = "This site sends data to Google Analytics. By visiting this page, you consent to the tracking of your usage."
    const body = document.body
    body.appendChild(banner)
})()