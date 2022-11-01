@extends('backend.layouts.app')

@section('title', 'Point Transfer')
@section('content')

    <div class="container">
        <div class="side-gallery">
            <img src="{{ asset('backend/images/Slider1.gif') }}" alt="" height="422px"/>
        </div>
        <div class="tbl-container" style="margin: 0 !important;">
            <table>
                <tr>
                    <th colspan="2" class="headings" align="left">
                        :: Manage My Points
                        <table id="siteDataHolder_rbPointsType" class="button-point"
                               style="border-style:None;font-weight:bold;">
                            <tr>
                                <td><input id="siteDataHolder_rbPointsType_0" type="radio"
                                           name="ctl00$siteDataHolder$rbPointsType" value="GK"
                                           checked="checked"/><label for="siteDataHolder_rbPointsType_0"> GK
                                        Points</label></td>
                                <td><input id="siteDataHolder_rbPointsType_1" type="radio"
                                           name="ctl00$siteDataHolder$rbPointsType" value="PK"
                                           onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$siteDataHolder$rbPointsType$1\&#39;,\&#39;\&#39;)&#39;, 0)"/><label
                                        for="siteDataHolder_rbPointsType_1"> Multiplayer Points</label></td>
                            </tr>
                        </table>
                    </th>
                </tr>
                <tr>
                    <td class="subheadings">
                        <div>
                                    <span>
                                        Receivables</span> <span>
                                            <input type="submit" name="ctl00$siteDataHolder$btnRefresh" value="Refresh"
                                                   id="siteDataHolder_btnRefresh"/></span>
                        </div>
                    </td>
                    <td class="subheadings">
                        <div>
                                    <span>
                                        Transferable</span> <span>
                                            <input type="submit" name="ctl00$siteDataHolder$btnPointTransfer"
                                                   value="Point Transfer" id="siteDataHolder_btnPointTransfer"/></span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="title-details">
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 15%;">
                                    Select
                                </td>
                                <td style="width: 40%;">
                                    From Member ID
                                </td>
                                <td style="width: 35%;">
                                    Amount
                                </td>
                                <td style="width: 10%;">
                                    Type
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td class="title-details">
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 15%;">
                                    Select
                                </td>
                                <td style="width: 40%;">
                                    From Member ID
                                </td>
                                <td style="width: 35%;">
                                    Amount
                                </td>
                                <td style="width: 10%;">
                                    Type
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="data">
                        <div class="ScrollDiv">
                            <div>

                            </div>
                        </div>
                    </td>
                    <td class="data">
                        <div class="ScrollDiv">
                            <div>

                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="footer">
                        <table>
                            <tr>
                                <td>
                                            <span class="aspNetDisabled"><input
                                                    id="siteDataHolder_chkBoxSelectAllReceive" type="checkbox"
                                                    name="ctl00$siteDataHolder$chkBoxSelectAllReceive"
                                                    disabled="disabled"/><label
                                                    for="siteDataHolder_chkBoxSelectAllReceive">Select All</label></span>
                                </td>
                                <td>
                                    <input type="submit" name="ctl00$siteDataHolder$btnReceive" value="Receive"
                                           id="siteDataHolder_btnReceive" disabled="disabled"
                                           class="aspNetDisabled"/>
                                </td>
                                <td>
                                    <input type="submit" name="ctl00$siteDataHolder$btnReject" value="Reject"
                                           id="siteDataHolder_btnReject" disabled="disabled"
                                           class="aspNetDisabled"/>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td class="footer">
                        <table>
                            <tr>
                                <td>
                                            <span class="aspNetDisabled"><input
                                                    id="siteDataHolder_chkBoxSelectAllTransfer" type="checkbox"
                                                    name="ctl00$siteDataHolder$chkBoxSelectAllTransfer"
                                                    disabled="disabled"/><label
                                                    for="siteDataHolder_chkBoxSelectAllTransfer">Select All</label></span>
                                </td>
                                <td>
                                    <input type="submit" name="ctl00$siteDataHolder$btnCancel" value="Cancel"
                                           id="siteDataHolder_btnCancel" disabled="disabled"
                                           class="aspNetDisabled"/>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <div id="siteDataHolder_pnlPointTransfer"
                 onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;siteDataHolder_btnTransfer&#39;)">

                <table class="p-trans">
                    <tr>
                        <th class="headings" align="left">
                            :: Point Transfer
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <table class="p-child">
                                <tr>
                                    <td>
                                        To Account No. :
                                    </td>
                                    <td>
                                        <input name="ctl00$siteDataHolder$txtTransferID" type="text" value="GK"
                                               maxlength="10" id="siteDataHolder_txtTransferID"/>
                                    </td>
                                    <td>
                                        <span id="siteDataHolder_reqTransferID" style="color:Red;display:none;">* Please Provide Member ID</span>
                                        <span id="siteDataHolder_regTransferID" style="color:Red;display:none;">* Member ID not Proper</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Your Pin :
                                    </td>
                                    <td>
                                        <input name="ctl00$siteDataHolder$txtMemberPin" type="password"
                                               maxlength="16" id="siteDataHolder_txtMemberPin"/>
                                    </td>
                                    <td>
                                        <span id="siteDataHolder_reqMemberPin" style="color:Red;display:none;">* Please Provide Your Account Pin</span>
                                        <span id="siteDataHolder_regMemberPin" style="color:Red;display:none;">* Numeric Value Allowed Only</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Amount :
                                    </td>
                                    <td>
                                        <input name="ctl00$siteDataHolder$txtTransferAmount" type="text"
                                               maxlength="7" id="siteDataHolder_txtTransferAmount"/>
                                    </td>
                                    <td>
                                                <span id="siteDataHolder_reqTransferAmount"
                                                      style="color:Red;display:none;">* Please Provide Amount To Transfer</span>
                                        <span id="siteDataHolder_rngValidateAmount"
                                              style="color:Red;display:none;">* You can transfer Points between 1 to 1000000</span>
                                        <span id="siteDataHolder_cmpValidateAmount"
                                              style="color:Red;display:none;">* Balance is not Enough</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">

                                    </td>
                                    <td>
                                                <span id="siteDataHolder_cusValidateNarration"
                                                      style="color:Red;display:none;">* Maximum Limit is 50 Characters only.</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="ctl00$siteDataHolder$btnTransfer"
                                               value="Transfer"
                                               onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$siteDataHolder$btnTransfer&quot;, &quot;&quot;, true, &quot;TransferPoint&quot;, &quot;&quot;, false, false))"
                                               id="siteDataHolder_btnTransfer"/>
                                    </td>
                                    <td align="right">
                                        <a id="siteDataHolder_lnkBtnClose"
                                           href="javascript:__doPostBack(&#39;ctl00$siteDataHolder$lnkBtnClose&#39;,&#39;&#39;)">Close</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
        <div class="side-gallery">
            <img src="{{ asset('backend/images/Slider2.gif') }}" alt="" height="422px"/>
        </div>
    </div>

@endsection
