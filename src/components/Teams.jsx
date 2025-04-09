import React from 'react'
import {TeamCard} from '../components/Box'


const teams = [
    {
        id:1,
        name: 'Ezea ugochukwu Micheal',
        occupation:'Software Engineering and CEO of SPOTWEBDEV',
        bio: '',
        image: '/images/team/4.jpg',
        positionStyle:'bottom'
    },
    {
        id:2,
        name: 'Uchenna Godwill',
        occupation:'FullStack Web Developer And Graphic Designer',
        bio: '',
        image: '/images/team/5.jpg',
        positionStyle: 'center'
    },
    {
        id: 3,
        name: 'Chidiebere Divine',
        occupation: 'Backend Developer',
        bio: '',
        image: '/images/team/1.jpg',
        positionStyle: 'center'
    },
    {
        id: 3,
        name: 'Somto Ogbodo',
        occupation: 'Frontend Developer And Editor',
        bio: '',
        image: '/images/team/2.jpg',
        positionStyle: 'bottom'
    },
    {
        id: 4,
        name: 'Emmanuel Btc',
        occupation: 'Graphic Designer And UI/UX Designer',
        bio: '',
        image: '/images/team/3.jpg',
        positionStyle: 'bottom'
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
