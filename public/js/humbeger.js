
const aside = document.querySelector('.aside')
const humberger = document
  .querySelector(".humbeger")
  .addEventListener("click", () => {
    aside.classList.toggle("-ml-96")
  });

window.addEventListener('scroll', () => {
  aside.classList.add('-ml-96')
})
