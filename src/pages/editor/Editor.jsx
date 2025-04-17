import React, { useState } from 'react';
import editor from './editor.module.css';

import { AccordionItem_invoiceType } from '../../components/AccordionItem'

const Editor = () => {
    const [sideBar, setSideBar] = useState(true)

    return (
        <div>

            <div className={editor.navbar}>
                <div className={editor.breadcrumbs}>
                    <a href="#">Home</a>
                    <span>›</span>
                    <a href="#">Invoices</a>
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
                    <div className={editor.icon}>⚙️</div>
                    <div className={editor.icon}>🔔</div>
                    <div className={editor.profile}>
                        <div className={editor.profileCircle}>S</div>
                        <div className={editor.profileInfo}>
                            <div><strong>Personal</strong></div>
                            <small>spotwebdev.com</small>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    );
};

export default Editor;
