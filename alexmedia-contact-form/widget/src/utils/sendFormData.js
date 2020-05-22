const formUrl =
  "https://alexmedia.co.il/wp-json/contact-form-7/v1/contact-forms/803/feedback";
const wrongFormUrl =
  "https://alexmedia.co.il/wp-json/contact-form-7/v1/contact-forms/818/feedback";

export const sendFormData = async (formId) => {
  const form = document.getElementById(formId);
  const formData = new FormData(form);
  fetch(formUrl, {
    method: "POST",
    body: formData,
  });
};
export const sendWrongFormData = async (formId) => {
  const form = document.getElementById(formId);
  const formData = new FormData(form);
  fetch(wrongFormUrl, {
    method: "POST",
    body: formData,
  });
};
