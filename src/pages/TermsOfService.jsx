import React from 'react';
import Landing from '../layout/Landing';

const TermsOfService = () => {
  return (
    <Landing header="Terms of Service">
      <div className="container py-4 mt-5">
        <div className="col-8 mx-auto">
          <section>
            <h4 className="">1. Acceptance of Terms</h4>
            <p>
              By accessing or using our Receipt and Invoice Generator, you agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use the service.
            </p>
          </section>

          <section>
            <h4 className="">2. Description of Service</h4>
            <p>
              Our tool provides users with the ability to create receipts and invoices for personal or business use. We do not offer accounting or legal advice.
            </p>
          </section>

          <section>
            <h4 className="">3. User Responsibilities</h4>
            <ul className="list-disc list-inside ml-4">
              <li>You agree to provide accurate and lawful information.</li>
              <li>You are responsible for maintaining the confidentiality of your generated documents.</li>
              <li>You must not use the service for fraudulent or illegal activities.</li>
            </ul>
          </section>

          <section>
            <h4 className="">4. Intellectual Property</h4>
            <p>
              All content, branding, and tools provided by this website are the property of the company. Unauthorized use, reproduction, or distribution is prohibited.
            </p>
          </section>

          <section>
            <h4 className="">5. Limitation of Liability</h4>
            <p>
              We are not liable for any damages or losses resulting from the use or inability to use our service. All documents generated are provided "as-is" without warranties of any kind.
            </p>
          </section>

          <section>
            <h4 className="">6. Modifications to Terms</h4>
            <p>
              We reserve the right to modify these terms at any time. Continued use of the service constitutes acceptance of the updated terms.
            </p>
          </section>

          <section>
            <h4 className="">7. Termination</h4>
            <p>
              We may suspend or terminate your access to the service if you violate these terms or engage in misuse of the platform.
            </p>
          </section>

          <section>
            <h4 className="">8. Contact Us</h4>
            <p>
              For questions about these Terms of Service, please contact us at:<br />
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

export default TermsOfService;

