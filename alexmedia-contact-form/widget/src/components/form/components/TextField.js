import React from "react";
import MuTextField from "@material-ui/core/TextField";
import "./text-field.css";

const TextField = (props) => {
  return <MuTextField className="acf-text-field" label={props.placeholder} />;
};

export default TextField;
