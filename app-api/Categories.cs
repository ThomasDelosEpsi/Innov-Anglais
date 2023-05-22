using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Text.Json.Serialization;
using System.Threading.Tasks;

namespace app_api
{
    public class Categories
    {
        [JsonProperty("@id")]
        public string idInAPI { get; set; }
        [JsonPropertyName("name_category")]
        public string  name_category { get; set; }
        public override string ToString()
        {
            return this.name_category;
        }
    }

    public class ListCat
    {
        [JsonProperty("hydra:member")]

        public List<Categories> categorie { get; set; }

    }


}
