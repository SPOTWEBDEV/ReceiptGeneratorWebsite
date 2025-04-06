import React from 'react'
import '../assets/css/Landing.css';

const Footer = () => {
  return (
    <>
                    <footer className="footer">
                             <div className="container">
                                      <div className="footer-section brand">
                                               <div className="logo">
                                                        {/* <span className="icon">&#x27A1;</span> */}
                                                        <span className="text">Smart Invoice X</span>
                                               </div>
                                               <p>Managing invoices and receipts shouldn’t be complicated. With our platform, you can design professional invoices, customize payment bills, and generate travel receipts effortlessly.</p>
                                      </div>
                                      
                                      <div className="footer-section contact">
                                               <h3>Get In Touch</h3>
                                               <p><i className="fas fa-map-marker-alt"></i> 55 Main Street, 2nd block,
                                                        Malborne, Australia</p>
                                               <p><i className="fas fa-envelope"></i> info@example.com</p>
                                               <p><i className="fas fa-phone"></i> +000 (123) 456 88</p>
                                      </div>
                                      <div className="footer-section newsletter">
                                               <h3>Newsletter</h3>
                                               <p>Get more update to join Us</p>
                                               <div className="subscribe">
                                                        <input type="email" placeholder="Your Email" />
                                                        <button><i className="fas fa-arrow-right"></i></button>
                                               </div>
                                      </div>
                             </div>
                             <div className="footer-bottom">
                                      <div className="footer-nav">
                                               <a href="#">FAQs</a>
                                               <a href="#">Company</a>
                                               <a href="#">Privacy</a>
                                      </div>
                                      <p>&copy; 2025 All Rights Reserved  Design And Develop By <a href="">SPOTWEBDEV</a> </p>
                             </div>
                             <div className="scroll-up">
                                      <i className="fas fa-chevron-up"></i>
                             </div>
                    </footer>
    </>
  )
}

export default Footer
