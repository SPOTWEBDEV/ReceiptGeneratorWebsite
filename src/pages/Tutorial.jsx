import React from 'react'
import Landing from '../layout/Landing'
import { BoxTutorial } from '../components/Box'

let videos = []

const Tutorial = () => {
  return (
    <>
      <Landing header="Tutorial">
        <section className="case-study-section pt-100 pb-100">
          <div className="container">
            <div className="row justify-content-center">


              {videos.length > 0 ? <BoxTutorial /> : <h3>No tutorial videos have been uploaded yet.</h3> }

            </div>

          </div>
        </section>
      </Landing>
    </>
  )
}

export default Tutorial
