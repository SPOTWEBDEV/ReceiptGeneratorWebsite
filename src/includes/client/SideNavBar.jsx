import React from 'react'
import editor from '../../pages/clients/editor/editor.module.css'

const SideNavBar = (props) => {

  return (
    <>
                    <div className={editor.sidebar}>
                             <nav className={editor.nav}>
                                    {props.links.map(link => <a href={link.href}><span>{link.icon}</span> {link.name}</a> )}     
                             </nav>
                    </div>
    </>
  )
}

export default SideNavBar
