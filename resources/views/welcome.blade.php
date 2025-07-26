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
    <div class="service-item"><i class="fas fa-dashboard"></i><h3>Odoo System Development</h3></div>
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
    <span class="skill-item"><i class="fab fa-python"></i> Python</span>
    <span class="skill-item"><i class="fab fa-reorder"></i> Odoo ORM</span>
    <span class="skill-item"><i class="fab fa-commenting"></i> Odoo OWL</span>
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
      <img src="images/doms.jpg" alt="">
      <h3>Dental Operations Management System</h3>
    </div>
    <div class="project-item" onclick="openModal(2)">
      <img src="images/hris.jpg" alt="">
      <h3>Human Resources Management System</h3>
    </div>
    <div class="project-item" onclick="openModal(3)">
      <img src="images/crms.jpg" alt="">
      <h3>Pointing System</h3>
    </div>
    <div class="project-item" onclick="openModal(4)">
      <img src="images/xtana.jpg" alt="">
      <h3>Retrieval-Augmented Generation (RAG) Chatbot</h3>
    </div>
    <div class="project-item" onclick="openModal(5)">
      <img src="images/odoo.jpg" alt="">
      <h3>Odoo Development (confidential)</h3>
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
    <h3>CRMS with Pointing System</h3>
    <img src="images/crms.jpg" alt="">
    <div class="modal-body">

        <p><strong>Demo:</strong> admin@gmail.com / 12345678</p>
        <p><a href="https://crms.demo.renzcabato.online" target="_blank">Explore Demo</a></p>
           <section id="CRMS">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                  <div class="card-body">
                    <h5 class="card-title">📦 Customer Management</h5>
                    <ul class="mb-0">
                      <li>Customer profiles & refill history</li>
                      <li>Track purchases and activity</li>
                      <li>Earn points per transaction</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                  <div class="card-body">
                    <h5 class="card-title">🔄 Refill & Purchase Monitoring</h5>
                    <ul class="mb-0">
                      <li>Log refill transactions</li>
                      <li>Auto-calculate points</li>
                      <li>Send reminders for refills</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                  <div class="card-body">
                    <h5 class="card-title">⭐ Pointing System</h5>
                    <ul class="mb-0">
                      <li>Custom earning rules</li>
                      <li>Redeem for rewards or discounts</li>
                      <li>Full points ledger/history</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                  <div class="card-body">
                    <h5 class="card-title">📈 Dealer & Sales Tracking</h5>
                    <ul class="mb-0">
                      <li>Dealer profiles & assigned areas</li>
                      <li>Track dealer sales and commissions</li>
                      <li>Performance leaderboards</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="card h-100 shadow-sm">
                  <div class="card-body">
                    <h5 class="card-title">📊 Reports & Analytics</h5>
                    <ul class="mb-0">
                      <li>Sales summaries & trends</li>
                      <li>Customer/dealer performance</li>
                      <li>Points usage reports</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
           </section>
    </div>
  </div>
</div>
<div class="modal" id="modal4">
  <div class="modal-content">
    <button class="close-btn" onclick="closeModal(4)">&times;</button>
    <h3>Retrieval-Augmented Generation (RAG).</h3>
    <img src="images/xtana.jpg" alt="">
        <div class="modal-body">
          <section class="container py-5">
            <h2 class="text-center mb-4">🧠 Retrieval-Augmented Generation (RAG) Chatbot</h2>

            <div class="row g-4">
              <div class="col-12">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <h5 class="card-title">🔍 What is RAG?</h5>
                    <p>RAG (Retrieval-Augmented Generation) is an AI approach that combines a language model (like ChatGPT) with real data from your website, database, or files to generate more accurate answers.</p>
                    <p>Instead of guessing, it retrieves relevant content from your knowledge base before answering.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card shadow-sm h-100">
                  <div class="card-body">
                    <h5 class="card-title">📁 Step 1: Upload Your Data</h5>
                    <ul>
                      <li>Website content (HTML, text)</li>
                      <li>PDF, Word, Excel, CSV, JSON</li>
                      <li>Database exports (SQL, NoSQL)</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card shadow-sm h-100">
                  <div class="card-body">
                    <h5 class="card-title">📚 Step 2: Index & Embed</h5>
                    <ul>
                      <li>Split content into chunks</li>
                      <li>Convert text into vector embeddings</li>
                      <li>Store in a vector database (Pinecone, FAISS, etc.)</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card shadow-sm h-100">
                  <div class="card-body">
                    <h5 class="card-title">💬 Step 3: Ask Questions</h5>
                    <ul>
                      <li>Bot retrieves relevant chunks</li>
                      <li>Passes them to GPT for response</li>
                      <li>Answer is grounded in your data</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card shadow-sm h-100">
                  <div class="card-body">
                    <h5 class="card-title">⚙️ Tools & Frameworks</h5>
                    <ul>
                      <li><strong>LangChain / LlamaIndex</strong> - RAG orchestration</li>
                      <li><strong>Pinecone / FAISS / Chroma</strong> - Vector DB</li>
                      <li><strong>OpenAI API</strong> - GPT answering</li>
                      <li><strong>Streamlit / React / Custom UI</strong> - Chat frontend</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <h5 class="card-title">✅ Chatbot Capabilities</h5>
                    <ul>
                      <li>Answer FAQs from your website or docs</li>
                      <li>Query internal systems or databases</li>
                      <li>Stay factual by using your real content</li>
                      <li>Combine multiple sources (CRM + docs + SQL)</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
  </div>
</div>
<div class="modal" id="modal5">
  <div class="modal-content">
    <button class="close-btn" onclick="closeModal(5)">&times;</button>
    <h3>Odoo Development (confidential).</h3>
        <div class="modal-body">
          <section class="container py-5">
            <h2 class="text-center mb-4">Odoo Development (confidential)</h2>

            <div class="row g-4">
            

              <div class="col-12">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <h5 class="card-title">as a Odoo Developer</h5>
                    <ul>
                      <li>🐍 Developed over 15 custom modules in Odoo v12 to v16, across CRM, Accounting, Inventory, and HR systems.</li>
                      <li>🧩 Customized core modules such as sale, purchase, stock, and account to meet client-specific workflows.</li>
                      <li>📊 Built dynamic reports using QWeb (PDF invoices, stock valuation reports) and custom dashboards.</li>
                      <li>🔄 Integrated Odoo with third-party platforms via REST APIs (e.g., Shopify, PayMongo, Viber SMS).</li>
                      <li> 🛡️ Implemented access controls and record rules for multi-user, multi-company environments.</li>
                        <li> 🚀 Migrated legacy Odoo v12 instance to v16 with full data preservation and test coverage.</li>
                          <li> ⚙️ Automated invoice generation and scheduled email reminders via cron jobs.></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
  </div>
</div>
@endsection
