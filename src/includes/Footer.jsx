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
                  <div className="footer-logo">
                    <a href="/"><img style={{ height: '100px' }} src="/images/logo.png" alt="logo" /></a>
                  </div>
                  <div className="footer-details">
                    <p>Effortlessly create and manage your receipts and invoices with our easy-to-use online generator. Stay organized, save time, and enjoy seamless transactions. Your receipts, your way, anytime, anywhere.</p>
                  </div>

                </div>
              </div>
              <div className="col-sm-6 col-md-6 col-lg-3">
                <div className="footer-content-list footer-content-item desk-pad-left-70">
                  <div className="footer-content-title">
                    <h3>Useful Links</h3>
                  </div>
                  <ul className="footer-details footer-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="/teams">Teams</a></li>
                    <li><a href="/pricing">Pricing</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/example">Example</a></li>
                    <li><a href="/terms">Terms & Services </a></li>
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <li><a href="/register">Register </a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/forgot-password">Forget Password </a></li>

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
                      {/* <div className="footer-address-text">
                        <h4>Phone:</h4>
                        <p><a href="tel:001-987-654-432">(+234) 8108 833 188</a></p>
                      </div> */}
                    </div>
                    <div className="footer-address-item">
                      <div className="footer-address-text">
                        <h4>Email:</h4>
                        <p><a href="/cdn-cgi/l/email-protection#3950575f56795c4b4c5d5c41175a5654"><span className="__cf_email__" > smartinvoicex@gmail.com </span></a></p>
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
              <p>© SmartInvoiceX is Proudly Owned by <a href="https://mywebsite-firstclass.vercel.app/" target="_blank">SPOTWEBDEV</a></p>
            </div>
          </div>
        </div>
      </footer>
    </>
  )
}


