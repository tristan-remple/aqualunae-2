(function(){

    // initialize google analytics
    window.dataLayer = window.dataLayer || []
    function gtag(){
        dataLayer.push(arguments)
    } 

    // inform google that analytics have not been consented to yet
    gtag('consent', 'default', {
        'ad_storage': 'denied',
        'ad_user_data': 'denied',
        'ad_personalization': 'denied',
        'analytics_storage': 'denied',
        'wait_for_update': 500
    })

    // finish configuring analytics
    gtag('js', new Date())
    gtag('config', 'G-694D2YNCCC')

    // create a consent banner
    const banner = document.createElement("div")
    banner.id = "banner"
    banner.innerText = "This site sends data to Google Analytics. Is that OK?"

    // check if the OK button has already been clicked on a previous page
    const consent = window.sessionStorage.getItem("consent")
    if (consent) {
        banner.classList.add("hidden")
    }

    // inform google that the user has consented to analytics
    function grantConsent(){
        gtag('consent', 'update', {
            'ad_user_data': 'granted',
            'ad_personalization': 'granted',
            'ad_storage': 'granted',
            'analytics_storage': 'granted'
        })
        banner.classList.add("hidden")

        // set a browser cookie so the banner doesn't display on future pages
        window.sessionStorage.setItem("consent", "clicked")
    }

    // create OK button
    const button = document.createElement("button")
    button.innerText = "OK"
    button.addEventListener("click", grantConsent)
    banner.appendChild(button)

    // add banner to page
    const body = document.body
    body.appendChild(banner)
})()