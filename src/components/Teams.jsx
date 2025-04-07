import React from 'react'
import {TeamCard} from '../components/Box'


const teams = [
    {
        id:1,
        name: 'Ezea ugochukwu Micheal',
        occupation:'Software Engineering',
        bio: ''
    },
    {
        id:1,
        name: 'Repented',
        occupation:'Web Developer',
        bio: ''
    }
]



export const TeamsComponent = () => {
    return (
        <>

            <section className="team-section pt-100 pb-70">
                <div className="container">
                    <div className="row">
                        

                        {teams.map(team => <TeamCard key={team.id} {...team}/>)}
                        
                    </div>
                </div>
            </section>


        </>
    )
}
