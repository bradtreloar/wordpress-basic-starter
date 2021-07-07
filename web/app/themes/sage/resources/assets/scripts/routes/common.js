import Chocolat from "chocolat";

export default {
  init() {},
  finalize() {
    // Initialise Chocolat on all gallery blocks.
    Chocolat(document.querySelectorAll(".blocks-gallery-item a"), {});
  },
};
