const year = new Date().getFullYear();

export const Footer = () => (
  <footer className="px-6 py-16 text-center text-white">
    © {year} · Arkadiusz Wydra.{" "}
    <a href="#" className="slide-underline-white">
      Proudly hosted in my living room
    </a>
  </footer>
);
