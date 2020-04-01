class Menu {
  constructor(config) {
    this.className = config.className;
    this.btn = document.querySelector(config.btnSelector);
    this.menu = document.querySelector(config.menuSelector);
    this.items = this.menu.querySelectorAll("li");
  }

  open() {
    this.menu.classList.add(this.className);
  }

  close() {
    this.menu.classList.remove(this.className);
  }

  toggle() {
    this.menu.classList.toggle(this.className);
  }

  init() {
    this.btn.addEventListener("click", () => this.toggle());

    this.items.forEach(el => {
      el.addEventListener("click", () => this.close());
    });
  }
}
