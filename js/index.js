const body = document.querySelector(':root');
/*
const updateSourceMedia = (
  colorPreference: 'light' | 'dark'
): void => {
  const pictures = document.querySelectorAll('picture')
 
  pictures.forEach((picture) => {
    const sources: NodeListOf<HTMLSourceElement> =
      picture.querySelectorAll(`
        source[media*="prefers-color-scheme"], 
        source[data-media*="prefers-color-scheme"]
      `)
 
    sources.forEach((source) => {
      // Preserve the source `media` as a data-attribute
      // to be able to switch between preferences
      if (source?.media.includes('prefers-color-scheme')) {
        source.dataset.media = source.media
      }
 
      // If the source element `media` target is the `preference`,
      // override it to 'all' to show
      // or set it to 'none' to hide
      if (source?.dataset.media.includes(colorPreference)) {
        source.media = 'all'
      } else if (source) {
        source.media = 'none'
      }
    })
  })
}
*/
function toggleAutoMode() {
  body.style.setProperty("color-scheme", "light dark");
}

function toggleLightMode() {
  body.style.setProperty("color-scheme", "light");
}

function toggleDarkMode() {
  body.style.setProperty("color-scheme", "dark");
}