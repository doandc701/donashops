function increase(){
    var upAnddown= document.getElementById("textbox").value;
    // trừ  1 đơn vị rồi gán cho ô text
    if(parseInt(upAnddown)>1){

        document.getElementById("textbox").value = parseInt(upAnddown)-1;
    }
}
function reduction() {
  var upAnddown= document.getElementById("textbox").value;
    // cộng thêm 1 đơn vị rồi gán cho ô text
    document.getElementById("textbox").value = parseInt(upAnddown)+1;
}