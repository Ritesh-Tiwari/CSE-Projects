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
    public partial class insert_student_information : Form
    {

        OleDbConnection con = new OleDbConnection();
        OleDbCommand com;       
        public insert_student_information()
        {
            InitializeComponent();
        
        }

     

        private void Save_Click(object sender, EventArgs e)
        {
            con.ConnectionString = @"Provider=Microsoft.Jet.OLEDB.4.0;Data Source=E:\project\project\Database\database.mdb";
            con.Open();
            string sql;

            sql = "insert into Students_records values('" +this.textBox6.Text+"','"+ this.textBox1.Text + "','" + this.textBox2.Text + "','" + this.textBox3.Text + "','"+this.textBox4.Text+"','" +this.textBox5.Text+"','"+ this.richTextBox1.Text +"','"+this.textBox7.Text+ "')";
            MessageBox.Show(sql);
            com = new OleDbCommand(sql, con);
            com.ExecuteNonQuery();
            con.Close();
            this.button1.Enabled = true;
           
        }

       
        private void insert_student_information_Load(object sender, EventArgs e)
        {

        }

        
        private void groupBox2_Enter(object sender, EventArgs e)
        {

        }

        private void Back_Click(object sender, EventArgs e)
        {
          
            Close();

        }

        private void button1_Click(object sender, EventArgs e)
        {
            this.textBox6.Text = "";
            this.textBox1.Text = "";
            this.textBox2.Text = "";
            this.textBox3.Text = "";
            this.textBox4.Text = "";
            this.textBox5.Text = "";
            this.richTextBox1.Text = "";
            this.textBox7.Text = "";
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }
    }
}
