const login = document.querySelector(".login");
const sign = document.querySelector(".sign-in");

login.addEventListener("click", () => {
    login.classList.toggle("active")
    sign.classList.toggle("active")
})

sign.addEventListener("click", () => {
    login.classList.toggle("active")
    sign.classList.toggle("active")
})

console.log("coucou");