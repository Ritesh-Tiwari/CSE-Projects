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
    public partial class All_Students_records : Form
    {
        public All_Students_records()
        {
            InitializeComponent();
        }

        private void All_Students_records_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'databaseDataSet.Students_records' table. You can move, or remove it, as needed.
            this.students_recordsTableAdapter.Fill(this.databaseDataSet.Students_records);

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }
    }
}
