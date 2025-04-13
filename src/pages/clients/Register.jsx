import React from 'react'
import Landing from '../../layout/Landing'

const Register = () => {
    return (
        <div>
            <Landing header='Sign Up'>
                <div className="authentication-section pt-100 pb-70">
                    <div className="container">
                        <div className="row justify-content-center">
                            <div className="col-12 col-md-6 pb-30">
                                <div className="authentication-item">
                                    <h3>Register</h3>
                                    <div className="authentication-form">
                                        <form>
                                            <div className="form-group mb-20">
                                                <input type="text" name="name" className="form-control" required placeholder="Username*" />
                                            </div>
                                            <div className="form-group mb-20">
                                                <input type="text" name="email" className="form-control" required placeholder="Email*" />
                                            </div>
                                            <div className="form-group mb-20">
                                                <input type="password" name="email" className="form-control" required placeholder="Password*" />
                                            </div>

                                            <button className="btn main-btn full-width mb-20">Register Now</button>
                                            <div className="authentication-account-access">
                                                <div className="authentication-account-access-item">
                                                    <div className="input-checkbox">
                                                        <input type="checkbox" id="check2" />
                                                        <label for="check2">I agree to the <a href="/privacy-policy">Privacy Policy</a> & <a href="/terms-of-service">Terms of Service</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </Landing>
        </div>
    )
}

export default Register
