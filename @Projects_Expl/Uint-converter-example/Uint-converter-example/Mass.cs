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
    public partial class Mass : Form
    {
        public Mass()
        {
            InitializeComponent();
        }

        private void Mass_Load(object sender, EventArgs e)
        {

        }

        private void Button1_Click(object sender, EventArgs e)
        {
            double kg, g, mg, t, mt;
            kg = Convert.ToDouble(textBox1.Text);
            g = kg * 1000;
            mg = kg * 1000 * 1000;
            t = kg / 1000;
            mt = kg / (1000 * 1000);
            textBox2.Text = g.ToString();
            textBox3.Text = mg.ToString();
            textBox4.Text = t.ToString();
            textBox5.Text = mt.ToString();
        }

        private void Button2_Click(object sender, EventArgs e)
        {
            Close();

        }
    }
}
