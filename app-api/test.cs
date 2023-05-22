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

namespace app_api
{
    public partial class test : Form
    {
        string token;
        public test(string token)
        {
            InitializeComponent();
            this.token = token;
        }

        private async void button1_Click(object sender, EventArgs e)
        {
            using (HttpClient client1 = new HttpClient())
            {
                try
                {
                    string uri1 = $"https://s4-8001.nuage-peda.fr/Innov-Anglais/public/api/categories";
                    //client1.DefaultRequestHeaders.Authorization = new AuthenticationHeaderValue("Bearer", "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2ODMxMDA4MTAsImV4cCI6MTY4MzEwNDQxMCwicm9sZXMiOlsiUk9MRV9VU0VSIl0sInVzZXJuYW1lIjoibWFydGluZS5jYXJwZW50aWVyQG5vb3MuZnIifQ.BIcZc3HCdziBKuumvw2oUZKCgfKgYp4uUuBR8sVYR2PMUufQcwJ22Uc88M0yV7TCkJLgd3btUMrdD-BzGmcGgaNBnZUg3vg-V74ijbig93yTfg4RxqNGqw0su5N6sXLhezry8xKViwrvOUXSQo9AFyVdzPCg1L_cwLMzKrVvNCQ2zuEQZ9lAxbS_jFX40n940ox_f3QdVSas7af5sNJowqIeF0N6rQ8AQjZUkSjEhLCIvdZ4C5-H-BlJJOLKE5wKuhQVxHdL5X14uNmn_G-wyQixZDHGD_MthfA1cJsHOYibb1icU4xzzsRKQcLjURLQ7jhSWnGNUuNXBVM4z16_VA");
                    HttpResponseMessage response = await client1.GetAsync(uri1);
                    if (response.IsSuccessStatusCode)
                    {
                        string json = await response.Content.ReadAsStringAsync();
                        ListCat cat = JsonConvert.DeserializeObject<ListCat>(json);
                        foreach (Categories categorie in cat.categorie)
                        {
                            comboBox1.Items.Add(categorie);

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

        private void testToolStripMenuItem_Click(object sender, EventArgs e)
        {
            AdminVoc ad = new AdminVoc(this.token);
            ad.Show();

        }
    }
}
