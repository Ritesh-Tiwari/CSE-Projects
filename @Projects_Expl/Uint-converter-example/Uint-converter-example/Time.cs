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
    public partial class Time : Form
    {
        public Time()
        {
            InitializeComponent();
        }

        private void Time_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            float h, m, s, ms, d;
            h = Convert.ToInt32(this.textBox1.Text);
            m = h * 60;
            s = h * 360;
            ms = h * (360 * 1000);
            d = h / 24;
            this.textBox2.Text = m.ToString();
            this.textBox3.Text = s.ToString();
            this.textBox4.Text = ms.ToString();
            this.textBox5.Text = d.ToString();
            
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Close();
        }
    }
}
