function resetHtmlStyles() {
    document.documentElement.style.overflow = "";
    document.documentElement.style.pointerEvents = "";
    document.documentElement.style.paddingRight = "";
}

window.addEventListener("popstate", (event) => {
    document.addEventListener("livewire:navigated", resetHtmlStyles);
});

const observer = new MutationObserver(resetHtmlStyles);

observer.observe(document.documentElement, {
    attributes: true,
    attributeFilter: ["style"],
});
