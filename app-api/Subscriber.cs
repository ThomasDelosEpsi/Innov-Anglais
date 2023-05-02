using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Text.Json.Serialization;
using System.Threading.Tasks;

namespace app_api
{
    public class Subscriber
    {
        [JsonPropertyName("type_subscribe")]
        public string type { get; set; }

        [JsonPropertyName("price")]
        public string price { get; set; }

        public override string ToString()
        {
            return type+" " + price;
        }
    }

    public class ListSubscribe
    {
        [JsonProperty("hydra:member")]

        public List<Subscriber> subscribe { get; set; }

    }
}
