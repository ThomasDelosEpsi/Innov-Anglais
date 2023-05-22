using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace app_api
{
    public partial class Acceuil : Form
    {
        public Acceuil()
        {
            InitializeComponent();
        }

        private void userToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Form2 f2 = new Form2();
            f2.Show();
            this.Hide();

        }

        private void vocabularyToolStripMenuItem_Click(object sender, EventArgs e)
        {
            AdminVoc adminVoc= new AdminVoc();
            adminVoc.Show();
            this.Hide();
        }

        private void testToolStripMenuItem_Click(object sender, EventArgs e)
        {
            test test = new test();
            test.Show();
            this.Hide();
        }

        private void companyToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Entreprise entreprise = new Entreprise();
            entreprise.Show();
            this.Hide();
        }
    }
}
