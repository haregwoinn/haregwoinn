<?php
include "./header.php";
$conn = mysqli_connect('localhost:3308','root','','advertisment');
$sql = "SELECT * FROM hotel_infon order by ID";
$res = mysqli_query($conn, $sql);

$rowcount = mysqli_num_rows($res);

?>


<div class="row">
<?php while($row =mysqli_fetch_assoc($res)){
  ?>
<div class="col-md-3">

      <div class="card" style="width: 18rem;">
      
      <?php
        $id = $row['ID'];
        $image = $row["L_FILE"];
        $star= $row["H_LEVEL"];
        echo "<img src='$image'>";
        ?>
        <div class="card-body">
          <?php
    switch($star){
    case 1:
      echo "<span class='material-symbols-outlined'>
      star
      </span>";
      break;
     case 2:
        echo "<span class='material-symbols-outlined'>
        star
        </span>
        <span class='material-symbols-outlined'>
        star
        </span>";
        case 3:
          echo "<span class='material-symbols-outlined'>
          star
          </span>
          <span class='material-symbols-outlined'>
          star
          </span>
          <span class='material-symbols-outlined'>
          star
          </span>";
          break;
          case 4:
            echo "<span class='material-symbols-outlined'>
            star
            </span>
            <span class='material-symbols-outlined'>
            star
            </span>
            <span class='material-symbols-outlined'>
            star
            </span>
            <span class='material-symbols-outlined'>
            star
            </span>";
            break;
            case 5:
              echo "<span class='material-symbols-outlined'>
              star
              </span>
              <span class='material-symbols-outlined'>
              star
              </span>
              <span class='material-symbols-outlined'>
              star
              </span>
              <span class='material-symbols-outlined'>
              star
              </span>
              <span class='material-symbols-outlined'>
              star
              </span>";
              break;
    }
    ?>
          <p id="topic" class="card-text"> 
          <?php     
        // $row =mysqli_fetch_assoc($res);
          echo $row['N_HOTEL'].
        "</p>
          <p class='card-text'>"
          .$row['COUNTRY']. " ,".$row['RIGION'] . " ,". $row['CITY'].
      "</p>
      
          <a href='./more.PHP?conpair=$id '><button type='button' class='btn btn-light'>see more</button></a>
        </div>
      </div>
      
</div>"
?>
<?php
}
echo"</div>";


    include "footer.php";
    ?>
  