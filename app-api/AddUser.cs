using Newtonsoft.Json;
using RestSharp;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Runtime.CompilerServices;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace app_api
{
    public partial class AddUser : Form
    {
        string token;

        public AddUser(string token)
        {
            this.token = token;
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Form2 form2 = new Form2(this.token);
            form2.Show();
            this.Hide();
        }

        private async void button2_Click(object sender, EventArgs e)
        {
            using (HttpClient client = new HttpClient())
            {
                try
                {
                    string uri2 = $"https://s4-8023.nuage-peda.fr/Innov_Anglais/public/api/users";
                    string[] role = { "ROLE_USER" };
                    int sub;
                    bool sexe;
                    if (comboBox1.Text == "Mensuel")
                    {
                        sub = 100;
                    } else if (comboBox1.Text == "Trimestriel")
                    {
                        sub = 101;
                    } else
                    {
                        sub = 102;
                    }
                    //MessageBox.Show(sub.ToString());
                    if (comboBox2.Text == "Homme")
                    {
                        sexe = true;
                    } else
                    {
                        sexe = false;
                    }
                    //MessageBox.Show(sexe.ToString());
                    string json = JsonConvert.SerializeObject(
                        new
                        {
                            email = textBox1.Text,
                            roles = "ROLE_USER",
                            password = textBox2.Text,
                            firstname = textBox4.Text,
                            lastname = textBox3.Text,
                            phone = textBox5.Text,
                            sex = sexe,
                            company = "/Innov-Anglais/public/api/companies/378",
                            subscribe = "/Innov-Anglais/public/api/subscribes/" + sub,
                            paymentMethod = 1
                        });
                    HttpContent content = new StringContent(json, Encoding.UTF8, "application/ld+json");
                    HttpResponseMessage response = await client.PostAsync(uri2, content);
                    if (response.IsSuccessStatusCode)
                    {
                        MessageBox.Show("Utilisateur ajouté");
                    }
                    else
                    {
                        MessageBox.Show($"Error: {response.StatusCode}");
                        MessageBox.Show($"Error: {response.RequestMessage}");
                    }
                }
                catch (Exception ex)
                {
                    MessageBox.Show(ex.Message);
                }
            }
        }
    }
}