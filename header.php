

<?php
header("Content-Type: text/css");

?>
header {
    position: relative;
     overflow: hidden; /* Float'ı temizle */
     width: 60%;
     left: 20%;
 }
 header ul {
     margin: 0;
     padding: 0;
     list-style: none;
 }



.search{
    
    width: max-content;
    display: flex;
    align-items: center;
    padding: 10px;
    border-radius: 28px;
    background-color: orange;
    position: relative;
    left:10px;
    width: 500px;
color: white;
top: 5px;
left: 50px;
}

.Favoriler img{

    width: 2%;
    height: 1%;
    margin-right: 0.5%;
}

.Favoriler ul li a{
    color: orange;
    text-decoration: none;
}
.Favoriler{
    position: relative;
    
}


.search-input{
    width:490px;
    font-size: 16px;
    font-family: 'Lexend' , sans-serif ;
    color: white;
    margin-left: 14px;
outline: none;
border: none;
background: transparent;


}

.butonArama{
    outline: none;
    border: none;
    width: max-content;
    background-color: white;
    color: black;
    object-fit: cover;
    height: 30px;
    width: 40px;
    border-radius: 50%;
    border: 2px solid white;
position: relative;

}


.GirisYap{
    position: relative;
    top: 15px;
    right: 5%;
    
}



 
 .search-bar {
     float: left; /* Arama çubuğu ve düğme yan yana olsun */
     margin: 10px;
     margin-left: 12%;
     
 }
 .search-bar input {
     padding: 5px;
    
 }
 h1{
     text-align: center;
     float:left;
     margin-left: 20px;
     color: orange;
     
     
 }
 .GirisYap ul {
    float: left;
    position: relative;
    left:800px;
    font-size: larger;
    top:20px;
    color:orange;
     display:flex; 
    list-style-type:none;

    }

  .GirisYap ul li {
    margin-left: 10px;

    
  }
  .GirisYap ul li a{
    color:orange;
    font-weight: 600;
    text-decoration: none;
   
    
  }
  .GirisYap ul li a:hover{
    color:darkorange;
    text-shadow: 15px 15px 15px black;
  }

  .GirisYap ul li .dropdown-content{
    display: none;
            position: absolute;
            background-color: #7e7e7e;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index:3;
            
  }

  .GirisYap ul li .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: grid;
            text-align: left;
            position:relative;
            z-index:3;
        }



        .GirisYap ul li .dropdown-content a:hover {
            background-color: orange;
        
        }
        .GirisYap ul li:hover .dropdown-content {
            display: block;
           
           
        }

