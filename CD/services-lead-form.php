<div class="formPartHero" id="myFormBanner">
    <h3>Request a Free Proposal</h3>
    <form id="formHero" name="formHero" method="post" class="home-form-banner">
        <div id="form"> <input name="Name" class="home-text-field" id="Name" placeholder="Your Full Name*"
                required="" /> <input name="CompanyName" class="home-text-field" id="CompanyName" type="hidden"
                value="Company Name" /> <input name="Number" class="home-text-field" id="Number"
                placeholder="Phone Number*" required="" /> <input name="Email" class="home-text-field" id="Email"
                placeholder="Email Address*" required="" /> <input name="Website" class="home-text-field" id="Website"
                placeholder="Website" type="hidden" /> <select name="RequiredServices" class="home-select-field"
                id="RequiredServices" placeholder="Select Your Required Service">
                <option style="color: #444;opacity: 0.7;" class="firstoptionNone" value="Select Your Required Service"
                    placeholder="Select Your Required Service" disabled selected nitro-exclude selected>Select Your
                    Required Service</option>
                <option value="Articles">App Development</option>
                <option value="Blog Posts">Digital Marketing</option>
                <option value="SEO services">Ecommerce Web Design</option>
                <option value="Web Design and Development">Web Design & Development</option>
                <option value="Content Writing">Logo Design</option>
                <option value="Design Services">SEO Services</option>
                <option value="Social Media"> Social Media</option>
            </select> <textarea name="Details" class="home-txtarea-field" id="Details" placeholder="Project Details"
                data-gramm="false" wt-ignore-input="true"></textarea> <input id="Subject" name="Subject"
                value="RFQ Social Media" type="hidden" /> <input id="country" name="Country" type="hidden" value="" />
            <div class="home-code clearfix">
                <div class="code-label">Enter Code</div>
                <div class="code-field"> <input type="tel" name="code" id="code" class="code-txt-field" /> </div>
                <div id="captcha_err"></div>
                <div id="captcha" class="captcha-number"></div>
            </div>
            <div class="form-submit-btn bannerFormSubmit"> <a class="form-btn btn" href="javascript:void(0)"
                    onclick="Validate();">Submit </a> </div> <input type="hidden" name="userCaptcha" id="userCaptcha"
                value="" />
        </div>
    </form>
</div>