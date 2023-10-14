<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container {
        display: flex;
        justify-content: center;
    }

    #reader {
        width: 600px;
        height: 600px;
    }
</style>

<body>
    <div class="container">
        <div id="reader"></div>
    </div>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script type="text/javascript">
        function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:
            // console.log(`Code matched = ${decodedText}`, decodedResult);

            let unique_id = decodedText.substr(decodedText.length - 4);
            console.log(unique_id);
            window.location = `/master-motor/${unique_id}`;
            html5QrcodeScanner.clear();
        }

        // function onScanFailure(error) {
        //     // handle scan failure, usually better to ignore and keep scanning.
        //     // for example:
        //     console.warn(`Code scan error = ${error}`);
        // }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 250
                }
            },
            /* verbose= */
            false);
        html5QrcodeScanner.render(onScanSuccess);
    </script>
</body>

</html>