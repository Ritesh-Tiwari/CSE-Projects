﻿<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Home.aspx.cs" Inherits="Home" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Home_Page</title>
    <style>
      .Background
      {
          background-image:url(image/bgimage.jpg);
          background-size:100% 110%;
          background-position:100% 100%;
          height:100vh;
          width:100%;
      }  
    .Menu
    {
        background-color:rgba(0,0,0,0.5);
        color:White;
        height:60px;
        width:100%;
        
        
    }
    .leftmenu
    {
        width:35%;
        line-height:60px;
        padding-left:50px;
        font-size:20px;
        font-weight:bold;
        float:left;
    }
    
    .rightmenu
    {
       width:60%;
        line-height:60px;
        padding-left:500px;
        font-size:20px;
        font-weight:bold;
       
    }
    #HyperLink1
    {
        margin-left:300px;
    }
    #HyperLink2
    {
        margin-left:20px;
    }#HyperLink3
    {
        margin-left:20px;
    }#HyperLink4
    {
        margin-left:20px;
    }
    #HyperLink5
    {
        margin-left:20px;
    }
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <div class="Background">
        <div class="Menu">
             <div class="leftmenu">
    
                <asp:Label ID="Label1" runat="server" Text="SCHOLL MANAGAMENT SYSTEM"></asp:Label>
             </div >
              <div class="rightmenu">
                  <asp:HyperLink ID="HyperLink1" runat="server" ForeColor="red" 
            NavigateUrl="~/Home.aspx">Home</asp:HyperLink>
                 <asp:HyperLink ID="HyperLink2" runat="server" ForeColor="White" 
            NavigateUrl="~/Student.aspx">Student</asp:HyperLink>
                 <asp:HyperLink ID="HyperLink3" runat="server" ForeColor="White" 
            NavigateUrl="~/Admin.aspx">Admin</asp:HyperLink>
                  <asp:HyperLink ID="HyperLink5" runat="server" NavigateUrl="~/Installment.aspx"  ForeColor="White" >Installmet</asp:HyperLink>
                <asp:HyperLink ID="HyperLink4" runat="server" ForeColor="White" 
            NavigateUrl="~/Login_page.aspx">Logout</asp:HyperLink>
    </div>
        
    </div>
    </div>

    </form>
</body>
</html>