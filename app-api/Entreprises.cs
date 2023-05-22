using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Text.Json.Serialization;
using System.Threading.Tasks;

namespace app_api
{
    public class Entreprises
    {
        [JsonPropertyName("name_company")]
        public string name_company { get; set; }

        [JsonPropertyName("phone_company")]
        public string phone_company { get; set; }

        [JsonPropertyName("mail_company")]
        public string mail_company { get; set; }
    }

    public class ListEntre
    {
        [JsonProperty("hydra:member")]

        public List<Entreprises> entreprise { get; set; }

    }
}
