@php
    $setting = DB::table('settings')->where('id', 1)->first();
@endphp

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><%= title %></title>

    <style type="text/css">
        @media only screen and (min-width: 620px) {
            .u-row {
                width: 600px !important;
            }

            .u-row .u-col {
                vertical-align: top;
            }

            .u-row .u-col-100 {
                width: 600px !important;
            }
        }

        @media (max-width: 620px) {
            .u-row-container {
                max-width: 100% !important;
                padding-left: 0px !important;
                padding-right: 0px !important;
            }

            .u-row .u-col {
                min-width: 320px !important;
                max-width: 100% !important;
                display: block !important;
            }

            .u-row {
                width: 100% !important;
            }

            .u-col {
                width: 100% !important;
            }

            .u-col>div {
                margin: 0 auto;
            }
        }

        body {
            margin: 0;
            padding: 0;
        }

        table,
        tr,
        td {
            vertical-align: top;
            border-collapse: collapse;
        }

        p {
            margin: 0;
        }

        .ie-container table,
        .mso-container table {
            table-layout: fixed;
        }

        * {
            line-height: inherit;
        }

        a[x-apple-data-detectors="true"] {
            color: inherit !important;
            text-decoration: none !important;
        }

        table,
        td {
            color: #000000;
        }

        #u_body a {
            color: #0000ee;
            text-decoration: underline;
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet" type="text/css" />
</head>

<body class="clean-body u_body"
    style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #f9f9f9; color: #000000;">
    <table id="u_body"
        style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; min-width: 320px; margin: 0 auto; background-color: #f9f9f9; width: 100%;"
        cellpadding="0" cellspacing="0">
        <tbody>
            <tr style="vertical-align: top;">
                <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;">
                    <div class="u-row-container" style="padding: 0px; background-color: transparent;">
                        <div class="u-row"
                            style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                            <div
                                style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                <div class="u-col u-col-100"
                                    style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="height: 100%; width: 100% !important;">
                                        <div
                                            style="box-sizing: border-box; height: 100%; padding: 0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-right: 0px solid transparent; border-bottom: 0px solid transparent;">
                                            <table style="font-family: 'Cabin', sans-serif;" role="presentation"
                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: 'Cabin', sans-serif;"
                                                            align="left">
                                                            <div
                                                                style="font-size: 14px; color: #afb0c7; line-height: 170%; text-align: center; word-wrap: break-word;">
                                                                <!-- <p style="font-size: 14px; line-height: 170%;"><span style="font-size: 14px; line-height: 23.8px;">View Email in Browser</span></p> -->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="u-row-container" style="padding: 0px; background-color: transparent;">
                        <div class="u-row"
                            style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;">
                            <div
                                style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                <div class="u-col u-col-100"
                                    style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="height: 100%; width: 100% !important;">
                                        <div
                                            style="box-sizing: border-box; height: 100%; padding: 0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-right: 0px solid transparent; border-bottom: 0px solid transparent;">
                                            <table style="font-family: 'Cabin', sans-serif;" role="presentation"
                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="overflow-wrap: break-word; word-break: break-word; padding: 20px; font-family: 'Cabin', sans-serif;"
                                                            align="left">
                                                            <table width="100%" cellpadding="0" cellspacing="0"
                                                                border="0">
                                                                <tr>
                                                                    <td style="padding-right: 0px; padding-left: 0px;"
                                                                        align="center">

                                                                        <a href="{{ env('APP_URL') }}">

                                                                            <img align="center" border="0"
                                                                                src="{{ asset($setting->logo) }}"
                                                                                alt="{{ asset($setting->logo) }}"
                                                                                title="Image" width="100px"
                                                                                style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: inline-block !important; border: none; height: auto; float: none; width: 25%; max-width: 179.2px;" />
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="u-row-container" style="padding: 0px; background-color: transparent;">
                        <div class="u-row"
                            style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #EA1E00;">
                            <div
                                style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                <div class="u-col u-col-100"
                                    style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="height: 100%; width: 100% !important;">
                                        <div
                                            style="box-sizing: border-box; height: 100%; padding: 0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-right: 0px solid transparent; border-bottom: 0px solid transparent;">
                                            <table style="font-family: 'Cabin', sans-serif;" role="presentation"
                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="overflow-wrap: break-word; word-break: break-word; padding: 40px 10px 10px; font-family: 'Cabin', sans-serif;"
                                                            align="left">
                                                            <table width="100%" cellpadding="0" cellspacing="0"
                                                                border="0">
                                                                <tr>
                                                                    <td style="padding-right: 0px; padding-left: 0px;"
                                                                        align="center">
                                                                        <!-- <img align="center" border="0" src="https://cdn.templates.unlayer.com/assets/1597218650916-xxxxc.png" alt="Image" title="Image" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: inline-block !important; border: none; height: auto; float: none; width: 26%; max-width: 150.8px;" width="150.8" /> -->
                                                                        <img align="center" border="0"
                                                                            src="https://cdn.templates.unlayer.com/assets/1597218650916-xxxxc.png"
                                                                            alt="Image" title="Image"
                                                                            style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: inline-block !important; border: none; height: auto; float: none; width: 26%; max-width: 150.8px;"
                                                                            width="150.8" />
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table style="font-family: 'Cabin', sans-serif;" role="presentation"
                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: 'Cabin', sans-serif;"
                                                            align="left">
                                                            <div
                                                                style="font-size: 14px; color: #e5eaf5; line-height: 140%; text-align: center; word-wrap: break-word;">
                                                                <!-- <p style="font-size: 14px; line-height: 140%;"><strong>T H A N K S&nbsp; &nbsp;F O R&nbsp; &nbsp;S I G N I N G&nbsp; &nbsp;U P !</strong></p> -->
                                                                {{-- <p style="font-size: 14px; line-height: 140%;">
                                                                    <strong>{{ env('APP_NAME') }} </strong>
                                                                </p> --}}

                                                                <p style="font-size: 14px; line-height: 140%;"><span
                                                                        style="font-size: 22px; line-height: 35.2px;">
                                                                        {{ $data['fullname'] }} -
                                                                        {{ \Carbon\Carbon::now()->format('D, M j, Y \a\t g:ia') }}
                                                                    </span>
                                                                </p>
                                                                <p style="font-size: 14px; line-height: 140%;"><span
                                                                        style="font-size: 22px; line-height: 35.2px;">
                                                                        {{ $data['email'] }}
                                                                    </span>
                                                                </p>
                                                                <p style="font-size: 14px; line-height: 140%;"><span
                                                                        style="font-size: 22px; line-height: 35.2px;">
                                                                        {{ $data['phone'] }}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="u-row-container" style="padding: 0px; background-color: transparent;">
                        <div class="u-row"
                            style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;">
                            <div
                                style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                <div class="u-col u-col-100"
                                    style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="height: 100%; width: 100% !important;">
                                        <div
                                            style="box-sizing: border-box; height: 100%; padding: 0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-right: 0px solid transparent; border-bottom: 0px solid transparent;">
                                            <table style="font-family: 'Cabin', sans-serif;" role="presentation"
                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="overflow-wrap: break-word; word-break: break-word; padding: 33px 55px; font-family: 'Cabin', sans-serif;"
                                                            align="left">
                                                            <div
                                                                style="font-size: 14px; line-height: 160%; text-align: center; word-wrap: break-word;">

                                                                <p style="font-size: 14px; line-height: 160%;">
                                                                    <span
                                                                        style="font-size: 18px; line-height: 28.8px;">
                                                                        {{ $data['message'] }}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table style="font-family: 'Cabin', sans-serif;" role="presentation"
                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: 'Cabin', sans-serif;"
                                                            align="left">
                                                            <div align="center">
                                                                <a href="{{ env('APP_URL') }}" target="_blank"
                                                                    class="v-button"
                                                                    style="box-sizing: border-box; display: inline-block; text-decoration: none; -webkit-text-size-adjust: none; text-align: center; color: #ffffff; background-color: #EA1E00; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; width: auto; max-width: 100%; overflow-wrap: break-word; word-break: break-word; word-wrap: break-word; mso-border-alt: none; font-size: 14px;">
                                                                    <span
                                                                        style="display: block; padding: 14px 44px 13px; line-height: 120%;">
                                                                        <span
                                                                            style="font-size: 16px; line-height: 19.2px;"><strong><span
                                                                                    style="line-height: 19.2px; font-size: 16px;">
                                                                                    Home</span></strong>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table style="font-family: 'Cabin', sans-serif;" role="presentation"
                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="overflow-wrap: break-word; word-break: break-word; padding: 33px 55px 60px; font-family: 'Cabin', sans-serif;"
                                                            align="left">
                                                            <div
                                                                style="font-size: 14px; line-height: 160%; text-align: center; word-wrap: break-word;">
                                                                <p style="line-height: 160%; font-size: 14px;"><span
                                                                        style="font-size: 18px; line-height: 28.8px;">Thanks,</span>
                                                                </p>
                                                                <p style="line-height: 160%; font-size: 14px;"><span
                                                                        style="font-size: 18px; line-height: 28.8px;">{{ env('APP_NAME') }}</span>
                                                                </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="u-row-container" style="padding: 0px; background-color: transparent;">
                        <div class="u-row"
                            style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #EA1E00;">
                            <div
                                style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                <div class="u-col u-col-100"
                                    style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="height: 100%; width: 100% !important;">
                                        <div
                                            style="box-sizing: border-box; height: 100%; padding: 0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-right: 0px solid transparent; border-bottom: 0px solid transparent;">
                                            <table style="font-family: 'Cabin', sans-serif;" role="presentation"
                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: 'Cabin', sans-serif;"
                                                            align="left">
                                                            <div
                                                                style="font-size: 14px; color: #fafafa; line-height: 180%; text-align: center; word-wrap: break-word;">
                                                                <p style="font-size: 14px; line-height: 180%;"><span
                                                                        style="font-size: 16px; line-height: 28.8px;">Copyrights
                                                                        © {{ env('APP_NAME') }} All Rights
                                                                        Reserved</span></p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
