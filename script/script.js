/**
 * My skills
 */
let skills = {
    'HTML&CSS' : 80,
    'JavaScript' : 80,
    'TypeScript' : 80,
    'React' : 50,
    'NodeJS' : 50,
    'MongoDB' : 50,
    'PHP' : 60,
    'SQL' : 80,
    'GIT' : 75,

}

/**
 * Cicle for create vectors 
*/
let skillsDiv = document.querySelector('.flex-wrapper');

for (const [key, value] of Object.entries(skills)) {
    skillsDiv.innerHTML += `<div class="single-chart">
    <svg viewBox="0 0 36 36" class="circular-chart">
      <path class="circle-bg"
        d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
      />
      <path class="circle"
        stroke-dasharray="${value}, 100"
        d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
      />
      <text x="18" y="20.35" class="percentage">${key}</text>
    </svg>
    </div>
    `    
};

/**
 * Change background color for body
 */

let changeBackground = () => {
  if(window.innerWidth < 767){
    document.body.style.backgroundColor = 'white';
  }
  else{
    document.body.style.backgroundColor = 'black';
  }
}

changeBackground();

window.addEventListener('resize', () => {
  changeBackground();
})


/**
 * Show multilanguage drop item
 */
let dropItem = document.querySelector('.multilanguage-drop-item');

document.querySelector('.multilanguage').addEventListener('mousemove', () =>{
  console.log(dropItem);
  dropItem.style.display = 'block'; 
})

document.querySelector('.multilanguage').addEventListener('mouseout', () =>{
  console.log(dropItem);
  dropItem.style.display = 'none';
})