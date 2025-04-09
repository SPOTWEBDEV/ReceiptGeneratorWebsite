import React from 'react'
import Landing from '../layout/Landing'
import CompanyStats from '../includes/CompanyStats'
import Testimonial from '../includes/Testimonial'
import { ClientFooter } from '../includes/Footer'
import { ClientNav } from '../includes/Navbar'

import Feature from '../components/Feature'
import { who_we_are } from '../data/siteInfo'
import {about} from '../data/siteInfo'

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
                      <a href="contact.html" className="btn main-btn">
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
            <div className="section-title section-title-lg">
              <h2>
                Smart. Simple. Seamless. <br /> Everything You Need for Receipts & Invoices
              </h2>
            </div>
            <div className="container">
              <div className="row">
                <div className="col-md-6 col-lg-3 pb-30">
                  <div className="feature-card">
                    <div className="feature-card-header">
                      <span>Sales Receipt</span>
                    </div>
                    <div className="feature-card-body">
                      <p>
                        Confirmation of payment for a product or service.
                      </p>
                    </div>
                  </div>
                </div>
                <div className="col-md-6 col-lg-3 pb-30">
                  <div className="feature-card">
                    <div className="feature-card-header">
                      <span>Payment Receipt</span>
                    </div>
                    <div className="feature-card-body">
                      <p>
                        Acknowledges payments made toward a bill or service.
                      </p>
                    </div>
                  </div>
                </div>
                <div className="col-md-6 col-lg-3 pb-30">
                  <div className="feature-card">
                    <div className="feature-card-header">
                      <span>Invoice Receipt</span>
                    </div>
                    <div className="feature-card-body">
                      <p>
                        Receipt for previously issued invoices, showing payment received.
                      </p>
                    </div>
                  </div>
                </div>
                <div className="col-md-6 col-lg-3 pb-30">
                  <div className="feature-card">
                    <div className="feature-card-header">
                      <span>Donation Receipt</span>
                    </div>
                    <div className="feature-card-body">
                      <p>
                        Provides proof of donation for tax deductions.
                      </p>
                    </div>
                  </div>
                </div>
                <div className="col-md-6 col-lg-3 pb-30">
                  <div className="feature-card">
                    <div className="feature-card-header">
                      <span>Refund Receipt</span>
                    </div>
                    <div className="feature-card-body">
                      <p>
                        Acknowledges return or refund of a purchase.
                      </p>
                    </div>
                  </div>
                </div>
                <div className="col-md-6 col-lg-3 pb-30">
                  <div className="feature-card">
                    <div className="feature-card-header">
                      <span>Credit Memo</span>
                    </div>
                    <div className="feature-card-body">
                      <p>
                        Notification of a reduction in the amount due to the customer.
                      </p>
                    </div>
                  </div>
                </div>
                <div className="col-md-6 col-lg-3 pb-30">
                  <div className="feature-card">
                    <div className="feature-card-header">
                      <span>Cash Receipt</span>
                    </div>
                    <div className="feature-card-body">
                      <p>
                        A receipt for cash payments.
                      </p>
                    </div>
                  </div>
                </div>
                <div className="col-md-6 col-lg-3 pb-30">
                  <div className="feature-card">
                    <div className="feature-card-header">
                      <span>Electronic Receipt</span>
                    </div>
                    <div className="feature-card-body">
                      <p>
                        Digital version of a receipt, often sent via email.
                      </p>
                    </div>
                  </div>
                </div>
                <div className="col-md-6 col-lg-3 pb-30">
                  <div className="feature-card">
                    <div className="feature-card-header">
                      <span>Gift Receipt</span>
                    </div>
                    <div className="feature-card-body">
                      <p>
                        A receipt for a gift, typically without the price.
                      </p>
                    </div>
                  </div>
                </div>
                <div className="col-md-6 col-lg-3 pb-30">
                  <div className="feature-card">
                    <div className="feature-card-header">
                      <span>Travel Receipt</span>
                    </div>
                    <div className="feature-card-body">
                      <p>
                        Receipt for travel expenses like accommodation or transportation.
                      </p>
                    </div>
                  </div>
                </div>
                <div className="col-md-6 col-lg-3 pb-30">
                  <div className="feature-card">
                    <div className="feature-card-header">
                      <span>Service Receipt</span>
                    </div>
                    <div className="feature-card-body">
                      <p>
                        Proof of payment for services rendered.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>



        {/* Feature-section */}
        {/* About-section */}

        {who_we_are.map(item => <Feature key={item.id} {...item} /> )}

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
                    <a href="service-auto-receipt.html" className="redirect-link">
                      Discover More <i className="bi bi-arrow-right" />
                    </a>
                  </div>
                </div>
              </div>

              <div className="col-md-6 col-lg-4 pb-30">
                <div className="service-card">
                  <div className="service-card-thumb">
                    <i className="bi bi-graph-up-arrow text-success fs-1" />
                  </div>
                  <div className="service-card-body">
                    <h3>Analytics & Reporting</h3>
                    <p>
                      Track invoice performance, analyze trends, and get insights to help grow your business revenue.
                    </p>
                    <a href="service-analytics.html" className="redirect-link">
                      Discover More <i className="bi bi-arrow-right" />
                    </a>
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
                    <a href="service-smart-invoice.html" className="redirect-link">
                      Discover More <i className="bi bi-arrow-right" />
                    </a>
                  </div>
                </div>
              </div>

              <div className="col-md-6 col-lg-4 pb-30">
                <div className="service-card">
                  <div className="service-card-thumb">
                    <i className="bi bi-search text-warning fs-1" />
                  </div>
                  <div className="service-card-body">
                    <h3>Invoice Finder</h3>
                    <p>
                      Quickly locate any past invoice or receipt using smart search filters and keyword match.
                    </p>
                    <a href="service-invoice-finder.html" className="redirect-link">
                      Discover More <i className="bi bi-arrow-right" />
                    </a>
                  </div>
                </div>
              </div>

              <div className="col-md-6 col-lg-4 pb-30">
                <div className="service-card">
                  <div className="service-card-thumb">
                    <i className="bi bi-bar-chart-line text-info fs-1" />
                  </div>
                  <div className="service-card-body">
                    <h3>Revenue Charts</h3>
                    <p>
                      Visualize your invoice totals, revenue trends, and unpaid balances through dynamic bar charts.
                    </p>
                    <a href="service-revenue-charts.html" className="redirect-link">
                      Discover More <i className="bi bi-arrow-right" />
                    </a>
                  </div>
                </div>
              </div>

              <div className="col-md-6 col-lg-4 pb-30">
                <div className="service-card">
                  <div className="service-card-thumb">
                    <i className="bi bi-shield-lock text-secondary fs-1" />
                  </div>
                  <div className="service-card-body">
                    <h3>Secure PDF Storage</h3>
                    <p>
                      All your receipts and invoices are locked and stored securely in encrypted PDF format with cloud access.
                    </p>
                    <a href="service-secure-pdf.html" className="redirect-link">
                      Discover More <i className="bi bi-arrow-right" />
                    </a>
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
              <h2>Try 14 Days Free Access to Our Invoice Generator</h2>
              <p>
                Start generating professional invoices and receipts in seconds.
                Enjoy premium features including custom branding, auto-calculation,
                PDF export, and more — completely free for 14 days!
              </p>
              <a
                href="contact.html"
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
            <div className="section-title section-title-lg">
              <small>Our Process</small>
              <h2>How You Can Easily Generate Receipts and Invoices</h2>
            </div>
            <div className="process-content">
              <div className="process-content-line" />
              <div className="row justify-content-center" data-duration={900}>
                <div className="col-sm-6 col-lg-4 pb-30">
                  <div className="process-item process-item-center border">
                    <div className="process-thumb">
                      <i className="bi bi-pencil-square fs-1 text-primary" />
                    </div>
                    <div className="process-text">
                      <h3>Customize Details</h3>
                      <p>
                        Enter your business name, client details, items, and prices using our smart editor.
                      </p>
                    </div>
                  </div>
                </div>

                <div className="col-sm-6 col-lg-4 pb-30">
                  <div className="process-item process-item-center border">
                    <div className="process-thumb">
                      <i className="bi bi-layout-text-window fs-1 text-success" />
                    </div>
                    <div className="process-text">
                      <h3>Design & Preview</h3>
                      <p>
                        Choose from modern templates and preview your receipt or invoice instantly before saving.
                      </p>
                    </div>
                  </div>
                </div>

                <div className="col-sm-6 col-lg-4 pb-30">
                  <div className="process-item process-item-center border">
                    <div className="process-thumb">
                      <i className="bi bi-file-earmark-arrow-down fs-1 text-danger" />
                    </div>
                    <div className="process-text">
                      <h3>Download or Share</h3>
                      <p>
                        Export your document as PDF or share it via email or direct link with one click.
                      </p>
                    </div>
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
                    <a href="single-blog.html">
                      <img src="/images/blogs/blog-1.jpg" alt="receipt tips" />
                    </a>
                  </div>
                  <div className="blog-card-text">
                    <div className="blog-category">
                      <i className="bi bi-file-earmark-text me-1" /> Receipt Design
                    </div>
                    <h3>
                      <a href="single-blog.html">
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
                    <a href="single-blog.html">
                      <img src="/images/blogs/blog-2.jpg" alt="invoice automation" />
                    </a>
                  </div>
                  <div className="blog-card-text">
                    <div className="blog-category">
                      <i className="bi bi-gear me-1" /> Automation
                    </div>
                    <h3>
                      <a href="single-blog.html">
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
                    <a href="single-blog.html">
                      <img src="/images/blogs/blog-3.jpg" alt="invoice security" />
                    </a>
                  </div>
                  <div className="blog-card-text">
                    <div className="blog-category">
                      <i className="bi bi-shield-lock me-1" /> Security
                    </div>
                    <h3>
                      <a href="single-blog.html">
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
