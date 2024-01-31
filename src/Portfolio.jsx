import { useState, useEffect } from 'react'
import axios from 'axios'
import ProjectEven from './ProjectEven'
import ProjectOdd from './ProjectOdd'

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

    const toDisplay = projects.map( (item, index) => {
        if (index % 2 === 0) {
            return <ProjectEven key={item.title} data={item} />
        } else {
            return <ProjectOdd key={item.title} data={item} />
        }
    } )

    return (
        <div id="portfolio-outer">
            <h2 id="portfolio">Portfolio</h2>
            <img id="wave" src="img/wave.png" />
            <div id="portfolio-inner">
                { toDisplay }
            </div>
            <div id="contact-bg"></div>
        </div>
    )
}

export default Portfolio