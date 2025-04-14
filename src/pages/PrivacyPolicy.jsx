// import React from 'react'
// import Landing from '../layout/Landing'

import React from 'react';
import Landing from '../layout/Landing';

const PrivacyPolicy = () => {
  return (
    <Landing header="Privacy Policy">
      <div className="container py-4 mt-5 ">
        <div className=" col-8 mx-auto">
          <section>
            <h4 className="">1. Introduction</h4>
            <p>
              Welcome to our Receipt and Invoice Generator. This Privacy Policy explains how we collect, use, and protect your information when you use our website and services.
            </p>
          </section>

          <section>
            <h4 className="">2. Information We Collect</h4>
            <p>
              We collect only the necessary information to generate your receipts and invoices. This may include:
            </p>
            <ul className="list-disc list-inside ml-4">
              <li>Business name and contact details</li>
              <li>Customer name and details</li>
              <li>Transaction information</li>
            </ul>
          </section>

          <section>
            <h4 className="">3. How We Use Your Information</h4>
            <p>
              The information you provide is used solely to generate receipts and invoices. We do not sell or share your data with third parties.
            </p>
          </section>

          <section>
            <h4 className="">4. Data Storage and Security</h4>
            <p>
              All data is processed locally in your browser or stored securely using industry-standard encryption methods. We prioritize the privacy and security of your information.
            </p>
          </section>

          <section>
            <h4 className="">5. Cookies</h4>
            <p>
              Our website may use cookies to improve user experience, such as remembering preferences. These cookies do not collect personal data.
            </p>
          </section>

          <section>
            <h4 className="">6. Third-Party Services</h4>
            <p>
              We may use third-party tools (e.g., analytics, payment processors) that may collect non-personal data. We ensure they adhere to privacy standards.
            </p>
          </section>

          <section>
            <h4 className="">7. User Rights</h4>
            <p>
              You have the right to request the deletion of your data or inquire about what data we store. Contact us at support@yourdomain.com for any privacy concerns.
            </p>
          </section>

          <section>
            <h4 className="">8. Changes to This Policy</h4>
            <p>
              We may update this Privacy Policy from time to time. Changes will be reflected on this page with an updated effective date.
            </p>
          </section>

          <section>
            <h4 className="">9. Contact Us</h4>
            <p>
              If you have questions about this Privacy Policy, please contact us at: <br />
              <strong>Email:</strong> support@yourdomain.com
            </p>
          </section>

          <footer className="pt-6 text-sm text-gray-500 border-t mt-8">
            Effective Date: April 13, 2025
          </footer>
        </div>
      </div>
    </Landing>
  );
};

export default PrivacyPolicy;




