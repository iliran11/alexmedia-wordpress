import React, { useState } from "react";
import TextField from "./components/TextField";
import getInitialFormModel from "./utils/getInitialFormModel";
import { sendFormData, sendWrongFormData } from "../../utils/sendFormData";
import "./form.css";
import data from "./data.json";

const ContactForm = () => {
  const { title, inputs } = data;
  const [formData, setFormData] = useState(getInitialFormModel());
  const onChange = (fieldName) => (e) => {
    setFormData({
      ...formData,
      [fieldName]: { ...formData[fieldName], value: e.target.value },
    });
  };
  const handleSubmit = (e) => {
    e.preventDefault();
    let shouldRedirect = true;
    const nextFormData = { ...formData };
    Object.keys(nextFormData).forEach((key) => {
      const { validation, value } = nextFormData[key];
      if (!validation) return;
      if (!validation(value)) {
        shouldRedirect = false;
        nextFormData[key].hasError = true;
      } else {
        nextFormData[key].hasError = false;
      }
    });
    setFormData(nextFormData);
    if (shouldRedirect) {
      window.location.assign("https://alexmedia.co.il/תודה");
      sendFormData("form");
    } else {
      sendWrongFormData("form");
    }
  };
  return (
    <form id="form" noValidate autoComplete="off" onSubmit={handleSubmit}>
      <h2 className="title">{title}</h2>
      <div className="inputs">
        {inputs.map((input) => {
          return (
            <TextField
              {...input}
              error={formData[input.name].hasError}
              onChange={onChange(input.name)}
              value={formData[input.name].value}
            />
          );
        })}
      </div>
      <button type="submit">{data["submit-text"]}</button>
    </form>
  );
};

export default ContactForm;
