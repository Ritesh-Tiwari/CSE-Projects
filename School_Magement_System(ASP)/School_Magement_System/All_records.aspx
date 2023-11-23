<%@ Page Language="C#" AutoEventWireup="true" CodeFile="All_records.aspx.cs" Inherits="All_records" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>all records</title>
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
       width:75%;
        line-height:60px;
        padding-left:500px;
        font-size:20px;
        font-weight:bold;
       
    }
    #HyperLink1
    {
        margin-left:600px;
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
            NavigateUrl="~/Student.aspx">Student</asp:HyperLink>
                 <asp:HyperLink ID="HyperLink3" runat="server" ForeColor="White" 
            NavigateUrl="~/Admin.aspx">Admin</asp:HyperLink>
                <asp:HyperLink ID="HyperLink4" runat="server" ForeColor="White" 
            NavigateUrl="~/About.aspx">About</asp:HyperLink>
    </div>
        
    </div>
    <div class="table">
        <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" 
            DataKeyNames="Student_ID" DataSourceID="SqlDataSource1">
            <Columns>
                <asp:BoundField DataField="Student_ID" HeaderText="Student_ID" ReadOnly="True" 
                    SortExpression="Student_ID" />
                <asp:BoundField DataField="Student_Name" HeaderText="Student_Name" 
                    SortExpression="Student_Name" />
                <asp:BoundField DataField="Father_Name" HeaderText="Father_Name" 
                    SortExpression="Father_Name" />
                <asp:BoundField DataField="Address" HeaderText="Address" 
                    SortExpression="Address" />
                <asp:BoundField DataField="Phone_No" HeaderText="Phone_No" 
                    SortExpression="Phone_No" />
                <asp:BoundField DataField="Votar_ID" HeaderText="Votar_ID" 
                    SortExpression="Votar_ID" />
                <asp:BoundField DataField="Class" HeaderText="Class" SortExpression="Class" />
                <asp:BoundField DataField="Roll_No" HeaderText="Roll_No" 
                    SortExpression="Roll_No" />
                <asp:BoundField DataField="Sec" HeaderText="Sec" SortExpression="Sec" />
                <asp:BoundField DataField="Library_Card" HeaderText="Library_Card" 
                    SortExpression="Library_Card" />
            </Columns>
        </asp:GridView>
        <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
            ConnectionString="<%$ ConnectionStrings:SchoolConnectionString %>" 
            ProviderName="<%$ ConnectionStrings:SchoolConnectionString.ProviderName %>" 
            SelectCommand="SELECT * FROM [Student]"></asp:SqlDataSource>
    </div>
    </div>
    </form>
</body>
</html>
