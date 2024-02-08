<?php include('includes/config.php');
include('includes/header.php');

?>

<div class="card-body">
<h4 class="card-title">News Update </h4>
<form method="POST">
    <div class="form-group">
     <label for="simpleinput">News Text 1</label>
     <input type="text" id="simpleinput"  class="form-control" name="newsUpdate1"  placeholder="Enter your News text">
     </div>
     <div class="form-group">
     <label for="simpleinput">News Text 2</label>
     <input type="text" id="simpleinput" class="form-control" name="newsUpdate2" placeholder="Enter your News text">
     </div>
     <div class="form-group">
     <label for="simpleinput">News Text 3</label>
     <input type="text" id="simpleinput" class="form-control" name="newsUpdate3" placeholder="Enter your News text">
</div>
<div class="form-group">
    <label for="simpleinput">News Text 4</label>
     <input type="text" id="simpleinput" class="form-control" name="newsUpdate4" placeholder="Enter your News text">
 </div>
 <div class="form-group">
     <label for="simpleinput">News Text 5</label>
     <input type="text" id="simpleinput" class="form-control" name="newsUpdate5" placeholder="Enter your News text">
</div>
 <div class="form-group">
         <label for="simpleinput">News Text 6</label>
     <input type="text" id="simpleinput" class="form-control" name="newsUpdate6" placeholder="Enter your News text">
    </div>
     <div class="form-group">
          <label for="simpleinput">News Text 7</label>
          <input type="text" id="simpleinput" class="form-control" name="newsUpdate7" placeholder="Enter your News text">
     </div>
     <div class="form-group">
         <label for="simpleinput">News Text 8</label>
         <input type="text" id="simpleinput" class="form-control" name="newsUpdate8" placeholder="Enter your News text">
     </div>
     <div class="form-group">
         <label for="simpleinput">News Text 9</label>
         <input type="text" id="simpleinput" class="form-control" name="newsUpdate9" placeholder="Enter your News text">
     </div>
     <div class="form-group">
         <label for="simpleinput">News Text 10</label>
         <input type="text" id="simpleinput" class="form-control" name="newsUpdate10" placeholder="Enter your News text">
     </div>
     <div class="form-group">
         <label for="simpleinput">News Text 11</label>
         <input type="text" id="simpleinput" class="form-control" name="newsUpdate11" placeholder="Enter your News text">
     </div>
     <div class="form-group">
         <label for="simpleinput">News Text 12</label>
         <input type="text" id="simpleinput" class="form-control" name="newsUpdate12" placeholder="Enter your News text">
    </div>
  

    <div class="form-group">
         <button class="btn btn-primary" name="submit"> submit</button>
    </div>                              
 </form>
</div>
<?php
 if(isset($_POST['submit'])){
    $news_upload_1 =$_POST['newsUpdate1'];
    $news_upload_2 =$_POST['newsUpdate2'];
    $news_upload_3 =$_POST['newsUpdate3'];
    $news_upload_4 =$_POST['newsUpdate4'];
    $news_upload_5 =$_POST['newsUpdate5'];
    $news_upload_6 =$_POST['newsUpdate6'];
    $news_upload_7 =$_POST['newsUpdate7'];
    $news_upload_8 =$_POST['newsUpdate8'];
    $news_upload_9 =$_POST['newsUpdate9'];
    $news_upload_10 =$_POST['newsUpdate10'];
    $news_upload_11 =$_POST['newsUpdate11'];
    $news_upload_12 =$_POST['newsUpdate12'];
   

    $query = "INSERT INTO `news_table`( `news_1`, `news_2`,`news_3`,`news_4`,`news_5`,`news_6`,`news_7`,`news_8`,`news_9`,`news_10`,`news_11`,`news_12`) VALUES (' $news_upload_1',' $news_upload_2',' $news_upload_3',' $news_upload_4',' $news_upload_5',' $news_upload_6',' $news_upload_7',' $news_upload_8',' $news_upload_9',' $news_upload_10',' $news_upload_11',' $news_upload_12')";
    if(mysqli_query($conn,$query))
    {
      echo"<script>alert('successful');</script>";
    }
    else{
        echo "error".mysqli_error($conn);
    }

    $conn->close();






    
 }





?>

                                