@extends('layouts.app')

@section('content')

<nav>
  <ul>
    <li><a href="#services">Services</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>


<section id="services" data-aos="fade-up">
  <h2>Services</h2>
  <div class="services">
    <div class="service-item"><i class="fas fa-code"></i><h3>Web Development</h3></div>
    <div class="service-item"><i class="fas fa-plug"></i><h3>API Development</h3></div>
    <div class="service-item"><i class="fas fa-robot"></i><h3>RPA & Process Automation</h3></div>
    <div class="service-item"><i class="fas fa-building"></i><h3>Company Websites</h3></div>
    <div class="service-item"><i class="fas fa-brain"></i><h3>AI Development</h3></div>
    <div class="service-item"><i class="fas fa-desktop"></i><h3>Web Application Dev</h3></div>
    <div class="service-item"><i class="fas fa-network-wired"></i><h3>API Integration</h3></div>
    <div class="service-item"><i class="fas fa-cogs"></i><h3>Process Automation</h3></div>
    <div class="service-item"><i class="fas fa-building-user"></i><h3>Company Website</h3></div>
  </div>
</section>

<section id="skills" data-aos="fade-up">
  <h2>Skills & Tools</h2>
  <div class="skills-group"><h3>Development Tools / Front-End</h3>
    <div class="skill-list">
      <span class="skill-item"><i class="fab fa-html5"></i> HTML5</span>
      <span class="skill-item"><i class="fab fa-css3-alt"></i> CSS3</span>
      <span class="skill-item"><i class="fab fa-bootstrap"></i> Bootstrap</span>
      <span class="skill-item"><i class="fab fa-js"></i> JavaScript</span>
      <span class="skill-item"><i class="fab fa-vuejs"></i> Vue.js</span>
      <span class="skill-item"><i class="fab fa-react"></i> ReactJS</span>
      <span class="skill-item"><i class="fab fa-laravel"></i> Laravel</span>
    <span class="skill-item"><i class="fab fa-node-js"></i> Node.js</span>
    <span class="skill-item"><i class="fab fa-wordpress"></i> Wordpress</span>
    </div>
  </div>
  <div class="skills-group"><h3>Back-End / Servers</h3>
    <div class="skill-list">
      <span class="skill-item"><i class="fab fa-laravel"></i> Laravel</span>
      <span class="skill-item"><i class="fas fa-database"></i> MySQL</span>
      <span class="skill-item"><i class="fas fa-server"></i> SQL Server</span>
      <span class="skill-item"><i class="fas fa-database"></i> MongoDB</span>
      <span class="skill-item"><i class="fas fa-plug"></i> Node.js</span>
      <span class="skill-item"><i class="fab fa-linux"></i> Linux</span>
      <span class="skill-item"><i class="fab fa-windows"></i> Windows Server</span>
      <span class="skill-item"><i class="fas fa-sitemap"></i> Proxy/Mikrotik</span>
      <span class="skill-item"><i class="fab fa-hdd"></i> Ionos / cPanel</span>
    </div>
  </div>
  <div class="skills-group"><h3>APIs / Automation</h3>
    <div class="skill-list">
      <span class="skill-item"><i class="fas fa-link"></i> REST API</span>
      <span class="skill-item"><i class="fas fa-share-alt"></i> API Integration</span>
      <span class="skill-item"><i class="fas fa-sync-alt"></i> AJAX</span>
      <span class="skill-item"><i class="fab fa-azure"></i> Azure</span>
      <span class="skill-item"><i class="fab fa-github"></i> GitHub</span>
    </div>
  </div>
  <div class="skills-group"><h3>Other Tools & Formats</h3>
    <div class="skill-list">
      <span class="skill-item"><i class="fas fa-file-code"></i> JSON</span>
      <span class="skill-item"><i class="fas fa-database"></i> Navicat</span>
      <span class="skill-item"><i class="fas fa-terminal"></i> PuTTY</span>
      <span class="skill-item"><i class="fas fa-file-alt"></i> Google Apps Script</span>
      <span class="skill-item"><i class="fas fa-brain"></i> Ollama</span>
    </div>
  </div>
</section>

<section id="projects" data-aos="fade-up">
  <h2>Projects</h2>
  <div class="project-gallery">
    <div class="project-item" onclick="openModal(1)">
      <img src="images/doms.png" alt="">
      <h3>Dental Operations Management System</h3>
    </div>
    <div class="project-item" onclick="openModal(2)">
      <img src="images/hris.png" alt="">
      <h3>Human Resources Management System</h3>
    </div>
    <div class="project-item" onclick="openModal(3)">
      <img src="project3a.jpg" alt="">
      <h3>Store Locator App</h3>
    </div>
  </div>
</section>

<section id="contact" data-aos="fade-up">
  <h2>Contact Me</h2>
  <div class="contact-links">
    <a href="mailto:cabato.renz.renz@gmail.com" class="contact-item"><i class="fas fa-envelope"></i> renzchristiancabato@gmail.com</a>
    <a href="https://github.com/renzcabato1" target="_blank" class="contact-item"><i class="fab fa-github"></i> Github</a>
    <a href="https://www.linkedin.com/in/renz-cabato-c-77b362167/" target="_blank" class="contact-item"><i class="fab fa-linkedin"></i> Renz Cabato</a>
  </div>
</section>

<footer><p>&copy; 2025 Renz Cabato — All rights reserved.</p></footer>

<a href="#contact" class="hire-me-btn"><i class="fas fa-paper-plane"></i> Hire Me</a>

<div class="modal" id="modal1">
  <div class="modal-content modal-lg">
    <button class="close-btn" onclick="closeModal(1)">&times;</button>
    <h3>Dental Operations Management System</h3>
    <img src="images/doms.png" alt="">
     <p><strong>Demo:</strong> superadmin@gmail.com / 12345678</p>
    <p><a href="https://awesamportal.demo.renzcabato.online/" target="_blank">View Live Demo</a></p>
    <br>
   📦 Inventory Management <br>
        Track stock levels, monitor ideal stock, and get low stock alerts in real-time.<br>
        <br>
        💰 Sales Transactions<br>
        Quick and reliable sales processing with custom pricing and detailed reports.<br>
        <br>
        👥 Client Management<br>
        Organize client data and transaction history for better service and retention.<br>
        <br>
        🔐 User Management<br>
        Role-based access with activity tracking for secure and accountable usage.<br>
        <br>
        🌍 Unlimited Locations<br>
        Manage inventory and operations across multiple branches with ease.<br>
        
  </div>
</div>
<div class="modal" id="modal2">
  <div class="modal-content">
    <button class="close-btn" onclick="closeModal(2)">&times;</button>
    <h3>Human Resources Management System</h3>
    <img src="images/hris.png" alt="" class="img-fluid mb-3">
    <div class="modal-body">
      <p><strong>Demo:</strong> admin@gmail.com / 12345678</p>
      <p><a href="https://hris.demo.renzcabato.online/" target="_blank">Demo Link</a></p>

      <section id="hris-features">
        <h4 class="text-center mb-4">HRIS Key Features</h4>
        <div class="row g-4">
          <!-- Feature Cards -->
          <div class="col-md-6">
            <div class="p-3 border rounded shadow-sm h-100">
              <h5>🕒 Timekeeping & Attendance</h5>
              <p>Track time-in/out via web camera, geolocation, or biometrics device integration for secure attendance logging.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="p-3 border rounded shadow-sm h-100">
              <h5>💼 Payroll & YTD Reports</h5>
              <p>Automated payroll with government deductions, downloadable payslips, and Year-To-Date summaries.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="p-3 border rounded shadow-sm h-100">
              <h5>💳 Loan & Leave Management</h5>
              <p>Manage employee loans with scheduled deductions, track leave credits, and handle leave approvals easily.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="p-3 border rounded shadow-sm h-100">
              <h5>📁 Employee 201 Files & HR Forms</h5>
              <p>Centralized digital records for employees, HR forms, contracts, and policy documents.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="p-3 border rounded shadow-sm h-100">
              <h5>📆 Schedules, Holidays & Shifts</h5>
              <p>Create and manage shifts, holiday calendars, and schedule assignments with ease.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="p-3 border rounded shadow-sm h-100">
              <h5>👥 Unlimited Users & Access Control</h5>
              <p>Supports unlimited users with secure role-based access for HR staff, admins, and employees.</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<div class="modal" id="modal3">
  <div class="modal-content">
    <button class="close-btn" onclick="closeModal(3)">&times;</button>
    <h3>Store Locator Web App</h3>
    <img src="project3a.jpg" alt="">
    <img src="project3b.jpg" alt="">
    <p>Leaflet-based interactive map to locate company outlets by region/province.</p>
    <p><strong>Demo:</strong> store@demo.com / 123456</p>
    <p><a href="#" target="_blank">Explore Live Map</a></p>
  </div>
</div>
@endsection
