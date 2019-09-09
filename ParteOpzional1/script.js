function init() {

  getElement(); //inizio pagina con tutti i dischi presenti

  $('button').click(function() {
    $('.container').html(""); //pilisco l'HTML dopo la pressione del cerca
    getElement();
    $('input').val(""); //pulisco cella input dopo la ricerca
  });
  
}

$(document).ready(init);


function getElement() {

  var search = $('header form input').val(); //prendo autore dall'input
  var query = {'autore': search}; //salvo la variabile
  console.log(search);

  $.ajax({
    url: 'object.php',
    method: 'GET',
    data: query,
    success: function(data) {
      console.log(data);
      print(data); //richiamo funzione per stampare
    },
    error: function(error) {
      alert("Errore", error);
    }
  })
} //funzione per scaricare i dati

function print(data) {

  var source   = document.getElementById("entry-template").innerHTML;
  var template = Handlebars.compile(source);

  for (var i = 0; i < data.length; i++) {
    var context = {title: data[i].title, autore: data[i].autore, data: data[i].data};
    var html = template(context);

    $('.container').append(html);
  }
} //funzione per stampare a schermo i vari risultati
