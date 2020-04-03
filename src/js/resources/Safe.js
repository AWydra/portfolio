class Safe {
  constructor() {
    this.elements = document.querySelectorAll("[data-keep-safe]");
  }

  static decryptEmail(encoded) {
    const address = atob(encoded);
    window.location.href = `mailto:${address}`;
  }

  reverseString(str) {
    return str
      .split("")
      .reverse()
      .join("");
  }

  init() {
    this.elements.forEach(el => {
      const href = el.dataset.keepSafe; // this.reverseString(el.dataset.keepSafe);
      const type = el.dataset.type;
      const label = el.dataset.label; // && this.reverseString(el.dataset.label);
      const span = document.createElement("span");
      span.className = "contact__info--reversed";

      switch (type) {
        case "email":
          const decrypted = atob(href);
          el.href = `javascript:Safe.decryptEmail("${href}")`;
          span.textContent = label || this.reverseString(decrypted);
          break;
        case "whatsapp":
          el.href = `https://wa.me/48${this.reverseString(href)}`;
          span.textContent = label || href;
          break;
        default:
          return console.warn("Safe class: Undefined type");
      }

      el.appendChild(span);
    });
  }
}
