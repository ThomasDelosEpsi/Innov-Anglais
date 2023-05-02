using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Text.Json.Serialization;
using System.Threading.Tasks;

namespace app_api
{
    public class Token
    {
        public string email { get; set; }
        public string password { get; set; }
    }

    public class TokenResponse
    {
        [JsonPropertyName("token")]
        public string token { get; set; }
    }
}
