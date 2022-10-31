@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="error">
            <div id="siteDataHolder_vldSummaryChangePin" class="error-msg" style="display:none;">

            </div>
        </div>
        <div class="tbl-container">
            <table>
                <tr>
                    <th class="headings" align="left">Change Your Pin</th>
                </tr>
            </table>
            <div class="c-pass">
                <table>
                    <tr>
                        <td class="subheadings">
                            <table>
                                <tr>
                                    <td>Old Pin :</td>
                                    <td>
                                        <input name="ctl00$siteDataHolder$txtOldPin" type="password"
                                               maxlength="16" id="siteDataHolder_txtOldPin"/>
                                    </td>
                                    <td>
                                                    <span id="siteDataHolder_reqOldPin"
                                                          style="color:Red;visibility:hidden;">*</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>New Pin :</td>
                                    <td>
                                        <input name="ctl00$siteDataHolder$txtNewPin" type="password"
                                               maxlength="16" id="siteDataHolder_txtNewPin"/>
                                    </td>
                                    <td>
                                                    <span id="siteDataHolder_reqNewPin"
                                                          style="color:Red;visibility:hidden;">*</span>
                                        <span id="siteDataHolder_regNewPin"
                                              style="color:Red;visibility:hidden;">*</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Confirm New Pin :</td>
                                    <td>
                                        <input name="ctl00$siteDataHolder$txtConfirmPin" type="password"
                                               maxlength="16" id="siteDataHolder_txtConfirmPin"/>
                                    </td>
                                    <td>
                                                    <span id="siteDataHolder_reqConfirmPin"
                                                          style="color:Red;visibility:hidden;">*</span>
                                        <span id="siteDataHolder_comConfirmPin"
                                              style="color:Red;visibility:hidden;">*</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Your Password :</td>
                                    <td>
                                        <input name="ctl00$siteDataHolder$txtPassword" type="password"
                                               maxlength="23" id="siteDataHolder_txtPassword"/>
                                    </td>
                                    <td>
                                                    <span id="siteDataHolder_reqPassword"
                                                          style="color:Red;visibility:hidden;">*</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" name="ctl00$siteDataHolder$btnChangePin"
                                               value="Change"
                                               onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$siteDataHolder$btnChangePin&quot;, &quot;&quot;, true, &quot;ChangePin&quot;, &quot;&quot;, false, false))"
                                               id="siteDataHolder_btnChangePin"/>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
