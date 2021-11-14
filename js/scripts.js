function test(str){
  console.log(str);
  return false;
}
function showProducts(str) {
    if (str == "") {
      document.getElementById("productsList").innerHTML = "";
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("productsList").innerHTML = this.status;
    }
    xhttp.open("GET", "controller/products.php?q="+str);
    xhttp.send();
    return false;
}