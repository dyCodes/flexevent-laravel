/*!
 *--------------
 * Website Author: Yusuf Daudu ( dyCodes )
 * Author URL: https://github.com/dyCodes
 *---------------------------------
 */

/***
 * DOM Selector helper function
 */
const selectElem = (elem, all = false) => {
  elem = elem.trim();
  if (all) {
    return [...document.querySelectorAll(elem)];
  } else {
    return document.querySelector(elem);
  }
};

/***
 * Scrolls to an element with header offset
 */
const scrollto = (elem) => {
  let elementPos = selectElem(elem).offsetTop;
  // header offset - 60
  window.scrollTo({
    top: elementPos - 60,
    behavior: "smooth",
  });
};

/***
 * Show whatsapp button
 */
// const WhatsappButton = () => {
// 	let waButton = selectElem('#whatsapp_button');
// 	if (window.pageYOffset > 500) {
// 		waButton.classList.add('_show');
// 	} else {
// 		waButton.classList.remove('_show');
// 	}
// };

/***
 * Window onScroll Event
 */
window.addEventListener("scroll", () => {});

/***
 * Window onLoad Event
 */
window.addEventListener("load", () => {});

/***
 * GALLERY LIGHT INIT
 */
const galleryLightbox = GLightbox({
  selector: ".glightbox",
});
