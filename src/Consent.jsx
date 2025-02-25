import { useState } from 'react'
import { setConsent } from "firebase/analytics"

const Consent = () => {

    const consent = window.sessionStorage.getItem("consent") == null
    const [ visible, setVisible ] = useState(consent)

    const dismiss = () => {
        setConsent({
            ad_storage: "granted",
            ad_personalization: "granted",
            ad_user_data: "granted",
            analytics_storage: "granted"
        })
        setVisible(false)
        window.sessionStorage.setItem("consent", "clicked")
    }

    if (visible) {
        return (
            <div id="consent">
                <p>This site sends data to Google Analytics. Is that OK?</p>
                <div id="dismiss" onClick={ dismiss } >OK</div>
            </div>
        )
    }
}

export default Consent