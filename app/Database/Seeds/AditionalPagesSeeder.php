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
          <div class="col-lg-6">
            <div id="privacidad-section1" class="col-lg-12 mt-5"> 
              <h1 class="text-center">Política y Aviso de Privacidad de Datos Personales</h1>
              <p class="text-justify">
                En cumplimiento de las normas sobre manejo de datos personales y privacidad, <strong>__COMERCIAL_NAME__</strong>. Solicita leer esta política antes de suministrar su información personal.
                <br/><br/>Ante cualquier objeción a esta política, deberá dejar de usar El Sitio (<a href="__BASE_URL__" target="_blank">__BASE_URL__</a>).
                <br/><br/>La política de tratamiento de datos personales y de privacidad forma parte de los Términos y Condiciones de este sitio web (<a href="__BASE_URL__" target="_blank">__BASE_URL__</a>) que son vinculantes para todos los usuarios.
                <br/><br/>La política de <strong>__COMERCIAL_NAME__</strong>, es respetar y proteger su privacidad, por lo tanto <strong>__COMERCIAL_NAME__</strong> toma las medidas necesarias para mantener la confidencialidad de la información que nos brinda y para proteger sus datos personales.
              </p>              
            </div>
            <div id="privacidad-section2" class="col-lg-12 mt-5"> 
              <h1 class="text-center">Información Personal Que Recopilamos</h1>
              <p class="text-justify">
                Podemos recopilar cualquier información concerniente a su nombre, dirección, correo electrónico, número de teléfono, fecha de nacimiento, métodos de comunicación preferidos, datos financieros como tarjeta de crédito, información de viajero frecuente, antecedentes de viajes, datos de acompañantes, preferencias, datos de itinerarios y de otras reservaciones, entre otros.
                <br/><br/>Todos los datos personales y/o patrimoniales que sean proporcionados serán tratados bajo los lineamientos que exigen las leyes colombianas y demás regulaciones emitidas por las autoridades competentes a través de medidas de seguridad administrativas, técnicas y físicas implementadas, contra daño, pérdida, alteración, destrucción o uso, acceso o tratamiento no autorizado.
              </p>              
            </div>
            <div id="privacidad-section3" class="col-lg-12 mt-5"> 
              <h1 class="text-center">Finalidad y Uso Que Se Dará a Su Información Personal</h1>
              <p class="text-justify">
                Utilizamos su información personal para proveer nuestros servicios y los de las empresas del Grupo que usted solicite, tales como cotizaciones, reservas hoteleras, compra de paquetes de vacacionales, de tiempo compartido, spas, gimnasios, entretenimiento estacionamientos, y en general para ofertar y vender servicios turísticos y sus actividades asociadas o complementarias, así como para realizar encuestas, rastreo y ofertas de marketing, boletines informativos, entrega de premios y concursos desarrollados por parte de <strong>__COMERCIAL_NAME__</strong>.
              </p>              
            </div>
            <div id="privacidad-section4" class="col-lg-12 mt-5"> 
              <h1 class="text-center">Confidencialidad</h1>
              <p class="text-justify">
                La confidencialidad de los datos personales y/o patrimoniales están garantizados mediante procedimientos, controles, tecnologías y auditorías implementadas para mantenerlos seguras y protegidas de cualquier daño, perdida, alteración, y uso no autorizado.
                <br/><br/>Información sensible y relacionada con su salud, raza u origen étnico, sus opiniones políticas, creencias religiosas u otras, antecedentes penales, condiciones de salud o pertenencia a grupos o asociaciones gremial, no se solicita salvo que sea su iniciativa y voluntad entregarla para satisfacer alguna necesidad particular suya. Esta información se maneja bajo los mismos estándares y controles de confidencialidad.
                <br/><br/>Solo las personas competentes y autorizadas tendrán acceso limitado y controlado a las fuentes de datos.
                <br/><br/>Los empleados y/o terceros se encuentran obligados mediante contratos de privacidad para garantizar la privacidad de los datos. Dichas obligaciones subsisten con posterioridad a terminar las relaciones con la empresa.
              </p>              
            </div>
            <div id="privacidad-section5" class="col-lg-12 mt-5"> 
              <h1 class="text-center">Cómo Compartimos La Información Personal</h1>
              <p class="text-justify">
                Como empresa <strong>__COMERCIAL_NAME__</strong>, podemos compartir su información personal con otros miembros de nuestro grupo empresarial, franquiciados, hoteles que administramos, o prestadores de servicios que podrían encontrarse en otro país diferente al suyo, con el único fin de procurar su mayor satisfacción en la prestación del servicio adquirido.
                <br/></br/>De vez en cuando nos asociaremos con otras empresas para brindar promociones, productos y servicios de marcas compartidas o con patrocinios compartidos, así podremos compartir su información con nuestro copatrocinador. <br/></br/>También compartiremos la información personal con proveedores de servicios como spas, campos de golf, restaurantes, mensajería, transporte y otras actividades relacionadas y necesarias al servicio turístico, paquetes de pasajes aéreos y automóvil de alquiler, la comunicación de noticias y la entrega de materiales promocionales por medio del correo electrónico o correo directo, el procesamiento de transacciones con tarjeta de crédito, servicios de mejora y la administración de sorteos y designación de premios y la realización de encuestas a clientes.
                <br/></br/>Podemos compartir información personal con instituciones de crédito, cuando sea requerida para realizar transacciones y aclaraciones respecto al pago de los servicios que le fueron prestados.
                <br/></br/>En todos los eventos, los Proveedores o cualquier tercero receptor de los datos personales cuya transferencia es autorizada, asume las mismas obligaciones que corresponden al responsable de los datos y se encuentran obligados mediante contratos de privacidad y confidencialidad a garantizar a su vez la privacidad de los datos en su posesión.
                <br/></br/>La transferencia efectuada a sociedades controladoras, subsidiarias o afiliadas, o a una sociedad matriz o a cualquier sociedad del mismo grupo que opere bajo los mismos procesos y políticas internas, pueden llevarse a cabo sin necesidad de nuevo consentimiento del titular.
                <br/></br/>En caso de venta, fusión, consolidación, liquidación, o trasferencia de esta sociedad o de las empresas del grupo a un tercero, los datos personales serán transferidos a dicho tercero sin necesidad de una nueva autorización bajo la condición del deber de protección y confidencialidad.
              </p>              
            </div>
            <div id="privacidad-section6" class="col-lg-12 mt-5"> 
              <h1 class="text-center">Enlaces con Sitios Web de Terceros</h1>
              <p class="text-justify">
                Nuestro sitio puede contener vínculos con sitios Web de terceros. Tenga en cuenta que no somos responsables de la recopilación, uso, mantenimiento, revelación o participación de los datos e información que realicen tales terceros. Si provee información en sitios de terceros, se aplican la política de privacidad y los términos y condiciones del servicio de dichos sitios.
              </p>              
            </div>
            <div id="privacidad-section7" class="col-lg-12 mt-5"> 
              <h1 class="text-center">Protección de La Información Personal</h1>
              <p class="text-justify">
                <strong>__COMERCIAL_NAME__</strong>, tomará las medidas necesarias para: <br/> 
              </p>
                <ol class="text-justify">
                    <li>Proteger la información personal recopilada por medio de un acceso no autorizado, revelación, alteración o destrucción. </li>
                    <li>Mantener la información personal confiable y actualizada de acuerdo a la ley vigente. </li>
                </ol>
              <p class="text-justify">
                También pretendemos exigir que nuestros afiliados y proveedores de servicios realicen el esfuerzo de mantener la confiabilidad de su información personal. Para las transacciones en línea, usamos tecnología de seguridad para proteger la información personal que nos transmita a través de nuestro sitio. Desafortunadamente, ningún sistema de seguridad o de transmisión de datos a través de Internet puede garantizar que sea totalmente seguro.
                <br/><br/>Por su propia protección y privacidad no incluya en los mensajes de correo electrónico que nos envíe la información personal que considere confidencial, ni datos de tarjetas de crédito.
              </p>              
            </div>
            <div id="privacidad-section8" class="col-lg-12 mt-5"> 
              <h1 class="text-center">Modificaciones Sobre la Política</h1>
              <p class="text-justify">
                No haremos uso de los datos personales de manera diferente a la autorizada.
                <br/><br/>En el evento en que requiramos de los datos personales para una finalidad distinta a la acá consentida pondremos a disposición un nuevo aviso de privacidad con las características del nuevo tratamiento.
                <br/><br/>Podemos modificar esta Política de vez en cuando. Cuando hagamos cambios significativos o sustanciales, estas se comunicarán en la página de inicio de nuestro sitio web antes de ser implementadas. Sabrá cuando esté actualizada esta Política por la fecha que aparezca en el respectivo margen de información.
                <br/><br/>Cualquier cambio a nuestra Política se pondrá en vigencia cuando se envíe la política revisada al sitio. 
                <br/><br/>El uso de este sitio a partir de estos cambios constituye su aceptación de la Política revisada que entre en efecto.
              </p>              
            </div>
            <div id="privacidad-section9" class="col-lg-12 mt-5"> 
              <h1 class="text-center">Derechos del Titular</h1>
              <p class="text-justify">
                En todo momento, como titular podrá ejercer los derechos de acceso, rectificación, cancelación u oposición al tratamiento de sus Datos, enviando su solicitud a través del correo electrónico <a href="mailto:__CONTACT_EMAIL__">__CONTACT_EMAIL__</a> presentando la solicitud por escrito dirigido al representante legal de <strong>__COMERCIAL_NAME__</strong>.
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
                In compliance with the regulations on handling personal data and privacy, <strong>__COMERCIAL_NAME__</strong>. Please read this policy before providing your personal information.
                <br/><br/>If you object to this policy, you must stop using The Site (<a href="__BASE_URL__" target="_blank">__BASE_URL__</a>).
                <br/><br/>The personal data processing and privacy policy is part of the Terms and Conditions of this website (<a href="__BASE_URL__" target="_blank">__BASE_URL__</a>) that They are binding on all users.
                <br/><br/>The policy of <strong>__COMERCIAL_NAME__</strong> is to respect and protect your privacy, therefore <strong>__COMERCIAL_NAME__</strong> takes the necessary measures to maintain the confidentiality of the information that you provide us and to protect your personal data.
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
                We use your personal information to provide our services and those of the Group companies that you request, such as quotes, hotel reservations, purchase of vacation packages, timeshares, spas, gyms, entertainment, parking lots, and in general to offer and sell tourist services and their associated or complementary activities, as well as to carry out surveys, tracking and marketing offers, newsletters, award ceremonies and contests developed by <strong>__COMERCIAL_NAME__</strong>.
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
                As a company <strong>__COMERCIAL_NAME__</strong>, we can share your personal information with other members of our business group, franchisees, hotels that we manage, or service providers that may be located in a country other than yours, with the sole purpose of seeking your greatest satisfaction in the provision of the purchased service.
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
                <strong>__COMERCIAL_NAME__</strong>, will take the necessary measures to: <br/>
              </p>
              <ol class="text-justify">
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
                At any time, as the owner you may exercise your rights of access, rectification, cancellation or opposition to the processing of your Data, by sending your request via email <a href="mailto:__CONTACT_EMAIL__">__CONTACT_EMAIL__</a> submitting the request in writing addressed to the legal representative of <strong>__COMERCIAL_NAME__</strong>.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
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
                In Übereinstimmung mit den Vorschriften zum Umgang mit personenbezogenen Daten und zum Datenschutz, <strong>__COMERCIAL_NAME__</strong>. Bitte lesen Sie diese Richtlinie, bevor Sie Ihre persönlichen Daten angeben.
                <br/><br/>Wenn Sie dieser Richtlinie widersprechen, müssen Sie die Nutzung der Website (<a href="__BASE_URL__" target="_blank">__BASE_URL__</a>) einstellen.
                <br/><br/>Die Verarbeitung personenbezogener Daten und die Datenschutzrichtlinie sind Teil der Allgemeinen Geschäftsbedingungen dieser Website (<a href="__BASE_URL__" target="_blank">__BASE_URL__</a>), für die sie bindend sind Alle Nutzer.
                <br/><br/>Die Politik von <strong>__COMERCIAL_NAME__</strong> ist es, Ihre Privatsphäre zu respektieren und zu schützen, daher ergreift <strong>__COMERCIAL_NAME__</strong> die notwendigen Maßnahmen, um die Vertraulichkeit der von Ihnen bereitgestellten Informationen zu wahren uns und zum Schutz Ihrer personenbezogenen Daten.
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
                Wir verwenden Ihre personenbezogenen Daten, um unsere Dienstleistungen und die der Konzernunternehmen bereitzustellen, die Sie anfordern, wie z ihre damit verbundenen oder ergänzenden Aktivitäten sowie zur Durchführung von Umfragen, Tracking- und Marketingangeboten, Newslettern, Preisverleihungen und Wettbewerben, die von <strong>__COMERCIAL_NAME__</strong> entwickelt wurden.
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
                Als Unternehmen <strong>__COMERCIAL_NAME__</strong> können wir Ihre personenbezogenen Daten an andere Mitglieder unserer Unternehmensgruppe, Franchisenehmer, von uns verwaltete Hotels oder Dienstleister weitergeben, die sich möglicherweise in einem anderen Land als Ihrem befinden, mit der alleinigen Zweck, Ihre größtmögliche Zufriedenheit bei der Erbringung der gekauften Dienstleistung zu erreichen.
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
                <strong>__COMERCIAL_NAME__</strong> wird die erforderlichen Maßnahmen ergreifen, um: <br/>
              </p>
              <ol class="text-justify">
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
                Als Eigentümer können Sie jederzeit Ihre Rechte auf Auskunft, Berichtigung, Löschung oder Widerspruch gegen die Verarbeitung Ihrer Daten ausüben, indem Sie Ihre Anfrage per E-Mail an <a href="mailto:__CONTACT_EMAIL__">__CONTACT_EMAIL__</a> senden schriftlich an den gesetzlichen Vertreter von <strong>__COMERCIAL_NAME__</strong>.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
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
