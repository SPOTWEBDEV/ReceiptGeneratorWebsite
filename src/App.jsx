import { BrowserRouter, Route, Routes } from "react-router-dom";
import Home from "./pages/Home";
import Teams  from "./pages/Teams";
import Pricing from "./pages/Pricing";
import Contact from "./pages/Contact";
import Example from "./pages/Example";
import Error404 from "./pages/ErrorPage/404";
import Editor from "./pages/Editor";
import Register from "./pages/clients/Register";
import Login from "./pages/clients/Login";
import TermsOfService from "./pages/TermsOfService";
import PrivacyPolicy from "./pages/PrivacyPolicy";
import ForgetPassword from "./pages/clients/ForgetPassword";
import BlogDetails from "./pages/BlogDetails";

function App() {
  return (
    <BrowserRouter>
      <Routes>

        {/* landing page routs */}
        <Route path="/" element={<Home />} />
        <Route path="/teams" element={<Teams />} />
        <Route path="/pricing" element={<Pricing />} />
        <Route path="/contact" element={<Contact />} />
        <Route path="/example" element={<Example />} />
        <Route path="/terms" element={<TermsOfService />} />
        <Route path="/privacy-policy" element={<PrivacyPolicy />} />
        <Route path="/forgot-password" element={<ForgetPassword />} />
        <Route path="/blogs-list" element={<BlogDetails />} />

        {/* Not-Found routs */}
        <Route path="*" element={<Error404 />} />

        <Route path="/editor" element={<Editor />} />
        <Route path="/register" element={<Register />} />
        <Route path="/login" element={<Login />} />
        
      </Routes>
    </BrowserRouter>
  );
}

export default App;
