<%-- 
    Document   : Customer.jsp
    Created on : Jun 24, 2019, 11:05:43 AM
    Author     : Admin
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <%@page language="java" import="java.sql.*" %>
        <%

            try {
                Connection con = null;
                String url = "jdbc:mysql://localhost:3306/";
                String db = "ritesh";
                String driver = "com.mysql.jdbc.Driver";
                String username = "root";

                Class.forName(driver).newInstance();
                con = DriverManager.getConnection(url + db, username, "");
                Statement st;
                String id = request.getParameter("id");
                String name = request.getParameter("name");
                String Address = request.getParameter("addrss");
                String ph = request.getParameter("ph");
                String pann = request.getParameter("pan");
                String Aadh = request.getParameter("aadh");

                st = con.createStatement();
                if (!id.isEmpty()) {
                    try {
                        st.executeUpdate("INSERT INTO `customer`(`Cust_ID`, `Cust_Name`, `Cust_Address`, `Cust_Ph`, `Cust_Panno`, `Cust_Aadharno`)"
                                + "VALUES ('" + id + "','" + name + "','" + Address + "','" + ph + "','" + pann + "','" + Aadh + "')");
                    } catch (Exception e) {
                        out.print(e);
                    }

                }
            } catch (Exception e) {

            }
        %>
        <title>CUSTOMER INFROMATION</title>
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
        <form action="Customer.jsp" method="post">
            <div class="Menu">
                <center>
                    <ul>

                        <li><a href="Home_Page.jsp">HOME</a></li>    
                        <li><a href="Customer.jsp" style="color:red;" >CUSTOMER INFO</a></li>
                        <li><a href="Driver.jsp">DRIVER INFO</a></li>
                        <li><a href="Booking.jsp">BOOKING INFO</a></li>
                        <li><a href="Login_Page.jsp">LOG OUT</a></li>

                    </ul>
                </center>
            </div>

            <div class="btn">
                <ul>

                    <li style="color:red;"><a href="Home_Page.jsp" >Insert</a></li>    
                    <li><a href="#">Search</a></li>     
                    <li><a href="Customer.jsp">Update</a></li>
                    <li><a href="Driver.jsp">Delete</a></li>

                </ul>
            </div>

            <div class=" filed">
                <label>Name</label><br/>
                <textarea placeholder="Enter Name" name="name"></textarea><br/>
                <br/>         <label>Customer Id</label>
                <br/>   <textarea placeholder=" Enter Customer Id" name="id"></textarea>
                <br/>    <label>Customer Address</label>
                <br/>    <textarea placeholder="Enter Address" name="address"></textarea>
                <br/>   <label>Customer Ph No</label>
                <br/>  <textarea placeholder="Enter phone No" name="ph"></textarea>
                <br/>    <label>customer Pan No</label>
                <br/>   <textarea placeholder="Enter Pan No" name="pan"></textarea>
                <br/>   <label>Customer Aadhar No</label>
                <br/>   <textarea placeholder="Enter Aadhar No" name="aadh"></textarea><br/>
                <input type="Submit" value="Submit" id="submit">
            </div>
        </form>
    </body>
</html> 
