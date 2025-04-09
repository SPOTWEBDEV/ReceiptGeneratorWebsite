import React from 'react'
import Landing from '../../layout/Landing'

const Login = () => {
  return (
    <>
         <Landing header='Sign In'>
                             <div className="authentication-section pt-100 pb-70">
                                      <div className="container">
                                               <div className="row justify-content-center">
                                                        
                                                        <div className="col-12 col-md-6 pb-30">
                                                                 <div className="authentication-item">
                                                                          <h3>Login</h3>
                                                                          <div className="authentication-form">
                                                                                   <form>
                                                                                            <div className="form-group mb-20">
                                                                                                     <input type="text" name="user" className="form-control" required placeholder="Username/Email Address*" />
                                                                                            </div>
                                                                                            <div className="form-group mb-20">
                                                                                                     <input type="password" name="email" className="form-control" required placeholder="Password*" />
                                                                                            </div>
                                                                                            <div className="authentication-account-access mb-20">
                                                                                                     <div className="authentication-account-access-item">
                                                                                                              <div className="input-checkbox">
                                                                                                                       <input type="checkbox" id="check1" />
                                                                                                                                <label for="check1">Remember Me!</label>
                                                                                                              </div>
                                                                                                     </div>
                                                                                                     <div className="authentication-account-access-item">
                                                                                                              <div className="authentication-link">
                                                                                                                       <a href="/forget-password">Forget password?</a>
                                                                                                              </div>
                                                                                                     </div>
                                                                                            </div>
                                                                                            <button className="btn main-btn full-width">Log In</button>
                                                                                   </form>
                                                                          </div>
                                                                 </div>
                                                        </div>
                                               </div>
                                      </div>
                             </div>
         </Landing>
    </>
  )
}

export default Login
