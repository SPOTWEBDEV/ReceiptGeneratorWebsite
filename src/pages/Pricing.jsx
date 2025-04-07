import React from 'react'
import Landing  from '../layout/Landing'


const Pricing = () => {
    return (
        <>
        <Landing header="Our Pricing">
        <section className="pricing-section pt-100 pb-70">
        <div className="container">
            <div className="section-title">
                <h2>Choose Any Pricing Plan With Best Services </h2>
            </div>
            <div className="row">
                <div className="col-md-6 col-lg-4 pb-30">
                    <div className="pricing-card">
                        <div className="pricing-category">
                            <h3>Basic</h3>
                            <div className="pricing-thumb">
                                <i className="flaticon-rocket"></i>
                            </div>
                        </div>
                        <div className="pricing-info">
                            <h3>Free <span>/ 10 Days</span></h3>
                            <ul>
                                <li className="pricing-available">Bot & Digital Assistants</li>
                                <li className="pricing-available">Drag & Drop Page Builder</li>
                                <li className="pricing-available">Something Special One</li>
                                <li>Unlimited Broadcast</li>
                                <li>24/7 Customer Support</li>
                                <li>Unlimited Staff</li>
                            </ul>
                            <a href="authentication.html" className="btn main-btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <div className="col-md-6 col-lg-4 pb-30">
                    <div className="pricing-card">
                        <div className="pricing-category">
                            <h3>Professional</h3>
                            <div className="pricing-thumb">
                                <i className="flaticon-rocket"></i>
                            </div>
                        </div>
                        <div className="pricing-info">
                            <h3>$120 <span>/ Month</span></h3>
                            <ul>
                                <li className="pricing-available">Bot & Digital Assistants</li>
                                <li className="pricing-available">Drag & Drop Page Builder</li>
                                <li className="pricing-available">Something Special One</li>
                                <li className="pricing-available">Unlimited Broadcast</li>
                                <li className="pricing-available">24/7 Customer Support</li>
                                <li>Unlimited Staff</li>
                            </ul>
                            <a href="authentication.html" className="btn main-btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <div className="col-md-6 col-lg-4 offset-md-3 offset-lg-0 pb-30">
                    <div className="pricing-card">
                        <div className="pricing-category">
                            <h3>Business</h3>
                            <div className="pricing-thumb">
                                <i className="flaticon-rocket"></i>
                            </div>
                        </div>
                        <div className="pricing-info">
                            <h3>$500 <span>/ Month</span></h3>
                            <ul>
                                <li className="pricing-available">Bot & Digital Assistants</li>
                                <li className="pricing-available">Drag & Drop Page Builder</li>
                                <li className="pricing-available">Something Special One</li>
                                <li className="pricing-available">Unlimited Broadcast</li>
                                <li className="pricing-available">24/7 Customer Support</li>
                                <li className="pricing-available">Unlimited Staff</li>
                            </ul>
                            <a href="authentication.html" className="btn main-btn">Get Started</a>
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

export default Pricing