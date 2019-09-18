<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>

    <!-- JS: CHART JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>

    <title>Pagamenti</title>

  </head>
  <body>
    <div class="container">
      <div class="accepted">
        <h2>Accepted</h2>

      </div>
      <div class="pending">
        <h2>Pending</h2>

      </div>
      <div class="rejected">
        <h2>Rejected</h2>

      </div>

    </div>

    <!-- template contenitore pagamenti -->
    <script id="entry-template" type="text/x-handlebars-template">
      <div class="pagamento" data-id="{{id}}">
        <h4>Numero pagamento: {{numero}}</h4>
        <h4>{{status}}</h4>
        <h4>{{price}}</h4>
        <h4 class="delete"> Delete </h4>
      </div>
    </script>
  </body>
</html>
