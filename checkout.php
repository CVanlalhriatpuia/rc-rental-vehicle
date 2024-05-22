<?php
if (isset($_GET)) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment Integartion (Stripe)</title>
        <link rel="stylesheet" href="./css/_style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
                position: relative;
                /* Add this to make absolute positioning work */
            }

            .back {
                background-color: #007bff;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                position: absolute;
                /* Position the button absolutely */
                top: 20px;
                /* Distance from the top */
                left: 20px;
                /* Distance from the left */
            }

            .back:hover {
                background-color: #0056b3;
            }

            .row {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .form-container {
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            form div {
                margin-bottom: 20px;
            }

            label {
                font-weight: bold;
            }

            input[type="text"],
            input[type="number"] {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
                font-size: 16px;
            }

            button[type="button"] {
                display: block;
                margin: auto;
            }
        </style>


    </head>

    <body>
        <button type="button" onclick="goback()" class="back">Go Back</button>
        <div class="row">
            <div class="col-md-6">
                <div class="form-container">
                    <form autocomplete="off" action="success.php" method="POST">
                        <div>
                            <label>Customer Name</label>
                            <input type="text" name="c_name" required />
                        </div>
                        <div>
                            <label>Address</label>
                            <input type="text" name="address" required />
                        </div>
                        <div>
                            <label>Contact number</label>
                            <input type="number" id="ph" name="phone" pattern="\d{10}" maxlength="10" required />
                        </div>

                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="pk_test_51P6xJESAzZwvoadXwzdQMltO6I4Skrvnv7LjQ2zbxmwyhwP1eBGtyypj4r6NuZ66coi6RSPOS434bHZrhBCddCBW00jEBLVrrm"
                            data-amount=<?php echo str_replace(",", "", $_GET["price"]) * 100 ?>
                            data-name="<?php echo $_GET["item_name"] ?>" data-description="<?php echo $_GET["item_name"] ?>"
                            data-image="<?php echo $_GET["image"] ?>" data-currency="inr" data-locale="auto">
                            </script>
                    </form>
                </div>
            </div>
        </div>

        <?php
}
?>
    <script>
        function goback() {
            window.history.go(-1);
        }

        $('#ph').on('keypress', function () {
            var text = $(this).val().length;
            if (text > 9) {
                return false;
            } else {
                $('#ph').text($(this).val());
            }

        });
    </script>
</body>

</html>