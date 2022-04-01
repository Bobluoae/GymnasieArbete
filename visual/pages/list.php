<!--kod som visar vilka resturanger man har valt-->
<section id="showcase">
  <div class="container">
    <div id="resturant-box">

     <h1 id="resturant-text">
      Edit your list
     </h1>

    <div id="map_list">
     <div id="map_edit">Map</div>
     
     <div id="list_edit">
      <input placeholder="Type ur resturant here!" type="text" name="errorMessage" id="restinput">
       <button id="add" onclick="addToArray()">Add</button>
       <button id="skola" onclick="skolas()">skola</button>
      <p id="listArray"></p>
     <button id="reset" onclick="clearAll()">clear list</button>
     </div>

     </div>
    </div>
  </div>
</section>

<script 
type="text/javascript"
src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
<script 
type="text/javascript"
src="script/js_list.js">
</script>