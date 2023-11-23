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
    public partial class Speed : Form
    {
        public Speed()
        {
            InitializeComponent();
        }

        private void Button1_Click(object sender, EventArgs e)
        {
            double mil, foot, merte, kilomerter;
            mil = Convert.ToDouble(textBox1.Text);
            foot = mil * 1.467;
            merte = mil / 2.237;
            kilomerter = mil * 1.609;
            textBox2.Text = foot.ToString();
            textBox3.Text = merte.ToString();
            textBox4.Text = kilomerter.ToString();

        }

        private void Button2_Click(object sender, EventArgs e)
        {
            Close();
        }
    }
}
