using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Data.OleDb;
namespace LMS
{
    public partial class Issue : Form
    {

        OleDbConnection con = new OleDbConnection();
        OleDbCommand com;
        OleDbDataAdapter da;
        DataSet ds;
        public Issue()
        {
            InitializeComponent();
        }

        private void Issue_Load(object sender, EventArgs e)
        {
            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\\Ritesh\\LMS\\Books.mdb";
            con.Open();
            com = new OleDbCommand("select *from Table1", con);
            da = new OleDbDataAdapter(com);
            ds = new DataSet("r1");
            da.Fill(ds, "r1");
            this.dataGridView1.DataSource = ds;
            this.dataGridView1.DataMember = "r1";
            con.Close();
        }

        private void SearchBTn_Click(object sender, EventArgs e)
        {
            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\\Ritesh\\LMS\\Books.mdb";
            con.Open();
            com = new OleDbCommand("select * from Table1 where Book_ID=" + Convert.ToInt32(this.textBox1.Text), con);
            da = new OleDbDataAdapter(com);
            ds = new DataSet();
            da.Fill(ds);
            if (ds.Tables[0].Rows.Count > 0)
            {
                this.textBox1.Text = ds.Tables[0].Rows[0][0].ToString();
                this.textBox2.Text = ds.Tables[0].Rows[0][1].ToString();
                this.textBox3.Text = ds.Tables[0].Rows[0][2].ToString();
                this.textBox4.Text = ds.Tables[0].Rows[0][3].ToString();
                this.textBox5.Text = ds.Tables[0].Rows[0][4].ToString();
            }
            else
                MessageBox.Show("Record not found");
            con.Close();
        }

        private void button1_Click(object sender, EventArgs e)
        {

            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\\Ritesh\\LMS\\Issue.mdb";
            con.Open();
            string sql;
            sql = "insert into Table2 values('" +this.textBox6.Text+ "','" + this.textBox7.Text + "','" +Convert.ToInt32( this.textBox1.Text) + "','" + this.textBox2.Text + "','" + this.textBox3.Text + "','" + +Convert.ToInt32(this.textBox4.Text) + "','" + Convert.ToInt32(this.textBox5.Text)+"','"+ this.dateTimePicker1.Text+"')";
            MessageBox.Show(sql);
            com = new OleDbCommand(sql, con);
            com.ExecuteNonQuery();
            con.Close();
            
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Close();
            Form1 frm = new Form1();
            frm.Show();

        }
    }
}
