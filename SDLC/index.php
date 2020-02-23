<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Learning PHP</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Software Development Life Cycle</h1>
        <p>
          Software Development Life Cycle (SDLC) is a process used by the software industry to design, develop and test high quality softwares. The SDLC aims to produce a high-quality software that meets or exceeds customer expectations, reaches completion within times and cost estimates.
        </p>
        <ul>
          <li>
            <p>It is also called as Software Development Process.</p>
          </li>
          <li>
            <p>SDLC is a framework defining tasks performed at each step in the software development process.</p>
          </li>
          <li>
            <p>ISO/IEC 12207 is an international standard for software life-cycle processes. It aims to be the standard that defines all the tasks required for developing and maintaining software.</p>
          </li>
        </ul>
        <h3>Q. What is SDLC? </h3>
        <p>SDLC is a process followed for a software project, within a software organization. It consists of a detailed plan describing how to develop, maintain, replace and alter or enhance specific software. The life cycle defines a methodology for improving the quality of software and the overall development process.</p>
        <p>The following figure is a graphical representation of the various stages of a typical SDLC.</p>
        <img src="sdlc_stages.jpg" alt="Software Development Lifecycle" class="col-md-8 offset-2 img-fluid">
        <hr>
        <h3>Stage 1: Planning and Requirement Analysis</h3>
        <p>Requirement analysis is the most important and fundamental stage in SDLC. It is performed by the senior members of the team with inputs from the customer, the sales department, market surveys and domain experts in the industry. This information is then used to plan the basic project approach and to conduct product feasibility study in the economical, operational and technical areas.</p>
        <p>Planning for the quality assurance requirements and identification of the risks associated with the project is also done in the planning stage. The outcome of the technical feasibility study is to define the various technical approaches that can be followed to implement the project successfully with minimum risks.</p>
        <h3>Stage 2: Defining Requirements</h3>
        <p>Once the requirement analysis is done the next step is to clearly define and document the product requirements and get them approved from the customer or the market analysts. This is done through an <b>SRS (Software Requirement Specification)</b> document which consists of all the product requirements to be designed and developed during the project life cycle.</p>
        <h3>Stage 3: Designing the Product Architecture</h3>
        <p>SRS is the reference for product architects to come out with the best architecture for the product to be developed. Based on the requirements specified in SRS, usually more than one design approach for the product architecture is proposed and documented in a DDS - Design Document Specification.</p>
        <p>This DDS is reviewed by all the important stakeholders and based on various parameters as risk assessment, product robustness, design modularity, budget and time constraints, the best design approach is selected for the product.</p>
        <p>A design approach clearly defines all the architectural modules of the product along with its communication and data flow representation with the external and third party modules (if any). The internal design of all the modules of the proposed architecture should be clearly defined with the minutest of the details in DDS.</p>
        <h3>Stage 4: Building or Developing the Product</h3>
        <p>In this stage of SDLC the actual development starts and the product is built. The programming code is generated as per DDS during this stage. If the design is performed in a detailed and organized manner, code generation can be accomplished without much hassle.</p>
        <p>Developers must follow the coding guidelines defined by their organization and programming tools like compilers, interpreters, debuggers, etc. are used to generate the code. Different high level programming languages such as C, C++, Pascal, Java and PHP are used for coding. The programming language is chosen with respect to the type of software being developed.</p>
        <h3>Stage 5: Testing the Product</h3>
        <p>This stage is usually a subset of all the stages as in the modern SDLC models, the testing activities are mostly involved in all the stages of SDLC. However, this stage refers to the testing only stage of the product where product defects are reported, tracked, fixed and retested, until the product reaches the quality standards defined in the SRS.</p>
        <h3>Stage 6: Deployment in the Market and Maintenance</h3>
        <p>Once the product is tested and ready to be deployed it is released formally in the appropriate market. Sometimes product deployment happens in stages as per the business strategy of that organization. The product may first be released in a limited segment and tested in the real business environment (UAT- User acceptance testing).</p>
        <p>Then based on the feedback, the product may be released as it is or with suggested enhancements in the targeting market segment. After the product is released in the market, its maintenance is done for the existing customer base.</p>
        <h2>SDLC Models</h2>
        <p>There are various software development life cycle models defined and designed which are followed during the software development process. These models are also referred as Software Development Process Models". Each process model follows a Series of steps unique to its type to ensure success in the process of software development.</p>
        <p>Following are the most important and popular SDLC models followed in the industry &minus;</p>
        <ul class="list">
          <li>Waterfall Model</li>
          <li>Iterative Model</li>
          <li>Spiral Model</li>
          <li>V-Model</li>
          <li>Big Bang Model</li>
        </ul>
        <p>Other related methodologies are Agile Model, RAD Model, Rapid Application Development and Prototyping Models.</p>
        <hr>
        <h3>Phases in SDLC models</h3>
        <ul class="list">
          <li>
            <p><b>Requirement Gathering and analysis</b> − All possible requirements of the system to be developed are captured in this phase and documented in a requirement specification document.</p>
          </li>
          <li>
            <p><b>System Design</b> − The requirement specifications from first phase are studied in this phase and the system design is prepared. This system design helps in specifying hardware and system requirements and helps in defining the overall system architecture.</p>
          </li>
          <li>
            <p><b>Implementation</b> − With inputs from the system design, the system is first developed in small programs called units, which are integrated in the next phase. Each unit is developed and tested for its functionality, which is referred to as Unit Testing.</p>
          </li>
          <li>
            <p><b>Integration and Testing</b> − All the units developed in the implementation phase are integrated into a system after testing of each unit. Post integration the entire system is tested for any faults and failures.</p>
          </li>
          <li>
            <p><b>Deployment of system</b> − Once the functional and non-functional testing is done; the product is deployed in the customer environment or released into the market.</p>
          </li>
          <li>
            <p><b>Maintenance</b> − There are some issues which come up in the client environment. To fix those issues, patches are released. Also to enhance the product some better versions are released. Maintenance is done to deliver these changes in the customer environment.</p>
          </li>
        </ul>
        <hr>
      </div>
    </div>
  </div>
</body>

</html>