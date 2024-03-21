import { useState } from 'react'

const Consent = () => {

    const consent = window.sessionStorage.getItem("consent") == null
    console.log(consent)
    const [ visible, setVisible ] = useState(consent)

    const dismiss = () => {
        setVisible(false)
        window.sessionStorage.setItem("consent", "clicked")
    }

    if (visible) {
        console.log("displaying")
        return (
            <div id="consent">
                <p>This site sends data to Google Analytics. By visiting this page, you consent to the tracking of your usage.</p>
                <div id="dismiss" onClick={ dismiss } >Dismiss</div>
            </div>
        )
    }
}

export default Consent