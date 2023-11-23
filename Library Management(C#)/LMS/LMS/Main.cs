using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace LMS
{
    public partial class Main : Form
    {
        public Main()
        {
            InitializeComponent();
        }

        private void logOutToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Close();
            Form1 frm = new Form1();
            frm.Show();
        }

        private void viewUpdateToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Add_Books ab = new Add_Books();
            ab.Show();
        }

        private void addIDToolStripMenuItem_Click(object sender, EventArgs e)
        {
            User_ID id=new User_ID();
            id.Show();
        }

        private void viewUpdateToolStripMenuItem1_Click(object sender, EventArgs e)
        {
            View_Books vb = new View_Books();
            vb.Show();

        }

        private void viewAndUpdateIDToolStripMenuItem_Click(object sender, EventArgs e)
        {
            User_info uinfo = new User_info();
            uinfo.Show();

        }

        private void issueToolStripMenuItem_Click(object sender, EventArgs e)
        {

        }

        private void issueBooksToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Issue_book pbook = new Issue_book();
            pbook.Show();

        }

        private void reportToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Report rp = new Report();
            rp.Show();

        }

        private void Main_Load(object sender, EventArgs e)
        {

        }

        private void menuStrip2_ItemClicked(object sender, ToolStripItemClickedEventArgs e)
        {

        }

       
    }
}
