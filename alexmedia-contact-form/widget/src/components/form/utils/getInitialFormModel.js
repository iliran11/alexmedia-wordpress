import data from "../data.json";
import { emailValidator, phoneValidator } from "./validators";

const getValidation = (validation) => {
  switch (validation) {
    case "required": {
      return (value) => !!value;
    }
    case "mail": {
      return emailValidator;
    }
    case "phone": {
      return phoneValidator;
    }
    default: {
      return null;
    }
  }
};

const getInitialFormModal = () => {
  return data.inputs.reduce((acc, currentInput) => {
    acc[currentInput.name] = {
      validation: getValidation(currentInput.validation),
      hasError: false,
      value: "",
    };
    return acc;
  }, {});
};

export default getInitialFormModal;
