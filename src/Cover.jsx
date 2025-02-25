const Cover = ({ skills, filter, setFilter }) => {

    const clickHandler = (e) => {
        const skill = e.target.title
        let newFilter = skills.length == filter.length ? [] : [...filter]
        const skillIndex = newFilter.findIndex(sk => sk == skill)
        if (skillIndex == -1) {
            newFilter.push(skill)
        } else {
            newFilter.splice(skillIndex, 1)
        }
        if (newFilter.length == 0) { newFilter = skills }
        setFilter(newFilter)
    }

    const keyboardHandler = (e) => {
        if (e.code == "Enter") {
            clickHandler(e)
        } else if (e.code == "ArrowDown") {
            e.preventDefault()
            document.getElementById("show-all").focus()
        }
    }

    const showAllHandler = (e) => {
        if (e.type == "click" || (e.type == "keydown" && e.code == "Enter")) {
            setFilter(skills)
        }
    }

    return (
        <div id="cover">
            <img id="logo" src="../img/aqualunae-fade.png" alt="A round logo depicting a silver full moon and a wave." />
            <div id="cover-info">
                <p>
                    <span className="emphasis">Tristan</span> is a 2024 graduate of the Web Programming diploma at NSCC. He's a driven problem solver and an artist at heart, and web development has proven to be a good mix of those things. He's fascinated by the stories and visions behind businesses and organizations, and excited to work together with clients and coworkers to translate that vision into a cohesive and user-friendly web presence. He prides himself on taking the initiative to get things done and having the attention to detail to get them done right.
                </p>
                <p>
                    You can click on the icons below to filter portfolio projects by technical skills. Some skills may not show up in any projects; these might be skills applied in confidential, in-progress, or smaller projects. <a href="mailto:tristan.remple@outlook.com">Contact Tristan</a> if you'd like to know more.
                </p>
                <div className="tech-row">
                    { skills.map(sk => <img 
                        key={ sk } 
                        className={ `tech-icon ${ !filter.includes(sk) ? "faded" : skills.length != filter.length ? "selected" : "" }` } 
                        src={ `../img/skills/${ encodeURIComponent(sk) }.png` } 
                        alt={ `${sk} icon` } 
                        title={ sk }
                        onClick={ clickHandler }
                        onKeyDown={ keyboardHandler }
                        tabIndex={ 0 }
                    />) }
                </div>
                <button id="show-all" className="button" onClick={ showAllHandler } onKeyDown={ showAllHandler } >Show All</button>
            </div>
        </div>
    )
}

export default Cover