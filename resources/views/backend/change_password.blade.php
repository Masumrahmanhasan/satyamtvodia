@extends('backend.layouts.app')
@section('content')
    <div class="container">
        <div class="error">
            <div id="siteDataHolder_vldSummaryChangePass" class="error-msg" style="display:none;">

            </div>
        </div>
        <div class="tbl-container">
            <table>
                <tr>
                    <th class="headings" align="left">:: Change Password</th>
                </tr>
            </table>
            <div class="c-pass">

                <form action="{{ route('update_password') }}" method="POST">
                    @csrf
                    <table>
                        <tr>
                            <td class="subheadings">
                                <table>
                                    <tr>
                                        <td>Old Password :</td>
                                        <td>
                                            <input name="current_password" type="password"
                                                   maxlength="23" id="current_password"/>
                                        </td>
                                        <td>
                                            @error('current_password')
                                                    <span id="siteDataHolder_reqOldPass"
                                                          style="color:Red;">* {{ $message }}</span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>New Password :</td>
                                        <td>
                                            <input name="password" type="password"
                                                   maxlength="23" id="new_password"/>
                                        </td>
                                        <td>

                                            @error('password')
                                                    <span id="siteDataHolder_reqNewPassword"
                                                          style="color:Red;">* {{ $message }}</span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Confirm New Password :</td>
                                        <td>
                                            <input name="password_confirmation"
                                                   type="password" maxlength="23"
                                                   id="password-confirm"/>
                                        </td>
                                        <td>
                                                    <span id="siteDataHolder_reqConfirmPass"
                                                          style="color:Red;visibility:hidden;">*</span>
                                            <span id="siteDataHolder_comConfirmPass"
                                                  style="color:Red;visibility:hidden;">*</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Your Pin :</td>
                                        <td>
                                            <input name="pin_code" type="password"
                                                   maxlength="16" id="pin_code"/>
                                        </td>
                                        <td>
                                            @error('pin_code')
                                            <span id="siteDataHolder_reqNewPassword"
                                                  style="color:Red;">* {{ $message }}</span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <input type="submit" name="submit"
                                                   value="Change"
                                                   id="submit"/>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection
