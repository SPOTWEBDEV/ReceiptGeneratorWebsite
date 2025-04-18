import { useState } from "react"
export const ClientNav = () => {
    const [sidebar,setSide] = useState(false)
    return (
        <>
            <div className="fixed-top bg-white">
                <div className="topbar">
                    <div className="container">
                        <div className="topbar-inner">
                            <div className="row justify-content-center justify-content-lg-between">
                                <div className="topbar-item topbar-left">
                                    <ul className="topbar-list">
                                        <li>
                                            <i className="icofont-headphone"></i>
                                            <a href="tel:+234 08108833188">+234 810 8833 188</a>
                                        </li>
                                        <li>
                                            <i className="icofont-ui-message"></i>
                                            <a href=""><span className="" >spotwebdev.com@gmail.com</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div className="topbar-item topbar-right">
                                    <ul className="topbar-list">
                                        <li>
                                            <i className="icofont-paper-plane"></i>
                                            <a href="/contact">Request For Demo</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="">
                    <div className="container sticky-black">
                        <div className="mobile-nav" style={{display:'flex', justifyContent:'space-between',width:'100%'}}>
                            <a href="/" className="mobile-brand">
                                <img style={{height:'100px'}} src="/images/logo.png" alt="logo" className="logo" />
                            </a>
                            

                            <button type="button" onClick={()=>setSide(!sidebar)}>
                                    <i className="flaticon-grid" ></i>
                            </button>
                            
                        </div>
                    </div>
                    <div className="main-nav">
                        <div className="container">
                            <nav className="navbar navbar-expand-md navbar-light">
                                <a className="navbar-brand" href="/">
                                    <img style={{ height: '100px' , width:'300px'}} src="/images/logo.png" alt="logo" className="logo" />
                                </a>
                                <div className="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                    <ul className="navbar-nav mx-auto">
                                        <li className="nav-item">
                                            <a href="/" className="nav-link">Home</a>

                                        </li>
                                        <li className="nav-item">
                                            <a href="/example" className="nav-link ">Example</a>

                                        </li>
                                        <li className="nav-item">
                                            <a href="/pricing" className="nav-link">Pricing</a>

                                        </li>

                                        <li className="nav-item">
                                            <a href="/teams" className="nav-link ">Our Team</a>
                                        </li>

                                        <li className="nav-item">
                                            <a href="/contact" className="nav-link">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div className="navbar-option">
                                    <div className="navbar-option-item">
                                        <a href="/login" className="btn main-btn">LOGIN</a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            {sidebar && <div className="side-modal-wrapper ">
                <div className="side-modal side-modal-show">
                    <div className="side-modal-header">
                        <div className="side-modal-logo">
                            <a href="/"><img style={{ height: '60px' }} src="/images/logo.png" alt="logo" /></a>
                        </div>
                        <div className="side-modal-close" onClick={()=>setSide(false)}>
                            <i className="icofont-close"></i>
                        </div>
                    </div>
                    <div className="side-modal-body">
                        <div className="sidebar-info-content">
                            <h3>Contact Us</h3>
                            <div className="sidebar-info-list">
                                <div className="sidebar-info-list-item">
                                    <i className="icofont-headphone"></i>
                                    <a href="tel:00321-654-98">+00 321 654 98</a>
                                </div>
                                <div className="sidebar-info-list-item">
                                    <i className="icofont-ui-message"></i>
                                    <a href="/cdn-cgi/l/email-protection#d9b0b7bfb699bcabacbdbca1f7bab6b4"><span className="__cf_email__" data-cfemail="dfb6b1b9b09fbaadaabbbaa7f1bcb0b2">[email&#160;protected]</span></a>
                                </div>
                                <div className="sidebar-info-list-item">
                                    <i className="icofont-paper-plane"></i>
                                    <a href="contact.html">Request For Demo</a>
                                </div>
                            </div>
                        </div>
                        <div className="sidebar-info-content">
                            <h3>Follow Us</h3>
                            <ul className="social-list">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i className="icofont-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank"><i className="icofont-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i className="icofont-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/" target="_blank"><i className="icofont-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>}
            
        </>
    )
}