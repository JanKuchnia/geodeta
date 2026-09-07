document.addEventListener("DOMContentLoaded", () => {
  // Mobile menu drawer toggle
  const mobileBtn = document.getElementById("mobile-menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");
  const mobileMenuIcon = mobileBtn ? mobileBtn.querySelector(".material-symbols-outlined") : null;

  if (mobileBtn && mobileMenu) {
    const toggleMenu = (open) => {
      const isExpanded = open !== undefined ? open : mobileMenu.classList.contains("hidden");
      if (isExpanded) {
        mobileMenu.classList.remove("hidden");
        mobileBtn.setAttribute("aria-expanded", "true");
        if (mobileMenuIcon) mobileMenuIcon.textContent = "close";
      } else {
        mobileMenu.classList.add("hidden");
        mobileBtn.setAttribute("aria-expanded", "false");
        if (mobileMenuIcon) mobileMenuIcon.textContent = "menu";
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
