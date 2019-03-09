<html>
<head><title>Jawaban Soal No 7 Test Bootcamp Arkademy</title>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel='stylesheet' type='text/css' href='style.css'>
    </head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light">
      <div class="container">
	  <form class="form-inline" method="POST" action="addcategory.php">
    <table>
	<tr><td>
	<div class="form-group">
    Add Category Name: <input type="text" name="category" value="" /></td>
	 <td><button type="submit" name="submit" class="btn btn-primary">Add Category</button></td></tr></table>
    </div>
	</form>
    
    </nav>
    <br>
 
      <div class="row">
        <div class="col-md-12">
          <center><table class="zebra-table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th >Category_Name</th>
                  <th >Products</th> 
                
                </tr>
              </thead>
              <tbody>
		<?php
			include"koneksi.php";
		    $query = "SELECT categories.id,categories.name as category_name,GROUP_CONCAT(products.name) products 
			from categories LEFT outer join products on( categories.id=products.category_id ) 
			group by products.category_id order by id ASC"; // Query untuk menampilkan semua data 
           $result = mysqli_query($koneksi,$query);
           if($result){
            $posts = array();
                 if(mysqli_num_rows($result))
                 {
                        while($post = mysqli_fetch_assoc($result)){
                                $posts[] = $post;
                        }
                 }  
                 $data = json_encode(array('results'=>$posts));
                                    
           }
           
                if(json_decode($data,true)){
                    $obj = json_decode($data);
                    foreach($obj->results as $item){
                ?>
                <tr>
                  <td><?php echo $item->id; ?></td>
                  <td><?php echo $item->category_name; ?></td>
                  <td><?php echo $item->products; ?></td>
                  <?php
                  }
           }
       ?>
	  
</tbody>   
</table></center>
        </div>
      </div>
    </div>
	</div>
  </div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>                     
