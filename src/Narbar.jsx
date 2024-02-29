import analytics from "./Analytics"
import { logEvent } from "firebase/analytics"

const Narbar = () => {

  const navClick = (event) => {
    const target = event.target.innerText
    console.log(target)
    logEvent(analytics, 'select_content', {
      content_type: "section",
      content_id: target
    })
  }

  return (
    <nav>
      <a href="#" onClick={ navClick } >Summary</a>
      <a href="#portfolio" onClick={ navClick } >Portfolio</a>
      <a href="#contact" onClick={ navClick } >Contact</a>
    </nav>
  )
}

export default Narbar