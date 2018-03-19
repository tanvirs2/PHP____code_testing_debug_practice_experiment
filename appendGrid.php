<html>
<head>

    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#irow').click(function () {
                if ($('#row').val() == 0) {
                    $('#mtable tbody').append($("#mtable tbody tr:last").clone());
                    $('#mtable tbody tr:last :checkbox').attr('checked', false);
                    $('#mtable tbody tr:last td:first').html($('#row').val());
                } else {
                    alert('Enter Text');
                }
            });
            $('#icol').click(function () {
                if ($('#col').val() == 0) {
                    $('#mtable tr').append($("<td>"));
                    $('#mtable thead tr>td:last').html($('#col').val());
                    $('#mtable tbody tr').each(function () {
                        $(this).children('td:last').append($('<input type="">'))
                    });
                } else {
                    alert('Enter Text');
                }
            });
        });
    </script>
</head>
<body>
<table border="1" id="mtable">
    <thead>
    <tr>
        <td>Item</td>
        <td>Red</td>
        <td>Green</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Some Item</td>
        <td><input type="" value="a"/></td>
        <td><input type="" value="a"/></td>
    </tr>
    </tbody>
</table>
    <br>
    <br>
        <input id="row" placeholder="Enter Item Name" value=""/>
        <button id="irow">Insert Row</button>
        <br/><br/>
        <input id="col" placeholder="Enter Heading" value=""/>
        <button id="icol">Insert Column</button>
</body>
</html>