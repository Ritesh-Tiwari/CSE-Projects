using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Diagnostics;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Age_Calculater
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Button1_Click(object sender, EventArgs e)
        {
            string ans;
            DateTime startdate = dateTimePicker1.Value;
            DateTime enddate = DateTime.Now.Date;
            ans = Calcage(startdate, enddate).ToString();
            //  MessageBox.Show("Your Current Year Age is \n" + ans + " Year", MessageBoxIcon.Information.ToString());

            Calculated_Age calculated_Age = new Calculated_Age(ans + " year");
            calculated_Age.Show();
        }
        public long Calcage(System.DateTime Startdate, System.DateTime EndDate)
        {
            long age = 0;
            System.TimeSpan ts = new TimeSpan(EndDate.Ticks- Startdate.Ticks );
            age = (long)(ts.Days / 365);
            return age;
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void Label3_Click(object sender, EventArgs e)
        {

            if (MessageBox.Show("Do You want to close ", "close", MessageBoxButtons.YesNo)==DialogResult.Yes )
            {
                Close();
            }
        }

        private void Button2_Click(object sender, EventArgs e)
        {


            if (MessageBox.Show("Do You want to close ", "close", MessageBoxButtons.YesNo) == DialogResult.Yes)
            {
                Close();
            }

        }
    }
}
