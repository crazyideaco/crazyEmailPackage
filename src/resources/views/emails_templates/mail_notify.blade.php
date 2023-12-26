<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
        integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
        integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>{{ $mailData['project_name'] }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <style>
        /* p {
            font-family: 'Cairo', sans-serif;
            font-weight: 600;
        } */
        .main {
            text-align: center;
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .main-information {
            margin-top: 40px;
            background-color: #0a909b;
            color: white;
            padding: 1rem 1rem;
            border-radius: 9px;
        }

        .cener-text h5 {
            font-family: "Cairo", sans-serif;
            font-weight: 400;
        }

        .cener-text h6 {
            font-family: "Cairo", sans-serif;
            font-weight: 300;
        }

        .cener-text p {
            font-family: "Cairo", sans-serif;
            font-weight: 300;
        }

        .button {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        button.btn.btn-light {
            color: #0a909b;
            border-radius: 30px;
            padding: 0.4rem 2rem;
            font-family: "Cairo", sans-serif;
            font-weight: 700;
            transition: 0.7s;
        }

        .thanks {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .thanks .thank-you {
            text-align: start;
        }

        .thank-you .svg-inline--fa {
            color: #88c64b;
            margin-inline-end: 10px;
        }

        .thank-you h5 {
            font-family: "Cairo", sans-serif;
            font-weight: 700;
        }

        .thank-you p {
            font-family: "Cairo", sans-serif;
            font-weight: 400;
        }

        .thank-you a {
            color: #0a909b;
        }

        .imge {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 17px;
            flex-wrap: wrap;
        }

        .imge img {
            border-radius: 22px;
            width: 30%;
        }

        .header {
            text-align: start;
            width: 80%;
        }

        .header h4 {
            margin-top: 15px;
            font-size: 1.2rem;
            font-family: "Cairo", sans-serif;
            font-weight: 700;
            width: 50%;
            margin: 0 auto;
            margin-top: 14px;
        }

        .list {
            list-style: none;
            width: 50%;
            margin: 0 auto;
            margin-top: 23px;
            border: 1px solid rgba(0, 0, 0, 0.13);
            border-radius: 20px;
        }

        .list-2 {
            list-style: none;
            width: 50%;
            margin: 0 auto;
            margin-top: 23px;
            border: 1px solid rgba(0, 0, 0, 0.13);
            border-radius: 20px;
        }

        .list li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #00000021;
            padding-top: 0.5rem;
        }

        .list-2 li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #00000021;
        }

        p.title {
            color: #656b7869;
            font-family: "Cairo", sans-serif;
            font-weight: 400;
        }

        p.text {
            font-family: "Cairo", sans-serif;
            font-weight: 500;
        }

        p.title-2 {
            color: #656b7869;
            font-family: "Cairo", sans-serif;
            font-weight: 400;
            padding: 0 1rem;
        }

        p.text-2 {
            font-family: "Cairo", sans-serif;
            font-weight: 500;
            padding-left: 1rem;
            color: #0a909b;
        }

        li.last {
            background-color: #0a8f9b1c;
            border-radius: 0px 0px 18px 18px;
        }

        .last-text {
            margin-top: 22px;
        }

        .last-text h5 {
            color: #656b78;
            font-size: 0.7rem;
            font-family: "Cairo", sans-serif;
            font-weight: 500;
        }

        .logo img {
            width: 15%;
        }

        .phone {
            display: flex;
            justify-content: center;
            gap: 27px;
        }

        .last-text h6 {
            font-family: "Cairo", sans-serif;
            font-weight: 500;
            color: #656b786e;
        }

        .last-text p {
            font-family: "Cairo", sans-serif;
            font-weight: 500;
            font-size: 0.6rem;
        }

        .phone a {
            text-decoration: none;
            color: #0a909b;
        }

        .imge-footer {
            background-color: #0a8f9b13;
            padding: 1rem 1rem;
            margin-top: 17px;
            border-radius: 9px;
        }

        .end-page a {
            text-decoration: none;
            color: #808e9a;
            font-size: 2rem;
            transition: 0.7s;
        }

        .end-page a:hover {
            color: #0a909b;
        }

        .text-end-page h4 {
            font-size: 0.9rem;
            font-family: "Cairo", sans-serif;
            font-weight: 500;
            color: #656b78;
        }

        button.btn.btn-light:hover {
            background-color: #0a909b;
            color: white;
        }

        p.text-4 {
            width: 57%;
            font-family: "Cairo", sans-serif;
            font-weight: 500;
        }

        p.text-3 {
            width: 57%;
            font-family: "Cairo", sans-serif;
            font-weight: 500;
        }

        a.text-5 {
            color: #0a909b;
            font-family: "Cairo", sans-serif;
            font-weight: 500;
        }

        @media only screen and (max-width: 992px) {
            .list {
                width: 100%;
            }

            .list-2 {
                width: 100%;
            }

            .imge img {
                width: 80%;
            }

            .header {
                width: 36%;
            }
        }

        @media only screen and (max-width: 600px) {
            .list {
                width: 100%;
            }

            .list-2 {
                width: 100%;
            }

            .header {
                width: 100%;
            }

            .imge img {
                width: 90%;
            }

            .logo img {
                width: 30%;
            }
        }
    </style>
</head>

<body>
    <section class="main">
        <div class="container">
            <div class="logo">
                <img src={{ $mailData['logo'] ?? 'https://admin.softtech.crazyidea.online/img/logo.bb8e45c6.png' }}
                    alt="" />
            </div>
            {!! $mailData['body'] !!}
        </div>
    </section>

    <script src="js/main.js"></script>
</body>

</html>
