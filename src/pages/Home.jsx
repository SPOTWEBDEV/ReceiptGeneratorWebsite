import React from 'react'
import Landing from '../layout/Landing'
import CompanyStats from '../includes/CompanyStats'
import Testimonial from '../includes/Testimonial'

const Home = () => {
  return (
    <div>
            <>
  {/* Header */}
  <header className="header header-bg-lg header-bg-shape border-bottom-1">
    <div className="container-fluid p-lg-0">
      <div className="row m-lg-0">
        <div className="col-lg-6 p-lg-0">
          <div className="max-585 ms-auto">
            <div className="header-contents">
              <h1>Best Machine Learning Product Creator</h1>
              <p>
                Proin gravida nibh vel velit auctor aliquet. Aenean
                sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                ipsum, nec sagittis sem nibh
              </p>
              <div className="button-group ">
                <a href="contact.html" className="btn main-btn">
                  Get Started
                </a>
                <a href="contact.html" className="btn main-btn main-btn-white">
                  Start A Free Trial
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
          Any Sufficiently Advanced <br /> Technology Is Indistinguishable From
          Magic
        </h2>
      </div>
      <div className="container">
        <div className="row" >
          <div className="col-md-6 col-lg-3 pb-30">
            <div className="feature-card">
              <div className="feature-card-header">
                <div className="feature-card-thumb feature-card-thumb-green">
                  <i className="flaticon-machine-learning-1" />
                </div>
                <span>ML Technology</span>
              </div>
              <div className="feature-card-body">
                <p>
                  Proin gravida nibh vel velit auctor aliquet aenean
                  sollicitudin.
                </p>
                <a
                  href="service-robotic-animation.html"
                  className="redirect-link"
                >
                  Discover More <i className="icofont-rounded-right" />
                </a>
              </div>
            </div>
          </div>
          <div className="col-md-6 col-lg-3 pb-30">
            <div className="feature-card">
              <div className="feature-card-header">
                <div className="feature-card-thumb feature-card-thumb-yellow">
                  <i className="flaticon-voice-recognition" />
                </div>
                <span>ADI Technology</span>
              </div>
              <div className="feature-card-body">
                <p>
                  Proin gravida nibh vel velit auctor aliquet aenean
                  sollicitudin.
                </p>
                <a
                  href="service-robotic-animation.html"
                  className="redirect-link"
                >
                  Discover More <i className="icofont-rounded-right" />
                </a>
              </div>
            </div>
          </div>
          <div className="col-md-6 col-lg-3 pb-30">
            <div className="feature-card">
              <div className="feature-card-header">
                <div className="feature-card-thumb feature-card-thumb-blue">
                  <i className="flaticon-machine-learning" />
                </div>
                <span>Data Tech</span>
              </div>
              <div className="feature-card-body">
                <p>
                  Proin gravida nibh vel velit auctor aliquet aenean
                  sollicitudin.
                </p>
                <a
                  href="service-robotic-animation.html"
                  className="redirect-link"
                >
                  Discover More <i className="icofont-rounded-right" />
                </a>
              </div>
            </div>
          </div>
          <div className="col-md-6 col-lg-3 pb-30">
            <div className="feature-card">
              <div className="feature-card-header">
                <div className="feature-card-thumb feature-card-thumb-violet">
                  <i className="flaticon-processor" />
                </div>
                <span>AI Technology</span>
              </div>
              <div className="feature-card-body">
                <p>
                  Proin gravida nibh vel velit auctor aliquet aenean
                  sollicitudin.
                </p>
                <a
                  href="service-robotic-animation.html"
                  className="redirect-link"
                >
                  Discover More <i className="icofont-rounded-right" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {/* Feature-section */}
  {/* About-section */}
  <section className="about-section bg-off-white pt-100 pb-70">
    <div className="container">
      <div className="row align-items-center">
        <div
          className="col-lg-6 pb-30"
          
         
        >
          <div className="about-section-item about-item-image text-center">
            <img
              src="/images/feature-shape/feature-shape-1.png"
              alt="shape"
            />
          </div>
        </div>
        <div
          className="col-lg-6 pb-30"
          
         
        >
          <div className="about-section-item about-item-details">
            <div className="section-title section-title-left text-start">
              <small>About Us</small>
              <h2>Mission Is To Bring The Power Of Ml To Every Business</h2>
            </div>
            <div className="about-content">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur.
              </p>
              <ul>
                <li>Advance Advisory Team</li>
                <li>Advance Quality Experts</li>
                <li>Many variations of passages</li>
                <li>High-Quality Results</li>
              </ul>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                quae ab illo inventore veritatis et quasi architecto beatae
                vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                voluptas sit aspernatur aut odit aut fugit, sed quia
                consequuntur magni.
              </p>
              <a href="about-us.html" className="btn main-btn">
                About Us
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {/* About-section */}
  {/* Service-section */}
  <section className="service-section pt-100 pb-70">
    <div className="container">
      <div className="section-title section-title-lg">
        <small>Services</small>
        <h2>
          Our Purpose Is To Deliver Excellence <br /> In Service And Execution
        </h2>
        <p>
          Our purpose is to deliver excellence in service and execution Our
          purpose is to deliver excellence in service and Our purpose is to
          deliver excellence in service.
        </p>
      </div>
      <div className="row" >
        <div className="col-md-6 col-lg-4 pb-30">
          <div className="service-card">
            <div className="service-card-thumb">
              <i className="flaticon-automation" />
            </div>
            <div className="service-card-body">
              <h3>Robotic Automation</h3>
              <p>
                Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.
                Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.
              </p>
              <a
                href="service-robotic-animation.html"
                className="redirect-link"
              >
                Discover More <i className="icofont-rounded-right" />
              </a>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-4 pb-30">
          <div className="service-card">
            <div className="service-card-thumb">
              <i className="flaticon-predictive-chart" />
            </div>
            <div className="service-card-body">
              <h3>Predictive Analytics</h3>
              <p>
                Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.
                Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.
              </p>
              <a
                href="service-predictive-analytics.html"
                className="redirect-link"
              >
                Discover More <i className="icofont-rounded-right" />
              </a>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-4 pb-30">
          <div className="service-card">
            <div className="service-card-thumb">
              <i className="flaticon-deep-learning" />
            </div>
            <div className="service-card-body">
              <h3>Deep Learning</h3>
              <p>
                Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.
                Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.
              </p>
              <a href="service-deep-learning.html" className="redirect-link">
                Discover More <i className="icofont-rounded-right" />
              </a>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-4 pb-30">
          <div className="service-card">
            <div className="service-card-thumb">
              <i className="flaticon-data-mining" />
            </div>
            <div className="service-card-body">
              <h3>Data Mining</h3>
              <p>
                Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.
                Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.
              </p>
              <a href="service-data-mining.html" className="redirect-link">
                Discover More <i className="icofont-rounded-right" />
              </a>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-4 pb-30">
          <div className="service-card">
            <div className="service-card-thumb">
              <i className="flaticon-diagram" />
            </div>
            <div className="service-card-body">
              <h3>Statistical Modeling</h3>
              <p>
                Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.
                Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.
              </p>
              <a
                href="service-statistical-modeling.html"
                className="redirect-link"
              >
                Discover More <i className="icofont-rounded-right" />
              </a>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-4 pb-30">
          <div className="service-card">
            <div className="service-card-thumb">
              <i className="flaticon-machine-learning-2" />
            </div>
            <div className="service-card-body">
              <h3>Security &amp; Surveillance</h3>
              <p>
                Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.
                Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.
              </p>
              <a
                href="service-security-&-surveillance.html"
                className="redirect-link"
              >
                Discover More <i className="icofont-rounded-right" />
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
        <h2>We Are Offering 14 Days Free Trial</h2>
        <p>
          Our purpose is to deliver excellence in service and execution Our
          purpose is to deliver excellence in service and Our purpose is to
          deliver excellence in service.
        </p>
        <a
          href="contact.html"
          className="btn main-btn main-btn-white main-btn-rounded-icon"
        >
          Try 14 Days Free Trial{" "}
          <span>
            <i className="icofont-rounded-right" />
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
        <h2>Process How Machine Learning Will Help Your Business</h2>
      </div>
      <div className="process-content">
        <div className="process-content-line" />
        <div
          className="row justify-content-center"
          
          data-duration={900}
        >
          <div className="col-sm-6 col-lg-4 pb-30">
            <div className="process-item process-item-center border">
              <div className="process-thumb">
                <img src="/images/process/process-one.png" alt="shape" />
              </div>
              <div className="process-text">
                <h3>Planning</h3>
                <p>
                  Proin gravida nibh vel velit auctor aliquet Aenean
                  sollicitudin. Proin gravida.
                </p>
              </div>
            </div>
          </div>
          <div className="col-sm-6 col-lg-4 pb-30">
            <div className="process-item process-item-center border">
              <div className="process-thumb">
                <img src="/images/process/process-two.png" alt="shape" />
              </div>
              <div className="process-text">
                <h3>Design &amp; Execution</h3>
                <p>
                  Proin gravida nibh vel velit auctor aliquet Aenean
                  sollicitudin. Proin gravida.
                </p>
              </div>
            </div>
          </div>
          <div className="col-sm-6 col-lg-4 pb-30">
            <div className="process-item process-item-center border">
              <div className="process-thumb">
                <img
                  src="/images/process/process-three.png"
                  alt="shape"
                />
              </div>
              <div className="process-text">
                <h3>Report &amp; Signout</h3>
                <p>
                  Proin gravida nibh vel velit auctor aliquet Aenean
                  sollicitudin. Proin gravida.
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
        <small>News &amp; Blog</small>
        <h2>
          Company News &amp; Updates Read All <br /> Related Blog
        </h2>
      </div>
      <div
        className="row justify-content-center"
        
       
      >
        <div className="col-md-6 col-lg-4 pb-30">
          <div className="blog-card">
            <div className="blog-card-image">
              <a href="single-blog.html">
                <img src="/images/blogs/blog-1.jpg" alt="blog" />
              </a>
            </div>
            <div className="blog-card-text">
              <div className="blog-category">Technology</div>
              <h3>
                <a href="single-blog.html">
                  Is Machine Learning Right Going On Good Way
                </a>
              </h3>
              <div className="blog-card-entry">
                <div className="blog-entry-thumb">
                  <img
                    src="/images/blogs/blog-author-1.jpg"
                    alt="author"
                  />
                </div>
                <div className="blog-entry-text">
                  <h4>
                    By: <strong>David Joe</strong>
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
                <img src="/images/blogs/blog-2.jpg" alt="blog" />
              </a>
            </div>
            <div className="blog-card-text">
              <div className="blog-category">Robot</div>
              <h3>
                <a href="single-blog.html">
                  The Current State Of Artificial Intelligence Infographic
                </a>
              </h3>
              <div className="blog-card-entry">
                <div className="blog-entry-thumb">
                  <img
                    src="/images/blogs/blog-author-2.jpg"
                    alt="author"
                  />
                </div>
                <div className="blog-entry-text">
                  <h4>
                    By: <strong>Lona Rabisa</strong>
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
                <img src="/images/blogs/blog-3.jpg" alt="blog" />
              </a>
            </div>
            <div className="blog-card-text">
              <div className="blog-category">Machine</div>
              <h3>
                <a href="single-blog.html">
                  Our Company As A Global Leader In Big Data
                </a>
              </h3>
              <div className="blog-card-entry">
                <div className="blog-entry-thumb">
                  <img
                    src="/images/blogs/blog-author-3.jpg"
                    alt="author"
                  />
                </div>
                <div className="blog-entry-text">
                  <h4>
                    By: <strong>Richard Jac</strong>
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
  <section className="newsletter-section pt-min-100 pb-100 page-bg page-bg-2 page-bg-overlay">
    <div
      className="container position-relative"
      
      data-duration={900}
    >
      <div className="section-title section-title-white">
        <h2>Subscribe For Newsletter</h2>
        <p>Subscribe To Our Newsletter &amp; Stay Updated</p>
      </div>
      <form className="newsletter-form">
        <div className="form-group m-0 newsletter-form">
          <input
            type="text"
            name="EMAIL"
            id="emails"
            className="form-control"
            placeholder="Enter Address*"
            required=""
          />
          <button className="btn main-btn" type="submit">
            Subscribe
          </button>
        </div>
        <div id="validator-newsletter" className="form-result" />
      </form>
    </div>
  </section>
  {/* Newsletter-section */}
</>
    </div>
  )
}

export default Home
