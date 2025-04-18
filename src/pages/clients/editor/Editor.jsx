import React  from 'react';
// import editor from './editor.module.css';

import { AccordionItem_invoiceType } from '../../../components/AccordionItem'
import Navbar from '../../../includes/client/Navbar';
import SideNavBar from '../../../includes/client/SideNavBar';

import { clientLink } from '../../../data/siteInfo';

const Editor = () => {
    

    return (
        <div>

            <Navbar></Navbar>

            <main>
                <SideNavBar links={clientLink}/>
            </main>



        </div>
    );
};

export default Editor;
