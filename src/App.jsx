import { useState } from 'react'

import NavBar from './Navbar'
import Cover from './Cover'
import Portfolio from './Portfolio'
import Contact from './Contact'
import './css/style.css'
import Consent from './Consent'

function App() {

  const skills = [
    "reactJS", "ReactNative", "Redux", "expressJS", "mongoDB", "nodeJS", "TypeScript", "JavaScript", 
    "Laravel", "PHP", "WordPress", "MySQL",
    "Unity", "C#", "dotNET", 
    "AWS", "cPanel", "CWP", "WebFlow", "PuTTY", "GoogleScript", "GoogleAnalytics",
    "SCSS", "Bootstrap", "WCAG", "CSS", "HTML"
  ]

  const [ filteredSkills, setFilteredSkills ] = useState(skills)

  return (
    <>
      <NavBar />
      <Cover skills={ skills } filter={ filteredSkills } setFilter={ setFilteredSkills } />
      <Portfolio filter={ filteredSkills } maxLength={ skills.length } />
      <Contact />
      <Consent />
    </>
  )
}

export default App
