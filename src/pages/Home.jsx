import React from 'react'
import Landing from '../layout/Landing'
import CompanyStats from '../includes/CompanyStats'
import Testimonial from '../includes/Testimonial'

const Home = () => {
  return (
    <div>
       <Landing>
         <Testimonial/>
         <CompanyStats/>
       </Landing>
    </div>
  )
}

export default Home
