<%-- 
    Document   : Home_Page
    Created on : Jun 21, 2019, 11:51:55 AM
    Author     : Admin
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Taxi Booking</title>
        <style>
            body{
                background-color: indigo;
            }
            .Menu{
                margin-left: 350px;
                margin-right: 30px;
                margin-top: 10px;
                width: 800px;
                height: 50px;
                background-color: rgba(0,0,0,0.5);
                color:white;
               
            }
            .Menu ul li{
                 display: inline-block;
                font-size: 18px;
                line-height: 50px;
                list-style: none;
                font-style: bold;
                margin-left: 20px;
              
            }
            .Menu a{
                  color: white;
            }
            .Menu a:hover{
                background-color: white;
                color:red;
                padding:10px 10px 10px 10px ;
            }
        </style>
    </head>
    <body>
        <div class="Menu">
               <center>
            <ul>
  
                <li><a href="Home_Page.jsp">HOME</a></li>    
                <li><a href="Customer.jsp">CUSTOMER INFO</a></li>
                <li><a href="Driver.jsp">DRIVER INFO</a></li>
                <li><a href="Booking.jsp">BOOKING INFO</a></li>
                <li><a href="Login_Page.jsp">LOG OUT</a></li>
             
            </ul>
                                 </center>
         </div>
         
    </body>
</html>
