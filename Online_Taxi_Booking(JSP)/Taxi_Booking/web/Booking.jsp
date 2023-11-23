<%-- 
    Document   : Booking
    Created on : Jun 24, 2019, 11:06:29 AM
    Author     : Admin
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page language="java" import="java.sql.*" %>
<%
   
    try{
        int a=0;
    Connection con=null;
   String url="jdbc:mysql://localhost:3306/";
   String db="ritesh";
  String driver="com.mysql.jdbc.Driver";
  String username="root";
  
  Class.forName(driver).newInstance();
  con=DriverManager.getConnection(url+db,username,"");
 Statement st;
 st=con.createStatement();
  String c_id=request.getParameter("c_id");
  String d_id=request.getParameter("d_id");
  String start=request.getParameter("start");
  String end=request.getParameter("end");
  String km=request.getParameter("km");
  String amount=request.getParameter("amount");

   if(!c_id.isEmpty())
  {
      try
      {
  st.executeUpdate("INSERT INTO `booking`(`Cust_ID`, `Driver_ID`, `Source`, `Destination`, `KM`, `Total_Amount`)"+
          "VALUES ('"+c_id+"','"+d_id+"','"+start+"','"+end+"','"+km +"','"+amount+"')");
  a=1;
      }
      catch(Exception e)
      {
          out.print(e);
      }
  
    }
    }
  catch(Exception e)
          {
          
          }
  %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Booking Infro</title>
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
            .filed{
               margin-left: 500px;
               margin-right: 700px;
               margin-top: 50px;
               color: white;
               font-size: 18px;
               background-color: rgba(0,0,0,0.1);
            }
           .filed textArea{
               margin-left:80px;
             font-align:Center;
              background-color:transparent;
                 height: 30px;
            width:200px;
            color:white;
            border:none;
            outline: none;
            border-bottom: 2px solid gray;
            margin-bottom: 10px;
            font-size: 20px;
}
.filed button{
       margin-left:80px;
             font-align:Center;
             background-color:mediumpurple;
                 height: 30px;
            width:200px;
            color: #fff;
           border-radius: 20px 20px 20px 20px;
            margin-bottom: 10px;
            font-size: 20px;
}
.filed button:hover{
    background-color: tomato;
    
}
.btn{
    float: left;
    margin-top:100px;
    width: 150px;
    height: 300px;
    background-color: rgba(0,0,0,0.5);
    
    }
    .btn a{
        color:white;
    font-size: 20px;
    font-weight: bold;
    }
.btn ul li{
                
                font-size: 18px;
                line-height: 50px;
                list-style: none;
                font-style: bold;
                margin-left: 10px;
              color:white;
              font-size: 18px;
           
}
#submit{
    color:tomato;
    background-color:snow;
    border-radius: 20px 20px 20px 20px;
     margin-left:80px;
    font-align:Center;
    height: 50px;
    width:200px;
}
#submit:hover{
    background-color: red;
    color: white;
}
        </style>
   
    </head>
    <body>
        <form method="post" action="Booking.jsp" name="form">
        <div class="Menu">
            <ul>
                <li><a href="Home_Page.jsp">HOME</a></li>    
                <li><a href="Customer.jsp">CUSTOMER INFO</a></li>
                <li><a href="Driver.jsp">DRIVER INFO</a></li>
                <li><a href="Booking.jsp" style="color:red;">BOOKING INFO</a></li>
                <li><a href="Login_Page.jsp">LOG OUT</a></li>
            </ul>
         </div>
          <div class="btn">
            <ul>
  
                <li ><a href="#" style="color:red;">Insert</a></li>    
                   <li><a href="#">Search</a></li>     
                <li><a href="#">Update</a></li>
                <li><a href="#">Delete</a></li>
                    
            </ul>
        </div>
        <div class ="filed">
            
            
            <label>Customer ID</label><br>
                  <textarea placeholder="Enter ID" name="c_id"></textarea><br/>
                  <label>Driver ID</label><br>
                <textarea placeholder="Enter ID" name="d_id"></textarea><br/>
                <label>Source</label><br>
                <textarea placeholder="Enter Source" name="start"></textarea><br/>
                <label>Destination</label><br>
                <textarea placeholder="Enter Destination" name="end"></textarea><br/>
                <label>km</label><br>
                <textarea placeholder="Enter km" oninput="f();" name="km"></textarea><br/>
                <label>Total Amount</label><br>
                <textarea placeholder="Amount" name="amount"></textarea><br/>
             <input type="Submit" value="Submit" id="submit">
             <script>
                 function f() {
                     var a=document.form.km.value();
                     var c=a*50;
                     document.form.amount.value=c;
                 }
             </script>
        </div>
        </form>
    </body>
</html>
