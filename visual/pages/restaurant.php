<!--kod som visar vilka resturanger man har valt-->
<section id="showcase">
  <div class="container">
    <div id="center">
     <h1>
      Edit Restaurants
     </h1>
    </div>

    <div id="map_list">
     <div id="map_edit">Map</div>

     <div id="list_edit">
      <input type="text" id="restinput">
       <button id="add" onclick="addToArray()">Add</button>
      <p id="listArray"></p>
     <button id="reset" onclick="clearAll()">clear list</button>
     </div>
     
     <p id="error"></p>

    </div>
  </div>
</section>

<script 
type="text/javascript"
src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>