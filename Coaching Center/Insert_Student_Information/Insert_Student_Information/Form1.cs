using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Data.OleDb;

namespace Insert_Student_Information
{
    public partial class Form1 : Form
    {
        OleDbConnection con = new OleDbConnection();
        OleDbCommand com;
        OleDbDataAdapter da;
        DataSet ds;
        int i = -1;
     
        public Form1()
        {
            InitializeComponent();
        }

        private void New_Click(object sender, EventArgs e)
        {
            //new Record
            this.textBox2.Text = "";
            this.textBox3.Text = "";
            this.textBox4.Text = "";
            this.textBox5.Text = "";
            this.textBox6.Text = "";
            this.textBox7.Text = "";
            this.textBox8.Text = "";
            this.textBox9.Text = "";
            this.textBox10.Text = "";
            this.Save.Enabled = true;
            this.New.Enabled = false;
            this.Delete.Enabled = false;
            this.Search.Enabled = false;
            this.Update.Enabled = false;
        
        }

        private void Back_Click(object sender, EventArgs e)
        {
            Insert_Teacher_Informatiom ob = new Insert_Teacher_Informatiom();
            ob.Show();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'student_InformationDataSet2.Student_Data' table. You can move, or remove it, as needed.
            this.student_DataTableAdapter.Fill(this.student_InformationDataSet2.Student_Data);
            
            //1st time display record 
            this.Save.Enabled = false;
            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=E:\\cse projects\\Coaching Center\\Insert_Student_Information\\Student_Information.mdb";
            con.Open();
            com = new OleDbCommand("Select *from Student_Data", con);
            da = new OleDbDataAdapter(com);
            ds = new DataSet();
            da.Fill(ds);
            if (ds.Tables[0].Rows.Count > 0)
            {
                this.textBox3.Text = ds.Tables[0].Rows[0][1].ToString();
                this.textBox4.Text = ds.Tables[0].Rows[0][0].ToString();
                this.textBox5.Text = ds.Tables[0].Rows[0][2].ToString();
                this.textBox6.Text = ds.Tables[0].Rows[0][3].ToString();
                this.textBox7.Text = ds.Tables[0].Rows[0][4].ToString();
                this.textBox8.Text = ds.Tables[0].Rows[0][5].ToString();
                this.textBox9.Text = ds.Tables[0].Rows[0][6].ToString();
                this.textBox10.Text = ds.Tables[0].Rows[0][7].ToString();

                i = 0;
            }
            con.Close();

        }

        private void Save_Click(object sender, EventArgs e)
        {

            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=E:\\cse projects\\Coaching Center\\Insert_Student_Information\\Student_Information.mdb";
            con.Open();
            string sql;
            sql = "insert into Student_Data values('" + this.textBox4.Text + "','" + this.textBox3.Text + "','" + this.textBox5.Text + "','" + this.textBox6.Text + "','" + this.textBox7.Text + "','" + this.textBox8.Text + "','" + this.textBox9.Text + "','" + this.textBox10.Text + "')";
            MessageBox.Show(sql);
            com = new OleDbCommand(sql, con);
            com.ExecuteNonQuery();
            con.Close();
            this.New.Enabled = true;
            i = ds.Tables[0].Rows.Count - 1;

        }

        private void Delete_Click(object sender, EventArgs e)
        {
            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=E:\\cse projects\\Coaching Center\\Insert_Student_Information\\Student_Information.mdb";
            con.Open();
            string sql;
            sql = "delete from Student_Data where ID='" + this.textBox2.Text + "'";
            MessageBox.Show(sql);

            com = new OleDbCommand(sql, con);
            com.ExecuteNonQuery();
            con.Close();
            Form1_Load(sender, e);

        }

        private void Update_Click(object sender, EventArgs e)
        {
            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=E:\\cse projects\\Coaching Center\\Insert_Student_Information\\Student_Information.mdb";
            con.Open();
            string sql;

            sql = "update Student_Data set Student_Name='" + this.textBox3.Text + "',Course='" + this.textBox5.Text + "',Father_Name='" + this.textBox6.Text + "',Current_Adress='" + this.textBox7.Text + "',Student_Phone_No='" + this.textBox8.Text + "',Father_Phone_NO='" + this.textBox9.Text + "',Email_ID='" + this.textBox10.Text + "' where ID='" + this.textBox2.Text + "'";
            MessageBox.Show(sql);
            com = new OleDbCommand(sql, con);
            com.ExecuteNonQuery();
            con.Close();
            Form1_Load(sender, e);
 
        }

        private void Refresh_Click(object sender, EventArgs e)
        {
            Form1_Load(sender, e);
        }

        private void Search_Click(object sender, EventArgs e)
        {
            this.textBox4.Enabled = false;
            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=E:\\cse projects\\Coaching Center\\Insert_Student_Information\\Student_Information.mdb";
            con.Open();
            com = new OleDbCommand("select * from Student_Data where ID='" + this.textBox2.Text + "'", con);
            da = new OleDbDataAdapter(com);
            ds = new DataSet();
            da.Fill(ds);
            if (ds.Tables[0].Rows.Count > 0)
            {
                this.textBox3.Text = ds.Tables[0].Rows[0][1].ToString();
                this.textBox4.Text = ds.Tables[0].Rows[0][0].ToString();
                this.textBox5.Text = ds.Tables[0].Rows[0][2].ToString();
                this.textBox6.Text = ds.Tables[0].Rows[0][3].ToString();
                this.textBox7.Text = ds.Tables[0].Rows[0][4].ToString();
                this.textBox8.Text = ds.Tables[0].Rows[0][5].ToString();
                this.textBox9.Text = ds.Tables[0].Rows[0][6].ToString();
                this.textBox10.Text = ds.Tables[0].Rows[0][7].ToString();

            }
            else
                MessageBox.Show("Record not found");
            con.Close();
  
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {
            OpenFileDialog fd = new OpenFileDialog();

        }

        private void Insert_Click(object sender, EventArgs e)
        {

        }
    }
}
