const ProjectOdd = ({ data }) => {

    const { title, year, month, client, summary, technologies, image, url } = data;

    const monthNames = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ]

    return (
        <div className="portfolio-display p-odd">
            <a href={url} className="screen"><img src={`../img/screens/${image}.png`} /></a>
            <div className="project">
                <div className="project-info">
                    <h3>{title}</h3>
                    { client.url ? <p>Built for <a href={client.url}>{client.name}</a> in {monthNames[month - 1]} of {year}.</p>
                        : client.name ? <p>Built for {client.name} in {monthNames[month - 1]} of {year}.</p>
                        : <p>Built in {monthNames[month - 1]} of {year}.</p> }
                    <p>{summary}</p>
                    <a className="button" href={url}>View Here</a>
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
        </div>
    )
}

export default ProjectOdd