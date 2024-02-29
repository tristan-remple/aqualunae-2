import NavBar from './Narbar'
import Cover from './Cover'
import Portfolio from './Portfolio'
import Contact from './Contact'
import '../css/style.css'
import { initializeApp, getAnalytics } from 'firebase/app'

function App() {

  const firebaseConfig = {
    // apiKey: "AIzaSyCGQ0tYppWFJkuSxBhOpkH0xVDmX245Vdc",
    // authDomain: "project-id.firebaseapp.com",
    // databaseURL: "https://project-id.firebaseio.com",
    // projectId: "project-id",
    // storageBucket: "project-id.appspot.com",
    // messagingSenderId: "637908496727",
    appId: "1:69601742720:android:bcc231ee632f7c91da3b65",
    measurementId: "G-694D2YNCCC"
  }

  const app = initializeApp(firebaseConfig)
  const analytics = getAnalytics(app)

  return (
    <>
      <NavBar ga={ analytics } />
      <Cover />
      <Portfolio />
      <Contact />
    </>
  )
}

export default App
