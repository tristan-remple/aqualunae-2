const Cover = () => {

    const skills = [
        "reactJS", "expressJS", "mongoDB", "nodeJS", "JavaScript",
        "Laravel", "PHP", "MySQL", "AWS", "cPanel",
        "SCSS", "Bootstrap", "WCAG", "CSS", "HTML"
    ]

    return (
        <div id="cover">
            <img id="logo" src="../img/aqualunae-fade.png" alt="A round logo depicting a silver full moon and a wave." />
            <div id="cover-info">
                <p>
                    <span className="emphasis">Tristan</span> is a second year Web Programming student at NSCC. He's a driven problem solver and an artist at heart, and web development has proven to be a good mix of those things. He's fascinated by the stories and visions behind businesses and organizations, and excited to work together with clients and coworkers to translate that vision into a cohesive and user-friendly web presence. He prides himself on taking the initiative to get things done and having the attention to detail to get them done right.
                </p>
                <div className="tech-row">
                    { skills.map(sk => <img key={sk} className="tech-icon" src={`../img/skills/${sk}.png`} alt={`${sk} icon`} title={sk} />) }
                </div>
            </div>
        </div>
    )
}

export default Cover