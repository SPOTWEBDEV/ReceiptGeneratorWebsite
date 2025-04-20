// import React from 'react'
// import Landing from '../../layout/Landing'

// const ForgetPassword = () => {
//   return (
//     <>
//                     <Landing header='Forgot Password'>
//                      <h1>Forgot Password</h1>
//                      </Landing>  
//     </>
//   )
// }

// export default ForgetPassword

import React, { useState } from 'react';
import Landing from '../../layout/Landing';

const ForgetPassword = () => {
  const [email, setEmail] = useState('');
  const [message, setMessage] = useState('');
  const [error, setError] = useState('');

  const handleSubmit = async (e) => {
    e.preventDefault();

    try {
      if (!email) throw new Error("Please enter your email");
      // Simulated API call
      // await api.post('/forgot-password', { email });

      setMessage('Reset link sent to your email.');
      setError('');
    } catch (err) {
      setError(err.message);
      setMessage('');
    }
  };

  return (
    <Landing header="Forgot Password">
      {/* <div className="flex items-center justify-center min-h-[70vh] bg-gray-100 px-4">
        <div className="w-full max-w-md bg-white p-10 rounded-lg shadow-lg">
          <h3 className="text-3xl font-bold text-black text-center mb-4">Forgot Password</h3>
          <p className="text-black text-center font-medium mb-6">
            Enter your email to receive a password reset link.
          </p>
          <form onSubmit={handleSubmit}>
            <div className="mb-4">
              <input
                type="email"
                value={email}
                onChange={(e) => setEmail(e.target.value)}
                placeholder="Email address"
                className="form-control w-full border border-gray-300 px-4 py-3 rounded text-black font-semibold focus:outline-none focus:ring-2 focus:ring-blue-500"
                required
              />
            </div>
            <button
              type="submit"
              className="btn main-btn w-full bg-blue-600 text-white py-3 rounded-md font-bold hover:bg-blue-700 transition duration-200"
            >
              Send Reset Link
            </button>
          </form>
          {message && (
            <p className="mt-4 text-green-600 text-center font-semibold">{message}</p>
          )}
          {error && (
            <p className="mt-4 text-red-600 text-center font-semibold">{error}</p>
          )}
          <div className="authentication-link mt-4 text-center">
            <a href="/login" className="text-blue-600 font-medium hover:underline">
              Back to Login
            </a>
          </div>
        </div>
      </div> */}

      {/* <div style="display:flex; justify-content:center" className="col-12 col-md-6 pb-30">
        <div className="authentication-item">
          <h3>Forgot Password</h3>
          <div className="authentication-form">
            <form>
              <div className="form-group mb-20">
                <input type="text" name="user" className="form-control" required placeholder="Email Address" />
              </div>

              <button className="btn main-btn full-width">Send Code</button>
            </form>
          </div>
          <div className="authentication-link mt-3">
            <p>Don't have an account? <a href="/register">Sign Up</a></p>
          </div>
        </div>
      </div> */}


      
      <div className="col-12 col-md-6 pb-30">
        <div className="authentication-item">
          <h3>Forgot Password</h3>
          <div className="authentication-form">
            <form>
              <div className="form-group mb-20">
                <input type="text" name="user" className="form-control" required placeholder="Email Address" />
              </div>

              <button className="btn main-btn full-width">Send Code</button>
            </form>
          </div>
          <div className="authentication-link mt-3">
            <p>Don't have an account? <a href="/register">Sign Up</a></p>
          </div>
        </div>
      </div>
    </Landing>
  );
};



export default ForgetPassword;






