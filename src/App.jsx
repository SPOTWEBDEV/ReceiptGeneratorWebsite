import { BrowserRouter, Route, Routes } from "react-router-dom";
import Home from "./pages/Home";
import Teams  from "./pages/Teams";
import Pricing from "./pages/Pricing";
import Contact from "./pages/Contact";
import Example from "./pages/Example";
import Error404 from "./pages/ErrorPage/404";

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/teams" element={<Teams />} />
        <Route path="/pricing" element={<Pricing />} />
        <Route path="/contact" element={<Contact />} />
        <Route path="/example" element={<Example />} />
        <Route path="*" element={<Error404 />} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;
