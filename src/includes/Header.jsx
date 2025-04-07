import React from 'react'

const Header = ({header}) => {
  return (
    <>
       <header className="inner-page-header">
        <div className="container">
            <div className="inner-header-content">
                <h1>{header}</h1>
                <nav aria-label="breadcrumb">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li className="breadcrumb-item active" aria-current="page">{header}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>
    </>
  )
}


export default Header
