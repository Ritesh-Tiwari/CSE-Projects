<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page language="java" import="java.sql.*" %>
<%
    int f=0;
    try{
    Connection con=null;
   String url="jdbc:mysql://localhost:3306/";
   String db="ritesh";
  String driver="com.mysql.jdbc.Driver";
  String username="root";
  
  Class.forName(driver).newInstance();
  con=DriverManager.getConnection(url+db,username,"");
  Statement st;
  st=con.createStatement();
  String ID=request.getParameter("id");
  String Pass=request.getParameter("pass");
  ResultSet resultset=st.executeQuery("Select *from id_pass");
  
    while(resultset.next())
    {
        if(ID.equalsIgnoreCase(resultset.getString(4)))
        {
            if(Pass.equalsIgnoreCase(resultset.getString(5)))
            {
                out.print("Found");
                f=1;
                break;
             }
        }
    }
    if(f==0)
    {
        response.sendRedirect("Login_Page.jsp");
    }
    else
    {
        response.sendRedirect("Home_Page.jsp");
    }
    }
    catch(Exception e)
    {
        
    }
 %>
<html>
    <head>
        <title>Login page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background-color:coral;
            }
    .Login_Box{
     width: 300px;
    height: 400px;
    border-radius: 0px 0px 0px 0px;
    border-color: white;
    background-color: activecaption;
    margin-left: 600px;
    margin-top:50px
 
}
.Login_Box textArea{
    font-align:Center;
    background-color:transparent;
    height: 30px;
    width:200px;
    color: blue;
    border:none;
    outline: none;
    border-bottom: 2px solid gray;
    margin-bottom: 10px;
    font-size: 20px;
}
#pass{
      font-align:Center;
    background-color:transparent;
    height: 30px;
    width:200px;
    color: blue;
    border:none;
    outline: none;
    border-bottom: 2px solid gray;
    margin-bottom: 10px;
    font-size: 20px;
}
#btn{
    font-align:Center;
    background-color:mediumpurple;
    height: 30px;
    width:100px;
    color: #fff;
    border:none;
    border-radius: 20px 20px 20px 20px;
    outline: none;
    border-bottom: 2px solid gray;
    margin-bottom: 10px;
}
#btn:hover{
    background-color: tomato;
    
}
.Login_Box a{
    margin-left: 5px;
    color: blue;
    font-size: 18px;
    }
    .Login_Box a:hover{
        color:red;
    }
</style>
    </head>
    <body>
 
        <form action="Login_Page.jsp" method="POST" name="login">
        <div class="Login_Box">
            <br/><br/>
            <center><h3>Login Here </h3><br/>
            <textarea Placeholder="User ID"  Id="TextBox" name="id"></textarea><br/>
            <input type="password" name="pass" placeholder="Password" id="pass">
              <input type="Submit" value="Log in"  Id="btn">
              
  </center>
            <a href="forgot.jsp">Forgot Password</a><br/>
              <a href="SingUp.jsp">New Customer  Sing Up here</a>
            </div>
                
       </form>
        </Center>
    </body>
</html>
