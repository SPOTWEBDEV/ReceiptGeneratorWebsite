import React, { useState } from 'react';
import './editor.css';

import { AccordionItem_invoiceType } from '../components/AccordionItem'

const Editor = () => {
    const [sideBar, setSideBar] = useState(true)
    const hidden = ()=>{
         alert('h')
    }
    return (
        <div>
            <nav>
                <h1>SmartInvestX</h1>
                <div className="button-groups">
                    <button>save</button>
                    <button>preview</button>
                </div>
            </nav>

            <div className="content">
                {sideBar && <div className="sidebar">
                    <div>
                        <AccordionItem_invoiceType onClick={hidden} className="AccordionItem" title="Payment Invoice" />

                    </div>
                </div>}

                <div className="main">
                    <div className="editor form-editor">
                        <h3>HTML</h3>
                        <code>
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
