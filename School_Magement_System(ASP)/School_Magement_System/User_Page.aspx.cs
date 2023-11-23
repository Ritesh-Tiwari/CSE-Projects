using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.OleDb;
using System.Data;


public partial class User_Page : System.Web.UI.Page
{
    OleDbConnection con = new OleDbConnection("Provider=Microsoft.Jet.OLEDB.4.0;Data Source=" + @"D:\Ritesh Tiwari\ASP\School.mdb");
    OleDbCommand com;
    OleDbDataAdapter da;
    DataSet ds;

    protected void Page_Load(object sender, EventArgs e)
    {
        string student;
        student = Request.QueryString["a"].ToString();
        TextBox1.Text = "" + student;

    }
    protected void Button5_Click(object sender, EventArgs e)
    {
        string update;
        update = "update Library Card_No='" + TextBox2.Text + "',Book_No='" + TextBox3.Text + "',Issue_Date='" + TextBox4.Text + "',Submit_Date='" + TextBox5.Text + "',Total_Fine='" + TextBox6.Text + "' where Student_ID='" + TextBox1.Text + "'";
        com = new OleDbCommand(update, con);
        com.ExecuteNonQuery();
        msg.Text = "Record Update";
        TextBox2.Text = "";
        TextBox3.Text = "";
        TextBox4.Text = "";
        TextBox5.Text = "";
        TextBox6.Text = "";
        

    }
    protected void Button2_Click(object sender, EventArgs e)
    {


    }
    protected void Button4_Click(object sender, EventArgs e)
    {

    }
}