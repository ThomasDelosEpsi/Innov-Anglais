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
        string token;
        public Acceuil(string token)
        {
            this.token = token;
            InitializeComponent();
        }

        private void userToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Form2 f2 = new Form2(this.token);
            f2.Show();
            this.Hide();

        }

        private void vocabularyToolStripMenuItem_Click(object sender, EventArgs e)
        {
            AdminVoc adminVoc= new AdminVoc(this.token);
            adminVoc.Show();
            this.Hide();
        }

        private void testToolStripMenuItem_Click(object sender, EventArgs e)
        {
            test test = new test(this.token);
            test.Show();
            this.Hide();
        }

        private void companyToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Entreprise entreprise = new Entreprise(this.token);
            entreprise.Show();
            this.Hide();
        }
    }
}
