import _ from 'lodash';
import print from './single';

function component() {
  var element = document.createElement('div');
  var btn = document.createElement('button');

  element.innerHTML = _.join(['Hello', 'webpack'], ' ');
  
  btn.innerHTML = 'Primary Button';
  btn.onclick = print;

  element.appendChild(btn);

  return element;
}

document.body.appendChild(component());
console.log(component());