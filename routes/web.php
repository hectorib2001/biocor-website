<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $heart = '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>';
    $wave = '<path d="M3 12h3l2-6 3 12 2-8 2 4h6"/>';

    $services = [
        [
            'name' => 'Electrocardiograma',
            'description' => 'Registra la actividad eléctrica del corazón en pocos minutos, sin dolor ni preparación previa. Permite detectar arritmias, problemas de conducción eléctrica y señales de infarto, y suele ser el primer estudio en cualquier valoración cardiológica.',
            'icon' => $wave,
        ],
        [
            'name' => 'Ecocardiograma doppler color',
            'description' => 'Utiliza ultrasonido para mostrar en tiempo real la estructura del corazón, el funcionamiento de sus válvulas y la dirección del flujo sanguíneo. Es clave para evaluar la fuerza de bombeo del corazón y detectar problemas valvulares o congénitos.',
            'icon' => '<path d="M2 12a10 10 0 0120 0"/><path d="M6 12a6 6 0 0112 0"/><circle cx="12" cy="12" r="1.5"/>',
        ],
        [
            'name' => 'Ecocardiograma de estrés',
            'description' => 'Combina el ecocardiograma con ejercicio controlado (o estímulo farmacológico) para observar cómo responde el corazón cuando aumenta su demanda de esfuerzo. Ayuda a detectar obstrucciones en las arterias coronarias que no se ven en reposo.',
            'icon' => $heart,
        ],
        [
            'name' => 'Prueba de esfuerzo',
            'description' => 'Registra el electrocardiograma y la presión arterial mientras caminas en una cinta bajo esfuerzo progresivo y controlado. Se usa para evaluar la tolerancia al ejercicio, detectar enfermedad coronaria y ajustar tratamientos.',
            'icon' => '<path d="M4 18l5-5 4 4 7-9"/><path d="M4 4v16h16"/>',
        ],
        [
            'name' => 'Holter 24h',
            'description' => 'Un dispositivo portátil registra el ritmo cardíaco de forma continua durante 24 horas mientras realizas tu rutina normal. Permite detectar arritmias intermitentes que un electrocardiograma puntual no alcanza a capturar.',
            'icon' => '<rect x="6" y="3" width="12" height="18" rx="2"/><path d="M9 12h2l1-2 1 4 1-2h1"/>',
        ],
        [
            'name' => 'Mapa de presión (MAPA)',
            'description' => 'Registra automáticamente la presión arterial a intervalos regulares durante 24 horas, incluso mientras duermes. Ofrece una visión más completa que una medición aislada y ayuda a confirmar o descartar hipertensión.',
            'icon' => '<circle cx="12" cy="12" r="9"/><path d="M12 12l4-2"/><path d="M12 7v1"/>',
        ],
        [
            'name' => 'Control de marcapaso',
            'description' => 'Revisión periódica del funcionamiento del marcapaso o desfibrilador implantado, incluyendo el estado de la batería y su programación. Permite ajustar el dispositivo a las necesidades actuales del paciente.',
            'icon' => '<rect x="4" y="8" width="16" height="9" rx="2"/><path d="M8 12h2l1-2 1 4 1-2h2"/>',
        ],
        [
            'name' => 'Tilt test',
            'description' => 'Evalúa cómo responden la frecuencia cardíaca y la presión arterial ante cambios de posición, en una camilla inclinable y bajo supervisión médica. Ayuda a identificar la causa de mareos, desmayos o episodios de pérdida de conciencia.',
            'icon' => '<path d="M12 3v18"/><path d="M5 8l7-5 7 5"/>',
        ],
        [
            'name' => 'Valoración cardiológica',
            'description' => 'Consulta integral con un cardiólogo que revisa tu historia clínica, factores de riesgo y síntomas, y define qué estudios son necesarios. Es el punto de partida recomendado para cualquier persona que quiera evaluar la salud de su corazón.',
            'icon' => $heart,
        ],
    ];

    $consultations = [
        'Cardiología clínica',
        'Cirugía cardiovascular',
        'Arritmias y postoperatorio',
        'Endocrinología',
        'Nutrición',
    ];

    $team = [
        [
            'name' => 'Dr. Arturo Barrientos',
            'role' => 'Cirujano cardiovascular',
            'description' => 'Especialista en cirugía del corazón con amplia trayectoria.',
            'image' => 'ArturoBarrientos.webp',
            'imageWidth' => 318,
            'imageHeight' => 425,
        ],
        [
            'name' => 'Dr. Luis Renjel',
            'role' => 'Cardiólogo · Arritmias',
            'description' => 'Experto en arritmias y seguimiento postoperatorio.',
            'image' => 'LuisRenjel.webp',
            'imageWidth' => 532,
            'imageHeight' => 500,
        ],
    ];

    $testimonials = [
        [
            'quote' => 'Me explicaron todo con calma y claridad. Salí entendiendo el estudio de mi papá y mucho más tranquila.',
            'name' => 'María L.',
            'role' => 'Hija de paciente',
        ],
        [
            'quote' => 'Después de años, encontré un lugar donde hacen todos los estudios juntos y con doctores de verdad.',
            'name' => 'Jorge R.',
            'role' => 'Paciente',
        ],
        [
            'quote' => 'El trato humano marca la diferencia. Sentí que de verdad les importaba mi salud.',
            'name' => 'Carmen V.',
            'role' => 'Paciente',
        ],
    ];

    $faqs = [
        [
            'question' => '¿Dónde está ubicado Biocor?',
            'answer' => 'Biocor está en Calle Florida 900, Santa Cruz de la Sierra, Bolivia.',
        ],
        [
            'question' => '¿Qué estudios cardiológicos realiza Biocor?',
            'answer' => 'Electrocardiograma, ecocardiograma doppler color, ecocardiograma de estrés, prueba de esfuerzo, Holter 24h, mapa de presión (MAPA), control de marcapaso, tilt test y valoración cardiológica, todos en un mismo lugar y sin derivaciones externas.',
        ],
        [
            'question' => '¿Quién realiza los estudios en Biocor?',
            'answer' => 'Los estudios se realizan con equipos de última tecnología operados directamente por médicos especialistas, no por técnicos genéricos.',
        ],
        [
            'question' => '¿Cuál es el horario de atención de Biocor?',
            'answer' => 'Lunes a viernes de 08:00 a 12:00 y de 14:30 a 19:00, y sábados de 09:00 a 12:00.',
        ],
        [
            'question' => '¿Cómo puedo agendar una cita en Biocor?',
            'answer' => 'Puedes agendar por WhatsApp o llamando al (+591) 76 656-449.',
        ],
        [
            'question' => '¿Qué consultas médicas ofrece Biocor además de cardiología?',
            'answer' => 'Cardiología clínica, cirugía cardiovascular, arritmias y postoperatorio, endocrinología y nutrición.',
        ],
        [
            'question' => '¿Cuánta experiencia tiene Biocor?',
            'answer' => 'Biocor tiene más de 25 años de trayectoria cuidando la salud del corazón en Santa Cruz de la Sierra.',
        ],
    ];

    return view('welcome', compact('services', 'consultations', 'team', 'testimonials', 'faqs'));
});
