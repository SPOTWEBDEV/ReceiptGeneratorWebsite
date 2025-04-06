import React from 'react'
import { Box_Testimonial } from '../components/Box'

const testimonial = [
         {
                  id:1,
                  name: 'Michael M. Griffin',
                  text:'Great service and support! Highly recommended.',
                  star: 3
         },
         {
                  id: 2,
                  name: 'Robin T. Peckham',
                  text: 'A fantastic experience, will use again!',
                  star:2
         },
         {
                  id: 3,
                  name: 'John Doe',
                  text: 'Professional and efficient, exceeded expectations!',
                  star:5
         },
]

const Testimonial = () => {
         return (
                  <>
                           <div className="testimonial">
                                    <h2>What Our Clients Say</h2>
                                    <div className="testimonial-container" id="testimonialSlider">
                                            {
                                              testimonial.map(el => <Box_Testimonial key={el.id} {...el}/>)
                                            }
                                    </div>
                                    
                           </div>
                           
                  </>
         )
}

export default Testimonial
