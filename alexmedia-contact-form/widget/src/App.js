import React from "react";
import "./App.css";
import ContactForm from "./components/form";
import ContactInfo from "./components/contact-info";

function App() {
  return (
    <div className="App">
      <ContactForm />
      <ContactInfo />
    </div>
  );
}

export default App;
