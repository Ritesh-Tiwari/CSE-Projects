using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace Insert_Student_Information
{
    public partial class Insert_Teacher_Informatiom : Form
    {
        public Insert_Teacher_Informatiom()
        {
            InitializeComponent();
        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void Insert_Teacher_Informatiom_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'student_InformationDataSet2.Teacher_Data' table. You can move, or remove it, as needed.
            this.teacher_DataTableAdapter.Fill(this.student_InformationDataSet2.Teacher_Data);
            // TODO: This line of code loads data into the 'student_InformationDataSet2.Teacher_Data' table. You can move, or remove it, as needed.
            this.teacher_DataTableAdapter.Fill(this.student_InformationDataSet2.Teacher_Data);
            // TODO: This line of code loads data into the 'student_InformationDataSet.Student_Data' table. You can move, or remove it, as needed.
            this.student_DataTableAdapter.Fill(this.student_InformationDataSet.Student_Data);

        }

    }
}
