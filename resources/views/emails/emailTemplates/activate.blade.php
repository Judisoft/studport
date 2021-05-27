

@extends('emails/layouts/emailTemplate')

@section('content')
    <table data-module="travel 2" data-thumb="thumbnails/thumbnail2.png" data-bgcolor="Main BG" width="100%" style="font-family: 'Montserrat',Arial, sans-serif;" bgcolor="#ececec" border="0" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td align="center">
                <table align="center" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr>
                        <td width="600" bgcolor="#fff" align="center">
                            <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                <tr>
                                    <td height="60" style="background-color:#fff !important;font-family: 'Montserrat',Arial, sans-serif;font-size:26px;font-weight:500;letter-spacing:1px;line-height:30px;padding:30px;" align="center">
                                        <center>
                                            <img data-crop="false" style="display:block;"
                                                 src="{{ asset('images/logo.png') }}" alt="img"/>
                                        </center>
                                    </td>
                                </tr>
                                <tr height="50"></tr>
                                <tr>
                                    <td style="color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;font-weight:500;letter-spacing:1px;line-height:30px;" data-bgcolor="Title" data-color="Title" data-size="Title" data-min="12" data-max="60" align="center">
                                        Welcome   <a>{!! $user['user_name'] !!} !</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20"></td>
                                </tr>

                                <tr>
                                    <td style="color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:14px;padding-right:30px;padding-left:30px;font-weight:500;letter-spacing:1px;line-height:30px;" data-bgcolor="Title" data-color="Title" data-size="Title" data-min="12" data-max="60" align="center">
                                    Thank you for signing up for StudPort! Please activate your account by clicking the link below.
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20"></td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <table align="center">
                                            <tbody>
                                            <tr>
                                                <td width="400" align="center">
                                                    <table data-bgcolor="Box" width="90%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                                                        <tbody>
                                                        <tr>
                                                            <td height="10">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center">
                                                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                    <!--image-->
                                                                    <tbody>
                                                                    <tr>
                                                                        <td align="center" width="200" valign="middle" style="padding: 30px;">
                                                                            <a href="{!! $user['activationUrl'] !!}"  target="_blank" > {{ $user['activationUrl'] }}</a>
                                                                        </td>
                                                                        <tr>
                                                                            <td style="padding:30px;">
                                                                            Please note that unactivated accounts are automatically deleted in 30 days after sign up.
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding:30px;">
                                                                                If you didn't request this, please ignore this email.
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="padding:30px;font-weight:500;">
                                                                            Yours, StudPort Team<br><i class="icon-envelope px-2"></i><a href="mailto:support@studport.cm">support@studport.cm</a><br><i class="icon-call-out px-2"></i><a href="tel:+237-652-459-059">(+237) 652-459-059</a>
                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding-left:30px;padding-top:15px;font-weight:500;">
                                                                                <i class="icon-paper-plane px-2"></i>Elig-Effa, Yaoundé <br> Cameroon
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding:30px;font-weight:500;">
                                                                                Follow Us On &nbsp; <span class="fa fa-user"></span><a href="#url"><i class="icon-facebook fa-2x px-2"style="color:#043464;"></i></a><a href="#url"><i class="icon-twitter fa-2x px-2"style="color:#58A4F0;"></i></a> <a href="#url"><i class="icon-youtube fa-2x px-2"style="color:#D1360D;"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                   <singleline style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding-left:30px;">
                                                                                        © 2021, All Copy rights reserved,  Designed with <i class="icon-heart px-2 color:#D1360D; "></i> by <a href="https://studport.cm/" style="box-sizing: border-box; font-family: 'Open Sans', Arial, sans-serif; font-size: 15px; color: #fec400;" data-color="copy right color">StudPort</a>
                                                                                    </singleline>
                                                                            </td>
                                                                        </tr>
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
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>

</body>

</html>

@endsection

