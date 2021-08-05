@extends('layouts.default')
@section('content')
<div class="col-sm-8 login-form-first register-form-first">
<h3 class="text-center">Register Here</h3>
@if(Session::get('register_status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('register_status')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
@endif

<div class="tab">
  <button class="tablinks active" onclick="openCity(event, 'Student')">  Registro</button>
<!--   <button class="tablinks" onclick="openCity(event, 'Tutor')"> Tutor Register</button>
 --></div>

<div id="Student" class="tabcontent" style="display:block">
  <h3 class="text-center"></h3>
  <form action="<?php echo url('registerUser')?>" method="post" >
<!--   <input type="hidden" class="form-control" value = "<//?php echo Config::get('constants.STUDENT_ROLE'); ?>" name="role">-->
   <input type="hidden" class="form-control" value = "<?php echo Config::get('constants.ROLE_ACTIVE'); ?>" name="status">

@csrf
<div class="row">
     <div class="col-md-6">
        <div class="form-group">
        <label>Select Role</label>
        <select id="role" name="role" class="form-control">
            <option value="<?php echo Config::get('constants.STUDENT_ROLE'); ?>">Student</option>
            <option value="<?php echo Config::get('constants.TUTOR_ROLE'); ?>">Tutor</option>
        </select>
        </div>
        @error('course')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>RUT
            <input type="text" name="rut" value="{{ old('rut') }}" class="form-control" placeholder="Enter your RUT" >
            </div>
            @error('rut')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
</div>
<div class="row">
<div class="col-md-6">
   <div class="form-group">
<label>Password
<input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Enter your Password" >
</div>
@error('password')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="col-md-6">
<div class="form-group">
    <label>Confirm Password
    <input type="password" name="confirmpassword" value="{{ old('confirmpassword') }}" class="form-control" placeholder="Confirm your Password" >
    </div>
    @error('confirmpassword')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
</div>
    


<div class="row">
    <div class="col-md-6">
        <div class="form-group">
        <label>Name
        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter your name" >
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
     <div class="col-md-6">
        <div class="form-group">
        <label>Pseudonym
        <input type="text" name="pseudonym" value="{{ old('pseudonym') }}" class="form-control" placeholder="Enter your pseudonym" >
        </div>
        @error('pseudonym')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
    </div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
        <label>Surnames</label>
        <input type="text" name="surname" value="{{ old('surname') }}" class="form-control" placeholder="Enter your last name" >
        </div>
        @error('surname')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
        <label>Age</label>
        <input type="text" name="age" value="{{ old('age') }}" class="form-control" placeholder="Enter your age" >
        </div>
        @error('age')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Commune of your school</label>
            <select name="commune" class="form-control">
               @foreach ($communes as $commune)
                <option value={{ $commune->id }}>{{ $commune->name}}</option>
            @endforeach
            </select>
            @error('commune')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>College</label>
            <select name="college" class="form-control">
            @foreach ($colleges as $college)
                <option value={{ $college->id }}>{{ $college->name}}</option>
            @endforeach
            </select>
            </div>
            @error('college')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="form-group">
        <label>Select course</label>
        <select name="course" class="form-control">
            @foreach ($courses as $course)
                <option value={{ $course->id }}>{{ $course->name}}{{ $course->letra}}</option>
            @endforeach
        </select>
        </div>
        @error('course')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your email" >
            </div>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
</div>

<div class="submit-button">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>

<div id="Tutor" class="tabcontent">
 <h3 class="text-left"> General</h3>
   <form action="<?php echo url('registerTutor')?>" method="post" >
  <input type="hidden" class="form-control" value = "<?php echo Config::get('constants.TUTOR_ROLE'); ?>" name="role">
  <input type="hidden" class="form-control" value = "<?php echo Config::get('constants.ROLE_ACTIVE'); ?>" name="status">
<div class="form-group">
<label>RUT (With points and dash)
<input type="text" name="rut" value="{{ old('rut') }}" class="form-control" placeholder="Enter your RUT" >
</div>
@error('rut')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
@csrf

<div class="row">
<div class="col-md-6">
        <div class="form-group">
            <label>Choose an identification method:</label>
            <select name="identification" class="form-control">
                <optgroup label="Habilitado">
					<option value="email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email-based identification</font></font></option>
					<option value="manual" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Manual accounts</font></font></option>
					<option value="nologin"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No session</font></font></option>
					</optgroup>
            </select>
            @error('identification')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
    </div>
	<div class="col-md-6">
		<div class="form-group">
		<label>New Password
		<input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Enter your Password" >
		</div>
		@error('password')
		<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>
</div>
    
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
        <label>Name
        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter your name" >
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
	<div class="col-md-6">
        <div class="form-group">
        <label>Surnames</label>
        <input type="text" name="surname" value="{{ old('surname') }}" class="form-control" placeholder="Enter your last name" >
        </div>
        @error('surname')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    </div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Mail address</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your email" >
            </div>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
	<div class="col-md-6">
        <div class="form-group">
        <label>Show mail</label>
        <select class="form-control" name="maildisplay" id="id_maildisplay">
            <option value="0">Hide my email address from everyone</option>
            <option value="1">Show everyone my email address</option>
            <option value="2" selected="">Show my email address only to my classmates</option>
        </select>
        </div>
        @error('maildisplay')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
        <label>MoodleNet profile
        <input type="text" name="moodlenet" value="{{ old('moodlenet') }}" class="form-control" placeholder="Enter your moodlenet profile" >
        </div>
        @error('moodlenet')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
    <div class="col-md-6">
        <div class="form-group">
        <label>Town</label>
        <input type="text" name="town" value="{{ old('town') }}" class="form-control" placeholder="Enter your town" >
        </div>
        @error('town')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
        <label>Select your country
        <select class="custom-select
                       
                       " name="country" id="id_country">
            <option value="">Select your country ...</option>
            <option value="AF">Afghanistan</option>
            <option value="AL">Albania</option>
            <option value="DE">Germany</option>
            <option value="AD">Andorra</option>
            <option value="AO">Angola</option>
            <option value="AI">Eel</option>
            <option value="AQ">Antarctica</option>
            <option value="AG">">Old and bearded</option>
            <option value="SA">Saudi Arabia</option>
            <option value="DZ">Algeria</option>
            <option value="AR">Argentina</option>
            <option value="AM">Armenia</option>
            <option value="AW">Aruba</option>
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="AZ">Azerbaiyán</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahrein</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BE">Bélgica</option>
            <option value="BZ">Belice</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BY">Bielorrusia</option>
            <option value="BO">Bolivia (Estado Plurinacional de)</option>
            <option value="BQ">Bonaire, San Eustaquio y Saba</option>
            <option value="BA">Bosnia y Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BR">Brasil</option>
            <option value="BN">Brunei Darussalam</option>
            <option value="BG">Bulgaria</option>
            <option value="BF">Burkina Faso</option>
            <option value="BI">Burundi</option>
            <option value="BT">Bután</option>
            <option value="CV">Cabo Verde</option>
            <option value="KH">Camboya</option>
            <option value="CM">Camerún</option>
            <option value="CA">Canadá</option>
            <option value="TD">Chad</option>
            <option value="CL">Chile</option>
            <option value="CN">China</option>
            <option value="CY">Chipre</option>
            <option value="CO">Colombia</option>
            <option value="KM">Comoras</option>
            <option value="CG">Congo</option>
            <option value="CD">Congo (República Democrática del)</option>
            <option value="KR">Corea (República de)</option>
            <option value="KP">Corea (República Popular Democrática de)</option>
            <option value="CI">Costa de Marfil</option>
            <option value="CR">Costa Rica</option>
            <option value="HR">Croacia</option>
            <option value="CU">Cuba</option>
            <option value="CW">Curazao</option>
            <option value="DK">Dinamarca</option>
            <option value="DJ">Djibouti</option>
            <option value="DM">Dominica</option>
            <option value="EC">Ecuador</option>
            <option value="EG">Egipto</option>
            <option value="SV">El Salvador</option>
            <option value="VA">El Vaticano</option>
            <option value="AE">Emiratos Árabes Unidos</option>
            <option value="ER">Eritrea</option>
            <option value="SK">Eslovaquia</option>
            <option value="SI">Eslovenia</option>
            <option value="ES">España</option>
            <option value="US">Estados Unidos</option>
            <option value="EE">Estonia</option>
            <option value="ET">Etiopía</option>
            <option value="RU">Federación Rusa</option>
            <option value="FJ">Fiji</option>
            <option value="PH">Filipinas</option>
            <option value="FI">Finlandia</option>
            <option value="FR">Francia</option>
            <option value="GA">Gabón</option>
            <option value="GM">Gambia</option>
            <option value="GE">Georgia</option>
            <option value="GS">Georgia del Sur y Las Islas Sandwich del Sur</option>
            <option value="GH">Ghana</option>
            <option value="GI">Gibraltar</option>
            <option value="GD">Granada</option>
            <option value="GR">Grecia</option>
            <option value="GL">Groenlandia</option>
            <option value="GP">Guadalupe</option>
            <option value="GU">Guam</option>
            <option value="GT">Guatemala</option>
            <option value="GG">Guernsey</option>
            <option value="GN">Guinea</option>
            <option value="GQ">Guinea Ecuatorial</option>
            <option value="GW">Guinea-Bissau</option>
            <option value="GY">Guyana</option>
            <option value="GF">Guyana Francesa</option>
            <option value="HT">Haití</option>
            <option value="NL">Holanda</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungría</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IQ">Irak</option>
            <option value="IR">Irán (República Islámica de)</option>
            <option value="IE">Irlanda</option>
            <option value="IM">Isla de Man</option>
            <option value="HM">Isla Heard e Islas  McDonald</option>
            <option value="IS">Islandia</option>
            <option value="AX">Islas Åland</option>
            <option value="BV">Islas Bouvet</option>
            <option value="KY">Islas Caimán</option>
            <option value="CC">Islas Cocos</option>
            <option value="CK">Islas Cook</option>
            <option value="CX">Islas de Navidad</option>
            <option value="FO">Islas Faroe</option>
            <option value="FK">Islas Malvinas</option>
            <option value="MP">Islas Marianas del Norte</option>
            <option value="MH">Islas Marshall</option>
            <option value="NF">Islas Norfolk</option>
            <option value="SB">Islas Salomón</option>
            <option value="SJ">Islas Svalbard y Jan Mayen</option>
            <option value="TC">Islas Turcas y Caicos</option>
            <option value="VI">Islas Vírgenes (Americanas)</option>
            <option value="VG">Islas Vírgenes (Británícas)</option>
            <option value="WF">Islas Wallis y Futuna</option>
            <option value="IL">Israel</option>
            <option value="IT">Italia</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japón</option>
            <option value="JE">Jersey</option>
            <option value="JO">Jordania</option>
            <option value="KZ">Kazajstán</option>
            <option value="KE">Kenia</option>
            <option value="KG">Kirguistán</option>
            <option value="KI">Kiribati</option>
            <option value="KW">Kuwait</option>
            <option value="LA">Laos</option>
            <option value="LV">Latvia</option>
            <option value="LS">Lesotho</option>
            <option value="LB">Líbano</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libia</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lituania</option>
            <option value="LU">Luxemburgo</option>
            <option value="MO">Macao</option>
            <option value="MK">Macedonia del Norte</option>
            <option value="MG">Madagascar</option>
            <option value="MY">Malasia</option>
            <option value="MW">Malawi</option>
            <option value="MV">Maldivas</option>
            <option value="ML">Mali</option>
            <option value="MT">Malta</option>
            <option value="MA">Marruecos</option>
            <option value="MQ">Martinica</option>
            <option value="MU">Mauricio</option>
            <option value="MR">Mauritania</option>
            <option value="YT">Mayotte</option>
            <option value="MX">México</option>
            <option value="FM">Micronesia ( Estados Federados de)</option>
            <option value="MD">Moldovia ( República de)</option>
            <option value="MC">Mónaco</option>
            <option value="MN">Mongolia</option>
            <option value="ME">Montenegro</option>
            <option value="MS">Montserrat</option>
            <option value="MZ">Mozambique</option>
            <option value="MM">Myanmar</option>
            <option value="NA">Namibia</option>
            <option value="NR">Naurú</option>
            <option value="NP">Nepal</option>
            <option value="NI">Nicaragua</option>
            <option value="NE">Níger</option>
            <option value="NG">Nigeria</option>
            <option value="NU">Niue</option>
            <option value="NO">Noruega</option>
            <option value="NC">Nueva Caledonia</option>
            <option value="NZ">Nueva Zelandia</option>
            <option value="OM">Omán</option>
            <option value="PK">Pakistán</option>
            <option value="PW">Palau</option>
            <option value="PS">Palestina, Estado de</option>
            <option value="PA">Panamá</option>
            <option value="PG">Papúa Nueva Guinea</option>
            <option value="PY">Paraguay</option>
            <option value="PE">Perú</option>
            <option value="PN">Pitcairn</option>
            <option value="PF">Polinesia Francesa</option>
            <option value="PL">Polonia</option>
            <option value="PT">Portugal</option>
            <option value="PR">Puerto Rico</option>
            <option value="QA">Qatar</option>
            <option value="GB">Reino Unido</option>
            <option value="CF">República Centroafricana</option>
            <option value="CZ">República Checa</option>
            <option value="DO">República Dominicana</option>
            <option value="RE">Reunión</option>
            <option value="RW">Ruanda</option>
            <option value="RO">Rumania</option>
            <option value="EH">Sahara Occidental</option>
            <option value="BL">Saint Barthélemy</option>
            <option value="WS">Samoa</option>
            <option value="AS">Samoa Americana</option>
            <option value="KN">San Cristóbal y Nevis</option>
            <option value="SM">San Marino</option>
            <option value="SX">San Martín (Parte Holandesa)</option>
            <option value="MF">San Martín (zona Francesa)</option>
            <option value="PM">San Pedro y Miquelon</option>
            <option value="VC">San Vincente y Las Granadinas</option>
            <option value="SH">Santa Elena, Ascensión y Tristán de Acuña</option>
            <option value="LC">Santa Lucía</option>
            <option value="ST">Santo Tomé y Príncipe</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leona</option>
            <option value="SG">Singapur</option>
            <option value="SY">Siria</option>
            <option value="SO">Somalía</option>
            <option value="LK">Sri Lanka</option>
            <option value="ZA">Sudáfrica</option>
            <option value="SD">Sudán</option>
            <option value="SS">Sudán del Sur</option>
            <option value="SE">Suecia</option>
            <option value="CH">Suiza</option>
            <option value="SR">Surinam</option>
            <option value="SZ">Swazilandia</option>
            <option value="TH">Tailandia</option>
            <option value="TW">Taiwán</option>
            <option value="TZ">Tanzania, República Unida de</option>
            <option value="TJ">Tayikistán</option>
            <option value="IO">Territorio Británico del Océano Índico</option>
            <option value="TF">Territorios Franceses del Sur</option>
            <option value="TL">Timor-Leste</option>
            <option value="TG">Togo</option>
            <option value="TK">Tokelau</option>
            <option value="TO">Tonga</option>
            <option value="TT">Trinidad y Tobago</option>
            <option value="TN">Túnez</option>
            <option value="TM">Turkmenistán</option>
            <option value="TR">Turquía</option>
            <option value="TV">Tuvalu</option>
            <option value="UA">Ucrania</option>
            <option value="UG">Uganda</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VE">Venezuela (Bolivarian Republic of)</option>
            <option value="VN">Vietnam</option>
            <option value="YE">Yemen</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbawe</option>
        </select>
        </div>
        @error('country')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
    <div class="col-md-6">
        <div class="form-group">
        <label>Time zone</label>
        <select class="custom-select" name="timezone" id="id_timezone">
            <option value="Africa/Abidjan"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Abidjan</font></font></option>
            <option value="Africa/Accra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Accra</font></font></option>
            <option value="Africa/Addis_Ababa"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Addis_Abeba</font></font></option>
            <option value="Africa/Algiers"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Algeria</font></font></option>
            <option value="Africa/Asmara"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Asmara</font></font></option>
            <option value="Africa/Bamako"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Bamako</font></font></option>
            <option value="Africa/Bangui"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Bangui</font></font></option>
            <option value="Africa/Banjul"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Banjul</font></font></option>
            <option value="Africa/Bissau"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Bissau</font></font></option>
            <option value="Africa/Blantyre"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Blantyre</font></font></option>
            <option value="Africa/Brazzaville"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Brazzaville</font></font></option>
            <option value="Africa/Bujumbura"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Bujumbura</font></font></option>
            <option value="Africa/Cairo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Cairo</font></font></option>
            <option value="Africa/Casablanca"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Casablanca</font></font></option>
            <option value="Africa/Ceuta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Ceuta</font></font></option>
            <option value="Africa/Conakry"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Conakry</font></font></option>
            <option value="Africa/Dakar"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Dakar</font></font></option>
            <option value="Africa/Dar_es_Salaam"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Dar_es_Salaam</font></font></option>
            <option value="Africa/Djibouti"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Djibouti</font></font></option>
            <option value="Africa/Douala"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Douala</font></font></option>
            <option value="Africa/El_Aaiun"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / El_Aaiún</font></font></option>
            <option value="Africa/Freetown"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Freetown</font></font></option>
            <option value="Africa/Gaborone"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Gaborone</font></font></option>
            <option value="Africa/Harare"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Harare</font></font></option>
            <option value="Africa/Johannesburg"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Johannesburg</font></font></option>
            <option value="Africa/Juba"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Juba</font></font></option>
            <option value="Africa/Kampala"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Kampala</font></font></option>
            <option value="Africa/Khartoum"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Khartoum</font></font></option>
            <option value="Africa/Kigali"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Kigali</font></font></option>
            <option value="Africa/Kinshasa"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Kinshasa</font></font></option>
            <option value="Africa/Lagos"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Lagos</font></font></option>
            <option value="Africa/Libreville"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Libreville</font></font></option>
            <option value="Africa/Lome"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Lome</font></font></option>
            <option value="Africa/Luanda"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Luanda</font></font></option>
            <option value="Africa/Lubumbashi"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Lubumbashi</font></font></option>
            <option value="Africa/Lusaka"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Lusaka</font></font></option>
            <option value="Africa/Malabo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Malabo</font></font></option>
            <option value="Africa/Maputo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Maputo</font></font></option>
            <option value="Africa/Maseru"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Maseru</font></font></option>
            <option value="Africa/Mbabane"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Mbabane</font></font></option>
            <option value="Africa/Mogadishu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Mogadishu</font></font></option>
            <option value="Africa/Monrovia"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Monrovia</font></font></option>
            <option value="Africa/Nairobi"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Nairobi</font></font></option>
            <option value="Africa/Ndjamena"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Ndjamena</font></font></option>
            <option value="Africa/Niamey"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Niamey</font></font></option>
            <option value="Africa/Nouakchott"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Nouakchott</font></font></option>
            <option value="Africa/Ouagadougou"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Ouagadougou</font></font></option>
            <option value="Africa/Porto-Novo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Porto-Novo</font></font></option>
            <option value="Africa/Sao_Tome"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Sao_Tome</font></font></option>
            <option value="Africa/Tripoli"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Tripoli</font></font></option>
            <option value="Africa/Tunis"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Africa / Tunisia</font></font></option>
            <option value="Africa/Windhoek">África/Windhoek</option>
            <option value="America/Adak">América/Adak</option>
            <option value="America/Anchorage">América/Anchorage</option>
            <option value="America/Anguilla">América/Anguilla</option>
            <option value="America/Antigua">América/Antigua</option>
            <option value="America/Araguaina">América/Araguaina</option>
            <option value="America/Argentina/Buenos_Aires">América/Argentina/Buenos_Aires</option>
            <option value="America/Argentina/Catamarca">América/Argentina/Catamarca</option>
            <option value="America/Argentina/Cordoba">América/Argentina/Córdoba</option>
            <option value="America/Argentina/Jujuy">América/Argentina/Jujuy</option>
            <option value="America/Argentina/La_Rioja">América/Argentina/La_Rioja</option>
            <option value="America/Argentina/Mendoza">América/Argentina/Mendoza</option>
            <option value="America/Argentina/Rio_Gallegos">América/Argentina/Río_Gallegos</option>
            <option value="America/Argentina/Salta">America/Argentina/Salta</option>
            <option value="America/Argentina/San_Juan">América/Argentina/San_Juan</option>
            <option value="America/Argentina/San_Luis">America/Argentina/San_Luis</option>
            <option value="America/Argentina/Tucuman">América/Argentina/Tucuman</option>
            <option value="America/Argentina/Ushuaia">América/Argentina/Ushuaia</option>
            <option value="America/Aruba">América/Aruba</option>
            <option value="America/Asuncion">América/Asunción</option>
            <option value="America/Atikokan">America/Atikokan</option>
            <option value="America/Bahia">América/Bahía</option>
            <option value="America/Bahia_Banderas">America/Bahia_Banderas</option>
            <option value="America/Barbados">América/Barbados</option>
            <option value="America/Belem">América/Belem</option>
            <option value="America/Belize">América/Belize</option>
            <option value="America/Blanc-Sablon">America/Blanc-Sablon</option>
            <option value="America/Boa_Vista">América/Boa_Vista</option>
            <option value="America/Bogota">América/Bogotá</option>
            <option value="America/Boise">América/Boise</option>
            <option value="America/Cayman">América/Caimán</option>
            <option value="America/Cambridge_Bay">América/Cambridge_Bay</option>
            <option value="America/Campo_Grande">América/Campo_Grande</option>
            <option value="America/Cancun">América/Cancún</option>
            <option value="America/Caracas">América/Caracas</option>
            <option value="America/Cayenne">América/Cayena</option>
            <option value="America/Chicago">América/Chicago</option>
            <option value="America/Chihuahua">América/Chihuahua</option>
            <option value="America/Costa_Rica">América/Costa_Rica</option>
            <option value="America/Creston">America/Creston</option>
            <option value="America/Cuiaba">América/Cuiaba</option>
            <option value="America/Curacao">América/Curaçao</option>
            <option value="America/Danmarkshavn">América/Danmarkshavn</option>
            <option value="America/Dawson">América/Dawson</option>
            <option value="America/Dawson_Creek">América/Dawson_Creek</option>
            <option value="America/Denver">América/Denver</option>
            <option value="America/Detroit">América/Detroit</option>
            <option value="America/Dominica">América/Dominica</option>
            <option value="America/Edmonton">América/Edmonton</option>
            <option value="America/Eirunepe">América/Eirunepe</option>
            <option value="America/El_Salvador">América/El_Salvador</option>
            <option value="America/Fort_Nelson">America/Fort_Nelson</option>
            <option value="America/Fortaleza">América/Fortaleza</option>
            <option value="America/Glace_Bay">América/Glace_Bay</option>
            <option value="America/Goose_Bay">América/Goose_Bay</option>
            <option value="America/Grenada">América/Granada</option>
            <option value="America/Grand_Turk">América/Grand_Turk</option>
            <option value="America/Guadeloupe">América/Guadeloupe</option>
            <option value="America/Guatemala">América/Guatemala</option>
            <option value="America/Guayaquil">América/Guayaquil</option>
            <option value="America/Guyana">América/Guyana</option>
            <option value="America/Halifax">América/Halifax</option>
            <option value="America/Hermosillo">América/Hermosillo</option>
            <option value="America/Indiana/Indianapolis">America/Indiana/Indianapolis</option>
            <option value="America/Indiana/Knox">América/Indiana/Knox</option>
            <option value="America/Indiana/Marengo">América/Indiana/Marengo</option>
            <option value="America/Indiana/Petersburg">America/Indiana/Petersburg</option>
            <option value="America/Indiana/Tell_City">America/Indiana/Tell_City</option>
            <option value="America/Indiana/Vevay">América/Indiana/Vevay</option>
            <option value="America/Indiana/Vincennes">America/Indiana/Vincennes</option>
            <option value="America/Indiana/Winamac">America/Indiana/Winamac</option>
            <option value="America/Inuvik">América/Inuvik</option>
            <option value="America/Iqaluit">América/Iqaluit</option>
            <option value="America/Jamaica">América/Jamaica</option>
            <option value="America/Juneau">América/Juneau</option>
            <option value="America/Kentucky/Louisville">America/Kentucky/Louisville</option>
            <option value="America/Kentucky/Monticello">América/Kentucky/Monticello</option>
            <option value="America/Kralendijk">America/Kralendijk</option>
            <option value="America/Havana">América/La Habana</option>
            <option value="America/La_Paz">América/La_Paz</option>
            <option value="America/Lima">América/Lima</option>
            <option value="America/Los_Angeles">América/Los_Ángeles</option>
            <option value="America/Lower_Princes">America/Lower_Princes</option>
            <option value="America/Maceio">América/Maceio</option>
            <option value="America/Managua">América/Managua</option>
            <option value="America/Manaus">América/Manaus</option>
            <option value="America/Marigot">America/Marigot</option>
            <option value="America/Martinique">América/Martinica</option>
            <option value="America/Matamoros">America/Matamoros</option>
            <option value="America/Mazatlan">América/Mazatlán</option>
            <option value="America/Menominee">América/Menominée</option>
            <option value="America/Merida">América/Mérida</option>
            <option value="America/Metlakatla">America/Metlakatla</option>
            <option value="America/Mexico_City">América/México_DF</option>
            <option value="America/Miquelon">América/Miquelon</option>
            <option value="America/Moncton">America/Moncton</option>
            <option value="America/Monterrey">América/Monterrey</option>
            <option value="America/Montevideo">América/Montevideo</option>
            <option value="America/Montserrat">América/Montserrat</option>
            <option value="America/Nassau">América/Nassau</option>
            <option value="America/Nipigon">América/Nipigon</option>
            <option value="America/Nome">América/Nome</option>
            <option value="America/Noronha">América/Noronha</option>
            <option value="America/North_Dakota/Beulah">America/North_Dakota/Beulah</option>
            <option value="America/North_Dakota/Center">América/North_Dakota/Center</option>
            <option value="America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option>
            <option value="America/New_York">América/Nueva_York</option>
            <option value="America/Nuuk">America/Nuuk</option>
            <option value="America/Ojinaga">America/Ojinaga</option>
            <option value="America/Panama">América/Panamá</option>
            <option value="America/Pangnirtung">América/Pangnirtung</option>
            <option value="America/Paramaribo">América/Paramaribo</option>
            <option value="America/Phoenix">América/Phoenix</option>
            <option value="America/Port_of_Spain">América/Port_of_Spain</option>
            <option value="America/Port-au-Prince">América/Port-au-Prince</option>
            <option value="America/Porto_Velho">América/Porto_Velho</option>
            <option value="America/Puerto_Rico">América/Puerto_Rico</option>
            <option value="America/Punta_Arenas">America/Punta_Arenas</option>
            <option value="America/Rainy_River">América/Rainy_River</option>
            <option value="America/Rankin_Inlet">América/Rankin_Inlet</option>
            <option value="America/Recife">América/Recife</option>
            <option value="America/Regina">América/Regina</option>
            <option value="America/Resolute">America/Resolute</option>
            <option value="America/Rio_Branco">América/Rio_Branco</option>
            <option value="America/Santarem">America/Santarem</option>
            <option value="America/Santiago">América/Santiago</option>
            <option value="America/Santo_Domingo">América/Santo_Domingo</option>
            <option value="America/Sao_Paulo">América/Sao_Paulo</option>
            <option value="America/Scoresbysund">América/Scoresbysund</option>
            <option value="America/Sitka">America/Sitka</option>
            <option value="America/St_Barthelemy">America/St_Barthelemy</option>
            <option value="America/St_Johns">América/St_Johns</option>
            <option value="America/St_Kitts">América/St_Kitts</option>
            <option value="America/St_Lucia">América/St_Lucia</option>
            <option value="America/St_Thomas">América/St_Thomas</option>
            <option value="America/St_Vincent">América/St_Vincent</option>
            <option value="America/Swift_Current">América/Swift_Current</option>
            <option value="America/Tegucigalpa">América/Tegucigalpa</option>
            <option value="America/Thule">América/Thule</option>
            <option value="America/Thunder_Bay">América/Thunder_Bay</option>
            <option value="America/Tijuana">América/Tijuana</option>
            <option value="America/Toronto">América/Toronto</option>
            <option value="America/Tortola">América/Tortola</option>
            <option value="America/Vancouver">América/Vancouver</option>
            <option value="America/Whitehorse">América/Whitehorse</option>
            <option value="America/Winnipeg">América/Winnipeg</option>
            <option value="America/Yakutat">América/Yakutat</option>
            <option value="America/Yellowknife">América/Yellowknife</option>
            <option value="Antarctica/Casey">Antarctica/Casey</option>
            <option value="Antarctica/Davis">Antarctica/Davis</option>
            <option value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option>
            <option value="Antarctica/Macquarie">Antarctica/Macquarie</option>
            <option value="Antarctica/Mawson">Antarctica/Mawson</option>
            <option value="Antarctica/McMurdo">Antarctica/McMurdo</option>
            <option value="Antarctica/Palmer">Antarctica/Palmer</option>
            <option value="Antarctica/Rothera">Antarctica/Rothera</option>
            <option value="Antarctica/Syowa">Antarctica/Syowa</option>
            <option value="Antarctica/Troll">Antarctica/Troll</option>
            <option value="Antarctica/Vostok">Antarctica/Vostok</option>
            <option value="Arctic/Longyearbyen">Arctic/Longyearbyen</option>
            <option value="Asia/Aden">Asia/Adén</option>
            <option value="Asia/Almaty">Asia/Almaty</option>
            <option value="Asia/Amman">Asia/Amman</option>
            <option value="Asia/Anadyr">Asia/Anadyr</option>
            <option value="Asia/Aqtau">Asia/Aqtau</option>
            <option value="Asia/Aqtobe">Asia/Aqtobe</option>
            <option value="Asia/Ashgabat">Asia/Ashgabat</option>
            <option value="Asia/Atyrau">Asia/Atyrau</option>
            <option value="Asia/Baghdad">Asia/Baghdad</option>
            <option value="Asia/Bahrain">Asia/Bahrain</option>
            <option value="Asia/Baku">Asia/Baku</option>
            <option value="Asia/Bangkok">Asia/Bangkok</option>
            <option value="Asia/Barnaul">Asia/Barnaul</option>
            <option value="Asia/Beirut">Asia/Beirut</option>
            <option value="Asia/Bishkek">Asia/Bishkek</option>
            <option value="Asia/Brunei">Asia/Brunei</option>
            <option value="Asia/Chita">Asia/Chita</option>
            <option value="Asia/Choibalsan">Asia/Choibalsan</option>
            <option value="Asia/Colombo">Asia/Colombo</option>
            <option value="Asia/Damascus">Asia/Damasco</option>
            <option value="Asia/Dhaka">Asia/Dhaka</option>
            <option value="Asia/Dili">Asia/Dili</option>
            <option value="Asia/Dubai">Asia/Dubai</option>
            <option value="Asia/Dushanbe">Asia/Dushanbe</option>
            <option value="Asia/Famagusta">Asia/Famagusta</option>
            <option value="Asia/Gaza">Asia/Gaza</option>
            <option value="Asia/Hebron">Asia/Hebron</option>
            <option value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option>
            <option value="Asia/Hong_Kong">Asia/Hong_Kong</option>
            <option value="Asia/Hovd">Asia/Hovd</option>
            <option value="Asia/Irkutsk">Asia/Irkutsk</option>
            <option value="Asia/Jakarta">Asia/Jakarta</option>
            <option value="Asia/Jayapura">Asia/Jayapura</option>
            <option value="Asia/Jerusalem">Asia/Jerusalén</option>
            <option value="Asia/Kabul">Asia/Kabul</option>
            <option value="Asia/Kamchatka">Asia/Kamchatka</option>
            <option value="Asia/Karachi">Asia/Karachi</option>
            <option value="Asia/Kathmandu">Asia/Kathmandu</option>
            <option value="Asia/Khandyga">Asia/Khandyga</option>
            <option value="Asia/Kolkata">Asia/Kolkata</option>
            <option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option>
            <option value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option>
            <option value="Asia/Kuching">Asia/Kuching</option>
            <option value="Asia/Kuwait">Asia/Kuwait</option>
            <option value="Asia/Macau">Asia/Macau</option>
            <option value="Asia/Magadan">Asia/Magadan</option>
            <option value="Asia/Makassar">Asia/Makassar</option>
            <option value="Asia/Manila">Asia/Manila</option>
            <option value="Asia/Muscat">Asia/Muscat</option>
            <option value="Asia/Nicosia">Asia/Nicosia</option>
            <option value="Asia/Novokuznetsk">Asia/Novokuznetsk</option>
            <option value="Asia/Novosibirsk">Asia/Novosibirsk</option>
            <option value="Asia/Omsk">Asia/Omsk</option>
            <option value="Asia/Oral">Asia/Oral</option>
            <option value="Asia/Phnom_Penh">Asia/Phnom_Penh</option>
            <option value="Asia/Pontianak">Asia/Pontianak</option>
            <option value="Asia/Pyongyang">Asia/Pyongyang</option>
            <option value="Asia/Qatar">Asia/Qatar</option>
            <option value="Asia/Qostanay">Asia/Qostanay</option>
            <option value="Asia/Qyzylorda">Asia/Qyzylorda</option>
            <option value="Asia/Riyadh">Asia/Riyadh</option>
            <option value="Asia/Sakhalin">Asia/Sakhalin</option>
            <option value="Asia/Samarkand">Asia/Samarkanda</option>
            <option value="Asia/Seoul">Asia/Seoul</option>
            <option value="Asia/Shanghai">Asia/Shanghai</option>
            <option value="Asia/Singapore">Asia/Singapur</option>
            <option value="Asia/Srednekolymsk">Asia/Srednekolymsk</option>
            <option value="Asia/Taipei">Asia/Taipei</option>
            <option value="Asia/Tashkent">Asia/Tashkent</option>
            <option value="Asia/Tbilisi">Asia/Tbilisi</option>
            <option value="Asia/Tehran">Asia/Tehran</option>
            <option value="Asia/Thimphu">Asia/Thimphu</option>
            <option value="Asia/Tokyo">Asia/Tokyo</option>
            <option value="Asia/Tomsk">Asia/Tomsk</option>
            <option value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option>
            <option value="Asia/Urumqi">Asia/Urumqi</option>
            <option value="Asia/Ust-Nera">Asia/Ust-Nera</option>
            <option value="Asia/Vientiane">Asia/Vientiane</option>
            <option value="Asia/Vladivostok">Asia/Vladivostok</option>
            <option value="Asia/Yakutsk">Asia/Yakutsk</option>
            <option value="Asia/Yangon">Asia/Yangon</option>
            <option value="Asia/Yekaterinburg">Asia/Yekaterinburg</option>
            <option value="Asia/Yerevan">Asia/Yerevan</option>
            <option value="Atlantic/Faroe">Atlantic/Faroe</option>
            <option value="Atlantic/Azores">Atlántico/Azores</option>
            <option value="Atlantic/Bermuda">Atlántico/Bermuda</option>
            <option value="Atlantic/Cape_Verde">Atlántico/Cabo_Verde</option>
            <option value="Atlantic/Canary">Atlántico/Canarias</option>
            <option value="Atlantic/Madeira">Atlántico/Madeira</option>
            <option value="Atlantic/Reykjavik">Atlántico/Reykjavik</option>
            <option value="Atlantic/South_Georgia">Atlántico/South_Georgia</option>
            <option value="Atlantic/St_Helena">Atlántico/St_Helena</option>
            <option value="Atlantic/Stanley">Atlántico/Stanley</option>
            <option value="Australia/Adelaide">Australia/Adelaida</option>
            <option value="Australia/Brisbane">Australia/Brisbane</option>
            <option value="Australia/Broken_Hill">Australia/Broken_Hill</option>
            <option value="Australia/Darwin">Australia/Darwin</option>
            <option value="Australia/Eucla">Australia/Eucla</option>
            <option value="Australia/Hobart">Australia/Hobart</option>
            <option value="Australia/Lindeman">Australia/Lindeman</option>
            <option value="Australia/Lord_Howe">Australia/Lord_Howe</option>
            <option value="Australia/Melbourne">Australia/Melbourne</option>
            <option value="Australia/Perth">Australia/Perth</option>
            <option value="Australia/Sydney">Australia/Sydney</option>
            <option value="Europe/Amsterdam">Europa/Amsterdam</option>
            <option value="Europe/Andorra">Europa/Andorra</option>
            <option value="Europe/Athens">Europa/Atenas</option>
            <option value="Europe/Belgrade">Europa/Belgrado</option>
            <option value="Europe/Berlin">Europa/Berlín</option>
            <option value="Europe/Brussels">Europa/Brussels</option>
            <option value="Europe/Bucharest">Europa/Bucarest</option>
            <option value="Europe/Budapest">Europa/Budapest</option>
            <option value="Europe/Chisinau">Europa/Chisinau</option>
            <option value="Europe/Copenhagen">Europa/Copenhagen</option>
            <option value="Europe/Dublin">Europa/Dublín</option>
            <option value="Europe/Istanbul">Europa/Estambul</option>
            <option value="Europe/Stockholm">Europa/Estocolmo</option>
            <option value="Europe/Gibraltar">Europa/Gibraltar</option>
            <option value="Europe/Helsinki">Europa/Helsinki</option>
            <option value="Europe/Kaliningrad">Europa/Kaliningrado</option>
            <option value="Europe/Kiev">Europa/Kiev</option>
            <option value="Europe/Lisbon">Europa/Lisboa</option>
            <option value="Europe/London">Europa/London</option>
            <option value="Europe/Luxembourg">Europa/Luxemburgo</option>
            <option value="Europe/Madrid">Europa/Madrid</option>
            <option value="Europe/Malta">Europa/Malta</option>
            <option value="Europe/Minsk">Europa/Minsk</option>
            <option value="Europe/Monaco">Europa/Mónaco</option>
            <option value="Europe/Moscow">Europa/Moscú</option>
            <option value="Europe/Oslo">Europa/Oslo</option>
            <option value="Europe/Paris">Europa/París</option>
            <option value="Europe/Prague">Europa/Praga</option>
            <option value="Europe/Riga">Europa/Riga</option>
            <option value="Europe/Rome">Europa/Roma</option>
            <option value="Europe/Samara">Europa/Samara</option>
            <option value="Europe/Simferopol">Europa/Simferopol</option>
            <option value="Europe/Sofia">Europa/Sofía</option>
            <option value="Europe/Tallinn">Europa/Tallinn</option>
            <option value="Europe/Tirane">Europa/Tirana</option>
            <option value="Europe/Uzhgorod">Europa/Uzhgorod</option>
            <option value="Europe/Vaduz">Europa/Vaduz</option>
            <option value="Europe/Warsaw">Europa/Varsovia</option>
            <option value="Europe/Vienna">Europa/Viena</option>
            <option value="Europe/Vilnius">Europa/Vilnius</option>
            <option value="Europe/Zaporozhye">Europa/Zaporozhye</option>
            <option value="Europe/Zurich">Europa/Zurich</option>
            <option value="Europe/Astrakhan">Europe/Astrakhan</option>
            <option value="Europe/Bratislava">Europe/Bratislava</option>
            <option value="Europe/Busingen">Europe/Busingen</option>
            <option value="Europe/Guernsey">Europe/Guernsey</option>
            <option value="Europe/Isle_of_Man">Europe/Isle_of_Man</option>
            <option value="Europe/Jersey">Europe/Jersey</option>
            <option value="Europe/Kirov">Europe/Kirov</option>
            <option value="Europe/Ljubljana">Europe/Ljubljana</option>
            <option value="Europe/Mariehamn">Europe/Mariehamn</option>
            <option value="Europe/Podgorica">Europe/Podgorica</option>
            <option value="Europe/San_Marino">Europe/San_Marino</option>
            <option value="Europe/Sarajevo">Europe/Sarajevo</option>
            <option value="Europe/Saratov">Europe/Saratov</option>
            <option value="Europe/Skopje">Europe/Skopje</option>
            <option value="Europe/Ulyanovsk">Europe/Ulyanovsk</option>
            <option value="Europe/Vatican">Europe/Vatican</option>
            <option value="Europe/Volgograd">Europe/Volgograd</option>
            <option value="Europe/Zagreb">Europe/Zagreb</option>
            <option value="Indian/Antananarivo">India/Antananarivo</option>
            <option value="Indian/Chagos">India/Chagos</option>
            <option value="Indian/Christmas">India/Christmas</option>
            <option value="Indian/Comoro">India/Comoro</option>
            <option value="Indian/Kerguelen">India/Kerguelen</option>
            <option value="Indian/Mahe">India/Mahe</option>
            <option value="Indian/Maldives">India/Maldivas</option>
            <option value="Indian/Mauritius">India/Mauritius</option>
            <option value="Indian/Mayotte">India/Mayotte</option>
            <option value="Indian/Reunion">India/Reunión</option>
            <option value="Indian/Cocos">Indian/Cocos</option>
            <option value="Pacific/Bougainville">Pacific/Bougainville</option>
            <option value="Pacific/Chuuk">Pacific/Chuuk</option>
            <option value="Pacific/Pohnpei">Pacific/Pohnpei</option>
            <option value="Pacific/Apia">Pacífico/Apia</option>
            <option value="Pacific/Auckland">Pacífico/Auckland</option>
            <option value="Pacific/Chatham">Pacífico/Chatham</option>
            <option value="Pacific/Easter">Pacífico/Easter</option>
            <option value="Pacific/Efate">Pacífico/Efate</option>
            <option value="Pacific/Enderbury">Pacífico/Enderbury</option>
            <option value="Pacific/Fakaofo">Pacífico/Fakaofo</option>
            <option value="Pacific/Fiji">Pacífico/Fidji</option>
            <option value="Pacific/Funafuti">Pacífico/Funafuti</option>
            <option value="Pacific/Galapagos">Pacífico/Galápagos</option>
            <option value="Pacific/Gambier">Pacífico/Gambier</option>
            <option value="Pacific/Guadalcanal">Pacífico/Guadalcanal</option>
            <option value="Pacific/Guam">Pacífico/Guam</option>
            <option value="Pacific/Honolulu">Pacífico/Honolulu</option>
            <option value="Pacific/Kiritimati">Pacífico/Kiritimati</option>
            <option value="Pacific/Kosrae">Pacífico/Kosrae</option>
            <option value="Pacific/Kwajalein">Pacífico/Kwajalein</option>
            <option value="Pacific/Majuro">Pacífico/Majuro</option>
            <option value="Pacific/Marquesas">Pacífico/Marquesas</option>
            <option value="Pacific/Midway">Pacífico/Midway</option>
            <option value="Pacific/Nauru">Pacífico/Nauru</option>
            <option value="Pacific/Niue">Pacífico/Niue</option>
            <option value="Pacific/Norfolk">Pacífico/Norfolk</option>
            <option value="Pacific/Noumea">Pacífico/Noumea</option>
            <option value="Pacific/Pago_Pago">Pacífico/Pago_Pago</option>
            <option value="Pacific/Palau">Pacífico/Palau</option>
            <option value="Pacific/Pitcairn">Pacífico/Pitcairn</option>
            <option value="Pacific/Port_Moresby">Pacífico/Port_Moresby</option>
            <option value="Pacific/Rarotonga">Pacífico/Rarotonga</option>
            <option value="Pacific/Saipan">Pacífico/Saipan</option>
            <option value="Pacific/Tahiti">Pacífico/Tahiti</option>
            <option value="Pacific/Tarawa">Pacífico/Tarawa</option>
            <option value="Pacific/Tongatapu">Pacífico/Tongatapu</option>
            <option value="Pacific/Wake">Pacífico/Wake</option>
            <option value="Pacific/Wallis">Pacífico/Wallis</option>
            <option value="UTC">UTC</option>
            <option value="99" selected="">Zona horaria del servidor (América/Santiago)</option>
        </select>
        </div>
        @error('timezone')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
        <label>Preferred language </label>
        <select class="form-control" name="lang" id="id_lang">
            <option value="en">English</option>
            <option value="es" selected="">Spanish - International (es)</option>
        </select>
        </div>
        @error('lang')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
    <div class="col-md-6">
        <div class="form-group">
        <label>Decsription</label>
			<textarea name = "description"></textarea>
        </div>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
 <h3 class="text-left"> Other feilds</h3>
 <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Commune</label>
            <select name="commune" class="form-control">
               @foreach ($communes as $commune)
                <option value={{ $commune->id }}>{{ $commune->name}}</option>
            @endforeach
            </select>
            @error('commune')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
    </div>
	<div class="col-md-6">
        <div class="form-group">
        <label>Age</label>
        <input type="text" name="age" value="{{ old('age') }}" class="form-control" placeholder="Enter your age" >
        </div>
        @error('age')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
 
</div>
<div class="row">
   <div class="col-md-6">
        <div class="form-group">
            <label>College</label>
            <select name="college" class="form-control">
            @foreach ($colleges as $college)
                <option value={{ $college->id }}>{{ $college->name}}</option>
            @endforeach
            </select>
            </div>
            @error('college')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="col-md-6">
        <div class="form-group">
        <label>Select course</label>
        <select name="course" class="form-control">
            @foreach ($courses as $course)
                <option value={{ $course->id }}>{{ $course->name}}{{ $course->letra}}</option>
            @endforeach
        </select>
        </div>
        @error('course')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>




<div class="row">
   
       <div class="col-md-6">
        <div class="form-group">
        <label>Pseudonym
        <input type="text" name="pseudonym" value="{{ old('pseudonym') }}" class="form-control" placeholder="Enter your pseudonym" >
        </div>
        @error('pseudonym')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
</div>
<div class="submit-button">
<button type="submit" class="btn btn-primary">Enviar</button>
</div>
</form>
</div>



</div>
@endsection
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>