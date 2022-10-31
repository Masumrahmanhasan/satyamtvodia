<table style="z-index: 100;position:relative;height:96px;top:0px;left:0px;font-family:Arial;font-size:13px;" id="Table1" border="0" cellSpacing="0" cellPadding="0" width="102%" align="center">
    <tbody>
    <tr>
        <td style="height: 55px; background:#000;" height="55" vAlign="top"></td>
    </tr>
    <tr>
        <td style="height: 23px; background:#990000;" class="info_menu">
            <div style="color: #ffffff;" color="#ffffcc">
                <a style="color: #ffffff; text-decoration:none;" href="#">About US</a> |
                <a style="color: #ffffff; text-decoration:none;" href="#">MGM</a> |
                <a style="color: #ffffff; text-decoration:none;" href="#">Tutorials</a> |
                <a style="color: #ffffff; text-decoration:none;" href="#">FAQ</a> |
                <a style="color: #ffffff; text-decoration:none;" href="#">Downloads</a> |
                <a style="color: #ffffff; text-decoration:none; VERTICAL-ALIGN: baseline" href="../Contact.html">Contact Us</a>
            </div>
        </td>
    </tr>
    <tr>
        <td style="background:#F7B200;" height="21" vAlign="center" background="images/yellow.gif" align="middle">
            <a href="{{ route('dashboard') }}" class="middle_menu">Manage My Points</a> |
            <a href="{{ route('child_registration') }}" class="middle_menu">Child Registration</a> |
            <a href="{{ route('change_password') }}" class="middle_menu">Change Password</a> |
            <a href="{{ route('change_pin') }}" class="middle_menu">PIN</a> |
            <a href="UpdateProfile.html" class="middle_menu">Update Profile</a> |
            <a href="results.html" class="middle_menu"><strong>Draw Details</strong></a> |

            <a href="#" class="middle_menu">Download Patch</a> |

            <a onclick="return CheckBrowser();" href="PlayGame.html" class="middle_menu">Play Games</a> |
            <a href="AgentResetPinPass.html" class="middle_menu">Pin &amp; Password</a> |
            <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="middle_menu">Logout</a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </td>
    </tr>
    </tbody>
</table>
