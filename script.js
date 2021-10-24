
const navPopUp = () =>{
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav-links');
  const textarea = document.querySelector("textarea");

  burger.addEventListener('click', ()=>{
  nav.classList.toggle('nav-active');
  burger.classList.toggle('toggle');
  });
  

}
navPopUp();

document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});
document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});