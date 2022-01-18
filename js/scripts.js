$(document).ready(function(){
  $(document).on("click", "#a_button", function(){
    if($("#a_menu").css("display") == "block")
      $("#a_menu").css("display", "none");
    else
      $("#a_menu").css("display", "block");
  })
})
$(document).ready(function(){
  $(document).on("click", ".categories", function(){
    $.ajax({url: "index.php?action=category", data: {category: this.value}, success: function(result){
      $("#productsList").html(result);
    }});
  });
  $(document).on("click", ".products", function(){
    $.ajax({url: "index.php?action=product", data: {p: this.value}, success: function(result){
      $("#productsList").html(result);
    }});
  });
  $(document).on("change", "#nav", function(){
    $.ajax({url: "index.php?action=category", data: {category: this.value}, success: function(result){
      $("#productsList").html(result);
    }});
  });
});
$(document).ready(function(){
  
  $(document).on("click", "#cart_button", function(){
    $.ajax({url: "index.php?action=addCart", data: {q: document.getElementById("quantity").value, p: this.value}, success: function(result){
      $(".top_menu").html(result);
    }});
  });
  
  $(document).on("click", "#deleteCart", function(){
    $.ajax({url: "index.php?action=deleteCart", success: function(result){
      $("#cart").html("");
      $("#a_menu").html(result);
    }});
  });

  $(document).on("click", ".deleteItem", function(){
    $.ajax({url: "index.php?action=deleteItem", data: {p: this.value}, success: function(result){
      var aux = result.split("~");
      $("#cart").html(aux[0]);
      $("#a_menu").html(aux[1]);
    }});
  });
});






