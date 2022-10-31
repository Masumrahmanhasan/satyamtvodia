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
                    <th class="headings" align="left">:: Child Registration</th>
                </tr>
            </table>
            <div class="c-pass">

                <form action="{{ route('child_registration_store') }}" method="POST">
                    @csrf
                    <table >
                        <tr>
                            <td class="subheadings">
                                <table style="width: 100% !important;">
                                    <tr>
                                        <td>First Name :</td>
                                        <td>
                                            <input name="first_name" type="text"
                                                   id="first_name"/>
                                        </td>
                                        <td>
                                                    <span id="siteDataHolder_reqChildFName"
                                                          style="color:Red;visibility:hidden;">*</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Last Name :</td>
                                        <td>
                                            <input name="last_name" type="text"
                                                   id="last_name"/>
                                        </td>
                                        <td>
                                                    <span id="siteDataHolder_reqChildLName"
                                                          style="color:Red;visibility:hidden;">*</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Date Of Birth :</td>
                                        <td colspan="2">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <input type="date" name="date_of_birth" id="date_of_birth">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Country :</td>
                                        <td colspan="2">
                                            <select name="country"
                                                    id="country">
                                                <option value="INDIA">INDIA</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>State :</td>
                                        <td colspan="2">
                                            <select name="state"
                                                    id="siteDataHolder_drpState">
                                                <option value="A">A</option>
                                                <option value="AGRA">AGRA</option>
                                                <option value="ANDAMAN AND NICOBAR">ANDAMAN AND NICOBAR</option>
                                                <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                                                <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                                                <option value="ASSAM">ASSAM</option>
                                                <option value="Andaman">Andaman</option>
                                                <option value="Andra Pradesh">Andra Pradesh</option>
                                                <option value="B">B</option>
                                                <option value="BHY">BHY</option>
                                                <option value="BIHAR">BIHAR</option>
                                                <option value="CHANDIGARH">CHANDIGARH</option>
                                                <option value="CHHATISGARH">CHHATISGARH</option>
                                                <option value="CHHATTISGARH">CHHATTISGARH</option>
                                                <option value="DADAR AND NAGAR HAVE">DADAR AND NAGAR HAVE
                                                </option>
                                                <option value="DADAR AND NAGAR HAVELI">DADAR AND NAGAR HAVELI
                                                </option>
                                                <option value="DAMAN AND DIU">DAMAN AND DIU</option>
                                                <option value="DELHI">DELHI</option>
                                                <option value="DELHI ">DELHI</option>
                                                <option value="DUBAI">DUBAI</option>
                                                <option value="Dadra">Dadra</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="GG">GG</option>
                                                <option value="GOA">GOA</option>
                                                <option value="GUJ">GUJ</option>
                                                <option value="GUJARAT">GUJARAT</option>
                                                <option value="GUJARATA">GUJARATA</option>
                                                <option value="GUJRAT">GUJRAT</option>
                                                <option value="H">H</option>
                                                <option value="HARAYANA">HARAYANA</option>
                                                <option value="HARIYANA">HARIYANA</option>
                                                <option value="HARYANA">HARYANA</option>
                                                <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                                                <option value="HJ">HJ</option>
                                                <option value="HKJH">HKJH</option>
                                                <option value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
                                                <option value="JHALAWAR">JHALAWAR</option>
                                                <option value="JHARKHAND">JHARKHAND</option>
                                                <option value="JHSANH">JHSANH</option>
                                                <option value="KARNATAKA">KARNATAKA</option>
                                                <option value="KERALA">KERALA</option>
                                                <option value="KTM">KTM</option>
                                                <option value="L">L</option>
                                                <option value="LAKSHADEEP">LAKSHADEEP</option>
                                                <option value="M">M</option>
                                                <option value="MADAHYAPRAD">MADAHYAPRAD</option>
                                                <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                                                <option value="MAH">MAH</option>
                                                <option value="MAHA">MAHA</option>
                                                <option value="MAHARAHSTRA">MAHARAHSTRA</option>
                                                <option value="MAHARASHTRA">MAHARASHTRA</option>
                                                <option value="MAHARASHTRS">MAHARASHTRS</option>
                                                <option value="MAHARAST">MAHARAST</option>
                                                <option value="MAHARASTAR">MAHARASTAR</option>
                                                <option value="MAHARASTARA">MAHARASTARA</option>
                                                <option value="MAHARASTRA">MAHARASTRA</option>
                                                <option value="MAHARSAHTRA">MAHARSAHTRA</option>
                                                <option value="MAHARSTRA">MAHARSTRA</option>
                                                <option value="MAHRASHTRA">MAHRASHTRA</option>
                                                <option value="MAHRASTRA">MAHRASTRA</option>
                                                <option value="MANIPUR">MANIPUR</option>
                                                <option value="MANSOO R">MANSOO R</option>
                                                <option value="MARSTEA">MARSTEA</option>
                                                <option value="MEGHALAYA">MEGHALAYA</option>
                                                <option value="MH">MH</option>
                                                <option value="MHA">MHA</option>
                                                <option value="MHARASTARA">MHARASTARA</option>
                                                <option value="MHR">MHR</option>
                                                <option value="MIZORAM">MIZORAM</option>
                                                <option value="MP">MP</option>
                                                <option value="MS">MS</option>
                                                <option value="MUMBAI">MUMBAI</option>
                                                <option value="N">N</option>
                                                <option value="NAGALAND">NAGALAND</option>
                                                <option value="ORISSA">ORISSA</option>
                                                <option value="PONDICHERRY">PONDICHERRY</option>
                                                <option value="PUNJAB">PUNJAB</option>
                                                <option value="RAJ">RAJ</option>
                                                <option value="RAJASTAN">RAJASTAN</option>
                                                <option value="RAJASTHAN">RAJASTHAN</option>
                                                <option value="RAJSHATN">RAJSHATN</option>
                                                <option value="RAJSHTAN">RAJSHTAN</option>
                                                <option value="RAJSHTHAN">RAJSHTHAN</option>
                                                <option value="RAJSTHAN">RAJSTHAN</option>
                                                <option value="S">S</option>
                                                <option value="SIKKIM">SIKKIM</option>
                                                <option value="TAMIL NADU">TAMIL NADU</option>
                                                <option value="THANA">THANA</option>
                                                <option value="THANE">THANE</option>
                                                <option value="THYANE">THYANE</option>
                                                <option value="TRIPURA">TRIPURA</option>
                                                <option value="U P">U P</option>
                                                <option value="UP">UP</option>
                                                <option value="UTTAR PRADES">UTTAR PRADES</option>
                                                <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                                                <option value="UTTARANCHAL">UTTARANCHAL</option>
                                                <option value="W">W</option>
                                                <option value="WEST BENGAL">WEST BENGAL</option>
                                                <option value="Y">Y</option>

                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>City :</td>
                                        <td colspan="2">
                                            <select name="ctl00$siteDataHolder$drpCity"
                                                    id="siteDataHolder_drpCity">
                                                <option value="A">A</option>
                                                <option value="ABAD">ABAD</option>
                                                <option value="ABHANPUR">ABHANPUR</option>
                                                <option value="ABOHAR">ABOHAR</option>
                                                <option value="ACALPUR">ACALPUR</option>
                                                <option value="ACHAIPUR">ACHAIPUR</option>
                                                <option value="ADAMPUR">ADAMPUR</option>
                                                <option value="ADDANKI">ADDANKI</option>
                                                <option value="ADHAV">ADHAV</option>
                                                <option value="ADILABAD">ADILABAD</option>
                                                <option value="ADIMALI">ADIMALI</option>
                                                <option value="ADIPUR">ADIPUR</option>
                                                <option value="ADIRAMPATTINAM">ADIRAMPATTINAM</option>
                                                <option value="ADOKHAR">ADOKHAR</option>
                                                <option value="ADONI">ADONI</option>
                                                <option value="ADOOR">ADOOR</option>
                                                <option value="ADYAL">ADYAL</option>
                                                <option value="AFZALPUR">AFZALPUR</option>
                                                <option value="AGARTALA">AGARTALA</option>
                                                <option value="AGASTEESWARAM">AGASTEESWARAM</option>
                                                <option value="AGRA">AGRA</option>
                                                <option value="AGRAHARAM">AGRAHARAM</option>
                                                <option value="AHAMDABAD">AHAMDABAD</option>
                                                <option value="AHERI">AHERI</option>
                                                <option value="AHMDABAD">AHMDABAD</option>
                                                <option value="AHMEDABAD">AHMEDABAD</option>
                                                <option value="AHMEDGARH">AHMEDGARH</option>
                                                <option value="AHMEDNAGAR">AHMEDNAGAR</option>
                                                <option value="AHMEDPUR">AHMEDPUR</option>
                                                <option value="AHWA">AHWA</option>
                                                <option value="AIMANGALA">AIMANGALA</option>
                                                <option value="AINAPUR">AINAPUR</option>
                                                <option value="AIZAWL">AIZAWL</option>
                                                <option value="AJARA">AJARA</option>
                                                <option value="AJAYGARH">AJAYGARH</option>
                                                <option value="AJJAMPUR">AJJAMPUR</option>
                                                <option value="AJMER">AJMER</option>
                                                <option value="AKALTARA">AKALTARA</option>
                                                <option value="AKKALKOT">AKKALKOT</option>
                                                <option value="AKKALKUWA">AKKALKUWA</option>
                                                <option value="AKKI ALUR">AKKI ALUR</option>
                                                <option value="AKLUJ">AKLUJ</option>
                                                <option value="AKOLA">AKOLA</option>
                                                <option value="AKOLE">AKOLE</option>
                                                <option value="AKOT">AKOT</option>
                                                <option value="AKURDI">AKURDI</option>
                                                <option value="ALLAHABAD">ALLAHABAD</option>
                                                <option value="ATREYAPURAM">ATREYAPURAM</option>
                                                <option value="ATTILI">ATTILI</option>
                                                <option value="ATTUNGAL">ATTUNGAL</option>
                                                <option value="ATTUR">ATTUR</option>
                                                <option value="AUGUSTMUNI">AUGUSTMUNI</option>
                                                <option value="AUKIRIPALLI">AUKIRIPALLI</option>
                                                <option value="AUL">AUL</option>
                                                <option value="AURAD">AURAD</option>
                                                <option value="AURANGABAD">AURANGABAD</option>
                                                <option value="AUSA">AUSA</option>
                                                <option value="AVANIGADDA">AVANIGADDA</option>
                                                <option value="AVENA">AVENA</option>
                                                <option value="AYYANNAPETA">AYYANNAPETA</option>
                                                <option value="AZAD LAKHIMPUR">AZAD LAKHIMPUR</option>
                                                <option value="AZAMGARH">AZAMGARH</option>
                                                <option value="AZAMPUR">AZAMPUR</option>
                                                <option value="Addanki">Addanki</option>
                                                <option value="B">B</option>
                                                <option value="BABAI">BABAI</option>
                                                <option value="BABHULGAON">BABHULGAON</option>
                                                <option value="BABLESHWAR">BABLESHWAR</option>
                                                <option value="BADAMI">BADAMI</option>
                                                <option value="BADGAON">BADGAON</option>
                                                <option value="BADKOT">BADKOT</option>
                                                <option value="BADNAPUR">BADNAPUR</option>
                                                <option value="BADNERA">BADNERA</option>
                                                <option value="BADOKHAR">BADOKHAR</option>
                                                <option value="BADVEL">BADVEL</option>
                                                <option value="BAGAHA">BAGAHA</option>
                                                <option value="BAGALKOT">BAGALKOT</option>
                                                <option value="BAGAR">BAGAR</option>
                                                <option value="BAGBAHARA">BAGBAHARA</option>
                                                <option value="BAGEPALLI">BAGEPALLI</option>
                                                <option value="BAGHMARA">BAGHMARA</option>
                                                <option value="BAGHMARA GARO HILLS">BAGHMARA GARO HILLS</option>
                                                <option value="BAGNAN">BAGNAN</option>
                                                <option value="BAHADURGANJ">BAHADURGANJ</option>
                                                <option value="BAHADURGARH">BAHADURGARH</option>
                                                <option value="BAHALDA">BAHALDA</option>
                                                <option value="BAHERA">BAHERA</option>
                                                <option value="BAHERI">BAHERI</option>
                                                <option value="BAHINSA">BAHINSA</option>
                                                <option value="BAHONA">BAHONA</option>
                                                <option value="BAKANER">BAKANER</option>
                                                <option value="BANGALORE">BANGALORE</option>
                                                <option value="BEKANER">BEKANER</option>
                                                <option value="BHATIA">BHATIA</option>
                                                <option value="BHAYANDER">BHAYANDER</option>
                                                <option value="BHAYANDRER">BHAYANDRER</option>
                                                <option value="BHILAI">BHILAI</option>
                                                <option value="BHIWANDI">BHIWANDI</option>
                                                <option value="BHYANDER">BHYANDER</option>
                                                <option value="BIKANER">BIKANER</option>
                                                <option value="BIKANERR">BIKANERR</option>
                                                <option value="BIKANERRA">BIKANERRA</option>
                                                <option value="BOLANGIR">BOLANGIR</option>
                                                <option value="BOLEGAON">BOLEGAON</option>
                                                <option value="BOLLARAM">BOLLARAM</option>
                                                <option value="BOLPUR">BOLPUR</option>
                                                <option value="BOMBAY">BOMBAY</option>
                                                <option value="BOMDILA">BOMDILA</option>
                                                <option value="BOMMANAKATTE">BOMMANAKATTE</option>
                                                <option value="BOMMURU">BOMMURU</option>
                                                <option value="BONGAIGAON">BONGAIGAON</option>
                                                <option value="BORADI">BORADI</option>
                                                <option value="BORGAON MANJU">BORGAON MANJU</option>
                                                <option value="BORHAT">BORHAT</option>
                                                <option value="BORSAD">BORSAD</option>
                                                <option value="BOTAD">BOTAD</option>
                                                <option value="BRAHMAGIRI">BRAHMAGIRI</option>
                                                <option value="BRAMHAPURI">BRAMHAPURI</option>
                                                <option value="BRANHMAVAR">BRANHMAVAR</option>
                                                <option value="BROACH">BROACH</option>
                                                <option value="BRUNDABAN VIHAR">BRUNDABAN VIHAR</option>
                                                <option value="BUCHIREDDYPALEM">BUCHIREDDYPALEM</option>
                                                <option value="BUDAUN">BUDAUN</option>
                                                <option value="BUDDAARAM">BUDDAARAM</option>
                                                <option value="BUDHLAD">BUDHLAD</option>
                                                <option value="BUDHOLI">BUDHOLI</option>
                                                <option value="BUGUDA">BUGUDA</option>
                                                <option value="BUHARI">BUHARI</option>
                                                <option value="BUKKAPATNAM">BUKKAPATNAM</option>
                                                <option value="BULANDSHAHAR">BULANDSHAHAR</option>
                                                <option value="BULDANA">BULDANA</option>
                                                <option value="BULDHANA">BULDHANA</option>
                                                <option value="BULSAR">BULSAR</option>
                                                <option value="BUNGKAWN">BUNGKAWN</option>
                                                <option value="BURDWAN">BURDWAN</option>
                                                <option value="BURHANPUR">BURHANPUR</option>
                                                <option value="BURHAR">BURHAR</option>
                                                <option value="BURIA">BURIA</option>
                                                <option value="BUTIBORI">BUTIBORI</option>
                                                <option value="BUXAR">BUXAR</option>
                                                <option value="BWM">BWM</option>
                                                <option value="BYADGI">BYADGI</option>
                                                <option value="BYNDOOR">BYNDOOR</option>
                                                <option value="CACHAR">CACHAR</option>
                                                <option value="CAHMORSHI">CAHMORSHI</option>
                                                <option value="CALICUT">CALICUT</option>
                                                <option value="CHANDIGRAH">CHANDIGRAH</option>
                                                <option value="CHHINDWARA">CHHINDWARA</option>
                                                <option value="CHITTARANJAN">CHITTARANJAN</option>
                                                <option value="CHITTOOR">CHITTOOR</option>
                                                <option value="CHITTORGARH">CHITTORGARH</option>
                                                <option value="CHITTUR">CHITTUR</option>
                                                <option value="CHITYAL">CHITYAL</option>
                                                <option value="CHODAVARAM">CHODAVARAM</option>
                                                <option value="CHOPDA">CHOPDA</option>
                                                <option value="CHOUDWAR">CHOUDWAR</option>
                                                <option value="CHOUTUPPAL">CHOUTUPPAL</option>
                                                <option value="CHOWARI">CHOWARI</option>
                                                <option value="CHOWDAVARAM">CHOWDAVARAM</option>
                                                <option value="CHUMUKHEDIMA">CHUMUKHEDIMA</option>
                                                <option value="CHUNGATHARA">CHUNGATHARA</option>
                                                <option value="CHUNKANKADAI">CHUNKANKADAI</option>
                                                <option value="CHURACHANDPUR">CHURACHANDPUR</option>
                                                <option value="CHURU">CHURU</option>
                                                <option value="CHURULIA">CHURULIA</option>
                                                <option value="CILAKALURIPET">CILAKALURIPET</option>
                                                <option value="COCHIN">COCHIN</option>
                                                <option value="COIMBATORE">COIMBATORE</option>
                                                <option value="CONTAI">CONTAI</option>
                                                <option value="COOCH BEHAR">COOCH BEHAR</option>
                                                <option value="COURTALLAM">COURTALLAM</option>
                                                <option value="CUDDAPAH">CUDDAPAH</option>
                                                <option value="CUMBUM">CUMBUM</option>
                                                <option value="CUNCOLIM">CUNCOLIM</option>
                                                <option value="CUTTACK">CUTTACK</option>
                                                <option value="D">D</option>
                                                <option value="DABHOI">DABHOI</option>
                                                <option value="DABHRA">DABHRA</option>
                                                <option value="DELHI">DELHI</option>
                                                <option value="DHULE">DHULE</option>
                                                <option value="DHULIA">DHULIA</option>
                                                <option value="DOMBIVALI">DOMBIVALI</option>
                                                <option value="DOMBIVLI">DOMBIVLI</option>
                                                <option value="DOMBIWALI">DOMBIWALI</option>
                                                <option value="DQ">DQ</option>
                                                <option value="DUBAI">DUBAI</option>
                                                <option value="DUMRAON">DUMRAON</option>
                                                <option value="DUNGARPUR">DUNGARPUR</option>
                                                <option value="DURA">DURA</option>
                                                <option value="DURG">DURG</option>
                                                <option value="DURGAPUR">DURGAPUR</option>
                                                <option value="DURTLANG">DURTLANG</option>
                                                <option value="DUSARBID">DUSARBID</option>
                                                <option value="DUSPALA">DUSPALA</option>
                                                <option value="EDACOCHIN">EDACOCHIN</option>
                                                <option value="EDATHUA">EDATHUA</option>
                                                <option value="EDAVANNA">EDAVANNA</option>
                                                <option value="ELARIHTHATTU">ELARIHTHATTU</option>
                                                <option value="ELERITHATTU">ELERITHATTU</option>
                                                <option value="ELLENABAD">ELLENABAD</option>
                                                <option value="ELTHURUTH">ELTHURUTH</option>
                                                <option value="ELTUMANOOR">ELTUMANOOR</option>
                                                <option value="ELURU">ELURU</option>
                                                <option value="ERAKANA">ERAKANA</option>
                                                <option value="ERANCH">ERANCH</option>
                                                <option value="ERNAKULAM">ERNAKULAM</option>
                                                <option value="ERODE">ERODE</option>
                                                <option value="ERSAMA">ERSAMA</option>
                                                <option value="ESHAHPUR">ESHAHPUR</option>
                                                <option value="ETAH">ETAH</option>
                                                <option value="ETAPALLI">ETAPALLI</option>
                                                <option value="ETAWAH">ETAWAH</option>
                                                <option value="ETCHERLA">ETCHERLA</option>
                                                <option value="ETHAROD">ETHAROD</option>
                                                <option value="ETTAYAPURAM">ETTAYAPURAM</option>
                                                <option value="ETTUMANUR">ETTUMANUR</option>
                                                <option value="F">F</option>
                                                <option value="FAIZABAD">FAIZABAD</option>
                                                <option value="FAIZPUR">FAIZPUR</option>
                                                <option value="FARIDABAD">FARIDABAD</option>
                                                <option value="FARIDKOT">FARIDKOT</option>
                                                <option value="FARMAGUDI">FARMAGUDI</option>
                                                <option value="FARRUKHABAD">FARRUKHABAD</option>
                                                <option value="FATEHABAD">FATEHABAD</option>
                                                <option value="FATEHGARH">FATEHGARH</option>
                                                <option value="FATEHGARH SAHIB">FATEHGARH SAHIB</option>
                                                <option value="FATEHPUR">FATEHPUR</option>
                                                <option value="FATEHPUR SEKHAWATI">FATEHPUR SEKHAWATI</option>
                                                <option value="FATIKROY">FATIKROY</option>
                                                <option value="FATTAPUR">FATTAPUR</option>
                                                <option value="FAZILKA">FAZILKA</option>
                                                <option value="FEROKE">FEROKE</option>
                                                <option value="FEROZEPUR">FEROZEPUR</option>
                                                <option value="FIROZABAD">FIROZABAD</option>
                                                <option value="FORBESGANJ">FORBESGANJ</option>
                                                <option value="G">G</option>
                                                <option value="G UDAYGIRI">G UDAYGIRI</option>
                                                <option value="GADAG">GADAG</option>
                                                <option value="GADARWARA">GADARWARA</option>
                                                <option value="GADCHANDUR">GADCHANDUR</option>
                                                <option value="GADCHIROLI">GADCHIROLI</option>
                                                <option value="GADHADA">GADHADA</option>
                                                <option value="GADHINGLAJ">GADHINGLAJ</option>
                                                <option value="GADOHIROLI">GADOHIROLI</option>
                                                <option value="GADWAL">GADWAL</option>
                                                <option value="GAJAPATINAGARAM">GAJAPATINAGARAM</option>
                                                <option value="GAJENDRAGAD">GAJENDRAGAD</option>
                                                <option value="GAJWEL">GAJWEL</option>
                                                <option value="GANAPAVARAM">GANAPAVARAM</option>
                                                <option value="GANDAI">GANDAI</option>
                                                <option value="GANDASI">GANDASI</option>
                                                <option value="GANDHIGRAM">GANDHIGRAM</option>
                                                <option value="GANDHINAGAR">GANDHINAGAR</option>
                                                <option value="GANDHINGLAJ">GANDHINGLAJ</option>
                                                <option value="GANGAKHED">GANGAKHED</option>
                                                <option value="GANGANAGAR">GANGANAGAR</option>
                                                <option value="GANGAPUR">GANGAPUR</option>
                                                <option value="GANGARAMPUR">GANGARAMPUR</option>
                                                <option value="GANGAWATHI">GANGAWATHI</option>
                                                <option value="GANGTOK">GANGTOK</option>
                                                <option value="GANIA">GANIA</option>
                                                <option value="GANJAM">GANJAM</option>
                                                <option value="GANJDUNDWARA">GANJDUNDWARA</option>
                                                <option value="GANNAVARM">GANNAVARM</option>
                                                <option value="GARAHAMANTRI">GARAHAMANTRI</option>
                                                <option value="GARATAD">GARATAD</option>
                                                <option value="GARGAON">GARGAON</option>
                                                <option value="GARGOTI">GARGOTI</option>
                                                <option value="GARHAKOTA">GARHAKOTA</option>
                                                <option value="GARHPALASUNI">GARHPALASUNI</option>
                                                <option value="GARIABAND">GARIABAND</option>
                                                <option value="GARIYADHAR">GARIYADHAR</option>
                                                <option value="GHATKOPAR">GHATKOPAR</option>
                                                <option value="GONDIA">GONDIA</option>
                                                <option value="GURGAON">GURGAON</option>
                                                <option value="GURGOAN">GURGOAN</option>
                                                <option value="GURH">GURH</option>
                                                <option value="GURMITKAL">GURMITKAL</option>
                                                <option value="GURUDASPUR">GURUDASPUR</option>
                                                <option value="GURUKUL KANGRI">GURUKUL KANGRI</option>
                                                <option value="GURUVAYUR">GURUVAYUR</option>
                                                <option value="GUSHKARA">GUSHKARA</option>
                                                <option value="GUWAHATI">GUWAHATI</option>
                                                <option value="GWALIOR">GWALIOR</option>
                                                <option value="H">H</option>
                                                <option value="H BHANAHALLI">H BHANAHALLI</option>
                                                <option value="H HADAGALI">H HADAGALI</option>
                                                <option value="H HUVINA HADAGALLI">H HUVINA HADAGALLI</option>
                                                <option value="HADAPSAR">HADAPSAR</option>
                                                <option value="HADGAON">HADGAON</option>
                                                <option value="HAFIZPUR">HAFIZPUR</option>
                                                <option value="HAFLONG">HAFLONG</option>
                                                <option value="HAILAKANDI">HAILAKANDI</option>
                                                <option value="HAJIPUR">HAJIPUR</option>
                                                <option value="HALDWANI">HALDWANI</option>
                                                <option value="HALEANGADY">HALEANGADY</option>
                                                <option value="HALIYA">HALIYA</option>
                                                <option value="HALIYAL">HALIYAL</option>
                                                <option value="HALKANADI">HALKANADI</option>
                                                <option value="HALKARNI">HALKARNI</option>
                                                <option value="HALLIKHED">HALLIKHED</option>
                                                <option value="HALOL">HALOL</option>
                                                <option value="HAMIRPUR">HAMIRPUR</option>
                                                <option value="HANAGAL">HANAGAL</option>
                                                <option value="HANAMKONDA">HANAMKONDA</option>
                                                <option value="HANDIA">HANDIA</option>
                                                <option value="HANGAL">HANGAL</option>
                                                <option value="HANSI">HANSI</option>
                                                <option value="HANTERGANJ">HANTERGANJ</option>
                                                <option value="HANUMANA">HANUMANA</option>
                                                <option value="HANUMANGARH">HANUMANGARH</option>
                                                <option value="HANUR">HANUR</option>
                                                <option value="HAPUR">HAPUR</option>
                                                <option value="HARANATHPURAM">HARANATHPURAM</option>
                                                <option value="HARAPANAHALLI">HARAPANAHALLI</option>
                                                <option value="HARDA">HARDA</option>
                                                <option value="HARDI BAZAR">HARDI BAZAR</option>
                                                <option value="HOJAI">HOJAI</option>
                                                <option value="HOLALKERE">HOLALKERE</option>
                                                <option value="HOLEALUR">HOLEALUR</option>
                                                <option value="HOLENARSIPUR">HOLENARSIPUR</option>
                                                <option value="HONNALI">HONNALI</option>
                                                <option value="HONNAVAR">HONNAVAR</option>
                                                <option value="HOOGLY">HOOGLY</option>
                                                <option value="HORTI">HORTI</option>
                                                <option value="HOSANAGAR">HOSANAGAR</option>
                                                <option value="HOSHANGABAD">HOSHANGABAD</option>
                                                <option value="HOSHIARPUR">HOSHIARPUR</option>
                                                <option value="HOSKOTE">HOSKOTE</option>
                                                <option value="HOSPET">HOSPET</option>
                                                <option value="HOSUR">HOSUR</option>
                                                <option value="HOWLI">HOWLI</option>
                                                <option value="HOWRAH">HOWRAH</option>
                                                <option value="HRANGBANA">HRANGBANA</option>
                                                <option value="HUBLI">HUBLI</option>
                                                <option value="HUKKERI">HUKKERI</option>
                                                <option value="HUMNABAD">HUMNABAD</option>
                                                <option value="HUNSUR">HUNSUR</option>
                                                <option value="HUPARI">HUPARI</option>
                                                <option value="HUZURABAD">HUZURABAD</option>
                                                <option value="HUZURNAGAR">HUZURNAGAR</option>
                                                <option value="HYDERABAD">HYDERABAD</option>
                                                <option value="IBRAHIMPATNAM">IBRAHIMPATNAM</option>
                                                <option value="ICHALKARANJI">ICHALKARANJI</option>
                                                <option value="ICHHAWAR">ICHHAWAR</option>
                                                <option value="IDAR">IDAR</option>
                                                <option value="IGATPURI">IGATPURI</option>
                                                <option value="ILAYANGUDI">ILAYANGUDI</option>
                                                <option value="ILKAL">ILKAL</option>
                                                <option value="IMPHAL">IMPHAL</option>
                                                <option value="INCHAL">INCHAL</option>
                                                <option value="INDARA MAU">INDARA MAU</option>
                                                <option value="INDORA">INDORA</option>
                                                <option value="INDORE">INDORE</option>
                                                <option value="INDUPUR">INDUPUR</option>
                                                <option value="INKOLLU">INKOLLU</option>
                                                <option value="IRINJALAKUDA">IRINJALAKUDA</option>
                                                <option value="IRITTY">IRITTY</option>
                                                <option value="ISLAMPUR">ISLAMPUR</option>
                                                <option value="ITAMUKKALA">ITAMUKKALA</option>
                                                <option value="ITANAGAR">ITANAGAR</option>
                                                <option value="ITARSI">ITARSI</option>
                                                <option value="ITIKYAL">ITIKYAL</option>
                                                <option value="IZATNAGAR">IZATNAGAR</option>
                                                <option value="J">J</option>
                                                <option value="JABALPUR">JABALPUR</option>
                                                <option value="JABERA">JABERA</option>
                                                <option value="JADCHERIA">JADCHERIA</option>
                                                <option value="JAFRABAD">JAFRABAD</option>
                                                <option value="JAGADHARI">JAGADHARI</option>
                                                <option value="JAGALUR">JAGALUR</option>
                                                <option value="JAGATPUR">JAGATPUR</option>
                                                <option value="JAGATSINGHPUR">JAGATSINGHPUR</option>
                                                <option value="JAGDALPUR">JAGDALPUR</option>
                                                <option value="JAGGAIAHPET">JAGGAIAHPET</option>
                                                <option value="JAGGAMPETA">JAGGAMPETA</option>
                                                <option value="JAGOI">JAGOI</option>
                                                <option value="JAGTIAL">JAGTIAL</option>
                                                <option value="JAHANABAD">JAHANABAD</option>
                                                <option value="JAHEDNAGAR">JAHEDNAGAR</option>
                                                <option value="JAINA">JAINA</option>
                                                <option value="JAINTIA HILLS">JAINTIA HILLS</option>
                                                <option value="JAIPUR">JAIPUR</option>
                                                <option value="JAISINGHNAGAR">JAISINGHNAGAR</option>
                                                <option value="JAITPUR">JAITPUR</option>
                                                <option value="JAJAPUR">JAJAPUR</option>
                                                <option value="JAKATWADI">JAKATWADI</option>
                                                <option value="JAKHAMA">JAKHAMA</option>
                                                <option value="JALAHGHAT">JALAHGHAT</option>
                                                <option value="JALALPUR">JALALPUR</option>
                                                <option value="JALANDHAR">JALANDHAR</option>
                                                <option value="JALAUN">JALAUN</option>
                                                <option value="JALESAR">JALESAR</option>
                                                <option value="JALESWAR">JALESWAR</option>
                                                <option value="JALGAON">JALGAON</option>
                                                <option value="JALNA">JALNA</option>
                                                <option value="JALPAIGURI">JALPAIGURI</option>
                                                <option value="JAMALPUR">JAMALPUR</option>
                                                <option value="JAMBUSAR">JAMBUSAR</option>
                                                <option value="JAMI">JAMI</option>
                                                <option value="JHGH">JHGH</option>
                                                <option value="JHUNJHUNU">JHUNJHUNU</option>
                                                <option value="JIGNI">JIGNI</option>
                                                <option value="JILLELLAMUDI">JILLELLAMUDI</option>
                                                <option value="JIND">JIND</option>
                                                <option value="JINTOOR">JINTOOR</option>
                                                <option value="JIRAL">JIRAL</option>
                                                <option value="JOBNER">JOBNER</option>
                                                <option value="JODHPUR">JODHPUR</option>
                                                <option value="JOGINDERNAGAR">JOGINDERNAGAR</option>
                                                <option value="JOGIPET">JOGIPET</option>
                                                <option value="JONAI">JONAI</option>
                                                <option value="JONAL">JONAL</option>
                                                <option value="JORANDA">JORANDA</option>
                                                <option value="JORHAT">JORHAT</option>
                                                <option value="JOSHIMATH">JOSHIMATH</option>
                                                <option value="JOURA">JOURA</option>
                                                <option value="JOWAI">JOWAI</option>
                                                <option value="JULLOR">JULLOR</option>
                                                <option value="JUMBUSAR">JUMBUSAR</option>
                                                <option value="JUNAGADH">JUNAGADH</option>
                                                <option value="JUNNAR">JUNNAR</option>
                                                <option value="JURIA">JURIA</option>
                                                <option value="K R NAGAR">K R NAGAR</option>
                                                <option value="K R PETE">K R PETE</option>
                                                <option value="KACHCHH">KACHCHH</option>
                                                <option value="KACHERI">KACHERI</option>
                                                <option value="KADA">KADA</option>
                                                <option value="KADAMBADI">KADAMBADI</option>
                                                <option value="KADAVATHUR">KADAVATHUR</option>
                                                <option value="KADEPUR">KADEPUR</option>
                                                <option value="KADI">KADI</option>
                                                <option value="KADIRI">KADIRI</option>
                                                <option value="KADMAPADA">KADMAPADA</option>
                                                <option value="KAGAL">KAGAL</option>
                                                <option value="KAGWAD">KAGWAD</option>
                                                <option value="KAIKALUR">KAIKALUR</option>
                                                <option value="KAILASHAHAR">KAILASHAHAR</option>
                                                <option value="KAIPADARA">KAIPADARA</option>
                                                <option value="KAITHAL">KAITHAL</option>
                                                <option value="KAITHAPARAMBU">KAITHAPARAMBU</option>
                                                <option value="KAJURIAKATA">KAJURIAKATA</option>
                                                <option value="KAKANPUR">KAKANPUR</option>
                                                <option value="KALYA">KALYA</option>
                                                <option value="KANKANPUR">KANKANPUR</option>
                                                <option value="KANPUR">KANPUR</option>
                                                <option value="KATHMANDU">KATHMANDU</option>
                                                <option value="KHANDHERA">KHANDHERA</option>
                                                <option value="KKANPUR">KKANPUR</option>
                                                <option value="KUSMI">KUSMI</option>
                                                <option value="KUSUMBHA">KUSUMBHA</option>
                                                <option value="KUTCH">KUTCH</option>
                                                <option value="KUTHUPARAMBA">KUTHUPARAMBA</option>
                                                <option value="KUZHITHURA">KUZHITHURA</option>
                                                <option value="KVVUR">KVVUR</option>
                                                <option value="KYMORE">KYMORE</option>
                                                <option value="Khanvel">Khanvel</option>
                                                <option value="LACHMANGARH">LACHMANGARH</option>
                                                <option value="LADAKH">LADAKH</option>
                                                <option value="LADNUNM">LADNUNM</option>
                                                <option value="LAHERIASARAI">LAHERIASARAI</option>
                                                <option value="LAKHANDON">LAKHANDON</option>
                                                <option value="LAKHANDUR">LAKHANDUR</option>
                                                <option value="LAKHANI">LAKHANI</option>
                                                <option value="LAKHIMPUR">LAKHIMPUR</option>
                                                <option value="LAKHIMPUR KHERI">LAKHIMPUR KHERI</option>
                                                <option value="LAKHTAR">LAKHTAR</option>
                                                <option value="LAKKIDI">LAKKIDI</option>
                                                <option value="LAKKIREDDIPALLI">LAKKIREDDIPALLI</option>
                                                <option value="LAKSHMANGARH">LAKSHMANGARH</option>
                                                <option value="LAKSHMESHWAR">LAKSHMESHWAR</option>
                                                <option value="LALBAHADURNAGAR">LALBAHADURNAGAR</option>
                                                <option value="LALGAON">LALGAON</option>
                                                <option value="LALITPUR">LALITPUR</option>
                                                <option value="LALSOT">LALSOT</option>
                                                <option value="LANSDOWN">LANSDOWN</option>
                                                <option value="LATEHAR">LATEHAR</option>
                                                <option value="LATUR">LATUR</option>
                                                <option value="LAUNDI">LAUNDI</option>
                                                <option value="LAWNGTLAI">LAWNGTLAI</option>
                                                <option value="LAXMAN CHANDA">LAXMAN CHANDA</option>
                                                <option value="LEMALE">LEMALE</option>
                                                <option value="LEPAKSHI">LEPAKSHI</option>
                                                <option value="LILONG">LILONG</option>
                                                <option value="LIMKHEDA">LIMKHEDA</option>
                                                <option value="LINGSUGUR">LINGSUGUR</option>
                                                <option value="LITAMATI">LITAMATI</option>
                                                <option value="LODHIKHERA">LODHIKHERA</option>
                                                <option value="LOHA">LOHA</option>
                                                <option value="LONAND">LONAND</option>
                                                <option value="LONAR">LONAR</option>
                                                <option value="LONAVALA">LONAVALA</option>
                                                <option value="LONGKHIM">LONGKHIM</option>
                                                <option value="LONI">LONI</option>
                                                <option value="LORMI">LORMI</option>
                                                <option value="LUCKNOW">LUCKNOW</option>
                                                <option value="LUDHIANA">LUDHIANA</option>
                                                <option value="LUGGLEI">LUGGLEI</option>
                                                <option value="LUMDING">LUMDING</option>
                                                <option value="LUNAWADA">LUNAWADA</option>
                                                <option value="LUNGLEI">LUNGLEI</option>
                                                <option value="LUWANGSANGBAM">LUWANGSANGBAM</option>
                                                <option value="M">M</option>
                                                <option value="MAAL">MAAL</option>
                                                <option value="MACHERIA">MACHERIA</option>
                                                <option value="MACHHRA">MACHHRA</option>
                                                <option value="MACHILIPATNAM">MACHILIPATNAM</option>
                                                <option value="MADAKASIRA">MADAKASIRA</option>
                                                <option value="MADAMPAM">MADAMPAM</option>
                                                <option value="MADANAPALLI">MADANAPALLI</option>
                                                <option value="MADANPUR">MADANPUR</option>
                                                <option value="MADANTHYAR">MADANTHYAR</option>
                                                <option value="MADAPPALLY">MADAPPALLY</option>
                                                <option value="MADAYI">MADAYI</option>
                                                <option value="MADDUR">MADDUR</option>
                                                <option value="MADHA">MADHA</option>
                                                <option value="MADHAP">MADHAP</option>
                                                <option value="MADHAPUR">MADHAPUR</option>
                                                <option value="MADHAVARAM">MADHAVARAM</option>
                                                <option value="MADHEPURA">MADHEPURA</option>
                                                <option value="MADHIRA">MADHIRA</option>
                                                <option value="MADHUBANI">MADHUBANI</option>
                                                <option value="MADHUGIRI">MADHUGIRI</option>
                                                <option value="MADHUPUR">MADHUPUR</option>
                                                <option value="MADIKERI">MADIKERI</option>
                                                <option value="MADNASOUR">MADNASOUR</option>
                                                <option value="MADURAI">MADURAI</option>
                                                <option value="MADURANTHAGAM TALUK">MADURANTHAGAM TALUK</option>
                                                <option value="MAGADI">MAGADI</option>
                                                <option value="MAHABUBABAD">MAHABUBABAD</option>
                                                <option value="MAHABUBNAGAR">MAHABUBNAGAR</option>
                                                <option value="MAHAD">MAHAD</option>
                                                <option value="MAHAKALAPADA">MAHAKALAPADA</option>
                                                <option value="MAHALINGPUR">MAHALINGPUR</option>
                                                <option value="MAHARASTRA">MAHARASTRA</option>
                                                <option value="MANDYA">MANDYA</option>
                                                <option value="MEHASANA">MEHASANA</option>
                                                <option value="MINM">MINM</option>
                                                <option value="MP">MP</option>
                                                <option value="MU">MU</option>
                                                <option value="MU MBAI">MU MBAI</option>
                                                <option value="MUM">MUM</option>
                                                <option value="MUMABAI">MUMABAI</option>
                                                <option value="MUMABI">MUMABI</option>
                                                <option value="MUMB">MUMB</option>
                                                <option value="MUMBAI">MUMBAI</option>
                                                <option value="MURTHAL">MURTHAL</option>
                                                <option value="MURTIZAPUR">MURTIZAPUR</option>
                                                <option value="MURUD">MURUD</option>
                                                <option value="MURUM">MURUM</option>
                                                <option value="MUSIRI">MUSIRI</option>
                                                <option value="MUSSORIE">MUSSORIE</option>
                                                <option value="MUTHIREVULA">MUTHIREVULA</option>
                                                <option value="MUTHUKUR">MUTHUKUR</option>
                                                <option value="MUTHUR">MUTHUR</option>
                                                <option value="MUVAL">MUVAL</option>
                                                <option value="MUVATTUPUZHA">MUVATTUPUZHA</option>
                                                <option value="MUZAFFAR NAGAR">MUZAFFAR NAGAR</option>
                                                <option value="MUZAFFARPUR">MUZAFFARPUR</option>
                                                <option value="MYSORE">MYSORE</option>
                                                <option value="N">N</option>
                                                <option value="NABHA">NABHA</option>
                                                <option value="NABINAGAR">NABINAGAR</option>
                                                <option value="NACHUNI">NACHUNI</option>
                                                <option value="NADIA">NADIA</option>
                                                <option value="NADIAD">NADIAD</option>
                                                <option value="NADOUN">NADOUN</option>
                                                <option value="NAGABRAM">NAGABRAM</option>
                                                <option value="NAGAMANGALA">NAGAMANGALA</option>
                                                <option value="NAGAON">NAGAON</option>
                                                <option value="NAGAPATTINAM">NAGAPATTINAM</option>
                                                <option value="NAGARAM">NAGARAM</option>
                                                <option value="NAGARI">NAGARI</option>
                                                <option value="NAGARI-SIHAWA">NAGARI-SIHAWA</option>
                                                <option value="NAGARJUNA NAGAR">NAGARJUNA NAGAR</option>
                                                <option value="NAGARJUNASAGAR">NAGARJUNASAGAR</option>
                                                <option value="NAGARKURNOOL">NAGARKURNOOL</option>
                                                <option value="NAGAROOR">NAGAROOR</option>
                                                <option value="NAGAUD">NAGAUD</option>
                                                <option value="NAGBHID">NAGBHID</option>
                                                <option value="NAGERCOIL">NAGERCOIL</option>
                                                <option value="NAGPUR">NAGPUR</option>
                                                <option value="NAHAN">NAHAN</option>
                                                <option value="NAHARAKANTA">NAHARAKANTA</option>
                                                <option value="NAHARAKATIYA">NAHARAKATIYA</option>
                                                <option value="NAHARLANGUN">NAHARLANGUN</option>
                                                <option value="NAIDUPET">NAIDUPET</option>
                                                <option value="NAVI MUMBAI">NAVI MUMBAI</option>
                                                <option value="NAVIMUMBAI">NAVIMUMBAI</option>
                                                <option value="NIRMAL">NIRMAL</option>
                                                <option value="NIRMALL">NIRMALL</option>
                                                <option value="NITTE">NITTE</option>
                                                <option value="NITTUR">NITTUR</option>
                                                <option value="NIZAMABAD">NIZAMABAD</option>
                                                <option value="NOBHA">NOBHA</option>
                                                <option value="NOIDA">NOIDA</option>
                                                <option value="NONGPOH">NONGPOH</option>
                                                <option value="NONGSTOIN">NONGSTOIN</option>
                                                <option value="NONGTALANG">NONGTALANG</option>
                                                <option value="NONGTHYMMAI">NONGTHYMMAI</option>
                                                <option value="NONOI">NONOI</option>
                                                <option value="NORTH LAKHIMPUR">NORTH LAKHIMPUR</option>
                                                <option value="NOWARANGPUR">NOWARANGPUR</option>
                                                <option value="NOWBOICHA">NOWBOICHA</option>
                                                <option value="NOWGON">NOWGON</option>
                                                <option value="NOWGONG">NOWGONG</option>
                                                <option value="NUAHAT">NUAHAT</option>
                                                <option value="NUDADIHA">NUDADIHA</option>
                                                <option value="NURPUR">NURPUR</option>
                                                <option value="NUVAPADA">NUVAPADA</option>
                                                <option value="NUVEM">NUVEM</option>
                                                <option value="NUZVID">NUZVID</option>
                                                <option value="OBEDULLAGANJ">OBEDULLAGANJ</option>
                                                <option value="ODAGAON">ODAGAON</option>
                                                <option value="ODE">ODE</option>
                                                <option value="OINAM">OINAM</option>
                                                <option value="OLAVER">OLAVER</option>
                                                <option value="ONGOLE">ONGOLE</option>
                                                <option value="OORGAM">OORGAM</option>
                                                <option value="OOTACAMUND">OOTACAMUND</option>
                                                <option value="OOTY">OOTY</option>
                                                <option value="OPAD">OPAD</option>
                                                <option value="ORAI">ORAI</option>
                                                <option value="ORATHANAD">ORATHANAD</option>
                                                <option value="OSMANABAD">OSMANABAD</option>
                                                <option value="OTTAPPALAM">OTTAPPALAM</option>
                                                <option value="OUPADA">OUPADA</option>
                                                <option value="OZAR">OZAR</option>
                                                <option value="P">P</option>
                                                <option value="P VEMBALLUR">P VEMBALLUR</option>
                                                <option value="PACHAGAANI">PACHAGAANI</option>
                                                <option value="PALANPUR">PALANPUR</option>
                                                <option value="PALGHAT">PALGHAT</option>
                                                <option value="PALI">PALI</option>
                                                <option value="PARATWADA">PARATWADA</option>
                                                <option value="PUNALUR">PUNALUR</option>
                                                <option value="PUNDRI">PUNDRI</option>
                                                <option value="PUNE">PUNE</option>
                                                <option value="PUNGANUR">PUNGANUR</option>
                                                <option value="PURAMANNUR">PURAMANNUR</option>
                                                <option value="PURANIGUDAM">PURANIGUDAM</option>
                                                <option value="PURBAN">PURBAN</option>
                                                <option value="PURI">PURI</option>
                                                <option value="PURIGALLI MALAVALLI TQ">PURIGALLI MALAVALLI TQ
                                                </option>
                                                <option value="PURNA">PURNA</option>
                                                <option value="PURNEA">PURNEA</option>
                                                <option value="PUROLA">PUROLA</option>
                                                <option value="PURULIA">PURULIA</option>
                                                <option value="PURUSHOTTAMPUR">PURUSHOTTAMPUR</option>
                                                <option value="PUSA">PUSA</option>
                                                <option value="PUSAD">PUSAD</option>
                                                <option value="PUSAPATIREGA">PUSAPATIREGA</option>
                                                <option value="PUSEGOAN">PUSEGOAN</option>
                                                <option value="PUSHPARAJ GARH">PUSHPARAJ GARH</option>
                                                <option value="PUTHENCRUZ">PUTHENCRUZ</option>
                                                <option value="PUTTUR">PUTTUR</option>
                                                <option value="Port Blair">Port Blair</option>
                                                <option value="QUEPEM">QUEPEM</option>
                                                <option value="QUILANDI">QUILANDI</option>
                                                <option value="RABAKAVI">RABAKAVI</option>
                                                <option value="RADHANPUR">RADHANPUR</option>
                                                <option value="RAE BARELI">RAE BARELI</option>
                                                <option value="RAGHAVAGARH">RAGHAVAGARH</option>
                                                <option value="RAGHOGARH">RAGHOGARH</option>
                                                <option value="RAHA">RAHA</option>
                                                <option value="RAHAMA">RAHAMA</option>
                                                <option value="RAHOD">RAHOD</option>
                                                <option value="RAHURI">RAHURI</option>
                                                <option value="RAIBAG">RAIBAG</option>
                                                <option value="RAICHUR">RAICHUR</option>
                                                <option value="RAIGAD">RAIGAD</option>
                                                <option value="RAIGANJ">RAIGANJ</option>
                                                <option value="RAIGARH">RAIGARH</option>
                                                <option value="RAIPUR">RAIPUR</option>
                                                <option value="RAISEN">RAISEN</option>
                                                <option value="RAJ">RAJ</option>
                                                <option value="RAJA">RAJA</option>
                                                <option value="RAJABAGICHA">RAJABAGICHA</option>
                                                <option value="RIMULI">RIMULI</option>
                                                <option value="RISHIKESH">RISHIKESH</option>
                                                <option value="RISOD">RISOD</option>
                                                <option value="ROHIKA">ROHIKA</option>
                                                <option value="ROHRU">ROHRU</option>
                                                <option value="ROHTAK">ROHTAK</option>
                                                <option value="RON">RON</option>
                                                <option value="ROOPNAGAR">ROOPNAGAR</option>
                                                <option value="ROORKEE">ROORKEE</option>
                                                <option value="ROPAR">ROPAR</option>
                                                <option value="RORUNA">RORUNA</option>
                                                <option value="ROURKELA">ROURKELA</option>
                                                <option value="RUDRAPUR">RUDRAPUR</option>
                                                <option value="RUKADI">RUKADI</option>
                                                <option value="RUPSA">RUPSA</option>
                                                <option value="RUSERA">RUSERA</option>
                                                <option value="S">S</option>
                                                <option value="SABALGARH">SABALGARH</option>
                                                <option value="SABROOM">SABROOM</option>
                                                <option value="SADAK ARJUNI">SADAK ARJUNI</option>
                                                <option value="SADASHIVGAD">SADASHIVGAD</option>
                                                <option value="SADASIVAPET">SADASIVAPET</option>
                                                <option value="SADHLI">SADHLI</option>
                                                <option value="SADIYA">SADIYA</option>
                                                <option value="SADULPUR">SADULPUR</option>
                                                <option value="SAFIDON">SAFIDON</option>
                                                <option value="SAGAR">SAGAR</option>
                                                <option value="SAHADA">SAHADA</option>
                                                <option value="SAHARANPUR">SAHARANPUR</option>
                                                <option value="SAHARASA">SAHARASA</option>
                                                <option value="SAHARSA">SAHARSA</option>
                                                <option value="SAHASPUR">SAHASPUR</option>
                                                <option value="SAHIBGANJ">SAHIBGANJ</option>
                                                <option value="SAHSHPURLOHARA">SAHSHPURLOHARA</option>
                                                <option value="SAIDAPET TALUK">SAIDAPET TALUK</option>
                                                <option value="SAIHA">SAIHA</option>
                                                <option value="SAILU">SAILU</option>
                                                <option value="SAIMARI">SAIMARI</option>
                                                <option value="SAITUAL">SAITUAL</option>
                                                <option value="SAJA">SAJA</option>
                                                <option value="SAKALESHPUR">SAKALESHPUR</option>
                                                <option value="SAKEGAON">SAKEGAON</option>
                                                <option value="SAKHIGOPAL">SAKHIGOPAL</option>
                                                <option value="SONIPAT">SONIPAT</option>
                                                <option value="SRDAR SHAHR">SRDAR SHAHR</option>
                                                <option value="SUNABEDA">SUNABEDA</option>
                                                <option value="SUNAM">SUNAM</option>
                                                <option value="SUNDERGARH">SUNDERGARH</option>
                                                <option value="SUNDERNAGAR">SUNDERNAGAR</option>
                                                <option value="SUNHAT">SUNHAT</option>
                                                <option value="SUNKADAKATTE">SUNKADAKATTE</option>
                                                <option value="SUPAUL">SUPAUL</option>
                                                <option value="SURAJGARH">SURAJGARH</option>
                                                <option value="SURANTHKAL">SURANTHKAL</option>
                                                <option value="SURAT">SURAT</option>
                                                <option value="SURENDRANAGAR">SURENDRANAGAR</option>
                                                <option value="SURGUJA">SURGUJA</option>
                                                <option value="SURI">SURI</option>
                                                <option value="SURYAPET">SURYAPET</option>
                                                <option value="T">T</option>
                                                <option value="T KALLIKULAM">T KALLIKULAM</option>
                                                <option value="T KALUPATTI">T KALUPATTI</option>
                                                <option value="T NARASIPUR">T NARASIPUR</option>
                                                <option value="TA PALAN">TA PALAN</option>
                                                <option value="TA PALANPUR">TA PALANPUR</option>
                                                <option value="TA PRANTIJ">TA PRANTIJ</option>
                                                <option value="TA SIDHPUR">TA SIDHPUR</option>
                                                <option value="TA. CHANSAMA">TA. CHANSAMA</option>
                                                <option value="TADAPALLI">TADAPALLI</option>
                                                <option value="TADEPALLIGUDEM">TADEPALLIGUDEM</option>
                                                <option value="TADIKONDA">TADIKONDA</option>
                                                <option value="TADPATRI">TADPATRI</option>
                                                <option value="TADUBI">TADUBI</option>
                                                <option value="TAJPUR">TAJPUR</option>
                                                <option value="TAKHATPUR">TAKHATPUR</option>
                                                <option value="TAKLI-DHOKESHWAR">TAKLI-DHOKESHWAR</option>
                                                <option value="TAL KALOL">TAL KALOL</option>
                                                <option value="TAL NIPHAD">TAL NIPHAD</option>
                                                <option value="TAL RAVER">TAL RAVER</option>
                                                <option value="TAL SAKRI">TAL SAKRI</option>
                                                <option value="TAL. KHED">TAL. KHED</option>
                                                <option value="TALAPADY">TALAPADY</option>
                                                <option value="TALASSERY">TALASSERY</option>
                                                <option value="TALCHER">TALCHER</option>
                                                <option value="TALEGAON DABHADE">TALEGAON DABHADE</option>
                                                <option value="TALEIGAO">TALEIGAO</option>
                                                <option value="TALIKOTI">TALIKOTI</option>
                                                <option value="THANA">THANA</option>
                                                <option value="THANE">THANE</option>
                                                <option value="TIRUCHIRAPPALLI">TIRUCHIRAPPALLI</option>
                                                <option value="TIRUMANGALAM">TIRUMANGALAM</option>
                                                <option value="TIRUNELVELI">TIRUNELVELI</option>
                                                <option value="TIRUPANANDAL">TIRUPANANDAL</option>
                                                <option value="TIRUPATI">TIRUPATI</option>
                                                <option value="TIRUPPATTUR PATTI">TIRUPPATTUR PATTI</option>
                                                <option value="TIRUPUR">TIRUPUR</option>
                                                <option value="TIRUR">TIRUR</option>
                                                <option value="TIRUVALENGADU">TIRUVALENGADU</option>
                                                <option value="TIRUVALIA">TIRUVALIA</option>
                                                <option value="TIRUVALLUR">TIRUVALLUR</option>
                                                <option value="TIRUVANNAMALAI">TIRUVANNAMALAI</option>
                                                <option value="TITABAR">TITABAR</option>
                                                <option value="UDAIPUR">UDAIPUR</option>
                                                <option value="UDUPI">UDUPI</option>
                                                <option value="UJIRE">UJIRE</option>
                                                <option value="UJJAIN">UJJAIN</option>
                                                <option value="UKHRUL">UKHRUL</option>
                                                <option value="ULAVAPADU">ULAVAPADU</option>
                                                <option value="ULHASNAGAR">ULHASNAGAR</option>
                                                <option value="ULLAL">ULLAL</option>
                                                <option value="UMARER">UMARER</option>
                                                <option value="UMARIA">UMARIA</option>
                                                <option value="UMARKHED">UMARKHED</option>
                                                <option value="UMARKOTE">UMARKOTE</option>
                                                <option value="UMBRAJ">UMBRAJ</option>
                                                <option value="UMERGA">UMERGA</option>
                                                <option value="UMRER">UMRER</option>
                                                <option value="UMRONGSO">UMRONGSO</option>
                                                <option value="UNA">UNA</option>
                                                <option value="UNDRA">UNDRA</option>
                                                <option value="UNJHA">UNJHA</option>
                                                <option value="UNNAO">UNNAO</option>
                                                <option value="UPPINANGADY">UPPINANGADY</option>
                                                <option value="URUN ISLAMPUR">URUN ISLAMPUR</option>
                                                <option value="UTAI">UTAI</option>
                                                <option value="UTHAMAPALAYAM">UTHAMAPALAYAM</option>
                                                <option value="UTTARKASHI">UTTARKASHI</option>
                                                <option value="UZHAVOOR">UZHAVOOR</option>
                                                <option value="VAAGDEVI">VAAGDEVI</option>
                                                <option value="VADALI">VADALI</option>
                                                <option value="VADLAMUDI">VADLAMUDI</option>
                                                <option value="VADNAGAR">VADNAGAR</option>
                                                <option value="VADODARA">VADODARA</option>
                                                <option value="VADUJ">VADUJ</option>
                                                <option value="VAIJNATH">VAIJNATH</option>
                                                <option value="VAIKOM">VAIKOM</option>
                                                <option value="VAIRAG">VAIRAG</option>
                                                <option value="VAISHALI">VAISHALI</option>
                                                <option value="VAJRESHWARI">VAJRESHWARI</option>
                                                <option value="VALANCHERRY">VALANCHERRY</option>
                                                <option value="VALAVANNUR">VALAVANNUR</option>
                                                <option value="VALAYAPCHIRANGARA">VALAYAPCHIRANGARA</option>
                                                <option value="VALIA">VALIA</option>
                                                <option value="VALLABH VIDYANAGAR">VALLABH VIDYANAGAR</option>
                                                <option value="VALOD">VALOD</option>
                                                <option value="VARANASHI">VARANASHI</option>
                                                <option value="VARANASI">VARANASI</option>
                                                <option value="VIDYANAGAR">VIDYANAGAR</option>
                                                <option value="VIGINIGIRI">VIGINIGIRI</option>
                                                <option value="VIJAPUR">VIJAPUR</option>
                                                <option value="VIJAYANAGAR">VIJAYANAGAR</option>
                                                <option value="VIJAYAWADA">VIJAYAWADA</option>
                                                <option value="VIKARABAD">VIKARABAD</option>
                                                <option value="VILAKUDDY">VILAKUDDY</option>
                                                <option value="VILLUPURAM">VILLUPURAM</option>
                                                <option value="VINDHYA NAGAR">VINDHYA NAGAR</option>
                                                <option value="VINJAMUR">VINJAMUR</option>
                                                <option value="VINUKONDA">VINUKONDA</option>
                                                <option value="VIRAJPET">VIRAJPET</option>
                                                <option value="VIRAMGAM">VIRAMGAM</option>
                                                <option value="VIRUDHUNAGAR">VIRUDHUNAGAR</option>
                                                <option value="VISAD">VISAD</option>
                                                <option value="VISAKHAPATNAM">VISAKHAPATNAM</option>
                                                <option value="VISANAGAR">VISANAGAR</option>
                                                <option value="VISAVADAR">VISAVADAR</option>
                                                <option value="VITA">VITA</option>
                                                <option value="VIZIANAGARAM">VIZIANAGARAM</option>
                                                <option value="VRINDAVAN">VRINDAVAN</option>
                                                <option value="VUYYUR">VUYYUR</option>
                                                <option value="VYARA">VYARA</option>
                                                <option value="W">W</option>
                                                <option value="WADAKKANCHERRY">WADAKKANCHERRY</option>
                                                <option value="WADHAWAN">WADHAWAN</option>
                                                <option value="WADI">WADI</option>
                                                <option value="WADRAFNAGAR">WADRAFNAGAR</option>
                                                <option value="WAI">WAI</option>
                                                <option value="WALGAON">WALGAON</option>
                                                <option value="WANADONGRI">WANADONGRI</option>
                                                <option value="WANAPARTHY">WANAPARTHY</option>
                                                <option value="WANGJING">WANGJING</option>
                                                <option value="WANI">WANI</option>
                                                <option value="WARANANAGAR">WARANANAGAR</option>
                                                <option value="WARANGAL">WARANGAL</option>
                                                <option value="WARDHA">WARDHA</option>
                                                <option value="WARORA">WARORA</option>
                                                <option value="WARSHALIGANJ">WARSHALIGANJ</option>
                                                <option value="WARUD">WARUD</option>
                                                <option value="WARWATBAKAL">WARWATBAKAL</option>
                                                <option value="WASHI">WASHI</option>
                                                <option value="WASHIM">WASHIM</option>
                                                <option value="WAYANAD">WAYANAD</option>
                                                <option value="WOKHA">WOKHA</option>
                                                <option value="WONPARTHY">WONPARTHY</option>
                                                <option value="WYRA">WYRA</option>
                                                <option value="Y N KOSKOTE">Y N KOSKOTE</option>
                                                <option value="YADAGIRIGUTTA">YADAGIRIGUTTA</option>
                                                <option value="YADGIR">YADGIR</option>
                                                <option value="YADIKI">YADIKI</option>
                                                <option value="YALLUR">YALLUR</option>
                                                <option value="YAMUNANAGAR">YAMUNANAGAR</option>
                                                <option value="YANAM">YANAM</option>
                                                <option value="YAVATMAL">YAVATMAL</option>
                                                <option value="YELANDUR">YELANDUR</option>
                                                <option value="YELBRUGA">YELBRUGA</option>
                                                <option value="YELLANDU">YELLANDU</option>
                                                <option value="YELLMANCHILI">YELLMANCHILI</option>
                                                <option value="YEODA">YEODA</option>
                                                <option value="YEOLA">YEOLA</option>
                                                <option value="YEOTMAL">YEOTMAL</option>
                                                <option value="YERCAUD">YERCAUD</option>
                                                <option value="ZAHEERABAD">ZAHEERABAD</option>
                                                <option value="ZALOD">ZALOD</option>
                                                <option value="ZILIYA TA CHANSAMA">ZILIYA TA CHANSAMA</option>
                                                <option value="ZUARINAGAR">ZUARINAGAR</option>
                                                <option value="ZUNHEBOTO">ZUNHEBOTO</option>

                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pin Code :</td>
                                        <td>
                                            <input name="pin_code" type="number"
                                                   maxlength="6" id="pin_code"/>
                                        </td>
                                        <td>
                                                    <span id="siteDataHolder_reqChildPin"
                                                          style="color:Red;visibility:hidden;">*</span>
                                            <span id="siteDataHolder_regChildPin"
                                                  style="color:Red;visibility:hidden;">*</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Address :</td>
                                        <td>
                                                    <textarea name="address" rows="4" cols="15"
                                                              id="address"></textarea>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Phone :</td>
                                        <td>
                                            <input name="phone" type="text"
                                                   maxlength="11" id="phone"/>
                                        </td>
                                        <td>
                                                    <span id="siteDataHolder_reqPhone"
                                                          style="color:Red;visibility:hidden;">*</span>
                                            <span id="siteDataHolder_regPhone"
                                                  style="color:Red;visibility:hidden;">*</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email ID :</td>
                                        <td>
                                            <input name="email" type="text"
                                                   id="email"/>
                                        </td>
                                        <td>
                                                    <span id="siteDataHolder_reqEmail"
                                                          style="color:Red;visibility:hidden;">*</span>
                                            <span id="siteDataHolder_regEmail"
                                                  style="color:Red;visibility:hidden;">*</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Occupation :</td>
                                        <td colspan="2">
                                            <select name="occupation"
                                                    id="siteDataHolder_drpOccupation">
                                                <option value="ACCOUNTING">ACCOUNTING</option>
                                                <option value="BHIMA">BHIMA</option>
                                                <option value="BISUNESS">BISUNESS</option>
                                                <option value="BOSS">BOSS</option>
                                                <option value="BUISNES">BUISNES</option>
                                                <option value="BUISNESS">BUISNESS</option>
                                                <option value="BUISNESSMAN">BUISNESSMAN</option>
                                                <option value="BUSINESS">BUSINESS</option>
                                                <option value="BUSNESS">BUSNESS</option>
                                                <option value="BUSS">BUSS</option>
                                                <option value="BUSSINESS">BUSSINESS</option>
                                                <option value="BUSSNISS">BUSSNISS</option>
                                                <option value="CABEL OPERATOR">CABEL OPERATOR</option>
                                                <option value="COLLAGE">COLLAGE</option>
                                                <option value="COLLEGE">COLLEGE</option>
                                                <option value="COMPUTER ENGINEER">COMPUTER ENGINEER</option>
                                                <option value="COMPUTER TEACHER">COMPUTER TEACHER</option>
                                                <option value="COMPUTER-NETWORKING">COMPUTER-NETWORKING</option>
                                                <option value="COMPUTER-SOFTWARE">COMPUTER-SOFTWARE</option>
                                                <option value="CYBER">CYBER</option>
                                                <option value="D">D</option>
                                                <option value="DSFTVYT">DSFTVYT</option>
                                                <option value="ENGINEER">ENGINEER</option>
                                                <option value="FINANCE">FINANCE</option>
                                                <option value="FISHING">FISHING</option>
                                                <option value="GAMBLING">GAMBLING</option>
                                                <option value="GARMENT">GARMENT</option>
                                                <option value="H.S.C">H.S.C</option>
                                                <option value="HARDWARE ENGG">HARDWARE ENGG</option>
                                                <option value="HJGHJG">HJGHJG</option>
                                                <option value="HOUSE WIFE">HOUSE WIFE</option>
                                                <option value="LABOUR">LABOUR</option>
                                                <option value="LPYI">LPYI</option>
                                                <option value="MANAGER">MANAGER</option>
                                                <option value="NONE">NONE</option>
                                                <option value="OTHER">OTHER</option>
                                                <option value="RAMESH_PANDYA@YAH.">
                                                    <template class="__cf_email__"
                                                              data-cfemail="bae8fbf7ffe9f2e5eafbf4fee3fbfae3fbf294">
                                                        [email&#160;protected]
                                                    </template>
                                                </option>
                                                <option value="SALES EXECUTIVE">SALES EXECUTIVE</option>
                                                <option value="SALES/MARKETING">SALES/MARKETING</option>
                                                <option value="SCHOOL">SCHOOL</option>
                                                <option value="SDF">SDF</option>
                                                <option value="SDFADS">SDFADS</option>
                                                <option value="SERVICE">SERVICE</option>
                                                <option value="SHOP">SHOP</option>
                                                <option value="SHOP OWNER">SHOP OWNER</option>
                                                <option value="STU">STU</option>
                                                <option value="STUDENT">STUDENT</option>
                                                <option value="STUDY">STUDY</option>
                                                <option value="STUDYING">STUDYING</option>
                                                <option value="VCTGFJHG">VCTGFJHG</option>
                                                <option value="ZXHDSYE">ZXHDSYE</option>

                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Member Type :</td>
                                        <td colspan="2">
                                            <select name="role"
                                                    id="role">
                                                @foreach($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Password :</td>
                                        <td>
                                            <input name="password" type="password"
                                                   id="password"/>
                                        </td>
                                        <td>
                                                    <span id="siteDataHolder_reqPass"
                                                          style="color:Red;visibility:hidden;">*</span>
                                            <span id="siteDataHolder_regPass"
                                                  style="color:Red;visibility:hidden;">*</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Confirm Password :</td>
                                        <td>
                                            <input name="confirm_passoword" type="password"
                                                   id="confirm_passoword"/>
                                        </td>
                                        <td>
                                                    <span id="siteDataHolder_reqConPass"
                                                          style="color:Red;visibility:hidden;">*</span>
                                            <span id="siteDataHolder_regConPass"
                                                  style="color:Red;visibility:hidden;">*</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            <input id="siteDataHolder_chkBoxAgree" type="checkbox"
                                                   name="ctl00$siteDataHolder$chkBoxAgree" style="margin-right: 2px" required/>
                                            Yes I agree to the &nbsp;
                                            <a id="siteDataHolder_hypLinkAgree" href="Terms.html"
                                               target="_blank">Terms and Conditions</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                                    <span id="siteDataHolder_cudValidTerms"
                                                          style="color:Red;visibility:hidden;">Please Agree to the Terms and Condition</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="0">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <input type="submit"
                                                               style="background: #0090ff; outline: none; border: none; padding: 5px 10px; color: white; font-size: 15px"
                                                               name="ctl00$siteDataHolder$btnChangePass"
                                                               value="Submit"
                                                               id="siteDataHolder_btnChangePass"/>
                                                    </td>
                                                    <td>
                                                        <input type="reset"
                                                               style="background: #0090ff; outline: none; border: none; padding: 5px 10px; color: white; font-size: 15px"
                                                               name="ctl00$siteDataHolder$btnReset"
                                                               value="Reset" id="siteDataHolder_btnReset"/>
                                                    </td>
                                                </tr>
                                            </table>
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
