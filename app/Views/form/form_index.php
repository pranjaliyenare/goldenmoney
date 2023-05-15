<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Golden Money</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="https://goldenmoney.org/public/assets/Images/Logos/goldenMoney_logo_32x32.png" type="image/x-icon">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();  ?>/public/assets/form/css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();  ?>/public/assets/form/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();  ?>/public/assets/form/css/jquery-ui.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>/public/assets/form/css/style.css"/>
</head>
<body>
	<div class="page-content">
    <div class="wizard-heading"><img src="<?php echo base_url(); ?>/public/assets/form/images/logo.png" alt="wizard_v6"></div>
		<div class="wizard-v6-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			                <h2>
                                <a href="<?php echo base_url(); ?>/form_index">
                                    <span class="step-text">Open Live Account</span>
                                </a>
                            </h2>
			            <section>
			                <div class="inner">
			                	<div class="form-heading">
			                		<h3>Open Live Account</h3>
			                	</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="first_name" name="first_name" required>
											<span class="label">First Name*</span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="last_name" name="last_name" required>
											<span class="label">Last Name*</span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" name="your_email_1" id="your_email_1" class="form-control"  required>
											<span class="label">E-Mail*</span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="phone" name="phone" required>
											<span class="label">Phone Number*</span>
										</label>
									</div>
								</div>
                                <div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
                                            <select class="form-control" name="country_name" id="country_name" name="country_name" reqiured>
                                                <option value="">Select Country</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Ascension Island">Ascension Island</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Australian External Territories">Australian External Territories</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Virgin Islands">British Virgin Islands</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote dIvoire">Cote dIvoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Democratic Peoples Republic of Korea">Democratic Peoples Republic of Korea</option>
                                                <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Diego Garcia">Diego Garcia</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands">Falkland Islands</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Republic of Korea">Republic of Korea</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="St. Helena">St. Helena</option>
                                                <option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
                                                <option value="St. Lucia">St. Lucia</option>
                                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                <option value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="US Virgin Islands">US Virgin Islands</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican">Vatican</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Yugoslavia">Yugoslavia</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                                <option value="Canada">Canada</option>
                                                <option value="cocos(keeling) islands">cocos(keeling) islands</option>
                                                <option value="congo the democratic republic of the">congo the democratic republic of the</option>
                                            </select>
											<!-- <span class="label">Country*</span> -->
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" name="city" id="city" class="form-control"  required>
											<span class="label">City*</span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="address" name="address" required>
											<span class="label">Address</span>
										</label>
									</div>
								</div>
                                <div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" name="zip_code" id="zip_code" class="form-control" required/>
											<span class="label">Zip/Postal Code</span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="skype_id" name="skype_id" required>
											<span class="label">Skype Id</span>
										</label>
									</div>
								</div>
                                <div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" name="affiliate_code" id="affiliate_code" class="form-control" required>
											<span class="label">Affiliate Code</span>
										</label>
									</div>
								</div>
                                <div class="form-row">
                                    <label class="form-row-inner">
										<input type="checkbox" name="affiliate_code" id="affiliate_code">
										<span class="label" style="color: #fff;padding-top: 10px;">Interested in becoming an IB?</span>
									</label>
                                </div>
                                <div class="form-row">
                                    <label class="form-row-inner">				
                                        <input type="checkbox" id="skype_id" name="skype_id">
                                        <span class="label" style="color: #fff;">Request to Live account</span>
                                    </label>                                    
								</div>	                                
                                <div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"></li><li aria-hidden="false" aria-disabled="false"><a href="#" role="menuitem">SUBMIT</a></li></ul></div>							
							</div>
			            </section>
						<!-- SECTION 2 -->
			             <h2>
                         <a href="<?php echo base_url(); ?>/form_demo_acc">
			            	<span class="step-text">Open Demo Account</span>
                         </a>
			            </h2>
			            <section>
			              <!--  <div class="inner">
			                	<div class="form-heading">
			                		<h3>Booking Infomation</h3>
			                		<span>2/3</span>
			                	</div>
		                		<div class="form-images">
		                			<img src="<?php //echo base_url();  ?>/public/assets/form/images/wizard_v6.jpg" alt="wizard_v6">
		                		</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="room" class="special-label-1">Choose a Room </label>
										<select name="room" id="room" class="form-control">
											<option value="Daily Design Metting - Metting Room No.1" selected>Daily Design Metting - Metting Room No.1</option>
											<option value="Single">Single</option>
											<option value="Double">Double</option>
										</select>
										<span class="select-btn">
											<i class="zmdi zmdi-chevron-down"></i>
										</span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label for="day" class="special-label-1">Organization Day</label>
										<input type="text" name="day" class="day" id="day" placeholder="15 / 08 / 2018">
									</div>
									<div class="form-holder">
										<label for="time" class="special-label-1">Time Open </label>
										<select name="time" id="time" class="form-control">
											<option value="8:00am - 10.00am" selected>8:00am - 10.00am</option>
											<option value="9:00am - 21:00pm">9:00am - 21:00pm</option>
											<option value="10:00am - 22:00pm">10:00am - 22:00pm</option>
											<option value="12:00am - 24:00pm">12:00am - 24:00pm</option>
										</select>
										<span class="select-btn">
											<i class="zmdi zmdi-chevron-down"></i>
										</span>
									</div>
								</div>
							</div> -->
			            </section>
			            <!-- SECTION 3 -->
			             <h2>
                         <a href="<?php echo base_url(); ?>/form_contact">
			            	<span class="step-text">Contact US</span>
                            </a>
			            </h2>
			            <section>
			               <!-- <div class="inner">
			                	<div class="form-heading">
			                		<h3>Comfirm Details</h3>
			                		<span>3/3</span>
			                	</div>
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr class="space-row">
												<th>Full Name:</th>
												<td id="fullname-val"></td>
											</tr>
											<tr class="space-row">
												<th>Room:</th>
												<td id="room-val"></td>
											</tr>
											<tr class="space-row">
												<th>Day:</th>
												<td id="day-val"></td>
											</tr>
											<tr class="space-row">
												<th>Time:</th>
												<td id="time-val"></td>
											</tr>
											<tr class="space-row">
												<th>Price:</th>
												<td id="price-val">40.00$</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>-->
			            </section> 
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url();  ?>/public/assets/form/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url();  ?>/public/assets/form/js/jquery.steps.js"></script>
	<script src="<?php echo base_url();  ?>/public/assets/form/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url();  ?>/public/assets/form/js/main.js"></script>
</body>
</html>