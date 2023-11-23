<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Update_Record.aspx.cs" Inherits="Update_Record" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Update Records</title>
    <style>
     .Background
      {
          background-image:url(image/bgimage.jpg);
          background-size:100% 110%;
          background-position:100% 100%;
          height:170vh;
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
        margin-left:350px;
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
     #HyperLink4
    {
        margin-left:20px;
    }
    .Form
   {
       height:950px;
       width:500px;
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
        font-size:22px;
        padding-left:30px;
        padding-top:50px;
        float:left;
      
        
    }
    .textBox
    {
        margin-top:40px;
        float:left;

    }
    #TextBox1
    {
        height:32px;
        width:150px;
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
     #TextBox3
    {
        height:32px;
        width:100%;
        background-color:transparent;
       border-radius:15px 0px 15px 0px;
       border:2px solid #fff;
       
       
    }
     #TextBox4
    {
        height:32px;
        width:100%;
        background-color:transparent;
       border-radius:15px 0px 15px 0px;
       border:2px solid #fff;
       
       
    }
     #TextBox5
    {
        height:32px;
        width:100%;
        background-color:transparent;
       border-radius:15px 0px 15px 0px;
       border:2px solid #fff;
       
       
    }
     #TextBox6
    {
        height:32px;
        width:100%;
        background-color:transparent;
       border-radius:15px 0px 15px 0px;
       border:2px solid #fff;
       
       
    }
     #TextBox7
    {
        height:32px;
        width:100%;
        background-color:transparent;
       border-radius:15px 0px 15px 0px;
       border:2px solid #fff;
       
       
    }
     #TextBox8
    {
        height:32px;
        width:100%;
        background-color:transparent;
       border-radius:15px 0px 15px 0px;
       border:2px solid #fff;
       
       
    }
     #TextBox9
    {
        height:32px;
        width:100%;
        background-color:transparent;
       border-radius:15px 0px 15px 0px;
       border:2px solid #fff;
       
       
    }
     #TextBox10
    {
        height:32px;
        width:80%;
        background-color:transparent;
       border-radius:15px 0px 15px 0px;
       border:2px solid #fff;
       
       
    }
    #Button2
        {
        margin-left:50px;
        width:80%;
        height:40px;
        background-color:Tomato;
       border-radius:40px 40px 40px 40px;
         border:2px solid #fff;
    }
   #Button3
    {
         margin-left:50px;
        width:80%;
        height:40px;
        background-color:Tomato;
       border-radius:40px 40px 40px 40px;
         border:2px solid #fff;
    }
   #Button1
    {
         margin-left:50px;
        width:80%;
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
    <div class="Background">
        <div class="Menu">
             <div class="leftmenu">
    
                <asp:Label ID="Label1" runat="server" Text="SCHOLL MANAGAMENT SYSTEM"></asp:Label>
             </div >
              <div class="rightmenu">
                  <asp:HyperLink ID="HyperLink1" runat="server" ForeColor="White" 
            NavigateUrl="~/Home.aspx">Home</asp:HyperLink>
                 <asp:HyperLink ID="HyperLink2" runat="server" ForeColor="red" 
            NavigateUrl="~/Student.aspx">Student</asp:HyperLink>
                 <asp:HyperLink ID="HyperLink3" runat="server" ForeColor="White" 
            NavigateUrl="~/Admin.aspx">Admin</asp:HyperLink>
                <asp:HyperLink ID="HyperLink4" runat="server" ForeColor="White" 
            NavigateUrl="~/About.aspx">About</asp:HyperLink>
    </div>
        <div class="Form">
        <div class="text">
            <asp:Label ID="Label11" runat="server" Text="Student ID"></asp:Label>
            <br /><br /><br />
            <asp:Label ID="Label2" runat="server" Text="Student Name"></asp:Label>
            <br /><br /><br />
            <asp:Label ID="Label3" runat="server" Text="Father Name"></asp:Label>
              <br /><br /><br />
            <asp:Label ID="Label4" runat="server" Text="Address"></asp:Label>
            <br /><br /><br />
            <asp:Label ID="Label5" runat="server" Text="Phone No"></asp:Label>
            <br /><br /><br />
            <asp:Label ID="Label6" runat="server" Text="Votar ID"></asp:Label>
             <br /><br /><br />
            <asp:Label ID="Label7" runat="server" Text="Class"></asp:Label>
            <br /><br /><br />
            <asp:Label ID="Label8" runat="server" Text="Roll No"></asp:Label>
           <br /><br /><br />
            <asp:Label ID="Label9" runat="server" Text="Sec"></asp:Label>
           <br /><br /><br />
            <asp:Label ID="Label10" runat="server" Text="Library Card"></asp:Label>
           <br /><br />
        </div>
        <div class="textBox">
            <asp:TextBox ID="TextBox1" runat="server" ForeColor="White"></asp:TextBox>
            <br /><br /><br />
            <asp:TextBox ID="TextBox2" runat="server" ForeColor="White"></asp:TextBox>
            <br /><br /><br />
            <asp:TextBox ID="TextBox3" runat="server" ForeColor="White"></asp:TextBox>
            <br /><br /><br />
            <asp:TextBox ID="TextBox4" runat="server" ForeColor="White"></asp:TextBox>
            <br /><br /><br />
            <asp:TextBox ID="TextBox5" runat="server" ForeColor="White"></asp:TextBox>
            <br /><br /><br />
            <asp:TextBox ID="TextBox6" runat="server" ForeColor="White"></asp:TextBox>
            <br /><br /><br />
            <asp:TextBox ID="TextBox7" runat="server" ForeColor="White"></asp:TextBox>
            <br /><br /><br />
            <asp:TextBox ID="TextBox8" runat="server" ForeColor="White"></asp:TextBox>
            <br /><br /><br />
            <asp:TextBox ID="TextBox9" runat="server" ForeColor="White"></asp:TextBox>
            <br /><br /><br />
            <asp:TextBox ID="TextBox10" runat="server" ForeColor="White"></asp:TextBox>
            <br /><br /><br />
            
            <asp:Button ID="Button1" runat="server" Text="Search" onclick="Button1_Click" />
            <br />
            <asp:Button ID="Button2" runat="server" Text="update" onclick="Button2_Click" />
            <br />
            <asp:Button ID="Button3" runat="server" Text="delete" onclick="Button3_Click" />
            <div>
            <br />
           
            <asp:Label ID="msg" runat="server" Text=""></asp:Label>
            </div>
        </div>
   
      </div>
    </div>
    </div>
    </form>
</body>
</html>
