import React, { useState } from 'react';
import editor from  './editor.module.css';

import { AccordionItem_invoiceType } from '../../components/AccordionItem'

const Editor = () => {
    const [sideBar, setSideBar] = useState(true)
    
    return (
        <div>
            <nav className={editor.nav}>
                <h1 className={editor.nav_h1}>SmartInvestX</h1>
                <div className={editor.button_groups}>
                    <button className={editor.button}>save</button>
                    <button className={editor.button}>preview</button>
                </div>
            </nav>

            <div className={editor.content}>
                {sideBar && <div className={editor.sidebar}>
                    <div>
                        <AccordionItem_invoiceType removeSide={setSideBar} className="AccordionItem" title="Payment Invoice" />

                    </div>
                </div>}

                <div className={editor.main}>
                    <div className={editor.editor}>
                        <form className={editor.form}>
                            <div className="card">
                                <div className="color">
                                     
                                </div>
                                <div className="p-2">
                                    <label htmlFor="">Message</label>
                                    <textarea className='w-100 border-none p-2'></textarea>
                                </div>
                            </div>
                            
                        </form>
                    </div>

                    <div className={editor.editor}>
                        <p>Preview Here</p>
                        
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Editor;
