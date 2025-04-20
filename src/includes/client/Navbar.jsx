import React from 'react'
import editor from '../../pages/clients/editor/editor.module.css'

const Navbar = () => {
         return (
                  <>
                           <div className={editor.navbar}>
                                    <div className={editor.breadcrumbs}>
                                             <img style={{height:'70px', width:'200px'}} src="images/logo.png" alt="logo image" />
                                    </div>

                                    <div className={editor.searchBar}>
                                             <div className={editor.searchIcon}>
                                                      <input
                                                               type="text"
                                                               placeholder="Search thousands of templates"
                                                      />
                                             </div>
                                    </div>

                                    <div className={editor.icons}>
                                             <div className={editor.icon}><i className="bi bi-gear"></i></div>
                                             <div className={editor.icon}><i className="bi bi-bell"></i></div>
                                             <div className={editor.profile}>
                                                      <div className={editor.profileCircle}>S</div>
                                                      <div className={editor.profileInfo}>
                                                               <div><b>Personal</b></div>
                                                               <small> smartinvoicex@gmail.com </small>
                                                      </div>
                                             </div>
                                    </div>
                           </div>
                  </>
         )
}

export default Navbar
