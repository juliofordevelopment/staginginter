<div id="topsite">
<div id="insidetop">
	<div id="insidetopright"><h1>Resource Center Access</h1></div>

</div></div>
<h4>Returning visitor? <a href="<?=url('login', array('query' => 'node='.$_GET['node']))?>">Log In Here &raquo;</a></h4>
<hr />
<div class="ourforms">
<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="post" id="signupForm">
	<input type="hidden" name="oid" value="00D300000000arV" />
	<input type="hidden" name="retURL" id="retURL" value="http://<?=$_SERVER['SERVER_NAME']?>/signup?key=<?=$key?>&node=<?=$_GET['node']?>" />
	<input type="hidden" name="lead_source" value="<?=$lead_source?>" />
	<input type="hidden" name="00N30000000lDL8" value="<?=$detail?>" />
	<input type="hidden" name="00N30000000pmUa" value="Warm" />
    <h2>Resource Center Access Form</h2>
    <p style="width:400px;">Please fill out this form to access the Resource Center and download whitepapers, case studies and view webinars and online demos.</p>
	<textarea style="display:none;" name="description" id="description"></textarea>

		<label for="first_name">First Name:</label>
		<input name="first_name" id="first_name" type="text" size="30" />

		<label for="last_name">Last Name:</label>
		<input name="last_name" id="last_name" type="text" size="30" />

		<label for="company">Company:</label>
		<input name="company" id="company" type="text" size="30" />

		<label for="title">Title:</label>
		<input name="title" id="title" type="text" size="30" />

		<label for="email">Email Address:</label>
		<input name="email" id="email" type="text" size="30" />

		<label for="phone">Phone Number (Numbers only please):</label>
		<input name="phone" id="phone" type="text" size="30" />

		<label for="URL">Company URL:</label>
		<input name="URL" id="URL" type="text" size="30" />

		<label for="country">Country:</label>
		<select name="country" id="country" style="width: 150px">
			<option value="">--</option>
			<option value="United States">United States</option>
			<option value="Afghanistan">Afghanistan</option>
			<option value="Albania">Albania</option>
			<option value="Algeria">Algeria</option>
			<option value="Andorra">Andorra</option>
			<option value="Angola">Angola</option>
			<option value="Anguilla">Anguilla</option>
			<option value="Antigua and Barbuda">Antigua and Barbuda</option>
			<option value="Argentina">Argentina</option>
			<option value="Armenia">Armenia</option>
			<option value="Aruba">Aruba</option>
			<option value="Australia">Australia</option>
			<option value="Austria">Austria</option>
			<option value="Azerbaijan">Azerbaijan</option>
			<option value="Bahamas">Bahamas</option>
			<option value="Bahrain">Bahrain</option>
			<option value="Bangladesh">Bangladesh</option>
			<option value="Barbados">Barbados</option>
			<option value="Belaras">Belaras</option>
			<option value="Belgium">Belgium</option>
			<option value="Belize">Belize</option>
			<option value="Benin">Benin</option>
			<option value="Bermuda">Bermuda</option>
			<option value="Bhutan">Bhutan</option>
			<option value="Bolivia">Bolivia</option>
			<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
			<option value="Botswana">Botswana</option>
			<option value="Bouvet Island">Bouvet Island</option>
			<option value="Brazil">Brazil</option>
			<option value="Brunei Darussalam">Brunei Darussalam</option>
			<option value="Bulgaria">Bulgaria</option>
			<option value="Burkina Faso">Burkina Faso</option>
			<option value="Burundi">Burundi</option>
			<option value="Cambodia">Cambodia</option>
			<option value="Cameroon">Cameroon</option>
			<option value="Canada">Canada</option>
			<option value="Cape Verde">Cape Verde</option>
			<option value="Cayman Islands">Cayman Islands</option>
			<option value="Central African Republic">Central African Republic</option>
			<option value="Chad">Chad</option>
			<option value="Chile">Chile</option>
			<option value="China">China</option>
			<option value="Christmas Island">Christmas Island</option>
			<option value="Cocos (Keeling I.)">Cocos (Keeling I.)</option>
			<option value="Colombia">Colombia</option>
			<option value="Comoros">Comoros</option>
			<option value="Congo">Congo</option>
			<option value="Cook Islands">Cook Islands</option>
			<option value="Costa Rica">Costa Rica</option>
			<option value="Cote d'Ivoire">Cote d'Ivoire</option>
			<option value="Crotia (Hrvatska)">Crotia (Hrvatska)</option>
			<option value="Cuba">Cuba</option>
			<option value="Cyprus">Cyprus</option>
			<option value="Czech Republic">Czech Republic</option>
			<option value="Denmark">Denmark</option>
			<option value="Djibouti">Djibouti</option>
			<option value="Dominica">Dominica</option>
			<option value="Dominican Republic">Dominican Republic</option>
			<option value="East Timor">East Timor</option>
			<option value="Ecudor">Ecudor</option>
			<option value="Egypt">Egypt</option>
			<option value="El Salvador">El Salvador</option>
			<option value="Equitorial Guinea">Equitorial Guinea</option>
			<option value="Eritrea">Eritrea</option>
			<option value="Estonia">Estonia</option>
			<option value="Ethiopia">Ethiopia</option>
			<option value="Faroe Islands">Faroe Islands</option>
			<option value="Faulkland Islands">Faulkland Islands</option>
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
			<option value="Heard and McDonald I.">Heard and McDonald I.</option>
			<option value="Honduras">Honduras</option>
			<option value="Hong Kong">Hong Kong</option>
			<option value="Hungary">Hungary</option>
			<option value="Iceland">Iceland</option>
			<option value="India">India</option>
			<option value="Indonesia">Indonesia</option>
			<option value="Ireland (Republic)">Ireland (Republic)</option>
			<option value="Israel">Israel</option>
			<option value="Italy">Italy</option>
			<option value="Jamaica">Jamaica</option>
			<option value="Japan">Japan</option>
			<option value="Jordan">Jordan</option>
			<option value="Kazakhstan">Kazakhstan</option>
			<option value="Kenya">Kenya</option>
			<option value="Kiribati">Kiribati</option>
			<option value="Korea (North)">Korea (North)</option>
			<option value="Korea (South)">Korea (South)</option>
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
			<option value="Marroco">Marroco</option>
			<option value="Marshall Islands">Marshall Islands</option>
			<option value="Martinique">Martinique</option>
			<option value="Mauritania">Mauritania</option>
			<option value="Mauritius">Mauritius</option>
			<option value="Mayotte">Mayotte</option>
			<option value="Mexico">Mexico</option>
			<option value="Micronesia">Micronesia</option>
			<option value="Moldova">Moldova</option>
			<option value="Monaco">Monaco</option>
			<option value="Mongolia">Mongolia</option>
			<option value="Montserrat">Montserrat</option>
			<option value="Mozambique">Mozambique</option>
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
			<option value="Norfolk Island">Norfolk Island</option>
			<option value="Northern Mariana I.">Northern Mariana I.</option>
			<option value="Norway">Norway</option>
			<option value="Oman">Oman</option>
			<option value="Pakistan">Pakistan</option>
			<option value="Palau">Palau</option>
			<option value="Panama">Panama</option>
			<option value="Papua New Guinea">Papua New Guinea</option>
			<option value="Paraguay">Paraguay</option>
			<option value="Peru">Peru</option>
			<option value="Philippines">Philippines</option>
			<option value="Pitcairn">Pitcairn</option>
			<option value="Poland">Poland</option>
			<option value="Portugal">Portugal</option>
			<option value="Qatar">Qatar</option>
			<option value="Reunion">Reunion</option>
			<option value="Romania">Romania</option>
			<option value="Russian Federation">Russian Federation</option>
			<option value="Rwanda">Rwanda</option>
			<option value="Samoa">Samoa</option>
			<option value="San Marino">San Marino</option>
			<option value="Sao Tome and Principe">Sao Tome and Principe</option>
			<option value="Saudi Arabia">Saudi Arabia</option>
			<option value="Senegal">Senegal</option>
			<option value="Seychelles">Seychelles</option>
			<option value="Sierra Leone">Sierra Leone</option>
			<option value="Singapore">Singapore</option>
			<option value="Slovak Republic">Slovak Republic</option>
			<option value="Slovenia">Slovenia</option>
			<option value="Soloman Islands">Soloman Islands</option>
			<option value="Somalia">Somalia</option>
			<option value="South Africa">South Africa</option>
			<option value="Spain">Spain</option>
			<option value="Sri Lanka">Sri Lanka</option>
			<option value="St.Helena">St.Helena</option>
			<option value="St.Kitts and Nevis">St.Kitts and Nevis</option>
			<option value="St.Lucia">St.Lucia</option>
			<option value="St.Pierre and Miquelon">St.Pierre and Miquelon</option>
			<option value="St.Vincent and The Grenadines">St.Vincent and The Grenadines</option>
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
			<option value="Turks and Caicos I.">Turks and Caicos I.</option>
			<option value="Tuvalu">Tuvalu</option>
			<option value="Uganda">Uganda</option>
			<option value="Ukraine">Ukraine</option>
			<option value="United Arab Emirates">United Arab Emirates</option>
			<option value="United Kingdom">United Kingdom</option>
			<option value="Uruguay">Uruguay</option>
			<option value="Uzbekistan">Uzbekistan</option>
			<option value="Vanuatu">Vanuatu</option>
			<option value="Vatican City State">Vatican City State</option>
			<option value="Venezuela">Venezuela</option>
			<option value="Vietnam">Vietnam</option>
			<option value="Virgin Islands (British)">Virgin Islands (British)</option>
			<option value="Virgin Islands (US)">Virgin Islands (US)</option>
			<option value="Wallis and Futana I.">Wallis and Futana I.</option>
			<option value="Western Sahara">Western Sahara</option>
			<option value="Yeman">Yeman</option>
			<option value="Yugoslavia">Yugoslavia</option>
			<option value="Zaire">Zaire</option>
			<option value="Zambia">Zambia</option>
			<option value="Zimbabwe">Zimbabwe</option>
		</select>

		<label for="state">State/Province</label>
		<select name="state" id="state" style="width: 150px">
			<option value="">--</option>
			<option value="Other">Other</option>
			<option value="AB">AB</option>
			<option value="AK">AK</option>
			<option value="AL">AL</option>
			<option value="AR">AR</option>
			<option value="AZ">AZ</option>
			<option value="BC">BC</option>
			<option value="CA">CA</option>
			<option value="CO">CO</option>
			<option value="CT">CT</option>
			<option value="DC">DC</option>
			<option value="DE">DE</option>
			<option value="FL">FL</option>
			<option value="GA">GA</option>
			<option value="HI">HI</option>
			<option value="IA">IA</option>
			<option value="ID">ID</option>
			<option value="IL">IL</option>
			<option value="IN">IN</option>
			<option value="KS">KS</option>
			<option value="KY">KY</option>
			<option value="LA">LA</option>
			<option value="MA">MA</option>
			<option value="MB">MB</option>
			<option value="MD">MD</option>
			<option value="ME">ME</option>
			<option value="MI">MI</option>
			<option value="MN">MN</option>
			<option value="MO">MO</option>
			<option value="MS">MS</option>
			<option value="MT">MT</option>
			<option value="NB">NB</option>
			<option value="NC">NC</option>
			<option value="ND">ND</option>
			<option value="NE">NE</option>
			<option value="NH">NH</option>
			<option value="NJ">NJ</option>
			<option value="NL">NL</option>
			<option value="NM">NM</option>
			<option value="NS">NS</option>
			<option value="NV">NV</option>
			<option value="NY">NY</option>
			<option value="OH">OH</option>
			<option value="OK">OK</option>
			<option value="ON">ON</option>
			<option value="OR">OR</option>
			<option value="PA">PA</option>
			<option value="QC">QC</option>
			<option value="PE">PE</option>
			<option value="RI">RI</option>
			<option value="SC">SC</option>
			<option value="SD">SD</option>
			<option value="SK">SK</option>
			<option value="TN">TN</option>
			<option value="TX">TX</option>
			<option value="UT">UT</option>
			<option value="VA">VA</option>
			<option value="VT">VT</option>
			<option value="WA">WA</option>
			<option value="WI">WI</option>
			<option value="WV">WV</option>
			<option value="WY">WY</option>
		</select>

	<div id="issues">
		<label>Issues with current file transfer:</label><br />

		<input type="checkbox" name="transfersol_security" id="transfersol_security" value="Security" /><label for="transfersol_security">Security</label><br />

		<input type="checkbox" name="transfersol_compliance" id="transfersol_compliance" value="Compliance" /><label for="transfersol_compliance">Compliance</label><br />

		<input type="checkbox" name="transfersol_size" id="transfersol_size" value="E-mail Size Limits" /><label for="transfersol_size">E-mail Size Limits</label><br />

		<input type="checkbox" name="transfersol_email" id="transfersol_email" value="E-mail Storage" /><label for="transfersol_email">E-mail Storage</label><br />

		<input type="checkbox" name="transfersol_ftp" id="transfersol_ftp" value="FTP Support" /><label for="transfersol_ftp">FTP Support</label><br />

		<input type="checkbox" name="transfersol_cost" id="transfersol_cost" value="Cost" /><label for="transfersol_cost">Cost</label><br />

		<input type="checkbox" name="alloftheabove" id="alloftheabove" value="All of the above" /><label for="alloftheabove">All of the above</label><br />

		<input type="checkbox" name="transfersol_others" id="transfersol_others" value="others" /><label for="transfersol_others">Other</label>
	</div>
	<div id="other" style="display:none;">
		<label for="othersol_text">Other:</label>
		<input type="text" name="othersol_text" id="othersol_text" size="25" />
	</div>

		<label for="00N30000000l0Sr">Number of Employees:</label>
		<select name="00N30000000l0Sr" id="00N30000000l0Sr">
			<option value="">Select One</option>
			<option value="Less than 250">Less than 250</option>
			<option value="250-1000">250-1000</option>
			<option value="1001-2500">1001-2500</option>
			<option value="2501-5000">2501-5000</option>
			<option value="More than 5000">More than 5000</option>
		</select>

		<label for="potential_user">Number of Potential Users:</label>
		<select name="potential_user" id="potential_user">
			<option value="">Select One</option>
			<option value="Less than 250">Less than 250</option>
			<option value="250-1000">250-1000</option>
			<option value="1001-2500">1001-2500</option>
			<option value="2501-5000">2501-5000</option>
			<option value="More than 5000">More than 5000</option>
		</select>

		<label for="soltimeframe">Timeframe for purchase?:</label>
		<select name="soltimeframe" id="soltimeframe">
			<option value="">Select One</option>
			<option value="Within 30 days">Within 30 days</option>
			<option value="Within 3 months">Within 3 months</option>
			<option value="More than 3 months">More than 3 months</option>
			<option value="No timeframe">No timeframe</option>
		</select>
<br />

<input type="image" src="/sites/default/files/submit-me.gif" alt="Submit button" class="submitbutton">
</form></div>
<script type="text/javascript">
	//function containsNonNumeric(str){
	//	var test = new RegExp("[^0-9\(\)\-\s]*", "g");
	//	return str.match(test);
	//}
	function validateEmail(str){
		var emailRegEx = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(str.match(emailRegEx)){
			return true
		}else{
			return false;
		}
	}
	function validate() {
		var invalid = [];
		$('.invalid').remove();
		
		var first_name = $('#first_name');
		if (first_name.val().length == 0) {
			invalid.push({field: first_name, message: 'Please enter your last name.'});
		}
		
		var last_name = $('#last_name');
		if (last_name.val().length == 0) {
			invalid.push({field: last_name, message: 'Please enter your last name.'});
		}
		
		var company = $('#company');
		if (company.val().length == 0) {
			invalid.push({field: company, message: 'Please enter your company\'s name.'});
		}
		
		var title = $('#title');
		if (title.val().length == 0) {
			invalid.push({field: title, message: 'Please enter your title.'});
		}
		
		var email = $('#email');
		if (email.val().length == 0 || !validateEmail(email.val())) {
			invalid.push({field: email, message: 'Please enter a valid email address.'});
		}
		
		var phone = $('#phone');
		if (phone.val().length == 0 /*|| containsNonNumeric(phone.val())*/) {
			invalid.push({field: phone, message: 'Please enter a valid phone number.'});
		}
		
		var URL = $('#URL');
		if (URL.val().length == 0) {
			invalid.push({field: URL, message: 'Please enter a valid URL.'});
		}
		
		var country = $('#country');
		if (country.val().length == 0) {
			invalid.push({field: country, message: 'Please select a country.'});
		}
		
		var state = $('#state');
		if (state.val().length == 0) {
			invalid.push({field: state, message: 'Please select a state/province.'});
		}
		
		var othersol_text = $('#othersol_text');
		var transfersol_others = $('#transfersol_others');
		if (transfersol_others.attr('checked') && othersol_text.val().length == 0) {
			invalid.push({field: othersol_text, message: 'Since you have selected "Other", please enter a value for it.'});
		}
		
		var issues = $('#issues input[type=checkbox]');
		var numChecked = 0;
		issues.each(function(){
			if ($(this).attr('checked')) {
				numChecked++;
			}
		});
		if (numChecked == 0) {
			invalid.push({field: $('#issues'), message: 'Please check at least one.'});
		}
		
		var employee = $('#00N30000000l0Sr');
		if (employee.val().length == 0) {
			invalid.push({field: employee, message: 'Please select a value.'});
		}
		
		var potential_user = $('#potential_user');
		if (potential_user.val().length == 0) {
			invalid.push({field: potential_user, message: 'Please select a value.'});
		}
		
		var soltimeframe = $('#soltimeframe');
		if (soltimeframe.val().length == 0) {
			invalid.push({field: soltimeframe, message: 'Please select a value.'});
		}
		
		for (var field in invalid) {
			invalid[field].field.after('<span class="invalid" style="display:none;">'+invalid[field].message+'</span>').next().fadeIn('fast');
		}
		return invalid.length == 0;
	}
	if ($('#transfersol_others').attr('checked')) {
		$('#other').toggle();
	}
	$('#transfersol_others').click(function(){
		$('#other').slideToggle('normal');
	});
	$('#signupForm').submit(function(e){
		if (validate()) {
			$('#retURL').val($('#retURL').val()
			+ '&email=' + encodeURI($('#email').val())
			+ '&first_name=' + encodeURI($('#first_name').val())
			+ '&last_name=' + encodeURI($('#last_name').val()));
			
			var issues = $('#issues input[type=checkbox]');
			var issueArr = [];
			issues.each(function(){
				if ($(this).attr('checked')) {
					issueArr.push($(this).val());
				}
			});
			$('#description').val("Issues: "+issueArr.join(',')
				+ ($('#transfersol_others').attr('checked') ? "\nOther Issue: "+$('#othersol_text').val():'')
				+ "\nPotential Users: "+$('#potential_user').val()
				+ "\nTimeframe: "+$('#soltimeframe').val()
			);
		} else {
			e.preventDefault();
		}
	});
</script>
