const storageKey = "theme";
const colorSchemeQuery = window.matchMedia("(prefers-color-scheme: dark)");

function getSavedTheme() {
  try {
    const savedTheme = localStorage.getItem(storageKey);

    return savedTheme === "light" || savedTheme === "dark" ? savedTheme : null;
  } catch (error) {
    return null;
  }
}

function saveTheme(theme) {
  try {
    localStorage.setItem(storageKey, theme);
  } catch (error) {
    // Motyw nadal działa w bieżącym dokumencie.
  }
}

function getCurrentTheme() {
  return document.documentElement.dataset.theme === "dark" ? "dark" : "light";
}

function syncThemeToggle() {
  const themeToggle = document.querySelector(".theme-toggle");

  if (!themeToggle) {
    return;
  }

  const isDark = getCurrentTheme() === "dark";
  const themeIcon = themeToggle.querySelector("i");

  themeToggle.setAttribute("aria-pressed", String(isDark));
  themeToggle.setAttribute(
    "aria-label",
    isDark ? "Włącz jasny motyw" : "Włącz ciemny motyw",
  );
  themeIcon?.classList.toggle("fa-sun", isDark);
  themeIcon?.classList.toggle("fa-moon", !isDark);
}

function setTheme(theme, remember = true) {
  document.documentElement.dataset.theme = theme;

  if (remember) {
    saveTheme(theme);
  }

  syncThemeToggle();
}

const savedTheme = getSavedTheme();
setTheme(savedTheme ?? (colorSchemeQuery.matches ? "dark" : "light"), false);

document.querySelector(".theme-toggle")?.addEventListener("click", () => {
  const nextTheme = getCurrentTheme() === "dark" ? "light" : "dark";
  setTheme(nextTheme);
});

colorSchemeQuery.addEventListener("change", (event) => {
  if (getSavedTheme() !== null) {
    return;
  }

  setTheme(event.matches ? "dark" : "light", false);
});
