$(document).ready(function () {
    // Initialize Smart Cart    	
    $('#smartcart').smartCart();
    //set timeout for alerts
    setTimeout(function () {

        // Closing the alert
        $('.alert').alert('close');

    }, 3000);

});