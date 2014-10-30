var googleSearchUrl = "https://www.google.com/search?";
var submit = function() {
    var brand = document.getElementById("brand").value;
    var retailer = document.getElementById("retailer").value;
    var productsOnly = document.getElementById("product-checkbox").checked;
    if (brand === "") {
        window.open(googleSearchUrl + "q=site:" + retailer + " intext:\"reviewed at\"");
    } else if (productsOnly === true) {
        window.open(googleSearchUrl + "q=site:" + retailer + " intitle:" + brand);
    } else {
        window.open(googleSearchUrl + "q=site:" + retailer + " intitle:" + brand + "+intext:\"reviewed at\"");
    }

};

// var submitSite = function() {
//     var siteSearchUrl;
//     var brand = document.getElementById("brand-site").value;
//     var retailer = document.getElementById("retailer-site").value;
//     switch(retailer) {
//     case toysrus:
//         siteSearchUrl = "http://www.toysrus.com/search/index.jsp?kw=" + brand;
//         break;
//     }
//     window.open(siteSearchUrl);
// };