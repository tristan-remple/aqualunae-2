import { useState, useEffect } from 'react'
import axios from 'axios'
import ProjectEven from './ProjectEven'
import ProjectOdd from './ProjectOdd'

const Portfolio = ({ filter, maxLength }) => {

    const [ projects, setProjects ] = useState([])
    const [ filteredProjects, setFilteredProjects ] = useState([])
    useEffect(() => {
        axios
            .get('../data/projects.json')
            .then(response => {
                const sortedProjects = response.data
                    .filter( item => item.include )
                    .sort( (a, b) => b.year - a.year || b.month - a.month )
                setProjects(sortedProjects)
                setFilteredProjects(sortedProjects)
            })
    }, [])

    useEffect(() => {
        if (filter.length == maxLength) {
            setFilteredProjects(projects)
        } else {
            const filteredList = projects.filter(project => {
                let result = false
                filter.forEach(skill => {
                    if (project.technologies.includes(skill)) {
                        result = true
                    }
                })
                return result
            })
            setFilteredProjects(filteredList)
        }
    }, [ filter ])

    const toDisplay = filteredProjects.map( (item, index) => {
        if (index % 2 === 0) {
            return <ProjectEven key={item.title} data={item} />
        } else {
            return <ProjectOdd key={item.title} data={item} />
        }
    } )

    return (
        <div id="portfolio-outer">
            <h2 id="portfolio" tabIndex={ -1 }>Portfolio</h2>
            <img id="wave" src="img/wave.png" />
            <div id="portfolio-inner">
                { toDisplay }
            </div>
            <div id="contact-bg"></div>
        </div>
    )
}

export default Portfolio