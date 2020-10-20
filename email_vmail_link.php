<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />


</head>

<body bgcolor="#FFFFFF" style="margin: 0; padding: 0; background-color: #FFFFFF;">


    <div>
        <div>
            <center style="text-align:left;background-color:#EAEAEA;width:100%;padding:40px 0;">
                <div style="max-width:600px;margin:auto;">
                    <div style="text-align:center;"><img data-imagetype="External"
                            src="https://tapalinfosys.com/wp-content/uploads/2020/05/TIS-LOGO-0_192x.png"></div>
                    <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation"
                        style="background-color:#efac1f;border-spacing:0;max-width:600px;margin:0 auto;border-width:1px;border-color:#DEDEDE;border-right-style:solid;border-left-style:solid;">
                        <tbody>
                            <tr>
                                <td height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation"
                        style="border-spacing:0;max-width:600px;margin:0 auto;border-width:1px;border-color:#DEDEDE;border-right-style:solid;border-left-style:solid;">
                        <tbody>
                            <tr>
                                <td bgcolor="white"
                                    style="text-align:center;padding: 20px;background: #0d5885;color: white;">
                                    <h2
                                        style="color:#555555;font-family:Open Sans,sans-serif;font-weight:100;text-align:center;margin:0;padding:0;">
                                        <img data-imagetype="Empty" data-imageerror="SrcNullOrEmpty"
                                            style="color:#707079;font-size:16px;font-family:Source Sans Pro,Helvetica,sans-serif;background-color:transparent;"><span
                                            style="background-color:transparent;font-weight: 600;color: white;">Email
                                            Voicemail Form </span><br>

                                    </h2>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="white"
                                    style="color:#555555;font-family:Open Sans,sans-serif;font-weight:100;padding:20px;">
                                    <h3
                                        style="color:#555555;font-family:Open Sans,sans-serif;font-weight:100;margin:0;padding:0;">
                                        <? GetVmailTo(); ?>
                                    </h3>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation"
                        style="border-spacing:0;max-width:600px;margin:0 auto;border-width:1px;border-color:#DEDEDE;border-right-style:solid;border-left-style:solid;">
                        <tbody>
                            <tr>
                                <td bgcolor="white"
                                    style="color:#555555;font-family:Open Sans,sans-serif;font-weight:100;padding:20px;padding-top: 0;">
                                    <h3
                                        style="color:#555555;font-family:Open Sans,sans-serif;font-weight:100;margin:0;padding:0;font-size: 18px;">
                                        You have a Voice Mail from <? GetVmailFrom(); ?></h3>
                                </td>
                            </tr>

                        </tbody>
                    </table>



                    <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation"
                        style="border-spacing:0;max-width:600px;margin:0 auto;border-width:1px;border-color:#DEDEDE;border-right-style:solid;border-left-style:solid;">
                        <tbody>
                            <tr>
                                <td bgcolor="white"
                                    style="color:#555555;font-family:Open Sans,sans-serif;font-weight:100;padding:20px;">
                                    <h3
                                        style="color:#555555;font-family:Open Sans,sans-serif;font-weight:100;margin:0;padding:0;font-size: 18px;">
                                        Received on: <b><i>
                                            <? GetDateTime(); ?></i></b></h3>
                                </td>
                            </tr>


                        </tbody>
                    </table>

                    <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation"
                        style="border-spacing:0;max-width:600px;margin:0 auto;border-width:1px;border-color:#DEDEDE;border-right-style:solid;border-left-style:solid;">
                        <tbody>
                            <tr>
                                <td style="background: white;padding-bottom: 10px;padding-top: 10px;">
                                    <table align="center" width="94%" border="0" cellspacing="0" cellpadding="0"
                                        role="presentation"
                                        style="border-spacing:0;max-width:600px;margin:0 auto;border-width:2px;border-color:#3f6536;border-top-style:solid;border-bottom-style:solid;">
                                        <tbody>
                                            <tr>
                                                <td bgcolor="white"
                                                    style="color:#555555;font-family:Open Sans,sans-serif;font-weight:100;padding:15px 5px 15px 5px;">
                                                    <h3
                                                        style="color:#555555;font-family:Open Sans,sans-serif;font-weight:100;margin:0;padding:0;font-size:18px;">
                                                        Listen By Clicking:</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td bgcolor="white" style="padding: 10px 20px 15px 20px;">
                                                    <table border="0" cellspacing="0" cellpadding="0"
                                                        role="presentation"
                                                        style="margin: 0 auto;text-align: center;background-color:#0d5885;border-spacing:0;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-top-left-radius:5px;border-top-right-radius:5px;">
                                                        <tbody>
                                                            <tr>
                                                                <td
                                                                    style="color:#ffff;font-size:18px;font-family:Open Sans,sans-serif;padding:13px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-top-right-radius:5px;line-height:20px;border-top-left-radius:5px;">
                                                                    <p style="margin:0;padding:0;"><a style="color: #fff;text-decoration: none;" href="<? GetUrlVmail(); ?>">Click here for
                                                                        Listen..</a></p>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>



                    </td>
                    </tr>
                    </tbody>
                    </table>

                    <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation"
                        style="border-spacing:0;max-width:600px;margin:0 auto;border-width:1px;border-color:#DEDEDE;border-right-style:solid;border-left-style:solid;">
                        <tbody>
                            <tr>
                                <td bgcolor="white" height="50" style="line-height:1.65;padding: 20px;">
                                    <p style="color:#555555;font-family:Open Sans,sans-serif;margin:0;padding:0;font-size: 18px;">Listen
                                        by opening the enclosed attachment.</p>

                            </tr>

                        </tbody>
                    </table>
                    <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation"
                        style="border-spacing:0;max-width:600px;margin:0 auto;border-width:1px;border-color:#DEDEDE;border-right-style:solid;border-left-style:solid;background: #fdf9f9;">
                        <tbody>
                            <tr>
                                <td class="content footer" align="center"
                                    style="padding: 20px;background: #0d5885;color: #ffff;">
                                    <p style="font-family:Open Sans,sans-serif;margin:0;padding:0;" align="center">If
                                        you have any trouble, please contact us by visiting our <a
                                            href="<? GetSupportLink(); ?>"
                                            style="color:#ffff;font-family:Open Sans,sans-serif;margin:0;padding:0;"><b>support
                                                page</b></a>.</p>
                                    <p style="font-family:Open Sans,sans-serif;margin:0;padding:0;" align="center">Sent
                                        by
                                        <a href="#"
                                            style="color:#555555;font-family:Open Sans,sans-serif;margin:0;padding:0;">
                                            <!--? GetPoweredBy(); ?-->
                                        </a>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </center>
        </div>
    </div>



</body>

</html>