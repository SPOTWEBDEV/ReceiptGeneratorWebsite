import React from 'react'
import Landing from '../layout/Landing'


const Pricing = () => {
    return (
        <>
            <Landing header="Our Pricing">
                <section className="pricing-section pt-100 pb-70">
                    <div className="container">
                        <div className="section-title">
                            <h2>Simple Pricing, Maximum Possibilities</h2>
                            <p>Design, build, and customize professional invoices and receipts for any industry — shopping, travel, school, medical, and more. Our pricing is built for everyone.</p>
                        </div>

                        <div className="row justify-content-center">
                            {/* Free Plan */}
                            <div className="col-md-6 col-lg-5 pb-30">
                                <div className="pricing-card">
                                    <div className="pricing-category">
                                        <h3>Free</h3>
                                        <div className="pricing-thumb">
                                            <i className="flaticon-rocket"></i>
                                        </div>
                                    </div>
                                    <div className="pricing-info">
                                        <h3>$0 <span>/ One-time Trial</span></h3>
                                        <ul>
                                            <li className="pricing-available">Create Only 1 Invoice or Receipt</li>
                                            <li className="pricing-available">Basic Templates Included</li>
                                            <li>Editing Tools Limited</li>
                                            <li>No Custom Branding</li>
                                            <li>No Reuse After First Try</li>
                                            <li>Email Support Only</li>
                                        </ul>
                                        <a href="authentication.html" className="btn main-btn">Try Now</a>
                                    </div>
                                </div>
                            </div>

                            {/* Premium Plan */}
                            <div className="col-md-6 col-lg-5 pb-30">
                                <div className="pricing-card featured">
                                    <div className="pricing-category">
                                        <h3>Premium</h3>
                                        <div className="pricing-thumb">
                                            <i className="flaticon-rocket"></i>
                                        </div>
                                    </div>
                                    <div className="pricing-info">
                                        <h3>$0.32 <span>/ Month</span></h3>
                                        <ul>
                                            <li className="pricing-available">Unlimited Invoice & Receipt Generation</li>
                                            <li className="pricing-available">All Templates Unlocked</li>
                                            <li className="pricing-available">Advanced Editing & Design Tools</li>
                                            <li className="pricing-available">Custom Branding with Logos</li>
                                            <li className="pricing-available">Cloud Saving & Download Options</li>
                                            <li className="pricing-available">Priority Support Access</li>
                                        </ul>
                                        <a href="authentication.html" className="btn main-btn">Upgrade Now</a>
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