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
        <div id="portfolio">
            { projects.map( item => <Project key={item.title} data={item} /> ) }
        </div>
    )
}

export default Portfolio