<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.0/css/iziModal.min.css">

    <title>Document</title>
</head>
<body>

<!-- Trigger to open Modal -->
<a href="https://github.com/dolce/iziModal" class="trigger">Modal</a>
<!-- Modal structure -->
<div id="modal" style="margin-right: 0">


</div>

<div id="modal2" style="margin-left: 0">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

</div>


</body>
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.0/js/iziModal.min.js"></script>


<script>


    $("#modal").iziModal({

        onOpening: function(modal){

            modal.startLoading();

            $("#modal").load('https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.0/js/iziModal.min.js');
        }

    });

    $(document).on('click', '.trigger', function (event) {
        event.preventDefault();
        $('#modal').iziModal('open');
    });


</script>
</html>

