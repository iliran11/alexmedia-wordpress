document.addEventListener("DOMContentLoaded", function () {
  if (santizeCurrentLocation() === "https://alexmedia.co.il/") {
    console.log("this is change colors plugin");
    const nodes = document.querySelectorAll("nav a");
    nodes.forEach((node) => {
      const hashPosition = node.href.indexOf("#");
      if (hashPosition !== -1) {
        console.log(node.href.substring(hashPosition));
        node.href = node.href.substring(hashPosition);
      }
    });
  }
});

function santizeCurrentLocation() {
  const url = window.location.href;
  const locationHashIndex = url.indexOf("#");
  if (locationHashIndex !== -1) {
    return url.substring(0, locationHashIndex);
  } else {
    return url;
  }
}
