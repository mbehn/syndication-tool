<html>
    <head>
        <title>PR Search Tool</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
            <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
            <script src="submit.js"></script>
        </head>
        <body>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <div id="container">
                <div id="application-wrapper">
                    
                    <div id="application-search-tool-google">
                        <table cellspacing="10" id="search-tool" >
                            <tr colspan="5"><h2 id="application-title">PowerReviews Google Search Tool for Syndication</h2></tr>
                            <tr>&nbsp;</tr>
                            <tr>
                                <td>Brand</td>
                                <td class="spacer"></td>
                                <td>Retailer</td>
                                <td class="spacer"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="text" id="brand"></td>
                                <td class="spacer"></td>
                                <td>
                                    <select id="retailer">
                                        <option value="abt.com">ABT Electronics</option>
                                        <option value="adorama.com">Adorama</option>
                                        <option value="acehardware.com">Ace Hardware</option>
                                        <option value="beachaudio.com">Beach Audio</option>
                                        <option value="bjs.com">BJ's</option>
                                        <option value="btosports.com">BTO Sports</option>
                                        <option value="cpooutlets.com">CPO Outlets</option>
                                        <option value="dillards.com">Dillard's</option>
                                        <option value="gandermountain.com">Gander Mountain</option>
                                        <option value="hayneedle.com">hayneedle.com</option>
                                        <option value="lordandtaylor.com">Lord and Taylor</option>
                                        <option value="officesupply.com">officesupply.com</option>
                                        <option value="pcrichard.com">PC Richard</option>
                                        <option value="pgatoursuperstore.com">PGA Superstore</option>                                        
                                        <option value="radioshack.com">Radio Shack</option>
                                        <option value="rockcreek.com">Rock Creek</option>
                                        <option value="staples.com">Staples</option>
                                        <option value="toysrus.com">Toys-R-Us</option>
                                        <option value="toysrus.ca">Toys-R-Us Canada</option>
                                        <option value="ulta.com">Ulta</option>
                                    </select>
                                </td>
                                <td class="spacer"></td>
                                <td>
                                    <input type="checkbox" id="product-checkbox">
                                    <label>Product search only</label>                                  
                                </td>
                            </tr>
                            <tr>
                                <td id="submit" onclick="submit()">Search Google</td>
                                <td class="spacer"></td>
                                <td id="logo"></td>
                            </tr>
                        </table>
                    </div>                    
                    <!-- <div id="application-search-tool-site">                        
                        <table cellspacing="10" id="search-tool" >
                            <tr colspan="5"><h2>Search Retailer Sites</h2></tr>
                            <tr>
                                <td>Brand</td>
                                <td class="spacer"></td>
                                <td>Retailer</td>
                                <td class="spacer"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="text" id="brand-site"></td>
                                <td class="spacer"></td>
                                <td>
                                    <select id="retailer-site">
                                        <option value="bjs">BJ's</option>
                                        <option value="btosports">BTO Sports</option>
                                        <option value="cpooutlets">CPO Outlets</option>
                                        <option value="gandermountain">Gander Mountain</option>
                                        <option value="hayneedle">hayneedle.com</option>
                                        <option value="officesupply">officesupply.com</option>
                                        <option value="staples">Staples</option>
                                        <option value="toysrus">Toys-R-Us</option>
                                        <option value="toysrus">Toys-R-Us Canada</option>
                                        <option value="ulta">Ulta</option>
                                    </select>
                                </td>
                                <td class="spacer"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td id="submit-site" onclick="submitSite()">Search Sites</td>
                                <td class="spacer"></td>
                                <td id="logo"></td>
                            </tr>
                        </table>
                    </div> -->
                </div>
            </div>
        </body>
    </html>