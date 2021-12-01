var index = 1;
changeImage = function() {
    var imgs= [src="./assets//image//img_58b8056ebfde3.png",
    src="./assets//image//do.png",
 src="./assets//image//mix.png",
src="./assets//image//giayluoi.png"];
    document.getElementById('img').src=imgs[index];
    index++;
    if(index ==4)
    {
        index =0;
        
    }
 }
setInterval(changeImage,1500);