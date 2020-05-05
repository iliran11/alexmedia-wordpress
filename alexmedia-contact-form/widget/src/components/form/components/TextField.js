import React from "react";
import MuTextField from "@material-ui/core/TextField";
import "./text-field.css";

const TextField = (props) => {
  return (
    <MuTextField
      error={props.error}
      helperText={props.error ? props.errorMessage : ""}
      className="acf-text-field"
      label={props.placeholder}
      onChange={props.onChange}
      value={props.value}
    />
  );
};

export default TextField;
