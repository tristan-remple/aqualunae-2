import { initializeApp } from "firebase/app"
import { getAnalytics } from "firebase/analytics"

const firebaseConfig = {
    apiKey: "AIzaSyC-QcVIy90jtKcP3WE3MnNNh9djq8Z0zjE",
    // authDomain: "project-id.firebaseapp.com",
    // databaseURL: "https://project-id.firebaseio.com",
    projectId: "aqualunae-b894f",
    // storageBucket: "project-id.appspot.com",
    // messagingSenderId: "637908496727",
    appId: "1:69601742720:android:bcc231ee632f7c91da3b65",
    measurementId: "G-694D2YNCCC"
}

const app = initializeApp(firebaseConfig)
const analytics = getAnalytics(app)

export default analytics