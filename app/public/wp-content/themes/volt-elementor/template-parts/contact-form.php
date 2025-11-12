<form id="enquiry-form" method="post" novalidate>

    <div class="input">
        <label>Name</label>
        <input name="name" required type="text" placeholder="Eg: Jacob Jones">
        <span class="error"></span>
    </div>

    <div class="input2">
        <div class="left">
            <label>Email</label>
            <input name="email" required type="email" placeholder="Eg: jjacob123@gmail.com">
            <span class="error"></span>
        </div>
        <div class="right">
            <label>Phone Number</label>
            <input id="phone" name="phone" required type="tel" placeholder="Enter phone number">
            <span class="error"></span>
        </div>
    </div>

    <div class="input2">
        <div class="left">
            <label>Your Location</label>
            <input name="location" type="text" placeholder="Eg: Savusavu, Vanua Levu, Fiji">
            <span class="error"></span>
        </div>
        <div class="right">
            <label>Query Type</label>
            <input name="query_type" type="text" placeholder="Problem with the Product">
            <span class="error"></span>
        </div>
    </div>

    <div class="input textarea">
        <label>Query</label>
        <textarea name="message" required placeholder="Eg: Your Query"></textarea>
        <span class="error"></span>
    </div>

    <div class="submit-sec">
        <input type="checkbox" name="terms" required> I agree to terms.
        <span class="error"></span>
    </div>

    <div class="submit-button">
        <button type="submit">Submit</button>
    </div>

    <div class="result-message" style="display:none;margin-top:10px;"></div>
</form>
