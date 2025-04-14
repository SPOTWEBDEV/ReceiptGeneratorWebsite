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
      // Simulate API call
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
      <div className="flex items-center justify-center min-h-[70vh]">
        <div className="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
          <h2 className="text-2xl font-semibold mb-4 text-center">Forgot Your Password?</h2>
          <p className="text-gray-600 text-center mb-6">
            Enter your email to receive a password reset link.
          </p>
          <form onSubmit={handleSubmit}>
            <input
              type="email"
              value={email}
              onChange={(e) => setEmail(e.target.value)}
              placeholder="Email address"
              className="w-full px-4 py-2 border rounded mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
              required
            />
            <button
              type="submit"
              className="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 active:scale-95 transition-transform duration-150 font-medium shadow-md"
            >
              Send Reset Link
            </button>
          </form>
          {message && <p className="mt-4 text-green-600 text-center">{message}</p>}
          {error && <p className="mt-4 text-red-600 text-center">{error}</p>}
        </div>
      </div>
    </Landing>
  );
};

export default ForgetPassword;






