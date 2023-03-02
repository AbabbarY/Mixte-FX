
$(document).ready(function(){
  $('.menu-icon').click(function(){
     $('.media-menu').css({"display":"block"})
     $('.menu-icon').css({"display":"none"})
     $('.close-icon').css({"display":"block"})
  })
  $('.close-icon').click(function(){
    $('.media-menu').css({"display":"none"})
    $('.menu-icon').css({"display":"block"})
    $('.close-icon').css({"display":"none"})
    

  })


})

// let about = document.querySelectorAll(".visible");
// let ratio = .117;

// const option = {
//     root:null,
//     rootMargin:"0px",
//     threshold:ratio
// }


// let callback = function (entries,observe){
//     entries.forEach(function(entre){
//         if(entre.intersectionRatio > ratio){
//             entre.target.classList.add("visible-show");
//             observe.unobserve(entre.target)
//         }
//     })
// }

// const observe = new IntersectionObserver(callback,option);

// about.forEach(function(data){
//     observe.observe(data);
// })