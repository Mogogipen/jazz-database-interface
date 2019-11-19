function searchBtnPress() {
    console.log("worked");
    var clarinet = document.getElementById("clarinet").value;
    console.log("clarinet: " + clarinet);
    var soprano = document.getElementById("soprano").value;
    console.log("soprano: " + soprano);
    var alto = document.getElementById("alto").value;
    console.log("alto: " + alto);
    var tenor = document.getElementById("tenor").value;
    console.log("tenor: " + tenor);
    var trombone = document.getElementById("trombone").value;
    console.log("trombone: " + trombone);
    var trumpet = document.getElementById("trumpet").value;
    console.log("trumpet: " + trumpet);
    var piano = document.getElementById("piano").value;
    console.log("piano: " + piano);
    var bass = document.getElementById("bass").value;
    console.log("bass: " + bass);
    var guitar = document.getElementById("guitar").value;
    console.log("guitar: " + guitar);
    var drums = document.getElementById("drums").value;
    console.log("drums: " + drums);
    var e = document.getElementById("tempo");
    var result = e.options[e.selectedIndex].text;
    console.log("tempo: " + result);
    var e = document.getElementById("moonLighter");
    var result = e.options[e.selectedIndex].text;
    console.log("moonLighter: " + result);
    var e = document.getElementById("redDot");
    var result = e.options[e.selectedIndex].text;
    console.log("redDpt: " + result);
}
function addBtnPress() {
    var x = document.getElementById("addForm");
    x.style.visibility = "visible";
}
function closeAddForm() {
    var x = document.getElementById("addForm");
    x.style.visibility = "hidden";
}
