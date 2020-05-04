import React from "react";
import getIcon from "../utils/getIcon";

const ContactItem = (props) => {
  const Icon = getIcon(props.type);
  return (
    <li className="contact-item">
      <div className="contact-item-icon">
        <Icon />
      </div>
      <span>{props.content}</span>
    </li>
  );
};

export default ContactItem;
