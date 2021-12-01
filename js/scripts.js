$(document).ready(function(){
  $(document).on("click", ".categories", function(){
    $.ajax({url: "/controller/products.php", data: {q: this.value}, success: function(result){
      $("#productsList").html(result);
    }});
  });
  $(document).on("click", ".products", function(){
    $.ajax({url: "/controller/detailProduct.php", data: {p: this.value}, success: function(result){
      $("#productsList").html(result);
    }})
  })
});

$(document).ready(function(){
  $("#a_button").click(function(){
    if($("#a_menu").css("display") == "block")
      $("#a_menu").css("display", "none");
    else
      $("#a_menu").css("display", "block");
  })
})
