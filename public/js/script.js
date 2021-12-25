// button of big div
const model = document.querySelector('.model');
// button of overlay div
const overlay = document.querySelector('.overlay');
// button of exit 
const btnCloseModel = document.querySelector('.close-model');
// button of printed dresss
const btnsOpenModel = document.querySelectorAll('.show-model');

const openModel = function () {
    model.classList.remove('hidden');
    overlay.classList.remove('hidden');
  };
  
  const closeModel = function () {
    model.classList.add('hidden');
    overlay.classList.add('hidden');
  };
  
  for (let i = 0; i < btnsOpenModel.length; i++)
    btnsOpenModel[i].addEventListener('click', openModel);
  
  btnCloseModel.addEventListener('click', closeModel);
  overlay.addEventListener('click', closeModel);
  
