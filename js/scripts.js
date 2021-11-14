function showProducts(str) {
    if (str == "") {
      document.getElementById("productsList").innerHTML = "";
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("productsList").innerHTML = xhttp.responseText;

    }
    xhttp.open("GET", "controller/products.php?q="+str);
    xhttp.send();
    return false;
}

function detailProduct(str) {
  if (str == "") {
    document.getElementById("interior").innerHTML = "";
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
      document.getElementById("interior").innerHTML = xhttp.responseText;

  }
  xhttp.open("GET", "controller/detailProduct.php?p="+str);
  xhttp.send();
  return false;
}
