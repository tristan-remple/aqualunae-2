import { initializeApp } from "firebase/app"
import { getAnalytics } from "firebase/analytics"

const firebaseConfig = {
    apiKey: "AIzaSyAMquVtK_Tmv_b6aTd326BUwR2UYSFRhoA",
    authDomain: "aqualunae-b894f.firebaseapp.com",
    projectId: "aqualunae-b894f",
    storageBucket: "aqualunae-b894f.appspot.com",
    messagingSenderId: "69601742720",
    appId: "1:69601742720:web:8c21f71a4c3f8f6bda3b65",
    measurementId: "G-DTBW8PGZP3"
}

const app = initializeApp(firebaseConfig)
const analytics = getAnalytics(app)

export default analytics