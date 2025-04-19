import React from 'react'
import editor from  '../pages/clients/editor/editor.module.css'


export const BoxCard = ({title,image,button,text})=>{
    return (
     <>
        <div className={editor.proCard}>
            {image && <img className='w-100' src={image} />}
            {title && <div className={editor.proTitle + ' mt-2'}>{title}</div>}
            {text && <p>{text}</p>}
            {button && <button className={editor.proBtn}>{button}</button>}
        </div>
     </>
    )
}

export const BoxTutorial = ()=>{
    return (
        <>
            <div className="col-md-6 col-lg-4 pb-30">
                <div className="blog-card">
                    <div className="blog-card-image">
                        <img src="assets/images/projects/project-1.jpg" alt="project" />
                        <div className="card-video">
                            <a href="https://www.youtube.com/watch?v=Cx5aNwnZYDc" className="video-popup"><i className="icofont-ui-play"></i></a>
                        </div>
                    </div>
                    <div className="blog-card-text">
                        <div className="blog-category-text">Technology</div>
                        <h3><a href="single-project.html">Enabling Medical Staff To Prescribe The Right Antibiotics</a></h3>
                        <a href="single-project.html" className="redirect-link">Watch The Video <i className="icofont-play-alt-2"></i></a>
                    </div>
                </div>
            </div>
        </>
    )
}

export const BoxExample = ()=>{
    return (
        <>
            <div className="col-md-6 col-lg-4 pb-30">
                <div className="blog-card">
                    <div className="blog-card-image">
                        <img src="assets/images/projects/project-1.jpg" alt="project" />
                        <div className="card-video">
                            <a href="https://www.youtube.com/watch?v=Cx5aNwnZYDc" className="video-popup"><i className="icofont-ui-play"></i></a>
                        </div>
                    </div>
                    <div className="blog-card-text">
                        <div className="blog-category-text">Technology</div>
                        <h3><a href="single-project.html">Enabling Medical Staff To Prescribe The Right Antibiotics</a></h3>
                        <a href="single-project.html" className="redirect-link">Watch The Video <i className="icofont-play-alt-2"></i></a>
                    </div>
                </div>
            </div>
        </>
    )
}

// eslint-disable-next-line react-refresh/only-export-components
export const Box_Stats = ({ title, count, highlighted }) => {
    return (
        <>
            <div className={`stat-box ${highlighted && 'highlighted'}`}>
                <div className="stat-number">{count}</div>
                <div className="stat-text stat-text">{title}</div>
            </div>
        </>
    )
}

export const Box_Testimonial = ({ name, text, star = 4 }) => {
    return (
        <>

            <div className="testimonial">
                <h3>{name}</h3>
                <p>"{text}"</p>
                <div className="stars">{createStar(star)}</div>
            </div>

        </>
    )
}


export const TeamCard = ({ name, occupation, bio, image, positionStyle }) => {
    return (
        <>
            <div className="col-12 col-md-6 col-lg-4 pb-30">
                <div className="team-card">
                    <div className="team-card-thumb">
                        <img style={{ height: '300px', width: '100%', objectFit: 'cover', objectPosition: positionStyle }} src={image} alt="team" />
                    </div>
                    <div className="team-card-content">
                        <h3>{name}</h3>
                        <h4>{occupation}</h4>
                        <p>{bio}</p>
                    </div>
                </div>
            </div>
        </>
    )
}





function createStar(starNumber) {
    let html = '';
    for (let i = 0; i < starNumber; i++) {
        html += '★'
    }
    if (html.length != 5) {
        let remain = 5 - html.length;
        for (let i = 0; i < remain; i++) {
            html += '☆'
        }
    }
    return html
}

