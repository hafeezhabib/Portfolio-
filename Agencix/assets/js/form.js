// ========================================================
$(document).ready(function () {
    var input = document.querySelector("#phone");
    iti = window.intlTelInput(input, {
        dropdownContainer: document.body,
        hiddenInput: "full_number",
        initialCountry: "us",
        placeholderNumberType: "MOBILE",
        preferredCountries: ['us ', 'gb'],
        separateDialCode: false,
    });
});
var DefaultRegion = $('#phone').attr('data-default-region').toLowerCase();

if (DefaultRegion == 'us') {
    $('#CountryIsoCode').val('US');
    //$('#CountryCode').val(220);
    $('#Phonecode').val('+1');
    $('.country-code').text('+1');
    $("#phone").val('+1');
}
$("#phone").on("keyup", function (e, countryData) {
    var data = iti.getSelectedCountryData();
    // console.log(data);
    //$('#CountryCode').val(dbCode[data.iso2]);
    $('#CountryIsoCode').val(data.iso2);
    $('#Phonecode').val('+' + data.dialCode);
});

$(document).on('click', '.iti__country-list li', function (e) {
    $('#Phonecode').val($(this).find('.iti__dial-code').text());
    country_code = $(this).attr('data-country-code');
    //var code = dbCode[country_code];
    //$('#CountryCode').val(code);
    $('#CountryIsoCode').val(country_code);
});

$('#phone').focusout(() => {
    checkPhoneNumber();
});
// Validation on Phone Field.
let checkPhoneNumber = () => {
    let phoneNumber = $('#phone').val();
    let Phonecode = $("#Phonecode").val();
    if (Phonecode != '+undefined') {
        if (phoneNumber.indexOf(Phonecode) == '-1') {
            $("#phone").val(Phonecode + phoneNumber.substring(phoneNumber.lastIndexOf('+') + 1));
        };
    }
    if (phoneNumber == '' || phoneNumber.length < 7) {
        $('#phone').removeClass('parsley-success');
        $('#phone').addClass('parsley-error');
        return false;
    } else if (Phonecode == '+undefined') {
        $('#phone').removeClass('parsley-success');
        $('#phone').addClass('parsley-error');
        return false;
    } else if (phoneNumber.lastIndexOf('+') != 0) {
        $('#phone').removeClass('parsley-success');
        $('#phone').addClass('parsley-error');
        return false;
    } else {
        $('#phone').addClass('parsley-success');
        $('#phone').removeClass('parsley-error');
        return true;
    }
}
$("#phone").on('keyup', function (e) {
    // console.log(iti);
    //phoneNumbertextChange();
    var ReturnValue = NumbersOnly(e);
    // phoneNumbertextChange();
    return ReturnValue;
    //return true;
});

// Allow only numbers
var NumbersOnly = function (e) {
    if (e.currentTarget.value.indexOf(' ') >= 0) {
        e.currentTarget.value = e.currentTarget.value.replace(/\s/g, '')
        return true;
    }
    let OrignalValue = e.currentTarget.value.substring(e.currentTarget.value.indexOf('+') + 1, 2);
    let number = parseInt(e.currentTarget.value.substring(e.currentTarget.value.indexOf('+') + 1));
    if (!isNaN(number)) {
        if (OrignalValue == 0 && number != 0) {
            e.currentTarget.value = '+' + OrignalValue + number;
        } else {
            e.currentTarget.value = '+' + number;
        }
        //e.currentTarget.value = '+' + number;
        return true;
    }
    e.currentTarget.value = '+';
    return false;
}

// Disable the keys which aren't allowed.
var CharactersAndNumbers = function (Text) {
    if (Text.keyCode == 8 ||
        Text.keyCode == 9 ||
        Text.keyCode == 32 ||
        Text.keyCode == 35 ||
        Text.keyCode == 36 ||
        Text.keyCode == 37 ||
        Text.keyCode == 39 ||
        Text.keyCode == 46 ||
        Text.keyCode == 0) {
        //Leving backspace, tab, end, home, left arrow, right arrow, delete and period
        return true;
    } else if (Text.keyCode >= 65 && Text.keyCode <= 90) {
        return true;
    } else if (Text.keyCode >= 48 && Text.keyCode <= 57) {
        return true;
    } else if (Text.keyCode >= 96 && Text.keyCode <= 105) {
        return true;
    } else {
        return false;
    }
}
$('#submit').on('click', function (e) {
    var isEnteredNumber = checkPhoneNumber();
    if (isEnteredNumber == true) {
        $('#phone').removeClass('parsley-error');
        $('#phone').addClass('parsley-success');
    } else {
        $('#phone').removeClass('parsley-success');
        $('#phone').addClass('parsley-error');
    }
});

// contact-form Success Message
$(document).ready(function () {
    $("#contact-form").submit(function (e) {
        e.preventDefault();
        var hcaptchaVal = $('[name=h-captcha-response]').val();
        if (hcaptchaVal == "") {
            $("#auto-response-failed").slideToggle("slow").delay(7000).slideToggle(500);
        }
        else if($("#phone").hasClass("parsley-success")) {
            //show success message
            $("#auto-response").slideToggle("slow").delay(7000).slideToggle(500);
            //form reset
            $("#contact-form")[0].reset();
            // grecaptcha.reset();
        }
    });
});