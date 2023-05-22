using Newtonsoft.Json.Linq;
using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Net.Http.Headers;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Reflection.Emit;

namespace app_api
{
    public partial class Form2 : Form
    {
        string token;
        public Form2(string token)
        {
            this.token = token;
            InitializeComponent();
        }

        private async void button1_Click(object sender, EventArgs e)
        {
            label1.Text = "Nom";
            label2.Text = "Prénom";
            label3.Text = "Sexe";
            label4.Text = "Téléphone";
            label5.Text = "Type d'abonnement";
            label6.Text = "Prix de l'abonnement";
            using (HttpClient client = new HttpClient())
            {
                string uri = $"https://s4-8001.nuage-peda.fr/Innov-Anglais/public/api/users";
                client.DefaultRequestHeaders.Authorization = new AuthenticationHeaderValue("Bearer", token);
                HttpResponseMessage response = await client.GetAsync(uri);
                if (response.IsSuccessStatusCode)
                {
                    string json = await response.Content.ReadAsStringAsync();
                    JObject user = JsonConvert.DeserializeObject<JObject>(json);
                    JArray listUsers = (JArray)user["hydra:member"];
                    foreach (JObject utilisateur in listUsers)
                    {
                        label1.Text += "\n" + utilisateur["firstname"];
                        label2.Text += "\n" + utilisateur["lastname"];
                        if ((string)utilisateur["sex"] == "false")
                        {
                            label3.Text += "\nHomme";
                        }
                        else
                        {
                            label3.Text += "\nFemme";
                        }
                        label4.Text += "\n" + utilisateur["phone"];
                        label5.Text += "\n" + (string)utilisateur["subscribe"]["type_subscribe"];
                        label6.Text += "\n" + (string)utilisateur["subscribe"]["price"];
                    }
                }
                else
                {
                    MessageBox.Show($"Error: {response.StatusCode}");
                }
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            AddUser addUser = new AddUser(this.token);
            addUser.Show();
            this.Hide();
        }
    }
}
