'use strict'
{
   //写真の最後から2番目の#loopを付与
    const lastChild = document.querySelector('.slide__loop').lastElementChild;
    const prevElement = lastChild.previousElementSibling;
    const prePrevElement = prevElement.previousElementSibling;
 
    console.log(lastChild);
    console.log(prevElement);
    console.log(prePrevElement);
    prePrevElement.id = 'loop';
    

   const children = document.querySelector('.slide__loop').children;
   console.log(children);
   
   let elements = document.querySelectorAll('.wp-post-image');

   for(let i = 0; i< elements.length; i++){
      elements[i].classList.add('imeges')
   }
 
   

}