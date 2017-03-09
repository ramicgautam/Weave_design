var menuIcon = new Marka('#menu-toggle');
var width = $( window ).width();
var counter;
menuIcon.set('bars').color('#333').size(30);

function setCross() {
    menuIcon.set('times');
}
function setBar() {
    menuIcon.set('bars');
}
function iconChanger(width){
    if(width>=768){
        //menu is open
        setCross();
    }else{
        //menu is close
        setBar();
    }
}

iconChanger(width);
//menu click event
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    if(!$("#wrapper").hasClass('toggled')){
        $("#wrapper").addClass("toggled");
        setBar();
    }else{
        $("#wrapper").removeClass("toggled");
        setCross();
    }
});
$( window ).resize(function(){
    var width = $( window ).width();
    iconChanger(width);
});

//for subMenu
$('.sidebar-nav li a').click(function(){
    $(this).animate({background: 'red'},200);
    $(this).parent().children('ul').slideToggle();
});



$('.user').click(function(){
    $('#userAction').toggleClass('hide');
});

function searchUser () {
    
    var searchTerm = $('#searchUser').val();
    if(searchTerm==""){
        $('#userTable').show();
    }else{
        $('#userTable').hide();
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                if(xmlhttp.responseText !=""){
                    $('#searchOutput').html(xmlhttp.responseText);
                }else{
                    var output = "<p class='alert alert-warning'>Sorry, no user were found named <span class='badge'>"+searchTerm+"</span></p>";
                    $('#searchOutput').html(output);
                }
            }
        }
        xmlhttp.open("GET","../asset/findUser.php?username="+searchTerm,true);
        xmlhttp.send();
    }
    console.log(searchTerm);
}