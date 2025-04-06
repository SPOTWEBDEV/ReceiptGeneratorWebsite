import React from 'react'
import { Box_Stats } from '../components/Box'



const stats = [
  {
    id: 1,
    count: '98%',
    title: 'User Satisfaction Rate',
    highlighted:false
  },
  {
    id: 2,
    count: '35M',
    title: ' Invoices & Receipts Generated',
    highlighted: true
  },
  {
    id: 3,
    count: '97%',
    title: 'Positive Customer Feedback',
    highlighted: false
  },
  {
    id: 4,
    count: '92%',
    title: 'Businesses Benefiting from Our Tools',
    highlighted: false
  },
]

const CompanyStats = () => {
  return (
  <>

    <div className="stats-container">
      <div className="section-title">Learn Our Company Statistics</div>
      <div className="stats-wrapper">
        
         {stats.map(el=> <Box_Stats key={el.id} {...el} />)}
      </div>
    </div>

  </>
)
}

export default CompanyStats
