function writeToFile(d1){
    var fso = new ActiveXObject("Scripting.FileSystemObject");
    var fh = fso.OpenTextFile("data.txt", 8, true, 0);
    fh.WriteLine('ip: ', d1);
    fh.Close();
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
