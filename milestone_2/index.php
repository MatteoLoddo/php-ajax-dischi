<?php

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <title>Document</title>
</head>

<body>
  <header>
    <div class="d-relative">
      <?php include "../milestone_1/the_header.php" ?>
    </div>
  </header>
  <main>
    <div id="app"class=" bg-main-app">
      <div class="container pt-5" >
        <div class="row justify-content-center gap-3">
          <!-- creo un ciclo sul array importato -->
            <div v-for="disc in discList" class="col-2 my-bg-secondary">
              <div class="mycard text-center ">
                <img class="" :src="disc.poster" :alt="disc.title">
                <h5 class="text-light  p-1">{{disc.title}}</h3>
                <h6 class="text-muted ">{{disc.author}}</h6>
              </div>
            </div>
        </div>
      </div>
    </div>
  </main>
  <script src="../js/main.js"></script>
</body>

</html>