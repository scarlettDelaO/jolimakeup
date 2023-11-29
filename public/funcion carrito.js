let counter=1;

function plus(){
    counter++;
}

function less(){
    counter--;
}

function get(){
    return counter;
}

const inc=document.getElementById("plus");
const input=document.getElementById("input");
const dec=document.getElementById("less");

inc.addEventListener("click",()=>{
    plus();
    input.value=get();
});

dec.addEventListener("click",()=>{
    if(input.value>1){
        less();
    }
    input.value=get();
})