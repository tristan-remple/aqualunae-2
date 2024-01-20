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
                    <span className="emphasis">Tristan</span> is a web programmer based in Dartmouth, NS. He specializes in creating sites with appealing galleries and a lot of information. He also has an interest in web accessibility.
                </p>
                <div className="tech-row">
                    { skills.map(sk => <img key={sk} className="tech-icon" src={`../img/skills/${sk}.png`} alt={`${sk} icon`} title={sk} />) }
                </div>
            </div>
        </div>
    )
}

export default Cover