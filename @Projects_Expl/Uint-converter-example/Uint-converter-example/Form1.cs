using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Uint_converter_example
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Label1_Click(object sender, EventArgs e)
        {

        }
        
        private void Label2_Click(object sender, EventArgs e)
        {
            Temprature temprature = new Temprature();
            temprature.Show();

        }

        private void Label3_Click(object sender, EventArgs e)
        {
            Time time = new Time();
            time.Show();

        }

        private void Label4_Click(object sender, EventArgs e)
        {
            Digital_storage digital_Storage = new Digital_storage();
            digital_Storage.Show();
        }

        private void Label5_Click(object sender, EventArgs e)
        {
            Mass mass = new Mass();
            mass.Show();

        }

        private void Label6_Click(object sender, EventArgs e)
        {
            Mass mass = new Mass();
            mass.Show();
        }

        private void label7_Click(object sender, EventArgs e)
        {
            Pressure p = new Pressure();
            p.Show();

        }
    }
}
