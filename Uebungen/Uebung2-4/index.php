

<form method="POST" action="KundenErfassung.php">
    <label for="company">Company:</label>
    <input type="text" id="company" name="company" required><br>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required><br>

    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required><br>

    <label for="email_address">Email Address:</label>
    <input type="email" id="email_address" name="email_address"><br>

    <label for="job_title">Job Title:</label>
    <input type="text" id="job_title" name="job_title"><br>

    <label for="business_phone">Business Phone:</label>
    <input type="tel" id="business_phone" name="business_phone"><br>

    <label for="home_phone">Home Phone:</label>
    <input type="tel" id="home_phone" name="home_phone"><br>

    <label for="mobile_phone">Mobile Phone:</label>
    <input type="tel" id="mobile_phone" name="mobile_phone"><br>

    <label for="fax_number">Fax Number:</label>
    <input type="tel" id="fax_number" name="fax_number"><br>

    <label for="address">Address:</label>
    <textarea id="address" name="address"></textarea><br>

    <label for="city">City:</label>
    <input type="text" id="city" name="city"><br>

    <label for="state_province">State/Province:</label>
    <input type="text" id="state_province" name="state_province"><br>

    <label for="zip_postal_code">Zip/Postal Code:</label>
    <input type="text" id="zip_postal_code" name="zip_postal_code"><br>

    <label for="country_region">Country/Region:</label>
    <input type="text" id="country_region" name="country_region"><br>

    <label for="web_page">Web Page:</label>
    <input type="url" id="web_page" name="web_page"><br>

    <label for="notes">Notes:</label>
    <textarea id="notes" name="notes"></textarea><br>

    <input type="hidden" id="customer_id" name="customer_id" value="">

    <input type="submit" value="Submit">
</form>