using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Text.Json.Serialization;
using System.Threading.Tasks;

namespace app_api
{
    public class Vocabularies
    {
        [JsonPropertyName("name_vocabulary")]
        public string name_vocabulary { get; set; }

        [JsonPropertyName("translate_word")]
        public string translate_word { get; set; }



    }

    public class ListVoc
    {
        [JsonProperty("hydra:member")]

        public List<Vocabularies> vocabulaire { get; set; }

    }
}
