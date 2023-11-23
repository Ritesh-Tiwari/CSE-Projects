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
    public partial class Update_Students_Records : Form
    {
        OleDbConnection con = new OleDbConnection();
        OleDbCommand com;
        OleDbDataAdapter da;
        DataSet ds;
        
        public Update_Students_Records()
        {
            InitializeComponent();
        }
        
        private void button2_Click_1(object sender, EventArgs e) 

        {
           
            con.ConnectionString = @"Provider=Microsoft.Jet.OLEDB.4.0;Data Source=E:\project\project\Database\database.mdb";
            con.Open();
            com = new OleDbCommand("select * from Students_records where Student_ID='" + this.textBox1.Text + "'", con);
            da = new OleDbDataAdapter(com);
            ds = new DataSet();
            da.Fill(ds);
            if (ds.Tables[0].Rows.Count > 0)
            {
                this.textBox2.Text = ds.Tables[0].Rows[0][0].ToString();
                this.textBox3.Text = ds.Tables[0].Rows[0][1].ToString();
                this.textBox4.Text = ds.Tables[0].Rows[0][2].ToString();
                this.textBox5.Text = ds.Tables[0].Rows[0][3].ToString();
                this.textBox6.Text = ds.Tables[0].Rows[0][4].ToString();
                this.richTextBox1.Text = ds.Tables[0].Rows[0][5].ToString();
                this.textBox7.Text = ds.Tables[0].Rows[0][6].ToString();
                this.textBox8.Text = ds.Tables[0].Rows[0][7].ToString();
                

            }
            else
                MessageBox.Show("Record not found");
            con.Close();
 
        }

        private void button3_Click(object sender, EventArgs e)
        {
            this.textBox2.Enabled = false;

            con.ConnectionString = @"Provider=Microsoft.Jet.OLEDB.4.0;Data Source=E:\project\project\Database\database.mdb";
            con.Open();
            string sql;
            try
            {
                sql = "Update Students_records set  Name='" + this.textBox3.Text + "',Father_Name='" + this.textBox4.Text + "',Phone_NO='" + this.textBox5.Text + "',Father_Phone_No='" + this.textBox6.Text + "',Email_ID='" + this.textBox7.Text + "',Current_Adress='" + this.richTextBox1.Text + "',Batch='" + this.textBox8.Text + "' Where Student_ID='" + this.textBox1.Text + "'";

                MessageBox.Show(sql);
                com = new OleDbCommand(sql, con);
                com.ExecuteNonQuery();
                con.Close();
            }
            catch(Exception d)
            {
                MessageBox.Show(""+d);
            }
        }

        private void button5_Click(object sender, EventArgs e)
        {
            con.ConnectionString = @"Provider=Microsoft.Jet.OLEDB.4.0;Data Source=E:\project\project\Database\database.mdb";
            con.Open();
            string sql;
            sql = "delete from Students_records Where Student_ID='" + this.textBox1.Text + "'";
            MessageBox.Show(sql);
            com = new OleDbCommand(sql, con);
            com.ExecuteNonQuery();

            con.Close();
        }

      

        private void button7_Click(object sender, EventArgs e)
        {
           
            Close();

        }

        

        private void groupBox1_Enter(object sender, EventArgs e)
        {

        }


        private void label11_Click(object sender, EventArgs e)
        {

        }

        private void textBox7_TextChanged(object sender, EventArgs e)
        {

        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }
    }
    }

