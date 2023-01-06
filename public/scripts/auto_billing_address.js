//for finding if the checkbox was checked or not
var __billingAddressCheckbox = document.getElementById("billing_address_check");  

//for reading the input from the registered address field
var __registeredAddressInput = document.getElementById("registered_address_input");

//for assigning the input to the billing address field
var __billingAddressInput = document.getElementById("billing_address_input");


//adding an eventListener to check if checkbox was checked or not
__billingAddressCheckbox.addEventListener("change", function() {
    if(this.checked == true && __registeredAddressInput.value != null) {
        //if the checkbox is checked and registered address input has some value
        __billingAddressInput.value = __registeredAddressInput.value;
    }

    else {
        alert("Something went wrong");
    }
});