import React from 'react'
import Landing  from '../layout/Landing'
import { TeamsComponent } from '../components/Teams'


const Teams = () => {
    return (
        <>
        <Landing header="Our Teams">
            <TeamsComponent/>
        </Landing>
        </>
    )
}


export default Teams;