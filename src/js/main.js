import _ from 'lodash';
import { printHello, printWelcome, printAsik } from './single';

import '../sass/style.css';

function component() {
  var element = document.createElement('div');
  var btn = document.createElement('button');

  element.innerHTML = _.join(['Hello', 'webpack'], ' ');
  
  btn.innerHTML = 'Primary Button';
  btn.classList.add('btn');

  element.appendChild(btn);

  return element;
}

document.body.appendChild(component());

console.log(printWelcome('Khaidir Afif'));