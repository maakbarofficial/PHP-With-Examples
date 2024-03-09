<?php
// AJAX = Asynchronous JavaScript and XML.

// AJAX is a technique for creating fast and dynamic web pages.

// AJAX allows web pages to be updated asynchronously by exchanging small amounts of data with the server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.

// Classic web pages, (which do not use AJAX) must reload the entire page if the content should change.

// Examples of applications using AJAX: Google Maps, Gmail, Youtube, and Facebook tabs.

// AJAX is based on internet standards, and uses a combination of:

// XMLHttpRequest object (to exchange data asynchronously with a server)
// JavaScript/DOM (to display/interact with the information)
// CSS (to style the data)
// XML (often used as the format for transferring data)
?>

<html>

<head>
    <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "ajaxsearch.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>

<body>

    <form>
        <select name="users" onchange="showUser(this.value)">
            <option value="">Select a person:</option>
            <option value="1">Ali</option>
            <option value="2">Imran</option>
            <option value="3">Akbar</option>
            <option value="4">Sufyan</option>
        </select>
    </form>
    <br>
    <div id="txtHint"><b>Person info will be listed here...</b></div>

</body>

</html>