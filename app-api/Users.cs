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
using Newtonsoft.Json;
using System.Text.Json.Serialization;

namespace app_api
{
    public class Users
    {
        [JsonPropertyName("firstname")]
        public string firstname { get; set; }

        [JsonPropertyName("lastname")]
        public string lastname { get; set; }

        [JsonPropertyName("phone")]
        public string phone { get; set; }

        [JsonPropertyName("sex")]
        public bool sex { get; set; }

        [JsonPropertyName("payment_method")]
        public int payment_methode { get; set; }

        [JsonPropertyName("company")]
        public string company { get; set; }
    }

    public class ListUser {
        [JsonProperty("hydra:member")]
        
        public List<Users> utilisateur { get; set; }

    }
}
