document.querySelectorAll("[data-include]").forEach(async (el) => {
  const file = el.getAttribute("data-include");
  if (!file) return;

  const res = await fetch(file);
  const html = await res.text();
  el.outerHTML = html;
});
