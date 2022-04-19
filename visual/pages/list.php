<!--kod som visar vilka resturanger man har valt-->
<div class="container">
  <div id="resturant-box">
   <h1 id="resturant-text">
      List
   </h1>
    <div id="map_list">
      <div id="list_edit">
        <input placeholder="Type ur resturant here!" type="text" name="errorMessage" id="restinput">
        <button class="button" id="add" onclick="addToArray()">Add</button>
        <button class="button" id="save" onclick="saveToServer()">Save</button>
        <p id="listArray"></p>
        <button class="button" id="reset" onclick="clearAll()">clear list</button><br>
      </div>
    </div>
  </div>
</div>