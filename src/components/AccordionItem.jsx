import { useState } from "react";


export const AccordionItem_invoiceType = ({ title, children, removeSide }) => {
    const [open, setOpen] = useState(false);




    return (
        <li className={`accordion-item ${open ? 'open' : ''}`}>
            <p onClick={() => setOpen(!open)}>{title}</p>
            {open && <ul>
                <img onClick={()=>removeSide(false)} src="/images/feature-shape/feature-shape-1.png" alt="" />
            </ul>}
        </li>
    );
};