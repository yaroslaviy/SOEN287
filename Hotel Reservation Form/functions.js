function DisplayTime(){
    setInterval( function setTime(){
        var d = new Date();
        document.getElementById('time').innerHTML = d;
    }, 100);
}

function PrivacyAlert(){
    alert("Our website is not responsible for any incorrect information provided. Your personal data will not be sold or reused.")
}

function PictureList(){
    var list = document.getElementById('hide');
    if(list.hidden == true)
        list.hidden = false;
    else
        list.hidden = true;
}
function ExpertSuggestion() {

    var field = document.getElementById('ExpSug');
    var clean = document.getElementById('clean');
    if(clean != null)
        field.removeChild(clean);
    var loc = document.getElementsByName('location')[0];
    var price = document.getElementsByName('price')[0];
    var child = document.createElement('DIV');
    child.id = 'clean';
    child.innerHTML = "It is very difficult to find a hotel room in this price range at Downtown";
    if(price.selectedIndex == 1 && loc.checked ){
        field.style.visibility='visible';
        field.appendChild(child);
    } else {
        field.style.visibility='hidden';
    }
}
function SearchActivate(){
    var rooms = isNaN(document.getElementsByName('NumOfRooms')[0].value);
    var location  = !document.getElementsByName('location[]')[0].checked && !document.getElementsByName('location[]')[1].checked &&
        !document.getElementsByName('location[]')[2].checked && !document.getElementsByName('location[]')[3].checked &&
        !document.getElementsByName('location[]')[4].checked && !document.getElementsByName('location[]')[5].checked;
    if (rooms || location)
        document.getElementsByName('Search')[0].disabled = true;
    else
        document.getElementsByName('Search')[0].disabled = false;
}
function Validate(){
    var login = document.getElementsByName('username')[0].value;
    var pass = document.getElementsByName('password')[0].value;
    var reg1 = new RegExp('^([a-zA-Z]|[0-9])*$');
    var reg2 = new RegExp('^(?=.*?[a-zA-Z])(?=.*?[0-9])[a-zA-Z0-9]{6,}$');
    if (!reg1.test(login)) {

        document.getElementsByName('register')[0].disabled = true;
        document.getElementById('loginvalidate').src = "x.png";
    } else {
        document.getElementById('loginvalidate').src = "check.png";
    if(!reg2.test(pass)){
        document.getElementsByName('register')[0].disabled = true;
        document.getElementById('passvalidate').src = "x.png";
    } else {
        document.getElementsByName('register')[0].disabled = false;
        document.getElementById('passvalidate').src = "check.png";}
    }

}