<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AditionalPagesSeeder extends Seeder {
  protected $tableName = 'aditional_pages';
  public function run() {
    $data = [
      //es
      //sobre-nosotros
      [
        'title'        => 'Sobre Nosotros',
        'subtitle'     => 'Más',
        'slug'        => 'sobre-nosotros',
        'lang'        => 'es', 
        'status'      => '1',
        'page_data'   => '
          <p class="text-justify"><b>__COMERCIAL_NAME__</b>, es una agencia creada para motivar a los diferentes actores de la sociedad moderna a cumplir sus sueños de viajes y a contribuir efectivamente para hacerlos realidad. Nuestro objetivo principal es ofrecer una experiencia emocional positiva al cliente que consulte nuestra agencia de viajes para cumplir un objetivo de viaje o un sueño vacacional. Garantizar un producto o servicio innovador de acuerdo con las condiciones psicobiológicas del comprador: Su vida, su trabajo, su entorno y las expectativas que tiene por cumplir.
          <br/><br/>
          Estar a la vanguardia en tecnología y herramientas de comunicación y distribución, para cumplir con las necesidades de las nuevas generaciones nacionales o internacionales, proporcionando todo lo relacionado con pasajes aéreos, terrestres, hoteles, servicios complementarios que van desde turismo especializado y receptivo, organización de eventos, congresos nacionales e internacionales, excursiones diseñadas para colegios y fondos de empleados, viajes culturales y temáticos, turismo estudiantil entre otros.</p>
          <div class="col-lg-10 offset-lg-1">
            <h5>Otros Objetivos</h5>
            <div class="row our-wrapper">
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Garantizar</p>
                    <p class="text">Garantizar servicio y atención a los pasajeros 7x24</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Dar Solucón</p>
                    <p class="text">Dar solución a los problemas que se puedan presentar de una manera amable y oportuna</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Cumplir</p>
                    <p class="text">Cumplir con los servicios contratados por el cliente</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Realizar</p>
                    <p class="text">Realizar seguimiento al viaje del cliente y servicio de postventa</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row our-wrapper">
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Tener Conocimiento</p>
                    <p class="text">Tener pleno conocimiento de los destinos a comercializar, países, geografía, actividades recreativas, restaurantes, moneda, entre otros.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Administrar</p>
                    <p class="text">Administrar de una manera organizada y responsable, los recursos de la empresa, llevar una correcta y sana contabilidad, tributaria y relación con proveedores</p>
                  </div>
                </div>
              </div>              
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Cumplir</p>
                    <p class="text">Desarrollar el producto especializado Turismo de Salud y Bienestar, garantizando las mejores negociaciones con Clínicas de estética, Coach de Salud, Sitios de relax naturales, enfermeras, transportadores entre otros.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Contratar Servicios</p>
                    <p class="text">Contratar servicios de calidad con los diferentes proveedores aerolíneas, hoteles, cruceros, transporte terrestre, tarjetas de asistencia, operadores internacionales, centros de negocios y/o convenciones, entre otros.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row our-wrapper">
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Implementar</p>
                    <p class="text">Implementar herramienta tecnológica de comercialización que facilita el proceso compra del cliente.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Realizar</p>
                    <p class="text">Realizar buenas negociaciones con proveedores, para garantizar un producto bueno, estructurado e innovador</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Realizar Comunidad</p>
                    <p class="text">Realizar comunidad a través de RRSS, informando más sobre destinos, tendencias de viajes y turismo de salud y bienestar.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        ',
      ],
      //Mision
      [
        'title'        => 'Misión',
        'subtitle'     => 'Nuestra Misión',
        'slug'        => 'mision',
        'lang'        => 'es', 
        'status'      => '1',
        'page_data'   => '<p class="text-justify">Ser una agencia de viajes que participe con el desarrollo sostenible y responsable del turismo en Colombia, con pasión, ofreciendo producto de calidad garantizada, prestando un servicio eficiente, amable y respetuoso que garantice el cumplimento de los sueños y objetivos del cliente</p>',
      ],
      //Vision
      [
        'title'        => 'Visión',
        'subtitle'     => 'Nuestra Visión',
        'slug'        => 'vision',
        'lang'        => 'es', 
        'status'      => '1',
        'page_data'   => '<p class="text-justify">En 5 años, ser una agencia de viajes y líder en el desarrollo, promoción y comercialización en el Turismo de Salud y Bienestar, en Colombia, principalmente en ciudades como Bogotá, Cali y Medellín. Y a través de portales transaccionales en países como Estados Unidos y Europa.</p>',
      ],
      //Privacidad
      [
        'title'        => 'Privacidad',
        'subtitle'     => 'Nuestra Políticas',
        'slug'        => 'privacidad',
        'lang'        => 'es', 
        'status'      => '1',
        'page_data'   => '
          <div class="col-12">
            <span class="mt-5 text-center" style="font-size: 0.8rem !important;"><b>Actualizado</b>: __PRIVACY_DATE__</span>
          </div>
          <div class="col-lg-12">
            <div id="privacidad-section1" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Política y Aviso de Privacidad de Datos Personales</h4>
              <p class="text-justify">
                En cumplimiento de las normas sobre manejo de datos personales y privacidad, <b>__COMERCIAL_NAME__</b>. Solicita leer esta política antes de suministrar su información personal.
                <br/><br/>Ante cualquier objeción a esta política, deberá dejar de usar El Sitio (<a href="__BASE_URL__" target="_blank">__BASE_URL__</a>).
                <br/><br/>La política de tratamiento de datos personales y de privacidad forma parte de los Términos y Condiciones de este sitio web (<a href="__BASE_URL__" target="_blank">__BASE_URL__</a>) que son vinculantes para todos los usuarios.
                <br/><br/>La política de <b>__COMERCIAL_NAME__</b>, es respetar y proteger su privacidad, por lo tanto <b>__COMERCIAL_NAME__</b> toma las medidas necesarias para mantener la confidencialidad de la información que nos brinda y para proteger sus datos personales.
              </p>              
            </div>
            <div id="privacidad-section2" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Información Personal Que Recopilamos</h4>
              <p class="text-justify">
                Podemos recopilar cualquier información concerniente a su nombre, dirección, correo electrónico, número de teléfono, fecha de nacimiento, métodos de comunicación preferidos, datos financieros como tarjeta de crédito, información de viajero frecuente, antecedentes de viajes, datos de acompañantes, preferencias, datos de itinerarios y de otras reservaciones, entre otros.
                <br/><br/>Todos los datos personales y/o patrimoniales que sean proporcionados serán tratados bajo los lineamientos que exigen las leyes colombianas y demás regulaciones emitidas por las autoridades competentes a través de medidas de seguridad administrativas, técnicas y físicas implementadas, contra daño, pérdida, alteración, destrucción o uso, acceso o tratamiento no autorizado.
              </p>              
            </div>
            <div id="privacidad-section3" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Finalidad y Uso Que Se Dará a Su Información Personal</h4>
              <p class="text-justify">
                Utilizamos su información personal para proveer nuestros servicios y los de las empresas del Grupo que usted solicite, tales como cotizaciones, reservas hoteleras, compra de paquetes de vacacionales, de tiempo compartido, spas, gimnasios, entretenimiento estacionamientos, y en general para ofertar y vender servicios turísticos y sus actividades asociadas o complementarias, así como para realizar encuestas, rastreo y ofertas de marketing, boletines informativos, entrega de premios y concursos desarrollados por parte de <b>__COMERCIAL_NAME__</b>.
              </p>              
            </div>
            <div id="privacidad-section4" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Confidencialidad</h4>
              <p class="text-justify">
                La confidencialidad de los datos personales y/o patrimoniales están garantizados mediante procedimientos, controles, tecnologías y auditorías implementadas para mantenerlos seguras y protegidas de cualquier daño, perdida, alteración, y uso no autorizado.
                <br/><br/>Información sensible y relacionada con su salud, raza u origen étnico, sus opiniones políticas, creencias religiosas u otras, antecedentes penales, condiciones de salud o pertenencia a grupos o asociaciones gremial, no se solicita salvo que sea su iniciativa y voluntad entregarla para satisfacer alguna necesidad particular suya. Esta información se maneja bajo los mismos estándares y controles de confidencialidad.
                <br/><br/>Solo las personas competentes y autorizadas tendrán acceso limitado y controlado a las fuentes de datos.
                <br/><br/>Los empleados y/o terceros se encuentran obligados mediante contratos de privacidad para garantizar la privacidad de los datos. Dichas obligaciones subsisten con posterioridad a terminar las relaciones con la empresa.
              </p>              
            </div>
            <div id="privacidad-section5" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Cómo Compartimos La Información Personal</h4>
              <p class="text-justify">
                Como empresa <b>__COMERCIAL_NAME__</b>, podemos compartir su información personal con otros miembros de nuestro grupo empresarial, franquiciados, hoteles que administramos, o prestadores de servicios que podrían encontrarse en otro país diferente al suyo, con el único fin de procurar su mayor satisfacción en la prestación del servicio adquirido.
                <br/></br/>De vez en cuando nos asociaremos con otras empresas para brindar promociones, productos y servicios de marcas compartidas o con patrocinios compartidos, así podremos compartir su información con nuestro copatrocinador. <br/></br/>También compartiremos la información personal con proveedores de servicios como spas, campos de golf, restaurantes, mensajería, transporte y otras actividades relacionadas y necesarias al servicio turístico, paquetes de pasajes aéreos y automóvil de alquiler, la comunicación de noticias y la entrega de materiales promocionales por medio del correo electrónico o correo directo, el procesamiento de transacciones con tarjeta de crédito, servicios de mejora y la administración de sorteos y designación de premios y la realización de encuestas a clientes.
                <br/></br/>Podemos compartir información personal con instituciones de crédito, cuando sea requerida para realizar transacciones y aclaraciones respecto al pago de los servicios que le fueron prestados.
                <br/></br/>En todos los eventos, los Proveedores o cualquier tercero receptor de los datos personales cuya transferencia es autorizada, asume las mismas obligaciones que corresponden al responsable de los datos y se encuentran obligados mediante contratos de privacidad y confidencialidad a garantizar a su vez la privacidad de los datos en su posesión.
                <br/></br/>La transferencia efectuada a sociedades controladoras, subsidiarias o afiliadas, o a una sociedad matriz o a cualquier sociedad del mismo grupo que opere bajo los mismos procesos y políticas internas, pueden llevarse a cabo sin necesidad de nuevo consentimiento del titular.
                <br/></br/>En caso de venta, fusión, consolidación, liquidación, o trasferencia de esta sociedad o de las empresas del grupo a un tercero, los datos personales serán transferidos a dicho tercero sin necesidad de una nueva autorización bajo la condición del deber de protección y confidencialidad.
              </p>              
            </div>
            <div id="privacidad-section6" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Enlaces con Sitios Web de Terceros</h4>
              <p class="text-justify">
                Nuestro sitio puede contener vínculos con sitios Web de terceros. Tenga en cuenta que no somos responsables de la recopilación, uso, mantenimiento, revelación o participación de los datos e información que realicen tales terceros. Si provee información en sitios de terceros, se aplican la política de privacidad y los términos y condiciones del servicio de dichos sitios.
              </p>              
            </div>
            <div id="privacidad-section7" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Protección de La Información Personal</h4>
              <p class="text-justify">
                <b>__COMERCIAL_NAME__</b>, tomará las medidas necesarias para: <br/> 
              </p>
                <ol class="text-justify px-5">
                    <li>Proteger la información personal recopilada por medio de un acceso no autorizado, revelación, alteración o destrucción. </li>
                    <li>Mantener la información personal confiable y actualizada de acuerdo a la ley vigente. </li>
                </ol>
              <p class="text-justify">
                También pretendemos exigir que nuestros afiliados y proveedores de servicios realicen el esfuerzo de mantener la confiabilidad de su información personal. Para las transacciones en línea, usamos tecnología de seguridad para proteger la información personal que nos transmita a través de nuestro sitio. Desafortunadamente, ningún sistema de seguridad o de transmisión de datos a través de Internet puede garantizar que sea totalmente seguro.
                <br/><br/>Por su propia protección y privacidad no incluya en los mensajes de correo electrónico que nos envíe la información personal que considere confidencial, ni datos de tarjetas de crédito.
              </p>              
            </div>
            <div id="privacidad-section8" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Modificaciones Sobre la Política</h4>
              <p class="text-justify">
                No haremos uso de los datos personales de manera diferente a la autorizada.
                <br/><br/>En el evento en que requiramos de los datos personales para una finalidad distinta a la acá consentida pondremos a disposición un nuevo aviso de privacidad con las características del nuevo tratamiento.
                <br/><br/>Podemos modificar esta Política de vez en cuando. Cuando hagamos cambios significativos o sustanciales, estas se comunicarán en la página de inicio de nuestro sitio web antes de ser implementadas. Sabrá cuando esté actualizada esta Política por la fecha que aparezca en el respectivo margen de información.
                <br/><br/>Cualquier cambio a nuestra Política se pondrá en vigencia cuando se envíe la política revisada al sitio. 
                <br/><br/>El uso de este sitio a partir de estos cambios constituye su aceptación de la Política revisada que entre en efecto.
              </p>              
            </div>
            <div id="privacidad-section9" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Derechos del Titular</h4>
              <p class="text-justify">
                En todo momento, como titular podrá ejercer los derechos de acceso, rectificación, cancelación u oposición al tratamiento de sus Datos, enviando su solicitud a través del correo electrónico <a href="mailto:__CONTACT_EMAIL__">__CONTACT_EMAIL__</a> presentando la solicitud por escrito dirigido al representante legal de <b>__COMERCIAL_NAME__</b>.
              </p>              
            </div>
          </div>
          <div class="col-lg-6">
          </div>
        ',
      ],
      //Sostenibilidad
      [
        'title'        => 'Sostenibilidad',
        'subtitle'     => 'Turismo Sostenible',
        'slug'        => 'sostenibilidad',
        'lang'        => 'es', 
        'status'      => '1',
        'page_data'   => '
          <div id="sostenibilidad-section0" class="col-lg-12 mt-5"> 
            <h3 class="text-center">Turismo Sostenible</h3>
            <p class="text-justify">
              El turismo sostenible persigue desarrollar su actividad generando un impacto mínimo sobre el medioambiente. La clave principal es que la explotación de un recurso sea por debajo del límite de renovación del mismo. Es decir, se trata de fomentar un turismo respetuoso con el ecosistema, con mínimo impacto sobre el medioambiente y la cultura local. Además, el aspecto económico busca la generación de empleo e ingresos de la población autóctona.
            </p>
          </div>
          <div id="sostenibilidad-section1" class="col-lg-12 mt-5"> 
            <h3 class="text-center">Política de Sostenibilidad</h3>
            <p class="text-justify">
              La Agencia __COMERCIAL_NAME__ ubicada en Bogotá D.C., se compromete a mitigar todos los impactos negativos que afectan al entorno natural por el desarrollo de su operación y a optimizar el uso de los recursos naturales, promocionando buenas practicas de los turistas en parques y zonas naturales, y dando a conocer dichas zonas naturales en diferentes fuentes de comunicación.<br>

              Así mismo se compromete a promover y conservar el patrimonio cultural de la regiones y destinos en las cuales tiene actividad comercial, divulgando de manera responsable las tradiciones y atractivos turísticos de la región, gastronomía artesanías y bienes inmuebles de importancia cultural.<br>

              También se compromete a proteger y a apoyar la comunidad de los destinos implementando buenas prácticas sostenibles, respetando los derechos de todos los actores y velando por el cumplimiento de sus deberes; previniendo impactos negativos como la ESCNNA (Explotación Sexual Y Comercial De Niños, Niñas Y Adolescentes) asociada a los viajes y el turismo. Para esto contará con una base de colaboradores y proveedores locales comprometidos con la conservación del ambiente la cultura y el desarrollo social, contratados bajo una política de contratación sin discriminación.
            </p>
          </div>
          <div id="sostenibilidad-section2" class="col-lg-12 mt-5"> 
            <h3 class="text-center">Código de Conducta</h3>
            <p class="text-justify">
              De acuerdo a los principios de la Política de Sostenibilidad de la Agencia de Viajes, se establece el siguiente código de conducta donde se estipulan las normas mínimas y el compromiso corporativo de cumplirlas y de exigir su cumplimiento a sus colaboradores, clientes y proveedores de bienes y servicios:
            </p><br>
            <ol class="col-lg-10 offset-1 text-justify">
              <li>Abstenerse de ofrecer en los programas de promoción turística y en planes turísticos, expresa o subrepticiamente, planes de explotación sexual de niños, niñas y adolescentes.</li>
              <li>Abstenerse de dar información a los turistas, directamente o por interpuesta persona acerca de lugares donde se coordinen o donde se practique explotación sexual comercial de niños, niñas y adolescentes.</li>
              <li>Abstenerse de conducir a los turistas, directamente o a través de terceros a establecimientos o lugares donde se practique la explotación sexual comercial de niños, niñas, así como conducir a éstos a los sitios donde se encuentran hospedados los turistas, incluso si se trata de lugares localizados en altamar, confines de explotación sexual comercial de niños, niñas y adolescentes.</li>
              <li>Abstenerse de facilitar vehículos en rutas turísticas con fines de explotación o de abuso sexual con niños, niñas y adolescentes.</li>
              <li>Impedir el ingreso de niños, niñas y adolescentes a los hoteles o lugares de alojamiento y hospedaje, bares, negocios similares y demás establecimientos en los que se presten servicios turísticos, con fines de explotación o de abuso sexual.</li>
              <li>Adoptar las medidas tendientes a impedir que el personal vinculado a cualquier título con la empresa, ofrezca servicios turísticos que permitan actividad sexual con niños, niñas y adolescentes.</li>
              <li>Proteger a los niños, niñas y adolescentes nacionales o extranjeros de toda forma de explotación y violencia sexual originada por turistas nacionales o extranjeros.</li>
              <li>Denunciar ante el Ministerio de Comercio, Industria y Turismo, y demás autoridades competentes, los hechos de los cuales se hubiere tenido conocimiento por cualquier medio, así como la sospecha de estos, relacionados con explotación sexual de niños, niñas y adolescentes y asegurar que al interior de la empresa existan canales para denunciar ante las autoridades competentes tales hechos.</li>
              <li>Diseñar y divulgar al interior de la empresa y con sus proveedores de bienes y servicios, una política en la que el prestador establezca medidas para prevenir y contrarrestar toda forma de explotación sexual de niños, niñas y adolescentes enviajes y turismo.</li>
              <li>Capacitar a todo el personal vinculado y que se vaya vinculando a la empresa, así como a los proveedores que por la naturaleza de sus actividades tengan contacto con turistas, respecto a la prevención de la explotación sexual comercial de niños, niñas y adolescentes. </li>
              <li>Informar a sus usuarios sobre las consecuencias legales en Colombia de la explotación y el abuso sexual de niños, niñas y adolescentes.</li>
              <li>Rechazar la discriminación de raza o género.</li>
              <li>Difundir la importancia de la conservación y aprovechamiento de manera adecuada de la riqueza natural y cultural con que Colombia cuenta.</li>
              <li>Proteger la fauna y flora de los sitios que se visiten producto de actividad es turísticas.</li>
              <li>Proteger y resaltar los valores de los atractivos naturales de Colombia.</li>
              <li>Divulgar los conceptos de sostenibilidad con los que trabaja la empresa a los clientes, proveedores y colaboradores.</li>
              <li>Exigir a nuestros proveedores la seguridad física en la prestación de los servicios que ofrecen.</li>
            </ol>
          </div>
          <div id="sostenibilidad-section3" class="col-lg-12 mt-5"> 
            <h3 class="text-center">Objetivos para el turismo sostenible</h3>
            <p class="text-justify">
              En 2005 la Organización Mundial del Turismo y el Programa de Naciones Unidas para el Medio Ambiente establecieron 12 objetivos que constituyen un modelo:
            </p>
            <ol class="col-lg-10 offset-lg-1 text-justify">
              <li><b>Riqueza cultural:</b> respetar y mejorar el patrimonio histórico o respetar la cultura local y su carácter distintivo es fundamental.</li>
              <li><b>Integridad del ecosistema:</b> mantener y mejorar los paisajes, los núcleos urbanos o rurales. Se trata de evitar la degradación del entorno.</li>
              <li><b>Diversidad biológica:</b> apoyar la conservación de áreas naturales y minimizar su daño.</li>
              <li><b>Eficiencia de los recursos:</b> consiste en minimizar al máximo el uso de recursos escasos y no renovables.</li>
              <li><b>Pureza ambiental:</b> reducir la contaminación al máximo tanto en aire, agua y tierra como en reducir la generación de residuos.</li>
              <li><b>Control local:</b> se trata de involucrar a la población local en la toma de decisiones que conciernen a la gestión y el desarrollo futuro del turismo en su área.</li>
              <li><b>Bienestar de la comunidad:</b> mantener y mejorar la calidad de vida del lugar anfitrión. Para ello es necesario dotar a estas comunidades de los recursos necesarios y que puedan necesitar, tanto a nivel logístico en infraestructuras como servicios. Es fundamental que esto no suponga una degradación o explotación del ecosistema ni de su sociedad.</li>
              <li><b>Económico:</b> asegurar la viabilidad económica para que haya prosperidad y beneficios a largo plazo.</li>
              <li><b>Prosperidad local:</b> orientar y maximizar la contribución del turismo a la prosperidad económica del destino anfitrión.</li>
              <li><b>Calidad del empleo:</b> consiste en fortalecer la calidad de los puestos de trabajo, tanto cualitativamente como numéricamente. Además de asegurar las condiciones se tiene en cuenta que no exista ningún tipo de discriminación por raza, género, discapacidad u otras formas.</li>
              <li><b>Equidad social:</b> consiste en que haya una justa distribución de la riqueza generada por el turismo en toda la comunidad receptora.</b>
              <li><b>Satisfacción del visitante:</b> proporcionar una experiencia segura y satisfactoria de todos los visitantes sin ningún tipo de discriminación social.</li>
            </ol>
          </div>
        ',
      ],
      //Políticas
      [
        'title'        => 'Terminos y Condiciones',
        'subtitle'     => 'Nuestra Políticas',
        'slug'        => 'politicas',
        'lang'        => 'es', 
        'status'      => '1',
        'page_data'   => '
          <div class="col-12">
            <span class="mt-5 text-center" style="font-size: 0.8rem !important;"><b>Actualizado</b>: __PRIVACY_DATE__</span>
          </div>
          <div class="col-lg-12">
            <div id="politicas-section1" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Definiciones</h4>             
                <ol type="a" class="text-justify px-5">
                  <li><b>Hotel</b>: Se entiende por establecimiento hotelero el conjunto de bienes destinados por la persona jurídica a prestar el servicio de alojamiento no permanente inferior a 30 días, con o sin alimentación y servicios básicos y/o complementarios o accesorios de alojamiento, mediante contrato de hospedaje.</li>
                  <li><b>Contrato de Hospedaje</b>:Es un contrato de arrendamiento, de carácter comercial y de adhesión, que una empresa dedicada a esta actividad celebra con el propósito principal de prestar alojamiento a otra persona denominada huésped, mediante el pago del precio respectivo, por un plazo inferior a 30 días.</li>
                  <li><b>Agencia de Viajes</b>:Empresa asociada al turismo, cuyo oficio es la intermediación, organización y realización de proyectos, planes e itinerarios, elaboración y venta de productos turísticos entre sus clientes y determinados proveedores de viajes, para este documento es <b>__COMERCIAL_NAME__</b></li>
                  <li><b>Agencias Externas</b>:Agencias Mayoristas o Minoristas, Freelance, Fondos de Empleados, Cooperativas que a través de la Agencia de Viajes venden Planes de Viajes. </li>
                  <li><b>PQR</b>:Petición, queja o reclamo que un cliente presenta y que necesariamente debe ser documentada y tener un tiempo de respuesta no superior a 15 días hábiles.</li>
                  <li><b>Asesor de Servicio al Cliente</b>:Responsable de entregar toda la información solicitada por el Cliente/Pasajero/Huésped, para gestionar y atender todas las dudas oportunamente de conformidad con las políticas y procedimientos de la Agencia de Viajes, brindándole una excelente experiencia de servicio.</li>
                  <li><b>Cliente/Pasajero/Huésped</b>:Persona natural que se encuentra viajando de un lugar a otro y que ha pagado un plan de viajes.</li>
                  <li><b>Aerolínea</b>:Compañía dedicada al transporte de pasajeros o carga por avión.</li>
                  <li><b>E-TKT</b>:Documento electrónico emitido por una aerolínea para hacer efectivo los servicios de transporte aéreo adquiridos.</li>
                  <li><b>Temporadas</b>:Periodos determinadas del año, en la cual aplican condiciones y tarifas diferenciales previamente establecidas.</li>
                  <li><b>Habitaciones</b>:Parte del espacio de un hotel separada de las demás, destinada para el descanso de los huéspedes.</li>
                  <li><b>Conexiones</b>:Cambio de avión que hace un cliente en una ciudad o ciudades intermedias, antes de llegar a su destino final de viaje.</li>
                  <li><b>Reserva</b>:Separación de cupos aéreos y/o hoteleros en una fecha determinada para un Cliente por un periodo establecido de tiempo.</li>
                  <li><b>Reserva confirmada</b>:Separación de cupos aéreos y/o hoteleros en una fecha determinada para un cliente por un periodo establecido de tiempo. Ésta reserva no tiene abonos, o, depósitos realizados, o, no cumple con el plan de pagos establecido.</li>
                  <li><b>Reserva reconfirmada</b>:Separación de cupos aéreos y/o hoteleros para un cliente en una fecha determinada hasta que se preste el servicio, esta reserva tiene abonos y cumple con el plan de pagos establecido, o, el pago total realizado.</li>
                  <li><b>Reserva cancelada</b>:Anulación de una separación de cupos aéreos y/o hoteleros para un Cliente en una fecha determinada, para esta reserva se pudo recibir o no abonos o depósitos establecidos.</li>
                  <li><b>Voucher</b>:Documento que contiene todos los datos de la reserva reconfirmada con pago total de un servicio turístico y posee un código de reserva, el cual debe ser presentado por el cliente a los prestadores del servicio en los cuales tenga reconfirmada su reserva para hacer efectivo el uso de los servicios comprados.</li>
                  <li><b>No show</b>:No presentación de un Cliente a un plan previamente comprado sin dar aviso. No presentarse al Hotel puede generar la pérdida del plan adquirido.</li>
                  <li><b>Reembolso</b>:Operación económica mediante la cual un cliente se le devuelve parte o la totalidad del dinero que había entregado previamente como pago de un plan de Viajes.</li>
                  <li><b>Tarjeta de turismo</b>:Impuesto cobrado en algunos países y/o destinos para permitir la entrada de personas no residentes a su territorio por un periodo temporal.</li>
                  <li><b>Destino</b>:Área, lugar o zona a donde va dirigido un cliente por el cual compro un plan.</li>  
                  <li><b>Plan de viaje</b>:Es un conjunto de servicios turísticos que se comercializan de forma única y contiene servicios como alojamiento, alimentación, transporte y otros servicios, por el cual se paga un precio donde se contemplan la totalidad de servicios y no se establece un precio individual para cada servicio que se le presta.</li>
                  <li><b>Plan promocional o especial</b>:Ofrecimiento temporal de productos en condiciones especiales favorables o de manera gratuita como incentivo para el consumidor. Se entenderá́ también por promoción, el ofrecimiento de productos con un contenido adicional a la presentación habitual, en forma gratuita o a precio reducido y temporal. Así́ como el que se haga por el sistema de incentivos al consumidor, tales como sorteos, concursos y otros similares, en dinero, en especie o con acumulación de puntos.</li>
                  <li><b>Factura</b>:Corresponde al documento que confirma el pago total del Plan Turístico.</li>
                  <li><b>Penalidad</b>:Sanción económica causada por el incumplimiento de una o varias condiciones o circunstancias pactada con anterioridad, en el plan de viaje.</li>
                  <li><b>Servicios complementarios</b>:Servicios turísticos adicionales que no están incluidos en el plan turístico y que son opcionales por parte del usurario/viajero.</li>
                  <li><b>Receptivos</b>:Servicios adicionales como tours y traslados que se prestan en los diferentes destinos.</li>
                  <li><b>Tasa Representativa de Mercado ó TRM</b>:La tasa de cambio representativa del mercado (TRM) es la cantidad de pesos colombianos por un dólar de los Estados Unidos.</li>
                  <li><b>Central del Reservas</b>:Área encargada de administrar las habitaciones y tiquetes aéreos que se van a vender al cliente.</li>
                  <li><b>Cruce de cuentas</b>:Procedimiento de traslado de dinero de una reservación inicial a una nueva reserva tomada por el mismo pasajero.</li>
                  <li><b>Reversión</b>:Devolución del dinero directamente a la tarjeta de crédito del Cliente, por medio de la franquicia autorizada.</li>
                  <li><b>Exoneración</b>:Operación en la cual la Agencia de Viajes decide no cobrar las penalidades a las que haya lugar por un cambio o cancelación.</li>
                  <li><b>Churning</b>:Se refiere al proceso de crear y cancelar a partir de la tercera reserva un mismo segmento aéreo para el mismo pasajero independientemente del número del vuelo, lo cual puede generar cobros adicionales.</li>
                  <li><b>Retracto</b>:Derecho que le asiste al comprador de cancelar la compra y solicitar la devolución del dinero. Este derecho opera cuando un Cliente compre planes con tiquetes aéreos en el call center o a través de los sitios Web autorizados por la Agencia, siempre y cuando la cancelación la realice dentro de las 48 horas corrientes a la compra y al momento de su solicitud y la fecha de viaje exista un plazo mayor a 8 días calendario en el caso de vuelos domésticos o 15 días calendario en el caso de vuelos internacionales.</li>
                  <li><b>Desistimiento</b>:Derecho que le asiste al comprador de cancelar la compra y solicitar la devolución del dinero. Este derecho opera cuando un Cliente compra planes con tiquetes aéreos en cualquier canal de ventas antes de que éste inicie el viaje, siempre y cuando solicite este derecho hasta 24 horas antes del primer vuelo y la tarifa adquirida no sea promocional.</li>
                  <li><b>Sitio Web</b>:páginas autorizadas por <b>__COMERCIAL_NAME__</b>, para la distribución de paquetes turísticos.</li>
                </ol>             
            </div>
            <div id="politicas-section2" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Cláusula de Responsabilidad</h4>
              <p class="text-justify">
                <b>__COMERCIAL_NAME__</b>. Actúa como intermediario entre los usuarios y quienes proporcionan los servicios incluidos, tales como Aerolíneas, Hoteles y transportadores entre otros; <b>__COMERCIAL_NAME__</b>. Se responsabiliza por estructurar paquetes turísticos para facilitar al cliente la obtención de cupos aéreos y terrestres así́ como reservación de habitaciones, solicitar los servicios requeridos y contratarlos por cuenta del usuario de acuerdo con la disponibilidad de los mismos; todo, acorde con la información suministrada por los prestadores de servicio.<br>
                <b>__COMERCIAL_NAME__</b>, quedará eximida de las obligaciones contratadas en los casos de fuerza mayor o caso fortuito tales como accidentes, huelgas, asonadas, terremotos, fenómenos climáticos o naturales, condiciones de seguridad, factores políticos, negación de permisos de ingreso, asuntos de salubridad y/o cualquier otra circunstancia por fuera del control de la compañía tales como accidentes, dificultades mecánicas, daños a la(s) aeronave(s), condiciones meteorológicas adversas. Relacionamos algunos casos sin limitarnos a ellos:
              </p>
              <ol type="a" class="text-justify px-5">
                <li>Demoras en aeropuertos, retardo de vuelos, congestión en Hoteles, cuarentenas y demás circunstancias de fuerza mayor o caso fortuito que alteren el normal desarrollo de la prestación de los servicios turísticos, por lo que sí los prestadores de los servicios contratados no pudieran proporcionar parcial o totalmente los mismos, sólo se gestionará por parte del usuario el reembolso del importe que proceda con exclusión de cualquier otro compromiso.</li>
                <li>Accidentes, pérdidas o daños que sufran los clientes como consecuencia de imprudencia o inobservancia a las instrucciones y/o reglamentos que para el disfrute de su estancia, sean hechas por parte de las aerolíneas, hoteles o prestadores de los servicios turísticos. Daños, pérdidas y perjuicios ocasionados por descuidos, negligencias o no entrega en custodia de joyas y/o bienes de propiedad de los clientes.</li>
                <li>Es indispensable que el cliente verifique con el asesor si el destino al que desea viajar, exige el pago de impuestos de entrada y/o salida y si este rubro está incluido en el valor del plan. Si aplica y está incluido, el valor será́ discriminado dentro de los costos del plan. Los servicios aéreos son prestados por las aerolíneas con las cuales se tienen convenios; los terrestres que hacen parte del plan de viaje, son prestados por terceros operadores turísticos, que funcionan como personas jurídicas independientes de <b>__COMERCIAL_NAME__</b>. que responden directa e individualmente al viajero afectado por cada uno de los servicios prestados, en caso de perjuicios o daños.</li>
                <li>Es responsabilidad del usuario presentar toda su documentación original y vigente en el momento de disfrutar los servicios adquiridos. En caso de presentar pérdida de los servicios contratados por este motivo, <b>__COMERCIAL_NAME__</b>, no se hará́ responsable ni será́ exonerado del valor de las penalidades o la pérdida del plan vacacional. Los servicios incluidos en el plan adquirido, son responsabilidad de cada una de las compañías prestadoras de los mismos. <b>__COMERCIAL_NAME__</b>, solo actúa como agente o intermediario frente al cliente.</li>
              </ol>
            </div>
            <div id="politicas-section3" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Excepciones</h4>
              <ol type="1" class="text-justify">
                <li><b>__COMERCIAL_NAME__</b> no se hace responsable de la imposibilidad de la prestación de los servicios adquiridos en eventos de caso fortuito o fuerza mayor.</li>
                <li><b>__COMERCIAL_NAME__</b> se reserva el derecho de hacer modificaciones al plan o servicio turístico contratado en eventos de caso fortuito o fuerza mayor.</li>
                <li><b>__COMERCIAL_NAME__</b> no se hace responsable por los cambios que efectúen los prestadores de los servicios contratados o por imprevistos tales como:
                  <ol style="list-style-type:circle;" class="text-justify px-5">
                    <li>Demoras en aeropuertos, retardo de vuelos, congestión en Hoteles, cuarentenas y demás circunstancias de fuerza mayor o caso fortuito que alteren el normal desarrollo de la prestación de los servicios turísticos, por lo que, sí dichos prestadores de los servicios contratados no pudieran proporcionar parcial o totalmente sus servicios para los cuales fueron contratados, sólo se gestionará el reembolso del importe que proceda con exclusión de cualquier otro compromiso.</li>
                    <li>Accidentes, pérdidas o daños que sufran los clientes como consecuencia de imprudencia o inobservancia a las instrucciones y/o reglamentos que para el disfrute de su estancia, establecidas por parte de las aerolíneas, hoteles o prestadores de los servicios turísticos.</li>
                    <li>Daños, pérdidas y perjuicios ocasionados por descuidos, negligencias o no entrega en custodia de joyas y/o bienes de propiedad de los clientes.</li>
                  </ol>
                </li>
                <li><b>__COMERCIAL_NAME__</b>. no se hace responsable de la imposibilidad de la prestación de los servicios contratados, cuando la causa sea atribuible al usuario.</li>
              </ol>
            </div>
            <div id="politicas-section4" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Condiciones Generales</h4>
              <ol type="a" class="text-justify px-5">
                <li>Todos los precios y tarifas publicados en este sitio, están sujetos a cambio, disponibilidad y vigencia sin previo aviso y a la regulación de regla tarifaria de planes hoteleros y aéreos. No obstante, la tarifa que se le confirme al momento de efectuar la compra del plan NO varía. Los impuestos, tasas y contribuciones que afecten las tarifas aéreas, hoteleras y demás servicios ofrecidos por <b>__COMERCIAL_NAME__</b>.  pueden sufrir variación en cualquier momento por disposición del Gobierno Nacional o ente extranjero, según el caso, las cuales deben ser asumidas por el huésped/cliente al momento de la expedición de los tiquetes aéreos, plan o paquete turístico. Aplican restricciones y condiciones para cada tarifa publicada según su vigencia.</li>
                <li>Las tarifas hoteleras dependen de la acomodación seleccionada. Los precios de los planes publicados están calculados con base en acomodación doble por persona. Cuando la acomodación solicitada sea en habitación triple o cuádruple, se debe verificar la tarifa según la acomodación. La acomodación en habitación sencilla tiene un recargo adicional y será liquidado directamente por la página WEB o por el personal de la oficina <b>__COMERCIAL_NAME__</b>. al momento de cotizar y reservar.</li>
                <li>Antes de adquirir los planes turísticos publicados en este portal web, se deberá consultar sus características y la acomodación máxima permitida por hotel.</li>
                <li>Las condiciones del servicio de alimentación incluido en el plan de viaje serán suministradas por el hotel desde el momento del check in y hasta el check out.</li>
                <li>Se respetan las tarifas de los planes turísticos vigentes al momento de la confirmación de la venta y pago del plan de viaje.</li>
                <li>Para los planes turísticos en los que se acuerde un plazo para su pago, se respetará el precio pactado a partir de la confirmación del pago dentro de los plazos establecidos. Las tasas aeroportuarias, así como la tarifa administrativa aplicable por la emisión del tiquete y los impuestos respectivos, estarán sujetos a lo señalado por cada aerolínea. La diferencia que se presente por la variación de dichas tasas deberá ser asumida por el comprador del plan.</li>
                <li>Las cotizaciones generadas muestran disponibilidad y valores en el momento de su emisión, éstas no implican la confirmación de cupos aéreos ni hoteleros. La cotización no garantiza la disponibilidad en la clase aérea o el hotel cotizado, ni las tarifas allí señaladas, si la reserva y pago de los servicios del plan de viaje se realiza posteriormente. La reconfirmación está sujeta al pago total de la reserva.</li>
                <li>Los planes que están empaquetados con tiquetes aéreos, terrestres o tarifas sólo hotel, y podrán ser reservados a través de las oficinas de <b>__COMERCIAL_NAME__</b>. y/o a través de la página __BASE_URL__. La estadía mínima en todos los planes es de dos (2) noches. Cada plan turístico incluye servicios particulares, por lo que se debe consultar la vigencia, los servicios y las condiciones y restricciones del Plan a adquirir. LAS TARIFAS NO INCLUYEN: llamadas telefónicas a larga distancia, servicio de lavandería, cajilla de seguridad, medicina, clases de buceo y los cargos que expresamente no se especifiquen en el plan que se adquiera.</li>
                <li>Para algunos planes pueden existir vigencias y condiciones particulares que exceptúan la aplicación de las condiciones específicas aquí descritas. En este sentido se debe consultar las características, las condiciones y las restricciones antes de adquirir el plan deseado.</li>
              </ol>             
            </div>
            <div id="politicas-section5" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Aplica A Todos Los Planes</h4>
              <ul class="text-justify">
                <li>Cuando al hotel se presenten menos personas de las reservadas y registradas en el voucher y en caso de que alguna de ellas deba acomodarse en habitación sencilla se le cobrará un suplemento que se descontará del valor total de la reserva y adicionalmente se aplicaran las penalidades a las que haya lugar, el cobro del suplemento de habitación sencilla no es exonerable.</li>
                <li>Las tarifas hoteleras dependen de la acomodación seleccionada. Consultar acomodación máxima permitida por hotel. Los impuestos, tasas, y contribuciones que afecten las tarifas aéreas, hoteleras y demás servicios ofrecidos por <b>__COMERCIAL_NAME__</b>. pueden sufrir variación en cualquier momento cuando por disposición del Gobierno Nacional, o, ente extranjero así́ lo determine, las cuales deben ser asumidas por el huésped/cliente al momento de la expedición de los tiquetes aéreos, plan, o, paquete turístico.</li>
                <li>Se consideran <b>"Infantes"</b> a los menores de 2 años y <b>"Niños"</b>, a los menores en edades comprendidas entre los 2 años cumplidos y los 11 años en la fecha de ingreso al hotel, a partir de los 12 años se considera adulto y se cobrara como tal. Es indispensable indicar las edades de los niños integrantes de un grupo familiar al solicitar la reserva y la confirmación de los servicios. </li>
                <li><b>Menores de edad (menores de 18 años)</b>:Si en la reserva viaja algún menor de edad en compañía de alguno de sus padres y con el fin de hacer el proceso de registro en el Hotel deberá́ presentar en la agencia <b>__COMERCIAL_NAME__</b> y en la recepción del Hotel la tarjeta de identidad, pasaporte vigente y  registro civil. Si el menor no viaja con sus padres, es requisito que presente copia del registro civil de nacimiento donde demuestre el parentesco, copia de la cédula de ciudadanía de los padres y el formato de autorización firmada y autenticada por ambos padres. El permiso de ingreso del menor al hotel, no sustituye el permiso de salida del país, y viceversa, el cual deberá́ tramitarse de acuerdo con lo exigido por la autoridad migratoria de cada país. El formato de autorización de viaje de menores en compañía de terceros, podrán descargarlo en <a href="__BASE_URL__/formato-de-autorizacion-menores" target="_balnk">__BASE_URL__/formato-de-autorizacion-menores</a>
                  <ul class="text-justify px-5">
                  <li><b>Nota 1</b>: En caso de que las personas que tengan la patria potestad de los menores no sean sus padres, el formato de autorización de viaje de menores deberá́ ser firmado y autenticado por las personas que tengan la patria potestad, y se deberá́ adjuntar adicionalmente copia autentica del documento que lo certifique.</li> 
                  <li><b>Nota 2</b>: En caso de que el Cliente no presente alguno de los documentos aquí́ indicados, el Hotel se reserva la facultad de no permitir el ingreso de la persona o personas del grupo que no presenten los documentos completos, sin derecho a reclamación o devoluciones.</li>
                  </ul>
                </li>
                <li>El consumo y distribución de alcohol está prohibido para menores de edad en todos los hoteles, Art 1 Ley 124/94 y demás normas vigentes.</li>
                <li><b>Los planes promocionales NO son modificables, endosables, revisables, ni reembolsables, en ninguna temporada.</b></li>
                <li>Las condiciones del servicio de alimentación incluido en el plan de viaje serán suministradas por el hotel desde el momento del check in y hasta el check out.</li>
                <li>Estadías a partir de dos (2) noches, para reservas de una (1) sola noche consultar tarifa vigente al momento de la reservación.</li>
                <li>Se respetan los precios vigentes al momento de la confirmación de la venta y correspondiente pago del plan de viaje dentro de los plazos informados, excepto por las tasas aeroportuarias, tarifa administrativa aplicables por la emisión del tiquete e impuestos respectivos los cuales dependen de la información que suministra la aerolínea.</li>
                <li>En caso de sobreventa hotelera, el hotel está en la libertad de reacomodar a los clientes en otros hoteles de similares características y misma categoría.</li>
                <li>Para algunos planes pueden existir vigencias y condiciones particulares que exceptúan la aplicación de las condiciones específicas aquí́ descritas, así́ por ejemplo: planes especiales o promocionales, que además no serán reembolsables, y que tendrán unas condiciones específicas las cuales se indicarán en el mismo plan y que podrán ser consultadas en <a href="__BASE_URL__" target="_blank">__BASE_URL__</a></li>
                <li>Las entidades gubernamentales o administrativas nacionales y/o extranjeras podrán imponer a los planes de viaje nuevos impuestos, tasas, contribuciones u otros cargos adicionales, los cuales pueden no estar contemplados en la venta de los servicios turísticos y deberán ser asumidos por el cliente.</li>
                <li>Si el usuario cancela la reserva y desea viajar en una fecha posterior, se le abonará al nuevo plan el valor pagado menos el valor de las penalidades, el nuevo plan estará́ sujeto a disponibilidad y diferencias de tarifa y se debe tramitar a través de un cruce de cuentas. La vigencia de las reservas es de 11 meses contados a partir de la emisión de los tiquetes aéreos y para planes solo hotel desde el momento del primer depósito en dinero, después de este periodo se genera la pérdida total del dinero.</li>
                <li>En cuanto al transporte terrestre se refiere, se entenderá́ que el viajero conserva consigo su equipaje y demás enseres personales, cualquiera que sea la parte del vehículo en que vayan colocados, y que se transportan por cuenta y riesgo del viajero. Se recomienda a los viajeros que estén presentes en todas las manipulaciones de carga y descarga de los equipajes.</li>
                <li>El documento <b>"factura"</b> muestra valores totales, desglosando los impuestos para todos los servicios.</li>
                <li>Los servicios incluidos en el plan adquirido, son responsabilidad de cada una de las compañías prestadoras de los mismos.</li>
                <li><b>__COMERCIAL_NAME__</b>. solo actúa como agente o intermediario frente al cliente.</li>
                <li><b>Planes promocionales No son modificables, endosables, revisables, ni reembolsables, en ninguna temporada. Estas condiciones también aplican para planes promocionales reservados mediante depósito. Todo cambio, modificación ó cancelación después de haber realizado el pago de la reserva genera penalidades y diferencias de tarifas las cuales deben ser asumidas por el cliente.</b></li>
                <li>En caso de solicitar reembolso, el mismo se realizará a la cuenta acreedora del titular de la factura de compra, sea cualquiera que sea el motivo se descontarán COP $100.000 correspondientes a la penalidad por gastos administrativos, más las penalidades que genere la aerolínea y el hotel.</li>
                <li><b>__COMERCIAL_NAME__</b>. está en contra del turismo sexual de menores y demás formas de explotación y violencia sexual, Art. 16 y ss. Ley 679/01 modificada por la Ley 1336/09; El incumplimiento a las medidas de protección establecidas en la Ley 679/01 contra la explotación, pornografía, turismo sexual y demás formas de abuso sexual con menores de edad, da lugar a las sanciones penales previstas en la ley y demás normas concordantes.</li>
                <li>Para cambios de acomodación, se debe cobrar el suplemento de habitación  y adicionalmente se aplicarán las penalidades a las que haya lugar, el cobro del suplementos de habitación no es exonerable.</li>
              </ul>
            </div>
            <div id="politicas-section6" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Penalidades Para Todos Los Planes</h4>
              <p class="text-justify">
                Cuando el usuario de los servicios turísticos solicite modificaciones y/o cancelaciones, o, incumpla por no presentarse, el no pago de sus cuotas oportunamente, o, no utilizar los servicios adquiridos, pagará a título de penalidad de acuerdo a los siguientes conceptos establecidos en los términos y condiciones:
              </p>
              <ul class="text-justify px-5">
                <li>Para los tiquetes aéreos y entendiéndose que <b>__COMERCIAL_NAME__</b>., es un intermediario entre el pasajero y la aerolínea, <b>__COMERCIAL_NAME__</b>., se acoge a la regla tarifaria según la clase y la aerolínea del plan comprado, por lo que la penalidad varía de acuerdo a las políticas de cada aerolínea.</li>
                <li><b>Churning</b>: El cargo del churning se basa según  las políticas de cada aerolínea que oscila entre $30 USD a 50 USD por persona. <b>__COMERCIAL_NAME__</b>., actúa como intermediario entre la aerolínea y el cliente, al ser un cobro directo de la aerolínea no es reembolsable. </li>
                <li><b>Cambio de Nombre</b>: La corrección de hasta 2 letras en el nombre/apellido que no cambie su sentido o sexo no genera cobros de penalidades, pero si es un cambio de 3 o más letras o que cambie el sentido o sexo del nombre si se denomina cambio de nombre, por lo cual el cliente asumirá el valor que imponga la aerolínea, hoteles y demás proveedores de servicios, para dicho cambio. El cliente deberá cancelar a favor de <b>__COMERCIAL_NAME__</b>. El valor de $100.000 COP por gestiones administrativas para gestionar el cambio.</li>
                <li><b>Cambio de Fecha</b>: Al realizar un cambio de fecha, se debe tener en cuenta que el servicio y/o paquete turístico adquirido inicialmente, estaría sujeto a cambio de condiciones  bien sea de tarifa, hoteles, servicios, cambio de promociones, cambio de temporadas etc. según los planes que se tengan disponibles para la nueva fecha de viaje, el cliente asumirá en su totalidad la diferencia tarifaria entre el plan inicialmente adquirido y el nuevo plan. El cliente deberá cancelar a favor de <b>__COMERCIAL_NAME__</b>. El valor de $100.000 COP por gastos administrativos para gestionar los cambios pertinentes y garantizar el nuevo plan. </li>
                <li><b>Cancelaciones</b>: Cancelación con 60 días o más de antelación a la fecha de inicio de viaje, se llevaran a cabo las penalidades correspondientes que generen la aerolínea, hotel, y demás proveedores de servicios (en los servicios que a la fecha ya estén emitidos). El cliente cancelara a favor de <b>__COMERCIAL_NAME__</b> un valor de $100.000 por cobros administrativos.</li>
                <li>Cancelación con 30 días o más de antelación a la fecha inicial del viaje, se llevaran a cabo las penalidades correspondientes que generen la aerolínea, hotel, y demás proveedores de servicios (en los servicios que a la fecha ya estén emitidos). El cliente cancelara a favor de <b>__COMERCIAL_NAME__</b> un valor de $100.000 por cobros administrativos y el 20% de penalidad sobre el valor total del contrato.</li>
                <li>Cancelación con menos de 30 días de antelación a la fecha inicial del viaje, se llevaran a cabo las penalidades correspondientes que generen la aerolínea, hotel, y demás proveedores de servicios (en los servicios que a la fecha ya estén emitidos). El cliente cancelara a favor de <b>__COMERCIAL_NAME__</b> un valor de $100.000 por cobros administrativos y el 50% de penalidad sobre el valor total del contrato.</li>
                <li><b><u>EXCEPCIONES</u></b>: Se estudiaran para exoneración las penalidades de caso de fuerza mayor, caso fortuito o incapacidad del titular de la reserva o un familiar en primer grado de consanguinidad. La solicitud de exoneración debe acompañarse del(os) correspondiente(s) soporte(s) y presentarse dentro de los 15 días corrientes contados a partir de la fecha inicial del viaje.</li>
                <li>Para las exoneraciones aéreas se debe tener en cuenta que solo aplica para las personas que se encuentren bajo el mismo récord y la negación o aprobación de la exención está sujeta a las políticas y procesos corporativos de cada compañía aérea. El cliente y /o agencia debe enviar los siguientes documentos para tramitar un estudio de exoneración:
                  <ul class="text-justify px-5">
                    <ul class="text-justify px-3">
                      <li><span><b>Por Muerte</b>:</span>
                        <ul class="text-justify px-2">
                          <li>Acta de defunción.</li>
                          <li>Registro civil de nacimiento de cada pasajero.</li>
                          <li>Acta de matrimonio o documento que certifique unión marital de hecho.</li>
                        </ul>
                      </li>
                      <li><span><b>Por enfermedad</b>:</span>
                        <ul class="text-justify px-2">
                          <li>Soporte médico o Incapacidad médica firmada y sellada por médico tratante.</li>
                          <li>Fotocopia de la cédula de ciudadanía de los pasajeros a exonerar.</li>
                          <li>Acta de matrimonio o documento que certifique unión marital de hecho.</li>
                        </ul>
                      </li>
                      <li><span><b>Por cambios Operacionales</b>:</span>
                        <ul class="text-justify px-2">
                          <li>Solo aplica exoneración cuando el cambio operacional se presente por cuestiones meteorológicas, en cuyo caso solo se exoneran las penalidades hoteleras según las políticas de cada hotel, para un futuro cruce de cuentas, en caso de requerir el reembolso del dinero no procede la exoneración.</li>
                          <li>Se debe contar con certificación de Cambios Operacionales por condición meteorológica emitida por la aerolínea, en donde indique el nombre de los pasajeros afectados.</li>
                        </ul>
                      </li>
                    </ul>
                  </ul>
                </li>
              </ul>
            </div>
            <div id="politicas-section7" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Documentos Requeridos Para Destinos Internacionales</h4>
              <p class="text-justify">
                En este numeral se describen los documentos básicos que deben presentar los viajeros a destinos internacionales. Es responsabilidad del pasajero confirmar con migración y consulados correspondientes según su nacionalidad, los requisitos obligatorios que debe cumplir para el ingreso al país al que vaya. 
              </p>
              <div class="text-justify">
                <ul class="text-justify px-5">
                  <li>Pasaporte con vigencia mínima de 6 meses a la fecha de viaje </li>
                  <li>Visa de turista en los destinos que aplique, tanto nacionales como internacionales</li>
                  <li>Vacuna de la fiebre amarilla</li>
                  <li>Voucher aéreo y hotelero con fechas de ingreso y salida del país </li>
                  <li>Menores de edad. Los menores que viajen fuera del país deberán presentar además de los documentos indicados, registro civil de nacimiento, tarjeta de identidad (si la tiene). Cuando el menor viaje con uno o ninguno de sus padres, además de lo anterior, deberán tener el permiso dirigido a las autoridades migratorias otorgado por sus padres ante autoridad competente. Si el padre está en el exterior, el documento deberá apostillarse</li>
                  <li>La información de los documentos requeridos aplica para ciudadanos colombianos, los extranjeros deberán consultar en las respectivas embajadas y/o consulados. Esta información se debe re-confirmar permanentemente en las oficinas de venta y/o embajadas o consulados del destino, las embajadas y/o consulados se reservan el derecho de modificar sin previo aviso los documentos y requisitos por ellos establecidos. Para los destinos que requieran certificado de vacunas, el viajero deberá presentarlo con los documentos aquí señalados.</li>
                  <li>No asumimos responsabilidad en caso que las autoridades del país visitado niegue al pasajero los documentos requeridos para el ingreso o no se lo permita, evento en el que se reembolsará el valor de los servicios no utilizados menos el valor de los gastos y/o penalidades que se hayan causado. Si el pasajero es extranjero consultar los requisitos de viaje con su consulado y/o embajada</li>
                </ul>
              </div>
            </div>
            <div id="politicas-section8" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Contra La Pornografía Infantil</h4>
              <h5>Prevención de la Explotación, Pornografía y El Turismo Sexual De Menores</h5>
              <p class="text-justify">
                En este numeral se cumple con la obligación de los operadores turísticos de señalar las advertencias contra el turismo sexual y la pornografía infantil.<br><br>
                En desarrollo de lo dispuesto en la Ley 679 de 2001, Ley 1336 de 2009, y demás normas concordantes, <b>__COMERCIAL_NAME__</b>. Advierte al turista que la explotación y el abuso sexual de menores de edad en el país son considerados como delitos y por tanto sancionados penalmente. En virtud del Decreto 3840 de 2009, <b>__COMERCIAL_NAME__</b>. Ha adoptado un modelo de “Código de Conducta", que promueve políticas de prevención y evita la utilización y explotación sexual de niños, niñas y adolescentes en la actividad turística.
              <p>
            </div>
            <div id="politicas-section9" class="col-lg-12 mt-5"> 
              <h4 class="text-center">Para Planes Con Tiquetes Nacionales E Internacionales Desde Colombia</h4>
              <ul class="text-justify">
                <li><h5>DESISTIMIENTO Y RETRACTO DE PLANES TURÍSTICOS</h3>
                  <ul class="text-justify px-5">
                    <li><b>DESISTIMIENTO</b>: Cuando adquiera tiquetes aéreos (con o sin plan) en cualquier oficina de venta, a través de <a href="__BASE_URL__" target="_blank">__BASE_URL__</a>, podrá desistir del viaje con tiquete aéreo antes de que éste inicie, siempre y cuando se solicite el desistimiento hasta 24 horas antes del viaje, en cuyo caso <b>__COMERCIAL_NAME__</b>, el transportador o la agencia de viajes según el caso, podrá retener hasta un 10% del valor de la tarifa del tiquete.</li>
                    <li><b>RETRACTO</b>: Cuando se hayan adquirido tiquetes aéreos (con o sin plan) a través de <a href="__BASE_URL__" target="_blank">__BASE_URL__</a>, podrá retractarse dentro de las 48 horas siguientes a la compra, siempre y cuando entre el momento de la solicitud y la fecha del viaje exista un plazo mayor a 8 días calendario en el caso de viajes domésticos o 15 días calendario en el caso de viajes internacionales. En este caso <b>__COMERCIAL_NAME__</b>. Podrá retener hasta un 10% del valor de la tarifa, sin superar $60.000 COP en viajes nacionales y $50 USD en internacionales.</li>
                    <li><b>NOTA</b>: Si el pago se realiza por medio de PayU, el cliente asumirá los cobros administrativos que se genere por el trámite de su pago, el cual equivale al 5% del valor total de la transacción o pago realizado.</li>
                  </ul>
                </li>
                <li><h5>RETRACTO EN LA COMPRA DE PLANES SIN TIQUETES</h5>
                  <ul class="text-justify px-5">
                    <li>Cuando se adquieran planes turísticos sin tiquetes aéreos a través de <a href="__BASE_URL__" target="_blank">__BASE_URL__</a>, podrá retractarse dentro de los 5 días hábiles siguientes a la compra. En todo caso, el retracto no se podrá ejercer si el servicio ya se ha empezado a ejecutar (emitir) o si debe prestarse en el mismo término del retracto, es decir en los cinco días siguientes a la compra, en cuyo caso el retracto solo será válido antes de empezarse a ejecutar la compra.</li>
                    <li><b>NOTA</b>: Si el pago se realiza por medio de PayU, el cliente asumirá los cobros administrativos que se genere por el trámite de su pago, el cual equivale al 5% del valor total de la transacción o pago realizado.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        ',
      ],

      //en
      //sobre-nosotros
      [
        'title'        => 'About Us',
        'subtitle'     => 'More',
        'slug'        => 'sobre-nosotros',
        'lang'        => 'en', 
        'status'      => '1',
        'page_data'   => '
          <p class="text-justify"><b>__COMERCIAL_NAME__</b>, is an agency created to motivate the different actors of modern society to fulfill their travel dreams and to effectively contribute to making them come true. Our main objective is to offer a positive emotional experience to the client who consults our travel agency to fulfill a travel goal or a vacation dream. Guarantee an innovative product or service in accordance with the psychobiological conditions of the buyer: his life, his work, his environment and the expectations he has to meet.
          <br/><br/>
          Being at the forefront of technology and communication and distribution tools, to meet the needs of the new national or international generations, providing everything related to air and land tickets, hotels, complementary services ranging from specialized and receptive tourism, organization of events, national and international congresses, excursions designed for schools and employee funds, cultural and thematic trips, student tourism, among others.</p>
          <div class="col-lg-10 offset-lg-1">
            <h5>Other Objectives</h5>
            <div class="row our-wrapper">
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Guarantee</p>
                    <p class="text">Guarantee service and attention to passengers 7x24</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Give Solution</p>
                    <p class="text">Provide solutions to problems that may arise in a friendly and timely manner</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Compliance</p>
                    <p class="text">Compliance with the services contracted by the client</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Perform</p>
                    <p class="text">Track customer journey and after-sales service</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row our-wrapper">
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Have Knowledge</p>
                    <p class="text">Have full knowledge of the destinations to be marketed, countries, geography, recreational activities, restaurants, currency, among others.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Manage</p>
                    <p class="text">Manage the company\'s resources in an organized and responsible manner, keep a correct and healthy accounting, tax and relationship with suppliers</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Compliance</p>
                    <p class="text">Develop the specialized Health and Wellness Tourism product, guaranteeing the best negotiations with Beauty Clinics, Health Coaches, natural relaxation sites, nurses, transporters, among others.</p>
                  </div>
                </div>
              </div><div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Hire Services</p>
                    <p class="text">Contract quality services with the different suppliers: airlines, hotels, cruises, ground transportation, assistance cards, international operators, business centers and/or conventions, among others.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row our-wrapper">
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Implement</p>
                    <p class="text">Implement marketing technology tool that facilitates the customer\'s purchasing process.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Perform</p>
                    <p class="text">Carry out good negotiations with suppliers, to guarantee a good, structured and innovative product</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Create Community</p>
                    <p class="text">Create community through RRSS, informing more about destinations, travel trends and health and wellness tourism.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        ',
      ],
      //Mision
      [
        'title' => 'Mission',
        'subtitle' => 'Our Mission',
        'slug' => 'mision',
        'lang' => 'en',
        'status' => '1',
        'page_data' => '<p class="text-justify">To be a travel agency that participates with the sustainable and responsible development of tourism in Colombia, with passion, offering guaranteed quality products, providing an efficient, friendly and respectful that guarantees the fulfillment of the dreams and objectives of the client</p>',
      ],
      //Vision
      [
        'title' => 'Vision',
        'subtitle' => 'Our Vision',
        'slug' => 'vision',
        'lang' => 'en',
        'status' => '1',
        'page_data' => '<p class="text-justify">To be a travel agency and leader in the development, promotion and marketing of Health and Wellness Tourism in Colombia, mainly in cities such as Bogotá, Cali and Medellín . And through transactional portals in countries like the United States and Europe</p>',
      ],
      //Sostenibilidad
      [
        'title' => 'Sustainability',
        'subtitle' => 'Sustainable Tourism',
        'slug' => 'sostenibilidad',
        'lang' => 'en',
        'status' => '1',
        'page_data' => '
          <div id="sostenibilidad-section0" class="col-lg-12 mt-5">
            <h1 class="text-center">Sustainable Tourism</h1>
            <p class="text-justify">
              Sustainable tourism seeks to develop its activity generating a minimum impact on the environment. The main key is that the exploitation of a resource is below its renewal limit. In other words, it is about promoting tourism that respects the ecosystem, with minimal impact on the environment and local culture. In addition, the economic aspect seeks to generate employment and income for the native population.
            </p>
          </div>
          <div id="sostenibilidad-section1" class="col-lg-12 mt-5">
            <h1 class="text-center">Sustainability Policy</h1>
            <p class="text-justify">
              The Do It Travel and Tourism Agency located in Bogotá DC, is committed to mitigating all the negative impacts that affect the natural environment due to the development of its operation and to optimizing the use of natural resources, promoting good practices of tourists in parks and natural areas, and publicizing these natural areas in different communication sources.<br>

              Likewise, it is committed to promoting and preserving the cultural heritage of the regions and destinations in which it has commercial activity, disclosing in a responsible manner the traditions and tourist attractions of the region, gastronomy, handicrafts and real estate of cultural importance.<br>

              It is also committed to protecting and supporting the community of destinations by implementing good sustainable practices, respecting the rights of all actors and ensuring the fulfillment of their duties; preventing negative impacts such as CSEC (Sexual and Commercial Exploitation of Children and Adolescents) associated with travel and tourism. For this, it will have a base of local collaborators and suppliers committed to the conservation of the environment, culture and social development, hired under a hiring policy without discrimination.
            </p>
          </div>
          <div id="sostenibilidad-section2" class="col-lg-12 mt-5">
            <h1 class="text-center">Code of Conduct</h1>
            <p class="text-justify">
              In accordance with the principles of the Sustainability Policy of the Travel Agency, the following code of conduct is established, which stipulates the minimum standards and the corporate commitment to comply with them and to demand compliance from its collaborators, clients and suppliers of goods and services. services:
            </p><br>
            <ol class="text-justify">
              <li>Refrain from expressly or surreptitiously offering plans for the sexual exploitation of children and adolescents in tourism promotion programs and tourism plans.</li>
              <li>Refrain from giving information to tourists, directly or through an intermediary, about places where they are coordinated or where commercial sexual exploitation of children and adolescents is practiced.</li>
              <li>Refrain from driving tourists, directly or through third parties, to establishments or places where commercial sexual exploitation of children is practiced, as well as driving them to places where tourists are staying, even if it is of places located on the high seas, borders of commercial sexual exploitation of children and adolescents.</li>
              <li>Refrain from providing vehicles on tourist routes for the purpose of sexual exploitation or abuse of children and adolescents.</li>
              <li>Prevent the entry of children and adolescents into hotels or places of accommodation and lodging, bars, similar businesses and other establishments in which tourist services are provided, for the purpose of sexual exploitation or abuse.</li>
              <li>Adopt measures to prevent personnel linked in any way to the company from offering tourist services that allow sexual activity with children and adolescents.</li>
              <li>Protect national or foreign children and adolescents from all forms of exploitation and sexual violence caused by national or foreign tourists.</li><li>Report to the Ministry of Commerce, Industry and Tourism, and other competent authorities, the facts of which they have become aware by any means, as well as the suspicion of these, related to sexual exploitation of children and adolescents and ensure that there are channels within the company to report such events to the competent authorities.</li>
              <li>Design and disclose within the company and with its suppliers of goods and services, a policy in which the provider establishes measures to prevent and counteract all forms of sexual exploitation of children and adolescents in travel and tourism.</ li>
              <li>. Train all personnel linked to and linked to the company, as well as suppliers who, due to the nature of their activities, have contact with tourists, regarding the prevention of commercial sexual exploitation of children and adolescents. </li>
              <li>. Inform its users about the legal consequences in Colombia of the sexual exploitation and abuse of children and adolescents.</li>
              <li>. Reject discrimination based on race or gender.</li>
              <li>. Disseminate the importance of conservation and proper use of the natural and cultural wealth that Colombia has.</li>
              <li>. Protect the fauna and flora of the sites that are visited as a result of tourist activities.</li>\n <li>. Protect and highlight the values of Colombia\'s natural attractions.</li>
              <li>. Disseminate the concepts of sustainability with which the company works to customers, suppliers and collaborators.</li>
              <li>. Require physical security from our suppliers in the provision of the services they offer.</li>
            </ol>
          </div>
          <div id="sostenibilidad-section3" class="col-lg-12 mt-5">
            <h1 class="text-center">Goals for sustainable tourism</h1>
            <p class="text-justify">
              In 2005, the World Tourism Organization and the United Nations Environment Program established 12 objectives that constitute a model:
            </p>
            <ol class="text-justify">
              <li>Cultural richness: respecting and enhancing the historical heritage or respecting the local culture and its distinctive character is essential.</li>
              <li>Integrity of the ecosystem: maintain and improve landscapes, urban or rural areas. It is about avoiding the degradation of the environment.</li>
              <li>Biological diversity: support the conservation of natural areas and minimize their damage.</li>
              <li>Resource efficiency: consists of minimizing the use of scarce and non-renewable resources as much as possible.</li>
              <li>Environmental purity: reduce contamination to the maximum both in air, water and land as well as reducing the generation of waste.</li>
              <li>Local control: it is about involving the local population in making decisions that concern the management and future development of tourism in their area.</li>
              <li>Community well-being: maintaining and improving the quality of life of the host place. For this, it is necessary to provide these communities with the necessary resources that they may need, both at a logistical level in terms of infrastructure and services. It is essential that this does not imply a degradation or exploitation of the ecosystem or its society.</li>
              <li><b>Economic:</b> ensure economic viability for long-term prosperity and profit.</li>
              <li><b>Local prosperity:</b> guide and maximize the contribution of tourism to the economic prosperity of the host destination.</li>
              <li><b>Quality of employment:</b> consists of strengthening the quality of jobs, both qualitatively and numerically. In addition to ensuring the conditions, it is taken into account that there is no discrimination based on race, gender, disability or other forms.</li>
              <li><b>Social equity:</b> consists of a fair distribution of the wealth generated by tourism throughout the receiving community.</b>
              <li><b>Visitor Satisfaction:</b> Provide a safe and satisfying experience for all visitors without any social discrimination.</li>
            </ol>
          </div>
        ',
      ],
      //Privacidad
      [
        'title' => 'Privacy',
        'subtitle' => 'Our Policies',
        'slug' => 'privacidad',
        'lang' => 'en',
        'status' => '1',
        'page_data' => '
          <div class="col-12">
            <span class="mt-5 text-center" style="font-size: 0.8rem !important;"><b>Updated</b>: __PRIVACY_DATE__</span>
          </div>
          <div class="col-lg-6">
            <div id="privacidad-section1" class="col-lg-12 mt-5">
              <h1 class="text-center">Personal Data Privacy Policy and Notice</h1>
              <p class="text-justify">
                In compliance with the regulations on handling personal data and privacy, <b>__COMERCIAL_NAME__</b>. Please read this policy before providing your personal information.
                <br/><br/>If you object to this policy, you must stop using The Site (<a href="__BASE_URL__" target="_blank">__BASE_URL__</a>).
                <br/><br/>The personal data processing and privacy policy is part of the Terms and Conditions of this website (<a href="__BASE_URL__" target="_blank">__BASE_URL__</a>) that They are binding on all users.
                <br/><br/>The policy of <b>__COMERCIAL_NAME__</b> is to respect and protect your privacy, therefore <b>__COMERCIAL_NAME__</b> takes the necessary measures to maintain the confidentiality of the information that you provide us and to protect your personal data.
              </p>
            </div>
            <div id="privacidad-section2" class="col-lg-12 mt-5">
              <h1 class="text-center">Personal Information We Collect</h1>
              <p class="text-justify">
                We may collect any information concerning your name, address, email, telephone number, date of birth, preferred methods of communication, financial data such as credit card information, frequent flyer information, travel history, companion data, preferences, data itineraries and other reservations, among others.
                <br/><br/>All personal and/or patrimonial data that are provided will be treated under the guidelines required by Colombian laws and other regulations issued by the competent authorities through administrative, technical and physical security measures implemented, against damage, loss, alteration, destruction or unauthorized use, access or treatment.
              </p>
            </div>
            <div id="privacidad-section3" class="col-lg-12 mt-5">
              <h1 class="text-center">Purpose and Use of Your Personal Information</h1>
              <p class="text-justify">
                We use your personal information to provide our services and those of the Group companies that you request, such as quotes, hotel reservations, purchase of vacation packages, timeshares, spas, gyms, entertainment, parking lots, and in general to offer and sell tourist services and their associated or complementary activities, as well as to carry out surveys, tracking and marketing offers, newsletters, award ceremonies and contests developed by <b>__COMERCIAL_NAME__</b>.
              </p>
            </div>
            <div id="privacidad-section4" class="col-lg-12 mt-5">
              <h1 class="text-center">Confidentiality</h1>
              <p class="text-justify">
                The confidentiality of personal and/or property data is guaranteed through procedures, controls, technologies and audits implemented to keep them safe and protected from any damage, loss, alteration, and unauthorized use.
                <br/><br/>Sensitive information related to your health, race or ethnic origin, your political opinions, religious or other beliefs, criminal records, health conditions or membership in groups or trade associations, is not requested unless it is his initiative and willingness to deliver it to satisfy some particular need of his. This information is handled under the same confidentiality standards and controls.
                <br/><br/>Only competent and authorized persons will have limited and controlled access to data sources.
                <br/><br/>Employees and/or third parties are bound by privacy contracts to guarantee data privacy. Said obligations subsist after termination of relations with the company.
              </p>
            </div>
            <div id="privacidad-section5" class="col-lg-12 mt-5">
              <h1 class="text-center">How We Share Personal Information</h1>
              <p class="text-justify">
                As a company <b>__COMERCIAL_NAME__</b>, we can share your personal information with other members of our business group, franchisees, hotels that we manage, or service providers that may be located in a country other than yours, with the sole purpose of seeking your greatest satisfaction in the provision of the purchased service.
                <br/></br/>From time to time we will partner with other companies to provide co-branded or co-sponsored promotions, products and services, so we may share your information with our co-sponsor. <br/></br/>We will also share personal information with service providers such as spas, golf courses, restaurants, messaging, transportation and other activities related and necessary to the tourist service, airfare packages and rental car, the communication of news and the delivery of promotional materials by means of electronic mail or direct mail, the processing of credit card transactions, improvement services and the administration of sweepstakes and prize designations and the conduct of customer surveys.
                <br/></br/>We can share personal information with credit institutions, when it is required to carry out transactions and clarifications regarding the payment of the services that were provided to you.
                <br/></br/>In all events, the Suppliers or any third party recipient of the personal data whose transfer is authorized, assumes the same obligations that correspond to the person responsible for the data and are bound by privacy and confidentiality contracts. to guarantee in turn the privacy of the data in its possession.
                <br/></br/>The transfer made to holding companies, subsidiaries or affiliates, or to a parent company or to any company of the same group that operates under the same internal processes and policies, may be carried out without the need for new consent from the headline.
                <br/></br/>In case of sale, merger, consolidation, liquidation, or transfer of this company or of the group companies to a third party, personal data will be transferred to said third party without the need for a new authorization under the condition of the duty of protection and confidentiality.
              </p>
            </div>
            <div id="privacidad-section6" class="col-lg-12 mt-5">
              <h1 class="text-center">Links to Third Party Websites</h1>
              <p class="text-justify">
                Our site may contain links to third party websites. Please note that we are not responsible for the collection, use, maintenance, disclosure or sharing of data and information by such third parties. If you provide information on third-party sites, the privacy policy and terms and conditions of service of those sites apply.
              </p>
            </div>
            <div id="privacidad-section7" class="col-lg-12 mt-5">
              <h1 class="text-center">Protection of Personal Information</h1>
              <p class="text-justify">
                <b>__COMERCIAL_NAME__</b>, will take the necessary measures to: <br/>
              </p>
              <ol class="text-justify px-5">
                <li>Protect personal information collected from unauthorized access, disclosure, alteration or destruction. </li>
                <li>Keep personal information reliable and up-to-date in accordance with current law. </li>
              </ol>
              <p class="text-justify">
                We also intend to require that our affiliates and service providers make every effort to maintain the reliability of your personal information. For online transactions, we use security technology to protect the personal information you transmit to us through our site. Unfortunately, no security system or system for transmitting data over the Internet can guarantee that it is completely secure.
                <br/><br/>For your own protection and privacy, do not include personal information that you consider confidential, or credit card data, in the email messages you send us.
              </p>
            </div>
            <div id="privacidad-section8" class="col-lg-12 mt-5">
              <h1 class="text-center">Changes to the Policy</h1>
              <p class="text-justify">
                We will not use personal data in a manner other than authorized.
                <br/><br/>In the event that we require personal data for a purpose other than that consented to here, we will make available a new privacy notice with the characteristics of the new treatment.
                <br/><br/>We may change this Policy from time to time. When we make significant or material changes, these will be communicated on the home page of our website before they are implemented. You will know when this Policy is updated by the date that appears in the respective information margin.
                <br/><br/>Any changes to our Policy will become effective when the revised policy is posted to the site.
                <br/><br/>Use of this site following these changes constitutes your acceptance of the revised Policy as it becomes effective.
              </p>
            </div>
            <div id="privacidad-section9" class="col-lg-12 mt-5">
              <h1 class="text-center">Rights of the Owner</h1>
              <p class="text-justify">
                At any time, as the owner you may exercise your rights of access, rectification, cancellation or opposition to the processing of your Data, by sending your request via email <a href="mailto:__CONTACT_EMAIL__">__CONTACT_EMAIL__</a> submitting the request in writing addressed to the legal representative of <b>__COMERCIAL_NAME__</b>.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
          </div>
        ',
      ],
      //Políticas
      [
        'title'       => 'Terms and Conditions',
        'subtitle'    => 'Our Policies',
        'slug'        => 'politicas',
        'lang'        => 'en', 
        'status'      => '1',
        'page_data'   => '
          <div class="col-12">
            <span class="mt-5 text-center" style="font-size: 0.8rem !important;"><b>Updated</b>: __PRIVACY_DATE__</span>
          </div>
          <div class="col-lg-12">
            <div id="politicas-section1" class="col-lg-12 mt-5">
              <h4 class="text-center">Definitions</h4>
                <ol type="a" class="text-justify px-5">
                  <li><b>Hotel</b>: Hotel establishment is understood as the set of goods intended by the legal person to provide non-permanent accommodation service for less than 30 days, with or without food and basic and/or complementary services. or accommodation accessories, through a hosting contract.</li>
                  <li><b>Accommodation Contract</b>: It is a commercial and adhesion lease contract that a company dedicated to this activity enters into with the main purpose of providing accommodation to another person called a guest, through the payment of the respective price, for a period of less than 30 days.</li>
                  <li><b>Travel Agency</b>: Company associated with tourism, whose trade is the intermediation, organization and execution of projects, plans and itineraries, preparation and sale of tourist products between its clients and certain travel providers, for this document it is <b>__COMERCIAL_NAME__</b></li>
                  <li><b>External Agencies</b>: Wholesale or Retail Agencies, Freelance, Employee Funds, Cooperatives that sell Travel Plans through the Travel Agency. </li>
                  <li><b>PQR</b>: Request, complaint or claim that a client presents and that must necessarily be documented and have a response time of no more than 15 business days.</li>
                  <li><b>Customer Service Advisor</b>: Responsible for delivering all the information requested by the Client/Passenger/Guest, to manage and address all queries in a timely manner in accordance with the policies and procedures of the Travel Agency. Travel, providing you with an excellent service experience.</li>
                  <li><b>Client/Passenger/Guest</b>: Natural person who is traveling from one place to another and who has paid for a travel plan.</li>
                  <li><b>Airline</b>: Company dedicated to the transport of passengers or cargo by plane.</li>
                  <li><b>E-TKT</b>: Electronic document issued by an airline to make effective the air transport services acquired.</li>
                  <li><b>Seasons</b>: Determined periods of the year, in which previously established differential rates and conditions apply.</li>
                  <li><b>Rooms</b>:Part of the space of a hotel separated from the others, destined for the rest of the guests.</li>
                  <li><b>Connections</b>:A plane change made by a client in an intermediate city or cities, before reaching their final destination.</li>
                  <li><b>Reservation</b>:Separation of air and/or hotel quotas on a specific date for a Client for a set period of time.</li>
                  <li><b>Confirmed reservation</b>: Separation of air and/or hotel quotas on a specific date for a client for a set period of time. This reservation has no payments, or deposits made, or does not comply with the established payment plan.</li>
                  <li><b>Reconfirmed reservation</b>: Separation of air and/or hotel quotas for a client on a certain date until the service is provided, this reservation has installments and complies with the established payment plan, or, the total payment made.</li>
                  <li><b>Reservation canceled</b>: Cancellation of a separation of air and/or hotel quotas for a Client on a certain date, for this reservation payment or deposits could or could not be received.</li>
                  <li><b>Voucher</b>: Document that contains all the data of the reconfirmed reservation with full payment of a tourist service and has a reservation code, which must be presented by the client to the service providers in which have reconfirmed their reservation to make effective the use of the services purchased.</li><li><b>No show</b>:No presentation of a Client to a previously purchased plan without giving notice. Failure to show up at the Hotel may result in the loss of the purchased plan.</li>
                  <li> <b> Reimbursement </ b>: Economic operation through which a client is returned part or all of the money that she had previously delivered as payment for a Travel plan. </ li>
                  <li><b>Tourism card</b>:Tax charged in some countries and/or destinations to allow non-residents to enter their territory for a temporary period.</li>
                  <li><b>Destination</b>:Area, place or area where a client for whom I bought a plan is directed.</li>
                  <li><b>Travel plan</b>:It is a set of tourist services that are marketed in a unique way and contains services such as accommodation, food, transportation and other services, for which a price is paid that includes the totality of services and an individual price is not established for each service that is provided.</li>
                  <li><b>Promotional or special plan</b>: Temporary offer of products under special favorable conditions or free of charge as an incentive for the consumer. Promotion will also be understood as the offering of products with additional content to the usual presentation, free of charge or at a reduced and temporary price. As well as what is done by the consumer incentive system, such as raffles, contests and the like, in money, in kind or with the accumulation of points.</li>
                  <li><b>Invoice</b>:Corresponds to the document that confirms the total payment of the Tourist Plan.</li>
                  <li><b>Penalty</b>: Financial penalty caused by non-compliance with one or more conditions or circumstances previously agreed in the travel plan.</li>
                  <li><b>Complementary services</b>: Additional tourist services that are not included in the tourist plan and that are optional by the user/traveler.</li>
                  <li><b>Receptive</b>:Additional services such as tours and transfers that are provided in the different destinations.</li>
                  <li><b>Representative Market Rate or TRM</b>:The representative market exchange rate (TRM) is the amount of Colombian pesos for one United States dollar.</li>
                  <li><b>Reservation Center</b>:Area in charge of managing the rooms and air tickets that are going to be sold to the client.</li>
                  <li><b>Cross-accounts</b>: Procedure for transferring money from an initial reservation to a new reservation taken by the same passenger.</li>
                  <li><b>Reversal</b>: Return of the money directly to the Client\'s credit card, through the authorized franchise.</li>
                  <li><b>Exoneration</b>:Operation in which the Travel Agency decides not to charge the penalties that may apply for a change or cancellation.</li>
                  <li><b>Churning</b>:Refers to the process of creating and canceling from the third reservation the same air segment for the same passenger regardless of the flight number, which may generate additional charges.</li >
                  <li><b>Retraction</b>: Right that assists the buyer to cancel the purchase and request a refund. This right operates when a Client buys plans with air tickets in the call center or through the websites authorized by the Agency, as long as the cancellation is made within 48 current hours of purchase and at the time of your request and the travel date there is a period greater than 8 calendar days in the case of domestic flights or 15 calendar days in the case of international flights.</li>
                  <li><b>Withdrawal</b>: The buyer\'s right to cancel the purchase and request a refund. This right operates when a Client buys plans with air tickets in any sales channel before he begins the trip, as long as he requests this right up to 24 hours before the first flight and the fare purchased is not promotional.</li>
                  <li><b>Website</b>: pages authorized by <b>__COMERCIAL_NAME__</b>, for the distribution of tourist packages.</li>
                </ol>
            </div>
            <div id="politicas-section2" class="col-lg-12 mt-5">
              <h4 class="text-center">Responsibility Clause</h4>
              <p class="text-justify">
                <b>__COMERCIAL_NAME__</b>. It acts as an intermediary between the users and those who provide the services included, such as Airlines, Hotels and transporters among others; <b>__COMERCIAL_NAME__</b>. It is responsible for structuring tourist packages to facilitate the client obtaining air and land quotas as well as room reservations, requesting the required services and contracting them on behalf of the user according to their availability; everything, according to the information provided by the service providers.<br>
                <b>__COMERCIAL_NAME__</b>, will be exempt from the contracted obligations in cases of force majeure or fortuitous event such as accidents, strikes, riots, earthquakes, climatic or natural phenomena, security conditions, political factors, denial of permits for income, health issues and/or any other circumstance beyond the control of the company such as accidents, mechanical difficulties, damage to the aircraft(s), adverse weather conditions. We relate some cases without limiting ourselves to them:
              </p>
              <ol type="a" class="text-justify px-5">
                <li>Delays at airports, flight delays, hotel congestion, quarantines and other circumstances of force majeure or fortuitous event that alter the normal development of the provision of tourist services, so if the providers of the contracted services could not provide partially or totally the same, only the reimbursement of the appropriate amount will be managed by the user, excluding any other commitment.</li>
                <li>Accidents, losses or damages suffered by clients as a result of recklessness or non-observance of the instructions and/or regulations made by the airlines, hotels or providers of tourist services for the enjoyment of their stay. Damages, losses and losses caused by carelessness, negligence or non-delivery in custody of jewelry and/or property owned by customers.</li>
                <li>It is essential that the client check with the advisor if the destination to which they wish to travel requires the payment of entry and/or exit taxes and if this item is included in the value of the plan. If applicable and included, the value will be discriminated within the plan costs. Air services are provided by the airlines with which they have agreements; The land services that are part of the travel plan are provided by third-party tour operators, which function as legal entities independent of <b>__COMERCIAL_NAME__</b>. that respond directly and individually to the traveler affected by each of the services provided, in case of loss or damage.</li>
                <li>It is the responsibility of the user to present all their original and current documentation at the time of enjoying the services purchased. In case of loss of contracted services for this reason, <b>__COMERCIAL_NAME__</b> will not be held responsible nor will it be exonerated from the value of the penalties or the loss of the vacation plan. The services included in the purchased plan are the responsibility of each of the companies providing them. <b>__COMERCIAL_NAME__</b>, only acts as an agent or intermediary with the client.</li>
              </ol>
            </div>
            <div id="politicas-section3" class="col-lg-12 mt-5">
              <h4 class="text-center">Exceptions</h4>
              <ol type="1" class="text-justify">
                <li><b>__COMERCIAL_NAME__</b> is not responsible for the impossibility of providing the services acquired in events of fortuitous event or force majeure.</li>
                <li><b>__COMERCIAL_NAME__</b> reserves the right to make modifications to the plan or contracted tourist service in events of fortuitous event or force majeure.</li>
                <li><b>__COMERCIAL_NAME__</b> is not responsible for changes made by the contracted service providers or for unforeseen events such as:
                  <ol style="list-style-type:circle;" class="text-justify px-5">
                    <li>Delays in airports, flight delays, congestion in hotels, quarantines and other circumstances of force majeure or fortuitous event that alter the normal development of the provision of tourist services, therefore, if said providers of contracted services do not could partially or totally provide their services for which they were contracted, only the reimbursement of the appropriate amount will be managed, excluding any other commitment.</li>
                    <li>Accidents, losses or damages suffered by clients as a result of recklessness or failure to comply with the instructions and/or regulations established by the airlines, hotels or providers of tourist services for the enjoyment of their stay.</ li>
                    <li>Damage, loss and damage caused by carelessness, negligence or non-delivery in custody of jewelry and/or property owned by customers.</li>
                  </ol>
                </li>
                <li><b>__COMERCIAL_NAME__</b>. is not responsible for the impossibility of providing the contracted services, when the cause is attributable to the user.</li>
              </ol>
            </div>
            <div id="politicas-section4" class="col-lg-12 mt-5">
              <h4 class="text-center">General Conditions</h4>
              <ol type="a" class="text-justify px-5">
                <li>All prices and rates published on this site are subject to change, availability and validity without prior notice and to the regulation of the rate rule of hotel and air plans. However, the rate confirmed at the time of purchase of the plan does NOT vary. Taxes, fees and contributions that affect airfares, hotels and other services offered by <b>__COMERCIAL_NAME__</b>. may vary at any time by provision of the National Government or foreign entity, as the case may be, which must be assumed by the guest/client at the time of issuing the air tickets, plan or tourist package. Restrictions and conditions apply to each published rate according to its validity.</li>
                <li>Hotel rates depend on the selected accommodation. The prices of the published plans are calculated based on double accommodation per person. When the requested accommodation is in a triple or quadruple room, the rate must be verified according to the accommodation. The accommodation in a single room has an additional charge and will be paid directly through the WEB page or by the staff of the <b>__COMERCIAL_NAME__</b> office. at the time of quoting and booking.</li>
                <li>Before acquiring the tourist plans published on this web portal, you should consult their characteristics and the maximum accommodation allowed by the hotel.</li>
                <li>The conditions of the food service included in the travel plan will be provided by the hotel from the moment of check in and until check out.</li>
                <li>The rates of the tourist plans in force at the time of the confirmation of the sale and payment of the travel plan are respected.</li>
                <li>For tourist plans in which a term for payment is agreed, the agreed price will be respected from the confirmation of payment within the established terms. Airport fees, as well as the administrative fee applicable for the issuance of the ticket and the respective taxes, will be subject to what is indicated by each airline. The difference that arises due to the variation of said rates must be assumed by the purchaser of the plan.</li>
                <li>The quotes generated show availability and values at the time of issue, they do not imply the confirmation of air or hotel quotas. The quote does not guarantee the availability in the air class or the quoted hotel, nor the rates indicated therein, if the reservation and payment of the travel plan services is made later. Reconfirmation is subject to full payment of the reservation.</li>
                <li>The plans that are packaged with air tickets, land tickets or hotel-only rates, and may be reserved through the offices of <b>__COMERCIAL_NAME__</b>. and/or through the __BASE_URL__ page. The minimum stay on all plans is two (2) nights. Each tourist plan includes particular services, so you must consult the validity, services and conditions and restrictions of the Plan to be purchased. THE RATES DO NOT INCLUDE: long distance telephone calls, laundry service, safe deposit box, medicine, diving classes and charges that are not expressly specified in the plan purchased.</li>
                <li>For some plans there may be terms and particular conditions that exclude the application of the specific conditions described here. In this sense, the characteristics, conditions and restrictions must be consulted before acquiring the desired plan.</li>
              </ol>
            </div>
            <div id="politicas-section5" class="col-lg-12 mt-5">
              <h4 class="text-center">Applies To All Plans</h4>
              <ul class="text-justify">
                <li>When fewer people show up at the hotel than those reserved and registered in the voucher and in the event that any of them must be accommodated in a single room, a supplement will be charged that will be deducted from the total value of the reservation and additionally the penalties that may apply, the collection of the single room supplement is not exempt.</li>
                <li>Hotel rates depend on the selected accommodation. Consult maximum accommodation allowed by hotel. Taxes, fees, and contributions that affect airfares, hotels, and other services offered by <b>__COMERCIAL_NAME__</b>. They may vary at any time when by provision of the National Government, or a foreign entity so determines, which must be assumed by the guest/client at the time of issuing the air tickets, plan, or tourist package.</ li>
                <li><b>"Infants"</b> are considered to be those under 2 years of age and <b>"Children"</b> are considered to be minors between the ages of 2 and 11 on the date of entry to the hotel, from the age of 12 is considered an adult and will be charged as such. It is essential to indicate the ages of the children who are members of a family group when requesting the reservation and confirmation of the services. </li>
                <li><b>Minors (under 18 years of age)</b>: If a minor travels in the reservation accompanied by one of their parents and in order to carry out the registration process at the Hotel, they must Present your identity card, valid passport and civil registry at the <b>__COMERCIAL_NAME__</b> agency and at the Hotel reception. If the minor does not travel with her parents, it is required that they present a copy of the civil birth certificate where she proves the relationship, a copy of the parents\' citizenship card and the authorization form signed and authenticated by both parents. The minor\'s entry permit to the hotel does not replace the exit permit from the country, and vice versa, which must be processed in accordance with what is required by the immigration authority of each country. The travel authorization format for minors in the company of third parties can be downloaded at <a href="__BASE_URL__/formato-de-autorizacion-minores" target="_balnk">__BASE_URL__/formato-de-authorizacion-minores</a>
                  <ul class="text-justify px-5">
                  <li><b>Note 1</b>: In the event that the persons who have parental authority over the minors are not their parents, the minors\' travel authorization form must be signed and authenticated by the persons who have custody, and an authentic copy of the document that certifies it must also be attached.</li>
                  <li><b>Note 2</b>: In the event that the Client does not present any of the documents indicated here, the Hotel reserves the right not to allow the entry of the person or persons of the group who do not present the complete documents, without the right to claim or refunds.</li>
                  </ul>
                </li>
                <li>The consumption and distribution of alcohol is prohibited for minors in all hotels, Art 1 Law 124/94 and other regulations in force.</li>
                <li><b>The promotional plans are NOT modifiable, endorsable, reviewable, or refundable, in any season.</b></li>
                <li>The conditions of the food service included in the travel plan will be provided by the hotel from the moment of check in and until check out.</li>
                <li>Stays from two (2) nights, for reservations of one (1) night only, consult the current rate at the time of reservation.</li>
                <li>The prices in force at the time of the confirmation of the sale and corresponding payment of the travel plan within the informed terms are respected, except for airport taxes, administrative fees applicable for the issuance of the ticket and respective taxes which depend on the information provided by the airline.</li>
                <li>In the event of hotel overbooking, the hotel is free to re-accommodate clients in other hotels with similar characteristics and the same category.</li>
                <li>For some plans there may be validity and particular conditions that except the application of the specific conditions described here, for example: special or promotional plans, which will also not be refundable, and which will have specific conditions which will be indicated in the same plan and that can be consulted at <a href="__BASE_URL__" target="_blank">__BASE_URL__</a></li>
                <li>The national and/or foreign government or administrative entities may impose new taxes, fees, contributions or other additional charges on the travel plans, which may not be contemplated in the sale of tourist services and must be assumed by the client.</li>
                <li>If the user cancels the reservation and wishes to travel on a later date, the value paid less the value of the penalties will be credited to the new plan, the new plan will be subject to availability and rate differences and must be processed through of a crossing of accounts. The validity of the reservations is 11 months from the issuance of the air tickets and for hotel-only plans from the moment of the first deposit in money, after this period the total loss of the money is generated.</li>
                <li>As far as ground transportation is concerned, it will be understood that the traveler keeps their luggage and other personal belongings with them, regardless of the part of the vehicle in which they are placed, and that they are transported at the traveler\'s expense and risk. Travelers are advised to be present at all baggage loading and unloading operations.</li>
                <li>The document <b>"invoice"</b> shows total values, breaking down taxes for all services.</li>
                <li>The services included in the purchased plan are the responsibility of each of the companies providing them.</li>
                <li><b>__COMERCIAL_NAME__</b>. it only acts as an agent or intermediary in front of the client.</li>
                <li><b>Promotional plans They are not modifiable, endorsable, reviewable, or refundable, in any season. These conditions also apply to promotional plans reserved by deposit. Any change, modification or cancellation after having made the payment of the reservation generates penalties and differences in rates which must be assumed by the client.</b></li>
                <li>In case of requesting a refund, it will be made to the creditor account of the owner of the purchase invoice, whatever the reason, COP $100,000 corresponding to the penalty for administrative expenses will be deducted, plus the penalties generated by the airline. and the hotel.</li>
                <li><b>__COMERCIAL_NAME__</b>. is against child sex tourism and other forms of exploitation and sexual violence, Art. 16 et seq. Law 679/01 modified by Law 1336/09; Failure to comply with the protection measures established in Law 679/01 against exploitation, pornography, sex tourism and other forms of sexual abuse with minors, gives rise to the criminal sanctions provided for in the law and other concordant regulations.</ li>
                <li>For changes of accommodation, the room supplement must be charged and additionally the penalties that may apply will be applied, the collection of the room supplement is not exempt.</li>
              </ul>
            </div>
            <div id="politicas-section6" class="col-lg-12 mt-5">
              <h4 class="text-center">Penalties For All Plans</h4>
              <p class="text-justify">
                When the user of the tourist services requests modifications and/or cancellations, or fails to comply by not showing up, not paying their fees in a timely manner, or not using the services acquired, they will pay as a penalty according to the following concepts established in the terms and conditions:
              </p>
              <ul class="text-justify px-5">
                <li>For air tickets and understanding that <b>__COMERCIAL_NAME__</b>., is an intermediary between the passenger and the airline, <b>__COMERCIAL_NAME__</b>., adheres to the fare rule according to class and the airline of the purchased plan, so the penalty varies according to the policies of each airline.</li>
                <li><b>Churning</b>: The churning charge is based on the policies of each airline and ranges from $30 USD to 50 USD per person. <b>__COMERCIAL_NAME__</b>., acts as an intermediary between the airline and the client, since it is a direct charge from the airline, it is non-refundable. </li>
                <li><b>Change of Name</b>: The correction of up to 2 letters in the name/surname that does not change its meaning or gender does not generate penalties, but if it is a change of 3 or more letters or that change the meaning or sex of the name if it is called a name change, for which the client will assume the value imposed by the airline, hotels and other service providers, for said change. The client must cancel in favor of <b>__COMERCIAL_NAME__</b>. The value of $100,000 COP for administrative procedures to manage the change.</li>
                <li><b>Change of Date</b>: When making a change of date, it must be taken into account that the service and/or tour package initially purchased would be subject to change of conditions, whether it be rates, hotels, services, change of promotions, change of seasons etc. depending on the plans that are available for the new travel date, the client will fully assume the fare difference between the initially purchased plan and the new plan. The client must cancel in favor of <b>__COMERCIAL_NAME__</b>. The value of $100,000 COP for administrative expenses to manage the pertinent changes and guarantee the new plan. </li>
                <li><b>Cancellations</b>: Cancellation 60 days or more prior to the start date of the trip, the corresponding penalties generated by the airline, hotel, and other service providers (in the services that are already issued to date). The client will pay in favor of <b>__COMERCIAL_NAME__</b> a value of $100,000 for administrative charges.</li>
                <li>Cancellation 30 days or more prior to the initial date of the trip, the corresponding penalties generated by the airline, hotel, and other service providers will be carried out (in the services that are already issued to date). The client will pay in favor of <b>__COMERCIAL_NAME__</b> a value of $100,000 for administrative charges and a 20% penalty on the total value of the contract.</li>
                <li>Cancellation less than 30 days prior to the initial date of the trip, the corresponding penalties generated by the airline, hotel, and other service providers will be carried out (in the services that are already issued to date). The client will pay in favor of <b>__COMERCIAL_NAME__</b> a value of $100,000 for administrative charges and 50% penalty on the total value of the contract.</li>
                <li><b><u>EXCEPTIONS</u></b>: Penalties in case of force majeure, fortuitous event or incapacity of the reservation holder or a relative in the first degree of consanguinity will be studied for exemption. The exemption request must be accompanied by the corresponding support(s) and be submitted within 15 calendar days from the initial date of the trip.</li>
                <li>For air exemptions, it should be taken into account that it only applies to people who are under the same record and the denial or approval of the exemption is subject to the corporate policies and processes of each airline. The client and/or agency must send the following documents to process an exemption study:
                  <ul class="text-justify px-5">
                    <ul class="text-justify px-3">
                      <li><span><b>By Death</b>:</span>
                        <ul class="text-justify px-2">
                          <li>Death certificate.</li>
                          <li>Civil registration of birth of each passenger.</li>
                          <li>Marriage certificate or document that certifies de facto marital union.</li>
                        </ul>
                      </li>
                      <li><span><b>Due to illness</b>:</span>
                        <ul class="text-justify px-2">
                          <li>Medical support or medical disability signed and stamped by the treating physician.</li>
                          <li>Photocopy of the citizenship card of the passengers to be exempted.</li>
                          <li>Marriage certificate or document that certifies de facto marital union.</li>
                        </ul>
                      </li>
                      <li><span><b>Due to operational changes</b>:</span>
                        <ul class="text-justify px-2">
                          <li>Exemption only applies when the operational change occurs due to meteorological issues, in which case only hotel penalties are exempt according to the policies of each hotel, for a future account crossing, in case of requiring the reimbursement of the money, the exoneration.</li>
                          <li>You must have a certification of Operational Changes due to weather conditions issued by the airline, indicating the name of the affected passengers.</li>
                        </ul>
                      </li>
                    </ul>
                  </ul>
                </li>
              </ul>
            </div>
            <div id="politicas-section7" class="col-lg-12 mt-5">
              <h4 class="text-center">Required Documents for International Destinations</h4>
              <p class="text-justify">
                This section describes the basic documents that travelers must present to international destinations. It is the responsibility of the passenger to confirm with migration and corresponding consulates according to their nationality, the mandatory requirements that they must meet to enter the country to which they are going.
              </p>
              <div class="text-justify">
                <ul class="text-justify px-5">
                  <li>Passport valid for at least 6 months on the date of travel </li>
                  <li>Tourist visa in the destinations that apply, both national and international</li>
                  <li>Yellow fever vaccine</li>
                  <li>Air and hotel voucher with dates of entry and exit from the country </li>
                  <li>Minors. Minors traveling outside the country must present, in addition to the indicated documents, civil birth registration, identity card (if they have one). When the minor travels with one or neither of her parents, in addition to the above, they must have permission addressed to the immigration authorities granted by her parents before a competent authority. If the father is abroad, the document must be apostilled</li>
                  <li>The information on the required documents applies to Colombian citizens, foreigners should consult the respective embassies and/or consulates. This information must be constantly re-confirmed at the sales offices and/or embassies or consulates of the destination, the embassies and/or consulates reserve the right to modify the documents and requirements established by them without prior notice. For destinations that require a vaccination certificate, the traveler must present it with the documents indicated here.</li>
                  <li>We do not assume responsibility in the event that the authorities of the visited country deny the passenger the documents required for entry or do not allow it, in which case the value of the unused services will be reimbursed less the value of the expenses and/or or penalties that have been caused. If the passenger is a foreigner, check the travel requirements with your consulate and/or embassy</li>
                </ul>
              </div>
            </div>
            <div id="politicas-section8" class="col-lg-12 mt-5">
              <h4 class="text-center">Against Child Pornography</h4>
              <h5>Prevention of Exploitation, Pornography and Child Sex Tourism</h5>
              <p class="text-justify">
                This numeral complies with the obligation of tour operators to point out warnings against sex tourism and child pornography.<br><br>
                Pursuant to the provisions of Law 679 of 2001, Law 1336 of 2009, and other concordant regulations, <b>__COMERCIAL_NAME__</b>. It warns the tourist that the exploitation and sexual abuse of minors in the country are considered crimes and therefore criminally sanctioned. By virtue of Decree 3840 of 2009, <b>__COMERCIAL_NAME__</b>. It has adopted a "Code of Conduct" model, which promotes prevention policies and prevents the sexual use and exploitation of children and adolescents in tourism.
              <p>
            </div>
            <div id="politicas-section9" class="col-lg-12 mt-5">
              <h4 class="text-center">For Plans With National and International Tickets From Colombia</h4>
              <ul class="text-justify">
                <li><h5>WITHDRAWAL AND WITHDRAWAL OF TOURIST PLANS</h3>
                  <ul class="text-justify px-5">
                    <li><b>WITHDRAWAL</b>: When purchasing air tickets (with or without a plan) at any sales office, through <a href="__BASE_URL__" target="_blank">__BASE_URL__</a>, may withdraw from the trip with an air ticket before it begins, as long as the withdrawal is requested up to 24 hours before the trip, in which case <b>__COMERCIAL_NAME__</b>, the carrier or the travel agency, as the case may be, may retain up to 10% of the value of the ticket fare.</li>
                    <li><b>WITHDRAWAL</b>: When air tickets (with or without a plan) have been purchased through <a href="__BASE_URL__" target="_blank">__BASE_URL__</a>, you may withdraw within 48 hours after the purchase, as long as there is a period greater than 8 calendar days in the case of domestic travel or 15 calendar days in the case of international travel between the time of the request and the date of the trip. In this case <b>__COMERCIAL_NAME__</b>. You can retain up to 10% of the value of the fare, not to exceed $60,000 COP on domestic trips and $50 USD on international trips.</li>
                    <li><b>NOTE</b>: If the payment is made through PayU, the client will assume the administrative charges generated by the payment process, which is equivalent to 5% of the total value of the transaction. or payment made.</li>
                  </ul>
                </li>
                <li><h5>WITHDRAWAL ON THE PURCHASE OF PLANS WITHOUT TICKETS</h5>
                  <ul class="text-justify px-5">
                    <li>When tourist plans without air tickets are purchased through <a href="__BASE_URL__" target="_blank">__BASE_URL__</a>, you can withdraw within 5 business days of purchase. In any case, the withdrawal may not be exercised if the service has already begun to be executed (issued) or if it must be provided within the same term of the withdrawal, that is, within five days of the purchase, in which case the withdrawal will only It will be valid before the purchase begins.</li>
                    <li><b>NOTE</b>: If the payment is made through PayU, the client will assume the administrative charges generated by the payment process, which is equivalent to 5% of the total value of the transaction. or payment made.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        ',
      ],

      //de
      //sobre-nosotros
      [
        'title'        => 'über uns',
        'subtitle'     => 'Mehr',
        'slug'        => 'sobre-nosotros',
        'lang'        => 'de', 
        'status'      => '1',
        'page_data'   => '
          <p class="text-justify"><b>__COMERCIAL_NAME__</b>, ist eine Agentur, die gegründet wurde, um die verschiedenen Akteure der modernen Gesellschaft zu motivieren, ihre Reiseträume zu erfüllen und effektiv dazu beizutragen, dass sie wahr werden. Unser Hauptziel ist es, dem Kunden, der sich an unser Reisebüro wendet, um ein Reiseziel oder einen Urlaubstraum zu erfüllen, ein positives emotionales Erlebnis zu bieten. Garantieren Sie ein innovatives Produkt oder eine innovative Dienstleistung in Übereinstimmung mit den psychobiologischen Bedingungen des Käufers: seinem Leben, seiner Arbeit, seinem Umfeld und den Erwartungen, die er erfüllen muss.
          <br/><br/>
          An der Spitze von Technologie und Kommunikations- und Vertriebsinstrumenten stehen, um den Bedürfnissen der neuen nationalen oder internationalen Generationen gerecht zu werden, alles rund um Flug- und Landtickets, Hotels, ergänzende Dienstleistungen von spezialisiertem und rezeptivem Tourismus, Organisation von Veranstaltungen, national und Internationale Kongresse, Exkursionen für Schulen und Mitarbeiterkassen, Kultur- und Themenreisen, Studententourismus, ua.</p>
          <div class="col-lg-10 offset-lg-1">
            <h5>Andere Ziele</h5>
            <div class="row our-wrapper">
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Garantie</p>
                    <p class="text">Garantieservice und Aufmerksamkeit für Passagiere rund um die Uhr</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Lösung geben</p>
                    <p class="text">Stellen Sie Lösungen für auftretende Probleme freundlich und zeitnah bereit</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Konformität</p>
                    <p class="text">Einhaltung der vom Auftraggeber beauftragten Leistungen</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Aufführen</p>
                    <p class="text">Verfolgen Sie die Kundenreise und den Kundendienst</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row our-wrapper">
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Wissen haben</p>
                    <p class="text">Umfassendes Wissen über die zu vermarktenden Reiseziele, Länder, Geografie, Freizeitaktivitäten, Restaurants, Währungen usw. haben.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Verwalten</p>
                    <p class="text">Verwalten Sie die Ressourcen des Unternehmens auf organisierte und verantwortungsvolle Weise, führen Sie eine korrekte und gesunde Buchhaltung, Steuern und Beziehungen zu Lieferanten</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Konformität</p>
                    <p class="text">Entwicklung des spezialisierten Gesundheits- und Wellnesstourismusprodukts, das die besten Verhandlungen mit Schönheitskliniken, Gesundheitscoaches, natürlichen Entspannungsorten, Krankenschwestern, Transportunternehmen und anderen garantiert.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Mietdienste</p>
                    <p class="text">Schließen Sie hochwertige Dienstleistungen mit den verschiedenen Anbietern ab: unter anderem Fluggesellschaften, Hotels, Kreuzfahrten, Bodentransport, Assistance-Karten, internationale Betreiber, Geschäftszentren und/oder Kongresse.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row our-wrapper">
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Implementieren</p>
                    <p class="text">Implementieren Sie ein Marketing-Technologie-Tool, das den Kaufprozess des Kunden erleichtert.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Aufführen</p>
                    <p class="text">Führen Sie gute Verhandlungen mit Lieferanten, um ein gutes, strukturiertes und innovatives Produkt zu garantieren</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-xs-3">
                <div class="our-content"><i class="our-icon fa-solid fa-check-circle fa-2x"></i>
                  <div class="main-our">
                    <p class="our-title">Community erstellen</p>
                    <p class="text">Schaffen Sie eine Community durch RRSS, die mehr über Reiseziele, Reisetrends und Gesundheits- und Wellnesstourismus informiert.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        ',
      ],
      //Mision
      [
        'title' => 'Mission',
        'subtitle' => 'Unsere Mission',
        'slug' => 'mision',
        'lang' => 'de',
        'status' => '1',
        'page_data' => '<p class="text-justify">Ein Reisebüro zu sein, das sich mit Leidenschaft an der nachhaltigen und verantwortungsvollen Entwicklung des Tourismus in Kolumbien beteiligt, garantierte Qualitätsprodukte anbietet und dabei effizient, freundlich und respektvoll ist garantiert die Erfüllung der Träume und Ziele des Kunden</p>',
      ],
      //Vision
      [
        'title' => 'Vision',
        'subtitle' => 'Unsere Vision',
        'slug' => 'vision',
        'lang' => 'de',
        'status' => '1',
        'page_data' => '<p class="text-justify">Ein Reisebüro und führend in der Entwicklung, Förderung und Vermarktung von Gesundheits- und Wellnesstourismus in Kolumbien zu sein, hauptsächlich in Städten wie Bogotá, Cali und Medellín. Und über Transaktionsportale in Ländern wie den Vereinigten Staaten und Europa</p>',
      ],
      //Sostenibilidad
      [
        'title' => 'Nachhaltigkeit',
        'subtitle' => 'Nachhaltiger Tourismus',
        'slug' => 'sostenibilidad',
        'lang' => 'de',
        'status' => '1',
        'page_data' => '
          <div id="sostenibilidad-section0" class="col-lg-12 mt-5">
            <h1 class="text-center">Nachhaltiger Tourismus</h1>
            <p class="text-justify">
              Nachhaltiger Tourismus ist bestrebt, seine Aktivitäten zu entwickeln, die eine minimale Auswirkung auf die Umwelt haben. Der Hauptschlüssel ist, dass die Ausbeutung einer Ressource unter ihrer Erneuerungsgrenze liegt. Mit anderen Worten, es geht darum, den Tourismus zu fördern, der das Ökosystem respektiert, mit minimalen Auswirkungen auf die Umwelt und die lokale Kultur. Darüber hinaus zielt der wirtschaftliche Aspekt darauf ab, Beschäftigung und Einkommen für die einheimische Bevölkerung zu generieren.
            </p>
          </div>
          <div id="sostenibilidad-section1" class="col-lg-12 mt-5">
            <h1 class="text-center">Nachhaltigkeitsrichtlinie</h1>
            <p class="text-justify">
              Das Reise- und Tourismusbüro Do It mit Sitz in Bogotá DC verpflichtet sich, alle negativen Auswirkungen, die sich auf die natürliche Umwelt aufgrund der Entwicklung seines Betriebs auswirken, zu mildern und die Nutzung natürlicher Ressourcen zu optimieren und bewährte Praktiken von Touristen in Parks und Natur zu fördern Gebiete und Bekanntmachung dieser Naturgebiete in verschiedenen Kommunikationsquellen.<br>

              Ebenso engagiert sie sich für die Förderung und Bewahrung des kulturellen Erbes der Regionen und Reiseziele, in denen sie wirtschaftlich tätig ist, und legt auf verantwortungsvolle Weise die Traditionen und touristischen Attraktionen der Region, die Gastronomie, das Kunsthandwerk und die Immobilien von kultureller Bedeutung offen.<br >

              Es verpflichtet sich auch, die Gemeinschaft der Reiseziele zu schützen und zu unterstützen, indem es gute nachhaltige Praktiken umsetzt, die Rechte aller Akteure respektiert und die Erfüllung ihrer Pflichten sicherstellt; Vermeidung negativer Auswirkungen wie CSEC (Sexual and Commercial Exploitation of Children and Adolescents) im Zusammenhang mit Reisen und Tourismus. Zu diesem Zweck wird es eine Basis lokaler Mitarbeiter und Lieferanten haben, die sich für die Erhaltung der Umwelt, der Kultur und der sozialen Entwicklung einsetzen und im Rahmen einer Einstellungspolitik ohne Diskriminierung eingestellt werden.
            </p>
          </div>
          <div id="sostenibilidad-section2" class="col-lg-12 mt-5">
            <h1 class="text-center">Verhaltenskodex</h1>
            <p class="text-justify">
              In Übereinstimmung mit den Grundsätzen der Nachhaltigkeitsrichtlinie des Reisebüros wird der folgende Verhaltenskodex festgelegt, der die Mindeststandards und die unternehmerische Verpflichtung festlegt, diese einzuhalten und deren Einhaltung von seinen Mitarbeitern, Kunden und Lieferanten von Waren und Dienstleistungen zu fordern Dienstleistungen:
            </p><br>
            <ol class="text-justify">
              <li>Unterlassen Sie ausdrücklich oder heimlich das Anbieten von Plänen zur sexuellen Ausbeutung von Kindern und Jugendlichen in Tourismusförderungsprogrammen und Tourismusplänen.</li>
              <li>Unterlassen Sie es, Touristen direkt oder über einen Vermittler Informationen über Orte zu geben, an denen sie koordiniert werden oder an denen kommerzielle sexuelle Ausbeutung von Kindern und Jugendlichen praktiziert wird.</li>
              <li>Unterlassen Sie es, Touristen direkt oder über Dritte zu Einrichtungen oder Orten zu fahren, an denen die kommerzielle sexuelle Ausbeutung von Kindern praktiziert wird, sowie sie zu Orten zu fahren, an denen sich Touristen aufhalten, selbst wenn es sich um Orte auf hoher See handelt , Grenzen der kommerziellen sexuellen Ausbeutung von Kindern und Jugendlichen.</li>
              <li>Unterlassen Sie die Bereitstellung von Fahrzeugen auf touristischen Routen zum Zwecke der sexuellen Ausbeutung oder des Missbrauchs von Kindern und Jugendlichen.</li>
              <li>Verhindern Sie den Zutritt von Kindern und Jugendlichen in Hotels oder Beherbergungs- und Beherbergungsstätten, Bars, ähnliche Betriebe und andere Einrichtungen, in denen touristische Dienstleistungen erbracht werden, zum Zwecke der sexuellen Ausbeutung oder des sexuellen Missbrauchs.</li>
              <li>Ergreifen Sie Maßnahmen, um zu verhindern, dass Personal, das in irgendeiner Weise mit dem Unternehmen verbunden ist, touristische Dienstleistungen anbietet, die sexuelle Aktivitäten mit Kindern und Jugendlichen ermöglichen.</li>
              <li>In- und ausländische Kinder und Jugendliche vor allen Formen der Ausbeutung und sexuellen Gewalt durch in- und ausländische Touristen schützen.</li><li>Melden Sie dem Ministerium für Handel, Industrie und Tourismus und anderen zuständigen Behörden die Tatsachen, von denen sie auf irgendeine Weise Kenntnis erlangt haben, sowie den entsprechenden Verdacht im Zusammenhang mit der sexuellen Ausbeutung von Kindern und Jugendlichen und stellen Sie sicher, dass dies der Fall ist Es gibt unternehmensinterne Kanäle, um solche Vorfälle den zuständigen Behörden zu melden.</li>
              <li>Gestalten und veröffentlichen Sie innerhalb des Unternehmens und bei seinen Lieferanten von Waren und Dienstleistungen eine Richtlinie, in der der Anbieter Maßnahmen festlegt, um alle Formen der sexuellen Ausbeutung von Kindern und Jugendlichen auf Reisen und im Tourismus zu verhindern und ihnen entgegenzuwirken.</ li>
              <li>. Alle mit dem Unternehmen verbundenen und verbundenen Mitarbeiter sowie Lieferanten, die aufgrund der Art ihrer Tätigkeit Kontakt mit Touristen haben, in Bezug auf die Verhinderung der kommerziellen sexuellen Ausbeutung von Kindern und Jugendlichen schulen. </li>
              <li>. Informieren Sie Ihre Nutzer über die rechtlichen Folgen der sexuellen Ausbeutung und des Missbrauchs von Kindern und Jugendlichen in Kolumbien.</li>
              <li>. Lehnen Sie Diskriminierung aufgrund von Rasse oder Geschlecht ab.</li>
              <li>. Verbreitung der Bedeutung der Erhaltung und angemessenen Nutzung des natürlichen und kulturellen Reichtums Kolumbiens.</li>
              <li>. Schützen Sie die Fauna und Flora der Orte, die aufgrund touristischer Aktivitäten besucht werden.</li>\n <li>. Schützen und heben Sie die Werte der Naturattraktionen Kolumbiens hervor.</li>
              <li>. Verbreiten Sie die Nachhaltigkeitskonzepte, mit denen das Unternehmen arbeitet, an Kunden, Lieferanten und Mitarbeiter.</li>
              <li>. Fordern Sie physische Sicherheit von unseren Lieferanten bei der Bereitstellung der von ihnen angebotenen Dienstleistungen.</li>
            </ol>
          </div>
          <div id="sostenibilidad-section3" class="col-lg-12 mt-5">
            <h1 class="text-center">Ziele für nachhaltigen Tourismus</h1>
            <p class="text-justify">
              Im Jahr 2005 haben die Welttourismusorganisation und das Umweltprogramm der Vereinten Nationen 12 Ziele festgelegt, die ein Modell darstellen:
            </p>
            <ol class="text-justify">
              <li>Kultureller Reichtum: Die Achtung und Aufwertung des historischen Erbes oder die Achtung der lokalen Kultur und ihres unverwechselbaren Charakters ist von wesentlicher Bedeutung.</li>
              <li>Integrität des Ökosystems: Erhaltung und Verbesserung von Landschaften, städtischen oder ländlichen Gebieten. Es geht darum, die Umweltzerstörung zu vermeiden.</li>
              <li>Biologische Vielfalt: Unterstützen Sie die Erhaltung von Naturgebieten und minimieren Sie deren Schäden.</li>
              <li>Ressourceneffizienz: besteht darin, den Verbrauch knapper und nicht erneuerbarer Ressourcen so weit wie möglich zu minimieren.</li>
              <li>Umweltreinheit: Reduzieren Sie die Kontamination von Luft, Wasser und Land auf das Maximum und reduzieren Sie die Abfallerzeugung.</li>
              <li>Lokale Kontrolle: Es geht darum, die lokale Bevölkerung in die Entscheidungsfindung bezüglich des Managements und der zukünftigen Entwicklung des Tourismus in ihrem Gebiet einzubeziehen.</li>
              <li>Wohlbefinden der Gemeinschaft: Erhaltung und Verbesserung der Lebensqualität am Gastort. Dazu ist es notwendig, diesen Gemeinschaften die notwendigen Ressourcen zur Verfügung zu stellen, die sie möglicherweise benötigen, sowohl auf logistischer Ebene in Infrastrukturen als auch in Dienstleistungen. Es ist wichtig, dass dies nicht zu einer Verschlechterung oder Ausbeutung des Ökosystems oder seiner Gesellschaft führt.</li>
              <li><b>Wirtschaftlich:</b> Gewährleistung der wirtschaftlichen Lebensfähigkeit für langfristigen Wohlstand und Gewinn.</li>
              <li><b>Lokaler Wohlstand:</b> Führung und Maximierung des Beitrags des Tourismus zum wirtschaftlichen Wohlstand des Gastlandes.</li>
              <li><b>Qualität der Beschäftigung:</b> besteht darin, die Qualität der Arbeitsplätze sowohl qualitativ als auch zahlenmäßig zu stärken. Neben der Sicherstellung der Rahmenbedingungen wird darauf geachtet, dass keine Diskriminierung aufgrund von Rasse, Geschlecht, Behinderung oder anderen Formen stattfindet.</li>
              <li><b>Soziale Gerechtigkeit:</b> besteht aus einer gerechten Verteilung des durch den Tourismus generierten Reichtums in der aufnehmenden Gemeinde.</b>
              <li><b>Besucherzufriedenheit:</b> Bieten Sie allen Besuchern ein sicheres und zufriedenstellendes Erlebnis ohne soziale Diskriminierung.</li>
            </ol>
          </div>
        ',
      ],
      //Privacidad
      [
        'title' => 'Datenschutz',
        'subtitle' => 'Unsere Richtlinien',
        'slug' => 'privacidad',
        'lang' => 'de',
        'status' => '1',
        'page_data' => '
          <div class="col-12">
            <span class="mt-5 text-center" style="font-size: 0.8rem !important;"><b>Aktualisiert</b>: __PRIVACY_DATE__</span>
          </div>
          <div class="col-lg-6">
            <div id="privacidad-section1" class="col-lg-12 mt-5">
              <h1 class="text-center">Datenschutzrichtlinie und Hinweis zu personenbezogenen Daten</h1>
              <p class="text-justify">
                In Übereinstimmung mit den Vorschriften zum Umgang mit personenbezogenen Daten und zum Datenschutz, <b>__COMERCIAL_NAME__</b>. Bitte lesen Sie diese Richtlinie, bevor Sie Ihre persönlichen Daten angeben.
                <br/><br/>Wenn Sie dieser Richtlinie widersprechen, müssen Sie die Nutzung der Website (<a href="__BASE_URL__" target="_blank">__BASE_URL__</a>) einstellen.
                <br/><br/>Die Verarbeitung personenbezogener Daten und die Datenschutzrichtlinie sind Teil der Allgemeinen Geschäftsbedingungen dieser Website (<a href="__BASE_URL__" target="_blank">__BASE_URL__</a>), für die sie bindend sind Alle Nutzer.
                <br/><br/>Die Politik von <b>__COMERCIAL_NAME__</b> ist es, Ihre Privatsphäre zu respektieren und zu schützen, daher ergreift <b>__COMERCIAL_NAME__</b> die notwendigen Maßnahmen, um die Vertraulichkeit der von Ihnen bereitgestellten Informationen zu wahren uns und zum Schutz Ihrer personenbezogenen Daten.
              </p>
            </div>
            <div id="privacidad-section2" class="col-lg-12 mt-5">
              <h1 class="text-center">Persönliche Informationen, die wir sammeln</h1>
              <p class="text-justify">
                Wir können alle Informationen über Ihren Namen, Ihre Adresse, Ihre E-Mail-Adresse, Ihre Telefonnummer, Ihr Geburtsdatum, bevorzugte Kommunikationsmethoden, Finanzdaten wie Kreditkarteninformationen, Vielfliegerinformationen, Reisehistorie, Begleiterdaten, Präferenzen, Datenrouten und andere Reservierungen erfassen , unter anderen.
                <br/><br/>Alle bereitgestellten personenbezogenen und/oder vermögensbezogenen Daten werden gemäß den Richtlinien behandelt, die von den kolumbianischen Gesetzen und anderen von den zuständigen Behörden erlassenen Vorschriften durch implementierte administrative, technische und physische Sicherheitsmaßnahmen gegen Beschädigung und Verlust vorgeschrieben sind , Änderung, Zerstörung oder unbefugte Nutzung, Zugriff oder Behandlung.
              </p>
            </div>
            <div id="privacidad-section3" class="col-lg-12 mt-5">
              <h1 class="text-center">Zweck und Verwendung Ihrer persönlichen Daten</h1>
              <p class="text-justify">
                Wir verwenden Ihre personenbezogenen Daten, um unsere Dienstleistungen und die der Konzernunternehmen bereitzustellen, die Sie anfordern, wie z ihre damit verbundenen oder ergänzenden Aktivitäten sowie zur Durchführung von Umfragen, Tracking- und Marketingangeboten, Newslettern, Preisverleihungen und Wettbewerben, die von <b>__COMERCIAL_NAME__</b> entwickelt wurden.
              </p>
            </div>
            <div id="privacidad-section4" class="col-lg-12 mt-5">
              <h1 class="text-center">Vertraulichkeit</h1>
              <p class="text-justify">
                Die Vertraulichkeit von Personen- und/oder Eigentumsdaten wird durch Verfahren, Kontrollen, Technologien und Audits garantiert, die implementiert werden, um sie sicher und vor Beschädigung, Verlust, Änderung und unbefugter Nutzung zu schützen.
                <br/><br/>Sensible Informationen in Bezug auf Ihre Gesundheit, Rasse oder ethnische Herkunft, Ihre politischen Meinungen, religiösen oder anderen Überzeugungen, Vorstrafen, Gesundheitszustände oder die Mitgliedschaft in Gruppen oder Berufsverbänden werden nicht angefordert, es sei denn, es handelt sich um seine Initiative und die Bereitschaft, es zu liefern, um einen bestimmten Bedarf von ihm zu befriedigen. Diese Informationen werden unter denselben Vertraulichkeitsstandards und -kontrollen behandelt.
                <br/><br/>Nur kompetente und autorisierte Personen haben eingeschränkten und kontrollierten Zugriff auf Datenquellen.
                <br/><br/>Mitarbeiter und/oder Dritte sind durch Datenschutzverträge verpflichtet, den Datenschutz zu gewährleisten. Diese Verpflichtungen bestehen auch nach Beendigung der Geschäftsbeziehung mit dem Unternehmen fort.
              </p>
            </div>
            <div id="privacidad-section5" class="col-lg-12 mt-5">
              <h1 class="text-center">Wie wir personenbezogene Daten weitergeben</h1>
              <p class="text-justify">
                Als Unternehmen <b>__COMERCIAL_NAME__</b> können wir Ihre personenbezogenen Daten an andere Mitglieder unserer Unternehmensgruppe, Franchisenehmer, von uns verwaltete Hotels oder Dienstleister weitergeben, die sich möglicherweise in einem anderen Land als Ihrem befinden, mit der alleinigen Zweck, Ihre größtmögliche Zufriedenheit bei der Erbringung der gekauften Dienstleistung zu erreichen.
                <br/></br/>Von Zeit zu Zeit arbeiten wir mit anderen Unternehmen zusammen, um Werbeaktionen, Produkte und Dienstleistungen mit Co-Branding oder Co-Sponsor bereitzustellen, sodass wir Ihre Informationen möglicherweise mit unserem Co-Sponsor teilen. <br/></br/>Wir geben personenbezogene Daten auch an Dienstleister wie Spas, Golfplätze, Restaurants, Messaging, Transport und andere Aktivitäten im Zusammenhang mit und notwendig für den Tourismusservice, Flugpakete und Mietwagen, die Kommunikation weiter Nachrichten und die Zustellung von Werbematerial mittels elektronischer Post oder Direktwerbung, die Abwicklung von Kreditkartentransaktionen, Verbesserungsdienste und die Verwaltung von Gewinnspielen und Gewinnauszeichnungen sowie die Durchführung von Kundenbefragungen.
                <br/></br/>Wir können personenbezogene Daten an Kreditinstitute weitergeben, wenn dies zur Durchführung von Transaktionen und Abklärungen bezüglich der Bezahlung der Ihnen erbrachten Dienstleistungen erforderlich ist.
                <br/></br/>In jedem Fall übernehmen die Lieferanten oder Drittempfänger der personenbezogenen Daten, deren Übertragung autorisiert ist, die gleichen Verpflichtungen, die der für die Daten verantwortlichen Person entsprechen, und sind an Datenschutz- und Vertraulichkeitsverträge gebunden .um wiederum die Vertraulichkeit der in seinem Besitz befindlichen Daten zu gewährleisten.
                <br/></br/>Die Übertragung an Holdinggesellschaften, Tochtergesellschaften oder verbundene Unternehmen oder an eine Muttergesellschaft oder an ein Unternehmen derselben Gruppe, das nach denselben internen Prozessen und Richtlinien arbeitet, kann ohne Notwendigkeit erfolgen für neue Zustimmung aus der Überschrift.
                <br/></br/>Im Falle des Verkaufs, der Fusion, der Konsolidierung, der Liquidation oder der Übertragung dieses Unternehmens oder der Konzernunternehmen an einen Dritten werden personenbezogene Daten an diesen Dritten übermittelt, ohne dass eine erneute Übertragung erforderlich ist Genehmigung unter der Bedingung der Schutz- und Geheimhaltungspflicht.
              </p>
            </div>
            <div id="privacidad-section6" class="col-lg-12 mt-5">
              <h1 class="text-center">Links zu Websites Dritter</h1>
              <p class="text-justify">
                Unsere Website kann Links zu Websites Dritter enthalten. Bitte beachten Sie, dass wir nicht für die Erfassung, Verwendung, Pflege, Offenlegung oder Weitergabe von Daten und Informationen durch solche Dritten verantwortlich sind. Wenn Sie Informationen auf Websites Dritter bereitstellen, gelten die Datenschutzrichtlinien und Nutzungsbedingungen dieser Websites.
              </p>
            </div>
            <div id="privacidad-section7" class="col-lg-12 mt-5">
              <h1 class="text-center">Schutz personenbezogener Daten</h1>
              <p class="text-justify">
                <b>__COMERCIAL_NAME__</b> wird die erforderlichen Maßnahmen ergreifen, um: <br/>
              </p>
              <ol class="text-justify px-5">
                <li>Schützen Sie gesammelte personenbezogene Daten vor unbefugtem Zugriff, Offenlegung, Änderung oder Zerstörung. </li>
                <li>Halten Sie personenbezogene Daten zuverlässig und aktuell in Übereinstimmung mit geltendem Recht. </li>
              </ol>
              <p class="text-justify">
                Wir beabsichtigen auch zu verlangen, dass unsere verbundenen Unternehmen und Dienstanbieter alle Anstrengungen unternehmen, um die Zuverlässigkeit Ihrer personenbezogenen Daten zu wahren. Bei Online-Transaktionen verwenden wir Sicherheitstechnologien, um die personenbezogenen Daten zu schützen, die Sie uns über unsere Website übermitteln. Leider kann kein Sicherheitssystem oder System zur Übertragung von Daten über das Internet garantieren, dass es vollständig sicher ist.
              <br/><br/>Fügen Sie zu Ihrem eigenen Schutz und Ihrer Privatsphäre keine personenbezogenen Daten, die Sie als vertraulich betrachten, oder Kreditkartendaten in die E-Mail-Nachrichten ein, die Sie uns senden.
              </p>
            </div>
            <div id="privacidad-section8" class="col-lg-12 mt-5">
              <h1 class="text-center">Änderungen an der Richtlinie</h1>
              <p class="text-justify">
                Wir werden personenbezogene Daten nicht auf eine andere als die autorisierte Weise verwenden.
                <br/><br/>Falls wir personenbezogene Daten für einen anderen als den hier genehmigten Zweck benötigen, werden wir eine neue Datenschutzerklärung mit den Merkmalen der neuen Behandlung zur Verfügung stellen.
                <br/><br/>Wir können diese Richtlinie von Zeit zu Zeit ändern. Wenn wir wesentliche oder wesentliche Änderungen vornehmen, werden diese auf der Homepage unserer Website mitgeteilt, bevor sie implementiert werden. Wann diese Richtlinie aktualisiert wird, erkennen Sie an dem Datum, das am jeweiligen Informationsrand erscheint.
                <br/><br/>Alle Änderungen an unserer Richtlinie treten in Kraft, wenn die überarbeitete Richtlinie auf der Website veröffentlicht wird.
                <br/><br/>Durch die Nutzung dieser Website nach diesen Änderungen akzeptieren Sie die überarbeitete Richtlinie, sobald sie in Kraft tritt.
              </p>
            </div>
            <div id="privacidad-section9" class="col-lg-12 mt-5">
              <h1 class="text-center">Rechte des Eigentümers</h1>
              <p class="text-justify">
                Als Eigentümer können Sie jederzeit Ihre Rechte auf Auskunft, Berichtigung, Löschung oder Widerspruch gegen die Verarbeitung Ihrer Daten ausüben, indem Sie Ihre Anfrage per E-Mail an <a href="mailto:__CONTACT_EMAIL__">__CONTACT_EMAIL__</a> senden schriftlich an den gesetzlichen Vertreter von <b>__COMERCIAL_NAME__</b>.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
          </div>
        ',
      ],
      //Políticas
      [
        'title'       => 'Allgemeine Geschäftsbedingungen',
        'subtitle'    => 'Unsere Richtlinien',
        'slug'        => 'politicas',
        'lang'        => 'de', 
        'status'      => '1',
        'page_data'   => '
          <div class="col-12">
            <span class="mt-5 text-center" style="font-size: 0.8rem !important;"><b>Aktualisiert</b>: __PRIVACY_DATE__</span>
          </div>
          <div class="col-lg-12">
            <div id="politicas-section1" class="col-lg-12 mt-5">
              <h4 class="text-center">Definitionen</h4>
                <ol type="a" class="text-justify px-5">
                  <li><b>Hotel</b>: Unter Hotelbetrieb versteht man die Gesamtheit von Gütern, die von der juristischen Person dazu bestimmt sind, eine vorübergehende Beherbergungsleistung für weniger als 30 Tage mit oder ohne Verpflegung und Grund- und/oder Zusatzleistungen zu erbringen . oder Unterkunftszubehör, über einen Beherbergungsvertrag.</li>
                  <li><b>Beherbergungsvertrag</b>: Es handelt sich um einen Handels- und Haftpachtvertrag, den ein Unternehmen, das sich dieser Tätigkeit widmet, mit dem Hauptzweck abschließt, einer anderen Person, die als Gast bezeichnet wird, durch die Zahlung der jeweiligen Unterkunft Unterkunft zu gewähren Preis, für einen Zeitraum von weniger als 30 Tagen.</li>
                  <li><b>Reisebüro</b>: Mit Tourismus verbundenes Unternehmen, dessen Tätigkeit die Vermittlung, Organisation und Ausführung von Projekten, Plänen und Reiserouten, Vorbereitung und Verkauf von touristischen Produkten zwischen seinen Kunden und bestimmten Reiseanbietern für diese ist dokumentieren, dass es <b>__COMERCIAL_NAME__</b></li> ist
                  <li><b>Externe Agenturen</b>: Groß- oder Einzelhandelsagenturen, Freiberufler, Mitarbeiterkassen, Genossenschaften, die Reisepläne über das Reisebüro verkaufen. </li>
                  <li><b>PQR</b>: Anfrage, Beschwerde oder Behauptung, die ein Kunde vorlegt und die unbedingt dokumentiert werden muss und eine Reaktionszeit von nicht mehr als 15 Werktagen haben muss.</li>
                  <li><b>Kundendienstberater</b>: Verantwortlich für die Bereitstellung aller vom Kunden/Passagier/Gast angeforderten Informationen, um alle Anfragen rechtzeitig gemäß den Richtlinien und Verfahren des Reisebüros zu verwalten und zu beantworten . Reisen, um Ihnen ein hervorragendes Serviceerlebnis zu bieten.</li>
                  <li><b>Kunde/Passagier/Gast</b>: Natürliche Person, die von einem Ort zum anderen reist und einen Reiseplan bezahlt hat.</li>
                  <li><b>Fluggesellschaft</b>: Unternehmen, das sich der Beförderung von Passagieren oder Fracht per Flugzeug widmet.</li>
                  <li><b>E-TKT</b>: Von einer Fluggesellschaft ausgestelltes elektronisches Dokument zur Wirksamkeit der erworbenen Lufttransportdienste.</li>
                  <li><b>Saisons</b>: Bestimmte Zeiträume des Jahres, in denen zuvor festgelegte Differenzsätze und Konditionen gelten.</li>
                  <li><b>Räume</b>: Teil des Raums eines Hotels, der von den anderen getrennt ist und für den Rest der Gäste bestimmt ist.</li>
                  <li><b>Verbindungen</b>: Ein Flugzeugwechsel, der von einem Kunden in einer Zwischenstadt oder Zwischenstädten vorgenommen wird, bevor er sein endgültiges Ziel erreicht.</li>
                  <li><b>Reservierung</b>: Trennung von Flug- und/oder Hotelkontingenten an einem bestimmten Datum für einen Kunden für einen festgelegten Zeitraum.</li>
                  <li><b>Bestätigte Reservierung</b>: Trennung von Flug- und/oder Hotelkontingenten an einem bestimmten Datum für einen Kunden für einen festgelegten Zeitraum. Diese Reservierung enthält keine Zahlungen oder Anzahlungen oder entspricht nicht dem festgelegten Zahlungsplan.</li>
                  <li><b>Rückbestätigte Reservierung</b>: Trennung von Flug- und/oder Hotelkontingenten für einen Kunden an einem bestimmten Datum bis zur Erbringung der Leistung, diese Reservierung hat Raten und entspricht dem festgelegten Zahlungsplan oder der Gesamtsumme Zahlung erfolgt.</li>
                  <li><b>Reservierung storniert</b>: Stornierung einer Trennung von Flug- und/oder Hotelkontingenten für einen Kunden zu einem bestimmten Datum, für diese Reservierung konnten oder konnten keine Zahlungen oder Anzahlungen erhalten werden.</li>
                  <li><b>Voucher</b>: Dokument, das alle Daten der rückbestätigten Reservierung bei vollständiger Bezahlung einer touristischen Leistung enthält und einen Reservierungscode hat, der vom Kunden den rückbestätigten Leistungsträgern vorgelegt werden muss ihre Reservierung, um die Nutzung der erworbenen Dienste wirksam zu machen.</li><li><b>Nichterscheinen</b>: Keine Präsentation eines Kunden für einen zuvor erworbenen Plan ohne Ankündigung. Nichterscheinen im Hotel kann zum Verlust des erworbenen Plans führen.</li>
                  <li><b>Rückerstattung</b>: Wirtschaftlicher Vorgang, bei dem ein Kunde einen Teil oder das gesamte Geld zurückerhält, das zuvor als Zahlung für einen Reiseplan geliefert wurde.</li>
                  <li><b>Tourismuskarte</b>: Steuer, die in einigen Ländern und/oder Reisezielen erhoben wird, um Nichtansässigen die Einreise in ihr Hoheitsgebiet für einen vorübergehenden Zeitraum zu ermöglichen.</li>
                  <li><b>Ziel</b>: Bereich, Ort oder Bereich, wohin ein Kunde, für den ich einen Plan gekauft habe, geleitet wird.</li>
                  <li><b>Reiseplan</b>: Es handelt sich um eine Reihe von touristischen Dienstleistungen, die auf einzigartige Weise vermarktet werden und Dienstleistungen wie Unterkunft, Verpflegung, Transport und andere Dienstleistungen enthalten, für die ein Preis gezahlt wird, der die Gesamtheit der Leistungen und nicht für jede erbrachte Leistung ein individueller Preis festgelegt.</li>
                  <li><b>Aktions- oder Sonderplan</b>: Zeitweiliges Angebot von Produkten zu besonders günstigen Konditionen oder kostenlos als Anreiz für den Verbraucher. Unter Promotion versteht man auch das Anbieten von Produkten mit zusätzlichen Inhalten zur üblichen Präsentation, kostenlos oder zu einem reduzierten und zeitlich begrenzten Preis. Sowie was durch das Verbraucheranreizsystem, wie Verlosungen, Wettbewerbe und ähnliches, in Geld, Sachleistungen oder mit dem Sammeln von Punkten erfolgt.</li>
                  <li><b>Rechnung</b>: Entspricht dem Dokument, das die Gesamtzahlung des Touristenplans bestätigt.</li>
                  <li><b>Strafe</b>: Geldstrafe aufgrund der Nichteinhaltung einer oder mehrerer Bedingungen oder Umstände, die zuvor im Reiseplan vereinbart wurden.</li>
                  <li><b>Zusätzliche Dienstleistungen</b>: Zusätzliche touristische Dienstleistungen, die nicht im Touristenplan enthalten sind und die vom Benutzer/Reisenden optional sind.</li>
                  <li><b>Receptive</b>:Zusätzliche Dienstleistungen wie Touren und Transfers, die in den verschiedenen Destinationen angeboten werden.</li>
                  <li><b>Repräsentativer Marktkurs oder TRM</b>: Der repräsentative Marktwechselkurs (TRM) ist der Betrag kolumbianischer Pesos für einen US-Dollar.</li>
                  <li><b>Reservierungszentrum</b>: Bereich, der für die Verwaltung der Zimmer und Flugtickets zuständig ist, die an den Kunden verkauft werden.</li>
                  <li><b>Gegenkonten</b>: Verfahren zum Überweisen von Geld von einer ursprünglichen Reservierung auf eine neue Reservierung desselben Passagiers.</li>
                  <li><b>Rückbuchung</b>: Rückzahlung des Geldes direkt auf die Kreditkarte des Kunden durch das autorisierte Franchise.</li>
                  <li><b>Entlastung</b>: Vorgang, bei dem das Reisebüro beschließt, die Gebühren, die für eine Änderung oder Stornierung gelten können, nicht zu berechnen.</li>
                  <li><b>Abwanderung</b>: Bezieht sich auf den Vorgang des Erstellens und Stornierens ab der dritten Reservierung desselben Flugsegments für denselben Passagier, unabhängig von der Flugnummer, wodurch zusätzliche Gebühren anfallen können.</li >
                  <li><b>Widerruf</b>: Recht, das dem Käufer hilft, den Kauf zu stornieren und eine Rückerstattung zu verlangen. Dieses Recht gilt, wenn ein Kunde Pläne mit Flugtickets im Callcenter oder über die von der Agentur autorisierten Websites kauft, sofern die Stornierung innerhalb von 48 laufenden Stunden nach dem Kauf und zum Zeitpunkt Ihrer Anfrage und dem Reisedatum erfolgt ein Zeitraum von mehr als 8 Kalendertagen bei Inlandsflügen oder 15 Kalendertagen bei internationalen Flügen.</li>
                  <li><b>Rücktritt</b>: Das Recht des Käufers, den Kauf zu stornieren und eine Rückerstattung zu verlangen. Dieses Recht gilt, wenn ein Kunde Pläne mit Flugtickets in einem beliebigen Verkaufskanal kauft, bevor er die Reise antritt, sofern er dieses Recht bis zu 24 Stunden vor dem ersten Flug anfordert und der gekaufte Tarif kein Sonderangebot ist.</li>
                  <li><b>Website</b>: von <b>__COMERCIAL_NAME__</b> autorisierte Seiten für den Vertrieb von Touristenpaketen.</li>
                </ol>
            </div>
            <div id="politicas-section2" class="col-lg-12 mt-5">
              <h4 class="text-center">Verantwortungsklausel</h4>
              <p class="text-justify">
                <b>__COMERCIAL_NAME__</b>. Es fungiert als Vermittler zwischen den Benutzern und denjenigen, die die enthaltenen Dienstleistungen erbringen, wie unter anderem Fluggesellschaften, Hotels und Transportunternehmen; <b>__COMERCIAL_NAME__</b>. Es ist verantwortlich für die Strukturierung von Touristenpaketen, um dem Kunden zu erleichtern, Luft- und Landkontingente sowie Zimmerreservierungen zu erhalten, die erforderlichen Dienstleistungen anzufordern und sie im Namen des Benutzers gemäß ihrer Verfügbarkeit zu beauftragen; alles nach Angaben der Leistungsträger.<br>
                <b>__COMERCIAL_NAME__</b>, wird in Fällen höherer Gewalt oder zufälliger Ereignisse wie Unfälle, Streiks, Unruhen, Erdbeben, klimatische oder natürliche Phänomene, Sicherheitsbedingungen, politische Faktoren, Verweigerung von Einkommensgenehmigungen von den vertraglichen Verpflichtungen befreit , gesundheitliche Probleme und/oder andere Umstände, die außerhalb der Kontrolle des Unternehmens liegen, wie Unfälle, mechanische Schwierigkeiten, Schäden am Flugzeug/an den Flugzeugen, ungünstige Wetterbedingungen. Wir erzählen einige Fälle, ohne uns darauf zu beschränken:
              </p>
              <ol type="a" class="text-justify px-5">
                <li>Verspätungen an Flughäfen, Flugverspätungen, Hotelüberlastung, Quarantänen und andere Umstände höherer Gewalt oder zufällige Ereignisse, die die normale Entwicklung der Erbringung touristischer Dienstleistungen verändern, also wenn die Anbieter der vertraglich vereinbarten Dienstleistungen diese teilweise oder vollständig nicht erbringen könnten Ebenso wird nur die Erstattung des entsprechenden Betrags vom Benutzer verwaltet, unter Ausschluss jeglicher anderer Verpflichtungen.</li>
                <li>Unfälle, Verluste oder Schäden, die Kunden aufgrund von Leichtsinn oder Nichtbeachtung der Anweisungen und/oder Vorschriften von Fluggesellschaften, Hotels oder Anbietern von touristischen Dienstleistungen für den Genuss ihres Aufenthalts erleiden. Schäden, Verluste und Verluste, die durch Fahrlässigkeit, Fahrlässigkeit oder Nichtlieferung von Schmuck und/oder Eigentum des Kunden verursacht wurden.</li>
                <li>Es ist wichtig, dass der Kunde mit dem Berater überprüft, ob das Ziel, zu dem er reisen möchte, die Zahlung von Ein- und/oder Ausreisesteuern erfordert und ob dieser Posten im Wert des Plans enthalten ist. Falls zutreffend und enthalten, wird der Wert innerhalb der Plankosten abgegrenzt. Flugdienste werden von den Fluggesellschaften erbracht, mit denen sie Vereinbarungen getroffen haben; Die Landdienste, die Teil des Reiseplans sind, werden von externen Reiseveranstaltern erbracht, die als von <b>__COMERCIAL_NAME__</b> unabhängige juristische Personen fungieren. die im Falle von Verlust oder Beschädigung direkt und individuell auf den Reisenden reagieren, der von jeder der bereitgestellten Dienstleistungen betroffen ist.</li>
                <li>Es liegt in der Verantwortung des Benutzers, alle seine originalen und aktuellen Unterlagen zum Zeitpunkt der Inanspruchnahme der erworbenen Dienste vorzulegen. Im Falle des Ausfalls vertraglich vereinbarter Leistungen aus diesem Grund wird <b>__COMERCIAL_NAME__</b> weder haftbar gemacht noch von der Höhe der Strafen oder dem Verlust des Urlaubsplans befreit. Die im gekauften Plan enthaltenen Dienstleistungen liegen in der Verantwortung der jeweiligen Unternehmen, die sie anbieten. <b>__COMERCIAL_NAME__</b> handelt nur als Agent oder Vermittler gegenüber dem Kunden.</li>
              </ol>
            </div>
            <div id="politicas-section3" class="col-lg-12 mt-5">
              <h4 class="text-center">Ausnahmen</h4>
              <ol type="1" class="text-justify">
                <li><b>__COMERCIAL_NAME__</b> ist nicht verantwortlich für die Unmöglichkeit der Erbringung der erworbenen Dienste aufgrund von zufälligen Ereignissen oder höherer Gewalt.</li>
                <li><b>__COMERCIAL_NAME__</b> behält sich das Recht vor, bei zufälligen Ereignissen oder höherer Gewalt Änderungen am Plan oder vertraglich vereinbarten touristischen Service vorzunehmen.</li>
                <li><b>__COMERCIAL_NAME__</b> ist nicht verantwortlich für Änderungen, die von den beauftragten Dienstleistern vorgenommen werden, oder für unvorhergesehene Ereignisse wie:
                  <ol style="list-style-type:circle;" class="text-justify px-5">
                    <li>Verspätungen auf Flughäfen, Flugverspätungen, Überlastung in Hotels, Quarantänen und andere Umstände höherer Gewalt oder zufällige Ereignisse, die die normale Entwicklung der Erbringung touristischer Dienstleistungen verändern, daher, wenn die Anbieter der vertraglich vereinbarten Dienstleistungen dies teilweise oder vollständig nicht tun könnten ihre Dienstleistungen erbringen, für die sie beauftragt wurden, wird nur die Erstattung des angemessenen Betrags verwaltet, ohne jegliche andere Verpflichtung.</li>
                    <li>Unfälle, Verluste oder Schäden, die Kunden aufgrund von Leichtsinn oder Nichteinhaltung der Anweisungen und/oder Vorschriften von Fluggesellschaften, Hotels oder Anbietern touristischer Dienstleistungen für den Genuss ihres Aufenthalts erleiden.</ li>
                    <li>Schäden, Verluste und Schäden, die durch Fahrlässigkeit, Fahrlässigkeit oder Nichtlieferung von Schmuck und/oder Eigentum des Kunden verursacht wurden.</li>
                  </ol>
                </li>
                <li><b>__COMERCIAL_NAME__</b>. haftet nicht für die Unmöglichkeit der Erbringung der vertraglich vereinbarten Leistungen, wenn die Ursache vom Nutzer zu vertreten ist.</li>
              </ol>
            </div>
            <div id="politicas-section4" class="col-lg-12 mt-5">
              <h4 class="text-center">Allgemeine Geschäftsbedingungen</h4>
              <ol type="a" class="text-justify px-5">
                <li>Alle auf dieser Website veröffentlichten Preise und Tarife unterliegen Änderungen, Verfügbarkeit und Gültigkeit ohne vorherige Ankündigung und unterliegen den Bestimmungen der Tarifregeln für Hotel- und Flugpläne. Der zum Zeitpunkt des Kaufs des Plans bestätigte Tarif ändert sich jedoch NICHT. Steuern, Gebühren und Abgaben, die sich auf Flugpreise, Hotels und andere von <b>__COMERCIAL_NAME__</b> angebotene Dienstleistungen auswirken. können jederzeit durch Bestimmungen der nationalen Regierung oder einer ausländischen Stelle variieren, was vom Gast/Kunden zum Zeitpunkt der Ausstellung der Flugtickets, des Plans oder des Touristenpakets angenommen werden muss. Einschränkungen und Bedingungen gelten für jeden veröffentlichten Tarif entsprechend seiner Gültigkeit.</li>
                <li>Hotelpreise hängen von der gewählten Unterkunft ab. Die Preise der veröffentlichten Pläne werden auf der Grundlage einer doppelten Unterkunft pro Person berechnet. Wenn es sich bei der gewünschten Unterkunft um ein Drei- oder Vierbettzimmer handelt, muss der Preis entsprechend der Unterkunft überprüft werden. Die Unterbringung in einem Einzelzimmer ist kostenpflichtig und wird direkt über die WEB-Seite oder von den Mitarbeitern des Büros von <b>__COMERCIAL_NAME__</b> bezahlt. zum Zeitpunkt der Angebotserstellung und Buchung.</li>
                <li>Bevor Sie die auf diesem Webportal veröffentlichten touristischen Pläne erwerben, sollten Sie deren Eigenschaften und die maximal vom Hotel zugelassene Unterkunft konsultieren.</li>
                <li>Die Bedingungen für den im Reiseplan enthaltenen Verpflegungsservice werden vom Hotel ab dem Zeitpunkt des Check-ins bis zum Check-out bereitgestellt.</li>
                <li>Die zum Zeitpunkt der Bestätigung des Verkaufs und der Zahlung des Reiseplans geltenden Tarife der touristischen Pläne werden eingehalten.</li>
                <li>Bei touristischen Plänen, in denen eine Zahlungsfrist vereinbart ist, wird der vereinbarte Preis ab der Zahlungsbestätigung innerhalb der festgelegten Fristen eingehalten. Flughafengebühren sowie die für die Ausstellung des Tickets geltende Verwaltungsgebühr und die entsprechenden Steuern unterliegen den Angaben der jeweiligen Fluggesellschaft. Die Differenz, die sich aus der Variation dieser Sätze ergibt, muss vom Käufer des Plans übernommen werden.</li>
                <li>Die generierten Angebote zeigen Verfügbarkeit und Werte zum Zeitpunkt der Ausstellung, sie implizieren nicht die Bestätigung von Flug- oder Hotelkontingenten. Das Angebot garantiert weder die Verfügbarkeit in der Flugklasse oder dem angegebenen Hotel noch die darin angegebenen Preise, wenn die Reservierung und Bezahlung der Reiseplanleistungen später erfolgt. Die Rückbestätigung unterliegt der vollständigen Zahlung der Reservierung.</li>
                <li>Die Pläne, die mit Flugtickets, Landtickets oder Nur-Hotel-Tarifen verpackt sind und über die Büros von <b>__COMERCIAL_NAME__</b> reserviert werden können. und/oder über die Seite __BASE_URL__. Der Mindestaufenthalt für alle Pläne beträgt zwei (2) Nächte. Jeder Touristenplan beinhaltet bestimmte Dienstleistungen, daher müssen Sie die Gültigkeit, Dienstleistungen und Bedingungen und Einschränkungen des zu erwerbenden Plans einsehen. DIE PREISE BEINHALTEN NICHT: Ferngespräche, Wäscheservice, Safe, Medikamente, Tauchkurse und Gebühren, die nicht ausdrücklich im gekauften Plan angegeben sind.</li>
                <li>Für einige Pläne kann es Bestimmungen und besondere Bedingungen geben, die die Anwendung der hier beschriebenen besonderen Bedingungen ausschließen. In diesem Sinne müssen die Merkmale, Bedingungen und Einschränkungen konsultiert werden, bevor der gewünschte Plan erworben wird.</li>
              </ol>
            </div>
            <div id="politicas-section5" class="col-lg-12 mt-5">
              <h4 class="text-center">Gilt für alle Pläne</h4>
              <ul class="text-justify px-5">
                <li>Erscheinen weniger Personen im Hotel als im Voucher reserviert und eingetragen sind und für den Fall, dass eine von ihnen in einem Einzelzimmer untergebracht werden muss, wird ein Zuschlag erhoben, der vom Gesamtwert der Übernachtung abgezogen wird Reservierung und zusätzlich eventuell anfallender Strafgebühren ist der Einzug des Einzelzimmerzuschlags nicht befreit.</li>
                <li>Hotelpreise hängen von der gewählten Unterkunft ab. Konsultieren Sie die maximal vom Hotel zugelassene Unterkunft. Steuern, Gebühren und Beiträge, die sich auf Flugpreise, Hotels und andere von <b>__COMERCIAL_NAME__</b> angebotene Dienstleistungen auswirken. Sie können sich jederzeit ändern, wenn dies durch eine Bestimmung der nationalen Regierung oder einer ausländischen Körperschaft so bestimmt wird, was vom Gast/Kunden zum Zeitpunkt der Ausstellung der Flugtickets, des Plans oder des Touristenpakets angenommen werden muss.</ li>
                <li><b>"Kleinkinder"</b> gelten als Personen unter 2 Jahren und <b>"Kinder"</b> gelten als Minderjährige zwischen 2 und 11 Jahren am Tag der Einreise zum Hotel ab 12 Jahren gilt als Erwachsener und wird als solcher verrechnet. Das Alter der Kinder, die Mitglieder einer Familiengruppe sind, ist bei der Anfrage zur Reservierung und Bestätigung der Dienstleistungen unbedingt anzugeben. </li>
                <li><b>Minderjährige (unter 18 Jahren)</b>: Wenn ein Minderjähriger in der Reservierung in Begleitung eines Elternteils reist und um den Registrierungsprozess im Hotel durchzuführen, muss er Ihre Personalausweis, gültiger Reisepass und Personenstandsregister bei der Agentur <b>__COMERCIAL_NAME__</b> und an der Hotelrezeption. Wenn der Minderjährige nicht mit seinen Eltern reist, müssen sie eine Kopie der standesamtlichen Geburtsurkunde, aus der die Verwandtschaft hervorgeht, eine Kopie des Staatsbürgerschaftsausweises der Eltern und das von beiden Elternteilen unterzeichnete und beglaubigte Vollmachtsformular vorlegen. Die Einreisegenehmigung des Minderjährigen zum Hotel ersetzt nicht die Ausreisegenehmigung aus dem Land und umgekehrt, die gemäß den Anforderungen der Einwanderungsbehörde des jeweiligen Landes bearbeitet werden muss. Das Reisegenehmigungsformular für Minderjährige in Begleitung Dritter kann unter <a href="__BASE_URL__/formato-de-authorizacion-minores" target="_balnk">__BASE_URL__/formato-de-authorizacion-minores</a> heruntergeladen werden
                  <ul class="text-justify px-5">
                  <li><b>Anmerkung 1</b>: Für den Fall, dass die Personen, die die elterliche Sorge über die Minderjährigen haben, nicht ihre Eltern sind, muss das Reisegenehmigungsformular der Minderjährigen von den Personen, die das Sorgerecht haben, unterschrieben und beglaubigt werden, und eine beglaubigte Kopie des Dokuments, das dies bestätigt, muss ebenfalls beigefügt werden.</li>
                  <li><b>Anmerkung 2</b>: Für den Fall, dass der Kunde keines der hier angegebenen Dokumente vorlegt, behält sich das Hotel das Recht vor, der Person oder den Personen der Gruppe, die dies nicht tun, den Zutritt zu verweigern die vollständigen Unterlagen vorlegen, ohne Anspruch auf Reklamationen oder Rückerstattungen.</li>
                  </ul>
                </li>
                <li>Der Konsum und die Abgabe von Alkohol ist für Minderjährige in allen Hotels verboten, Artikel 1 Gesetz 124/94 und andere geltende Vorschriften.</li>
                <li><b>Die Aktionspläne können zu keiner Saison geändert, bestätigt, überprüft oder erstattet werden.</b></li>
                <li>Die Bedingungen für den im Reiseplan enthaltenen Verpflegungsservice werden vom Hotel ab dem Zeitpunkt des Check-ins bis zum Check-out bereitgestellt.</li>
                <li>Aufenthalte ab zwei (2) Nächten, für Reservierungen von nur einer (1) Nacht, konsultieren Sie den aktuellen Preis zum Zeitpunkt der Reservierung.</li>
                <li>Die zum Zeitpunkt der Bestätigung des Verkaufs und der entsprechenden Zahlung des Reiseplans innerhalb der mitgeteilten Bedingungen geltenden Preise werden eingehalten, mit Ausnahme der Flughafensteuern, der für die Ausstellung des Tickets geltenden Verwaltungsgebühren und der jeweiligen Steuern, die davon abhängen die von der Fluggesellschaft bereitgestellten Informationen.</li>
                <li>Im Falle einer Hotelüberbuchung steht es dem Hotel frei, Kunden in anderen Hotels mit ähnlichen Merkmalen und derselben Kategorie unterzubringen.</li>
                <li>Für einige Pläne können Gültigkeits- und Sonderbedingungen gelten, die von der Anwendung der hier beschriebenen besonderen Bedingungen ausgenommen sind, zum Beispiel: Sonder- oder Aktionspläne, die ebenfalls nicht erstattungsfähig sind und für die besondere Bedingungen gelten, die in angegeben werden denselben Plan und kann unter <a href="__BASE_URL__" target="_blank">__BASE_URL__</a></li> eingesehen werden
                <li>Die in- und/oder ausländischen Regierungs- oder Verwaltungsbehörden können neue Steuern, Gebühren, Beiträge oder andere zusätzliche Abgaben auf die Reisepläne erheben, die beim Verkauf touristischer Dienstleistungen nicht berücksichtigt werden dürfen und vom Kunden zu tragen sind.< /li>
                <li>Wenn der Benutzer die Reservierung storniert und zu einem späteren Zeitpunkt reisen möchte, wird der gezahlte Wert abzüglich des Werts der Strafgebühren dem neuen Plan gutgeschrieben, der neue Plan unterliegt der Verfügbarkeit und Tarifunterschieden und muss bearbeitet werden durch Kontenkreuzung. Die Gültigkeit der Reservierungen beträgt 11 Monate ab Ausstellung der Flugtickets und bei reinen Hotelplänen ab dem Zeitpunkt der ersten Einzahlung in Geld, nach diesem Zeitraum entsteht der Totalverlust des Geldes.</li>
                <li>In Bezug auf den Bodentransport wird davon ausgegangen, dass der Reisende sein Gepäck und andere persönliche Gegenstände bei sich behält, unabhängig davon, in welchem ​​Teil des Fahrzeugs sie untergebracht sind, und dass sie auf Kosten des Reisenden transportiert werden und Risiko. Reisenden wird empfohlen, bei allen Lade- und Entladevorgängen des Gepäcks anwesend zu sein.</li>
                <li>Das Dokument <b>"Rechnung"</b> zeigt Gesamtwerte, aufgeschlüsselt nach Steuern für alle Leistungen.</li>
                <li>Die im gekauften Plan enthaltenen Dienste liegen in der Verantwortung der jeweiligen Unternehmen, die sie anbieten.</li>
                <li><b>__COMERCIAL_NAME__</b>. sie tritt gegenüber dem Kunden nur als Agent oder Vermittler auf.</li>
                <li><b>Aktionspläne Sie können in keiner Saison geändert, bestätigt, überprüft oder erstattet werden. Diese Bedingungen gelten auch für Aktionspläne, die durch Anzahlung reserviert werden. Jede Änderung, Änderung oder Stornierung nach erfolgter Zahlung der Reservierung führt zu Strafen und Preisunterschieden, die vom Kunden übernommen werden müssen.</b></li>
                <li>Wenn eine Rückerstattung beantragt wird, wird diese aus welchem ​​Grund auch immer auf das Kreditorenkonto des Eigentümers der Kaufrechnung überwiesen, wobei 100.000 COP $ entsprechend der Strafe für Verwaltungskosten abgezogen werden, zuzüglich der von der Fluggesellschaft verhängten Strafen . und das Hotel.</li>
                <li><b>__COMERCIAL_NAME__</b>. ist gegen den Sextourismus Minderjähriger und andere Formen der Ausbeutung und sexueller Gewalt, Art. 16 und ss. Gesetz 679/01 geändert durch Gesetz 1336/09; Die Nichteinhaltung der im Gesetz 679/01 festgelegten Schutzmaßnahmen gegen Ausbeutung, Pornografie, Sextourismus und andere Formen des sexuellen Missbrauchs von Minderjährigen führt zu den im Gesetz und anderen übereinstimmenden Vorschriften vorgesehenen strafrechtlichen Sanktionen.</ li>
                <li>Bei einem Wechsel der Unterkunft muss der Zimmerzuschlag berechnet werden und zusätzlich werden die eventuell anfallenden Strafen angewendet, die Erhebung des Zimmerzuschlags ist nicht ausgenommen.</li>
              </ul>
            </div>
            <div id="politicas-section6" class="col-lg-12 mt-5">
              <h4 class="text-center">Strafen für alle Pläne</h4>
              <p class="text-justify">
                Wenn der Benutzer der touristischen Dienstleistungen Änderungen und/oder Stornierungen verlangt oder dem nicht nachkommt, indem er nicht erscheint, seine Gebühren nicht rechtzeitig bezahlt oder die erworbenen Dienstleistungen nicht in Anspruch nimmt, zahlt er eine Strafe gemäß den folgenden Konzepten in den AGB festgelegt:
              </p>
              <ul class="text-justify px-5">
                <li>Für Flugtickets und das Verständnis, dass <b>__COMERCIAL_NAME__</b>., ein Vermittler zwischen dem Passagier und der Fluggesellschaft ist, <b>__COMERCIAL_NAME__</b>., sich an die Tarifregeln je nach Klasse und Fluggesellschaft hält des gekauften Plans, sodass die Strafe je nach den Richtlinien der einzelnen Fluggesellschaften variiert.</li>
                <li><b>Abwanderung</b>: Die Abwanderungsgebühr basiert auf den Richtlinien der jeweiligen Fluggesellschaft und liegt zwischen 30$ und 50$ pro Person. <b>__COMERCIAL_NAME__</b>. fungiert als Vermittler zwischen der Fluggesellschaft und dem Kunden, da es sich um eine direkte Gebühr der Fluggesellschaft handelt und diese nicht erstattungsfähig ist. </li>
                <li><b>Namensänderung</b>: Die Berichtigung von bis zu 2 Buchstaben im Namen/Nachnamen, die seine Bedeutung oder sein Geschlecht nicht ändert, zieht keine Strafen nach sich, aber wenn es sich um eine Änderung von 3 oder mehr Buchstaben handelt oder die die Bedeutung oder das Geschlecht des Namens ändern, wenn es sich um eine Namensänderung handelt, für die der Kunde den von der Fluggesellschaft, den Hotels und anderen Dienstleistern für diese Änderung auferlegten Wert übernimmt. Der Kunde muss zugunsten von <b>__COMERCIAL_NAME__</b> kündigen. Der Wert von 100.000 COP für Verwaltungsverfahren zur Verwaltung der Änderung.</li>
                <li><b>Datumsänderung</b>: Bei einer Datumsänderung muss berücksichtigt werden, dass das ursprünglich gekaufte Service- und/oder Tourpaket einer Änderung der Bedingungen unterliegen würde, seien es Tarife, Hotels, Dienstleistungen, Aktionswechsel, Saisonwechsel etc. Gemäß den für das neue Reisedatum verfügbaren Plänen übernimmt der Kunde die Tarifdifferenz zwischen dem ursprünglich gekauften Plan und dem neuen Plan vollständig. Der Kunde muss zugunsten von <b>__COMERCIAL_NAME__</b> kündigen. Der Wert von 100.000 COP für Verwaltungskosten, um die entsprechenden Änderungen zu verwalten und den neuen Plan zu garantieren. </li>
                <li><b>Stornierungen</b>: Stornierung 60 Tage oder mehr vor Reiseantritt, die entsprechenden Strafen werden von der Fluggesellschaft, dem Hotel und anderen Leistungsträgern (in den bereits ausgestellten Leistungen) generiert ). Der Kunde zahlt zugunsten von <b>__COMERCIAL_NAME__</b> einen Wert von 100.000 $ für Verwaltungsgebühren.</li>
                <li>Stornierung 30 Tage oder mehr vor dem ursprünglichen Reisedatum, die entsprechenden Strafen werden von der Fluggesellschaft, dem Hotel und anderen Leistungsträgern durchgeführt (in den bereits ausgestellten Leistungen). Der Kunde wird zugunsten von <b>__COMERCIAL_NAME__</b> einen Wert von 100.000$ für Verwaltungsgebühren und eine Vertragsstrafe von 20% auf den Gesamtwert des Vertrags stornieren.</li>
                <li>Stornierung weniger als 30 Tage vor dem ursprünglichen Reisetermin, werden die entsprechenden Strafen von der Fluggesellschaft, dem Hotel und anderen Leistungsträgern durchgeführt (in den bereits ausgestellten Leistungen). Der Kunde wird zugunsten von <b>__COMERCIAL_NAME__</b> einen Wert von 100.000 $ für Verwaltungsgebühren und eine Vertragsstrafe von 50% des Gesamtwerts des Vertrags stornieren.</li>
                <li><b><u>AUSNAHMEN</u></b>: Strafen im Falle höherer Gewalt, zufälliger Ereignisse oder Unfähigkeit des Reservierungsinhabers oder eines Verwandten ersten Grades der Blutsverwandtschaft werden auf Befreiung untersucht. Der Befreiungsantrag muss von der/den entsprechenden Unterstützung(en) begleitet und innerhalb von 15 Kalendertagen ab dem ursprünglichen Datum der Reise eingereicht werden.</li>
                <li>Bei Flugbefreiungen sollte berücksichtigt werden, dass sie nur für Personen gelten, die denselben Eintrag haben, und die Verweigerung oder Genehmigung der Befreiung den Unternehmensrichtlinien und -prozessen jeder Fluggesellschaft unterliegt. Zur Bearbeitung einer Freistellungsstudie sind vom Auftraggeber und/oder der Agentur folgende Unterlagen einzusenden:
                  <ul class="text-justify px-5">
                    <ul class="text-justify px-3">
                      <li><span><b>Durch den Tod</b>:</span>
                        <ul class="text-justify px-2">
                          <li>Sterbeurkunde.</li>
                          <li>Zivilrechtliche Registrierung der Geburt jedes Passagiers.</li>
                          <li>Heiratsurkunde oder Dokument, das die tatsächliche eheliche Vereinigung bescheinigt.</li>
                        </ul>
                      </li>
                      <li><span><b>Wegen Krankheit</b>:</span>
                        <ul class="text-justify px-2">
                          <li>Medizinische Unterstützung oder medizinische Behinderung, unterzeichnet und gestempelt vom behandelnden Arzt.</li>
                          <li>Fotokopie des Staatsbürgerschaftsausweises der zu befreienden Passagiere.</li>
                          <li>Heiratsurkunde oder Dokument, das die tatsächliche eheliche Vereinigung bescheinigt.</li>
                        </ul>
                      </li>
                      <li><span><b>Aufgrund betrieblicher Änderungen</b>:</span>
                        <ul class="text-justify px-2">
                          <li>Die Befreiung gilt nur, wenn die Betriebsänderung aufgrund meteorologischer Probleme eintritt, in diesem Fall sind nur Hotelstrafen gemäß den Richtlinien des jeweiligen Hotels befreit, für eine zukünftige Kontoüberschreitung, falls die Rückerstattung des Geldes verlangt wird, die Befreiung .</li>
                          <li>Sie müssen über eine von der Fluggesellschaft ausgestellte Bescheinigung über Betriebsänderungen aufgrund von Wetterbedingungen verfügen, in der die Namen der betroffenen Passagiere angegeben sind.</li>
                        </ul>
                      </li>
                    </ul>
                  </ul>
                </li>
              </ul>
            </div>
            <div id="politicas-section7" class="col-lg-12 mt-5">
              <h4 class="text-center">Erforderliche Dokumente für internationale Ziele</h4>
              <p class="text-justify">
                In diesem Abschnitt werden die grundlegenden Dokumente beschrieben, die Reisende bei internationalen Zielen vorlegen müssen. Es liegt in der Verantwortung des Passagiers, bei der Einwanderungsbehörde und den entsprechenden Konsulaten entsprechend seiner Nationalität die obligatorischen Anforderungen zu bestätigen, die für die Einreise in das Land, in das er reist, erfüllt sein müssen.
              </p>
              <div class="text-justify">
                <ul class="text-justify px-5">
                  <li>Pass gültig für mindestens 6 Monate am Reisedatum </li>
                  <li>Touristenvisum in den jeweiligen Reisezielen, sowohl national als auch international</li>
                  <li>Gelbfieberimpfung</li>
                  <li>Flug- und Hotelgutschein mit Datum der Ein- und Ausreise </li>
                  <li>Minderjährige. Minderjährige, die ins Ausland reisen, müssen zusätzlich zu den angegebenen Dokumenten eine standesamtliche Geburtsurkunde und einen Personalausweis (falls vorhanden) vorlegen. Wenn der Minderjährige mit einem oder keinem seiner Elternteile reist, muss er zusätzlich zu dem oben Genannten über eine Genehmigung verfügen, die von seinen Eltern vor einer zuständigen Behörde an die Einwanderungsbehörde gerichtet wurde. Befindet sich der Vater im Ausland, muss das Dokument mit einer Apostille versehen werden</li>
                  <li>Die Informationen zu den erforderlichen Dokumenten gelten für kolumbianische Staatsbürger, Ausländer sollten sich an die jeweiligen Botschaften und/oder Konsulate wenden. Diese Informationen müssen bei den Verkaufsbüros und/oder Botschaften oder Konsulaten des Bestimmungsortes ständig neu bestätigt werden, die Botschaften und/oder Konsulate behalten sich das Recht vor, die von ihnen festgelegten Dokumente und Anforderungen ohne vorherige Ankündigung zu ändern. Für Reiseziele, die einen Impfpass erfordern, muss der Reisende diesen zusammen mit den hier angegebenen Dokumenten vorlegen.</li>
                  <li>Wir übernehmen keine Verantwortung für den Fall, dass die Behörden des besuchten Landes dem Passagier die zur Einreise erforderlichen Dokumente verweigern oder nicht gestatten, wobei in diesem Fall der Wert der nicht in Anspruch genommenen Leistungen abzüglich des Wertes der Auslagen erstattet wird und/oder Strafen, die verursacht wurden. Wenn der Passagier ein Ausländer ist, erkundigen Sie sich bei Ihrem Konsulat und/oder Ihrer Botschaft nach den Reiseanforderungen</li>
                </ul>
              </div>
            </div>
            <div id="politicas-section8" class="col-lg-12 mt-5">
              <h4 class="text-center">Gegen Kinderpornografie</h4>
              <h5>Verhinderung von Ausbeutung, Pornografie und Kindersextourismus</h5>
              <p class="text-justify">
                Diese Nummer kommt der Verpflichtung der Reiseveranstalter nach, auf Warnungen vor Sextourismus und Kinderpornographie hinzuweisen.<br><br>
                Gemäß den Bestimmungen von Gesetz 679 von 2001, Gesetz 1336 von 2009 und anderen übereinstimmenden Vorschriften, <b>__COMERCIAL_NAME__</b>. Es warnt den Touristen, dass die Ausbeutung und der sexuelle Missbrauch von Minderjährigen im Land als Verbrechen gelten und daher bestraft werden. Gemäß Dekret 3840 von 2009, <b>__COMERCIAL_NAME__</b>. Sie hat ein „Verhaltenskodex“-Modell verabschiedet, das Präventionsstrategien fördert und die sexuelle Ausbeutung und Ausbeutung von Kindern und Jugendlichen im Tourismus verhindert.
              <p>
            </div>
            <div id="politicas-section9" class="col-lg-12 mt-5">
              <h4 class="text-center">Für Pläne mit nationalen und internationalen Tickets aus Kolumbien</h4>
              <ul class="text-justify">
                <li><h5>RÜCKTRITT UND RÜCKTRITT VON TOURISTISCHEN PLÄNEN</h3>
                  <ul class="text-justify px-5">
                    <li><b>RÜCKTRITT</b>: Beim Kauf von Flugtickets (mit oder ohne Plan) in einem beliebigen Verkaufsbüro über <a href="__BASE_URL__" target="_blank">__BASE_URL__</a> können Sie zurücktreten von der Reise mit einem Flugticket vor Reiseantritt, sofern der Rücktritt bis zu 24 Stunden vor Reiseantritt beantragt wird, in diesem Fall <b>__COMERCIAL_NAME__</b>, je nach Fall der Beförderer oder das Reisebüro , kann bis zu 10% des Ticketpreises einbehalten.</li>
                    <li><b>RÜCKTRITT</b>: Wenn Flugtickets (mit oder ohne Plan) über <a href="__BASE_URL__" target="_blank">__BASE_URL__</a> gekauft wurden, können Sie innerhalb von 48 Stunden zurücktreten nach dem Kauf, sofern zwischen dem Zeitpunkt der Anfrage und dem Datum der Reise ein Zeitraum von mehr als 8 Kalendertagen bei Inlandsreisen oder 15 Kalendertagen bei Auslandsreisen liegt. In diesem Fall <b>__COMERCIAL_NAME__</b>. Sie können bis zu 10% des Flugpreises einbehalten, wobei 60.000$ COP bei Inlandsflügen und 50$ bei internationalen Flügen nicht überschritten werden dürfen.</li>
                    <li><b>HINWEIS</b>: Wenn die Zahlung über PayU erfolgt, übernimmt der Kunde die durch den Zahlungsvorgang entstehenden Verwaltungsgebühren, die 5% des Gesamtwerts der Transaktion oder der geleisteten Zahlung entsprechen .</li>
                  </ul>
                </li>
                <li><h5>RÜCKTRITT BEIM KAUF VON PLÄNEN OHNE TICKETS</h5>
                  <ul class="text-justify px-5">
                    <li>Wenn Touristenpläne ohne Flugtickets über <a href="__BASE_URL__" target="_blank">__BASE_URL__</a> gekauft werden, können Sie innerhalb von 5 Werktagen nach dem Kauf zurücktreten. In jedem Fall kann der Widerruf nicht ausgeübt werden, wenn mit der Ausführung (Ausstellung) der Dienstleistung bereits begonnen wurde oder sie innerhalb derselben Widerrufsfrist, d. h. innerhalb von fünf Tagen nach dem Kauf, erbracht werden muss, in welchem ​​Fall die Rücktritt wird nur gültig, bevor der Kauf beginnt.</li>
                    <li><b>HINWEIS</b>: Wenn die Zahlung über PayU erfolgt, übernimmt der Kunde die durch den Zahlungsvorgang entstehenden Verwaltungsgebühren, die 5% des Gesamtwerts der Transaktion oder der geleisteten Zahlung entsprechen .</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        ',
      ],


    ];
    $this->db->table($this->tableName)->emptyTable();
    $this->db->query("ALTER TABLE {$this->tableName} AUTO_INCREMENT = 1;");
    foreach ($data as $row) {
      $this->db->table($this->tableName)->insert($row);
    }
  }
}
