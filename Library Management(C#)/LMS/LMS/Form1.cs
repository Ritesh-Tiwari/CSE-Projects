using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace LMS
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
        
        private void button1_Click_1(object sender, EventArgs e)
        {
            if (this.textBox1.Text.Trim() == "" && this.textBox2.Text.Trim() == "")
            {
                MessageBox.Show("Enter User Name and Password !");

            }
           else if (this.textBox1.Text.Trim() == "Admin" && this.textBox2.Text.Trim() == "Admin")
                {

                    Main frm = new Main();
                    frm.Show();
                }
            
            else if (this.textBox2.Text.Trim() == "2001" && this.textBox1.Text.Trim() == "Ritesh")
            {
                Issue iss = new Issue();
                iss.Show();

            }

            else
                MessageBox.Show("User Name And Password wrong...........");
            
            
        }

        private void button2_Click_1(object sender, EventArgs e)
        {
            Close();
        }
    }
}
