<?php

  $educationlist = array("University of Pittsburgh","Computer Science and Mathematics", "Studio Arts and Chemistry", "GPA: 3.836" );
  $education = new ResumeItem("./images/mortarboard.png", "Education", $educationlist);

  $langlist = array("Java, C, CSS, HTML, MATLAB, LaTeX");
  $languages = new ResumeItem("./images/coding.png", "Languages", $langlist);

  $personalprojectslist = array("Project Euler Solutions", "Error Analysis on Power Method", "Personal Website");
  $personalprojects = new ResumeItem("./images/github-logo.png", "Personal Projects", $personalprojectslist);

  $classprojectslist = array("File System", "Password Checker", "LZW Compression", "RSA Signature");
  $classprojects = new ResumeItem("./images/github-logo.png", "Class Projects", $classprojectslist);

  $ongoingprojectslist = array("Laboon Chess", "Secure File Sharing System", "Zombie Population Modeling", "Steganography with Images");
  $ongoingprojects = new ResumeItem("./images/light-bulb.png", "Ongoing Projects", $ongoingprojectslist);

  $employmentlist = array("Illustrator at The Pitt News");
  $employment = new ResumeItem("./images/pencil.png", "Employment", $employmentlist);

  $extracurricularslist = array("Business Manager of Math Club", "LoL at Pitt", "Computer Science Club");
  $extracurriculars = new ResumeItem("./images/computer.png", "Extracurriculars", $extracurricularslist);

  $resumeitems = array($education, $languages, $personalprojects, $classprojects, $ongoingprojects, $employment, $extracurriculars);
