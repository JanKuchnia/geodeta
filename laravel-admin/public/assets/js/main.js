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
    let isMenuAnimating = false;
    const toggleMenu = (open) => {
      const isCurrentlyOpen = mobileBtn.getAttribute("aria-expanded") === "true";
      const shouldOpen = open !== undefined ? open : !isCurrentlyOpen;
      if (shouldOpen === isCurrentlyOpen || isMenuAnimating) return;

      isMenuAnimating = true;

      if (shouldOpen) {
        mobileBtn.setAttribute("aria-expanded", "true");
        if (iconOpen) iconOpen.classList.add("hidden");
        if (iconClose) iconClose.classList.remove("hidden");

        mobileMenu.classList.remove("hidden");
        mobileMenu.classList.add("menu-entering");
        requestAnimationFrame(() => {
          mobileMenu.classList.remove("menu-entering");
          mobileMenu.classList.add("menu-open");
          setTimeout(() => {
            isMenuAnimating = false;
          }, 220);
        });
      } else {
        mobileBtn.setAttribute("aria-expanded", "false");
        if (iconOpen) iconOpen.classList.remove("hidden");
        if (iconClose) iconClose.classList.add("hidden");

        mobileMenu.classList.remove("menu-open");
        mobileMenu.classList.add("menu-closing");

        setTimeout(() => {
          mobileMenu.classList.add("hidden");
          mobileMenu.classList.remove("menu-closing");
          isMenuAnimating = false;
        }, 220);
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

  // Quote form now submits for real to the Laravel backend; success
  // feedback is rendered server-side via session('sent') on redirect back.
});
