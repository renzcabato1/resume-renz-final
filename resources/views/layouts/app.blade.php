<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Renz Cabato | Senior Web Developer</title>
<link rel="shortcut icon" href="images/renz.png">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }
  body { font-family: 'Inter', sans-serif; background: #f0f2f5; color: #1f2937; transition:background .3s,color .3s;}
  header { background: radial-gradient(circle at top left,#1e3a8a,#2563eb); color:white; padding:80px 20px; text-align:center; position:relative;}
  header::after { content:""; position:absolute; bottom:-1px; left:0; width:100%; height:100px; background:white; clip-path:polygon(0 60%,100% 0,100% 100%,0 100%);}
  header h1 { font-size:3.5rem; margin-bottom:10px; }
  header p { font-size:1.2rem; color:#e0e7ff; }
  .download-resume { margin-top:15px; display:inline-block; padding:10px 20px; background:#1e3a8a; color:white; border-radius:8px; text-decoration:none; font-weight:500; }
  nav { background:white; padding:15px; position:sticky; top:0; z-index:10; box-shadow:0 2px 10px rgba(0,0,0,0.08);}
  nav ul { display:flex;justify-content:center;gap:40px;list-style:none; }
  nav a { text-decoration:none;color:#1e3a8a;font-weight:600;font-size:1.1rem;position:relative;}
  nav a::after { content:"";position:absolute;bottom:-5px;left:0;width:0;height:2px;background:#2563eb;transition:.3s;}
  nav a:hover::after { width:100%; }
  section { padding:60px 20px; max-width:1200px; margin:auto;}
  h2 { font-size:2.5rem; text-align:center; color:#1e3a8a; margin-bottom:40px;}
  .services { display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:30px; }
  .service-item { background:white;padding:20px;border-radius:12px;box-shadow:0 8px 16px rgba(0,0,0,0.05);text-align:center;}
  .service-item i { font-size:2.5rem;color:#2563eb; margin-bottom:10px;}
  .service-item h3 { font-size:1.2rem; margin-bottom:8px;}
  .skills-group { margin-bottom:40px; }
  .skills-group h3 { font-size:1.4rem; margin-bottom:15px; color:#1e3a8a;}
  .skill-list { display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:10px; }
  .skill-item { background:#e5e7eb;padding:10px 15px;border-radius:8px;display:inline-flex;align-items:center;gap:8px;font-size:.95rem; }
  .skill-item i { color:#2563eb; }
  .project-gallery { display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:30px; }
  .project-item { background:white; padding:15px;border-radius:12px; box-shadow:0 8px 16px rgba(0,0,0,0.05); cursor:pointer; }
  .project-item img { width:100%;height:180px; object-fit:cover; border-radius:8px; }
  .project-item h3 { margin-top:12px; font-size:1.2rem; color:#1e3a8a;}
  .hire-me-btn { position:fixed; bottom:30px;right:30px;background:#2563eb;color:white;padding:14px 20px;border-radius:50px;box-shadow:0 4px 12px rgba(0,0,0,0.2);text-decoration:none;font-weight:600;z-index:999;}
  .theme-toggle { position:fixed;top:20px;right:20px;background:#1e3a8a;color:white;border:none;padding:12px;border-radius:50%;font-size:1.2rem;cursor:pointer;z-index:1000;}
  .contact-links { display:flex;flex-direction:column;align-items:center;gap:20px; }
  .contact-item { background:#f1f5f9;padding:12px 20px;border-radius:12px;display:inline-flex;align-items:center;gap:12px;color:#1e3a8a; text-decoration:none;font-weight:500;box-shadow:0 3px 8px rgba(0,0,0,0.05);}
  .contact-item i { color:#2563eb;}
  footer { text-align:center;background:#1e3a8a;color:white;padding:30px 20px;}
  .modal { display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.6);justify-content:center;align-items:center;z-index:1000; }
  .modal-content { background:white;max-width:700px;width:90%;padding:30px;border-radius:12px;position:relative;text-align:left;}
  .modal-content img { width:100%;margin-bottom:15px;border-radius:8px;}
  .modal-content h3 { margin-top:0;color:#1e3a8a;}
  .close-btn { position:absolute;top:15px;right:20px;background:none;border:none;font-size:1.5rem;cursor:pointer;}
  body.dark-mode { background:#0f172a; color:#e2e8f0; }
  body.dark-mode header,body.dark-mode .service-item,body.dark-mode .skill-item,body.dark-mode .project-item,body.dark-mode .modal-content { background:#1e293b; color:#e2e8f0; box-shadow:none;}
  body.dark-mode nav,body.dark-mode footer { background:#0f172a;}
  body.dark-mode a,body.dark-mode .contact-item { color:#60a5fa;}
</style>
<style>
  .modal {
    display: none; /* hidden by default */
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background-color: rgba(0, 0, 0, 0.5);
  }

  .modal-content {
    position: relative;
    background-color: #fff;
    margin: 5% auto;
    padding: 20px;
    border-radius: 10px;
    width: 90%;
    max-width: 800px;
    max-height: 90vh;
    display: flex;
    flex-direction: column;
  }

  .modal-content h3 {
    margin-top: 0;
  }

  .close-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
  }

  .modal-body {
    overflow-y: auto;
    padding-right: 10px;
    margin-top: 20px;
  }
</style>

</head>
<body>

<button id="theme-toggle" class="theme-toggle"><i class="fas fa-moon"></i></button>
<a href="#contact" class="hire-me-btn"><i class="fas fa-paper-plane"></i> Hire Me</a>

<header>
  <h1>Renz Cabato</h1>
  <p>Senior Web Developer | Laravel • JavaScript • PHP • AI & Process Automation</p>
  <a href="resume.pdf"  class="download-resume" target="_blank"><i class="fas fa-download"></i> Download Resume</a>
</header>
   
@yield('content')
    
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
  document.querySelectorAll('.project-item img').forEach(img => {
    let i=0, imgs=[...img.parentElement.querySelectorAll('img')];
    setInterval(()=>{ imgs.forEach((el, j)=> el.style.display=j===i? 'block':'none'); i=(i+1)%imgs.length; }, 3000);
  });
  function openModal(i){document.getElementById('modal'+i).style.display='flex';}
  function closeModal(i){document.getElementById('modal'+i).style.display='none';}
  const toggle = document.getElementById('theme-toggle');
  toggle.addEventListener('click',()=>{
    document.body.classList.toggle('dark-mode');
    toggle.innerHTML=document.body.classList.contains('dark-mode')? '<i class="fas fa-sun"></i>':'<i class="fas fa-moon"></i>';
  });
</script>

</body>
</html>
