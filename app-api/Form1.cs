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
                    client.DefaultRequestHeaders.Authorization = new AuthenticationHeaderValue("Bearer", "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2ODI0NDE1ODQsImV4cCI6MTY4MjQ0NTE4NCwicm9sZXMiOlsiUk9MRV9BRE1JTiIsIlJPTEVfVVNFUiJdLCJ1c2VybmFtZSI6ImNoYW50YWwuY2hhdXZldEBub29zLmZyIn0.7j_RK9kU-x5oMxHJtfbg3gsmxyBzk2FGRBLtVbsB5-Osx71M8ikGB3pOHHwIYhKaisMvrBFVmY8c-vTZImqmN7bDV9pUbGovccOUG0DtqDyAWaooVxscu7XZqL3iXRXL8wu-qiiUvSdKCkGwGH3wf68Z7hhamFJ360sDyxZJl3eaObeIIoE6cFn8di9g6MkTSdXvMnUC2OXl2zSn51sudU_BEMX3gaWahrEY86hvykh3hhIy7pHci4wRwBXmI2pHtSpJ4rxFdMHGnTQps9ZVKQI7a348DEeghJ2kh5-TozhOL7axTh-_s49gribAn7HQ3FpxZHoAiQklZNgODyu33g");
                    HttpResponseMessage response = await client.GetAsync(uri);
                    if (response.IsSuccessStatusCode)
                    {
                        string json = await response.Content.ReadAsStringAsync();
                        var user = JsonConvert.DeserializeObject<Users>(json);
                        //Users infoUser = new Users(user);
                        MessageBox.Show(user.firstname);
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