import { initializeApp } from "firebase/app"
import { getAnalytics } from "firebase/analytics"

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

const androidConfig = {
    apiKey: "AIzaSyC-QcVIy90jtKcP3WE3MnNNh9djq8Z0zjE",
    projectId: "aqualunae-b894f",
    appId: "1:69601742720:android:bcc231ee632f7c91da3b65",
    measurementId: "G-694D2YNCCC",
    debugMode: true
}

const app = initializeApp(browserConfig)
const analytics = getAnalytics(app)

export default analytics