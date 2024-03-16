(function(){

    // function that sends comment submissions to analytics
    function clickSubmit(event) {

        // these variables are from comment-widget.js
        const nameField = document.getElementById(`entry.${s_nameId}`)
        const siteField = document.getElementById(`entry.${s_websiteId}`)
        const commentField = document.getElementById(`entry.${s_textId}`)

        let has_name = nameField.value != "" ? true : false
        let has_site = siteField.value != "" ? true : false
        let comment_length = commentField.value.length

        // send the event to google
        gtag('event', 'submit_comment', {
            has_name,
            has_site,
            comment_length
        })
    }

    // set event trigger
    const c_form = document.getElementById('c_form')
    c_form.addEventListener("submit", function(event){ clickSubmit(event) })

})()