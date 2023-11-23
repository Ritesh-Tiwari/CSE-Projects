<%-- 
    Document   : SingUp
    Created on : Jun 24, 2019, 11:07:24 AM
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
  String name=request.getParameter("name");
  String address=request.getParameter("Address");
  String no=request.getParameter("no");
  String Id=request.getParameter("EmailID");
  String pass=request.getParameter("pass");
  
   if(!name.isEmpty())
  {
      try
      {
  st.executeUpdate("INSERT INTO `id_pass`(`Name`, `Address`, `Phone_No`, `Email_ID`, `Password`)"+
          "VALUES ('"+name+"','"+address+"','"+no+"','"+Id+"','"+pass +"')");
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
        <title>Forgot Your Password</title>
        <style>
             body{
                background-color:coral;
            }
             .filed{
               margin-left: 500px;
               margin-right: 700px;
               margin-top: 50px;
               color: white;
               font-size: 18px;
               background-color: rgba(0,0,0,0.5);
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
            border-bottom: 2px solid tomato;
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
#btn{
    color:tomato;
    background-color:snow;
    border-radius: 20px 20px 20px 20px;
     margin-left:80px;
    font-align:Center;
    height: 50px;
    width:200px;
}
#btn:hover{
    background-color: red;
    color: white;
}
 #a{
     background-color: red;
    color: white;
    border-radius: 20px 20px 20px 20px;
  
    
}
        </style>
    </head>
    <body>
        <form method="post" action="SingUp.jsp">
        <div class="filed">
            <br/><br/>
            <h2><center>Sing up Here</center><br/>
            
            <label id="id">Name</label> <br/>
            <textarea Placeholder="Enter Name"  Id="TextBox1" name="name"></textarea><br/>
             <label>Address</label><br/>
             <textarea placeholder="Enter Address"  Id="TextBox" name="Address"></textarea><br/>
             <label>Phone No</label><br>
            <textarea Placeholder="Enter Phone No"  Id="TextBox1" name="no"></textarea><br/>
             <label>Email ID</label><br/>
             <textarea placeholder="Enter Email ID"  Id="TextBox" name="EmailID"></textarea><br/>
             <label>Set Password</label><br>
           <textarea placeholder="Enter Password"  Id="TextBox" name="pass"></textarea><br/>
              <input type="Submit" value="Submit"  Id="btn"><br/>
              <center> <a href="Login_Page.jsp" id="a">back</a></center>
        </div>
                </form>
    </body>

</html>
