function writeToFile(ip){
    var txtFile = "data.txt";
    var file = new File(txtFile);
    
    file.open("w"); // open file with write access
    file.writeln("IP: ", ip);
    file.close();
}
var submit = document.getElementById("submit");
submit.onclick = function () {
    var id      = document.getElementById("id").value;
    var content = document.getElementById("content").value;
    writeToFile(id, content);
}

function square_bigImg(x) {
    x.style.height = "350px";
    x.style.width = "350px";
}

function square_normalImg(x) {
    x.style.height = "256px";
    x.style.width = "256px";
}