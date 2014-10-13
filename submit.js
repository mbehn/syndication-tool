var googleSearchUrl = "https://www.google.com/search?";
var submit = function() {
    var brand = document.getElementById("brand").value;
    var retailer = document.getElementById("retailer").value;
    var productsOnly = document.getElementById("product-checkbox").checked;
    if (brand == "") {
        window.open(googleSearchUrl + "q=site:" + retailer + " intext:\"reviewed at\"")
    }
    else if (productsOnly == true) {
    	window.open(googleSearchUrl + "q=site:" + retailer + " intitle:" + brand);
    }
    else {
        window.open(googleSearchUrl + "q=site:" + retailer + " intitle:" + brand + "+intext:\"reviewed at\"");
    }

};