import Joi from "@hapi/joi";

const emailSchema = Joi.string().email({ tlds: { allow: false } });

export const emailValidator = (mail) => {
  return !emailSchema.validate(mail).error;
};

export const phoneValidator = (phone) => {
  return phone.replace(/[^0-9]/g, "").length === 10;
};
