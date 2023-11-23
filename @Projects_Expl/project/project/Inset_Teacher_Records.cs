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
    public partial class Inset_Teacher_Records : Form
    {
         OleDbConnection con = new OleDbConnection();
        OleDbCommand com;
       

        public Inset_Teacher_Records()
        {
            InitializeComponent();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.textBox1.Text = "";
            this.textBox2.Text = "";
            this.textBox3.Text = "";
            this.textBox4.Text = "";
            this.richTextBox1.Text = "";
            this.button4.Enabled = true;
            this.button2.Enabled = false;

        }

        private void button3_Click_1(object sender, EventArgs e)
        {
          
            Close();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            con.ConnectionString = @"Provider=Microsoft.Jet.OLEDB.4.0;Data Source=E:\project\project\Database\database.mdb";
            con.Open();
            string sql;
            sql = "insert into Teacher values('" + this.textBox2.Text + "','" + this.textBox1.Text + "','" + this.textBox3.Text + "','"+ this.textBox4.Text +"','"+this.richTextBox1.Text+"')";
            MessageBox.Show(sql);
            com = new OleDbCommand(sql, con);
            com.ExecuteNonQuery();
            con.Close();
            this.button2.Enabled = true;
           
        }

        private void button1_Click(object sender, EventArgs e)
        {

        }
    }
}
