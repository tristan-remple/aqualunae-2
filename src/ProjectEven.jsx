import analytics from "./Analytics"
import { logEvent } from "firebase/analytics"

const ProjectEven = ({ data }) => {

    const { title, year, month, client, summary, technologies, image, url, repo } = data;

    const monthNames = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ]

    const navClick = (event) => {
        logEvent(analytics, 'select_content', {
            content_type: "project",
            content_id: title
        })
    }

    return (
        <div className="portfolio-display p-even">
            <div className="project">
                <div className="project-info">
                    <h3>{title}</h3>
                    { client.url ? <p>Completed for <a href={client.url}>{client.name}</a> in {monthNames[month - 1]} of {year}.</p>
                        : client.name ? <p>Completed for {client.name} in {monthNames[month - 1]} of {year}.</p>
                        : <p>Completed in {monthNames[month - 1]} of {year}.</p> }
                    <p>{summary}</p>
                    <div className="row">
                        <a className="button" href={url} onClick={ navClick } >View Here</a>
                        { repo && <a className="button" href={repo} onClick={ navClick }>Code Repo</a> }
                    </div>
                    <div className="tech-row">
                        { technologies.map(tech => <img 
                            key={`${title}-${tech}`}
                            className="tech-icon"
                            src={`../img/skills/${tech}.png`}
                            alt={`${tech} icon`}
                            title={tech}
                        />) }
                    </div>
                </div>
            </div>
            <a href={url} className="screen" onClick={ navClick } ><img src={`../img/screens/${image}.png`} /></a>
        </div>
    )
}

export default ProjectEven