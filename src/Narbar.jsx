import { logEvent } from 'firebase/app'

const Narbar = ({ ga }) => {

  const navClick = (event) => {
    const target = event.target.innerText
    logEvent(ga, 'select_content', {
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