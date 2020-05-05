import data from "../data.json";

const getValidation = (validation) => {
  switch (validation) {
    case "required": {
      return (value) => !!value;
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
