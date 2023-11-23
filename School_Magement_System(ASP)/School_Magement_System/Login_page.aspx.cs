using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.OleDb;


public partial class Login_page : System.Web.UI.Page
{
    string account;
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        OleDbConnection con = new OleDbConnection("Provider=Microsoft.Jet.OLEDB.4.0;Data Source=" + @"D:\Ritesh Tiwari\ASP\School.mdb");
        con.Open();
        if (RadioButton1.Checked)
        {
            account = "Admin";

        }
        else if(RadioButton2.Checked)
        {
            account = "Student";


        }

        OleDbCommand com = new OleDbCommand("Select *from UserId_Password where  User_ID='" + TextBox1.Text + "'and Password='" + TextBox2.Text + "'and Account='"+account+"'", con);
        OleDbDataReader reader;
        reader = com.ExecuteReader();
        int count = 0;
        while (reader.Read())
        {
            count++;
        }
        if (TextBox1.Text == "" && TextBox2.Text == "")
        {
            msg.Text = "Enter User ID Amd Password..............";

        }
        else if (count == 0)
        {
            msg.Text = "Wrong User ID Amd Password..............";


        }
        else
        {
            if (RadioButton1.Checked)
            {
                Response.Redirect("Home.aspx");
            }
            else
            {

                Response.Redirect("User_Page.aspx?a='"+TextBox1.Text+"'"); 

            }
        }


    }
}