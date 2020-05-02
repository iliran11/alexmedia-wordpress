import React from "react";
import "./contact-info.css";
import ContactItem from "./components/ContactItem";
import contactDetails from "./contactDetails.json";

const ContactInfo = () => {
  const { title, background, items } = contactDetails;
  return (
    <div className="contact-info">
      <img src={background} />
      <div className="info">
        <h2 className="title">{title}</h2>
        <ul>
          {Object.entries(items).map((entry) => {
            const [key, value] = entry;
            return <ContactItem content={value} type={key} key={key} />;
          })}
        </ul>
      </div>
    </div>
  );
};

export default ContactInfo;
