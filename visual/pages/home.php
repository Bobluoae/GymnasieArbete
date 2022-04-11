<!--kod som visar vilka resturanger man har valt-->
<div class="container">
  <div id="resturant-box">
    <h1 id="resturant-text">
    Pick and randomize
    </h1>
    <div id="map_list">
      <strong id="winner"></strong>
      <div id="list_edit">
        <?php   
        if (isset($_SESSION["isLoggedIn"]) == true) {
          $query = $conn->prepare("SELECT * FROM lists WHERE user_id = ?");
          $query->bindParam('1', $_SESSION["user_id"], PDO::PARAM_INT);
          $query->execute();
          ?>
          <form method="GET">
            <select name="list_id" id="list_id"> 
            <?php
            $temp = 0;
            while($list = $query->fetch(PDO::FETCH_OBJ)) {
              $temp++;
              ?>
              <option value="<?php echo $list->id; ?>"<?=(isset($_GET["list_id"]) == $list->id ? "selected":"")?>>
                <?php echo $temp . " | ". $list->list_name; ?>
              </option>
            <?php
            }?>
            </select>
            <input type="submit" value="Choose list">
          </form>   
        <?php
        $arr = [];
        }
        if (isset($_GET["list_id"])) {
          $query = $conn->prepare("SELECT * FROM list_items WHERE list_id = ?");
          $query->bindParam('1', $_GET["list_id"], PDO::PARAM_INT);
          $query->execute();
          
          while($rest = $query->fetch(PDO::FETCH_OBJ)) {
            $arr[] .= $rest->rest_name;
          }?>
          <button id="random" onclick="picker()">Randomize</button><br>
         <?php
        }?>
        <button id="skola" onclick="skolas()">skola</button><br>
        <p id="listArray"></p>
      </div>
      <div id="list_edit">
        <?php 
          if (isset($_GET["list_id"])) {
            $query = $conn->prepare("SELECT * FROM lists WHERE id = ?");
            $query->bindParam('1', $_GET["list_id"], PDO::PARAM_INT);
            $query->execute();
            $name = $query->fetch(PDO::FETCH_OBJ);
            ?>
          <h2>YOUR LIST</h2>
          <p>List name: <?php echo $name->list_name; ?></p>
          <?php 
            foreach ($arr as $value) {
              echo $value . "<br>";
            }
          }?>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function picker(){
    const arr = <?php echo json_encode($arr); ?>;
    var item = arr[Math.floor(Math.random()*arr.length)];
    document.getElementById('winner').innerHTML = item;
  }
</script>