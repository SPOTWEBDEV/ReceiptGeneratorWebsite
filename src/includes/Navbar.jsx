export const ClientNav = () => {
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
                                            <a href="tel:00321-654-98">+234 08108833188</a>
                                        </li>
                                        <li>
                                            <i className="icofont-ui-message"></i>
                                            <a href="/cdn-cgi/l/email-protection#99f0f7fff6d9fcebecfdfce1b7faf6f4"><span className="__cf_email__" data-cfemail="355c5b535a7550474051504d1b565a58">[email&#160;protected]</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div className="topbar-item topbar-right">
                                    <ul className="topbar-list">
                                        <li>
                                            <i className="icofont-paper-plane"></i>
                                            <a href="contact.html">Request For Demo</a>
                                        </li>
                                        <li className="search-option">
                                            <i className="icofont-search-1"></i>
                                            <a href="#" className="search-popup">Search</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="navbar-area sticky-black">
                    <div className="container">
                        <div className="mobile-nav">
                            {/* <a href="index.html" className="mobile-brand">
                                <img src="/images/logo.png" alt="logo" className="logo" />
                            </a> */}
                            <div className="navbar-option">
                                <div className="navbar-option-item">
                                    <button type="button">
                                        <i className="flaticon-user" ></i>
                                    </button>
                                </div>
                                <div className="navbar-option-item side-topbar-option">
                                    <button type="button">
                                        <i className="flaticon-grid" ></i>
                                    </button>
                                </div>
                                <div className="navbar-option-item">
                                    <button type="button" className="search-option">
                                        <i className="icofont-search-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="main-nav">
                        <div className="container">
                            <nav className="navbar navbar-expand-md navbar-light">
                                {/* <a className="navbar-brand" href="index.html">
                                    <img src="/images/logo.png" alt="logo" className="logo" />
                                </a> */}
                                <div className="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                    <ul className="navbar-nav mx-auto">
                                        <li className="nav-item">
                                            <a href="#" className="nav-link">Home</a>
                                           
                                        </li>
                                        <li className="nav-item">
                                            <a href="#" className="nav-link ">Example</a>
                                        
                                        </li>
                                        <li className="nav-item">
                                        <a href="pricing.html" className="nav-link">Pricing</a>
                                        
                                        </li>

                                        <li className="nav-item"i>
                                        <a href="our-team.html" className="nav-link active">Our Team</a>
                                        </li>
                                       
                                        <li className="nav-item">
                                            <a href="contact.html" className="nav-link">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div className="navbar-option">
                                    <div className="navbar-option-item">
                                        <a href="authentication.html" className="btn main-btn">Login Or Register</a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}