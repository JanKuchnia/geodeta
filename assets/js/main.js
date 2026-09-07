document.addEventListener("DOMContentLoaded", () => {
  // Initialize Lucide icons
  if (window.lucide && typeof window.lucide.createIcons === "function") {
    window.lucide.createIcons();
  }

  // Mobile menu drawer toggle
  const mobileBtn = document.getElementById("mobile-menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");
  const iconOpen = document.getElementById("menu-icon-open");
  const iconClose = document.getElementById("menu-icon-close");

  if (mobileBtn && mobileMenu) {
    const toggleMenu = (open) => {
      const isExpanded = open !== undefined ? open : mobileMenu.classList.contains("hidden");
      if (isExpanded) {
        mobileMenu.classList.remove("hidden");
        mobileBtn.setAttribute("aria-expanded", "true");
        if (iconOpen) iconOpen.classList.add("hidden");
        if (iconClose) iconClose.classList.remove("hidden");
      } else {
        mobileMenu.classList.add("hidden");
        mobileBtn.setAttribute("aria-expanded", "false");
        if (iconOpen) iconOpen.classList.remove("hidden");
        if (iconClose) iconClose.classList.add("hidden");
      }
    };

    mobileBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      toggleMenu();
    });

    mobileMenu.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        toggleMenu(false);
      });
    });

    document.addEventListener("click", (e) => {
      if (!mobileMenu.contains(e.target) && !mobileBtn.contains(e.target)) {
        toggleMenu(false);
      }
    });

    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        toggleMenu(false);
      }
    });
  }

  // Quote form submission handling
  const quoteForm = document.getElementById("quote-form");
  const formFeedback = document.getElementById("form-feedback");

  if (quoteForm && formFeedback) {
    quoteForm.addEventListener("submit", (event) => {
      event.preventDefault();
      formFeedback.classList.remove("hidden");
      quoteForm.reset();
    });
  }
});
