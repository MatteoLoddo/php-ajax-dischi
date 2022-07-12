<?php
// importo il mio file che contiene l array
include "database/data.php";

// include "css/style.css"
// var_dump($discList)
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>
  <header>
    <div class="d-relative">
      <?php include "the_header.php" ?>
    </div>
  </header>
  <main>
    <div class=" bg-main-app">
      <div class="container pt-5" >
        <div class="row justify-content-center gap-3">
          <!-- creo un ciclo sul array importato -->
          <?php foreach ($discList as $disc) { ?>
            <div class="col-2 my-bg-secondary">
              <div class="mycard text-center ">
                <img class="" src="<?php echo  $disc["poster"] ?>" alt="<?php echo "image of" . $disc["title"]  ?>">
                <h5 class="text-light  p-1"><?php echo $disc["title"] ?></h3>
                <h6 class="text-muted "><?php echo $disc["author"] ?></h6>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>



    </div>
  </main>
</body>

</html>