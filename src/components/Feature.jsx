import React from 'react'

const Feature = ({ title, headeText, contentText, closeButton, listItem, image,direction}) => {
         console.log(contentText)
         const directions = direction ? 'row-reverse' : ''
  return (
    <>
                    <section className="about-section bg-off-white pt-100 pb-70">
                             <div className="container">
                                      <div style={{ flexDirection: directions ,background:''}} className="row align-items-center ">
                                               {image && <div className="col-lg-6 pb-30">
                                                        <div className="about-section-item about-item-image text-center">
                                                                 <img src={image} alt="shape" />
                                                        </div>
                                               </div>}
                                               <div className="col-lg-6 pb-30">
                                                        <div className="about-section-item about-item-details">
                                                                 <div className="section-title section-title-left text-start">
                                                                          {title && <small>{title}</small>}
                                                                          {headeText && <h2>{headeText}</h2> }
                                                                          
                                                                 </div>
                                                                 <div className="about-content">
                                                                          {contentText && <div style={{display:"flex", flexDirection:'column',gap:'20px'}}>
                                                                                   {contentText.map(item => <div key={item.id}>{item.text}</div>)}
                                                                          </div>}
                                                                          
                                                                          {listItem && <ul className="list-unstyled">
                                                                                   <li><i className="bi bi-receipt-cutoff me-2 text-success"></i>Easy-to-use Receipt & Invoice Builder</li>
                                                                                   <li><i className="bi bi-palette2 me-2 text-warning"></i>Customization with Business Branding</li>
                                                                                   <li><i className="bi bi-cloud-check me-2 text-info"></i>Secure Cloud-Based Storage</li>
                                                                                   <li><i className="bi bi-file-earmark-arrow-down me-2 text-primary"></i>Fast PDF Download & Sharing Options</li>
                                                                          </ul>}
                                                                          <p>
                                                                                   We believe that financial documentation should be quick, clean, and accessible to everyone — anytime, anywhere.
                                                                                   That’s why we’re committed to building intuitive tools that save time and boost productivity for all types of users.
                                                                          </p>

                                                                          {closeButton && <a href="about-us.html" className="btn main-btn">
                                                                                   {closeButton}
                                                                          </a>}
                                                                          
                                                                 </div>
                                                        </div>
                                               </div>
                                      </div>
                             </div>
                    </section>
    </>
  )
}

export default Feature
