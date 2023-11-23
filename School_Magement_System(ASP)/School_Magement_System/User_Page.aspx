<%@ Page Language="C#" AutoEventWireup="true" CodeFile="User_Page.aspx.cs" Inherits="User_Page" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>User page</title>
    <style>
     .Background
      {
          background-image:url(image/bgimage.jpg);
          background-size:100% 110%;
          background-position:100% 100%;
          height:110vh;
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
       width:75%;
        line-height:60px;
        padding-left:500px;
        font-size:20px;
        font-weight:bold;
       
    }
    #HyperLink1
    {
        margin-left:650px;
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
      .form
    {
       
       height:600px;
       width:550px;
       margin-left:450px;
       margin-top:10px;
       background-color:rgba(0,0,0,0.5);
       color:White;
       border-radius:70px 70px 70px 70px;
       border:3px solid #fff;
       padding-top:100px;
       position:absolute;
    }
   
    .text
    {
        margin-left:50px;
       float:left;
       font-size:22px;
    }
    .textBox
    {
    margin-left:30px;
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
        width:250px;
        background-color:transparent;
       border-radius:15px 0px 15px 0px;
       border:2px solid #fff;
          
    }
     #TextBox3
    {
        height:32px;
        width:250px;
        background-color:transparent;
       border-radius:15px 0px 15px 0px;
       border:2px solid #fff;
       
       
    }
     #TextBox4
    {
        height:32px;
        width:250px;
        background-color:transparent;
       border-radius:15px 0px 15px 0px;
       border:2px solid #fff;
       
       
    }
     #TextBox5
    {
        height:32px;
        width:250px;
        background-color:transparent;
       border-radius:15px 0px 15px 0px;
       border:2px solid #fff;
       
       
    }
     #TextBox6
    {
        height:32px;
        width:250px;
        background-color:transparent;
       border-radius:15px 0px 15px 0px;
       border:2px solid #fff;
       
       
    }
     #Button4
    {
        margin-left:60px;
        margin-bottom:10px;
        
        width:300px;
        height:40px;
        background-color:Tomato;
       border-radius:40px 40px 40px 40px;
       border:2px solid #fff;
    }
    #Button2
    {
        margin-left:60px;
        margin-bottom:10px;
          width:300px;
        height:40px;
        background-color:Tomato;
       border-radius:40px 40px 40px 40px;
       border:2px solid #fff;
    }
     #Button5
    {
        width:120px;
        height:40px;
        background-color:Tomato;
       border-radius:20px 20px 20px 20px;
       border:2px solid #fff;
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
                  <asp:HyperLink ID="HyperLink1" runat="server" ForeColor="White" 
            NavigateUrl="~/Home.aspx">Home</asp:HyperLink>
                 <asp:HyperLink ID="HyperLink2" runat="server" ForeColor="White" 
            NavigateUrl="~/Student.aspx">Library</asp:HyperLink>
               
                <asp:HyperLink ID="HyperLink4" runat="server" ForeColor="White" 
            NavigateUrl="~/Login_page.aspx">Logout</asp:HyperLink>
    </div>
        
    </div>
    <div class="form">
           
                 <div class="text">
                 <asp:Label ID="Label2" runat="server" Text="Student_ID"></asp:Label>
               <br /><br /><br />
               
            <asp:Label ID="Label3" runat="server" Text="Card No"></asp:Label>
            <br /><br /><br />
            <asp:Label ID="Labe4" runat="server" Text="Book No"></asp:Label>
            <br /><br /><br />
            <asp:Label ID="Labe5" runat="server" Text="Issue Date"></asp:Label>
              <br /><br /><br />
            <asp:Label ID="Label6" runat="server" Text="Submit date"></asp:Label>
            <br /><br /><br />
            <asp:Label ID="Label7" runat="server" Text="Total Fine"></asp:Label>
            
        </div>
        <div class="textBox">
        <asp:TextBox ID="TextBox1" runat="server" ></asp:TextBox>
               <br /><br/><br />
            <asp:TextBox ID="TextBox2" runat="server"></asp:TextBox>
            <br /><br /><br />
            <asp:TextBox ID="TextBox3" runat="server"></asp:TextBox>
            <br /><br /><br />
            <asp:TextBox ID="TextBox4" runat="server"></asp:TextBox>
            <br /><br /><br />
            <asp:TextBox ID="TextBox5" runat="server" ></asp:TextBox>
            <br /><br /><br />
            <asp:TextBox ID="TextBox6" runat="server"></asp:TextBox> 
           
               <asp:Button ID="Button5" runat="server" Text="Calculate Fine" 
                onclick="Button5_Click" />
           
               <br />
            <br /><br /><br />
           
            <asp:Button ID="Button2" runat="server" Text="Submit" onclick="Button2_Click" />
               <br />
               <asp:Button ID="Button4" runat="server" onclick="Button4_Click" 
                Text="Cancel" />
                     <br />
               
               <br />
               <asp:Label ID="msg" runat="server" Text=""></asp:Label>
          
        </div>
      
    </div>

    </form>
</body>
</html>
