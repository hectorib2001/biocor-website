document.addEventListener('DOMContentLoaded', () => {
// ---- Estudios (servicios) ----
const heart='<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>';
const wave ='<path d="M3 12h3l2-6 3 12 2-8 2 4h6"/>';
const services=[
  ["Electrocardiograma","Registro rápido e indoloro de la actividad eléctrica del corazón.",wave],
  ["Ecocardiograma doppler color","Imagen detallada del corazón en movimiento y de su flujo sanguíneo.",'<path d="M2 12a10 10 0 0120 0"/><path d="M6 12a6 6 0 0112 0"/><circle cx="12" cy="12" r="1.5"/>'],
  ["Ecocardiograma de estrés","Evalúa cómo responde tu corazón ante el esfuerzo físico.",heart],
  ["Prueba de esfuerzo","Mide el funcionamiento cardíaco durante el ejercicio controlado.",'<path d="M4 18l5-5 4 4 7-9"/><path d="M4 4v16h16"/>'],
  ["Holter 24h","Monitoreo continuo del ritmo cardíaco durante un día completo.",'<rect x="6" y="3" width="12" height="18" rx="2"/><path d="M9 12h2l1-2 1 4 1-2h1"/>'],
  ["Mapa de presión (MAPA)","Seguimiento de la presión arterial a lo largo del día.",'<circle cx="12" cy="12" r="9"/><path d="M12 12l4-2"/><path d="M12 7v1"/>'],
  ["Control de marcapaso","Revisión y ajuste del funcionamiento de tu marcapaso.",'<rect x="4" y="8" width="16" height="9" rx="2"/><path d="M8 12h2l1-2 1 4 1-2h2"/>'],
  ["Tilt test","Estudio para conocer la causa de mareos o desmayos.",'<path d="M12 3v18"/><path d="M5 8l7-5 7 5"/>'],
  ["Valoración cardiológica","Consulta integral para revisar el estado de tu corazón.",heart],
];
document.getElementById('servGrid').innerHTML=services.map(s=>`
  <article class="serv reveal">
    <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">${s[2]}</svg></div>
    <h3>${s[0]}</h3><p>${s[1]}</p>
  </article>`).join('');

// ---- Equipo médico ----
const doctorImages = [
  'ArturoBarrientos.jpg',
  'LuisRenjel.jpg',
  'JulioZamora.jpg',
  'MarielaSanchez.jpg',
  'XimenaSonco.jpg',
];

const team = [
  ["Dr. Arturo Barrientos", "Cirujano cardiovascular",  "Especialista en cirugía del corazón con amplia trayectoria."],
  ["Dr. Luis Renjel", "Cardiólogo · Arritmias",   "Experto en arritmias y seguimiento postoperatorio."],
  ["Dr. Julio Zamora", "Cardiólogo",   "Cardiología general con enfoque en prevención y diagnóstico."],
  ["Dra. Mariela Sánchez","Endocrinología",            "Atención integral del sistema endocrino y metabólico."],
  ["Lic. Ximena Sonco","Nutrición",                 "Acompañamiento nutricional para la salud del corazón."],
];

function doctorPhoto(filename, name) { 
  const bust = '<svg viewBox="0 0 24 24" fill="none" stroke="#33523a" stroke-width="1.4"><circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0116 0"/></svg>';
  if (!filename) return bust;
  const bustHidden = '<svg style="display:none" viewBox="0 0 24 24" fill="none" stroke="#33523a" stroke-width="1.4"><circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0116 0"/></svg>';
  return `<img src="/images/Biocor/${filename}" alt="${name}" onerror="this.style.display='none';this.nextElementSibling.style.display=''">${bustHidden}`;
}

document.getElementById('teamGrid').innerHTML = team.map((d, i) => `
  <article class="doc reveal">
    <div class="ph">
      ${doctorPhoto(doctorImages[i], d[0])}
    </div>
    <div class="body"><h3>${d[0]}</h3><div class="role">${d[1]}</div><div class="desc">${d[2]}</div></div>
  </article>`).join('');

// ---- Testimonios ----
const tst=[
  ["Me explicaron todo con calma y claridad. Salí entendiendo el estudio de mi papá y mucho más tranquila.","María L.","Hija de paciente"],
  ["Después de años, encontré un lugar donde hacen todos los estudios juntos y con doctores de verdad.","Jorge R.","Paciente"],
  ["El trato humano marca la diferencia. Sentí que de verdad les importaba mi salud.","Carmen V.","Paciente"],
];
document.getElementById('tstGrid').innerHTML=tst.map(t=>`
  <article class="tst reveal">
    <div class="stars">★★★★★</div>
    <blockquote>“${t[0]}”</blockquote>
    <div class="who"><div class="av">${t[1][0]}</div><div><b>${t[1]}</b><span>${t[2]}</span></div></div>
  </article>`).join('');

// ---- Reveal on scroll ----
const io=new IntersectionObserver((es)=>es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target)}}),{threshold:.12});
document.querySelectorAll('.reveal').forEach((el,i)=>{el.style.transitionDelay=(i%4*60)+'ms';io.observe(el)});
});

