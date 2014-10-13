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
					<div id="application-header">
						<h1 id="application-title">PowerReviews Google Search Tool for Syndication</h1>
					</div>
					<div id="application-search-tool">
						<table cellspacing="10" id="search-tool" >
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
										<option value="bjs.com">BJ's</option>
										<option value="btosports.com">BTO Sports</option>
										<option value="gandermountain.com">Gander Mountain</option>
										<option value="officesupply.com">officesupply.com</option>
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
								<td id="submit" onclick="submit()">Search</td>
								<td class="spacer"></td>
								<td id="logo"></td>
							</tr>
						</form>
					</div>
				</div>
			</div>
		</body>
	</html>