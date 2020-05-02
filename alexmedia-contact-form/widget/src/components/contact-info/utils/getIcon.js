import { ReactComponent as cursor } from "../icons/cursor.svg";
import { ReactComponent as facebook } from "../icons/facebook.svg";
import { ReactComponent as call } from "../icons/call.svg";
import { ReactComponent as whatsapp } from "../icons/whatsapp.svg";

const getIcon = (itemType) => {
  switch (itemType) {
    case "mail": {
      return cursor;
    }
    case "facebook": {
      return facebook;
    }
    case "phone": {
      return call;
    }
    case "whatsapp": {
      return whatsapp;
    }
    default: {
      return null;
    }
  }
};

export default getIcon;
