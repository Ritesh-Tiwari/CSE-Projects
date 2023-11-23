<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Login_page.aspx.cs" Inherits="Login_page" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>log in page</title>
    <style>
   body
   {
       background-color:Silver;      
   }
   .Login
   {
       height:500px;
       width:400px;
       margin-left:500px;
       margin-top:100px;
       background-color:rgba(0,0,0,0.5);
       color:White;
       border-radius:70px 0px 70px 0px;
       border:3px solid #fff;
       padding-top:100px;
       position:absolute;
   }
    .text
    {
        font-size:20px;
        padding-left:30px;
        padding-top:50px;
        float:left;
        
    }
    .textBox
    {
        margin-top:80px;
        float:left;

    }
    #TextBox1
    {
        height:32px;
        width:250px;
        background-color:transparent;
        border-radius:15px 0px 15px 0px;
       border:2px solid #fff;
       margin-bottom10px;

    }
    #TextBox2
    {
        height:32px;
        width:100%;
        background-color:transparent;
       border-radius:15px 0px 15px 0px;
       border:2px solid #fff;
       
       
    }
    #Button1
    {
        width:100%;
        height:40px;
        background-color:Tomato;
       border-radius:40px 40px 40px 40px;
       border:2px solid #fff;
    }
    #Button2
    {
        width:100%;
        height:40px;
        background-color:Tomato;
       border-radius:40px 40px 40px 40px;
       border:2px solid #fff;
    }
    #HyperLink1
    {
        
    }
    
    </style>
</head>
<body>
    <form id="form1" runat="server">
    
    
        <div class="Login">
        <div class="text" >
            <asp:Label ID="Label2" runat="server" Text="User ID"></asp:Label>
            <br /><br /><br />
            <asp:Label ID="Label3" runat="server" Text="Password"></asp:Label>
        </div>
        <div class="textBox">
            <asp:TextBox ID="TextBox1" runat="server"></asp:TextBox>
            <br /><br /><br />
            <asp:TextBox ID="TextBox2" runat="server" TextMode="Password"></asp:TextBox>
        
            <br /><br />
            <br />
            <asp:RadioButton ID="RadioButton1" runat="server" Text="Admin" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <asp:RadioButton ID="RadioButton2" runat="server" Text="Student" />
            <br />
        <br />
            <asp:Button ID="Button1" runat="server" Text="log in" onclick="Button1_Click" />
            <br /><br />
            <asp:Button ID="Button2" runat="server" Text="cancel" />
            
            <br /><br />
            <div>
            <br />
            <asp:HyperLink ID="HyperLink1" runat="server" NavigateUrl="~/Forgot_password.aspx">Forgot Password</asp:HyperLink>
            <br /><br />
            <asp:Label ID="msg" runat="server" Text=""></asp:Label>
            </div>
        </div>
   

    </form>
</body>
</html>
