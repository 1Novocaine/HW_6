<?php

$arrProducts = [
	[
		'title' => 'Fallout Classic Collection',
		'price' => 156,
		'category' => 'PCgame'

	],
	[
		'title' => 'Fallout 2: A Post Nuclear Role Playing Game',
		'price' => 156,
		'category' => 'PCgame'

	],
	[
		'title' => 'Fallout 3: Game of the Year Edition',
		'price' => 78,
		'category' => 'PCgame'

	],
	[
		'title' => 'Fallout New Vegas Ultimate',
		'price' => 156,
		'category' => 'PCgame'

	],
	[
		'title' => 'Fallout 4',
		'price' => 468,
		'category' => 'PCgame'

	]
];
?>

<!DOCTYPE html>
<html lang="ru">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="
         sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		 <link rel="stylesheet" type="text/css" href="css/background.css">
      <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
      <title>Продукция</title>
   </head>
   <body>
      <nav class="navbar navbar-light bg-light">
         <a class="navbar-brand" href="Main_Page">
         <img src="images/navbar.png" width="30" height="30" class="d-inline-block align-top" alt="NavbarImage">
         Список товаров:
         </a>
      </nav>
	   <div class="bg">
      <div class="container " style="font-family: sans-serif;" align="center">
	      <table class="table table-hover table-dark" style="width: 650px; display:block; top:10%;" >
            <tr align="center">
               <th scope="col"> #</th>
               <th scope="col"> <img src="images/Protuct_Name.png" class="img-thumbnail" alt="Protuct_Name">Название товара:</th>
               <th scope="col"><img src="images/Category.png" class="img-thumbnail" alt="Category">Категория:</th>
               <th scope="col"><img src="images/Price.png" class="img-thumbnail" alt="Price"> Cтоимость: </th>
               <th scope="col"><img src="images/discount.png" class="img-thumbnail" alt="discount">Скидка:</th>
            </tr>
            <?php foreach ($arrProducts as $Product): ?>
            <tr align="center">
               <td>
                  <?= ++$ProductNumber . '.'?>
               </td>
               <td>
                  <?= $Product ['title'] ?>
               </td>
               <td>
                  <?= $Product ['category'] ?>
               </td>
               <td>
                  <?= $Product ['price'] . ' грн.'?>
               </td>
               <td>
                  <?= $Product ['price'] * 0.9 . ' грн.'?>
               </td>
            </tr>
            <?php endforeach ?>
			</table>     
	 </div>
      <footer class="page-footer font-small mdb-color lighten-3 pt-4">
         <div class="container" ">
            <div class="row">
               <div class="col-lg-2 col-md-12 mb-4" style="left:10%;">
                  <div class="view overlay z-depth-1-half">
                     <a href="https://store.steampowered.com/sub/45615/">
                        <div class="mask rgba-white-light"><img src="images/F1.png" class="img-fluid" width="150" height="150" alt="Fallout"></div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 mb-4" style="left:10%;">
                  <div class="view overlay z-depth-1-half">
                     <a href="https://store.steampowered.com/app/38410/Fallout_2_A_Post_Nuclear_Role_Playing_Game/">
                        <div class="mask rgba-white-light"><img src="images/F2.png" class="img-fluid" width="150" height="150" alt="Fallout 2"></div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 mb-4" style="left:10%;">
                  <div class="view overlay z-depth-1-half">
                     <a href="https://store.steampowered.com/app/22370/Fallout_3_Game_of_the_Year_Edition/">
                        <div class="mask rgba-white-light"><img src="images/F3.jpg" class="img-fluid" width="150" height="150" alt="Fallout 3"></div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-2 col-md-12 mb-4" style="left:10%;">
                  <div class="view overlay z-depth-1-half">
                     <a href="https://store.steampowered.com/sub/13436/">
                        <div class="mask rgba-white-light"><img src="images/New_Vegas.jpeg" class="img-fluid" width="150" height="150" alt="Fallout:New Vegas"></div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 mb-4" style="left:10%;">
                  <div class="view overlay z-depth-1-half" >
                     <a href="https://store.steampowered.com/app/611660/Fallout_4_VR/">
                        <div class="mask rgba-white-light"> <img src="images/F4.jpg" class="img-fluid" width="150" height="150" alt="Fallout 4"></div>
                     </a>
                  </div>
               </div>
               
            </div>
         </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </div>
   </body>
</html>

