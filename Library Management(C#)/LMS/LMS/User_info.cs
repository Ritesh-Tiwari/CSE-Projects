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
    public partial class User_info : Form
    {
        OleDbConnection con = new OleDbConnection();
        OleDbCommand com;
        OleDbDataAdapter da;
        DataSet ds;
        
        public User_info()
        {
            InitializeComponent();
        }

        private void User_info_Load(object sender, EventArgs e)
        {
            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\\Ritesh\\LMS\\UserID.mdb";
            con.Open();
            com = new OleDbCommand("select *from Table3", con);
            da = new OleDbDataAdapter(com);
            ds = new DataSet("r1");
            da.Fill(ds, "r1");
            this.dataGridView1.DataSource = ds;
            this.dataGridView1.DataMember = "r1";
            con.Close();
        }

        

        private void DeleteBtn_Click(object sender, EventArgs e)
        {
            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\\Ritesh\\LMS\\UserID.mdb";
            con.Open();
            string sql;
            sql = "delete from Table3 Where User_ID=" + Convert.ToInt32(this.textBox1.Text);
            MessageBox.Show(sql);
            com = new OleDbCommand(sql, con);
            com.ExecuteNonQuery();

            con.Close();
            User_info_Load(sender, e);

        }

        private void UpdateBTn_Click(object sender, EventArgs e)
        {

            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\\Ritesh\\LMS\\UserID.mdb";
            con.Open();
            string sql;

            sql = "update Table3 set User_Name='" + this.textBox2.Text + "', User_Address='" + this.richTextBox1.Text + "',Phone_No='" +Convert.ToInt32( this.textBox4.Text) + "',Email_ID='" +Convert.ToInt32( this.textBox5.Text) + "' where User_ID=" +Convert.ToInt32( textBox1.Text ); 
            MessageBox.Show(sql);
            com = new OleDbCommand(sql, con);
            com.ExecuteNonQuery();
            con.Close();
            User_info_Load (sender, e);
 
        }

        private void SearchBTn_Click(object sender, EventArgs e)
        {
            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\\Ritesh\\LMS\\UserID.mdb";
            con.Open();
            com = new OleDbCommand("select * from Table3 where User_ID='"+this.textBox1.Text+"'", con);
            da = new OleDbDataAdapter(com);
            ds = new DataSet();
            da.Fill(ds);
            if (ds.Tables[0].Rows.Count > 0)
            {
                this.textBox1.Text = ds.Tables[0].Rows[0][0].ToString();
                this.textBox2.Text = ds.Tables[0].Rows[0][1].ToString();
                this.richTextBox1.Text = ds.Tables[0].Rows[0][2].ToString();
                this.textBox4.Text = ds.Tables[0].Rows[0][3].ToString();
                this.textBox5.Text = ds.Tables[0].Rows[0][4].ToString();
            }
            else
                MessageBox.Show("Record not found");
            con.Close();
        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }
    }
}
