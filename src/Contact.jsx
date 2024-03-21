import analytics from "./Analytics"
import { logEvent } from "firebase/analytics"

const Contact = () => {

  const navClick = (event) => {
    const target = event.target.innerText
    console.log(target)
    logEvent(analytics, 'select_content', {
      content_type: "link",
      content_id: target
    })
  }

  return (
    <div id="contact-outer">
      <div id="contact">
        <h2>Contact</h2>
        <p>I'm currently looking for a full-time Junior Developer position. If you think I'd be a good fit for your team, you can reach me by email at <a href="mailto:tristan.remple@outlook.com">tristan.remple@outlook.com</a> to schedule an interview or request my full resume. You can also find me on <a href="https://github.com/tristan-remple" onClick={ (event) => navClick(event) } >GitHub</a> and <a href="https://www.linkedin.com/in/aqualunae/" onClick={ (event) => navClick(event) } >LinkedIn</a>.</p>
      </div>
    </div>
  )
}

export default Contact