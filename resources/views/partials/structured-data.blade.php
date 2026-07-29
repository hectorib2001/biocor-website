@php
// TODO: replace https://www.biocor.bo with the production domain once finalized.
$siteUrl = 'https://www.biocor.bo/';
$clinicId = $siteUrl . '#clinic';

$clinic = [
    '@type' => 'MedicalClinic',
    '@id' => $clinicId,
    'name' => 'Biocor',
    'alternateName' => 'Biocor · Centro de Enfermedades Cardiovasculares',
    'description' => 'Centro de enfermedades cardiovasculares en Santa Cruz de la Sierra, Bolivia, con más de 25 años de experiencia en consultas y estudios cardiológicos.',
    'url' => $siteUrl,
    'telephone' => '+59176656449',
    'image' => asset('images/Biocor/Equipment.jpg'),
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'Calle Florida 900',
        'addressLocality' => 'Santa Cruz de la Sierra',
        'addressCountry' => 'BO',
    ],
    'openingHoursSpecification' => [
        [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            'opens' => '08:00',
            'closes' => '12:00',
        ],
        [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            'opens' => '14:30',
            'closes' => '19:00',
        ],
        [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Saturday'],
            'opens' => '09:00',
            'closes' => '12:00',
        ],
    ],
    'sameAs' => [
        'https://www.instagram.com/biocor.bo/',
        'https://www.facebook.com/pages/Biocor/366415400103584',
    ],
    'hasMap' => 'https://maps.app.goo.gl/JJxzzgSV3jFd4eWb7',
    'medicalSpecialty' => 'Cardiovascular',
    'availableService' => array_map(fn ($service) => [
        '@type' => 'MedicalProcedure',
        'name' => $service['name'],
        'description' => $service['description'],
        'provider' => ['@id' => $clinicId],
    ], $services),
    'employee' => array_map(fn ($doctor, $i) => [
        '@type' => 'Physician',
        '@id' => $siteUrl . '#doctor-' . ($i + 1),
        'name' => $doctor['name'],
        'jobTitle' => $doctor['role'],
        'description' => $doctor['description'],
        'medicalSpecialty' => $doctor['role'],
        'worksFor' => ['@id' => $clinicId],
        'image' => asset('images/Biocor/' . $doctor['image']),
    ], $team, array_keys($team)),
];

$faqPage = [
    '@type' => 'FAQPage',
    'mainEntity' => array_map(fn ($faq) => [
        '@type' => 'Question',
        'name' => $faq['question'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $faq['answer'],
        ],
    ], $faqs),
];

$graph = [
    '@context' => 'https://schema.org',
    '@graph' => [$clinic, $faqPage],
];
@endphp
<script type="application/ld+json">{!! json_encode($graph, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}</script>
