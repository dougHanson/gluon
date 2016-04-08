<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Doug Hanson">
  <title>Gluon - an HTML boilerplate by Doug Hanson</title>
  <meta name="description" content="Gluon - an HTML boilerplate by Doug Hanson.">
  <meta name="keywords" content="gluon, boilerplate, html, doug, hanson">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <!-- fonts Raleway & Dancing Script-->
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,400,600,800|Dancing+Script" rel="stylesheet" type="text/css">  
<!-- build:css -->
  <link rel="stylesheet" href="css/styles.css" media="all">
<!-- endbuild -->
  <?php include('/inc/_favicons.php'); ?>
</head>
<body>
  <?php include('/inc/_header.php'); ?>
  <section class="text-center" style="background:url(img/title_img.jpg); height: 240px; position: relative;">
    <p class="subhead white h2" style="position:relative; top:20%;">introducing</p>
    <h1 class="page-title"><span>Gluon</span></h1>
  </section>
  <section class="container"> <!-- grid -->
    <h3>The Grid</h3>
    <p>Gluon extends the Bootstrap v3.3.5 grid framework. The grid is a 12-column fluid grid with a max width of 1600px, that shrinks with the browser/device at smaller sizes. The sizes for the breakpoints are: 
      <code>xxs &lt; 480px</code>
      <code> xs &lt; 768px</code>
      <code> sm &lt; 992px</code>
      <code> md &lt; 1200px</code>
      <code> lg &lt; 1960px</code>
      <code> xl &ge; 1960px</code> 
    </p>
    <div class="row">
      <div class="col-xs-1 example-grid">One</div>
      <div class="col-xs-11 example-grid hidden-xxs">Eleven</div>
    </div>
    <div class="row">
      <div class="col-xs-2 example-grid">Two</div>
      <div class="col-xs-10 example-grid hidden-xxs">Ten</div>
    </div>
    <div class="row">
      <div class="col-xs-3 example-grid">Three</div>
      <div class="col-xs-9 example-grid hidden-xxs">Nine</div>
    </div>
    <div class="row">
      <div class="col-xs-4 example-grid">Four</div>
      <div class="col-xs-8 example-grid hidden-xxs">Eight</div>
    </div>
    <div class="row">
      <div class="col-xs-5 example-grid">Five</div>
      <div class="col-xs-7 example-grid hidden-xxs">Seven</div>
    </div>
    <div class="row">
      <div class="col-xs-6 example-grid">Six</div>
      <div class="col-xs-6 example-grid hidden-xxs">Six</div>
    </div>
    <div class="row">
      <div class="col-xs-7 example-grid">Seven</div>
      <div class="col-xs-5 example-grid hidden-xxs">Five</div>
    </div>
    <div class="row">
      <div class="col-xs-8 example-grid">Eight</div>
      <div class="col-xs-4 example-grid hidden-xxs">Four</div>
    </div>
    <div class="row">
      <div class="col-xs-9 example-grid">Nine</div>
      <div class="col-xs-3 example-grid hidden-xxs">Three</div>
    </div>
    <div class="row">
      <div class="col-xs-10 example-grid">Ten</div>
      <div class="col-xs-2 example-grid hidden-xxs">Two</div>
    </div>
    <div class="row">
      <div class="col-xs-11 example-grid">Eleven</div>
      <div class="col-xs-1 example-grid hidden-xxs">One</div>
    </div>                     
  </section> <!-- end grid container -->  
  <section class="container"> <!--typography -->
    <h3>Typography</h3>
    <div class="col-sm-6 pad-left-0">
      <p>Type is all set with the rems, so font-sizes and spacial relationships can be responsively sized based on a single html font-size property of 16px</p>
      <p>The typography base is Raleway served by Google, set at 1rem (16px) over a 1.5 line height (24px).</p>
      <p>There is also <strong>strong text</strong>, <em>emphasis</em>, <u>underlines</u>, <a href="">anchor links</a>, <ins>insertions</ins>, <del>deletions</del> and <abbr title="Abbr content goes in here">abbreviations</abbr>.
    </p></div>
    <div class="col-sm-4 col-sm-offset-2">
      <h1>Heading <code>&lt;h1&gt;</code></h1>
      <h2>Heading <code>&lt;h2&gt;</code></h2>
      <h3>Heading <code>&lt;h3&gt;</code></h3>
      <h4>Heading <code>&lt;h4&gt;</code></h4>
      <h5>Heading <code>&lt;h5&gt;</code></h5>
      <h6>Heading <code>&lt;h6&gt;</code></h6>
    </div>  
  </section> <!-- end typography container -->
  <section class="container"> <!-- buttons -->
    <h3>Buttons</h3>
    <p>Button styles are applied to a number of appropriate form elements, but can also be arbitrarily attached to anchors with a .button class</p>
      <a class="button" href="#">Anchor button</a>
      <button>Button element</button>
      <input type="submit" value="submit input">
      <input type="button" value="button input">
      <br>
      <a class="button button__primary" href="#">Anchor button</a>
      <button class="button__primary">Button element</button>
      <input type="submit" value="submit input" class="button__primary">
      <input type="button" value="button input" class="button__primary">    
  </section> <!-- end buttons container -->
  <section class="container"> <!-- lists -->
    <h3>Lists</h3>    
    <p>Brief intro here</p>
    <div class="col-sm-6">
      <ul>
        <li>Unordered lists have basic styles</li>
        <li>They use the circle list style
          <ul>
            <li>Nested unordered lists have basic styles</li>
            <li>They use the disc list style
          </li></ul>
        </li>
      </ul> 
    </div> 
    <div class="col-sm-6">
      <ol>
        <li>Ordered lists have basic styles</li>
        <li>They use the decimal list style
          <ol>
            <li>Nested ordered lists have basic styles</li>
            <li>They use the lower-alpha list style
          </li></ol>
        </li>
      </ol> 
    </div>      
  </section> <!-- end lists container --> 
  <section class="container"> <!-- tables -->
    <h3>Tables</h3>
    <p>Be sure to use properly formed table markup with <code>&lt;thead&gt;</code> and <code>&lt;tbody&gt;</code> when building a <code>table</code>.</p>
    <table class="full-width">
      <thead>
        <tr>
          <th>Name</th>
          <th>Age</th>
          <th>Sex</th>
          <th>Location</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Doug</td>
          <td>32</td>
          <td>Male</td>
          <td>Perth</td>
        </tr>
        <tr>
          <td>Dom Johnson</td>
          <td>32</td>
          <td>Male</td>
          <td>Warrnambool</td>
        </tr>
        <tr>
          <td>Andrea Symons</td>
          <td>30</td>
          <td>Female</td>
          <td>Perth</td>
        </tr>        
      </tbody>
    </table>
  </section> <!-- end tables container --> 
  <section class="container"> <!-- code -->
    <h3>Code</h3>
    <p>Code styling is kept basic &ndash; just wrap anything in a <code>&lt;code&gt;</code> and it will appear like <code>this</code>. For blocks of code, wrap a <code>&lt;code&gt;</code> with a <code>&lt;pre&gt;</code>.</p>
<!-- preformatted -->
<pre><code>.className__subModule--modifier {
  background-color: $grey-background;
  color: $brand-primary;
}</code>
</pre>
<!-- end preformatted -->
  </section> <!-- end code container -->  
  <section class="container"> <!-- images -->
    <h3>Images</h3>
    <p>Images are made responsive with the <code>.img-responsive</code> class and can be customised with certain classes, eg <code>.img-frame</code> &amp; <code>.img-rounded</code> classes.</p>    
    <div class="col-sm-4">
      <img src="img/owl5.jpg" alt="Image 1" class="img-responsive img-frame">
    </div>
    <div class="col-sm-4">
      <img src="img/owl2.jpg" alt="Image 2" class="img-responsive img-rounded">
    </div>        
  </section> <!-- end images container --> 
  <section class="container"> <!-- carousel -->
    <h3>Carousel</h3>
    <p>Gluon integrates the fully responsive, touch enabled Owl Carousel v2.0.0-beta.</p>
    <div class="owl-carousel">
      <img src="img/owl1.jpg" alt="Image 1">
      <img src="img/owl3.jpg" alt="Image 3">
      <img src="img/owl4.jpg" alt="Image 4">
      <img src="img/owl5.jpg" alt="Image 5">
    </div> 
  </section> <!-- end carousel container -->   
  <section class="container"> <!-- forms -->
    <h3>Forms</h3>
    <p>Forms are a huge pain, but hopefully these styles make it a bit easier. All inputs, select, and buttons are normalized for a common height cross-browser so inputs can be stacked or placed alongside each other. Still need to implement the PHP Mail Form and get some radio buttons in here. Style dropdowns, radios, checkboxes? Maybe not..</p>
      <form>
        <div class="row">
          <div class="col-sm-6">
            <label for="emailInput">Your email</label>
            <input name="email" type="email" id="emailInput" placeholder="test@mailbox.com" class="full-width">
          </div>
          <div class="col-sm-6">
          <label for="reasonInput">Reason for contacting</label>
            <select class="full-width">
              <option value="Option 1">Questions</option>
              <option value="Option 2">Admiration</option>
              <option value="Option 3">Can I get your number?</option>
            </select>
          </div>
        </div>
        <label for="messageInput">Message</label>
        <textarea name="message" id="messageInput" placeholder="Hi Doug" class="full-width"></textarea>
        <label class="example-send-yourself-copy pull-right">
          <input type="checkbox">
          <span class="label-body">Send a copy to yourself</span>
        </label>
        <input name="submitted" type="submit" value="Submit" class="button button__primary">
      </form>  
	  <?php
      if (isset($_POST['submitted']))
      //if submit button is clicked, send email
      {
      //get the data entered in the forms
      $email = $_POST['email'];
      $message = $_POST['message'];
      //compose the email message 
      $to = "doug83@iinet.net.au";
      $email_from = "doughanson83@gmail.com";   
      $email_subject = "Email from Gluon Localhost" ; 
      $email_body = "A new message has been submitted by the online form on the Gluon website:\n
      Email Address: $email \n  
      Enquiry: $message"; 
      //from multicomm address to stop spam catcher
      $headers = "From: $email_from \n"; 
      $headers .= "Reply-To: $email \n"; 
      //send email
      mail($to,$email_subject,$email_body,$headers);
      //thankyou message on website
      echo "<p style='background:#E6EFC2; color:#529214;border:1px solid #CCDC8C;padding:3px 14px;'>Thank you $name, we will respond to your message shortly.<p></p>";
      }
      ?> 
  </section> <!-- end forms container -->   
  <section class="container"> <!-- utilities -->
    <h3>Utilities</h3>
    <p>Utility classes</p>
  </section> <!-- end utilities container -->  
  <section class="container"> <!-- icons -->
    <h3>Icons</h3>
    <p>SVG sprite, png alternative.</p>
  </section> <!-- end icons container -->  
  <section class="container"> <!-- build tools -->
    <h3>Build tools</h3>
    <p>Includes Gulpfile to run production-ready tasks to compile sass, minify and concatenate all js and css files, compress images, and minimise hmtl.</p>
  </section> <!-- end build tools container --> 
  <section class="container"> <!-- smacss -->
    <h3>SMACSS and BEM</h3>
    <p>CSS Framework</p>
  </section> <!-- end smacss container -->              
  <?php include('inc/_footer.php'); ?>
 

  <!-- jQuery CDN -->    
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <!-- JS plugins -->
<!-- build:js -->  
  <script src="js/plugins/jquery.ui.touch-punch.min.js"></script>   
  <script src="js/modules/horizontal-menu.js"></script>
  <script src="js/plugins/owl.carousel.js"></script>  
  <script src="js/main.js"></script>
<!-- endbuild -->
   
</body>
</html>