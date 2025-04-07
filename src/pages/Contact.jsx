import React from 'react'
import Landing  from '../layout/Landing'


const Contact = () => {
    return (
        <>
        <Landing header="Contact Us">
        <section className="contact-info-section pt-100 pb-100">
        <div className="container">
            <div className="section-title section-title-lg">
                <small>Contact Information</small>
                <h2>Let's Talk About For Your Business</h2>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
            </div>
            
            <div className="contact-info mb-15">
                <div className="row">
                    <div className="col-md-6 col-lg-4 pb-30">
                        <div className="contact-info-item">
                            <div className="contact-info-header">
                                <div className="contact-info-header-icon">
                                    <i className="icofont-location-pin"></i>
                                </div>
                                <div className="contact-info-header-text">
                                    <h3>Location</h3>
                                    <p>Visit Our Office</p>
                                </div>
                            </div>
                            <div className="contact-info-body">
                                <p>214, Queens Road 4th Cross</p>
                                <p>New York, 5240</p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-6 col-lg-4 pb-30">
                        <div className="contact-info-item">
                            <div className="contact-info-header">
                                <div className="contact-info-header-icon">
                                    <i className="icofont-ui-call"></i>
                                </div>
                                <div className="contact-info-header-text">
                                    <h3>Make A Call</h3>
                                    <p>Let’s Talk with our Experts</p>
                                </div>
                            </div>
                            <div className="contact-info-body">
                                <p>
                                    <a href="tel:00321-654-98">+00 321 654 98</a>
                                </p>
                                <p>Mon - Fri: 09.00 to 17.00</p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-6 col-lg-4 pb-30 offset-lg-0 offset-md-3">
                        <div className="contact-info-item">
                            <div className="contact-info-header">
                                <div className="contact-info-header-icon">
                                    <i className="icofont-email"></i>
                                </div>
                                <div className="contact-info-header-text">
                                    <h3>Send An Email</h3>
                                    <p>Don’t Hesitate to Email</p>
                                </div>
                            </div>
                            <div className="contact-info-body">
                                <p>
                                    <a href="/cdn-cgi/l/email-protection#1e777078715e7b6c6b7a7b66307d7173"><span className="__cf_email__" data-cfemail="a3cacdc5cce3c6d1d6c7c6db8dc0ccce">[email&#160;protected]</span></a>
                                </p>
                                <p>
                                    <a href="/cdn-cgi/l/email-protection#a8dbddd8d8c7dadce8cddaddcccdd086cbc7c5"><span className="__cf_email__" data-cfemail="89fafcf9f9e6fbfdc9ecfbfcedecf1a7eae6e4">[email&#160;protected]</span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
        </Landing>
        </>
    )
}

export default Contact