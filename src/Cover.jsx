const Cover = () => {

    const skills = [
        "reactJS", "expressJS", "mongoDB", "nodeJS", "JavaScript",
        "Laravel", "PHP", "MySQL", "AWS", "Bootstrap", "cPanel",
        "WCAG", "CSS", "HTML"
    ]

    return (
        <div id="cover">
            <img id="logo" src="../img/aqualunae-fade.png" alt="" />
            <p>
                <span id="emphasis">Tristan</span> is a web programmer based in Dartmouth, NS.
            </p>
            { skills.map(sk => <img key={sk} className="tech-icon" src={`../img/skills/${sk}.png`} alt={sk} title={sk} />) }
        </div>
    )
}

export default Cover