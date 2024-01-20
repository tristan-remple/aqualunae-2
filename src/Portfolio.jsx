import { useState, useEffect } from 'react'
import axios from 'axios'
import Project from './Project'

const Portfolio = () => {
    const [ projects, setProjects ] = useState([])
    useEffect(() => {
        axios
            .get('../data/projects.json')
            .then(response => {
                const toDisplay = response.data
                    .filter( item => item.include )
                    .sort( (a, b) => b.year - a.year || b.month - a.month )
                setProjects(toDisplay)
            })
    }, [])

    return (
        <div id="portfolio-outer">
            <h2 id="portfolio">Portfolio</h2>
            <img id="wave" src="img/wave.png" />
            <div id="portfolio-inner">
                { projects.map( item => <Project key={item.title} data={item} /> ) }
            </div>
            <div id="contact-bg"></div>
        </div>
    )
}

export default Portfolio