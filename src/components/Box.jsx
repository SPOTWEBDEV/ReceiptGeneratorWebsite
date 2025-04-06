import React from 'react'

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

function createStar(starNumber) {
         let html = '';
         for (let i = 0; i < starNumber; i++) {
                  html += '★'
         }
         if(html.length != 5){
                  let remain = 5 - html.length;
                  for (let i = 0; i < remain; i++) {
                           html += '☆'
                  }  
         }
         return html
}

