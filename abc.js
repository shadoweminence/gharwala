// var images = ['overplum.png','overpain.png','overele.png'], 
//     index = 0, // starting index
//     maxImages = images.length - 1;
// var timer = setInterval(function() {
//     var curImage = images[index];
//     index = (index == maxImages) ? 0 : ++index;
//     // set your image using the curImageVar 
//     $('div.image-container img').attr('src','img/'+curImage);
//  }, 1000);



const wrapper = document.querySelector(".wrapper"),
signupHeader = document.querySelector(".signup header"),
loginHeader = document.querySelector(".login header");

loginHeader.addEventListener("click", () => {
wrapper.classList.add("active");
});
signupHeader.addEventListener("click", () => {
wrapper.classList.remove("active");
});
     


