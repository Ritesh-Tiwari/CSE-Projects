using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Data.OleDb;


namespace project
{
    public partial class Update_Teacher_Records : Form
    {
        OleDbConnection con = new OleDbConnection();
        OleDbCommand com;
        OleDbDataAdapter da;
        DataSet ds;
        
        public Update_Teacher_Records()
        {
            InitializeComponent();
        }

        private void button7_Click(object sender, EventArgs e)
        {
            
            Close();

        }

        private void Search_Click(object sender, EventArgs e)
        {
            this.textBox2.Enabled = false;
            con.ConnectionString = @"Provider=Microsoft.Jet.OLEDB.4.0;Data Source=E:\project\project\Database\database.mdb";
            con.Open();
            com = new OleDbCommand("select * from Teacher where ID='" + this.textBox5.Text + "'", con);
            da = new OleDbDataAdapter(com);
            ds = new DataSet();
            da.Fill(ds);
            if (ds.Tables[0].Rows.Count > 0)
            {
                this.textBox2.Text = ds.Tables[0].Rows[0][0].ToString();
                this.textBox1.Text = ds.Tables[0].Rows[0][1].ToString();
                this.textBox3.Text = ds.Tables[0].Rows[0][2].ToString();
                this.textBox4.Text = ds.Tables[0].Rows[0][3].ToString();
                this.richTextBox1.Text = ds.Tables[0].Rows[0][4].ToString();
            }
            else
                MessageBox.Show("Record not found");
            con.Close();
 
        }

        private void Update_Click(object sender, EventArgs e)
        {
            con.ConnectionString = @"Provider=Microsoft.Jet.OLEDB.4.0;Data Source=E:\project\project\Database\database.mdb";
            con.Open();
            string sql;

           sql="update Teacher set  Name='"+this.textBox1.Text+"',Phone_No='"+this.textBox3.Text+"',Emai_ID='"+this.textBox4.Text+"',Current_Adress='"+this.richTextBox1.Text+"' where ID='"+this.textBox5.Text+"'";
            MessageBox.Show(sql);
            com = new OleDbCommand(sql, con);
            com.ExecuteNonQuery();
            con.Close();
            
 
        }

        private void Delete_Click(object sender, EventArgs e)
        {
            con.ConnectionString = @"Provider=Microsoft.Jet.OLEDB.4.0;Data Source=E:\project\project\Database\database.mdb";
            con.Open();
            string sql;
            sql = "delete from Teacher Where ID='" +this.textBox5.Text+"'";
            MessageBox.Show(sql);
            com = new OleDbCommand(sql, con);
            com.ExecuteNonQuery();

            con.Close();
        }

        private void Refresh_Click(object sender, EventArgs e)
        {
            con.ConnectionString = @"Provider=Microsoft.Jet.OLEDB.4.0;Data Source=E:\project\project\Database\database.mdb";
            con.Open();
            com = new OleDbCommand("Select *from Students", con);
            da = new OleDbDataAdapter(com);
            ds = new DataSet();
            da.Fill(ds);
            if (ds.Tables[0].Rows.Count > 0)
            {
                this.textBox2.Text = ds.Tables[0].Rows[0][0].ToString();
                this.textBox1.Text = ds.Tables[0].Rows[0][1].ToString();
                this.textBox3.Text = ds.Tables[0].Rows[0][2].ToString();
                this.textBox4.Text = ds.Tables[0].Rows[0][3].ToString();
                this.textBox5.Text = "";
                this.richTextBox1.Text = ds.Tables[0].Rows[0][4].ToString();
            }
            con.Close();
        }

        private void Brows_Click(object sender, EventArgs e)
        {

        }
    }
}
