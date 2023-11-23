using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Age_Calculater
{
    public partial class Calculated_Age : Form
    {
        public Calculated_Age(string Age)
        {
            InitializeComponent();
            this.label3.Text = Age;
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void Calculated_Age_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            Close();
        }
    }
}
