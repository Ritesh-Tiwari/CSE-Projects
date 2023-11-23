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
    public partial class Admin_Records : Form
    {
        OleDbConnection con = new OleDbConnection();
        OleDbCommand com;
        

        public Admin_Records()
        {
            InitializeComponent();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            
            Close();
        }

        private void New_Click(object sender, EventArgs e)
        {
            this.textBox1.Text = "";
            this.textBox2.Text = "";
            this.textBox3.Text = "";
            this.Save.Enabled = true;
            this.New.Enabled = false;


        }

        private void Save_Click(object sender, EventArgs e)
        {
            con.ConnectionString = @"Provider=Microsoft.Jet.OLEDB.4.0;Data Source=E:\project\project\Database\database.mdb";
            con.Open();
            string sql;
            sql = "insert into Admin values('" + this.textBox1.Text + "','" + this.textBox2.Text + "','" + this.textBox3.Text+"')";
            MessageBox.Show(sql);
            com = new OleDbCommand(sql, con);
            com.ExecuteNonQuery();
            con.Close();
            this.New.Enabled = true;
           
        }

        private void Admin_Records_Load(object sender, EventArgs e)
        {

        }

        private void groupBox1_Enter(object sender, EventArgs e)
        {

        }

    }
}
