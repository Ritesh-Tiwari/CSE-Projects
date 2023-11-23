using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.OleDb;
using System.Data;


public partial class Update_Record : System.Web.UI.Page
{
    OleDbConnection con = new OleDbConnection("Provider=Microsoft.Jet.OLEDB.4.0;Data Source=" + @"D:\Ritesh Tiwari\ASP\School.mdb");
    OleDbCommand com;
    OleDbDataAdapter da;
    DataSet ds;

    protected void Page_Load(object sender, EventArgs e)
    {

    }
  
    
    protected void Button1_Click(object sender, EventArgs e)
    {
        string search;
        search = "select *from Student where Student_ID='" + TextBox1.Text + "'";
        com = new OleDbCommand(search, con);
        da = new OleDbDataAdapter(com);
        ds = new DataSet();
        da.Fill(ds);
        if (ds.Tables[0].Rows.Count > 0)
        {
            TextBox2.Text = ds.Tables[0].Rows[0][1].ToString();
            TextBox3.Text = ds.Tables[0].Rows[0][2].ToString();
            TextBox4.Text = ds.Tables[0].Rows[0][3].ToString();
            TextBox5.Text = ds.Tables[0].Rows[0][4].ToString();
            TextBox6.Text = ds.Tables[0].Rows[0][5].ToString();
            TextBox7.Text = ds.Tables[0].Rows[0][6].ToString();
            TextBox8.Text = ds.Tables[0].Rows[0][7].ToString();
            TextBox9.Text = ds.Tables[0].Rows[0][8].ToString();
            TextBox10.Text = ds.Tables[0].Rows[0][9].ToString();

            msg.Text = "Record found...........";
        }
        else
        {
            TextBox2.Text = "";
            TextBox3.Text = "";
            TextBox4.Text = "";
            TextBox5.Text = "";
            TextBox6.Text = "";
            TextBox7.Text = "";

            TextBox8.Text = "";
            TextBox9.Text = "";
            TextBox10.Text = "";

        }
    }
    protected void Button2_Click(object sender, EventArgs e)
    {
        string update;
        con.Open();
        update = "update Student set Student_Name='" + TextBox2.Text + "',Father_Name='" + TextBox3.Text + "',Address='" + TextBox4.Text + "',Phone_No='" + TextBox5.Text + "',Votar_ID='" + TextBox6.Text + "',Class='" + TextBox7.Text + "',Roll_No='" + TextBox8.Text + "',Sec='" + TextBox9.Text + "',Library_card='" + TextBox10.Text + "' where Student_ID='" + TextBox1.Text + "'";
        com = new OleDbCommand(update, con);
        com.ExecuteNonQuery();
        msg.Text = "Record Update";
        TextBox2.Text = "";
        TextBox3.Text = "";
        TextBox4.Text = "";
        TextBox5.Text = "";
        TextBox6.Text = "";
        TextBox7.Text = "";

        TextBox8.Text = "";
        TextBox9.Text = "";
        TextBox10.Text = "";

    }
    protected void Button3_Click(object sender, EventArgs e)
    {
        string delete;
        con.Open();
        delete = "Delete from Student where Student_ID='" + TextBox1.Text + "'";
        com = new OleDbCommand(delete, con);
        com.ExecuteNonQuery();
        msg.Text = "record delete";

        TextBox2.Text = "";
        TextBox3.Text = "";
        TextBox4.Text = "";
        TextBox5.Text = "";
        TextBox6.Text = "";
        TextBox7.Text = "";

        TextBox8.Text = "";
        TextBox9.Text = "";
        TextBox10.Text = "";

    }
}