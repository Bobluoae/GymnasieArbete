const array = new Array();
let x = 0;
let y = 0;
$('#reset').hide();
$('#random').hide();
const skola = ["Coffee Lounge", "Elias Sushi", "Döner Kebab", "Le Croissant",
"Max", "Sjömanskyrkan", "Naked Juicebar", "Pizzabakeren", "Grab n Go", 
"Sakura Sushi", "Sofia Magdalena", "Subway", "Taco Bar", "Wayne's"];


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

    if(y > 0){
        document.getElementById('winner').innerHTML = "";
    }

    if (x >= 1){
	$('#reset').show();
    $('#random').show();
    $('#skola').hide();
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
    y = 0;
    $('#reset').hide();
    $('#random').hide();
    $('#skola').show();
    document.getElementById('restinput').value = "";
    document.getElementById('listArray').innerHTML = "";
    document.getElementById('winner').innerHTML = "";
}

function picker(){
    var item = array[Math.floor(Math.random()*array.length)];
    document.getElementById('winner').innerHTML = item;
}

function skolas(){
    if(x > 0){
        clearAll();
    }
    else{
        var skolLunch = skola[Math.floor(Math.random()*skola.length)];
        document.getElementById('winner').innerHTML = skolLunch;
        $('#reset').show();
        y++
    }
}


function saveToServer(){

    listname = prompt("Give your list a name!", "My List");

    const payload = {
        listname: listname,
        restaurants: array
    };

    requestObj = {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        credentials: 'same-origin',
        headers: {
          'Content-Type': 'application/json'
        },
        redirect: 'follow', 
        referrerPolicy: 'no-referrer',
        body: JSON.stringify(payload)
    }

    fetch('index.php?ajax=savelist', requestObj)
        .then(response => {
            if(response.ok) return response.json();
            throw new Error('something went wrong');
        }).then(data => {
            console.log(data);
            alert("Your list is saved!")
        }).catch((error) => {
            console.error('Error:', error);
            alert("Error: You need to be logged in to save a list!");
        });
}