const root = document.querySelector(':root');

function toggleLightDarkMode(selected) {
    root.style.setProperty("color-scheme", selected);
}