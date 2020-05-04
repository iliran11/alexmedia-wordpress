import React from "react";
import getIcon from "../utils/getIcon";

const ContactItem = (props) => {
  const Icon = getIcon(props.type);
  return (
    <li className="contact-item">
      <a href={props.linkProps.href}>
        <div className="contact-item-icon">
          <Icon />
        </div>
        <span>{props.label}</span>
      </a>
    </li>
  );
};

export default ContactItem;
