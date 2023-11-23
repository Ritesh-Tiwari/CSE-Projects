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
    public partial class Pressure : Form
    {
        public Pressure()
        {
            InitializeComponent();
        }

        private void Pressure_Load(object sender, EventArgs e)
        {

        }

        private void Button1_Click(object sender, EventArgs e)
        {
            double at, bar, pascal, torr;
            at = Convert.ToDouble(textBox1.Text);
            bar = at * 1.013;
            pascal = at * 101325;
            torr = at * 760;
            textBox2.Text = bar.ToString();
            textBox3.Text = pascal.ToString();
            textBox4.Text = torr.ToString();
            

        }

        private void button2_Click(object sender, EventArgs e)
        {
            Close();
        }
    }
}
