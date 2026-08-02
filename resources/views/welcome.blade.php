<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Biocor · Centro de Enfermedades Cardiovasculares</title>
      <link rel="preconnect" href="https://www.googletagmanager.com">
      <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
      <link rel="preload" as="font" type="font/woff2" href="{{ asset('fonts/clear-sans-400.woff2') }}" crossorigin>
      <link rel="preload" as="font" type="font/woff2" href="{{ asset('fonts/clear-sans-700.woff2') }}" crossorigin>
      <!-- TODO: replace https://www.biocor.bo throughout (here, sitemap.xml, robots.txt, structured-data partial) once the production domain is finalized -->
      <meta name="description" content="Biocor es un centro de enfermedades cardiovasculares en Santa Cruz de la Sierra, Bolivia, con más de 25 años de experiencia. Consultas y estudios cardiológicos (ecocardiograma, Holter, prueba de esfuerzo) realizados por médicos especialistas.">
      <link rel="canonical" href="https://www.biocor.bo/">
      <meta name="geo.region" content="BO-S">
      <meta name="geo.placename" content="Santa Cruz de la Sierra">

      <meta property="og:type" content="business.business">
      <meta property="og:site_name" content="Biocor">
      <meta property="og:title" content="Biocor · Centro de Enfermedades Cardiovasculares">
      <meta property="og:description" content="Consultas y estudios cardiológicos especializados en Santa Cruz de la Sierra, Bolivia. Más de 25 años cuidando la salud del corazón.">
      <meta property="og:url" content="https://www.biocor.bo/">
      <meta property="og:image" content="{{ asset('images/Biocor/Equipment.webp') }}">
      <meta property="og:locale" content="es_BO">

      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="Biocor · Centro de Enfermedades Cardiovasculares">
      <meta name="twitter:description" content="Consultas y estudios cardiológicos especializados en Santa Cruz de la Sierra, Bolivia. Más de 25 años cuidando la salud del corazón.">
      <meta name="twitter:image" content="{{ asset('images/Biocor/Equipment.webp') }}">

      <style>{!! Vite::content('resources/css/website/landing.css') !!}</style>
      @vite(['resources/js/website/landing.js'])
      @include('partials.structured-data')

      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-K2JRXKJP');</script>
      <!-- End Google Tag Manager -->
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K2JRXKJP"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Barra superior de contacto -->
    <div class="topbar">
      <div class="wrap">
        <div class="left">
          <a href="#contacto">
            <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-5.3-9.3-10A5 5 0 0112 7a5 5 0 019.3 4C19 15.7 12 21 12 21z"/></svg>
            Centro de Enfermedades Cardiovasculares · Santa Cruz de la Sierra
          </a>
        </div>
        <div class="right">
          <a href="tel:+59176656449">
            <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 1.9.7 2.8a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.3-1.2a2 2 0 012.1-.5c.9.3 1.8.6 2.8.7a2 2 0 011.8 2z"/></svg>
            (+591) 76 656-449
          </a>
          <a href="https://wa.me/59176656449">
            <svg aria-hidden="true" viewBox="0 0 24 24" fill="currentColor"><path d="M20 3.9A10 10 0 003.5 18L2 22l4.1-1.5A10 10 0 1020 3.9zm-8 16a8 8 0 01-4-1l-.3-.2-2.4.9.8-2.4-.2-.3a8 8 0 1110.6 2.9A8 8 0 0112 19.9z"/></svg>
            WhatsApp
          </a>
        </div>
      </div>
    </div>

    <!-- Navegación -->
    <header class="nav">
      <div class="wrap">
        <a href="#" class="logo" aria-label="Biocor inicio">
          <svg class="mark heartbeat" viewBox="0 0 40 40" aria-hidden="true">
            <path class="organ" d="M20 33C9 25.5 6 20.5 6 15.2 6 11.2 9 8.5 12.4 8.5c2.4 0 4.4 1.3 5.6 3.3h.1l1.9-2.9 1.9 2.9h.1c1.2-2 3.2-3.3 5.6-3.3C31 8.5 34 11.2 34 15.2c0 5.3-3 10.3-14 17.8z" opacity="0"/>
            <path d="M3 21h7l2.5-7 4 13 3-9 2 3h6"/>
          </svg>
          <span class="name">bio<b>cor</b></span>
        </a>
        <nav>
          <ul>
            <li><a href="#servicios">Estudios</a></li>
            <li><a href="#consultas">Consultas</a></li>
            <li><a href="#equipo">Equipo</a></li>
            <li><a href="#valores">Nosotros</a></li>
            <li><a href="#faq">Preguntas</a></li>
            <li><a href="#contacto">Contacto</a></li>
          </ul>
        </nav>
        <a href="https://wa.me/59176656449" class="btn btn-primary">
          <svg aria-hidden="true" viewBox="0 0 24 24" fill="currentColor"><path d="M20 3.9A10 10 0 003.5 18L2 22l4.1-1.5A10 10 0 1020 3.9zm-8 16a8 8 0 01-4-1l-.3-.2-2.4.9.8-2.4-.2-.3a8 8 0 1110.6 2.9A8 8 0 0112 19.9z"/></svg>
          Agendar cita
        </a>
      </div>
    </header>

    <main>
    <!-- HERO -->
    <section class="hero" style="padding:0">
      <div class="wrap">
        <div class="hero-copy reveal">
          <span class="eyebrow">Más de 25 años cuidando tu corazón</span>
          <h1>Tu corazón en <span class="accent">manos expertas</span></h1>
          <p class="lead">La confianza que ya conoces, ahora más cerca de ti. Consultas y estudios cardiológicos especializados, en un solo lugar.</p>
          <div class="cta-row">
            <a href="https://wa.me/59176656449" class="btn btn-primary">
              <svg aria-hidden="true" viewBox="0 0 24 24" fill="currentColor"><path d="M20 3.9A10 10 0 003.5 18L2 22l4.1-1.5A10 10 0 1020 3.9zm-8 16a8 8 0 01-4-1l-.3-.2-2.4.9.8-2.4-.2-.3a8 8 0 1110.6 2.9A8 8 0 0112 19.9z"/></svg>
              Agendar por WhatsApp
            </a>
            <a href="#servicios" class="btn btn-ghost">Ver nuestros estudios</a>
          </div>
          <div class="stats">
            <div class="stat"><div class="n">+25</div><div class="l">años de trayectoria</div></div>
            <div class="stat"><div class="n">+9</div><div class="l">estudios especializados</div></div>
            <div class="stat"><div class="n">100%</div><div class="l">estudios realizados por médicos especialistas</div></div>
          </div>
        </div>
        <div class="hero-media reveal">
          <div class="photo">
            <img src="{{ asset('images/Biocor/Equipment.webp') }}" alt="Ecocardiograma realizado por el equipo médico de Biocor" width="1280" height="851" fetchpriority="high">
          </div>
          <div class="badge">
            <div>
              <b>Equipos de última tecnología</b>
              <span>operados por especialistas.</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- VALORES -->
    <section class="values" id="valores">
      <div class="wrap">
        <div class="sec-head reveal">
          <span class="eyebrow">Lo que nos respalda</span>
          <h2>Nuestros pacientes hablan por nosotros</h2>
          <p>Una reputación construida durante más de dos décadas, sostenida por tres valores que guían cada consulta y cada diagnóstico.</p>
        </div>
        <div class="value-grid">
          <div class="value reveal">
            <div class="ic">
              <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            </div>
            <h3>Confianza</h3>
            <p>Entre el doctor y su paciente, con la seguridad de que el diagnóstico es el correcto.</p>
          </div>
          <div class="value reveal">
            <div class="ic">
              <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M20 7L9 18l-5-5"/><path d="M3 12a9 9 0 1118 0"/></svg>
            </div>
            <h3>Responsabilidad</h3>
            <p>Con nuestros pacientes y con la sociedad. Nuestra experiencia nos respalda.</p>
          </div>
          <div class="value reveal">
            <div class="ic">
              <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.6l-1-1a5.5 5.5 0 00-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 000-7.8z"/></svg>
            </div>
            <h3>Empatía</h3>
            <p>Con nuestros pacientes y sus familias: comunicamos siempre la verdad, pero de manera empática.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- INSIGHT -->
    <section class="insight">
      <div class="wrap reveal">
        <span class="mark-q">"</span>
        <blockquote>Cuando se trata de la salud del corazón, las personas no buscan opciones: buscan certeza y la confianza de estar en buenas manos.</blockquote>
        <p>Por eso en Biocor los estudios se realizan con maquinas de última tecnología y son atendidos directamente por médicos especialistas altamente formados.</p>
      </div>
    </section>

    <!-- SERVICIOS / ESTUDIOS -->
    <section id="servicios">
      <div class="wrap">
        <div class="sec-head reveal">
          <span class="eyebrow">Estudios especializados</span>
          <h2>Todo para tu corazón, en un solo lugar</h2>
          <p>Diagnóstico cardiológico avanzado sin derivaciones externas, con explicaciones claras y sin tecnicismos.</p>
        </div>
        <div class="serv-grid" id="servGrid">
          @foreach ($services as $service)
            <article class="serv reveal">
              <div class="ic"><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">{!! $service['icon'] !!}</svg></div>
              <h3>{{ $service['name'] }}</h3><p>{{ $service['description'] }}</p>
            </article>
          @endforeach
        </div>

        <div class="sec-head reveal" id="consultas" style="margin-top:64px;margin-bottom:18px">
          <span class="eyebrow">Consultas médicas</span>
          <h2 style="font-size:1.7rem">Atención integral, especialistas a tu alcance</h2>
        </div>
        <div class="consultas reveal">
          @foreach ($consultations as $consultation)
            <span class="chip">
              <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
              {{ $consultation }}
            </span>
          @endforeach
        </div>
      </div>
    </section>

    <!-- EQUIPO -->
    <section class="team" id="equipo">
      <div class="wrap">
        <div class="sec-head reveal">
          <span class="eyebrow">El factor humano</span>
          <h2>Conoce a quienes cuidarán de ti</h2>
          <p>Médicos especialistas que combinan tecnología de precisión con un trato cercano y honesto.</p>
        </div>
        <div class="team-grid" id="teamGrid">
          @foreach ($team as $doctor)
            <article class="doc reveal">
              <div class="ph">
                <img src="{{ asset('images/Biocor/' . $doctor['image']) }}" alt="{{ $doctor['name'] }}, {{ $doctor['role'] }} en Biocor" width="{{ $doctor['imageWidth'] }}" height="{{ $doctor['imageHeight'] }}" loading="lazy" onerror="this.style.display='none';this.nextElementSibling.style.display=''">
                <svg aria-hidden="true" style="display:none" viewBox="0 0 24 24" fill="none" stroke="#33523a" stroke-width="1.4"><circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0116 0"/></svg>
              </div>
              <div class="body"><h3>{{ $doctor['name'] }}</h3><div class="role">{{ $doctor['role'] }}</div><div class="desc">{{ $doctor['description'] }}</div></div>
            </article>
          @endforeach
        </div>
      </div>
    </section>

    <!-- TESTIMONIOS -->
    <!--<section>
      <div class="wrap">
        <div class="sec-head reveal">
          <span class="eyebrow">Testimonios</span>
          <h2>La confianza de quienes ya nos eligieron</h2>
        </div>
        <div class="tst-grid" id="tstGrid">
          @foreach ($testimonials as $testimonial)
            <article class="tst reveal">
              <div class="stars">★★★★★</div>
              <blockquote>&ldquo;{{ $testimonial['quote'] }}&rdquo;</blockquote>
              <div class="who"><div class="av">{{ mb_substr($testimonial['name'], 0, 1) }}</div><div><b>{{ $testimonial['name'] }}</b><span>{{ $testimonial['role'] }}</span></div></div>
            </article>
          @endforeach
        </div>
      </div>
    </section>-->

    <!-- FAQ -->
    <section id="faq" style="background:var(--paper-2)">
      <div class="wrap">
        <div class="sec-head reveal">
          <span class="eyebrow">Preguntas frecuentes</span>
          <h2>Todo lo que necesitas saber</h2>
        </div>
        <div class="faq-list reveal">
          @foreach ($faqs as $faq)
            <details class="faq-item">
              <summary>{{ $faq['question'] }}</summary>
              <p>{{ $faq['answer'] }}</p>
            </details>
          @endforeach
        </div>
      </div>
    </section>

    <!-- CONTACTO -->
    <section class="contact" id="contacto" style="background:var(--paper-2)">
      <div class="wrap">
        <div class="map reveal" style="padding:0">
          <iframe
            src="https://maps.google.com/maps?q=Calle+Florida+900,+Santa+Cruz+de+la+Sierra,+Bolivia&output=embed&z=16"
            width="100%" height="100%" style="border:0;min-height:380px;border-radius:var(--radius)"
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            title="Ubicación de Biocor – Calle Florida 900, Santa Cruz de la Sierra">
          </iframe>
        </div>
        <div class="info reveal">
          <span class="eyebrow">Estamos para ayudarte</span>
          <h2>Fácil de encontrar, fácil de contactar</h2>
          <div class="row">
            <div class="ic">
              <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
              <b>Dirección</b>
              <span>Calle Florida 900 · Santa Cruz de la Sierra, Bolivia</span>
            </div>
          </div>
          <div class="row">
            <div class="ic">
              <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 1.9.7 2.8a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.3-1.2a2 2 0 012.1-.5c.9.3 1.8.6 2.8.7a2 2 0 011.8 2z"/></svg>
            </div>
            <div>
              <b>Teléfono</b>
              <span>(+591) 76 656-449</span>
            </div>
          </div>
          <div class="row">
            <div class="ic">
              <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 5L2 7"/></svg>
            </div>
            <div>
              <b>Horario de atención</b>
              <span>Lun–Vie 08:00–12:00 · 14:30–19:00 &nbsp;|&nbsp; Sáb 09:00–12:00</span>
            </div>
          </div>
          <div class="cta-row">
            <a href="https://wa.me/59176656449" class="btn btn-primary">
              <svg aria-hidden="true" viewBox="0 0 24 24" fill="currentColor"><path d="M20 3.9A10 10 0 003.5 18L2 22l4.1-1.5A10 10 0 1020 3.9zm-8 16a8 8 0 01-4-1l-.3-.2-2.4.9.8-2.4-.2-.3a8 8 0 1110.6 2.9A8 8 0 0112 19.9z"/></svg>
              Escríbenos por WhatsApp
            </a>
            <a href="https://maps.app.goo.gl/JJxzzgSV3jFd4eWb7" target="_blank" rel="noopener" class="btn btn-clay">Cómo llegar</a>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA BAND -->
    <section class="cta-band">
      <div class="wrap reveal">
        <h2>Da el primer paso por tu corazón</h2>
        <p>Agenda tu valoración cardiológica hoy. Te acompañamos con claridad y cercanía en cada etapa.</p>
        <div class="cta-row">
          <a href="https://wa.me/59176656449" class="btn btn-primary">Agendar por WhatsApp</a>
          <a href="tel:+59176656449" class="btn btn-ghost" style="background:transparent;color:#fff;border-color:rgba(255,255,255,.4)">Llamar ahora</a>
        </div>
      </div>
    </section>
    </main>

    <!-- FOOTER -->
    <footer>
      <div class="wrap">
        <div class="grid">
          <div>
            <div class="logo" style="margin-bottom:14px">
              <svg class="mark" viewBox="0 0 40 40" aria-hidden="true">
                <path d="M3 21h7l2.5-7 4 13 3-9 2 3h6" stroke="#2DB336" stroke-width="2.4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <span class="name">bio<b>cor</b></span>
            </div>
            <p style="max-width:34ch">Centro de Enfermedades Cardiovasculares. Más de 25 años de experiencia cuidando la salud del corazón en Santa Cruz de la Sierra.</p>
            <div class="footer-social">
              <a href="https://www.instagram.com/biocor.bo/" target="_blank" rel="noopener" aria-label="Instagram de Biocor">
                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r=".5" fill="currentColor" stroke="none"/></svg>
                Instagram
              </a>
              <a href="https://www.facebook.com/pages/Biocor/366415400103584" target="_blank" rel="noopener" aria-label="Facebook de Biocor">
                <svg aria-hidden="true" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                Facebook
              </a>
            </div>
          </div>
          <div>
            <h3>Servicios</h3>
            <a href="#servicios">Estudios especializados</a>
            <a href="#consultas">Consultas médicas</a>
            <a href="#equipo">Nuestro equipo</a>
            <a href="#faq">Preguntas frecuentes</a>
          </div>
          <div>
            <h3>Contacto</h3>
            <a href="tel:+59176656449">(+591) 76 656-449</a>
            <a href="https://wa.me/59176656449">WhatsApp</a>
            <a href="#contacto">Ubicación</a>
            <a href="https://www.instagram.com/biocor.bo/" target="_blank" rel="noopener">Instagram</a>
            <a href="https://www.facebook.com/pages/Biocor/366415400103584" target="_blank" rel="noopener">Facebook</a>
          </div>
        </div>
        <div class="bottom">
          <span>© 2026 Biocor · Todos los derechos reservados.</span>
          <span>Biocor informa y acompaña.</span>
        </div>
      </div>
    </footer>

    <a href="https://wa.me/59176656449" class="fab" aria-label="WhatsApp">
      <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M20 3.9A10 10 0 003.5 18L2 22l4.1-1.5A10 10 0 1020 3.9zm-8 16a8 8 0 01-4-1l-.3-.2-2.4.9.8-2.4-.2-.3a8 8 0 1110.6 2.9A8 8 0 0112 19.9z"/></svg>
    </a>

  </body>
</html>
