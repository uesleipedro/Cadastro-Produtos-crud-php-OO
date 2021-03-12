$(document).ready(function () {
 
    $("#ul li").click(function () {
        document.getElementById("demo").innerHTML = $(this.innerHTML).attr("id");
    });
          
});