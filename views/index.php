<?php
session_start(); // Asegúrate de que la sesión esté iniciada
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censo de Marinos Mercantes Venezolanos en el Exterior</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Censo de Marinos Mercantes Venezolanos Que Laboran en el Exterior</h1>
        <p class="text-center">Fecha de Inicio: 12 de marzo de 2024</p>
        <p class="text-center">Fecha de Fin: 30 de junio de 2024</p>
        <form action="../config/controller/controller.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombres y Apellidos</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="tipo_cedula" class="form-label">Tipo de Cédula</label>
                <select class="form-control" id="tipo_cedula" name="tipo_cedula" required>
                    <option value="" disabled selected>Seleccione</option>
                    <option value="V">V</option>
                    <option value="E">E</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo</label>
                <select class="form-select" id="sexo" name="sexo" required>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="cedula" class="form-label">Cédula de Identidad</label>
                <input type="number" class="form-control" id="cedula" name="cedula" required>
            </div>
            <div class="mb-3">
                <label for="pais" class="form-label">Selecciona tu país</label>
                <select class="form-select" id="pais_code" name="pais_code" required>
                    <option value="">Seleccione...</option>
                    <option value="1">Estados Unidos (+1)</option>
                    <option value="93">Afganistán (+93)</option>
                    <option value="355">Albania (+355)</option>
                    <option value="213">Argelia (+213)</option>
                    <option value="376">Andorra (+376)</option>
                    <option value="244">Angola (+244)</option>
                    <option value="1">Antigua y Barbuda (+1)</option>
                    <option value="54">Argentina (+54)</option>
                    <option value="374">Armenia (+374)</option>
                    <option value="297">Aruba (+297)</option>
                    <option value="61">Australia (+61)</option>
                    <option value="43">Austria (+43)</option>
                    <option value="994">Azerbaiyán (+994)</option>
                    <option value="1242">Bahamas (+1 242)</option>
                    <option value="973">Bahréin (+973)</option>
                    <option value="880">Bangladés (+880)</option>
                    <option value="1">Barbados (+1)</option>
                    <option value="375">Bielorrusia (+375)</option>
                    <option value="32">Bélgica (+32)</option>
                    <option value="501">Belice (+501)</option>
                    <option value="229">Benín (+229)</option>
                    <option value="1">Bermudas (+1)</option>
                    <option value="591">Bolivia (+591)</option>
                    <option value="387">Bosnia y Herzegovina (+387)</option>
                    <option value="267">Botsuana (+267)</option>
                    <option value="55">Brasil (+55)</option>
                    <option value="673">Brunéi (+673)</option>
                    <option value="359">Bulgaria (+359)</option>
                    <option value="226">Burkina Faso (+226)</option>
                    <option value="257">Burundi (+257)</option>
                    <option value="855">Camboya (+855)</option>
                    <option value="237">Camerún (+237)</option>
                    <option value="1">Canadá (+1)</option>
                    <option value="238">Cabo Verde (+238)</option>
                    <option value="1">Islas Caimán (+1 345)</option>
                    <option value="236">República Centroafricana (+236)</option>
                    <option value="56">Chile (+56)</option>
                    <option value="86">China (+86)</option>
                    <option value="57">Colombia (+57)</option>
                    <option value="269">Comoras (+269)</option>
                    <option value="242">Congo (+242)</option>
                    <option value="243">República Democrática del Congo (+243)</option>
                    <option value="682">Islas Cook (+682)</option>
                    <option value="506">Costa Rica (+506)</option>
                    <option value="225">Costa de Marfil (+225)</option>
                    <option value="385">Croacia (+385)</option>
                    <option value="53">Cuba (+53)</option>
                    <option value="599">Curazao (+599)</option>
                    <option value="357">Chipre (+357)</option>
                    <option value="420">República Checa (+420)</option>
                    <option value="45">Dinamarca (+45)</option>
                    <option value="253">Yibuti (+253)</option>
                    <option value="1">Dominica (+1)</option>
                    <option value="1809">República Dominicana (+1 809)</option>
                    <option value="593">Ecuador (+593)</option>
                    <option value="20">Egipto (+20)</option>
                    <option value="503">El Salvador (+503)</option>
                    <option value="240">Guinea Ecuatorial (+240)</option>
                    <option value="291">Eritrea (+291)</option>
                    <option value="372">Estonia (+372)</option>
                    <option value="251">Etiopía (+251)</option>
                    <option value="500">Islas Malvinas (+500)</option>
                    <option value="298">Islas Feroe (+298)</option>
                    <option value="679">Fiji (+679)</option>
                    <option value="358">Finlandia (+358)</option>
                    <option value="33">Francia (+33)</option>
                    <option value="594">Guayana Francesa (+594)</option>
                    <option value="241">Gabón (+241)</option>
                    <option value="220">Gambia (+220)</option>
                    <option value="995">Georgia (+995)</option>
                    <option value="49">Alemania (+49)</option>
                    <option value="233">Ghana (+233)</option>
                    <option value="350">Gibraltar (+350)</option>
                    <option value="30">Grecia (+30)</option>
                    <option value="299">Groenlandia (+299)</option>
                    <option value="1">Granada (+1)</option>
                    <option value="590">Guadalupe (+590)</option>
                    <option value="502">Guatemala (+502)</option>
                    <option value="224">Guinea (+224)</option>
                    <option value="245">Guinea-Bisáu (+245)</option>
                    <option value="592">Guyana (+592)</option>
                    <option value="509">Haití (+509)</option>
                    <option value="504">Honduras (+504)</option>
                    <option value="852">Hong Kong (+852)</option>
                    <option value="36">Hungría (+36)</option>
                    <option value="354">Islandia (+354)</option>
                    <option value="91">India (+91)</option>
                    <option value="62">Indonesia (+62)</option>
                    <option value="98">Irán (+98)</option>
                    <option value="964">Irak (+964)</option>
                    <option value="353">Irlanda (+353)</option>
                    <option value="972">Israel (+972)</option>
                    <option value="39">Italia (+39)</option>
                    <option value="1">Jamaica (+1)</option>
                    <option value="81">Japón (+81)</option>
                    <option value="962">Jordania (+962)</option>
                    <option value="7">Kazajistán (+7)</option>
                    <option value="254">Kenia (+254)</option>
                    <option value="686">Kiribati (+686)</option>
                    <option value="965">Kuwait (+965)</option>
                    <option value="996">Kirguistán (+996)</option>
                    <option value="856">Laos (+856)</option>
                    <option value="371">Letonia (+371)</option>
                    <option value="961">Líbano (+961)</option>
                    <option value="266">Lesoto (+266)</option>
                    <option value="231">Liberia (+231)</option>
                    <option value="218">Libia (+218)</option>
                    <option value="423">Liechtenstein (+423)</option>
                    <option value="370">Lituania (+370)</option>
                    <option value="352">Luxemburgo (+352)</option>
                    <option value="261">Madagascar (+261)</option>
                    <option value="265">Malawi (+265)</option>
                    <option value="60">Malasia (+60)</option>
                    <option value="960">Maldivas (+960)</option>
                    <option value="223">Malí (+223)</option>
                    <option value="356">Malta (+356)</option>
                    <option value="692">Islas Marshall (+692)</option>
                    <option value="596">Martinica (+596)</option>
                    <option value="222">Mauritania (+222)</option>
                    <option value="230">Mauricio (+230)</option>
                    <option value="262">Mayotte (+262)</option>
                    <option value="52">México (+52)</option>
                    <option value="691">Micronesia (+691)</option>
                    <option value="373">Moldavia (+373)</option>
                    <option value="377">Mónaco (+377)</option>
                    <option value="976">Mongolia (+976)</option>
                    <option value="382">Montenegro (+382)</option>
                    <option value="1664">Montserrat (+1 664)</option>
                    <option value="212">Marruecos (+212)</option>
                    <option value="258">Mozambique (+258)</option>
                    <option value="264">Namibia (+264)</option>
                    <option value="674">Nauru (+674)</option>
                    <option value="977">Nepal (+977)</option>
                    <option value="31">Países Bajos (+31)</option>
                    <option value="64">Nueva Zelanda (+64)</option>
                    <option value="505">Nicaragua (+505)</option>
                    <option value="227">Níger (+227)</option>
                    <option value="234">Nigeria (+234)</option>
                    <option value="683">Niue (+683)</option>
                    <option value="850">Corea del Norte (+850)</option>
                    <option value="47">Noruega (+47)</option>
                    <option value="968">Omán (+968)</option>
                    <option value="92">Pakistán (+92)</option>
                    <option value="680">Palaos (+680)</option>
                    <option value="507">Panamá (+507)</option>
                    <option value="675">Papúa Nueva Guinea (+675)</option>
                    <option value="595">Paraguay (+595)</option>
                    <option value="51">Perú (+51)</option>
                    <option value="63">Filipinas (+63)</option>
                    <option value="48">Polonia (+48)</option>
                    <option value="351">Portugal (+351)</option>
                    <option value="1">Puerto Rico (+1)</option>
                    <option value="974">Qatar (+974)</option>
                    <option value="40">Rumanía (+40)</option>
                    <option value="7">Rusia (+7)</option>
                    <option value="250">Ruanda (+250)</option>
                    <option value="590">San Bartolomé (+590)</option>
                    <option value="1">San Cristóbal y Nieves (+1)</option>
                    <option value="508">San Martín (+590)</option>
                    <option value="1">San Vicente y las Granadinas (+1)</option>
                    <option value="239">Santo Tomé y Príncipe (+239)</option>
                    <option value="966">Arabia Saudita (+966)</option>
                    <option value="221">Senegal (+221)</option>
                    <option value="381">Serbia (+381)</option>
                    <option value="248">Seychelles (+248)</option>
                    <option value="232">Sierra Leona (+232)</option>
                    <option value="65">Singapur (+65)</option>
                    <option value="421">Eslovaquia (+421)</option>
                    <option value="386">Eslovenia (+386)</option>
                    <option value="677">Islas Salomón (+677)</option>
                    <option value="27">Sudáfrica (+27)</option>
                    <option value="34">España (+34)</option>
                    <option value="94">Sri Lanka (+94)</option>
                    <option value="249">Sudán (+249)</option>
                    <option value="597">Surinam (+597)</option>
                    <option value="268">Eswatini (+268)</option>
                    <option value="46">Suecia (+46)</option>
                    <option value="41">Suiza (+41)</option>
                    <option value="963">Siria (+963)</option>
                    <option value="886">Taiwán (+886)</option>
                    <option value="992">Tayikistán (+992)</option>
                    <option value="255">Tanzania (+255)</option>
                    <option value="66">Tailandia (+66)</option>
                    <option value="670">Timor Oriental (+670)</option>
                    <option value="228">Togo (+228)</option>
                    <option value="676">Tonga (+676)</option>
                    <option value="1">Trinidad y Tobago (+1)</option>
                    <option value="216">Túnez (+216)</option>
                    <option value="90">Turquía (+90)</option>
                    <option value="993">Turkmenistán (+993)</option>
                    <option value="1">Islas Turcas y Caicos (+1)</option>
                    <option value="256">Uganda (+256)</option>
                    <option value="380">Ucrania (+380)</option>
                    <option value="971">Emiratos Árabes Unidos (+971)</option>
                    <option value="44">Reino Unido (+44)</option>
                    <option value="1">Estados Unidos (+1)</option>
                    <option value="598">Uruguay (+598)</option>
                    <option value="998">Uzbekistán (+998)</option>
                    <option value="678">Vanuatu (+678)</option>
                    <option value="58">Venezuela (+58)</option>
                    <option value="84">Vietnam (+84)</option>
                    <option value="681">Wallis y Futuna (+681)</option>
                    <option value="967">Yemen (+967)</option>
                    <option value="260">Zambia (+260)</option>
                    <option value="263">Zimbabue (+263)</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Número Telefónico</label>
                <input type="number" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Título o Cargo</label>
                <select class="form-select" id="titulo" name="titulo" required>
                    <option value="" disabled selected>Elige un cargo</option>
                    <option value="Capitán de Altura">Capitán de Altura</option>
                    <option value="Primer Oficial de Navegación">Primer Oficial de Navegación</option>
                    <option value="Segundo Oficial de Navegación">Segundo Oficial de Navegación</option>
                    <option value="Tercer Oficial de Navegación">Tercer Oficial de Navegación</option>
                    <option value="Jefe de Máquinas">Jefe de Máquinas</option>
                    <option value="Primer Oficial de Máquinas">Primer Oficial de Máquinas</option>
                    <option value="Segundo Oficial de Máquinas">Segundo Oficial de Máquinas</option>
                    <option value="Tercer Oficial de Máquinas">Tercer Oficial de Máquinas</option>
                    <option value="Capitán de Pesca">Capitán de Pesca</option>
                    <option value="Oficial de Pesca">Oficial de Pesca</option>
                    <option value="Jefe de Máquinas de Pesca">Jefe de Máquinas de Pesca</option>
                    <option value="Oficial de Máquinas de Pesca">Oficial de Máquinas de Pesca</option>
                    <option value="Capitán Costanero">Capitán Costanero</option>
                    <option value="Patón de Primera">Patón de Primera</option>
                    <option value="Patón de Segunda">Patón de Segunda</option>
                    <option value="Motorista de Primera">Motorista de Primera</option>
                    <option value="Motorista de Segunda">Motorista de Segunda</option>
                    <option value="Personal de Apoyo">Personal de Apoyo</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="empresa" class="form-label">Nombre de la Empresa o Agencia Naviera</label>
                <input type="text" class="form-control" id="empresa" name="empresa" required>
            </div>
            <div class="mb-3">
                <label for="pais" class="form-label">País dónde labora</label>
                <select id="pais" name="pais" class="form-select" required>
                    <option value="Afganistán">Afganistán</option>
                    <option value="Albania">Albania</option>
                    <option value="Alemania">Alemania</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguila">Anguila</option>
                    <option value="Antártida">Antártida</option>
                    <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                    <option value="Arabia Saudita">Arabia Saudita</option>
                    <option value="Argelia">Argelia</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaiyán">Azerbaiyán</option>
                    <option value="Bélgica">Bélgica</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrein">Bahrein</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belice">Belice</option>
                    <option value="Benín">Benín</option>
                    <option value="Bhután">Bhután</option>
                    <option value="Bielorrusia">Bielorrusia</option>
                    <option value="Birmania">Birmania</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                    <option value="Botsuana">Botsuana</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Brunéi">Brunéi</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cabo Verde">Cabo Verde</option>
                    <option value="Camboya">Camboya</option>
                    <option value="Camerún">Camerún</option>
                    <option value="Canadá">Canadá</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Chipre">Chipre</option>
                    <option value="Ciudad del Vaticano">Ciudad del Vaticano</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoras">Comoras</option>
                    <option value="República del Congo">República del Congo</option>
                    <option value="República Democrática del Congo">República Democrática del Congo</option>
                    <option value="Corea del Norte">Corea del Norte</option>
                    <option value="Corea del Sur">Corea del Sur</option>
                    <option value="Costa de Marfil">Costa de Marfil</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Croacia">Croacia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curazao">Curazao</option>
                    <option value="Dinamarca">Dinamarca</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egipto">Egipto</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Eslovaquia">Eslovaquia</option>
                    <option value="Eslovenia">Eslovenia</option>
                    <option value="España">España</option>
                    <option value="Estados Unidos de América">Estados Unidos de América</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Etiopía">Etiopía</option>
                    <option value="Filipinas">Filipinas</option>
                    <option value="Finlandia">Finlandia</option>
                    <option value="Fiyi">Fiyi</option>
                    <option value="Francia">Francia</option>
                    <option value="Gabón">Gabón</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Granada">Granada</option>
                    <option value="Grecia">Grecia</option>
                    <option value="Groenlandia">Groenlandia</option>
                    <option value="Guadalupe">Guadalupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guayana Francesa">Guayana Francesa</option>
                    <option value="Guernsey">Guernsey</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haití">Haití</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungría">Hungría</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Irán">Irán</option>
                    <option value="Irak">Irak</option>
                    <option value="Irlanda">Irlanda</option>
                    <option value="Isla Bouvet">Isla Bouvet</option>
                    <option value="Isla de Man">Isla de Man</option>
                    <option value="Isla de Navidad">Isla de Navidad</option>
                    <option value="Isla Norfolk">Isla Norfolk</option>
                    <option value="Islandia">Islandia</option>
                    <option value="Islas Bermudas">Islas Bermudas</option>
                    <option value="Islas Caimán">Islas Caimán</option>
                    <option value="Islas Cocos (Keeling)">Islas Cocos (Keeling)</option>
                    <option value="Islas Cook">Islas Cook</option>
                    <option value="Islas de Åland">Islas de Åland</option>
                    <option value="Islas Feroe">Islas Feroe</option>
                    <option value="Islas Georgias del Sur y Sandwich del Sur">Islas Georgias del Sur y Sandwich del Sur</option>
                    <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
                    <option value="Islas Maldivas">Islas Maldivas</option>
                    <option value="Islas Malvinas">Islas Malvinas</option>
                    <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
                    <option value="Islas Marshall">Islas Marshall</option>
                    <option value="Islas Pitcairn">Islas Pitcairn</option>
                    <option value="Islas Salomón">Islas Salomón</option>
                    <option value="Islas Turcas y Caicos">Islas Turcas y Caicos</option>
                    <option value="Islas Ultramarinas Menores de Estados Unidos">Islas Ultramarinas Menores de Estados Unidos</option>
                    <option value="Islas Vírgenes Británicas">Islas Vírgenes Británicas</option>
                    <option value="Islas Vírgenes de los Estados Unidos">Islas Vírgenes de los Estados Unidos</option>
                    <option value="Israel">Israel</option>
                    <option value="Italia">Italia</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japón">Japón</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordania">Jordania</option>
                    <option value="Kazajistán">Kazajistán</option>
                    <option value="Kenia">Kenia</option>
                    <option value="Kirguistán">Kirguistán</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Líbano">Líbano</option>
                    <option value="Laos">Laos</option>
                    <option value="Lesoto">Lesoto</option>
                    <option value="Letonia">Letonia</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libia">Libia</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lituania">Lituania</option>
                    <option value="Luxemburgo">Luxemburgo</option>
                    <option value="México">México</option>
                    <option value="Mónaco">Mónaco</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedônia">Macedônia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malasia">Malasia</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marruecos">Marruecos</option>
                    <option value="Martinica">Martinica</option>
                    <option value="Mauricio">Mauricio</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Micronesia">Micronesia</option>
                    <option value="Moldavia">Moldavia</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Noruega">Noruega</option>
                    <option value="Nueva Caledonia">Nueva Caledonia</option>
                    <option value="Nueva Zelanda">Nueva Zelanda</option>
                    <option value="Omán">Omán</option>
                    <option value="Países Bajos">Países Bajos</option>
                    <option value="Pakistán">Pakistán</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestina">Palestina</option>
                    <option value="Panamá">Panamá</option>
                    <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Perú">Perú</option>
                    <option value="Polinesia Francesa">Polinesia Francesa</option>
                    <option value="Polonia">Polonia</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reino Unido">Reino Unido</option>
                    <option value="República Centroafricana">República Centroafricana</option>
                    <option value="República Checa">República Checa</option>
                    <option value="República Dominicana">República Dominicana</option>
                    <option value="República de Sudán del Sur">República de Sudán del Sur</option>
                    <option value="Reunión">Reunión</option>
                    <option value="Ruanda">Ruanda</option>
                    <option value="Rumanía">Rumanía</option>
                    <option value="Rusia">Rusia</option>
                    <option value="Sahara Occidental">Sahara Occidental</option>
                    <option value="Samoa">Samoa</option>
                    <option value="Samoa Americana">Samoa Americana</option>
                    <option value="San Bartolomé">San Bartolomé</option>
                    <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                    <option value="San Marino">San Marino</option>
                    <option value="San Martín (Francia)">San Martín (Francia)</option>
                    <option value="San Pedro y Miquelón">San Pedro y Miquelón</option>
                    <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                    <option value="Santa Elena">Santa Elena</option>
                    <option value="Santa Lucía">Santa Lucía</option>
                    <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leona">Sierra Leona</option>
                    <option value="Singapur">Singapur</option>
                    <option value="Sint Maarten">Sint Maarten</option>
                    <option value="Siria">Siria</option>
                    <option value="Somalia">Somalia</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudáfrica">Sudáfrica</option>
                    <option value="Sudán">Sudán</option>
                    <option value="Suecia">Suecia</option>
                    <option value="Suiza">Suiza</option>
                    <option value="Surinám">Surinám</option>
                    <option value="Svalbard y Jan Mayen">Svalbard y Jan Mayen</option>
                    <option value="Swazilandia">Swazilandia</option>
                    <option value="Tayikistán">Tayikistán</option>
                    <option value="Tailandia">Tailandia</option>
                    <option value="Taiwán">Taiwán</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Territorio Británico del Océano Índico">Territorio Británico del Océano Índico</option>
                    <option value="Territorios Australes y Antárticas Franceses">Territorios Australes y Antárticas Francesas</option>
                    <option value="Timor Oriental">Timor Oriental</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                    <option value="Túnez">Túnez</option>
                    <option value="Turkmenistán">Turkmenistán</option>
                    <option value="Turquía">Turquía</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Ucrania">Ucrania</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistán">Uzbekistán</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Wallis y Futuna">Wallis y Futuna</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Yibuti">Yibuti</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabue">Zimbabue</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <br><br>
        </form>
        <script>
            <?php
            if (isset($_SESSION['message'])) {
                $message = $_SESSION['message'];
                echo "Swal.fire({
                    title: '" . ($message['type'] == 'success' ? 'Éxito!' : 'Error!') . "',
                    text: '" . $message['text'] . "',
                    icon: '" . $message['type'] . "',
                    confirmButtonText: 'Aceptar'
                });";
                unset($_SESSION['message']);
            }
            ?>
        </script>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>