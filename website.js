function submit(e)
{
    if (e.keyCode == 13)
    {
        var name = document.getElementById("usr");
        if (/\S/.test(name.value))
            document.getElementById("main_head").innerHTML = "<strong>Welcome, " + name.value + "!</strong>";
        else
            document.getElementById("main_head").innerHTML = "<strong>Welcome!</strong>";

    }
}

function bigImg(x) {
    x.style.height = "350px";
    x.style.width = "350px";
}

function normalImg(x) {
    x.style.height = "256px";
    x.style.width = "256px";
}
