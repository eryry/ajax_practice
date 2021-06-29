
console.log('%c [JavaScript]call,apply,bindの使い方', 'color:red; font-size:1.5em');

function greet(){
  let hi = `Hi,${this.name}`;
  console.log(hi);
}

let obj = {
  name: "Eri"
}

greet.call(obj);