import React from 'react'
import Landing from '../layout/Landing'
import { BoxExample } from '../components/Box';

const example = [];

const Example = () => {
    return (
        <>
            <Landing header="Example">
                <section className="case-study-section pt-100 pb-100">
                    <div className="container">
                        <div className="row justify-content-center">

                            {example.length > 0 ? <BoxExample /> : <h3>No invoice example have been uploaded yet.</h3> }
                            
                        </div>
                        
                    </div>
                </section>
            </Landing>
        </>
    )
}

export default Example