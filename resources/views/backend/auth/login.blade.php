@extends('backend.layouts.auth')

@section('title', 'login')

@section('content')
    <div class="login">
        <div class="error-msg2">

        </div>
        <div class="login2"></div>
        <div class="title"></div>
        <div class="navigation">
            <ul>


                <li><a href="#">About Us</a></li>
                |
                <li><a href="#">MGM</a></li>
                |
                <li><a href="#">Tutorials</a></li>
                |
                <li><a href="#">FAQ's</a></li>
                |
                <li><a href="#">Downloads</a></li>
                |
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="error-login">
            <div id="vldSummaryLogin" style="display:block;">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                @endif

            </div>
        </div>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="login-box">
                <table>
                    <tr>
                        <td>Login</td>
                        <td align="right">
                            <input name="email" type="text" id="email" class="txt-login"
                                   autocomplete="off"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td align="right">
                            <input name="password" type="password" id="password" class="txt-login"
                                   autocomplete="off"/>
                        </td>

                    </tr>
                    <tr>
                        <td>Enter Below Number</td>
                        <td align="right">
                            <input name="txtCaptcha" type="text" maxlength="8" id="txtCaptcha" class="txt-login"/>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="3" align="center" valign="middle">
                            <div id="updPnlCaptcha">

                                <div class="updPnlCaptcha">
                                    <img id="imgCaptcha"
                                         src="#"/>
                                    <input type="image" name="imgBtnRefreshCaptcha" id="imgBtnRefreshCaptcha"
                                           src="{{ asset('backend/images/RefreshButton.png')}}"/>
                                </div>

                            </div>
                            <input type="submit" name="btnLogin" value="GO"
                                   onclick=""
                                   id="btnLogin"/>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
@endsection
