<script>
const array = new Array();
let x = 0;
$('#reset').hide();
var display = "";


var arrayInput = document.getElementById('restinput');
function addToArray() {
    var p = document.getElementById('restinput').value;
    if (p == "") {
        $('input:text').attr('placeholder','Make sure to give resturant!');
        $('input').addClass('error2');
        return false;
    } else {
    var temp = document.getElementById('restinput').value;
    array.push(temp);
    x++;
    document.getElementById('restinput').value = "";
    }

    if (x >= 1){
	$('#reset').show();
	$('input:text').attr('placeholder','Type ur resturant here!');
    $('input').removeClass('error2');
	}

    let finalArray  = array.join('<br>');

document.getElementById("listArray").innerHTML =  finalArray;
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