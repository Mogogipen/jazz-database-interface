
function searchBtnPress(){
    console.log("worked");

    let clarinet = document.getElementById("clarinet").value;
    console.log("clarinet: "+clarinet);


    let soprano = document.getElementById("soprano").value;
    console.log("soprano: "+soprano);


    let alto = document.getElementById("alto").value;
    console.log("alto: "+alto);


    let tenor = document.getElementById("tenor").value;
    console.log("tenor: "+tenor);


    let trombone = document.getElementById("trombone").value;
    console.log("trombone: "+trombone);


    let trumpet = document.getElementById("trumpet").value;
    console.log("trumpet: "+trumpet);


    let piano = document.getElementById("piano").value;
    console.log("piano: "+piano);


    let bass = document.getElementById("bass").value;
    console.log("bass: "+bass);


    let guitar = document.getElementById("guitar").value;
    console.log("guitar: "+guitar);


    let drums = document.getElementById("drums").value;
    console.log("drums: "+drums);


    var e = document.getElementById("tempo");
	var result = e.options[e.selectedIndex].text;
    console.log("tempo: "+result);
    

    var e = document.getElementById("moonLighter");
	var result = e.options[e.selectedIndex].text;
    console.log("moonLighter: "+result);
    

    var e = document.getElementById("redDot");
	var result = e.options[e.selectedIndex].text;
	console.log("redDpt: "+result);
}