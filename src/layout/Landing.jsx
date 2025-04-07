import React from 'react'
import {ClientFooter} from '../includes/Footer'
import {ClientNav} from '../includes/Navbar'
import Header from '../includes/Header'



const Landing = ({children,header}) => {
         return (
                  <>
                           <ClientNav/>
                           <Header header={header}/>
                           {children}
                           <ClientFooter/>
                  </>
         )
}

export default Landing
