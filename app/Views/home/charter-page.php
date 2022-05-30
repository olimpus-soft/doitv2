<?php
$charterTitle = 'Santa Clara, Ciudad y Playa';
$fileCharter = '/assets/images/project/curent_charter.jpg';
$rawBodyEmail = rawurlencode('Hola, <span style="color:#ff7f00;">' . COMERCIALNAME . '</span>!<br><br>Envio los documentos adjuntos y la información sobre la reserva para el charter:<br><b>'.$charterTitle.'</b><br><br>Un Saludo.<br>--<br>');
?>

<section id="page-charter-page" class="services-area pt-125 pb-90 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center pb-20">
					<h5 class="sub-title mb-15">Charter</h5>
					<h2 class="title"><?= $charterTitle; ?> </h2>
				</div> <!-- section title -->
			</div>
		</div> <!-- row -->

		<div class="row justify-content-center">
			<div class="col-lg-12 justify-content-center text-justify">
				<p class="pb-30">
					Disfruta de un grandioso plan combinando las playas del grandioso Cayo Las Brujas, con la cultura e historia de Santa Clara y La Habana, 2 ciudades llenas de historia, música y el mejor sabor Cubano.
				</p>
			</div>
			<div class="col-lg-12 justify-content-center text-center">
				<div class="fb-like" data-href="<?= current_url(); ?>" data-layout="button" data-action="like" data-size="large" data-share="true"></div>
			</div>
			<div class="col-lg-12 justify-content-center text-center">
				<img class="img-fluid img-responsive" src="<?php echo base_url('assets/images/project/curent_charter.jpg'); ?>" alt="Charter <?= $charterTitle; ?>">
			</div>
		</div>

		<div class="row justify-content-center white-bg">
			<div class="col-lg-12 justify-content-center">
				<div class="table-responsive">
					<table class="table thead-dark table-striped table-bordered table-hover">
						<caption>Lista de Planes</caption>
						<thead>
							<tr>
								<th scope="col">Plan</th>
								<th scope="col">Sencilla</th>
								<th scope="col">Doble</th>
								<th scope="col">Triple</th>
								<th scope="col">1<sup>er</sup> niño</th>
								<th scope="col">2<sup>do</sup> niño</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">
									Combinado Grand Aston Cayo Las Brujas y Grand Aston Habana
								</th>
								<td style="text-align: right;">$ 1.715,00</td>
								<td style="text-align: right;">$ 1.315,00</td>
								<td style="text-align: right;">$ 1.285,00</td>
								<td style="text-align: right;">$ 541,00</td>
								<td style="text-align: right;">$ 735,00</td>
							</tr>
							<tr>
								<th scope="row">
									Combinado Iberostar Selection Ensenachos y Grand Aston Habana
								</th>
								<td style="text-align: right;">$ 1.805,00</td>
								<td style="text-align: right;">$ 1.510,00</td>
								<td style="text-align: right;">$ 1.425,00</td>
								<td style="text-align: right;">$ 915,00</td>
								<td style="text-align: right;">$ 915,00</td>
							</tr>
						</tbody>
					</table>
				</div>
				<ul class="level3">
					<li class="pt-30"><b>El Plan incluye:</b> 
						<ul class="level2">
							<li>Tiquetes aéreos BOG SNU BOG en vuelo Chárter.</li>
							<li>1 maleta de 20kl en bodega y morral o bolso personal de 10kl debajo de la silla.</li>
							<li>Traslados aeropuerto hotel aeropuerto.</li>
							<li>4 noche de alojamiento en el hotel Grand Aston Cayo Las Brujas o Iberostar Selection Ensenachos según solicitud, plan todo incluido con desayunos, almuerzos, cenas, snacks, bebidas ilimitadas (Se cuenta desde la noche del vuelo ya que los pasajeros llegan en la madrugada y van directo a su habitación a descansar).</li>
							<li>Traslados interhotel desde el hotel Grand Aston Cayo Las Brujas o Iberostar Ensenachos al Grand Aston La Habana, durante el traslado se les realizara un tour panorámico por la ciudad de Santa Clara con visita el Mausoleo del Che. (Los días lunes no se visita el Mausoleo del Che ya que está cerrado, solo pueden ver las aéreas exteriores).</li>
							<li>2 noches de alojamiento en el Grand Aston La Habana, con desayuno.</li>
							<li>City tour panorámico por La Habana sin almuerzo.</li>
							<li>Tarjeta de asistencia médica.</li>
							<li>Tarjeta de turismo para ingreso a Cuba.</li>
						</ul>
					</li>
					<li class="pt-30"><b>El Plan <span style="color:var(--primary);">NO</span> incluye:</b> 
						<ul class="level0">
							<li>Tours adicionales.</li>
							<li>Gastos personales ni propinas.</li>
							<li>Servicios no indicados en el programa.</li>
						</ul>
					</li>
					<li class="pt-30"><b class="main-btn py-10">Nota:</b> 
						<ul class="level1">
							<li>En el traslado desde La Habana al aeropuerto de Santa Clara se realizará una parada en Santa Clara para que los pasajeros tomen su cena y luego continuar el traslado al aeropuerto para tomar el vuelo de regreso a su país, ésta cena no esta incluida en la tarifa.</li>
							<li>El checkin en el hotel de Habana es a las 12 del día, pero seguirán haciendo uso de las instalaciones comunes del hotel hasta la hora indicada para el traslado.</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>

		<div class="row justify-content-center gray-bg pt-80">
			<div class="col-lg-12 justify-content-center">
				<div class="table-responsive">
					<table class="table thead-dark table-bordered table-hover">
						<caption>Próximas Salidas</caption>
						<thead>
							<tr>
								<th scope="col">Origen</th>
								<th scope="col">Destino</th>
								<th scope="col">Fecha Salida</th>
								<th scope="col">Hora Salida</th>
								<th scope="col">Hora Llegada</th>
							</tr>
						</thead>
						<tbody>
							<tr class="franja2">
							  <th scope="row">Bogot&aacute; (BOG) </th>
							  <th scope="row">Santa Clara (SNU)</th>
							  <td style="text-align: center;">17-jun-2022</td>
							  <td style="text-align: center;">22:58</td>
							  <td style="text-align: center;">3:39</td>
							</tr>
							<tr class="franja2">
							  <th scope="row">Santa Clara (SNU)</th>
							  <th scope="row">Bogot&aacute; (BOG) </th>
							  <td style="text-align: center;">24-jun-2022</td>
							  <td style="text-align: center;">4:49</td>
							  <td style="text-align: center;">7:09</td>
							</tr>
							<tr class="franja1">
								<th scope="row">Bogot&aacute; (BOG) </th>
								<th scope="row">Santa Clara (SNU)</th>
							  <td style="text-align: center;">28-jun-2022</td>
							  <td style="text-align: center;">22:58</td>
							  <td style="text-align: center;">3:39</td>
							</tr>
							<tr class="franja1">
								<th>Santa Clara (SNU)</th>
								<th>Bogot&aacute; (BOG) </th>
							  <td style="text-align: center;">5-jul-2022</td>
							  <td style="text-align: center;">4:49</td>
							  <td style="text-align: center;">7:09</td>
							</tr>
							<tr class="franja3">
							  <th scope="row">Bogot&aacute; (BOG) </th>
							  <th scope="row">Santa Clara (SNU)</th>
							  <td style="text-align: center;">04-jul-2022</td>
							  <td style="text-align: center;">22:58</td>
							  <td style="text-align: center;">3:39</td>
							</tr>
							<tr class="franja3">
							  <th scope="row">Santa Clara (SNU)</th>
							  <th scope="row">Bogot&aacute; (BOG) </th>
							  <td style="text-align: center;">11-jul-2022</td>
							  <td style="text-align: center;">4:49</td>
							  <td style="text-align: center;">7:09</td>
							</tr>
							<tr class="franja1">
								<th scope="row">Bogot&aacute; (BOG) </th>
								<th scope="row">Santa Clara (SNU)</th>
							  <td style="text-align: center;">10-jul-2022</td>
							  <td style="text-align: center;">22:58</td>
							  <td style="text-align: center;">3:39</td>
							</tr>
							<tr class="franja1">
								<th>Santa Clara (SNU)</th>
								<th>Bogot&aacute; (BOG) </th>
							  <td style="text-align: center;">17-jul-2022</td>
							  <td style="text-align: center;">4:49</td>
							  <td style="text-align: center;">7:09</td>
							</tr>
							<tr class="franja4">
								<th scope="row">Bogot&aacute; (BOG) </th>
								<th scope="row">Santa Clara (SNU)</th>
							  <td style="text-align: center;">16-jul-2022</td>
							  <td style="text-align: center;">22:58</td>
							  <td style="text-align: center;">3:39</td>
							</tr>
							<tr class="franja4">
								<th>Habana (HAV)</th>
								<th>Bogot&aacute; (BOG) </th>
							  <td style="text-align: center;">23-jul-2022</td>
							  <td style="text-align: center;">13:48</td>
							  <td style="text-align: center;">16:08</td>
							</tr>
							<tr class="franja2">
								<th scope="row">Bogot&aacute; (BOG) </th>
								<th scope="row">Santa Clara (SNU)</th>
							  <td style="text-align: center;">13-ago-2022</td>
							  <td style="text-align: center;">22:58</td>
							  <td style="text-align: center;">3:39</td>
							</tr>
							<tr class="franja2">
								<th scope="row">Santa Clara (SNU)</th>
								<th scope="row">Bogot&aacute; (BOG) </th>
							  <td style="text-align: center;">20-ago-2022</td>
							  <td style="text-align: center;">4:49</td>
							  <td style="text-align: center;">7:09</td>
							</tr>
							<tr class="franja1">
							  <th scope="row">Bogot&aacute; (BOG) </th>
							  <th scope="row">Santa Clara (SNU)</th>
							  <td style="text-align: center;">10-sep-2022</td>
							  <td style="text-align: center;">22:58</td>
							  <td style="text-align: center;">3:39</td>
							</tr>
							<tr class="franja1">
							  <th scope="row">Santa Clara (SNU)</th>
							  <th scope="row">Bogot&aacute; (BOG) </th>
							  <td style="text-align: center;">17-sep-2022</td>
							  <td style="text-align: center;">4:49</td>
							  <td style="text-align: center;">7:09</td>
							</tr>
							<tr class="franja3">
								<th>Bogot&aacute; (BOG) </th>
								<th>Santa Clara (SNU)</th>
							  <td style="text-align: center;">16-sep-2022</td>
							  <td style="text-align: center;">22:58</td>
							  <td style="text-align: center;">3:39</td>
							</tr>
							<tr class="franja3">
								<th>Santa Clara (SNU)</th>
								<th>Bogot&aacute; (BOG) </th>
							  <td style="text-align: center;">23-sep-2022</td>
							  <td style="text-align: center;">4:49</td>
							  <td style="text-align: center;">7:09</td>
							</tr>
							<tr class="franja2">
							  <th scope="row">Bogot&aacute; (BOG) </th>
							  <th scope="row">Santa Clara (SNU)</th>
							  <td style="text-align: center;">29-nov-2022</td>
							  <td style="text-align: center;">22:58</td>
							  <td style="text-align: center;">3:39</td>
							</tr>
							<tr class="franja2">
							  <th scope="row">Santa Clara (SNU)</th>
							  <th scope="row">Bogot&aacute; (BOG) </th>
							  <td style="text-align: center;">6-dic-2022</td>
							  <td style="text-align: center;">4:49</td>
							  <td style="text-align: center;">7:09</td>
							</tr>

						</tbody>
					</table>
				</div>
				<p class="text-justify my-25">
					<span style="color: var(--primary); font-weight: bold;">NOTA:</span> Los horarios de salida y llegada son estimados, pueden sufrir cambios, si así la Aeronáutica Civil del país involucrado lo dispone; en todo caso, les será informado sobre cualquier cambio de itinerario en el momento que suceda.
					<h5 class="sub-title my-25">Sobre las emisiones de los tiquetes:</h5>
					Por ser vuelo chárter, los tiquetes serán emitidos 72 A 48 horas antes de la salida del vuelo.
				</p>
			</div>
		</div>
		
		<div class="row justify-content-center white-bg">
			<div class="col-lg-12 justify-content-center">
				<ul class="level3">
					<li class="pt-30"><b>Condiciones Generales <?= COMERCIALNAME; ?>:</b> 
						<ul class="level2">
							<li>Tarifas publicadas en dólares americanos.</li>
							<li>Los pagos de reciben en pesos colombianos a la TRM del día.</li>
							<li>Cupos limitados.</li>
							<li style="color: var(--primary); font-weight: bold;">Tarifas sujetas a cambio sin previo aviso hasta realizar la reserva.</li>
							<li>Tarifa de niños para menores de 2 a 11 años, acompañados mínimo de 2 adultos en la misma habitación.</li>
							<li>Una vez emitida la reserva cualquier cambio o cancelación genera un cobro administrativo por la agencia de 50 dólares por persona, más los cobros de penalidades y diferencias de tarifa que indiquen los operadores afectados (aerolíneas, hoteles, operadores, receptivos.</li>
							<li>Asistencia médica después de emitida no permite modificaciones o cancelaciones.</li>
							<li>Después de realizada la reserva cualquier cambio o cancelación genera penalidades.</li>
							<li style="color: var(--primary); font-weight: bold;">Tarifas no reembolsables.</li>
							<li>Para confirmar la reserva hotelera se puede reservar con inicial del 30%, 45 días antes debe estar el pago 100%. Se programan cuotas mensuales según fecha de viaje.</li>
							<li>Las tarifas no son reembolsables en dinero, en caso tal se realice cancelación por fuerza mayor, se realizarán los reembolsos en servicios de la misma agencia, si ya hay servicios pagos (tiquetes aéreos, hoteles y receptivos en destino) se manejaría con cambio de fecha para el mismo plan contratado, sujetos a las diferencias de tarifa y condiciones que indique cada prestatario.</li>
						</ul>
					</li>
					<li class="pt-30"><b>Penalidades del Operador :</b> 
						<ul class="level0">
							<li>60 días antes de la salida, a las 13 HORAS y 59 minutos, hora Colombia: paga 10% de penalidad del valor total del paquete seleccionado, el dinero que haya sido abonado a EL PROVEEDOR será reembolsado a una cuenta que nos permita LA AGENCIA/FREELANCE, tomando en cuenta que le serán RETENIDOS todos los gastos en que EL PROVEEDOR incurra para realizar dicha transacción.</li>
							<li>59 días A 46 días antes de la salida, a las 13:00 HORAS Colombia: LA AGENCIA/FREELANCE paga 35% de penalidad del valor total del paquete seleccionado. Este descuento se aplicará a los espacios que LA AGENCIA/FREELANCE está cancelando.</li>
							<li>45 A 30 días antes de la salida a las 13:00 HORAS Colombia: solo se permite cancelar el 30% de los cupos reservados; y por los cupos cancelados LA AGENCIA/FREELANCE debe pagar 60% de penalidad por persona del valor total del paquete seleccionado.</li>
							<li>29 días antes de la salida, hasta las 13:00 HORA Colombia: LA AGENCIA/FREELANCE; paga 100% de penalidad por persona, del valor total del paquete seleccionado.</li>
							<li>Tener en cuenta que, en todo caso, si a LA AGENCIA/FREELANCE, e involucrados que aplique ya se le pago la comisión, la devolución que aplique, se realizaran únicamente sobre los valores restantes del plan, descontando las comisiones correspondientes y gastos administrativos que haya lugar </li>
						</ul>
					</li>
					<li class="pt-30"><b class="py-10">Documentos necesarios para reserva y viaje:</b> 
						<ul class="level1">
							<li>Copia del pasaporte de cada uno de los pasajeros con vigencia mínima de 6 meses a partir de la fecha de viaje. </li>
							<li>Enviar solicitud con datos de reserva, fechas de viaje seleccionada, hoteles, cantidad de pasajeros y acomodación al correo <a href="mailto:Lcorrea@doitviajesyturismo.com?subject=Solicitud con Datos de Reserva&cc=operaciones@doitviajesyturismo.com&body=<?= $rawBodyEmail; ?>" target="_blank" rel="noopener noreferrer">Lcorrea@doitviajesyturismo.com</a> y <a href="mailto:operaciones@doitviajesyturismo.com?subject=Solicitud con Datos de Reserva&cc=Lcorrea@doitviajesyturismo.com&body=<?= $rawBodyEmail; ?>" target="_blank"  rel="noopener noreferrer">operaciones@doitviajesyturismo.com</a> </li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php
	echo view('home/contact');
	
?>