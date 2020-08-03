class Form {
  constructor() {
    this.form = document.querySelector("#form");
    this.name = document.querySelector("#name");
    this.email = document.querySelector("#email");
    this.message = document.querySelector("#message");
    this.specialCharacters = /[!@#\$%\^\&*\)\(+=._-]/gm;
  }

  validateName() {
    const { value } = this.name;
    const errorField = this.name.nextElementSibling.nextElementSibling;

    if (value.length === 0) {
      errorField.textContent = "To pole jest wymagane";
    } else if (value.length < 3) {
      errorField.textContent = "Minimum 3 znaki";
    } else if (value.length > 45) {
      errorField.textContent = "Maksymalnie 45 znaków";
    } else if (this.specialCharacters.test(value)) {
      errorField.textContent = "Możesz używać tylko liter i cyfr";
    } else {
      errorField.textContent = "";
    }
  }

  validateEmail() {
    const { value } = this.email;
    const errorField = this.email.nextElementSibling.nextElementSibling;
    if (value.length === 0) {
      errorField.textContent = "To pole jest wymagane";
    } else if (
      !/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/.test(value)
    ) {
      errorField.textContent = "Wprowadź poprawny adres email";
    } else {
      errorField.textContent = "";
    }
  }

  validateMessage() {
    const { value } = this.message;
    const errorField = this.message.nextElementSibling.nextElementSibling;

    if (value.length === 0) {
      errorField.textContent = "To pole jest wymagane";
    } else if (value.length < 20) {
      errorField.textContent = "Minimum 20 znaków";
    } else if (value.length > 5000) {
      errorField.textContent = "Maksymalnie 5000 znaków";
    } else {
      errorField.textContent = "";
    }
  }

  init() {
    this.name.addEventListener("input", () => this.validateName());
    this.email.addEventListener("input", () => this.validateEmail());
    this.message.addEventListener("input", () => this.validateMessage());
  }
}
