const hamburger = document.querySelector('button[aria-expanded]');
function klappNav ({target}) {
    const expanded = target.getAttribute('aria-expanded') === 'true' || false;
    hamburger.setAttribute('aria-expanded', !expanded);
}
hamburger.addEventListener('click', klappNav);