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
    public partial class Issue_book : Form
    {

        OleDbConnection con = new OleDbConnection();
        OleDbCommand com;
        OleDbDataAdapter da;
        DataSet ds;
        public Issue_book()
        {
            InitializeComponent();
        }

        private void Purchased_book_Load(object sender, EventArgs e)
        {
            
            con.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\\Ritesh\\LMS\\Issue.mdb";
            con.Open();
            com = new OleDbCommand("select *from Table2", con);
            da = new OleDbDataAdapter(com);
            ds = new DataSet("r1");
            da.Fill(ds, "r1");
            this.dataGridView1.DataSource = ds;
            this.dataGridView1.DataMember = "r1";
            con.Close();
        
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Close();
            Main mn = new Main();
            mn.Show();

        }
    }
}
