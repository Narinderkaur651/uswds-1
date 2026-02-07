<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Contact Us</title>
      <meta name="description" content="Find city department contact information, addresses, office hours, and general inquiry details." />
      <?php require_once '1_head.php'; ?>
   </head>
   <body>
      <?php require_once '2_nav.php'; ?>
      <main id="main-content">
         <!-- HERO SECTION -->
         <section class="usa-hero bg-primary-lighter"
            style="background-image: url('images/webp/bg-contact-us.webp');"
            aria-label="Contact Introduction">
            <div class="grid-container">
               <div class="usa-hero__callout maxw-mobile-lg">
                  <nav class="usa-breadcrumb bg-transparent" aria-label="Breadcrumbs">
                     <ul class="usa-breadcrumb__list">
                        <li class="usa-breadcrumb__list-item">
                           <a href="./" class="usa-breadcrumb__link">
                           <span class="text-base-lightest">Home</span>
                           </a>
                        </li>
                        <li class="usa-breadcrumb__list-item">
                           <span class="text-base-lightest">Contact</span>
                        </li>
                     </ul>
                  </nav>
                  <h1 class="usa-hero__heading margin-top-0">
                     <span class="usa-hero__heading--alt">
                     Get in Touch
                     </span>
                  </h1>
                  <p class="text-base-lightest">
                     We'd love to hear from you. Reach out anytime.
                  </p>
               </div>
            </div>
         </section>
         <!-- contact details -->
         <section class="usa-section view-card bg-base-lightest">
            <div class="grid-container">
               <ul class="usa-card-group grid-row grid-gap-2">
                  <!-- PHONE -->
                  <li class="usa-card tablet:grid-col">
                     <div class="usa-card__container hover:shadow-4">
                        <div class="padding-3 text-center">
                           <svg class="usa-icon height-10 width-10 padding-1 bg-primary-darker radius-pill">
                              <use href="/assets/img/sprite.svg#phone"></use>
                           </svg>
                           <h3 class="margin-top-2">Call Us</h3>
                           <p class="text-bold margin-y-05">
                              +1 (123) 456-7891
                           </p>
                           <p class="text-base">
                              Mon – Fri, 9AM – 5PM
                           </p>
                        </div>
                     </div>
                  </li>
                  <!-- EMAIL -->
                  <li class="usa-card tablet:grid-col">
                     <div class="usa-card__container hover:shadow-4">
                        <div class="padding-3 text-center">
                           <svg class="usa-icon height-10 width-10 padding-1 bg-primary-darker radius-pill">
                              <use href="/assets/img/sprite.svg#mail"></use>
                           </svg>
                           <h3 class="margin-top-2">Email Us</h3>
                           <p class="text-bold margin-y-05">
                              support@example.com
                           </p>
                           <p class="text-base">
                              24/7 Support
                           </p>
                        </div>
                     </div>
                  </li>
                  <!-- LOCATION -->
                  <li class="usa-card tablet:grid-col">
                     <div class="usa-card__container hover:shadow-4">
                        <div class="padding-3 text-center">
                           <svg class="usa-icon height-10 width-10 padding-1 bg-primary-darker radius-pill">
                              <use href="/assets/img/sprite.svg#location_on"></use>
                           </svg>
                           <h3 class="margin-top-2">Visit Us</h3>
                           <p class="text-bold margin-y-05">
                              New York, USA
                           </p>
                           <p class="text-base">
                              123 Business Street
                           </p>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </section>
         <!-- contact form-->
         <section class="usa-section">
            <div class="grid-container">
               <div class="grid-row grid-gap-4">
                  <!-- form -->
                  <div class="tablet:grid-col-7">
                     <h2>Send Us a Message</h2>
                     <form class="usa-form usa-form--large">
                        <div class="grid-row grid-gap">
                           <div class="mobile-lg:grid-col-6">
                              <label class="usa-label" for="name">
                              Full Name
                              </label>
                              <input class="usa-input" id="name" type="text">
                           </div>
                           <div class="mobile-lg:grid-col-6">
                              <label class="usa-label" for="email">
                              Email
                              </label>
                              <input class="usa-input" id="email" type="email">
                           </div>
                        </div>
                        <label class="usa-label" for="subject">
                        Subject
                        </label>
                        <input class="usa-input" id="subject" type="text">
                        <label class="usa-label" for="message">
                        Message
                        </label>
                        <textarea class="usa-textarea" id="message"></textarea>
                        <button class="usa-button margin-top-2">
                        Send Message
                        </button>
                     </form>
                  </div>
                  <!-- info -->
                  <div class="tablet:grid-col-5">
                     <h2>Office Info</h2>
                     <div class="usa-prose">
                        <p>
                           Our support team is always ready to assist you.
                        </p>
                        <p>
                           <strong>Address:</strong><br>
                           123 Business Street<br>
                           New York, USA
                        </p>
                        <p>
                           <strong>Phone:</strong><br>
                           +1 (123) 456-7891
                        </p>
                        <p>
                           <strong>Email:</strong><br>
                           info@example.com
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <?php require_once 'utility-popular-services.php'; ?>
      <?php require_once '9_footer.php'; ?>
      <script src="uswds/dist/js/uswds.min.js"></script>
   </body>
</html>