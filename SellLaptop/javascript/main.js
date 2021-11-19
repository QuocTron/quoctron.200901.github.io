// setTimeout(function(){
//     alert('Thông báo')
// },1000) 
// console.log('ăn nè');



var urlAdvertisement = [
    "https://philong.com.vn/media/news/1607_facebookposter.jpg",
    "https://www.techsignin.com/wp-content/uploads/2018/08/macOS-Mojave-se-co-tren-Macbook-pro-va-Imac-Marketing-Wallpaper.jpeg",
    "https://lh3.googleusercontent.com/proxy/fOjMF9Z7LSuNGJCQYZIiiqgzCDKoUnc9U1EF11dpPxPWML__OTl2yM543Mgd8CYLYWF2tLSvmuDue9OH0LHBXWyCfMdd1HHJaSz6Wuk"];
var advertisement = document.querySelector('.advertisement');
var sourceImgAdv = advertisement.querySelector('.img_adv');
var checkedAdvertisement = document.querySelector('.checkbox');
 function addAdvertismentFunc(){
     if(checkedAdvertisement.checked){
        sourceImgAdv.src=urlAdvertisement[Math.floor(Math.random()*3)];
        advertisement.classList.add('advertisementJS');
        checkedAdvertisement.checked=false;
       }else{
        sourceImgAdv.src=urlAdvertisement[Math.floor(Math.random()*3)];
        advertisement.classList.add('advertisementJS');
     }
     
}
setTimeout(addAdvertismentFunc,1000);
setInterval(addAdvertismentFunc, 100000);
var clickImage = document.querySelector('.slider-main');
var images = document.querySelectorAll('.slider_item');
clickImage.onclick=function(){
    changeImage();
}
var slider_main = document.querySelector('.slider-main')
var poschang = -601;
var index =0;
var changeImage = function(){
    if(index==images.length-1){
        poschang -=-601;
        slider_main.style =`transform: translateX(${poschang}px)`;
        if(poschang==0)
            index=0;
    }
    else {
        slider_main.style =`transform: translateX(${poschang}px)`;
        poschang=poschang  +-601;
        index++;
    }
}
setInterval(changeImage,7000);

window.addEventListener("load",function(){
    
});

 function addButton(i,persent){
    var elementContainButton = document.querySelector('.course_section');
    var button = document.createElement("button");
    var node = document.createTextNode(i);
    button.appendChild(node);
    button.style=`left:${persent}%`;
    button.classList.add('buttonChangePage');
    button.appendChild(node);
    elementContainButton.appendChild(button);
    button.onclick=function(e){
        if(e.target.innerText==2){
            course_row.style=`transform: translateX(-1180px)`;
        }else{
            course_row.style=`transform: translateX(0px)`;
        }
    }
 }

var countCard = document.querySelectorAll('.course_section_row_col');
var  course_row = document.querySelector('.course_section_row');
var persent=45;
for(var i =0 ; i<countCard.length;i+=5){
    addButton(((i/5)+1),persent);
    persent+=5;
}

