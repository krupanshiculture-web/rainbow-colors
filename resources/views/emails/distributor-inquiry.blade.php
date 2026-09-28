<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rainbow Distributorship Enquiry</title>
</head>

<body style="margin:0; padding:0; background:#f4f2fa; font-family:Arial, Helvetica, sans-serif;">

    <div style="width:100%; padding:40px 15px; box-sizing:border-box;">

        <div style="max-width:650px; margin:0 auto; background:#ffffff; border-radius:16px; overflow:hidden;">

            <div style="padding:28px 32px; background:#292345;">

                <h1 style="margin:0; color:#ffffff; font-size:24px;">
                    Rainbow Colors
                </h1>

                <p style="margin:8px 0 0; color:#FDD200; font-size:13px; font-weight:bold; letter-spacing:1px;">
                    NEW DISTRIBUTORSHIP ENQUIRY
                </p>

            </div>


            <div style="padding:32px;">

                <p style="margin:0 0 25px; color:#555; font-size:15px; line-height:1.6;">
                    A new distributorship enquiry has been submitted through the Rainbow Colors website.
                </p>


                <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">

                    <tr>
                        <td style="padding:12px 0; border-bottom:1px solid #eeeeee; color:#888; width:35%;">
                            Full Name
                        </td>

                        <td style="padding:12px 0; border-bottom:1px solid #eeeeee; color:#292345; font-weight:bold;">
                            {{ $inquiry['name'] }}
                        </td>
                    </tr>


                    @if(!empty($inquiry['company']))
                        <tr>
                            <td style="padding:12px 0; border-bottom:1px solid #eeeeee; color:#888;">
                                Company Name
                            </td>

                            <td style="padding:12px 0; border-bottom:1px solid #eeeeee; color:#292345;">
                                {{ $inquiry['company'] }}
                            </td>
                        </tr>
                    @endif


                    <tr>
                        <td style="padding:12px 0; border-bottom:1px solid #eeeeee; color:#888;">
                            Mobile Number
                        </td>

                        <td style="padding:12px 0; border-bottom:1px solid #eeeeee; color:#292345;">
                            {{ $inquiry['phone'] }}
                        </td>
                    </tr>


                    <tr>
                        <td style="padding:12px 0; border-bottom:1px solid #eeeeee; color:#888;">
                            Email Address
                        </td>

                        <td style="padding:12px 0; border-bottom:1px solid #eeeeee; color:#292345;">
                            {{ $inquiry['email'] }}
                        </td>
                    </tr>


                    @if(!empty($inquiry['city']))
                        <tr>
                            <td style="padding:12px 0; border-bottom:1px solid #eeeeee; color:#888;">
                                City
                            </td>

                            <td style="padding:12px 0; border-bottom:1px solid #eeeeee; color:#292345;">
                                {{ $inquiry['city'] }}
                            </td>
                        </tr>
                    @endif


                    @if(!empty($inquiry['state']))
                        <tr>
                            <td style="padding:12px 0; border-bottom:1px solid #eeeeee; color:#888;">
                                State
                            </td>

                            <td style="padding:12px 0; border-bottom:1px solid #eeeeee; color:#292345;">
                                {{ $inquiry['state'] }}
                            </td>
                        </tr>
                    @endif


                    @if(!empty($inquiry['business_type']))
                        <tr>
                            <td style="padding:12px 0; border-bottom:1px solid #eeeeee; color:#888;">
                                Business Type
                            </td>

                            <td style="padding:12px 0; border-bottom:1px solid #eeeeee; color:#292345;">
                                {{ ucfirst(str_replace('-', ' ', $inquiry['business_type'])) }}
                            </td>
                        </tr>
                    @endif

                </table>


                @if(!empty($inquiry['message']))

                    <div style="margin-top:28px; padding:22px; background:#f7f5fb; border-radius:12px;">

                        <p style="margin:0 0 10px; color:#292345; font-size:13px; font-weight:bold;">
                            MESSAGE
                        </p>

                        <p style="margin:0; color:#555; font-size:14px; line-height:1.7; white-space:pre-line;">
                            {{ $inquiry['message'] }}
                        </p>

                    </div>

                @endif


                <p style="margin:28px 0 0; color:#999; font-size:12px;">
                    This enquiry was submitted from the Rainbow Colors website.
                </p>

            </div>

        </div>

    </div>

</body>
</html>