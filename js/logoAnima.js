let logo = document.getElementById('MQ-logo');
let sections = logo.children[2].children;

console.log(sections);

sections[0].style.transition = 'all 1s';
sections[1].style.transition = 'all 1s';
sections[2].style.transition = 'all 1s';


logo.addEventListener('click', (e) => {
  animate(2000);
})

const animate = (t) => {
  sections[0].style.transform = 'translateX(5px)';
  sections[1].style.transform = 'translateX(10px)';
  sections[2].style.transform = 'translateX(15px)';
  setTimeout(() => {
    sections[0].style.transform = 'translateX(0)';
    sections[1].style.transform = 'translateX(0)';
    sections[2].style.transform = 'translateX(0)';
  }, t);
}

animate(1000);