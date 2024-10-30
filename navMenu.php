
<?php
header("Content-Type: text/css");

?>
* {
    box-sizing: border-box;
}
nav{
    width: 60%;
    position: relative;
    left: 20%;
}

.nav-menu {
list-style-type:none;
margin: 0;
padding: 0;
overflow: hidden;

border-radius: 1%;


}

.nav-menu li {
  
    float: left;
    position:static;
   left: 2%;
   margin-left: 2%;
   margin-right: 0.3%;
   
    text-align: center;
    display: block;
    align-items: center; /* Dikey hizalama ekledik */
    z-index:1;
    font-style: italic;    
}


.nav-menu li a {
    display: flex;
    align-items: center;
    color: orange;
    text-decoration: none;
    padding: 14px 16px;
    margin-left: 5px;
   font-weight:550;
}
.nav-menu li a:hover{

text-shadow: 15px 15px 15px black;
}


.nav-menu li:hover .sub-menu {
    display:flex;
    color: white;
}

.sub-menu {
    display: none;
    position:absolute;
  color: white;
 
 
   float:left;
    z-index: 1;
}

.sub-menu li {
    width:max-content;
    height: max-content;
   width: max-content;
    font-size: large;
    display:inline-table;
    text-align:center;
    position: static;
   background-color: orange;
  
}

.sub-menu li a {
 color: white;
    text-decoration: none;
    display: block;
}



.sub-menu li a:before {
font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
content: "\f105";
margin-right: 5px;
display: none; /* Add this line to hide the icon */
}


.sub-menu li a:hover{

    font-weight: 0;
}



.menu {
    display: none;
    position:absolute;
    

    z-index: 1;
}

.menu li {
    background-color: orange;
    color: white;
    display:table-footer-group;
 font-size: medium;
}

.menu li a {
    
   
    text-decoration: none;
    display:grid;
    text-align: center;
}

.menu li a:hover {
    font-weight: 0;
display:block;
}

.menu li .sub-menu li a:hover {
   display: flex;
    
}

.nav-menu li:hover .sub-menu li:hover .menu {
    margin-top: 0.5%;
    display:flex;
   
}
/*   li içindeki li beyaz oluyor onu düzlet */