import React, { useState } from 'react';
import editor from  './editor.module.css';

import { AccordionItem_invoiceType } from '../components/AccordionItem'

const Editor = () => {
    const [sideBar, setSideBar] = useState(true)
    
    return (
        <div>
            <nav className={editor.nav}>
                <h1>SmartInvestX</h1>
                <div className={editor.button_groups}>
                    <button className={editor.button}>save</button>
                    <button className={editor.button}>preview</button>
                </div>
            </nav>

            <div className={editor.content}>
                {sideBar && <div className={editor.sidebar}>
                    <div>
                        <AccordionItem_invoiceType onClick={hidden} className="AccordionItem" title="Payment Invoice" />

                    </div>
                </div>}

                <div className={editor.main}>
                    <div className={editor.editor}>
                        <h3 className={editor.editor_h3}>HTML</h3>
                        <code className={editor.code}>
                            &lt;div className="container"&gt;<br />
                            &nbsp;&nbsp;&lt;h1&gt;Hello, World&lt;/h1&gt;<br />
                            &lt;/div&gt;
                        </code>
                    </div>

                    <div className="editor preview-editor">
                        <h3>JSX</h3>
                        <code>
                            &lt;div className="container"&gt;<br />
                            &nbsp;&nbsp;&lt;h1&gt;Hello, World&lt;/h1&gt;<br />
                            &lt;/div&gt;
                        </code>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Editor;
