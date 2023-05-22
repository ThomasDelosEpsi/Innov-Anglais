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
using System.Collections.ObjectModel;
using System.Net.Http;
using System.Net.Http.Headers;
using System.Runtime;
using static System.Windows.Forms.VisualStyles.VisualStyleElement;

namespace app_api
{
    public partial class Entreprise : Form
    {
        public Entreprise()
        {
            InitializeComponent();
        }

        private async void button1_Click(object sender, EventArgs e)
        {

            using (HttpClient client = new HttpClient())
            {
                try
                {
                    string uri = $"https://s4-8023.nuage-peda.fr/Innov_Anglais/public/api/companies";
                    //client.DefaultRequestHeaders.Authorization = new AuthenticationHeaderValue("Bearer", "");
                    HttpResponseMessage response = await client.GetAsync(uri);
                    if (response.IsSuccessStatusCode)
                    {
                        string json = await response.Content.ReadAsStringAsync();
                        ListEntre ent = JsonConvert.DeserializeObject<ListEntre>(json);
                        foreach (Entreprises entreprise in ent.entreprise)
                        {
                            label1.Text += entreprise.mail_company + "\n";
                            label2.Text += entreprise.phone_company + "\n";
                            label3.Text += entreprise.mail_company + "\n";
                        }
                    }
                    else
                    {
                        MessageBox.Show($"Error: {response.StatusCode}");
                    }
                }
                catch (Exception ex)
                {
                    MessageBox.Show(ex.Message);
                }
            }

        }

        private async void button2_Click(object sender, EventArgs e)
        {
            using (HttpClient client2 = new HttpClient())
            {
                try
                {
                    string uri2 = $"https://s4-8023.nuage-peda.fr/Innov_Anglais/public/api/companies";

                    //client1.DefaultRequestHeaders.Authorization = new AuthenticationHeaderValue("Bearer", "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2ODMxMDA4MTAsImV4cCI6MTY4MzEwNDQxMCwicm9sZXMiOlsiUk9MRV9VU0VSIl0sInVzZXJuYW1lIjoibWFydGluZS5jYXJwZW50aWVyQG5vb3MuZnIifQ.BIcZc3HCdziBKuumvw2oUZKCgfKgYp4uUuBR8sVYR2PMUufQcwJ22Uc88M0yV7TCkJLgd3btUMrdD-BzGmcGgaNBnZUg3vg-V74ijbig93yTfg4RxqNGqw0su5N6sXLhezry8xKViwrvOUXSQo9AFyVdzPCg1L_cwLMzKrVvNCQ2zuEQZ9lAxbS_jFX40n940ox_f3QdVSas7af5sNJowqIeF0N6rQ8AQjZUkSjEhLCIvdZ4C5-H-BlJJOLKE5wKuhQVxHdL5X14uNmn_G-wyQixZDHGD_MthfA1cJsHOYibb1icU4xzzsRKQcLjURLQ7jhSWnGNUuNXBVM4z16_VA");
                    string[] non = { };
                    string[] users = { };
                    string[] Users = { };
                    string json = JsonConvert.SerializeObject(
                        new
                        {
                            test = non,
                            User = Users,
                            nameCompany = textBox1.Text,
                            phoneCompany = textBox2.Text,
                            mailCompany = textBox3.Text,
                            user = users
                        }); ;
                    HttpContent content = new StringContent(json, Encoding.UTF8, "application/ld+json");
                    HttpResponseMessage response = await client2.PostAsync(uri2, content);
                    if (response.IsSuccessStatusCode)
                    {
                        MessageBox.Show("Entreprise ajoutée");
                    }
                    else
                    {
                        MessageBox.Show($"Error: {response.StatusCode}");
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
