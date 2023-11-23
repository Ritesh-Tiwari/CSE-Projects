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
    public partial class Add_Books : Form
    {
        OleDbConnection con = new OleDbConnection();
        OleDbCommand com;
        OleDbDataAdapter da;
        DataSet ds;
        int i = -1;

        public Add_Books()
        {
            InitializeComponent();
        }

        private void Add_Books_Load(object sender, EventArgs e)
        {
            this.savebtn.Enabled = false;
            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\\Ritesh\\LMS\\Books.mdb";
            con.Open();
            com = new OleDbCommand("Select *from Table1", con);
            da = new OleDbDataAdapter(com);
            ds=new DataSet();
            da.Fill(ds);
            if (ds.Tables[0].Rows.Count > 0)
            {
                this.textBox1.Text = ds.Tables[0].Rows[0][0].ToString();
                this.textBox2.Text = ds.Tables[0].Rows[0][1].ToString();
                this.textBox3.Text = ds.Tables[0].Rows[0][2].ToString();
                this.textBox4.Text = ds.Tables[0].Rows[0][3].ToString();
                this.textBox5.Text = ds.Tables[0].Rows[0][4].ToString();
                i = 0;
            }
            con.Close();
        }

        private void cancelbtn_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void Newbtn_Click(object sender, EventArgs e)
        {
            this.textBox1.Text = "";
            this.textBox2.Text = "";
            this.textBox3.Text = "";
            this.textBox4.Text = "";
            this.textBox5.Text = "";
            this.savebtn.Enabled = true;
            this.Newbtn.Enabled = false;

        }

        private void savebtn_Click(object sender, EventArgs e)
        {
            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\\Ritesh\\LMS\\Books.mdb";
            con.Open();
            string sql;
            sql="insert into Table1 values("+Convert.ToInt16(this.textBox1.Text)+",'"+this.textBox2.Text+"','"+this.textBox3.Text+"',"+Convert.ToInt32(this.textBox4.Text)+","+Convert.ToInt32(this.textBox5.Text)+")";
            MessageBox.Show(sql);
            com = new OleDbCommand(sql,con);
            com.ExecuteNonQuery();
            con.Close();
            this.Newbtn.Enabled = true;
            i=ds.Tables[0].Rows.Count-1;


        }

       
   
    }
}
