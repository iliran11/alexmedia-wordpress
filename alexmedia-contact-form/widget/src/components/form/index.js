import React from "react";
import TextField from "./components/TextField";

import "./form.css";
import data from "./data.json";

const ContactForm = () => {
  const { title, inputs } = data;
  return (
    <form className="form" noValidate autoComplete="off">
      <h2>{title}</h2>
      <div className="inputs">
        {inputs.map((input) => {
          return <TextField {...input} />;
        })}
      </div>
    </form>
  );
};

export default ContactForm;
