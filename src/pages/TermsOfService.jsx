import React from 'react';
import Landing from '../layout/Landing';

const TermsOfService = () => {
  return (
    <Landing header="Terms of Service">
      <div className="max-w-3xl mx-auto mt-6 space-y-6 bg-white p-6 rounded-md shadow-sm text-gray-800">
        <section>
          <h2 className="text-xl font-semibold">1. Acceptance of Terms</h2>
          <p>
            By accessing or using our Receipt and Invoice Generator, you agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use the service.
          </p>
        </section>

        <section>
          <h2 className="text-xl font-semibold">2. Description of Service</h2>
          <p>
            Our tool provides users with the ability to create receipts and invoices for personal or business use. We do not offer accounting or legal advice.
          </p>
        </section>

        <section>
          <h2 className="text-xl font-semibold">3. User Responsibilities</h2>
          <ul className="list-disc list-inside ml-4">
            <li>You agree to provide accurate and lawful information.</li>
            <li>You are responsible for maintaining the confidentiality of your generated documents.</li>
            <li>You must not use the service for fraudulent or illegal activities.</li>
          </ul>
        </section>

        <section>
          <h2 className="text-xl font-semibold">4. Intellectual Property</h2>
          <p>
            All content, branding, and tools provided by this website are the property of the company. Unauthorized use, reproduction, or distribution is prohibited.
          </p>
        </section>

        <section>
          <h2 className="text-xl font-semibold">5. Limitation of Liability</h2>
          <p>
            We are not liable for any damages or losses resulting from the use or inability to use our service. All documents generated are provided "as-is" without warranties of any kind.
          </p>
        </section>

        <section>
          <h2 className="text-xl font-semibold">6. Modifications to Terms</h2>
          <p>
            We reserve the right to modify these terms at any time. Continued use of the service constitutes acceptance of the updated terms.
          </p>
        </section>

        <section>
          <h2 className="text-xl font-semibold">7. Termination</h2>
          <p>
            We may suspend or terminate your access to the service if you violate these terms or engage in misuse of the platform.
          </p>
        </section>

        <section>
          <h2 className="text-xl font-semibold">8. Contact Us</h2>
          <p>
            For questions about these Terms of Service, please contact us at:<br />
            <strong>Email:</strong> support@yourdomain.com
          </p>
        </section>

        <footer className="pt-6 text-sm text-gray-500 border-t mt-8">
          Effective Date: April 13, 2025
        </footer>
      </div>
    </Landing>
  );
};

export default TermsOfService;

