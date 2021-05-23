
<!DOCTYPE html>

<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>

<body>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>
<input type="number" id="amount" onchange="fun()" >
    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=Ae1pgjrYJUqbz_Zjvj_-wAsa96DTZHHlWyAiyBkQFi7_eln6tTuvkkcjJiZCLIhIvGJ73wHNiN41u29_&currency=USD"></script>

    <script>
    var amount=0;
    
    function fun(){
    amount=document.getElementById("amount").value;
    }    // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: amount
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    console.log("result:",details)
            alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');
    </script>

    <!-- headers etc. omitted -->
<script>
function callPHP(params) {
    var httpc = new XMLHttpRequest(); // simplified for clarity
    var url = "get_data.php";
    httpc.open("POST", url, true); // sending as POST

    httpc.onreadystatechange = function() { //Call a function when the state changes.
        if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
            alert(httpc.responseText); // some processing here, or whatever you want to do with the response
        }
    };
    httpc.send(params);
}
</script>
<a href="#" onclick="callPHP('lorem=ipsum&foo=bar')">call PHP script</a>
<!-- rest of document omitted -->
</body>
    