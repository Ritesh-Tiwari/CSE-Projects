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
    public partial class Digital_storage : Form
    {
        public Digital_storage()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            double mb, kb, tb, gb, b;
            mb = Convert.ToInt32(textBox1.Text);
            kb = mb * 1024;
            gb = mb / 1024;
            tb = mb / (1024 * 1024);
            b = mb * 1024 * 1024;
            textBox2.Text = kb.ToString();
            textBox3.Text =gb.ToString();
            textBox4.Text = tb.ToString();
            textBox5.Text = b.ToString();
           
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Close();

        }
    }
}
