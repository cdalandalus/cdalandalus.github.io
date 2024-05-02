<!DOCTYPE html>
<html lang="en" >

<!--<head>
  <meta charset="UTF-8">
  <title>CodePen - Dropdown Menu - Responsive - 3 Mode - Multi Level Navigation Bar</title>
  <link rel="stylesheet" href="./style.css">

	
</head>-->

<!-- partial:index.partial.html -->
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <!--        <link rel="stylesheet" href="/css/css.css" />-->
	
  <link rel="stylesheet" href="./css/style.css">
  <title>Club Al-Andalus Torremolinos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/0d8101b1a1.js" crossorigin="anonymous"></script>
	
<!--Font Awesome-->
<!--	<script src="../fontawesome/js/all.js"  data-family-prefix="icon" ></script>
	
	<link href="../fontawesome/css/all.css" rel="stylesheet">-->
	
	 <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
</head>

<body>
<br>
  <nav>
    <!-- Start - nav - dropdown menu - body -->
    <ul class="nav-dropdown-menu-body">
      <!-- Start - nav - dropdown menu - toggle -->
      <li class="nav-dropdown-menu-toggle-link">
        <label for="tm">
          <i class="fa fa-bars" aria-hidden="true"></i>
          Menu
          <span class="nav-dropdown-menu-toggle-dropicon-bottom">▾</span>
        </label>
      </li>
      <!-- End ___ nav - dropdown menu - toggle -->
      <!-- Start - nav - dropdown menu - main -->
      <li>
        <input type="checkbox" id="tm" />
        <ul class="nav-dropdown-menu-main cf">
          <!-- Start - nav - dropdown menu - links -->
          <li class="nav-dropdown-menu-title-link darkerli">
            <a href="#"><i class="fas fa-university"></i><span class="nav-dropdown-menu-text-after-icons">
                Home</span></a>
          </li>
          <!-- End ___ nav - dropdown menu - links -->
			
			
			
			


			
			
			
			
			
			
			
			
			

			


          <!-- Start - nav - dropdown menu - Staff -->
          <li class="nav-dropdown-menu-title-link darkerli">
            <a href="#"><i class="fas fa-swimmer" style="color:lightblue;"></i><span class="nav-dropdown-menu-text-after-icons">Zona Técnica clase </span>
              <span class="nav-dropdown-menu-dropicon-bottom">▾</span>
            </a>
            <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm27">▾</label>
            <!-- Start - nav - dropdown menu - Staff - Box -->
            <input type="checkbox" id="sm27" />
            <ul class="nav-dropdown-menu-submenu">
              <!-- Start - nav - dropdown menu - Staff - Employment  -->
              <li>
                <a href="#"><i class="fas fa-swimmer" style="color:lightblue;"></i>Employment
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm28">▾</label>
                <!-- Start - nav - dropdown menu - Staff - Employment  - Links -->
                <input type="checkbox" id="sm28" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">Jobs</a>
                  </li>
                  <li>
                    <a href="#">Payroll</a>
                  </li>
                  <li>
                    <a href="#">Human Resources</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Staff - Employment  - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Staff - Employment  -->
              <!-- Start - nav - dropdown menu - Staff - Benefits -->
              <li>
                <a href="#">Benefits
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm29">▾</label>
                <!-- Start - nav - dropdown menu - Staff - Benefits - Links -->
                <input type="checkbox" id="sm29" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">Elevate</a>
                  </li>
                  <li>
                    <a href="#">Faculty Club</a>
                  </li>
                  <li>
                    <a href="#">Health Plan</a>
                  </li>
                  <li>
                    <a href="#">Retirement</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Staff - Benefits - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Staff - Benefits -->
              <!-- Start - nav - dropdown menu - Staff - Key Initiatives  -->
              <li>
                <a href="#">Key Initiatives
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm30">▾</label>
                <!-- Start - nav - dropdown menu - Staff - Key Initiatives  - Links -->
                <input type="checkbox" id="sm30" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">Priorities</a>
                  </li>
                  <li>
                    <a href="#">Discovery Themes</a>
                  </li>
                  <li>
                    <a href="#">Strategic Planning</a>
                  </li>
                  <li>
                    <a href="#">Internationalization</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Staff - Key Initiatives  - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Staff - Key Initiatives  -->
              <!-- Start - nav - dropdown menu - Staff - Resources -->
              <li>
                <a href="#">Resources
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm31">▾</label>
                <!-- Start - nav - dropdown menu - Staff - Resources - Links -->
                <input type="checkbox" id="sm31" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">Classroom Services</a>
                  </li>
                  <li>
                    <a href="#">University Institute For
                      Teaching And Learning</a>
                  </li>
                  <li>
                    <a href="#">Employee Self Service</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Staff - Resources - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Staff - Resources -->
              <!-- Start - nav - dropdown menu - Community Life -->
              <li>
                <a href="#">Community Life
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm32">▾</label>
                <!-- Start - nav - dropdown menu - Community Life - Links -->
                <input type="checkbox" id="sm32" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">Arts - Culture</a>
                  </li>
                  <li>
                    <a href="#">Student Community</a>
                  </li>
                  <li>
                    <a href="#">Health And Wellness</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Community Life - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Community Life -->
              <!-- Start - nav - dropdown menu - Community Life - Links -->
              <li>
                <a href="#">Contact</a>
              </li>
              <!-- End ___ nav - dropdown menu - Community Life - Links -->
            </ul>
            <!-- End ___ nav - dropdown menu - Staff - Box -->
          </li>
          <!-- End ___ nav - dropdown menu - Staff -->
          <!-- Start - nav - dropdown menu - Athletics -->
          <li class="nav-dropdown-menu-title-link darkerli">
            <a href="#"><i class="fas fa-running"></i><span class="nav-dropdown-menu-text-after-icons">Athletics</span>
              <span class="nav-dropdown-menu-dropicon-bottom">▾</span>
            </a>
            <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm33">▾</label>
            <!-- Start - nav - dropdown menu - Athletics - Box -->
            <input type="checkbox" id="sm33" />
            <ul class="nav-dropdown-menu-submenu">
              <!-- Start - nav - dropdown menu - Athletics - Links -->
              <li>
                <a href="#">Facilities</a>
              </li>
              <li>
                <a href="#">Sports</a>
              </li>
              <li>
                <a href="#">Tickets</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
              <!-- End ___ nav - dropdown menu - Athletics - Links -->
            </ul>
            <!-- End ___ nav - dropdown menu - Athletics - Box -->
          </li>
          <!-- End ___ nav - dropdown menu - Athletics -->
          <!-- Start - nav - dropdown menu - Academics -->
          <li class="nav-dropdown-menu-title-link darkerli">
            <a href="#"><i class="fas fa-graduation-cap"></i><span class="nav-dropdown-menu-text-after-icons">Academics</span>
              <span class="nav-dropdown-menu-dropicon-bottom">▾</span>
            </a>
            <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm34">▾</label>
            <!-- Start - nav - dropdown menu - Academics - Box -->
            <input type="checkbox" id="sm34" />
            <ul class="nav-dropdown-menu-submenu">
              <!-- Start - nav - dropdown menu - Academics - Links -->
              <li>
                <a href="#">A-Z Programs</a>
              </li>
              <li>
                <a href="#">Faculties</a>
              </li>
              <li>
                <a href="#">Transfer - Exchange</a>
              </li>
              <li>
                <a href="#">Partners</a>
              </li>
              <li>
                <a href="#">Libraries - Collections</a>
              </li>
              <li>
                <a href="#">BookStore</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
              <!-- End ___ nav - dropdown menu - Academics - Links -->
            </ul>
            <!-- End ___ nav - dropdown menu - Academics - Box -->
          </li>
          <!-- End ___ nav - dropdown menu - Academics -->
          <!-- Start - nav - dropdown menu - Research -->
          <li class="nav-dropdown-menu-title-link darkerli">
            <a href="#"><i class="fab fa-researchgate"></i><span class="nav-dropdown-menu-text-after-icons">Research</span>
              <span class="nav-dropdown-menu-dropicon-bottom">▾</span>
            </a>
            <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm35">▾
            </label>
            <!-- Start - nav - dropdown menu - Research - Box -->
            <input type="checkbox" id="sm35" />
            <ul class="nav-dropdown-menu-submenu">
              <!-- Start - nav - dropdown menu - Research - Directory -->
              <li>
                <a href="#">Publications
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm36">▾</label>
                <!-- Start - nav - dropdown menu - Research - Publications - Links -->
                <input type="checkbox" id="sm36" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">Year</a>
                  </li>
                  <li>
                    <a href="#">Teams</a>
                  </li>
                  <li>
                    <a href="#">Collections</a>
                  </li>
                  <li>
                    <a href="#">Contact</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Research - Publications - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Research - Publications -->
              <!-- Start - nav - dropdown menu - Research - Research Areas -->
              <li>
                <a href="#">Research Areas
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm37">▾</label>
                <!-- Start - nav - dropdown menu - Research - Research Areas - Links -->
                <input type="checkbox" id="sm37" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">Data Management</a>
                  </li>
                  <li>
                    <a href="#">Data Mining and Modeling</a>
                  </li>
                  <li>
                    <a href="#">Distributed Systems and
                      Parallel Computing</a>
                  </li>
                  <li>
                    <a href="#">Economics and Electronic
                      Commerce</a>
                  </li>
                  <li>
                    <a href="#">Education Innovation</a>
                  </li>
                  <li>
                    <a href="#">Health - Bioscience</a>
                  </li>
                  <li>
                    <a href="#">Hardware and Architecture</a>
                  </li>
                  <li>
                    <a href="#">Human-Computer Interaction and
                      Visualization</a>
                  </li>
                  <li>
                    <a href="#">Information Retrieval and the
                      We</a>
                  </li>
                  <li>
                    <a href="#">Machine Intelligence</a>
                  </li>
                  <li>
                    <a href="#">Machine Perception</a>
                  </li>
                  <li>
                    <a href="#">Machine Translation</a>
                  </li>
                  <li>
                    <a href="#">Mobile Systems</a>
                  </li>
                  <li>
                    <a href="#">Natural Language Processing</a>
                  </li>
                  <li>
                    <a href="#">Networking</a>
                  </li>
                  <li>
                    <a href="#">Quantum Computing</a>
                  </li>
                  <li>
                    <a href="#">Robotics</a>
                  </li>
                  <li>
                    <a href="#">Security, Privacy and Abuse
                      Prevention</a>
                  </li>
                  <li>
                    <a href="#">Software Engineering</a>
                  </li>
                  <li>
                    <a href="#">Software Systems</a>
                  </li>
                  <li>
                    <a href="#">Speech Processing</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Research - Research Areas - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Research - Research Areas -->
              <!-- Start - nav - dropdown menu - Research - Links -->
              <li>
                <a href="#">Philosophy</a>
              </li>
              <li>
                <a href="#">People</a>
              </li>
              <li>
                <a href="#">Tools - Downloads</a>
              </li>
              <li>
                <a href="#">Careers</a>
              </li>
              <li>
                <a href="#">Blog</a>
              </li>
              <li>
                <a href="#">Professors</a>
              </li>
              <li>
                <a href="#">Innovation - Incubation</a>
              </li>
              <li>
                <a href="#">Research Centers</a>
              </li>
              <li>
                <a href="#">Funding Opportunities</a>
              </li>
              <li>
                <a href="#">Undergraduate Research</a>
              </li>
              <li>
                <a href="#">Graduate Research</a>
              </li>
              <li>
                <a href="#">Graduate Research</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
              <!-- End ___ nav - dropdown menu - Research - Links -->
            </ul>
            <!-- End ___ nav - dropdown menu - Research - Box -->
          </li>
          <!-- End ___ nav - dropdown menu - Research -->
          <!-- Start - nav - dropdown menu - Event -->
          <li class="nav-dropdown-menu-title-link darkerli">
            <a href="#"><i class="far fa-calendar-alt"></i><span class="nav-dropdown-menu-text-after-icons">Event</span>
              <span class="nav-dropdown-menu-dropicon-bottom">▾</span>
            </a>
            <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm38">▾</label>
            <!-- Start - nav - dropdown menu - Event - Box -->
            <input type="checkbox" id="sm38" />
            <ul class="nav-dropdown-menu-submenu">
              <!-- Start - nav - dropdown menu - Event - News -->
              <li>
                <a href="#">News
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm39">▾</label>
                <!-- Start - nav - dropdown menu - Event - News - Links -->
                <input type="checkbox" id="sm39" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">News</a>
                  </li>
                  <li>
                    <a href="#">Covid-19 Coverage</a>
                  </li>
                  <li>
                    <a href="#">Calendar</a>
                  </li>
                  <li>
                    <a href="#">For Press</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Event - News - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Event - News -->
              <!-- Start - nav - dropdown menu - Stories -->
              <li>
                <a href="#">Stories
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm40">▾</label>
                <!-- Start - nav - dropdown menu - Stories - Links -->
                <input type="checkbox" id="sm40" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">All Stories</a>
                  </li>
                  <li>
                    <a href="#">Student Stories</a>
                  </li>
                  <li>
                    <a href="#">Alumni Stories</a>
                  </li>
                  <li>
                    <a href="#">Faculty Stories</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Stories - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Stories -->
              <!-- Start - nav - dropdown menu - Events -->
              <li>
                <a href="#">Events
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm41">▾</label>
                <!-- Start - nav - dropdown menu - Events - Links -->
                <input type="checkbox" id="sm41" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">Annual Events</a>
                  </li>
                  <li>
                    <a href="#">Conferences</a>
                  </li>
                  <li>
                    <a href="#">Special Events</a>
                  </li>
                  <li>
                    <a href="#">Exhibitions</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Events - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Events -->
              <!-- Start - nav - dropdown menu - Links -->
              <li>
                <a href="#">Contact</a>
              </li>
              <!-- End ___ nav - dropdown menu - Links -->
            </ul>
            <!-- End ___ nav - dropdown menu - Event - Box -->
          </li>
          <!-- End ___ nav - dropdown menu - Event -->
          <!-- Start - nav - dropdown menu - Visit -->
          <li class="nav-dropdown-menu-title-link darkerli">
            <a href="#"><i class="fas fa-map-marked-alt"></i><span class="nav-dropdown-menu-text-after-icons">Visit</span>
              <span class="nav-dropdown-menu-dropicon-bottom">▾</span>
            </a>
            <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm42">▾</label>
            <!-- Start - nav - dropdown menu - Visit - Box -->
            <input type="checkbox" id="sm42" />
            <ul class="nav-dropdown-menu-submenu">
              <!-- Start - nav - dropdown menu - Visit - Virtual Tour -->
              <li>
                <a href="#">Virtual Tour
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm43">▾</label>
                <!-- Start - nav - dropdown menu - Visit - Virtual Tour - Links -->
                <input type="checkbox" id="sm43" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">Campus 1 </a>
                  </li>
                  <li>
                    <a href="#">Campus 2</a>
                  </li>
                  <li>
                    <a href="#">Campus 3</a>
                  </li>
                  <li>
                    <a href="#">Campus 4</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Visit - Virtual Tour - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Visit - Virtual Tour -->
              <!-- Start - nav - dropdown menu - Visit - Links -->
              <li>
                <a href="#">Contact</a>
              </li>
              <!-- End ___ nav - dropdown menu - Visit - Links -->
            </ul>
            <!-- End ___ nav - dropdown menu - Visit - Box -->
          </li>
          <!-- End ___ nav - dropdown menu - Visit -->
          <!-- Start - nav - dropdown menu - Living -->
          <li class="nav-dropdown-menu-title-link darkerli">
            <a href="#"><i class="fas fa-house-user"></i><span class="nav-dropdown-menu-text-after-icons">Living</span>
              <span class="nav-dropdown-menu-dropicon-bottom">▾</span>
            </a>
            <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm44">▾</label>
            <!-- Start - nav - dropdown menu - Living - Box -->
            <input type="checkbox" id="sm44" />
            <ul class="nav-dropdown-menu-submenu">
              <!-- Start - nav - dropdown menu - Living - Links -->
              <li>
                <a href="#">Overview</a>
              </li>
              <li>
                <a href="#">For Alumni</a>
              </li>
              <li>
                <a href="#">For Parents</a>
              </li>
              <!-- End ___ nav - dropdown menu - Living - Links -->
              <!-- Start - nav - dropdown menu - Living - Campus 1 -->
              <li>
                <a href="#">Campus 1
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm45">▾</label>
                <!-- Start - nav - dropdown menu - Living - Campus 1 - Links -->
                <input type="checkbox" id="sm45" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">Virtual Tours</a>
                  </li>
                  <li>
                    <a href="#">Accessibility</a>
                  </li>
                  <li>
                    <a href="#">Clubs - Activities</a>
                  </li>
                  <li>
                    <a href="#">Accommodation</a>
                  </li>
                  <li>
                    <a href="#">Athletics - Fitness</a>
                  </li>
                  <li>
                    <a href="#">Restaurants</a>
                  </li>
                  <li>
                    <a href="#">Maps And Directions</a>
                  </li>
                  <li>
                    <a href="#">Public Service</a>
                  </li>
                  <li>
                    <a href="#">Security - Emergency</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Living - Campus 1 - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Living - Campus 1 -->
              <!-- Start - nav - dropdown menu - Living - Campus 2 -->
              <li>
                <a href="#">Campus 2
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm46">▾</label>
                <!-- Start - nav - dropdown menu - Living - Campus 2 - Links -->
                <input type="checkbox" id="sm46" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">Virtual Tours</a>
                  </li>
                  <li>
                    <a href="#">Accessibility</a>
                  </li>
                  <li>
                    <a href="#">Clubs - Activities</a>
                  </li>
                  <li>
                    <a href="#">Accommodation</a>
                  </li>
                  <li>
                    <a href="#">Athletics - Fitness</a>
                  </li>
                  <li>
                    <a href="#">Restaurants</a>
                  </li>
                  <li>
                    <a href="#">Maps And Directions</a>
                  </li>
                  <li>
                    <a href="#">Public Service</a>
                  </li>
                  <li>
                    <a href="#">Security - Emergency</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Living - Campus 2 - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Living - Campus 2 -->
              <!-- Start - nav - dropdown menu - Living - Campus 3 -->
              <li>
                <a href="#">Campus 3
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm47">▾</label>
                <!-- Start - nav - dropdown menu - Living - Campus 3 - Links -->
                <input type="checkbox" id="sm47" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">Virtual Tours</a>
                  </li>
                  <li>
                    <a href="#">Accessibility</a>
                  </li>
                  <li>
                    <a href="#">Clubs - Activities</a>
                  </li>
                  <li>
                    <a href="#">Accommodation</a>
                  </li>
                  <li>
                    <a href="#">Athletics - Fitness</a>
                  </li>
                  <li>
                    <a href="#">Restaurants</a>
                  </li>
                  <li>
                    <a href="#">Maps And Directions</a>
                  </li>
                  <li>
                    <a href="#">Public Service</a>
                  </li>
                  <li>
                    <a href="#">Security - Emergency</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Living - Campus 3 - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Living - Campus 3 -->
              <!-- Start - nav - dropdown menu - Living - Campus 4 -->
              <li>
                <a href="#">Campus 4
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm48">▾</label>
                <!-- Start - nav - dropdown menu - Living - Campus 4 - Links -->
                <input type="checkbox" id="sm48" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">Virtual Tours</a>
                  </li>
                  <li>
                    <a href="#">Accessibility</a>
                  </li>
                  <li>
                    <a href="#">Clubs - Activities</a>
                  </li>
                  <li>
                    <a href="#">Accommodation</a>
                  </li>
                  <li>
                    <a href="#">Athletics - Fitness</a>
                  </li>
                  <li>
                    <a href="#">Restaurants</a>
                  </li>
                  <li>
                    <a href="#">Maps And Directions</a>
                  </li>
                  <li>
                    <a href="#">Public Service</a>
                  </li>
                  <li>
                    <a href="#">Security - Emergency</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Living - Campus 4 - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Living - Campus 4 -->
              <!-- Start - nav - dropdown menu - Community Life -->
              <li>
                <a href="#">Community Life
                  <span class="nav-dropdown-menu-dropicon-right">▸</span>
                </a>
                <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm49">▾</label>
                <!-- Start - nav - dropdown menu - Community Life - Links -->
                <input type="checkbox" id="sm49" />
                <ul class="nav-dropdown-menu-submenu">
                  <li>
                    <a href="#">Arts - Culture</a>
                  </li>
                  <li>
                    <a href="#">Student Community</a>
                  </li>
                  <li>
                    <a href="#">Health And Wellness</a>
                  </li>
                </ul>
                <!-- End ___ nav - dropdown menu - Community Life - Links -->
              </li>
              <!-- End ___ nav - dropdown menu - Community Life -->
              <!-- Start - nav - dropdown menu - Community Life - Links -->
              <li>
                <a href="#">Contact</a>
              </li>
              <!-- End ___ nav - dropdown menu - Community Life - Links -->
            </ul>
            <!-- End ___ nav - dropdown menu - Living - Box -->
          </li>
          <!-- End ___ nav - dropdown menu - Living -->
          <!-- Start - nav - dropdown menu - Giving -->
          <li class="nav-dropdown-menu-title-link darkerli">
            <a href="#"><i class="fas fa-donate"></i><span class="nav-dropdown-menu-text-after-icons">Giving</span>
              <span class="nav-dropdown-menu-dropicon-bottom">▾</span>
            </a>
            <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm50">▾</label>
            <!-- Start - nav - dropdown menu - Giving - Box -->
            <input type="checkbox" id="sm50" />
            <ul class="nav-dropdown-menu-submenu">
              <!-- Start - nav - dropdown menu - Giving - Links -->
              <li>
                <a href="#">Overview</a>
              </li>
              <li>
                <a href="#">International Giving</a>
              </li>
              <li>
                <a href="#">Giving Priorities</a>
              </li>
              <li>
                <a href="#">Ways Of Giving</a>
              </li>
              <li>
                <a href="#">Funds</a>
              </li>
              <li>
                <a href="#">Monthly Giving</a>
              </li>
              <li>
                <a href="#">Resources For Donors</a>
              </li>
              <li>
                <a href="#">Our Thanks</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
              <!-- End ___ nav - dropdown menu - Giving - Links -->
            </ul>
            <!-- End ___ nav - dropdown menu - Giving - Box -->
          </li>
          <!-- End ___ nav - dropdown menu - Giving -->
          <!-- Start - nav - dropdown menu - Gallery -->
          <li class="nav-dropdown-menu-title-link darkerli">
            <a href="#"><i class="fas fa-photo-video"></i><span class="nav-dropdown-menu-text-after-icons">Gallery</span>
              <span class="nav-dropdown-menu-dropicon-bottom">▾</span>
            </a>
            <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm51">▾</label>
            <!-- Start - nav - dropdown menu - Gallery - Box -->
            <input type="checkbox" id="sm51" />
            <ul class="nav-dropdown-menu-submenu">
              <!-- Start - nav - dropdown menu - Gallery - Links -->
              <li>
                <a href="#">Podcast</a>
              </li>
              <li>
                <a href="#">Media</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
              <!-- End ___ nav - dropdown menu - Gallery - Links -->
            </ul>
            <!-- End ___ nav - dropdown menu - Gallery - Box -->
          </li>
          <!-- End ___ nav - dropdown menu - Gallery -->
          <!-- Start - nav - dropdown menu - Contacts -->
          <li class="nav-dropdown-menu-title-link darkerlishadowdown">
            <a href="#"><i class="fas fa-id-card"></i><span class="nav-dropdown-menu-text-after-icons">Contacts</span>
              <span class="nav-dropdown-menu-dropicon-bottom">▾</span>
            </a>
            <label title="Toggle Drop-down" class="nav-dropdown-menu-dropicon-bottom" for="sm52">▾</label>
            <!-- Start - nav - dropdown menu - Contacts - Box -->
            <input type="checkbox" id="sm52" />
            <ul class="nav-dropdown-menu-submenu">
              <!-- Start - nav - dropdown menu - Contacts - Links -->
              <li>
                <a href="#">A – Z</a>
              </li>
              <li>
                <a href="#">Departments</a>
              </li>
              <!-- End ___ nav - dropdown menu - Contacts - Links -->
            </ul>
            <!-- End ___ nav - dropdown menu - Contacts - Box -->
          </li>
          <!-- End ___ nav - dropdown menu - Contacts -->
          <!-- Start - nav - dropdown menu - Links -->
          <li class="nav-dropdown-menu-title-link darkerli">
            <a href="#"><i class="fas fa-download"></i><span class="nav-dropdown-menu-text-after-icons">Downloads</span></a>
          </li>
          <li class="nav-dropdown-menu-title-link darkerli">
            <a href="#"><i class="fas fa-search"></i><span class="nav-dropdown-menu-text-after-icons">Search</span></a>
          </li>
          <!-- End ___ nav - dropdown menu - Links -->
        </ul>
      </li>
      <!-- End ___ nav - dropdown menu - main -->
    </ul>
    <!-- End ___ nav - dropdown menu - links -->
  </nav>

	
	<div class="row">
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-4">.col-sm-4</div>
</div>
	
	
	
	
	
	  <!-- solid style -->
  <i class="fa-solid fa-user"></i>

  <!-- regular style -->
  <i class="fa-regular fa-user"></i>

  <!-- light style -->
  <i class="fa-light fa-user"></i>

  <!-- duotone style -->
  <i class="fa-duotone fa-user"></i>

  <!-- all new thin style -->
  <i class="fa-thin fa-user"></i>

  <!-- all new sharp solid style -->
  <i class="fa-sharp fa-solid fa-user"></i>

  <!-- all new sharp regular style -->
  <i class="fa-sharp fa-regular fa-user"></i>

  <!--brand icon-->
  <i class="fa-brands fa-github-square"></i>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    <!-- Option 1: Bootstrap Bundle with Popper -->	
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->	
	
</body>

</html>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script><script  src="./js/script.js"></script>

</body>
</html>
