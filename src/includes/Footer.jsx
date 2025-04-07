import React from 'react'

export const ClientFooter = () => {
  return (
    <>
      <footer className="bg-off-white footer">
       
        <div className="footer-upper pt-100 pb-80 position-relative">
          <div className="container">
            <div className="row">
              <div className="col-sm-12 col-md-6 col-lg-3">
                <div className="footer-content-item">
                  {/* <div className="footer-logo">
                    <a href="index.html"><img src="/images/logo.png" alt="logo" /></a>
                  </div> */}
                  <div className="footer-details">
                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
                  </div>
                </div>
              </div>
              <div className="col-sm-6 col-md-6 col-lg-3">
                <div className="footer-content-list footer-content-item desk-pad-left-70">
                  <div className="footer-content-title">
                    <h3>Useful Links</h3>
                  </div>
                  <ul className="footer-details footer-list">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="blogs-without-right-sidebar.html">News & Blogs</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="pricing.html">Our Pricing</a></li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div className="col-sm-6 col-md-6 col-lg-3">
                <div className="footer-content-list footer-content-item desk-pad-left-70">
                  <div className="footer-content-title">
                    <h3>Services</h3>
                  </div>
                  <ul className="footer-details footer-list">
                    <li><a href="service-robotic-animation.html">Robotic Automation</a></li>
                    <li><a href="service-predictive-analytics.html">Predictive Analytic</a></li>
                    <li><a href="service-deep-learning.html">Deep Learning</a></li>
                    <li><a href="service-statistical-modeling.html">Statistic Modeling</a></li>
                    <li><a href="service-data-mining.html">Data Mining</a></li>
                    <li><a href="service-security-&-surveillance.html">Security & Surveillance</a></li>
                  </ul>
                </div>
              </div>
              <div className="col-sm-6 col-md-6 col-lg-3">
                <div className="footer-content-list footer-content-item desk-pad-left-70">
                  <div className="footer-content-title">
                    <h3>Contact</h3>
                  </div>
                  <div className="footer-details footer-address">
                    <div className="footer-address-item">
                      <div className="footer-address-text">
                        <h4>Phone:</h4>
                        <p><a href="tel:001-987-654-432">(+1) 987 654 432</a></p>
                      </div>
                    </div>
                    <div className="footer-address-item">
                      <div className="footer-address-text">
                        <h4>Email:</h4>
                        <p><a href="/cdn-cgi/l/email-protection#3950575f56795c4b4c5d5c41175a5654"><span className="__cf_email__" data-cfemail="bad3d4dcd5fadfc8cfdedfc294d9d5d7">[email&#160;protected]</span></a></p>
                      </div>
                    </div>
                    <div className="footer-address-item">
                      <div className="footer-address-text">
                        <h4>Address:</h4>
                        <p>214, Queens 4th cross, NY</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div className="footer-lower bg-blue position-relative">
          <div className="container">
            <div className="footer-copyright-text footer-copyright-text-white">
              <p>© SPOTWEBDEV is Proudly Owned by <a href="https://mywebsite-firstclass.vercel.app/" target="_blank">SPOTWEBDEV</a></p>
            </div>
          </div>
        </div>
      </footer>
    </>
  )
}


