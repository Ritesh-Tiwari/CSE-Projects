using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.OleDb;
using System.Data;

public partial class Fess : System.Web.UI.Page
{
    OleDbConnection con = new OleDbConnection("Provider=Microsoft.Jet.OLEDB.4.0;Data Source=" + @"D:\Ritesh Tiwari\ASP\School.mdb");
    OleDbCommand com;
    OleDbDataAdapter da;
    DataSet ds;

    protected void Page_Load(object sender, EventArgs e)
    {

    }
    
     
    protected void Button2_Click(object sender, EventArgs e)
    {
        
        con.Open();
        string insert;
        insert = "insert into Installment (Student_ID,Installment,GST,Electric,Paid_Date,Total_Fine) Values('" +
            TextBox1.Text + "','" + TextBox2.Text+ "','" +TextBox3.Text+ "','" + TextBox4.Text + "','" + TextBox5.Text + "','" + TextBox6.Text +"')";
        com = new OleDbCommand(insert, con);
        msg.Text = "Record Saved..........";
        com.ExecuteNonQuery();
        con.Close();
    }

    protected void Button3_Click(object sender, EventArgs e)
    {
    }
    protected void Button3_Click1(object sender, EventArgs e)
    {
        double installmant, GST, electric, fine, total;
        installmant=Convert.ToDouble(TextBox1.Text);
        GST=Convert.ToDouble(TextBox3.Text);
        electric = Convert.ToDouble(TextBox4.Text);
        total = installmant +  GST/100 + electric;
        TextBox6.Text = "" + total.ToString();


    }
    protected void Button4_Click(object sender, EventArgs e)
    {

        TextBox2.Text = "";
        TextBox3.Text = "";
        TextBox4.Text = "";
        TextBox5.Text = "";
        TextBox6.Text = "";
        TextBox1.Text = "";

    }
}