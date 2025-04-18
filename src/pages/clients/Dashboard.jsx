import React from 'react';
// import editor from './editor/editor.module.css';
import { BoxCard } from '../../components/Box';
import Navbar from '../../includes/client/Navbar';
import SideNavBar from '../../includes/client/SideNavBar';
import { clientLink } from '../../data/siteInfo';




const Dashboard = () => {

         return (
                  <div>



                           <Navbar />

                           <main>
                                    <SideNavBar links={clientLink} />
                           </main>



                  </div>
         );


}

export default Dashboard
