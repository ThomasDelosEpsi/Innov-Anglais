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

namespace app_api
{
    public class Users
    {
        public string firstname { get; set; }
        public string lastname { get; set; }
        public string phone { get; set; }
        public bool sex { get; set; }
        public int payment_methode { get; set; }
        public string company { get; set; }
        public string type_subscribe { get; set; }
        public int price { get; set; }
    }
}
