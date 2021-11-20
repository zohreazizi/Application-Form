<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}"/>
    <title>Online ticketing</title>
    <style>
        html {
            background: url(5.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>
<body dir="rtl">

<label for="departure_place">مبدا</label>
<input type="text" id="departure_place" name="departure_place">
<br><br>
<label for="arrival_place">مقصد</label>
<input type="text" id="arrival_place" name="arrival_place">
<br><br>
<label for="departure_date">تاریخ حرکت</label>
<input type="date" id="departure_date" name="departure_date">
<button type="submit" id="ajaxSubmit">جستجو</button>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
</script>

<script>
        $(document).ready(function () {
            $('#ajaxSubmit').click(function (e) {
                var departure_place = $("#departure_place").val();
                var arrival_place = $("#arrival_place").val();
                var departure_date = $("#departure_date").val();
                // e.preventDefault();
                //
                // $.ajaxSetup({
                //
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                //     }
                // });
                // jQuery.support.cors = true;
                $.ajax({
                    url: "http://127.0.0.1:7000/api/rides",
                    type: 'POST',
                    dataType: "json",
                    data: {
                        departure_place: departure_place,
                        arrival_place: arrival_place,
                        departure_date: departure_date,

                    },

                    success: function (data) {
                            console.log(data);
                    },
                    // error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //     document.getElementById('formRequestErrors').innerHTML = XMLHttpRequest.responseText;
                    // },

                });
            });
        });

</script>
</body>
</html>
