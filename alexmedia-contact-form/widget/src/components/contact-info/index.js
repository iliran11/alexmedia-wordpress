import React from "react";
import "./contact-info.css";
import ContactItem from "./components/ContactItem";
import data from "./data.json";

const ContactInfo = () => {
  const { title, background, items } = data;
  return (
    <div className="contact-info">
      <img src={background} alt="" className="background-image" />
      <div className="info">
        <h2 className="title">{title}</h2>
        <ul>
          {items.map((item) => {
            return <ContactItem {...item} />;
          })}
        </ul>
      </div>
    </div>
  );
};

export default ContactInfo;
