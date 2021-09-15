<?php
require '../core/bootstrap.php';

//Build the page metadata
$meta = [];
$meta['description'] = "Resume ahenrikson0582";
$meta['keywords'] = "resume, ahenrikson0582";

$content = <<<EOT

        
        <h1 class="display-4">Abby Henrikson Resume</h1>
        <p class="lead">Full Stack Web and Hybrid Mobile Applications Developer</p>
        <p>A dedicated and meticulous professional with a focus on customer service and technology. A proactive problem solver and strategic thinker positioned to advance in the information technology industry. Excels in learning new skills, such as coding and cutting-edge software. A passionate and driven contributor who is continuously exploring growth opportunities and new web technologies fulfillment. Full stack web and hybrid mobile applications specializing in full stack JavaScript application
          and architectures. Experienced in all stages of the development life cycle, well versed in numerous
          programming languages.
           
      
      </p>
      </div>
      <div class="col-md-auto">
        <a class="btn btn-primary btn-lg" href="#" role="button">LinkedIn</a>
        <a class="btn btn-primary btn-lg" href="#" role="button">GitHub</a>
      </div>
      <hr class="my-4">
      <p></p>
      </div>
    </div>

      <div class="row">
          <!-- <div class="clearfix"> -->
            <div class="container">
              <h2 class="text-initial">Core Competencies</h3>
              <div class="row">
                <div class="col">
                  <ul class="cc-left">
                    <li>Full Stack Development</li>
                    <li>Front End Development</li>
                  </ul>
                </div>
                <div class="col">
                  <ul class="cc-right">
                    <li>Hybrid Mobile Development</li>
                    <li>Server Side Development</li>
                  </ul>
                    </div>
              </div>
            </div>

            <!-- <div class="certs"> -->
            <div class="container">
              <h2>Certifications and Technical Proficiencies</h2>
              <ul>
                <li>
                    <em>Certifications:</em>
                    Agile Certified Scrum Master
                </li>
                <li>
                    <em>Platforms:</em>
                    Linux, LAMP, MEAN, NodeJS
                </li>
                <li>
                    <em>Databases:</em>
                    MySQL, MongoDB
                </li>
                <li>
                    <em>Tools:</em>
                    VS Code, SSH, Gulp, Git
                </li>
                <li>
                    <em>Languages:</em>
                    HTML, CSS, SASS, JavaScript, ES6, PHP, BASH, SQL, TypeScript
                </li>
              </ul>
            </div>

            <div class="container">
            <hr class="my-4">

            <!-- <div class="emp"> -->
              <h2>Professional Experience</h2>
              <h3 class="clearfix">
              <span class="float-left">American Society of Anesthesiologist - Schaumburg, IL</span>
              <span class="float-right">2017-2021</span></h3>
            <p>Worked with meeting services manager, supporting continued advancement of organization’s registration tools and services for all major meetings and events. Coordinated anesthesiology annual meeting, focusing specifically on registration, hotel and travel arrangements, guestroom allotment, and billing arrangements. Served as liaison between members and other registrants, supplier partners, and key stakeholders in meetings and exhibits department as well as education, member services, and finance.</p>
  
            <h4>Meeting Services Specialist</h4>
            <ul>
              <li>Optimized the registration process for a better user experience.</li>
              <li>Facilitated meetings exceeding 12,000 participants.</li>
              <li>Negotiated terms with vendors to reduce costs> and eliminate unnecessary expenses.</li>
              <li>Established timelines to streamline processes, adhering to deadlines.</li>
          </ul> 
  
            <h3 class="clearfix">
              <span class="float-left">eShow - South Barrington, IL</span>
              <span class="float-right">2009-2017</span></h3>
              <p>Managed conference registration area ranging from 500 to 30,000 participants. Established and maintained strong professional and open relationships with clients, show managers, and all event staff as each event progressed through planning and implementation processes. Assumed all advance and on-site responsibilities for registration, lead retrieval, session tracking, exhibit sales, and web development. Maintained work and travel schedules as well as travel team housing for 30 to 40 individuals for all events assigned and created and adhered to all timelines and standards. 
                Facilitated and maintained high level of professionalism and respect throughout communications while in office as well as on-site. Responded with appropriate urgency to prioritize and/or escalate key service requests as directed by supervisor/director. Traveled up to 80% of time, as required, to attend all on-site events.</p>
    
              <h4>Event Manager</h4>
              <ul>
                <li>Cut down registration lines on-site by  80%.</li>
                <li>Retained 80% of clientele during tenure.</li>
                <li>Saved company and clientele money on shipping cost by sending to advance warehouse in timely fashion.</li>
            </ul>
              </ul>
            </div>
  
            <div class="container">
              

              <hr class="my-4">
              <div class="edu">
            <h2>Education</h2>

            <h3 class="clearfix">
              <span class="float-left">University of Phoenix</span>
              <span class="float-right">June 2012</span></h3>
            <h4>Associate Degree in Hospitality and Tourism </h4>
            <p></p>
            <p></p>
  
            <h3 class="clearfix">
              <span class="float-left">MicroTrain Technologies - Chicago, IL</span>
              <span class="float-right">Nov 2021</span></h3>
            <h4>Agile Full Stack Web and Hybrid Mobile Application Development</h4>
            <p>Front-end and client-side development with HTML, CSS and JavaScript. Work with libraries and frameworks such as jQuery, Bootstrap and Angular. Build tools such as Yarn and Gulp. Use web technology to build hybrid mobile applications using Apache’s Cordova.</p>
            <p>Work with third party APIs from vendors such as Google, NASA, Twilio and so on. Server side integration with LAMP (Linux, Apache, MySQL, PHP) and MEAN (MongoDB, Express, Angular, Node,js) stacks. Build, set-up, maintain own cloud based server.</p>
            
            <h3 class="clearfix">
              <span class="float-left">MicroTrain Technologies - Chicago, IL</span>
              <span class="float-right">Aug 2021</span></h3>
            <h4>Agile Scrum Master</h4>
            <p>Covering the principles of Agile and Scrum methodology through a combination of robust simulations, hands-on experimentation and high-quality instruction. Currently learning the fundamentals of Scrum and how to facilitate, coach and lead an Agile project.</p>
            </div>
      </div>
  </div>
</div>

EOT;

include '../core/layout.php';
