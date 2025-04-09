import React from 'react'
import Landing from '../layout/Landing'
import CompanyStats from '../includes/CompanyStats'
import Testimonial from '../includes/Testimonial'
import { ClientFooter } from '../includes/Footer'
import { ClientNav } from '../includes/Navbar'

import Feature from '../components/Feature'
import { who_we_are } from '../data/siteInfo'
import { about } from '../data/siteInfo'

const Home = () => {
  return (
    <div>
      <>
        <ClientNav />
        {/* Header */}
        <header className="header header-bg-lg header-bg-shape border-bottom-1">
          <div className="container-fluid p-lg-0">
            <div className="row m-lg-0">
              <div className="col-lg-6 p-lg-0">
                <div className="max-585 ms-auto">
                  <div className="header-contents">
                    <h1>Create & Customize Payment Receipts and Invoices Effortlessly</h1>
                    <p>
                      Generate Payment receipts and invoices in minutes. Our platform is designed to help businesses and individuals easily build, edit, and manage their financial documents with accuracy and ease.
                    </p>
                    <div className="button-group ">
                      <a href="/pricing" className="btn main-btn">
                        Get Started
                      </a>
                      <a href="contact.html" className="btn main-btn main-btn-white">
                        Try It Free
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="header-image-shape">
            <img src="/images/homepage-one/header-shape.png" alt="shape" />
          </div>
        </header>

        {/* Header */}
        {/* Feature-section */}


        <section className="feature-section pt-min-100 pb-70">
          <div className="container">
            <div className="section-title section-title-lg text-center mb-5">
              <h2>
                Smart. Simple. Seamless. <br /> Everything You Need for Receipts & Invoices
              </h2>
            </div>
            <div className="row g-4">
               {/* Travel Receipt */}
               <div className="col-md-6 col-lg-3 d-flex">
                <div className="feature-card flex-fill">
                  <div className="feature-card-header">
                    <span>Travel Receipt</span>
                  </div>
                  <div className="feature-card-body">
                    <p>Receipt for travel expenses like accommodation or transportation.</p>
                  </div>
                </div>
              </div>
              
              {/* Service Receipt */}
              <div className="col-md-6 col-lg-3 d-flex">
                <div className="feature-card flex-fill">
                  <div className="feature-card-header">
                    <span>Service Receipt</span>
                  </div>
                  <div className="feature-card-body">
                    <p>Proof of payment for services rendered.</p>
                  </div>
                </div>
              </div>

              {/* Sales Receipt */}
              <div className="col-md-6 col-lg-3 d-flex">
                <div className="feature-card flex-fill">
                  <div className="feature-card-header">
                    <span>Sales Receipt</span>
                  </div>
                  <div className="feature-card-body">
                    <p>Confirmation of payment for a product or service.</p>
                  </div>
                </div>
              </div>

              {/* Payment Receipt */}
              <div className="col-md-6 col-lg-3 d-flex">
                <div className="feature-card flex-fill">
                  <div className="feature-card-header">
                    <span>Payment Receipt</span>
                  </div>
                  <div className="feature-card-body">
                    <p>Acknowledges payments made toward a bill or service.</p>
                  </div>
                </div>
              </div>

              {/* Invoice Receipt */}
              <div className="col-md-6 col-lg-3 d-flex">
                <div className="feature-card flex-fill">
                  <div className="feature-card-header">
                    <span>Invoice Receipt</span>
                  </div>
                  <div className="feature-card-body">
                    <p>Receipt for previously issued invoices, showing payment received.</p>
                  </div>
                </div>
              </div>

              {/* Cash Receipt */}
              <div className="col-md-6 col-lg-3 d-flex">
                <div className="feature-card flex-fill">
                  <div className="feature-card-header">
                    <span>Cash Receipt</span>
                  </div>
                  <div className="feature-card-body">
                    <p>A receipt for cash payments.</p>
                  </div>
                </div>
              </div>

              {/* Electronic Receipt */}
              <div className="col-md-6 col-lg-3 d-flex">
                <div className="feature-card flex-fill">
                  <div className="feature-card-header">
                    <span>Electronic Receipt</span>
                  </div>
                  <div className="feature-card-body">
                    <p>Digital version of a receipt, often sent via email.</p>
                  </div>
                </div>
              </div>

              {/* Gift Receipt */}
              <div className="col-md-6 col-lg-3 d-flex">
                <div className="feature-card flex-fill">
                  <div className="feature-card-header">
                    <span>Gift Receipt</span>
                  </div>
                  <div className="feature-card-body">
                    <p>A receipt for a gift, typically without the price.</p>
                  </div>
                </div>
              </div>

             


            </div>
          </div>
        </section>




        {/* Feature-section */}
        {/* About-section */}

        {who_we_are.map(item => <Feature key={item.id} {...item} />)}

        {about.map(item => <Feature key={item.id} {...item} />)}




        {/* About-section */}
        {/* Service-section */}
        <section className="service-section pt-100 pb-70">
          <div className="container">
            <div className="section-title section-title-lg">
              <small>Services</small>
              <h2>
                Smart Tools to Create, Generate, <br /> and Manage Receipts & Invoices
              </h2>
              <p>
                Whether you're a freelancer, business owner, or startup, our tools help you generate receipts, track invoices, and stay organized with ease.
              </p>
            </div>
            <div className="row">
              <div className="col-md-6 col-lg-4 pb-30">
                <div className="service-card">
                  <div className="service-card-thumb">
                    <i className="bi bi-robot text-primary fs-1" />
                  </div>
                  <div className="service-card-body">
                    <h3>Automated Receipt Generator</h3>
                    <p>
                      Let our robot-powered tool auto-fill and generate receipts for any transaction — fast, smart, and paperless.
                    </p>
                  
                  </div>
                </div>
              </div>

            

              <div className="col-md-6 col-lg-4 pb-30">
                <div className="service-card">
                  <div className="service-card-thumb">
                    <i className="bi bi-cpu text-danger fs-1" />
                  </div>
                  <div className="service-card-body">
                    <h3>Smart Invoice Builder</h3>
                    <p>
                      Our intelligent builder processes your data and formats beautiful, professional invoices with zero hassle.
                    </p>
                  
                  </div>
                </div>
              </div>

            

        

              <div className="col-md-6 col-lg-4 pb-30">
                <div className="service-card">
                  <div className="service-card-thumb">
                    <i className="bi bi-shield-lock text-secondary fs-1" />
                  </div>
                  <div className="service-card-body">
                    <h3>Cloud Storage</h3>
                    <p>
                      All your receipts and invoices are locked and stored securely in encrypted PDF format with cloud access.
                    </p>
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        {/* Service-section */}
        {/* Trial-section */}
        <section className="trial-section pt-min-100 pb-100 bg-main page-bg page-bg-1">
          <div className="container">
            <div
              className="section-title section-title-lg section-title-white mb-0"
              data-duration={900}
            >
              <h2>Try A Free Day Access to Our Invoice Generator</h2>
              <p>
                Start generating professional invoices and receipts in seconds.
                Enjoy premium features including custom branding, auto-calculation,
                PDF export, and more — completely free for 14 days!
              </p>
              <a
                href="/pricing"
                className="btn main-btn main-btn-white main-btn-rounded-icon"
              >
                Start Free Trial{" "}
                <span>
                  <i className="bi bi-arrow-right-circle-fill" />
                </span>
              </a>
            </div>
          </div>
        </section>

        {/* Trial-section */}
        {/* Process-section */}



        <section className="process-section pt-100 pb-70 bg-off-white">
          <div className="container">
            <div className="row g-4">
              {/* Register & Login */}
              <div className="col-sm-6 col-lg-4 d-flex">
                <div className="process-item process-item-center border flex-fill d-flex flex-column text-center p-4">
                  <div>
                    <i className="bi bi-person-check fs-1 text-primary" />
                  </div>
                  <div className="process-text mt-auto">
                    <h3>Register & Login</h3>
                    <p>
                      Create an account or sign in to start generating your receipts.
                    </p>
                  </div>
                </div>
              </div>

              {/* Customize & Preview */}
              <div className="col-sm-6 col-lg-4 d-flex">
                <div className="process-item process-item-center border flex-fill d-flex flex-column text-center p-4">
                  <div>
                    <i className="bi bi-ui-checks-grid fs-1 text-success" />
                  </div>
                  <div className="process-text mt-auto">
                    <h3>Customize & Preview</h3>
                    <p>
                      Enter your business and client info, add items and pricing, then instantly preview your receipt with modern templates.
                    </p>
                  </div>
                </div>
              </div>

              {/* Download or Share */}
              <div className="col-sm-6 col-lg-4 d-flex">
                <div className="process-item process-item-center border flex-fill d-flex flex-column text-center p-4">
                  <div>
                    <i className="bi bi-download fs-1 text-danger" />
                  </div>
                  <div className="process-text mt-auto">
                    <h3>Download or Share</h3>
                    <p>
                      Instantly download your receipt as PDF or share it with your client directly through email or link.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>











        {/* Process-section */}

        {/* News-section */}
        <section className="news-section pt-100 pb-70 bg-off-white">
          <div className="container">
            <div className="section-title section-title-lg">
              <small>Tips & Guides</small>
              <h2>
                Latest Articles & Updates <br /> About Receipts & Invoices
              </h2>
            </div>
            <div className="row justify-content-center">
              <div className="col-md-6 col-lg-4 pb-30">
                <div className="blog-card">
                  <div className="blog-card-image">
                    <a href="#">
                      <img src="/images/blogs/blog-1.jpg" alt="receipt tips" />
                    </a>
                  </div>
                  <div className="blog-card-text">
                    <div className="blog-category">
                      <i className="bi bi-file-earmark-text me-1" /> Receipt Design
                    </div>
                    <h3>
                      <a href="#">
                        5 Expert Tips to Create a Professional Receipt That Builds Trust
                      </a>
                    </h3>
                    <div className="blog-card-entry">
                      <div className="blog-entry-thumb">
                        <img src="/images/blogs/blog-author-1.jpg" alt="author" />
                      </div>
                      <div className="blog-entry-text">
                        <h4>
                          By: <strong>Emily Stone</strong>
                        </h4>
                        <p>5 January 2024</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div className="col-md-6 col-lg-4 pb-30">
                <div className="blog-card">
                  <div className="blog-card-image">
                    <a href="#">
                      <img src="/images/blogs/blog-2.jpg" alt="invoice automation" />
                    </a>
                  </div>
                  <div className="blog-card-text">
                    <div className="blog-category">
                      <i className="bi bi-gear me-1" /> Automation
                    </div>
                    <h3>
                      <a href="#">
                        How Automated Invoices Can Save Time and Boost Efficiency
                      </a>
                    </h3>
                    <div className="blog-card-entry">
                      <div className="blog-entry-thumb">
                        <img src="/images/blogs/blog-author-2.jpg" alt="author" />
                      </div>
                      <div className="blog-entry-text">
                        <h4>
                          By: <strong>Michael Ray</strong>
                        </h4>
                        <p>4 January 2024</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div className="col-md-6 col-lg-4 offset-md-3 offset-lg-0 pb-30">
                <div className="blog-card">
                  <div className="blog-card-image">
                    <a href="#">
                      <img src="/images/blogs/blog-3.jpg" alt="invoice security" />
                    </a>
                  </div>
                  <div className="blog-card-text">
                    <div className="blog-category">
                      <i className="bi bi-shield-lock me-1" /> Security
                    </div>
                    <h3>
                      <a href="#">
                        Keeping Your Invoices Safe: Security Tips for Your Documents
                      </a>
                    </h3>
                    <div className="blog-card-entry">
                      <div className="blog-entry-thumb">
                        <img src="/images/blogs/blog-author-3.jpg" alt="author" />
                      </div>
                      <div className="blog-entry-text">
                        <h4>
                          By: <strong>Linda Mark</strong>
                        </h4>
                        <p>3 January 2024</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* News-section */}
        {/* Newsletter-section */}

        {/* Newsletter-section */}

        <ClientFooter/>
      </>
    </div>
  )
}

export default Home
