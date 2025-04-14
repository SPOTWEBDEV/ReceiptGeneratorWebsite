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
        </>
    )
}