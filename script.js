$(document).ready(function () {
    /*
        var newItem = document.createElement("a");       // Create a <li> node
        var textnode = document.createTextNode("Water");  // Create a text node
        $("#departamento").click(function () {
            var textnode = document.createTextNode("Fire");
        });
    
        newItem.appendChild(textnode);                    // Append the text to <li>
        
        var list = document.getElementById("menu");    // Get the <ul> element to insert a new node
        list.insertBefore(newItem, list.childNodes[0]);  // Insert <li> before the first child of <ul> 
        //document.getElementById("MyElement").classList.add('MyClass'); 
    */
    $("#ul li").click(function () {
        document.getElementById("demo").innerHTML = $(this.innerHTML).attr("id");
    });

/*
    var descendentes = document.querySelectorAll("#ul li");
    for (var i = 0; i < descendentes.length; i++) {
        descendentes[i].addEventListener("click", function (e) {
            alert(this.innerHTML);
        })
    } */

  
});