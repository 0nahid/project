//function variable
function add(){
  let a,b,c;
  a=Number(document.querySelector("#first").value);
  b=Number(document.querySelector("#second").value);
  c=a+b;
  //show to main result
  document.querySelector("#answer").value=c;
}
