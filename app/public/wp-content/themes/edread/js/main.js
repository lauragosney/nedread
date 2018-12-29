//
document.addEventListener('DOMContentLoaded', () => {
//
//   const navLinks = document.querySelectorAll("nav li a")
//
//   navLinks.forEach(link => {
//   	link.addEventListener("click", function() {
//
//       navLinks.forEach(link => link.classList.remove("selected"))
//       this.classList.add("selected")
//     })
//   })
//
  const logo = document.querySelector('.logo')
  const work = document.querySelector('li#menu-item-19')

  logo.addEventListener("click", function() {
    work.classList.add("active")
  })

})
