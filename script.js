$(document).ready(init);

function init() {
  console.log("Hello World");
  getData();
  $(document).on("click", ".delete", deleteItem);
};

function getData() {

  // resetPagamenti();


  $.ajax({
    url: "apiUno.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      printData(data);
    },
    error: function() {
      alert("Errore")
    }
  })
};

function printData(data) {
  console.log(data[3].status);
  var obj = data[i];
  for (var i = 0; i < data.length; i++) {

    if (data[i].status === "accepted") {

      $(".accepted").append(toAppend(data,i));

    } else if (data[i].status === "pending") {

      $(".pending").append(toAppend(data,i));
    } else {
      $(".rejected").append(toAppend(data,i));
    }
  }
};

function toAppend(data, i) {
  var source   = document.getElementById("entry-template").innerHTML;
  var template = Handlebars.compile(source);

  var context = {id: data[i].id, status: data[i].status, price: data[i].price, numero: i+1};
  var html    = template(context);

  return(html);
}

function deleteItem() {
  var on_click = $(this);
  var item = on_click.parent();
  var idPagamento = item.data("id");
  console.log((idPagamento));

  $.ajax({
    url: "apiDel.php",
    method: "GET",
    data: {id: idPagamento},
    success: function(data) {
      getData();
    },
    error: function () {
      alert("Errore");
    }
  })
}

function resetPagamenti() {
  $(".accepted").html("");
  $(".pending").html("");
  $(".rejected").html("");
}
