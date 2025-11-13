<?php

/**
 * Template Name: Get The Qoute
 */
get_header();
?>

<body>
    <main>
        <section class="section o7-get-the-quote">
            <div class="container">
                <div class="o7-get-the-quote__content-container">
                    <div class="o7-get-the-quote__form-details-container">
                        <h1 class="o7-get-the-quote__form-title">Tell Us About Your Amazing Project Here</h1>
                        <div class="o7-get-the-quote__info">
                            <h2 class="o7-get-the-quote__location o7-get-the-quote__contact">Contact</h2>
                            <div class="o7-get-the-quote__address-wrapper">
                                <svg class="o7-get-the-quote__address-icon" aria-hidden="true" focusable="false">
                                    <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#phone-outline" ?>></use>
                                </svg>
                                <a href="http://wa.me/+8801784287229" target="_blank" class="o7-get-the-quote__address">
                                    (+880) 1784287229
                                </a>
                            </div>
                            <div class="o7-get-the-quote__address-wrapper">
                                <svg class="o7-get-the-quote__address-icon" aria-hidden="true" focusable="false">
                                    <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#envelope-outline-thin"?>></use>
                                </svg>
                                <a href="mailto:optraseven@gmail.com" target="_blank" class="o7-get-the-quote__address">
                                    optraseven@gmail.com
                                </a>
                            </div>
                        </div>

                        <div class="o7-get-the-quote__info">
                            <h2 class="o7-get-the-quote__location">Headquarter</h2>
                            <address class="o7-get-the-quote__address">Bogura District, Rajshahi Division, Bangladesh
                            </address>
                        </div>

                        <div class="o7-get-the-quote__info">
                            <h2 class="o7-get-the-quote__location">Offices</h2>
                            <div class="o7-get-the-quote__address-wrapper">
                                <svg class="o7-get-the-quote__address-icon" aria-hidden="true" focusable="false">
                                    <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#office" ?>></use>
                                </svg>
                                <p class="o7-get-the-quote__address">Bangladesh</p>
                            </div>
                            <div class="o7-get-the-quote__address-wrapper">
                                <svg class="o7-get-the-quote__address-icon" aria-hidden="true" focusable="false">
                                    <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#usa" ?>></use>
                                </svg>
                                <p class="o7-get-the-quote__address">United States</p>
                            </div>
                        </div>
                    </div>
                    <div class="o7-get-the-quote__form-wrapper">
                        <h2 class="o7-get-the-quote__form-title o7-get-the-quote__container-title">
                            Tell Us About Your Amazing Project Here
                        </h2>
                        <form class="o7-get-the-quote-form" aria-label="get the quote form" method="post" enctype="multipart/form-data" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                            <input type="hidden" name="action" value="get_quote_form_submit">
                            <!-- full name Start -->
                            <label class="o7-input-label o7-get-the-quote__input-label" for="name">Full Name <span class="text-danger">*</span> </label>
                            <div class="o7-input-group o7-get-the-quote__input-field-wrapper">
                                <input type="text" id="name" name="name"
                                    required
                                    class="o7-input-field o7-get-the-quote__input-name o7-get-the-quote__full-width"
                                    placeholder="John Lennon">
                            </div>
                            <!-- full name Start -->

                            <!-- two column input phone number and email -->
                            <div class="o7-get-the-quote__input-row-wrapper">
                                <!-- email -->
                                <div class="o7-get-the-quote__input-wrapper">
                                    <!-- email label -->
                                    <label class="o7-input-label o7-get-the-quote__input-label"
                                        for="email">Email <span class="text-danger">*</span> </label>
                                    <!-- email input -->
                                    <div class="o7-input-group o7-get-the-quote__input-field-wrapper">
                                        <input type="email" id="email" name="email"
                                            required
                                            class="o7-input-field o7-get-the-quote__input-email o7-get-the-quote__full-width"
                                            placeholder="johnlenon@gmail.com">
                                    </div>
                                </div>
                                <!-- country -->
                                <div class="o7-get-the-quote__input-wrapper">
                                    <!-- date lable -->
                                    <label class="o7-input-label o7-get-the-quote__input-label"
                                        for="country-select">Country <span class="text-danger">*</span> </label>
                                    <!-- date input -->
                                    <div class="o7-input-group o7-get-the-quote__input-field-wrapper">
                                        <select name="country-select" id="country-select" required
                                            class="o7-get-the-quote__select-country">
                                            <option value="" selected>Select...</option>
                                            <option value="afghanistan">Afghanistan</option>
                                            <option value="albania">Albania</option>
                                            <option value="algeria">Algeria</option>
                                            <option value="andorra">Andorra</option>
                                            <option value="angola">Angola</option>
                                            <option value="antigua-and-barbuda">Antigua and Barbuda</option>
                                            <option value="argentina">Argentina</option>
                                            <option value="armenia">Armenia</option>
                                            <option value="australia">Australia</option>
                                            <option value="austria">Austria</option>
                                            <option value="azerbaijan">Azerbaijan</option>
                                            <option value="bahamas">Bahamas</option>
                                            <option value="bahrain">Bahrain</option>
                                            <option value="bangladesh">Bangladesh</option>
                                            <option value="barbados">Barbados</option>
                                            <option value="belarus">Belarus</option>
                                            <option value="belgium">Belgium</option>
                                            <option value="belize">Belize</option>
                                            <option value="benin">Benin</option>
                                            <option value="bhutan">Bhutan</option>
                                            <option value="bolivia">Bolivia</option>
                                            <option value="bosnia-and-herzegovina">Bosnia and Herzegovina</option>
                                            <option value="botswana">Botswana</option>
                                            <option value="brazil">Brazil</option>
                                            <option value="brunei">Brunei</option>
                                            <option value="bulgaria">Bulgaria</option>
                                            <option value="burkina-faso">Burkina Faso</option>
                                            <option value="burundi">Burundi</option>
                                            <option value="cambodia">Cambodia</option>
                                            <option value="cameroon">Cameroon</option>
                                            <option value="canada">Canada</option>
                                            <option value="cape-verde">Cape Verde</option>
                                            <option value="central-african-republic">Central African Republic</option>
                                            <option value="chad">Chad</option>
                                            <option value="chile">Chile</option>
                                            <option value="china">China</option>
                                            <option value="colombia">Colombia</option>
                                            <option value="comoros">Comoros</option>
                                            <option value="congo">Congo</option>
                                            <option value="costa-rica">Costa Rica</option>
                                            <option value="croatia">Croatia</option>
                                            <option value="cuba">Cuba</option>
                                            <option value="cyprus">Cyprus</option>
                                            <option value="czech-republic">Czech Republic</option>
                                            <option value="democratic-republic-of-the-congo">Democratic Republic of the Congo</option>
                                            <option value="denmark">Denmark</option>
                                            <option value="djibouti">Djibouti</option>
                                            <option value="dominica">Dominica</option>
                                            <option value="dominican-republic">Dominican Republic</option>
                                            <option value="east-timor">East Timor</option>
                                            <option value="ecuador">Ecuador</option>
                                            <option value="egypt">Egypt</option>
                                            <option value="el-salvador">El Salvador</option>
                                            <option value="equatorial-guinea">Equatorial Guinea</option>
                                            <option value="eritrea">Eritrea</option>
                                            <option value="estonia">Estonia</option>
                                            <option value="eswatini">Eswatini</option>
                                            <option value="ethiopia">Ethiopia</option>
                                            <option value="fiji">Fiji</option>
                                            <option value="finland">Finland</option>
                                            <option value="france">France</option>
                                            <option value="gabon">Gabon</option>
                                            <option value="gambia">Gambia</option>
                                            <option value="georgia">Georgia</option>
                                            <option value="germany">Germany</option>
                                            <option value="ghana">Ghana</option>
                                            <option value="greece">Greece</option>
                                            <option value="grenada">Grenada</option>
                                            <option value="guatemala">Guatemala</option>
                                            <option value="guinea">Guinea</option>
                                            <option value="guinea-bissau">Guinea-Bissau</option>
                                            <option value="guyana">Guyana</option>
                                            <option value="haiti">Haiti</option>
                                            <option value="honduras">Honduras</option>
                                            <option value="hungary">Hungary</option>
                                            <option value="iceland">Iceland</option>
                                            <option value="india">India</option>
                                            <option value="indonesia">Indonesia</option>
                                            <option value="iran">Iran</option>
                                            <option value="iraq">Iraq</option>
                                            <option value="ireland">Ireland</option>
                                            <option value="israel">Israel</option>
                                            <option value="italy">Italy</option>
                                            <option value="ivory-coast">Ivory Coast</option>
                                            <option value="jamaica">Jamaica</option>
                                            <option value="japan">Japan</option>
                                            <option value="jordan">Jordan</option>
                                            <option value="kazakhstan">Kazakhstan</option>
                                            <option value="kenya">Kenya</option>
                                            <option value="kiribati">Kiribati</option>
                                            <option value="kosovo">Kosovo</option>
                                            <option value="kuwait">Kuwait</option>
                                            <option value="kyrgyzstan">Kyrgyzstan</option>
                                            <option value="laos">Laos</option>
                                            <option value="latvia">Latvia</option>
                                            <option value="lebanon">Lebanon</option>
                                            <option value="lesotho">Lesotho</option>
                                            <option value="liberia">Liberia</option>
                                            <option value="libya">Libya</option>
                                            <option value="liechtenstein">Liechtenstein</option>
                                            <option value="lithuania">Lithuania</option>
                                            <option value="luxembourg">Luxembourg</option>
                                            <option value="madagascar">Madagascar</option>
                                            <option value="malawi">Malawi</option>
                                            <option value="malaysia">Malaysia</option>
                                            <option value="maldives">Maldives</option>
                                            <option value="mali">Mali</option>
                                            <option value="malta">Malta</option>
                                            <option value="marshall-islands">Marshall Islands</option>
                                            <option value="mauritania">Mauritania</option>
                                            <option value="mauritius">Mauritius</option>
                                            <option value="mexico">Mexico</option>
                                            <option value="micronesia">Micronesia</option>
                                            <option value="moldova">Moldova</option>
                                            <option value="monaco">Monaco</option>
                                            <option value="mongolia">Mongolia</option>
                                            <option value="montenegro">Montenegro</option>
                                            <option value="morocco">Morocco</option>
                                            <option value="mozambique">Mozambique</option>
                                            <option value="myanmar">Myanmar</option>
                                            <option value="namibia">Namibia</option>
                                            <option value="nauru">Nauru</option>
                                            <option value="nepal">Nepal</option>
                                            <option value="netherlands">Netherlands</option>
                                            <option value="new-zealand">New Zealand</option>
                                            <option value="nicaragua">Nicaragua</option>
                                            <option value="niger">Niger</option>
                                            <option value="nigeria">Nigeria</option>
                                            <option value="north-korea">North Korea</option>
                                            <option value="north-macedonia">North Macedonia</option>
                                            <option value="norway">Norway</option>
                                            <option value="oman">Oman</option>
                                            <option value="pakistan">Pakistan</option>
                                            <option value="palau">Palau</option>
                                            <option value="palestine">Palestine</option>
                                            <option value="panama">Panama</option>
                                            <option value="papua-new-guinea">Papua New Guinea</option>
                                            <option value="paraguay">Paraguay</option>
                                            <option value="peru">Peru</option>
                                            <option value="philippines">Philippines</option>
                                            <option value="poland">Poland</option>
                                            <option value="portugal">Portugal</option>
                                            <option value="qatar">Qatar</option>
                                            <option value="romania">Romania</option>
                                            <option value="russia">Russia</option>
                                            <option value="rwanda">Rwanda</option>
                                            <option value="saint-kitts-and-nevis">Saint Kitts and Nevis</option>
                                            <option value="saint-lucia">Saint Lucia</option>
                                            <option value="saint-vincent-and-the-grenadines">Saint Vincent and the Grenadines</option>
                                            <option value="samoa">Samoa</option>
                                            <option value="san-marino">San Marino</option>
                                            <option value="sao-tome-and-principe">São Tomé and Príncipe</option>
                                            <option value="saudi-arabia">Saudi Arabia</option>
                                            <option value="senegal">Senegal</option>
                                            <option value="serbia">Serbia</option>
                                            <option value="seychelles">Seychelles</option>
                                            <option value="sierra-leone">Sierra Leone</option>
                                            <option value="singapore">Singapore</option>
                                            <option value="slovakia">Slovakia</option>
                                            <option value="slovenia">Slovenia</option>
                                            <option value="solomon-islands">Solomon Islands</option>
                                            <option value="somalia">Somalia</option>
                                            <option value="south-africa">South Africa</option>
                                            <option value="south-korea">South Korea</option>
                                            <option value="south-sudan">South Sudan</option>
                                            <option value="spain">Spain</option>
                                            <option value="sri-lanka">Sri Lanka</option>
                                            <option value="sudan">Sudan</option>
                                            <option value="suriname">Suriname</option>
                                            <option value="sweden">Sweden</option>
                                            <option value="switzerland">Switzerland</option>
                                            <option value="syria">Syria</option>
                                            <option value="taiwan">Taiwan</option>
                                            <option value="tajikistan">Tajikistan</option>
                                            <option value="tanzania">Tanzania</option>
                                            <option value="thailand">Thailand</option>
                                            <option value="togo">Togo</option>
                                            <option value="tonga">Tonga</option>
                                            <option value="trinidad-and-tobago">Trinidad and Tobago</option>
                                            <option value="tunisia">Tunisia</option>
                                            <option value="turkey">Turkey</option>
                                            <option value="turkmenistan">Turkmenistan</option>
                                            <option value="tuvalu">Tuvalu</option>
                                            <option value="uganda">Uganda</option>
                                            <option value="ukraine">Ukraine</option>
                                            <option value="united-arab-emirates">United Arab Emirates</option>
                                            <option value="united-kingdom">United Kingdom</option>
                                            <option value="united-states">United States</option>
                                            <option value="uruguay">Uruguay</option>
                                            <option value="uzbekistan">Uzbekistan</option>
                                            <option value="vanuatu">Vanuatu</option>
                                            <option value="vatican-city">Vatican City</option>
                                            <option value="venezuela">Venezuela</option>
                                            <option value="vietnam">Vietnam</option>
                                            <option value="yemen">Yemen</option>
                                            <option value="zambia">Zambia</option>
                                            <option value="zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- two column input Service Type and Industry / Category -->
                            <div class="o7-get-the-quote__input-row-wrapper">
                                <!-- phone number  -->
                                <div class="o7-get-the-quote__input-wrapper">
                                    <label class="o7-input-label o7-get-the-quote__input-label" for="phone">Phone
                                        Number</label>
                                    <div class="o7-get-the-quote__prepend-input-wrapper">
                                        <div class="o7-input-group">
                                            <input type="tel" id="phone" name="phone" inputmode="tel"
                                                class="o7-input-field o7-get-the-quote__full-width"
                                                   placeholder="+88 017 8428 7229">
                                        </div>
                                    </div>
                                </div>
                                <!-- Industry / Category -->
                                <div class="o7-get-the-quote__input-wrapper">
                                    <!-- Industry / Category label-->
                                    <label class="o7-input-label o7-get-the-quote__input-label"
                                        for="industry-category">Industry / Category</label>
                                    <!-- Industry / Category input -->
                                    <div class="o7-input-group o7-get-the-quote__input-field-wrapper">
                                        <input type="text" id="industry-category" name="industry-category"
                                            class="o7-input-field o7-get-the-quote__input-industry-category o7-get-the-quote__full-width"
                                            placeholder="Apparel">
                                    </div>
                                </div>
                            </div>

                            <!-- two column input company name and website url -->
                            <div class="o7-get-the-quote__input-row-wrapper">
                                <!-- company name -->
                                <div class="o7-get-the-quote__input-wrapper">
                                    <!-- company label -->
                                    <label class="o7-input-label o7-get-the-quote__input-label" for="company-name">
                                        Company Name
                                    </label>
                                    <!-- company input -->
                                    <div class="o7-input-group">
                                        <input type="text" id="company-name" name="company-name"
                                            class="o7-input-field"
                                            placeholder="Company Name">
                                    </div>
                                </div>
                                <!-- website url -->
                                <div class="o7-get-the-quote__input-wrapper">
                                    <!-- website label -->
                                    <label class="o7-input-label o7-get-the-quote__input-label"
                                        for="website-url">Website
                                        URL</label>
                                    <div class="o7-get-the-quote__prepend-input-wrapper">
                                        <div class="o7-input-group">
                                            <!-- website input -->
                                            <input type="url" id="website-url" name="website-url"
                                                class="o7-input-field"
                                                placeholder="www.yourwebsite.com">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- two column input budget and country -->
                            <div class="o7-get-the-quote__input-row-wrapper">
                                <div
                                    class="o7-get-the-quote__input-budget-wrapper o7-get-the-quote__input-wrapper o7-get-the-quote__full-width">
                                    <!-- budget label -->
                                    <label class="o7-input-label o7-get-the-quote__input-label"
                                        for="budget-min">Budget</label>
                                    <div class="o7-get-the-quote__input-cash-wrapper">
                                        <!-- budget input wrapper -->
                                        <div
                                            class="o7-get-the-quote__prepend-input-wrapper o7-get-the-quote__cash-input-wrapper">
                                            <div class="o7-input-group o7-get-the-quote__input-field-wrapper">
                                                <!-- budget prepend one -->
                                                <span class="o7-input-group-text o7-get-the-quote__input-cash">
                                                    $
                                                </span>
                                                <!-- budget input one -->
                                                <input type="number" id="budget-min" name="budget-min"
                                                    class="o7-input-field o7-get-the-quote__input-budget o7-get-the-quote__full-width"
                                                    placeholder="500">
                                            </div>
                                        </div>
                                        <!-- budget input middle text -->
                                        <p class="o7-get-the-quote__budget-text">to</p>
                                        <div
                                            class="o7-get-the-quote__prepend-input-wrapper o7-get-the-quote__cash-input-wrapper">
                                            <div class="o7-input-group o7-get-the-quote__input-field-wrapper">
                                                <!-- budget prepend two -->
                                                <span class="o7-input-group-text o7-get-the-quote__input-cash">
                                                    $
                                                </span>
                                                <!-- budget input two -->
                                                <input type="number" id="budget-max" name="budget-max"
                                                    class="o7-input-field o7-get-the-quote__input-budget o7-get-the-quote__full-width"
                                                    placeholder="1000+">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service Type -->
                                <div class="o7-get-the-quote__input-wrapper">
                                    <!-- Industry / Category label -->
                                    <label class="o7-input-label o7-get-the-quote__input-label" for="service-type">Service
                                        Type</label>
                                    <!-- input Service Type -->
                                    <div class="o7-get-the-quote__prepend-input-wrapper">
                                        <select name="service-type" id="service-type"
                                            class="o7-get-the-quote__select-service">
                                            <option value="" selected>Select...</option>
                                            <option value="shopify">Shopify</option>
                                            <option value="webflow">Webflow</option>
                                            <option value="custom">Custom Apps</option>
                                            <option value="cro">CRO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="o7-get-the-quote__input-row-wrapper">
                                <!-- Attachment -->
                                <div class="o7-get-the-quote__input-wrapper">
                                    <!-- Attachment lable -->
                                    <label class="o7-input-label o7-get-the-quote__input-label"
                                        for="file-attachment">Attachment</label>
                                    <!-- Attachment input -->
                                    <div class="o7-input-group o7-get-the-quote__input-field-wrapper">
                                        <input type="file" id="file-attachment" name="file-attachment"
                                            class="o7-input-field o7-get-the-quote__input-file o7-get-the-quote__full-width">
                                    </div>
                                </div>

                                <!-- date -->
                                <div class="o7-get-the-quote__input-wrapper">
                                    <!-- date lable -->
                                    <label class="o7-input-label o7-get-the-quote__input-label" for="date">I want to
                                        launch my project on</label>
                                    <!-- date input -->
                                    <div class="o7-input-group o7-get-the-quote__input-field-wrapper">
                                        <input type="date" placeholder="mm-dd-yyyy" id="date" name="date"
                                            class="o7-input-field o7-get-the-quote__input-date o7-get-the-quote__full-width">
                                    </div>
                                </div>
                            </div>

                            <div class="o7-get-the-quote__text-area-wrapper">
                                <!-- message text area -->
                                <label class="o7-input-label o7-get-the-quote__input-label" for="message">Project
                                    Details <span class="text-danger">*</span> </label>
                                <div class="o7-input-group o7-get-the-quote__input-field-wrapper">
                                    <textarea name="message" id="message" class="o7-get-the-quote__input-text" required
                                        placeholder="I want to re-build my Shopify store..."></textarea>
                                </div>
                            </div>
                            <!-- submit button -->
                            <button type="submit" class="btn btn--secondary btn--medium btn--semi-rounder-full">
                                Submit
                            </button>
                        </form>
                        <div id="o7-toast" class="o7-toast"></div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        get_template_part('template-parts/map', null, []);
        ?>
        <?php
    $faq_data = array(
        'title_pointer' => '', // optional small accent text (left dot in your original)
        'title'         => 'Frequently Asked Questions',
        'sub_title'     => 'Answers to Things You Might Be Wondering',
        'button_text'   => 'Get In Touch',
        'sprite_path'   => get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg',
        'questions'     => array(
            array('q' => 'How long does a typical project take to complete?', 'a' => 'Timelines vary based on scope, but most projects take 4–8 weeks.'),
            array('q' => 'What is your design and development process?', 'a' => 'We follow a step-by-step process including discovery, design, development, testing, and launch.'),
            array('q' => 'What kind of testing do you do before launch?', 'a' => 'We perform functional testing, responsiveness checks, browser compatibility, and bug fixes.'),
            array('q' => 'Do you provide SEO best practices in your builds?', 'a' => 'Yes, we follow on-site SEO best practices like optimized tags, speed, and structure.'),
        ),
    );

    get_template_part('template-parts/faq', null, $faq_data);
    ?>

        <section class="o7-news-letter section">
            <div class="container">
                <div class="o7-news-letter__container">
                    <div class="o7-news-letter__form-wrapper">
                        <p class="title">
                            <span class="o7-content-card__title-pointer"></span>
                            Join Us
                        </p>
                        <h2 class="o7-news-letter__content-header">Get Digital Insights That Make an Impact</h2>

                        <div class="o7-news-letter__form">
                            <?php echo do_shortcode('[newsletter_form]'); ?>
                        </div>
                    </div>

                    <p class="o7-news-letter__paragraph">
                        By subscribing, you agree to our Privacy Policy and consent to receive updates from OptraSeven.
                    </p>

                    <div class="o7-news-letter__check-list">
                        <div class="o7-news-letter__check-list-content">
                            <p class="o7-news-letter__check-list-poiner">
                                <svg class="o7-icon o7-news-letter__check-list-checker" aria-hidden="true"
                                     focusable="false">
                                    <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#check" ?>></use>
                                </svg>
                            </p>
                            <p class="o7-news-letter__check-list-option">Weekly Updates</p>
                        </div>
                        <div class="o7-news-letter__check-list-content">
                            <p class="o7-news-letter__check-list-poiner">
                                <svg class="o7-icon o7-news-letter__check-list-checker" aria-hidden="true"
                                     focusable="false">
                                    <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#check" ?>></use>
                                </svg>
                            </p>
                            <p class="o7-news-letter__check-list-option">Exclusive Content</p>
                        </div>
                        <div class="o7-news-letter__check-list-content">
                            <p class="o7-news-letter__check-list-poiner">
                                <svg class="o7-icon o7-news-letter__check-list-checker" aria-hidden="true"
                                     focusable="false">
                                    <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#check" ?>></use>
                                </svg>
                            </p>
                            <p class="o7-news-letter__check-list-option">Unsubscribe Anytime</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

<?php get_footer(); ?>