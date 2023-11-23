using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.OleDb;

public partial class New_Record : System.Web.UI.Page
{
    OleDbConnection con=new OleDbConnection("Provider=Microsoft.Jet.OLEDB.4.0;Data Source="+@"D:\Ritesh Tiwari\ASP\School.mdb");
    OleDbCommand com;

    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        con.Open();
        string insert;
        try
        {

            insert = "insert into Student(Student_ID,Student_Name,Father_Name,Address,Phone_No,Votar_ID,Class,Roll_No,Sec,Library_Card) Values('" +
                TextBox11.Text + "','" + TextBox2.Text + "','" + TextBox3.Text + "','" + TextBox4.Text + "','" + TextBox5.Text + "','" + TextBox6.Text + "','" + TextBox7.Text + "','" + TextBox8.Text + "','" + TextBox9.Text + "','" + TextBox10.Text + "')";
            com = new OleDbCommand(insert, con);
            msg.Text = "Record Saved..........";
            com.ExecuteNonQuery();
            con.Close();
        }
        catch (Exception d)
        {
            msg.Text = "" + d;
        }
    }

    protected void Button2_Click(object sender, EventArgs e)
    {
        Response.Redirect("Student.aspx");
    }
}