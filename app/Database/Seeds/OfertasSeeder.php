<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OfertasSeeder extends Seeder {
  protected $tableName  = 'categoria_ofertas';
  protected $tableName2 = 'ofertas';
  protected $tableName3 = 'charters';
  public function run() {

    $data = [
      //es
      [ 
        'categoria'             => 'Planes Con Tiquetes Aéreos',
        'categoria_slug'        => 'planes-con-tiquetes-aereos',
        'categoria_descripcion' => 'Planes Con Tiquetes Aéreos por medio de la aerolínea Wingo',
        'categoria_image'       => 'categories/con-tiquetes.jpg',
        'categoria_lang'        => 'es',
        'status'                => '1',
        'ofertas'               => [
          [ 
            'oferta_titulo'     => 'Varadero 5 Noches Con Wingo',
            'oferta_slug'       => 'varadero-5-noches-con-wingo',
            'oferta_subtitulo'  => '',
            'oferta_resumen'    => '',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'https://drive.google.com/file/d/1FHBISwH4oJa_wuM0hrSC1s84Z5Kr9HP-/view?usp=sharing',
            'oferta_file_type'  => 'url',
            'oferta_image'      => 'ofertas/varadero-5n-flight.jpg', //361x485
            'oferta_favorita'   => '1',
            'status'            => '1',      
          ],
          [ 
            'oferta_titulo'     => 'Habana - Varadero 5 Noches Con Wingo',
            'oferta_slug'       => 'habana-varadero-5-noches-con-wingo',
            'oferta_subtitulo'  => '',
            'oferta_resumen'    => '',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'https://drive.google.com/file/d/1z0UrhcdZanW_iDkb2JN1pvSLh_IsHvKL/view?usp=sharing',
            'oferta_file_type'  => 'url',
            'oferta_image'      => 'ofertas/HV5N.png', //361x485
            'oferta_favorita'   => '1',
            'status'            => '1',      
          ],
          [ 
            'oferta_titulo'     => 'Habana - Varadero 7 Noches Con Wingo',
            'oferta_slug'       => 'habana-varadero-7-noches-con-wingo',
            'oferta_subtitulo'  => '',
            'oferta_resumen'    => '',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'https://drive.google.com/file/d/1VncdXOAYfVz5l1QfunCrT0YMOlLCSF_q/view?usp=sharing',
            'oferta_file_type'  => 'url',
            'oferta_image'      => 'ofertas/HV7N.png', //361x485
            'oferta_favorita'   => '1',
            'status'            => '1',      
          ],
          [ 
            'oferta_titulo'     => 'Circuito Mini Fantasia Cubana Con Wingo',
            'oferta_slug'       => 'circuito-mini-fantasia-cubana-con-wingo',
            'oferta_subtitulo'  => '',
            'oferta_resumen'    => '',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'https://drive.google.com/file/d/1BlokQxeStdtkzHbBAHuvrLnpoVHyLh44/view?usp=sharing',
            'oferta_file_type'  => 'url',
            'oferta_image'      => 'ofertas/CirMiniFantasia2.png', //361x485
            'oferta_favorita'   => '1',
            'status'            => '1',      
          ],
          [ 
            'oferta_titulo'     => 'Circuito Cuba, Mar, Naturaleza e Historia Con Wingo',
            'oferta_slug'       => 'circuito-cuba-mar-naturaleza-e-historia-con-wingo',
            'oferta_subtitulo'  => '',
            'oferta_resumen'    => '',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'https://drive.google.com/file/d/1zjS1fFkH8990fWAZSDadRLk3cPsvtQKq/view?usp=sharing',
            'oferta_file_type'  => 'url',
            'oferta_image'      => 'ofertas/CirMarHisNat2.jpg', //361x485
            'oferta_favorita'   => '1',
            'status'            => '1',      
          ],
        ],
      ],
      [
        'categoria'             => 'Planes Sin Tiquetes Aéreos',        
        'categoria_slug'        => 'planes-sin-tiquetes-aereos',
        'categoria_descripcion' => 'Planes Sin Tiquetes Aéreos, no se incluyen dentro de los costos de los planes',
        'categoria_image'       => 'categories/sin-tiquetes.jpg',
        'categoria_lang'        => 'es',
        'status'                => '1',
        'ofertas'               => [
          [ 
            'oferta_titulo'     => 'Varadero 4 Noches - Promo 6 Junio',
            'oferta_slug'       => 'varadero-4-noches-promo-6-junio',
            'oferta_subtitulo'  => '',
            'oferta_resumen'    => '',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'https://drive.google.com/file/d/1HwcwnlS3w2IdXxsFGagXITK-CFfE-xwH/view?usp=sharing',
            'oferta_file_type'  => 'url',
            'oferta_image'      => 'ofertas/varadero-4n.jpg', //361x485
            'oferta_favorita'   => '0',
            'status'            => '1',      
          ],
          [ 
            'oferta_titulo'     => 'Varadero 5 Noches - Promo 6 Junio',
            'oferta_slug'       => 'varadero-5-noches-promo-6-junio',
            'oferta_subtitulo'  => '',
            'oferta_resumen'    => '',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'https://drive.google.com/file/d/1j7ZC3h0CJKMTR063cpnvTBMdgO-ovDSL/view?usp=sharing',
            'oferta_file_type'  => 'url',
            'oferta_image'      => 'ofertas/varadero-5n.jpg', //361x485
            'oferta_favorita'   => '0',
            'status'            => '1',      
          ],
          [ 
            'oferta_titulo'     => 'Varadero 6 Noches - Promo 6 Junio',
            'oferta_slug'       => 'varadero-6-noches-promo-6-junio',
            'oferta_subtitulo'  => '',
            'oferta_resumen'    => '',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'https://drive.google.com/file/d/1UyYlTHfaW081IgGKc4r35EFC7wrPPaQ4/view?usp=sharing',
            'oferta_file_type'  => 'url',
            'oferta_image'      => 'ofertas/varadero-6n.jpg', //361x485
            'oferta_favorita'   => '1',
            'status'            => '1',      
          ],
          [ 
            'oferta_titulo'     => 'Habana - Varadero 4 Noches - Promo 6 Junio',
            'oferta_slug'       => 'habana-varadero-4-noches-promo-6-junio',
            'oferta_subtitulo'  => '',
            'oferta_resumen'    => '',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'https://drive.google.com/file/d/1AYE7deGP9vC-5ysPcRM3nvKOkXRkaYAi/view?usp=sharing',
            'oferta_file_type'  => 'url',
            'oferta_image'      => 'ofertas/hav-var-4n.jpg', //361x485
            'oferta_favorita'   => '0',
            'status'            => '1',      
          ],
          [ 
            'oferta_titulo'     => 'Habana - Varadero 5 Noches - Promo 6 Junio',
            'oferta_slug'       => 'habana-varadero-5-noches-promo-6-junio',
            'oferta_subtitulo'  => '',
            'oferta_resumen'    => '',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'https://drive.google.com/file/d/1IGLkrY_qAAU0Dt1fXPWOrPDMIk7dCeU6/view?usp=sharing',
            'oferta_file_type'  => 'url',
            'oferta_image'      => 'ofertas/hav-var-5n.jpg', //361x485
            'oferta_favorita'   => '0',
            'status'            => '1',      
          ],
          [ 
            'oferta_titulo'     => 'Habana - Varadero 6 Noches - Promo 6 Junio',
            'oferta_slug'       => 'habana-varadero-6-noches-promo-6-junio',
            'oferta_subtitulo'  => '',
            'oferta_resumen'    => '',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'https://drive.google.com/file/d/1YtE6rGw92CwFeskrxDk1CjX3sKYcZ9_5/view?usp=sharing',
            'oferta_file_type'  => 'url',
            'oferta_image'      => 'ofertas/hav-var-6n.jpg', //361x485
            'oferta_favorita'   => '0',
            'status'            => '1',      
          ],
          [ 
            'oferta_titulo'     => 'Habana - Varadero 7 Noches - Promo 6 Junio',
            'oferta_slug'       => 'habana-varadero-7-noches-promo-6-junio',
            'oferta_subtitulo'  => '',
            'oferta_resumen'    => '',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'https://drive.google.com/file/d/1z-iM5ULCiZcgr4wTp6xn_dyy3-iS4A7l/view?usp=sharing',
            'oferta_file_type'  => 'url',
            'oferta_image'      => 'ofertas/hav-var-7n.jpg', //361x485
            'oferta_favorita'   => '1',
            'status'            => '1',      
          ],
          [ 
            'oferta_titulo'     => 'Circuito Mini Fantasia Cubana',
            'oferta_slug'       => 'circuito-mini-fantasia-cubana',
            'oferta_subtitulo'  => '',
            'oferta_resumen'    => '',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'https://drive.google.com/file/d/11hoH_qzlcJfTZBffPT5EDYRTY5-YGH42/view?usp=sharing',
            'oferta_file_type'  => 'url',
            'oferta_image'      => 'ofertas/CirMiniFantasia.png', //361x485
            'oferta_favorita'   => '1',
            'status'            => '1',      
          ],
          [ 
            'oferta_titulo'     => 'Circuito Cuba, Mar, Naturaleza e Historia',
            'oferta_slug'       => 'circuito-cuba-mar-naturaleza-e-historia',
            'oferta_subtitulo'  => '',
            'oferta_resumen'    => '',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'https://drive.google.com/file/d/18ncEch5kZGxvPdqe-rcN2QDpKfdSJsEE/view?usp=sharing',
            'oferta_file_type'  => 'url',
            'oferta_image'      => 'ofertas/CirMarHisNat.jpg', //361x485
            'oferta_favorita'   => '1',
            'status'            => '1',      
          ],
        ],
      ],      
      [ 
        'categoria'             => 'Chárters',        
        'categoria_slug'        => 'charters',
        'categoria_descripcion' => 'Charters Con Tiquetes Aéreos, se incluyen dentro de los costos',
        'categoria_image'       => 'categories/charters.jpg',
        'categoria_lang'        => 'es',
        'status'                => '1',
        'charters'               => [
          [ 
            'charter_titulo'        => 'Chárter a Santa Clara Solo Playa',
            'charter_subtitulo'     => 'Cayo Las Brujas y Ensenachos',
            'charter_resumen'       => 'Disfruta de un grandioso plan combinando las playas del grandioso Cayo Las Brujas, con la cultura e historia de Santa Clara y La Habana, 2 ciudades llenas de historia, música y el mejor sabor Cubano.',
            'charter_lang'          => 'es',
            'charter_slug'          => 'charter-a-santa-clara-solo-playa',
            'charter_image'          => 'charters/santa_clara.jpg',
            'charter_favorito'      => '1',
            'charter_file'          => 'https://drive.google.com/file/d/1wpJLwLRPdqvQ0iCy9RSLdH31OD5wwXGD/view?usp=sharing',
            'charter_file_type'     => 'url',
            'charter_orden'         => '1',
            'charter_plans'         => 'charters/santa_clara_plans.csv',
            'charter_description'   => '
              <div class="row justify-content-center white-bg">
                <div class="col-lg-12 justify-content-center">
                  <p style="color: var(--primary); font-weight:bold;">Tarifas por persona en dólares americanos, sujetos a cambio sin previo aviso y disponibilidad</p>
                  <ul class="level3">
                    <li class="pt-30"><b>El Plan incluye:</b> 
                      <ul class="level2">
                        <li>Tiquetes aéreos BOG SNU BOG en vuelo Chárter.</li>
                        <li>1 maleta de 20kl en bodega y morral o bolso personal de 10kl debajo de la silla.</li>
                        <li>Traslados aeropuerto hotel aeropuerto.</li>
                        <li>6 noches de alojamiento en el hotel seleccionado segun el plan todo incluido con desayunos, almuerzos, cenas, snacks, bebidas ilimitadas alcohólicas y no alcohólicas.</li>
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
                  </ul>
                </div>
              </div>
            ',
            'charter_itinerary'     => 'charters/santa_clara_itinerary.csv',
            'charter_conditions'    => '
              <div class="row justify-content-center white-bg">
                <div class="col-lg-12 justify-content-center">
                  <p class="text-justify my-25">
                    <span style="color: var(--primary); font-weight: bold;">NOTA:</span> Los horarios de salida y llegada son estimados, pueden sufrir cambios, si así la Aeronáutica Civil del país involucrado lo dispone; en todo caso, les será informado sobre cualquier cambio de itinerario en el momento que suceda.
                    <h5 class="sub-title my-25">Sobre las emisiones de los tiquetes:</h5>
                    Por ser vuelo chárter, los tiquetes serán emitidos 72 A 48 horas antes de la salida del vuelo.
                  </p>                  
                  <ul class="level3">
                    <li class="pt-30"><b>Condiciones Generales de <b>__COMERCIAL_NAME__</b>:</b> 
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
                        <li>Enviar solicitud con datos de reserva, fechas de viaje seleccionada, hoteles, cantidad de pasajeros y acomodación al correo <a href="mailto:Lcorrea@doitviajesyturismo.com?subject=Solicitud con Datos de Reserva&cc=operaciones@doitviajesyturismo.com&body=__RAW_BODY__" target="_blank" rel="noopener noreferrer">Lcorrea@doitviajesyturismo.com</a> y <a href="mailto:operaciones@doitviajesyturismo.com?subject=Solicitud con Datos de Reserva&cc=Lcorrea@doitviajesyturismo.com&body=__RAW_BODY__" target="_blank"  rel="noopener noreferrer">operaciones@doitviajesyturismo.com</a> </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            ',
            'status'                => '1'
          ],
          [ 
            'charter_titulo'        => 'Chárter a Santa Clara Combinado Habana - Cayo Las Brujas',
            'charter_subtitulo'     => 'combinado CSM & HAV',
            'charter_resumen'       => 'Disfruta de un grandioso plan combinando las playas del grandioso Cayo Las Brujas, con la cultura e historia de Santa Clara y La Habana, 2 ciudades llenas de historia, música y el mejor sabor Cubano.',
            'charter_lang'          => 'es',
            'charter_slug'          => 'charter-a-santa-clara-combinado-habana-cayo-las-brujas',
            'charter_image'          => 'charters/santa_clara_combinado.jpg',
            'charter_file'          => 'https://drive.google.com/file/d/1YRP-22P7IOSbiwc_ebx-iDdhPZPfZvC0/view?usp=sharing',
            'charter_file_type'     => 'url',
            'charter_favorito'      => '1',
            'charter_orden'         => '1',
            'charter_plans'         => 'charters/santa_clara_combinado_plans.csv',
            'charter_description'   => '
              <div class="row justify-content-center white-bg">
                <div class="col-lg-12 justify-content-center">
                  <p style="color: var(--primary); font-weight:bold;">Tarifas por persona en dólares americanos, sujetos a cambio sin previo aviso y disponibilidad</p>
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
                        <li>En el traslado desde La Habana al aeropuerto de Santa Clara se realizará una parada en Santa Clara para que los pasajeros tomen su cena y luego continuar el traslado al aeropuerto para tomar el vuelo de regreso a su país, esta cena no esta incluida en la tarifa.</li>
                        <li>El checkin en el hotel de Habana es a las 12 del día, pero seguirán haciendo uso de las instalaciones comunes del hotel hasta la hora indicada para el traslado.</li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            ',
            'charter_itinerary'     => 'charters/santa_clara_combinado_itinerary.csv',
            'charter_conditions'    => '
              <div class="row justify-content-center white-bg">
                <div class="col-lg-12 justify-content-center">
                  <p class="text-justify my-25">
                    <span style="color: var(--primary); font-weight: bold;">NOTA:</span> Los horarios de salida y llegada son estimados, pueden sufrir cambios, si así la Aeronáutica Civil del país involucrado lo dispone; en todo caso, les será informado sobre cualquier cambio de itinerario en el momento que suceda.
                    <h5 class="sub-title my-25">Sobre las emisiones de los tiquetes:</h5>
                    Por ser vuelo chárter, los tiquetes serán emitidos 72 A 48 horas antes de la salida del vuelo.
                  </p>                  
                  <ul class="level3">
                    <li class="pt-30"><b>Condiciones Generales de <b>__COMERCIAL_NAME__</b>:</b> 
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
                        <li>Enviar solicitud con datos de reserva, fechas de viaje seleccionada, hoteles, cantidad de pasajeros y acomodación al correo <a href="mailto:Lcorrea@doitviajesyturismo.com?subject=Solicitud con Datos de Reserva&cc=operaciones@doitviajesyturismo.com&body=__RAW_BODY__" target="_blank" rel="noopener noreferrer">Lcorrea@doitviajesyturismo.com</a> y <a href="mailto:operaciones@doitviajesyturismo.com?subject=Solicitud con Datos de Reserva&cc=Lcorrea@doitviajesyturismo.com&body=__RAW_BODY__" target="_blank"  rel="noopener noreferrer">operaciones@doitviajesyturismo.com</a> </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            ',
            'status'                => '1'
          ],
        ],
      ],
    ];
    $this->db->table($this->tableName3)->emptyTable();
    $this->db->table($this->tableName2)->emptyTable();
    $this->db->table($this->tableName)->emptyTable();
    $this->db->query("ALTER TABLE {$this->tableName3} AUTO_INCREMENT = 1;");
    $this->db->query("ALTER TABLE {$this->tableName2} AUTO_INCREMENT = 1;");
    $this->db->query("ALTER TABLE {$this->tableName} AUTO_INCREMENT = 1;");
    foreach ($data as $row) {
      $tipo = isset($row['ofertas']) ? 'oferta' : 'charter';
      $this->tableName2 = $tipo == 'oferta' ? 'ofertas' : 'charters';
      $ofertas = $row[$tipo . 's'];
      unset($row[$tipo . 's']);
      $done = $this->db->table($this->tableName)->insert($row, true);
      $id = $this->db->insertID();
      if($done) {
        foreach ($ofertas as $oferta) {
          $oferta[$tipo . '_categoria'] = $id;
          $idD = $this->db->table($this->tableName2)->insert($oferta);
        }
      }
    }
  }
}
