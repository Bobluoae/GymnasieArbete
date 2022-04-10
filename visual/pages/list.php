<!--kod som visar vilka resturanger man har valt-->
  <div class="container">
    <div id="resturant-box">

     <h1 id="resturant-text">
        List
     </h1>
    <div id="map_list">
     <p id="winner"></p>
     <div id="list_edit">


    <!--   <button id="createlist" onclick="">Create List</button> -->
      <input placeholder="Type ur resturant here!" type="text" name="errorMessage" id="restinput">

       
       <button id="add" onclick="addToArray()">Add</button>
       
      <p id="listArray"></p>
     <button id="reset" onclick="clearAll()">clear list</button><br>
     <button id="save" onclick="saveToServer()">Save</button>
     </div>

     </div>
    </div>
  </div>