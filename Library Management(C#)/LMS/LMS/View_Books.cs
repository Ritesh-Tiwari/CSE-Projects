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
    public partial class View_Books : Form
    {
        OleDbConnection con = new OleDbConnection();
        OleDbCommand com;
        OleDbDataAdapter da;
        DataSet ds;
        

        public View_Books()
        {
            InitializeComponent();
        }

        private void View_Books_Load(object sender, EventArgs e)
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

        
        private void DeleteBtn_Click_1(object sender, EventArgs e)
        {
            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\\Ritesh\\LMS\\Books.mdb";
            con.Open();
            string sql;
            sql = "delete from Table1 where Book_ID=" + Convert.ToInt32(this.textBox1.Text);
            MessageBox.Show(sql);

            com = new OleDbCommand(sql, con);
            com.ExecuteNonQuery();
            con.Close();
            View_Books_Load(sender, e);

        }

         private void UpdateBTn_Click(object sender, EventArgs e)
        {
            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\\Ritesh\\LMS\\Books.mdb";
            con.Open();
            string sql;

           sql ="update Table1 set Book_Name='" +this.textBox2.Text+"', Book_Authore='"+this.textBox3.Text+"',Book_ISBM='"+this.textBox4.Text+"',Book_Amount="+Convert.ToInt32(this.textBox5.Text)+" where Book_ID="+Convert.ToInt32(textBox1.Text);
           MessageBox.Show(sql);
           com = new OleDbCommand(sql, con);
           com.ExecuteNonQuery();
           con.Close();
           View_Books_Load(sender, e);
 
        }

        private void CencelBtn_Click_1(object sender, EventArgs e)
        {
            Close();
        }

        private void RefreshBtn_Click(object sender, EventArgs e)
        {
            View_Books_Load(sender, e);
        }

        private void panel2_Paint(object sender, PaintEventArgs e)
        {

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

        
       
       
    }
}
