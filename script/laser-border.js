/**
 * laser-border.js
 * Cross-browser fallback for .laser-border animation.
 * 
 * @property --angle is NOT supported in Firefox.
 * This script animates --angle via JS so the exact same
 * conic-gradient mask effect works on ALL browsers.
 * 
 * Speed: 3.5s per full rotation (matches CSS animation-duration)
 */
(function () {
  // Check if @property is supported — if yes, CSS handles it, no JS needed
  const supportsProperty = window.CSS && CSS.registerProperty;

  if (supportsProperty) {
    // Chrome / Edge / Safari — CSS @property + animation handles it natively
    return;
  }

  // Firefox & older browsers — animate --angle via requestAnimationFrame
  const DURATION_MS = 3500; // must match animation-duration in CSS
  let startTime = null;

  function tick(timestamp) {
    if (!startTime) startTime = timestamp;
    const elapsed = (timestamp - startTime) % DURATION_MS;
    const angle = (elapsed / DURATION_MS) * 360;

    document.querySelectorAll('.laser-border').forEach(function (el) {
      el.style.setProperty('--angle', angle + 'deg');
    });

    requestAnimationFrame(tick);
  }

  requestAnimationFrame(tick);
})();
