
<?php
 require'db.php';
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!---import css file-->
   <link href ="main.css" rel="stylesheet">
    <!--import bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <title>IT Invenntory</title>
</head>


<body class="bg-light">
  <div class="container ">
       <div class=" card">       
           <div class="card-header text-center" style="border: none;">
               <b>IT Invenntorys</b>
                <div id="search"  >
                    <form  method = "post" class="input-group mt-5 mb-3">
                     <input type="text" name="input_search" class="form-control" placeholder="Search data"  >
                        <button  name="btn_search" class="btn btn-success " type="button" id="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                         </svg>
                      </button>
                    </form>
                </div>
                </div>

               
<!--------------Table --------------------------------------------------------------------------->
 <table class="table">
  <thead class="table-dark"> 
    <tr>
      <th scope="col">Display name</th>
      <th scope="col">User Email</th>
      <th scope="col">Laptop</th>
      <th scope="col">Laptop Type</th>
      <th scope="col">Telphone</th>
      <th scope="col">Monitor screenl</th>
      <th scope="col">SIM Card</th>
      <th scope="col">Printer</th>
    </tr>
  </thead>

  <tbody class="table-group-divider">
  <?php 
                $sql = "SELECT * FROM `Data_Test`";
                $result = mysqli_query($con, $sql);
                if($result->num_rows > 0){
                    while($row = $result -> fetch_assoc()){
                        echo "<tr> <td>" .$row["Display name"].
                        "</td> <td>".$row["User Email"].
                        "</td> <td>".$row["Laptop"].
                        "</td> <td>".$row["Laptop Type"].
                        "</td> <td>".$row["Telphone"].
                        "</td> <td>".$row["Monitor screen"].
                        "</td> <td>".$row["SIM Card "]."</td> <td>" ;

                    } 
                }else{
                    echo 'No Results';
                }
               $con->close();
                
                ?>
  </tbody>
</table>
  </div>
          
</body>
</html>