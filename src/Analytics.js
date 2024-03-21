import { initializeApp } from "firebase/app"
import { getAnalytics, setConsent } from "firebase/analytics"

const browserConfig = {
    apiKey: "AIzaSyAMquVtK_Tmv_b6aTd326BUwR2UYSFRhoA",
    authDomain: "aqualunae-b894f.firebaseapp.com",
    projectId: "aqualunae-b894f",
    storageBucket: "aqualunae-b894f.appspot.com",
    messagingSenderId: "69601742720",
    appId: "1:69601742720:web:8c21f71a4c3f8f6bda3b65",
    measurementId: "G-DTBW8PGZP3",
    debugMode: true
}

setConsent({
    ad_storage: "denied",
    ad_personalization: "denied",
    ad_user_data: "denied",
    analytics_storage: "denied",
    functionality_storage: "denied",
    personalization_storage: "denied",
    security_storage: "denied"
})

const app = initializeApp(browserConfig)
const analytics = getAnalytics(app)

export default analytics