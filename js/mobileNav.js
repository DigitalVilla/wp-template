const menuList = document.getElementById('menu-list');
const menuBtn = document.getElementById('menu-button');
const menuBg = document.getElementById('menu-bg');
const lines = menuBtn.children;
let isOpen = false;
let pid; //pid of t
let pid2; //

const menuCross = () => {
  const deg = 45 * 3;
  if (pid2) clearTimeout(pid2);
  lines[1].style.visibility = " hidden";
  lines[0].style.transform = `rotate(${deg}deg)`;
  lines[0].style.top = "48%";
  lines[2].style.transform = `rotate(-${deg}deg)`;
  lines[2].style.bottom = "48%";

  for (let i = 0; i < 3; i++) {
    lines[i].style.backgroundColor = "#fff";
  }
}

const menuHam = () => {
const pad = 1.4;
 pid2 = setTimeout(() => {
    lines[1].style.visibility = "visible";
  }, 200)
  lines[0].style.transform = "rotate(0)";
  lines[0].style.top = `${pad}rem`
  lines[2].style.transform = " rotate(0)";
  lines[2].style.bottom = `${pad}rem`

  for (let i = 0; i < 3; i++) {
    lines[i].style.backgroundColor = "#ce2d83";
  }
}

menuBtn.addEventListener('click', (e) => {
  if (!isOpen) { //open menu
    menuBg.style.transform = 'scale(60)';
    swapClass({target: menuList,add: 'flexCol',remove: 'hide',delay: 0});
    swapClass({target: menuList,add: 'fadeIn',remove: 'fadeOut',delay: 0});
    menuCross()
  } else { // close menu
    menuBg.style.transform = 'scale(0)';
    swapClass({target: menuList,add: 'fadeOut',remove: 'fadeIn',delay: 0});
    swapClass({target: menuList,add: 'hide',remove: 'flexCol',delay: 0});
    menuHam();
  }
  isOpen = !isOpen;
})

const swapClass = ({target, add, remove, delay}) => {
  if (pid) clearTimeout(pid);
  target.classList.add(add);
  if (delay === 0)
    target.classList.remove(remove);
  else
    pid = setTimeout(() => {
      target.classList.remove(remove);
    }, delay);
}