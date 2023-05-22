﻿using Newtonsoft.Json;
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
    public partial class AdminVoc : Form
    {
        string token;
        public AdminVoc(string token)
        {
            this.token = token;
            InitializeComponent();
        }

        private async void button1_Click(object sender, EventArgs e)
        {
            using (HttpClient client = new HttpClient())
            {
                try
                {
                    string uri = $"https://s4-8001.nuage-peda.fr/Innov-Anglais/public/api/vocabularies";
                    //client.DefaultRequestHeaders.Authorization = new AuthenticationHeaderValue("Bearer", "");
                    HttpResponseMessage response = await client.GetAsync(uri);
                    if (response.IsSuccessStatusCode)
                    {
                        string json = await response.Content.ReadAsStringAsync();
                        ListVoc voc = JsonConvert.DeserializeObject<ListVoc>(json);
                        foreach (Vocabularies vocabularie in voc.vocabulaire)
                        {
                            label3.Text+=vocabularie.name_vocabulary + "\n";
                            label4.Text += vocabularie.translate_word + "\n";
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

        private void button2_Click(object sender, EventArgs e)
        {
            Acceuil acceuil = new Acceuil(this.token);
            acceuil.Show();
            this.Hide();
        }

        private async void AdminVoc_Load(object sender, EventArgs e)
        {
            using (HttpClient client1 = new HttpClient())
            {
                try
                {
                    string uri1 = $"https://s4-8023.nuage-peda.fr/Innov-Anglais/public/api/categories";
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

        private async void button3_Click(object sender, EventArgs e)
        {
            using (HttpClient client2 = new HttpClient())
            {
                try
                {
                    string uri2 = $"https://s4-8023.nuage-peda.fr/Innov-Anglais/public/api/vocabularies";

                    //client1.DefaultRequestHeaders.Authorization = new AuthenticationHeaderValue("Bearer", "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2ODMxMDA4MTAsImV4cCI6MTY4MzEwNDQxMCwicm9sZXMiOlsiUk9MRV9VU0VSIl0sInVzZXJuYW1lIjoibWFydGluZS5jYXJwZW50aWVyQG5vb3MuZnIifQ.BIcZc3HCdziBKuumvw2oUZKCgfKgYp4uUuBR8sVYR2PMUufQcwJ22Uc88M0yV7TCkJLgd3btUMrdD-BzGmcGgaNBnZUg3vg-V74ijbig93yTfg4RxqNGqw0su5N6sXLhezry8xKViwrvOUXSQo9AFyVdzPCg1L_cwLMzKrVvNCQ2zuEQZ9lAxbS_jFX40n940ox_f3QdVSas7af5sNJowqIeF0N6rQ8AQjZUkSjEhLCIvdZ4C5-H-BlJJOLKE5wKuhQVxHdL5X14uNmn_G-wyQixZDHGD_MthfA1cJsHOYibb1icU4xzzsRKQcLjURLQ7jhSWnGNUuNXBVM4z16_VA");
                    string[] non = { };
                    Categories Cat = (Categories)comboBox1.SelectedItem;
                    string json = JsonConvert.SerializeObject(
                        new
                        {
                            category = Cat.idInAPI,
                            test = non,
                            nameVocabulary = textBox1.Text,
                            translateWord = textBox2.Text,
                        }); ;
                    HttpContent content = new StringContent(json, Encoding.UTF8, "application/ld+json");
                    HttpResponseMessage response = await client2.PostAsync(uri2, content);
                    if (response.IsSuccessStatusCode)
                    {
                        MessageBox.Show("Mot ajouté");
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

