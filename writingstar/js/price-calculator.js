//-----------------NEW RATES ACCORDING TO STANDARD-----------------

/*
PriceArray is a 4 dimension array
1st dimension contains service i.e. 3 entries: writing, editing & proofreading
2nd dimension contains standard i.e. 3 entries: 2:2 standard, 2:1 standard & 1st standard
3rd dimension contains delivery time i.e. 11 entries: 15 days, 10 days, 7 days, 5 days, 4 days, 
                                                      3 days, 48 hours, 24 hours, 12 hours, 6 hours, 3 hours    
4th dimension cantains level i.e. 5 entries: gcse, A level, honours, masters & doctoral
*/

/*
POSSIBLE VALUES

1st dimension - service: Writing [0], Editing [1] & Proofreading [2]
2nd dimension - standard: 2:2 standard [0], 2:1 standard [1], 1st standard [2]
3rd dimension - delivery time:
    15 days  [0]
    10 days  [1]
    7 days   [2]
    5 days   [3]
    4 days   [4]
    3 days   [5]
    48 hours [6]
    24 hours [7]
    12 hours [8]
    6 hours  [9]
    3 hours  [10]

4th dimension - level: gcse [0], A level [1], honours [2], masters [3] & doctoral [4]
*/

//you can access any price by selecting PriceArray[service][standard][delivery time][level]

var PriceArray = [
new Array(//For writing [0]
        new Array(//For standard 2:2          [0] 
            [8.00, 10.25, 11.50, 13.50, 14.50, 14.75],
		    [8.25, 10.50, 11.75, 13.75, 14.75, 15.75],
		    [10.25, 11.50, 12.25, 14.25, 15.25, 16.25],
            [11.25, 12.75, 13.25, 15.25, 16.25, 17.25],
            [12.25, 13.50, 15.00, 17.25, 18.25, 19.25],
            [14.25, 15.00, 15.75, 18.25, 19.25, 20.25],
            [15.75, 16.50, 17.25, 21.25, 25.25, 26.25],
            [20.25, 21.25, 23.75, 24.50, 28.50, 29.50],
            [22.00, 23.75, 25.25, 26.00, 30.00, ],
            [24.50, 26.00, 26.75, 27.75, 31.70, ],
            [25.25, 26.75, 28.50, 30.00, 32.25, ]
            ),

        new Array(//For standard 2:1          [1]
            [10.50, 11.00, 13.00, 16.25, 17.00],
            [10.75, 11.25, 13.25, 17.25, 18.25],
            [11.75, 12.25, 14.25, 18.25, 19.25],
            [12.75, 13.25, 15.25, 19.25, 21.25],
            [13.75, 14.25, 16.25, 20.25, 23.25],
            [14.75, 15.25, 17.25, 21.25, 24.25],
            [15.00, 17.25, 19.25, 22.25, 26.50],
            [15.25, 19.25, 21.25, 24.25, 33.00],
            [16.75, 22.25, 24.25, 27.25, 37.00],
            [18.75, 26.25, 27.25, 32.25, 40.00],
            [20.75, 28.25, 30.25, 33.25, 43.00]
        ),
        new Array(//For standard 1st standard  [2]
            [11.00, 11.50, 13.50, 16.75, 17.50],
            [11.25, 11.75, 13.75, 17.75, 18.75],
            [12.25, 12.75, 14.75, 18.75, 19.75],
            [13.25, 13.75, 15.75, 19.75, 21.75],
            [14.25, 14.75, 16.75, 20.75, 23.75],
            [15.25, 15.75, 17.75, 21.75, 24.75],
            [15.50, 17.75, 19.75, 22.75, 27.00],
            [15.75, 19.75, 21.75, 24.75, 33.50],
            [17.25, 22.75, 24.75, 27.75, 37.50],
            [19.25, 26.75, 27.75, 32.75, 40.50],
            [21.25, 28.75, 30.75, 33.75, 43.50]
        )
    ),
new Array(//For editing [1]
        new Array(//For standard 2:2           [0]
            [7.00, 7.50, 9.50, 12.75, 13.50],
            [7.25, 7.75, 9.75, 13.75, 14.75],
            [8.25, 8.75, 10.75, 14.75, 15.75],
            [9.25, 9.75, 11.75, 15.75, 17.75],
            [10.25, 10.75, 12.75, 16.75, 19.75],
            [11.25, 11.75, 13.75, 17.75, 20.75],
            [11.50, 13.75, 15.75, 18.75, 23.00],
            [11.75, 15.75, 17.75, 20.75, 29.50],
            [13.25, 18.75, 20.75, 23.75, 33.50],
            [15.25, 22.75, 23.75, 28.75, 36.50],
            [17.25, 24.75, 26.75, 29.75, 39.50]
        ),
        new Array(//For standard 2:1           [1]
            [7.50, 8.00, 10.00, 13.25, 14.00],
            [7.75, 8.25, 10.25, 14.25, 15.25],
            [8.75, 9.25, 11.25, 15.25, 16.25],
            [9.75, 10.25, 12.25, 16.25, 18.25],
            [10.75, 11.25, 13.25, 17.25, 20.25],
            [11.75, 12.25, 14.25, 18.25, 21.25],
            [12.00, 14.25, 16.25, 19.25, 23.50],
            [12.25, 16.25, 18.25, 21.25, 30.00],
            [13.75, 19.25, 21.25, 24.25, 34.00],
            [15.75, 23.25, 24.25, 29.25, 37.00],
            [17.75, 25.25, 27.25, 30.25, 40.00]
        ),
        new Array(//For standard 1st standard  [2]
            [8.00, 8.50, 10.50, 13.75, 14.50],
            [8.25, 8.75, 10.75, 14.75, 15.75],
            [9.25, 9.75, 11.75, 15.75, 16.75],
            [10.25, 10.75, 12.75, 16.75, 18.75],
            [11.25, 11.75, 13.75, 17.75, 20.75],
            [12.25, 12.75, 14.75, 18.75, 21.75],
            [12.50, 14.75, 16.75, 19.75, 24.00],
            [12.75, 16.75, 18.75, 21.75, 30.50],
            [14.25, 19.75, 21.75, 24.75, 34.50],
            [16.25, 23.75, 24.75, 29.75, 37.50],
            [18.25, 25.75, 27.75, 30.75, 40.50]
        )
    ),
new Array(//For proofing [2]
        new Array(
            [4.00, 4.50, 6.50, 9.75, 10.50],
            [4.25, 4.75, 6.75, 10.75, 11.75],
            [5.25, 5.75, 7.75, 11.75, 12.75],
            [6.25, 6.75, 8.75, 12.75, 14.75],
            [7.25, 7.75, 9.75, 13.75, 16.75],
            [8.25, 8.75, 10.75, 14.75, 17.75],
            [8.50, 10.75, 12.75, 15.75, 20.00],
            [8.75, 12.75, 14.75, 17.75, 26.50],
            [10.25, 15.75, 17.75, 20.75, 30.50],
            [12.25, 19.75, 20.75, 25.75, 33.50],
            [14.25, 21.75, 23.75, 26.75, 36.50]
        ),
        new Array(
            [4.50, 5.00, 7.00, 10.25, 11.00],
            [4.75, 5.25, 7.25, 11.25, 12.25],
            [5.75, 6.25, 8.25, 12.25, 13.25],
            [6.75, 7.25, 9.25, 13.25, 15.25],
            [7.75, 8.25, 10.25, 14.25, 17.25],
            [8.75, 9.25, 11.25, 15.25, 18.25],
            [9.00, 11.25, 13.25, 16.25, 20.50],
            [9.25, 13.25, 15.25, 18.25, 27.00],
            [10.75, 16.25, 18.25, 21.25, 31.00],
            [12.75, 20.25, 21.25, 26.25, 34.00],
            [14.75, 22.25, 24.25, 27.25, 37.00]
        ),
        new Array(
            [5.00, 5.50, 7.50, 10.75, 11.50],
            [5.25, 5.75, 7.75, 11.75, 12.75],
            [6.25, 6.75, 8.75, 12.75, 13.75],
            [7.25, 7.75, 9.75, 13.75, 15.75],
            [8.25, 8.75, 10.75, 14.75, 17.75],
            [9.25, 9.75, 11.75, 15.75, 18.75],
            [9.50, 11.75, 13.75, 16.75, 21.00],
            [9.75, 13.75, 15.75, 18.75, 27.50],
            [11.25, 16.75, 18.75, 21.75, 31.50],
            [13.25, 20.75, 21.75, 26.75, 34.50],
            [15.25, 22.75, 24.75, 27.75, 37.50]
        )
    )
];

//-----------------IMPLEMENTING PRICE CALCULATE FUNCTIONS-----------------

function calculate_price() {

    var discounts = true;
    var poundSign = '&#163;';
    var deliverytime = $('#urgency').val();
    var level = $('#level').val();
    var service = $("#service").val();
    
    if (service == undefined) service = 0;
    var selectedService = $('input[name=service]:checked').val();
    var standard = $("#standard").val();
    if (standard == undefined) standard = 0;

    var price = PriceArray[service][standard][deliverytime][level];

    var pages = $('#pages').val();
    var words = pages * 275;
    var totals = Math.round(price * pages * 100) / 100;
    totals = totals * 2;
    $('#actual_price').html(poundSign + format_price(totals));
    var discount25 = Math.round(totals * 50) / 100;
    $('#discount_price').html(poundSign + format_price(discount25));

    //$('#price_div').html("&#163; " + format_price(totals));
}

function format_price(x) {
    x = Math.round(x * Math.pow(10, 2)) / Math.pow(10, 2);
    x = x.toString().split(".");
    if (x.length < 2) x[1] = "00"; else
        if (x[1].length < 2) x[1] += "0";
    return x.join(".");
}

//---------------Calculating Pages From Words-----------------------
function calculate_pagesCp() {

    var Space = $('#ddl_LineSpacing').val();
    var words = $('#txt_now').val();
    var pages = words / 275;
    pages = Math.ceil(pages);
    if (Space == "2") {
        pages = Math.ceil(pages / 2);
    }
    $('#txt_nop').val(pages);


    //var words = $('#txt_now').val();
    //var pages = words / 275;
    //pages = Math.ceil(pages);
    //$('#txt_nop').val(pages);
    //calculate_price();
}
//---------------Calculating Words From Pages-----------------------
function calculate_wordsCp() {
    var Space = $('#ddl_LineSpacing').val();
    var pages = $('#txt_nop').val();
    var words = pages * 275;
    if (Space == "2") {
        words = Math.ceil(words * 2);
    }
    $('#txt_now').val(words);
    


    //var pages = $('#txt_nop').val();
    //var words = pages * 275;
    //$('#txt_now').val(words);
    //calculate_price();
}

//keyup change

//$('.opr').on('click',function () {
//    alert("keyup");
//    //calculate_price();
//});


//----------------Calculating price from placeorder page ------------------------------------
function CalculateOrderPrice(deliverytime, level, service, standard, pages, featuresPrice, space) {

    var price_without_spacing = PriceArray[service][standard][deliverytime][level]; //without adding spacing price
    var price = price_without_spacing;
    if (space == "2") {
        price = price * 2;
    }

    var totals = Math.round(price * pages * 100) / 100;
    //var discount25 = Math.round(totals * 50) / 100;
    //var discount25 = Math.round(totals * 50) / 100;

    //lbl_ppg    --> Price Per Page 
    //lbl_atotal --> Total Pages Price Without Discount
    //lbl_dtotal --> Price with 50 % Discount 
    //lbl_ftotal --> Features Item Price 
    //lbl_gtotal --> Total Price (Pages + Features) 

    var paytotal = totals + featuresPrice;

    var OrderPrice = new Object();
    //OrderPrice.lbl_ppg = format_price(Math.round(price_without_spacing * 100) / 100);
    OrderPrice.lbl_ppg = (format_price(Math.round(price_without_spacing * 100) / 100)) * 2;

    OrderPrice.price = format_price(Math.round(price * 100) / 100);
    OrderPrice.lbl_atotal = format_price(totals * 2);
    OrderPrice.lbl_dtotal = format_price(totals);
    OrderPrice.lbl_ftotal = format_price(featuresPrice);
    OrderPrice.lbl_gtotal = format_price(paytotal);

    return OrderPrice;
}