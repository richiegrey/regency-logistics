<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Regency Logistics - UK Pallets and Haulage Solutions, South Wales - About our Haulage and Transport Services</title>
	<meta name="author" content="Richard Grey">
    <meta name="description" content="Regency Logistics are specialists in Haulage, Transport and Freight Logistics Cardiff, South Wales" />
	<meta name="keywords" content="Haulage, Transport, Warehouse, UK Pallets, Storage, Van, HGV" />
	<meta content="index, follow" name="Robots" />

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

	<link rel="stylesheet" href="css/styles.css" type="text/css">
	<link rel="stylesheet" href="css/booking-form.css" type="text/css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script>

			$(function() {
        		$(document).on('click', '#add-new-parcel-button', function(e) {
            		
        			var tempCount = $('#package-count').val();
        			var packageCount = parseInt(tempCount) + 1;

            		e.preventDefault();

					$(".individual-package-details").append('<div class="package-divider">---</div>');
					$(".individual-package-details").append('<span><input type="text" name="package-type-' + packageCount + '" id="package-type" placeholder="Package Type" style="margin-right:5px;" /></span>');
					$(".individual-package-details").append('<span><input type="text" name="quantity-' + packageCount + '" id="quantity" placeholder="Quantity" style="margin-right:5px;" /></span>');
					$(".individual-package-details").append('<span><input type="text" name="weight-' + packageCount + '" id="weight" placeholder="Weight" style="margin-right:5px;" /></span>');
					$(".individual-package-details").append('<span><input type="text" name="length-' + packageCount + '" id="length" placeholder="Length" style="margin-right:5px;" /></span>');
					$(".individual-package-details").append('<span><input type="text" name="width-' + packageCount + '" id="width" placeholder="Width" style="margin-right:5px;" /></span>');
					$(".individual-package-details").append('<span><input type="text" name="height-' + packageCount + '" id="height" placeholder="Height" style="margin-right:5px;" /></span>');

					$('#package-count').val(packageCount);
        		})
    		})



	</script>

</head>
<body>
	<div id="wrapper">

		<!-- HEADER -->
			<?php include('includes/header.php'); ?>
		<!-- /HEADER -->

		<div class="fivePXPadding"></div>
		<hr class="greyLine" />
		<!-- MENU -->
			<?php include('includes/menu.php'); ?>
		<!-- /MENU -->
		<hr class="greyLine" />

		<div class="fivePXPadding"></div>

		<div id="mainBodyContent">

			<form action="sendBooking.php" method="post" id="booking-form">

				<section id="sender-details">
					<h2>Your Details</h2>

					<input type="text" name="sender-name" id="sender-name" placeholder="Name" />

					<input type="text" name="address-line-one" id="address-line-one" placeholder="Address Line One" />

					<input type="text" name="address-line-two" id="address-line-two" placeholder="Address Line Two" />

					<input type="text" name="address-line-three" id="address-line-three" placeholder="Address Line Three" />

					<input type="text" name="address-line-four" id="address-line-four" placeholder="Address Line Four" />

					<input type="text" name="post-code" id="post-code" placeholder="Post Code" />

					<input type="text" name="phone-number" id="phone-number" placeholder="Phone Number" />

					<input type="text" name="email-address" id="email-address" placeholder="E-Mail Address" />
				</section>

				<section id="collection-details">
					<h2>Collection Details</h2>

					<input type="text" name="collection-name" id="collection-name" placeholder="Name">

					<input type="text" name="collection-address-line-one" id="collection-address-line-one" placeholder="Address Line One" />

					<input type="text" name="collection-address-line-two" id="collection-address-line-two" placeholder="Address Line Two" />

					<input type="text" name="collection-address-line-three" id="collection-address-line-three" placeholder="Address Line Three" />

					<input type="text" name="collection-address-line-four" id="collection-address-line-four" placeholder="Address Line Four" />

					<input type="text" name="collection-post-code" id="collection-post-code" placeholder="Post Code" />

					<input type="text" name="collection-phone-number" id="collection-phone-number" placeholder="Phone Number" />

					<input type="text" name="collection-email-address" id="collection-email-address" placeholder="E-Mail Address" />

				</section>

				<section id="delivery-details">
					<h2>Delivery Details</h2>

					<input type="text" name="delivery-name" id="delivery-name" placeholder="Name">

					<input type="text" name="delivery-address-line-one" id="delivery-address-line-one" placeholder="Address Line One" />

					<input type="text" name="delivery-address-line-two" id="delivery-address-line-two" placeholder="Address Line Two" />

					<input type="text" name="delivery-address-line-three" id="delivery-address-line-three" placeholder="Address Line Three" />

					<input type="text" name="delivery-address-line-four" id="delivery-address-line-four" placeholder="Address Line Four" />

					<input type="text" name="delivery-post-code" id="delivery-post-code" placeholder="Post Code" />

					<input type="text" name="delivery-phone-number" id="delivery-phone-number" placeholder="Phone Number" />

					<input type="text" name="delivery-email-address" id="delivery-email-address" placeholder="E-Mail Address" />

					<select name="delivery-service" id="delivery-service">
						<option selected="selected" disabled="disabled">Select a Delivery Service</option>
						<option value="next-day">Next Day</option>
						<option value="economy">Economy</option>
						<option value="pre-nine">Pre 9AM</option>
						<option value="pre-ten">Pre 10AM</option>
						<option value="morning">AM</option>
					</select>
				</section>				

				<section id="shipment-details">
					<h2>Shipment Details</h2>

					<input type="text" name="customer-reference" id="customer-reference" placeholder="Customer Reference" />

					<input type="text" name="delivery-instructions" id="delivery-instructions" placeholder="Delivery Instructions" />

					<input type="text" name="collection-date" id="collection-date" placeholder="Collection Date" />

					<input type="text" name="description-of-goods" id="description-of-goods" placeholder="Description of Goods" />

					<select name="shipment-type" id="shipment-type">
						<option selected="selected" disabled="disabled">Select a Shipment Type</option>
						<option value="document">Document</option>
						<option value="parcel">Parcel</option>
						<option value="pallet">Pallet</option>
					</select>

					<select name="customs-controlled" id="customs-controlled">
						<option selected="selected" disabled="disabled">Is the Package Customs Controlled?</option>
						<option value="cc-yes">Yes</option>
						<option value="cc-no">No</option>
					</select>

					<select name="dangerous-goods" id="dangerous-goods">
						<option selected="selected" disabled="disabled">Does it Contain Dangerous Goods?</option>
						<option value="dg-yes">Yes</option>
						<option value="dg-no">No</option>
					</select>
				</section>

				<div id="package-seperator"></div>

				<section id="package-details">
					<input type="hidden" id="package-count" value="0"/>
					<div class="individual-package-details">
						<span>
							<input type="text" name="package-type" id="package-type" placeholder="Package Type" />
						</span>
						<span>
							<input type="text" name="quantity" id="quantity" placeholder="Quantity" />
						</span>
						<span>
							<input type="text" name="weight" id="weight" placeholder="Weight" />
						</span>
						<span>
							<input type="text" name="length" id="length" placeholder="Length" />
						</span>
						<span>
							<input type="text" name="width" id="width" placeholder="Width" />
						</span>
						<span>
							<input type="text" name="height" id="height" placeholder="Height" />
						</span>
					</div>
				</section>
				
				<button class="add-parcel-button" id="add-new-parcel-button">Add Another Parcel</button>
				<button class="send-parcel-booking-button">Send Booking</button>

			</form>



		</div>

		<div class="clear"></div>
		<!-- FOOTER -->
			<?php include('includes/footer.php'); ?>
		<!-- /FOOTER -->

	</div>
</body>
</html>
