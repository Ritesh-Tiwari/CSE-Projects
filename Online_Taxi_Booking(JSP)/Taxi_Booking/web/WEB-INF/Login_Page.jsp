<%-- 
    Document   : Login_Page
    Created on : Jun 21, 2019, 11:09:50 AM
    Author     : Admin
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>login page</title>
    </head>
    <body>
        <div class="box">
            <input type="Label" value="User ID"  Id="Text">
             <input type="TextBox" Placeholder="Enter User ID"  Id="TextBox">
             <input type="Label" value="Password"  Id="Text">
             <input type="TextBox" placeholder="Enter Password"  Id="TextBox">
             <input type="Label" value="Rights"  Id="Text">
             <input type="Radio" value="Administrator"  Id="Radio">
              <input type="Radio" value="User"  Id="Radio">
              <input type="Submit" value="Log in"  Id="btn">
              <input type="Submit" value="cancel"  Id="btn">
              <a href="#">Forgot Password</a>
              <a href="#">New Customer  Sing Up here</a>
        </div>
    </body>
</html>
