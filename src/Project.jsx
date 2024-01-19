const Project = ({ data }) => {

    const { title, year, month, client, summary, technologies, image, url } = data;

    const monthNames = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ]

    return (
        <div className="project">
            <h3>{title}</h3>
            { client.name ? <p>Built for <a href={client.url}>{client.name}</a> in {monthNames[month - 1]} of {year}.</p>
                : <p>Built in {monthNames[month - 1]} of {year}.</p> }
            <p>{summary}</p>
            <a className="button" href={url}>View Here</a>
            { technologies.map(tech => <img key={`${title}-${tech}`} className="tech-icon" src={`../img/skills/${tech}.png`} alt={tech} title={tech} />) }
            <a href={url}><img className="screen" src={`../img/screens/${image}.png`} /></a>
        </div>
    )
}

export default Project