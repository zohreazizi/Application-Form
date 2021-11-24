<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}"/>
    <title>Online ticketing</title>
    <link type="text/css" rel="stylesheet" href="css/persianDatepicker-default.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <style>
        @font-face {
            font-family: Samim !important;
            src: url('./public/samim-font-v2.0.1/Samim.eot');
            src: url('./public/samim-font-v2.0.1/Samim.eot?#iefix') format('FontName-opentype'),
            url('./public/samim-font-v2.0.1/Samim.woff') format('woff'),
            url('./public/samim-font-v2.0.1/Samim.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        #not-found {
            text-align: center;
            display: flex;
            background-color: #bb1d1d;
            margin-top: 50px;
            padding: 20px;
            width: fit-content;
            border-radius: 10px;
            color: white;
            /* margin: auto; */
            margin-right: 400px;
        }

        #city {
            width: 844px;
            height: 344px;
            display: flex;
            margin-right: 23px;
        }

        #ajaxSubmit {
            width: 350px;
            background-color: #092061;
            color: white;
            border-radius: 3px 0 0 3px;
        }

        .form-control {
            border-radius: 0;
        }

        #ticket {
            padding: 17px 113px;
            display: flex;
        }

        #sub-ticket {
            padding: 20px 2px;
            box-shadow: 0 2px 4px rgb(32 65 90 / 10%), 0 1px 1px rgb(32 65 90 / 10%);
            border: 1px solid #E4ECF0;
            border-radius: 12px;
            background-color: #fff;
            height: 200px;
            width: 1200px
        }

        .ticket-wrapper {
            font-size: 21px;
            padding: 2px 43px;
            height: 20px;
            margin-bottom: 24px;
            flex-wrap: nowrap;
            align-items: stretch;
            flex-direction: row;
            justify-content: space-between;
        }

        #price {
            color: #3785cb
        }

        .icon-ticket {
            height: 17px;
            width: 17px;
            margin-left: 10px;
        }

        #reserve-btn {
            width: 170px;
            background-color: #FF4232;
        }

        #carousel-text {
            font-size: 14px;
        }

        #our-companies {
            display: flex;
            justify-content: center;
            margin-top: 25px;
        }
    </style>
</head>
<body dir="rtl" style="background-color: #f8f4f438">
<nav class="navbar navbar-expand-lg navbar-light bg-light"
     style="background-color: #f8f4f4 !important;box-shadow: 0px 6px 12px rgb(32 65 90 / 10%), 0px 1px 4px rgb(32 65 90 / 10%);">
    <a class="navbar-brand" href="#">خانه</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">ثبت نام</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ورود</a>
            </li>
        </ul>
    </div>
</nav>
<div class="row">
    <div class="col-lg-7">
        <img id="city" src="{{url('/images/5.jpg')}}" alt="f"/>

    </div>
    <div class="col-lg-4 align-self-center">
        <div>
            <h1 id="big-text" style="margin-bottom: 50px;text-align: right;color: #092061">رزرو آنلاین بلیت اتوبوس</h1>
            <p style="text-align: right">برای خرید آنلاین بلیط اتوبوس کافیست مبدا، مقصد و تاریخ سفر خود را انتخاب کنید.
                پس از کلیک روی جستجو، لیست قیمت بلیط اتوبوس به مقصد مورد نظر شما ظاهر می‌شود. در این لیست، انتخابهای
                متعددی پیش روی شماست. برای اینکه گزینه‌ ها را برای خرید بلیط محدودتر کنید، ابزارهای مختلفی در اختیار
                شماست.</p>
        </div>
    </div>
</div>
<div>
    <div class="col-lg-12 ">
        <div class="justify-content-end mr-3"
             style="padding: 17px 113px;display: flex;border-radius: 3px;box-shadow: 0 6px 12px rgb(32 65 90 / 10%), 0px 1px 4px rgb(32 65 90 / 10%);">
            <div class="input-group mx-auto" style="width: 70%">
                <div class="input-group-prepend">
                    {{--                    <img src="./public/images/map-marker-alt-solid.svg" alt="">--}}
                </div>
                <input type="text" id="departure_place" name="departure_place" class="form-control" placeholder="مبدا">
                <input type="text" id="arrival_place" name="arrival_place" class="form-control" placeholder="مقصد">
            </div>
            <br><br>
            <input placeholder="تاریخ رفت" type="text" style="width: 40% !important;" id="departure_date"
                   class="form-control"
                   name="departure_date">
            <button type="submit" class="btn" id="ajaxSubmit">جستجو</button>
        </div>
    </div>
</div>

<div id="third-section">
    <div id="hidden" class="col-lg-12"></div>
</div>
{{--hidden after submit--}}
<div class="row" id="companies">
    <div class="col-lg-6" style="display: flex;justify-content: center;">
        <div id="slider" style="height: 400px; width: 100%">
            <div style="margin-right: 120px;margin-top: 20px;" id="carouselExampleIndicators" class="carousel slide"
                 data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{url('/images/sl.jpg')}}" alt="First slide">
                        <div class="carousel-caption">
                            <h5>آرتا سبلان پایانه غرب
                            </h5>
                            <p id="carousel-text"> تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد
                                و زمان مورد نیاز
                                شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                استفاده قرار گیرد.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{url('/images/sl.jpg')}}" alt="Second slide">
                        <div class="carousel-caption">
                            <h5>تعاونى 11 ترمينال غرب
                            </h5>
                            <p id="carousel-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                                استفاده از طراحان گرافیک
                                است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط
                                فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد،
                                کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می
                                طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و
                                فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری
                                موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                                گیرد.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{url('/images/sl.jpg')}}" alt="Third slide">
                        <div class="carousel-caption">
                            <h5>سير و سفر
                            </h5>
                            <p id="carousel-text">با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                                خلاقی و فرهنگ
                                پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در
                                ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای
                                اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <h1 id="our-companies">شرکت های طرف قرارداد ما</h1>
    </div>
</div>
{{--Sending ajax request to API endpoint--}}
<script>
    $(document).ready(function () {
        $('#ajaxSubmit').click(function (e) {
            $('#companies').hide();
            $('#hidden').empty();
            var departure_place = $("#departure_place").val();
            var arrival_place = $("#arrival_place").val();
            var departure_date = moment.from($("#departure_date").val(), 'fa', 'YYYY/MM/DD').locale('en').format('YYYY/MM/DD');
            e.preventDefault();

            $.ajax({
                url: "http://127.0.0.1:7000/api/rides",
                type: 'POST',
                dataType: "json",
                data: {
                    departure_place: departure_place,
                    arrival_place: arrival_place,
                    departure_date: departure_date
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },

                success: function (data) {
                    console.log(data.data);
                    if (data.data.length === 0) {

                        $('#hidden').append('       <div id="not-found">\
                            <h1>هیچ سفری با این مشخصات پیدا نشد</h1>\
                    </div>')
                    }
                    $.each(data.data, function (key, item) {
                        $('#hidden').append(' <div id="ticket" class="justify-content-end mr-3">\
                            <div id="sub-ticket" class="mx-auto">\
                            <div class="d-flex ticket-wrapper">\
                            <span> </span>\
                        <div id="price">' + item.price + '<span>تومان</span></div>\
                    </div>\
                        <div class="d-flex ticket-wrapper">\
                            <div><img src="{{url('/images/dot.png')}}" class="icon-ticket">' + item.departure_time + '</div><span>' + item.departure_place + '</span>\
                            <span><span>ظرفیت باقیمانده:</span>' + item.remaining_capacity + '</span>\
                        </div>\
                        <div class="d-flex ticket-wrapper">\
                            <div><img src="{{url('/images/placeholder.png')}}" class="icon-ticket">' + item.arrival_time + '</div><span>' + item.arrival_place + '</span>\
                            <span><button id="reserve-btn" value="' + item.id + '" class="btn btn-lg">رزرو</button></span>\
                        </div>\
                    </div>\
                    </div>')
                    })
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    console.log(XMLHttpRequest.responseText);
                },

            });
        });
        $('#reserve-btn').click(function (e) {
            var ticket = $(this).attr("value");
            // alert(ticket);
            e.preventDefault();
            $.ajax({
                url: "http://127.0.0.1:7000/api/rides",
                type: 'POST',
                dataType: "json",
                data: {
                    departure_place: departure_place,
                    arrival_place: arrival_place,
                    departure_date: departure_date
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },

                success: function (data) {
                    console.log(data.data);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    console.log(XMLHttpRequest.responseText);
                },
            });
        })
    })

</script>
{{--Persian datepicker--}}
<script src="https://unpkg.com/jalali-moment/dist/jalali-moment.browser.js"></script>
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/persianDatepicker.min.js"></script>
<script type="text/javascript">

        $(function() {
        $("#departure_date").persianDatepicker();
    });
        $("#departure_date").persianDatepicker({
        months: ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند"],
        dowTitle: ["شنبه", "یکشنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنج شنبه", "جمعه"],
        shortDowTitle: ["ش", "ی", "د", "س", "چ", "پ", "ج"],
        showGregorianDate: !1,
        persianNumbers: !0,
        formatDate: "YYYY/MM/DD",
        selectedBefore: !1,
        selectedDate: null,
        startDate: null,
        endDate: null,
        prevArrow: '\u25c4',
        nextArrow: '\u25ba',
        theme: 'default',
        alwaysShow: !1,
        selectableYears: null,
        selectableMonths: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
        cellWidth: 78,
        cellHeight: 39,
        fontSize: 18,
        isRTL: !1,
        calendarPosition: {
        x: 0,
        y: 0,
    },
        onShow: function () { },
        onHide: function () { },
        onSelect: function () { },
        onRender: function () { }
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
