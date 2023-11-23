using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace project
{
    public partial class main_form : Form
    {
        public main_form()
        {
            InitializeComponent();
        }

#pragma warning disable IDE1006 // Naming Styles
        private void newStudentToolStripMenuItem_Click(object sender, EventArgs e)
#pragma warning restore IDE1006 // Naming Styles
        {
            insert_student_information newStudent = new insert_student_information();
            newStudent.Show();
          
        }

       
        private void updateRecordToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Update_Students_Records usr = new Update_Students_Records();
            usr.Show();
           

        }

        private void newRecordsToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Inset_Teacher_Records itr = new Inset_Teacher_Records();
            itr.Show();
            
        }

        private void updateRecordsToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Update_Teacher_Records utr = new Update_Teacher_Records();
            utr.Show();
            

        }

        private void allRecordsToolStripMenuItem1_Click(object sender, EventArgs e)
        {
            Form3 frn = new Form3();
            frn.Show();
        }

        private void logOutToolStripMenuItem1_Click(object sender, EventArgs e)
        {

            Close();
           
        }

        private void adminDToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Admin_Records ar = new Admin_Records();
            ar.Show();
            

        }

        private void allRecordsToolStripMenuItem_Click(object sender, EventArgs e)
        {
            All_Students_records all_Students_Records = new All_Students_records();
            all_Students_Records.Show();

        }

        private void logOutToolStripMenuItem_Click(object sender, EventArgs e)
        {

        }
    }
}
