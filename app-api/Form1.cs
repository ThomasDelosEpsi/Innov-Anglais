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
using System.Net.Http.Json;
using System.Runtime;
using System.Text.Json.Nodes;
using Newtonsoft.Json.Linq;
using System.Threading.Tasks;
using static System.Windows.Forms.DataFormats;
using System.Security.Cryptography;
using RestSharp;
using RestSharp.Authenticators;
using System.Windows.Forms;
using System;
using System.Collections.Generic;
//using System.Text.Json;

namespace app_api
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private async void button2_Click(object sender, EventArgs e)
        {
            if (textBox1.Text != "" && textBox2.Text != "")
            {
                try
                {

                    var client = new RestClient("https://s4-8001.nuage-peda.fr/Innov-Anglais/public/api/");
                    var request = new RestRequest("authentication_token", Method.Post);
                    request.AddJsonBody(new { email = textBox1.Text, password = textBox2.Text });
                    var response = client.ExecuteAsync(request);
                    string rawResponse = response.Result.Content;

                    var token = JsonConvert.DeserializeObject<Dictionary<string, object>>(rawResponse)["token"].ToString();

                    //MessageBox.Show(token);

                    Form2 form2 = new Form2(token);
                    this.Hide();
                    form2.Show();

                }
                catch (Exception ex)
                {
                    MessageBox.Show("Erreur d'authentification");
                }
            }
            else
            {
                MessageBox.Show("Veuillez entrer votre email et votre mot de passe");
            }    
        }
    }
}