<!DOCTYPE html>
<html lang="fr">
<head>
		  <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="style.css">

	<title></title>
</head>
<body>
      <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Buger Code <span class="glyphicon glyphicon-4-user"><span class="glyphicon glyphicon-cutlery"> </h1>

       <div class="container admin">
          <div class="row">
            <h1>listes des items  <div class="btn btn-success"><a class="" href="insert.php"><span class="glyphicon glyphicon-plus"></span> ajouter</a></div></h1>
             <table class="table table-stripped table-bordered">
                <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Prix</th>
                      <th>Categorie</th>
                      <th>action</th>

                    </tr>
                </thead>
                      
                   <tbody>
                     <tr>
                        <td>Item</td>
                        <td>Description</td>
                         <td>Prix </td>
                          <td>Categorie</td>
                           <td width:300>
                                 <a href="view.php?id=1" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"> Voir </span></a>
                                  <a href="update.php?id=1" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"> Modifier </span></a>
                                   <a href="delete.php?id=1" class="btn btn-danger"><span class="glyphicon glyphicon-remove"> Supprimer </span></a>


                          </td>
                     </tr>
                      <tr>
                        <td>Item 1</td>
                        <td>Description 2 </td>
                         <td>Prix 2 </td>
                          <td>Categorie 2 </td>
                           <td width:300>
                                 <a href="view.php?id=2" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"> Voir </span></a>
                                  <a href="update.php?id=2" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"> Modifier </span></a>
                                   <a href="delete.php?id=2" class="btn btn-danger"><span class="glyphicon glyphicon-remove"> Supprimer </span></a>


                          </td>
                     </tr>
                      <tr>
                        <td>Item 3 </td>
                        <td>Description 3  </td>
                         <td>Prix 3  </td>
                          <td>Categorie 3 </td>
                           <td width:500>
                                 <a href="view.php?id=3" class="btn btn-default" width:100><span class="glyphicon glyphicon-eye-open"> Voir </span></a>
                                  <a href="update.php?id=3" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"> Modifier </span></a>
                                   <a href="delete.php?id=3" class="btn btn-danger"><span class="glyphicon glyphicon-remove"> Supprimer </span></a>


                          </td>
                     </tr>


                   </tbody>

             </table>
          </div>

       </div>


			 
     <script  src="bootstrap/jquery-3.4.1.min.js"></script>
     <script src="bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>