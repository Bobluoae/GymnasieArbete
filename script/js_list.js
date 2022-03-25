<script>
const array = new Array();
let x = 0;
$('#reset').hide();
var display = "";


var arrayInput = document.getElementById('restinput');
function addToArray() {
    var p = document.getElementById('restinput').value;
    if (p == "") {
        document.getElementById('error').innerHTML = "Make sure to put in a restaurant!"
        return false;
    } else {
    var temp = document.getElementById('restinput').value;
    array.push(temp);
    x++;
    document.getElementById('restinput').value = "";
    }

    if (x >= 1){
	$('#reset').show();
	document.getElementById('error').innerHTML = "";
	display += array;
    display += "<br>";
	}
document.getElementById("listArray").innerHTML =  display;
}


function clearAll()
{
    array.length = 0;
    x = 0;
    $('#reset').hide();
    display = "";
    document.getElementById('restinput').value = "";
    document.getElementById('listArray').innerHTML = "";
}


</script>