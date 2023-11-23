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
    public partial class Temprature : Form
    {
        double celsius, farh, kel;
        public Temprature()
        {
            InitializeComponent();
        }

        private void Temprature_Load(object sender, EventArgs e)
        {

        }

        private void TextBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void Button1_Click(object sender, EventArgs e)
        {
          //  double celsius, farh,kel;
            if (textBox1.Text != "")
           
            {
                

                celsius = Convert.ToDouble(textBox1.Text);
                farh = (celsius * 9 / 5) + 32;
                kel = celsius + 273.15;
                textBox2.Text = farh.ToString();
                textBox3.Text = kel.ToString();
            }
              //if (textBox2.Text != "")
              //  {
              //  textBox1.Text = "";
              //  textBox3.Text = "";

              //      farh = Convert.ToDouble(textBox2.Text);
              //      celsius = (farh - 32) * 5 / 9;
              //      kel = (farh - 32) * 5 / 9 + 273.15;
              //      textBox1.Text = celsius.ToString();
              //      textBox3.Text = kel.ToString();
              //  }
            else
                {
                    MessageBox.Show("Enter value..........");
                }

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void textBox3_TextChanged(object sender, EventArgs e)
        {

        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void Button2_Click(object sender, EventArgs e)
        {
            Close();

        }

        private void TextBox2_TextChanged(object sender, EventArgs e)
        {
            //textBox2.Text = 0.ToString();
            //farh = Convert.ToDouble(textBox2.Text);
            //celsius = (farh - 32) * 5 / 9;
            //kel = (farh - 32) * 5 / 9 + 273.15;
            //textBox1.Text = celsius.ToString();
            //textBox3.Text = kel.ToString();
        }
    }
}
