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

namespace app_api
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private async void button1_Click(object sender, EventArgs e)
        {
            using (HttpClient client = new HttpClient())
            {
                try
                {
                    string uri = $"https://s4-8001.nuage-peda.fr/Innov-Anglais/public/api/users";
                    client.DefaultRequestHeaders.Authorization = new AuthenticationHeaderValue("Bearer", "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2ODI2NzczMjksImV4cCI6MTY4MjY4MDkyOSwicm9sZXMiOlsiUk9MRV9BRE1JTiIsIlJPTEVfVVNFUiJdLCJ1c2VybmFtZSI6ImNoYW50YWwuY2hhdXZldEBub29zLmZyIn0.7Ckbqwhn67rtTi9eBtUiT2ootlk1jTX_hEc6qLWPuKZrbGK2QauSqEitPyVpQxofyy-CZHJDW84K0wStLe4CkrVEHZvVgh7fsy-MANnivTGDYu1DYKdrZt80Li-tof2nOFdE0qr4Hx540fy2dRwnTU4yyDZ5-wA2T_sOCBAqVBdgFa_fPjY5amSJaagQJRjZvfmQP2xAmciI3b7ob5sQa09z9ln_TxLX5cjWPqto9_jp2CCFzt2SPyI184khgiqGgfUWGM5RGzOry7buFlhc3P9MOTyXk9g0pfdA1v8Ufc_7cmlqNfVj8J9hIS6W7hi7oQ21KH0Ebks82m1Dsr6d-g");
                    HttpResponseMessage response = await client.GetAsync(uri);
                    if (response.IsSuccessStatusCode)
                    {
                        string json = await response.Content.ReadAsStringAsync();
                        ListUser user = JsonConvert.DeserializeObject<ListUser>(json);
                        foreach (Users utilisateur in user.utilisateur)
                        {
                            MessageBox.Show(utilisateur.firstname);
                        }
                    } else
                    {
                        MessageBox.Show($"Error: {response.StatusCode}");
                    }
                }
                catch(Exception ex)
                {
                    MessageBox.Show(ex.Message);
                }
            }
        }
    }
}