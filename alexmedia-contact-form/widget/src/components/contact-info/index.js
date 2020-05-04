import React from "react";
import "./contact-info.css";
import ContactItem from "./components/ContactItem";
import data from "./data.json";

const ContactInfo = () => {
  const { title, background, items } = data;
  return (
    <div className="contact-info">
      <img src={background} alt="" />
      <div className="info">
        <h2 className="title">{title}</h2>
        <ul>
          {items.map((item) => {
            return (
              <ContactItem
                content={item.label}
                type={item.type}
                key={item.type}
              />
            );
          })}
        </ul>
      </div>
    </div>
  );
};

export default ContactInfo;
