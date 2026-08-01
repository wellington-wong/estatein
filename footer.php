  <!-- Footer -->
  <footer class="bg-panel">
    <div class="mx-auto max-w-7xl px-4 py-14">
      <div class="grid gap-10 lg:grid-cols-5">
        <div class="lg:col-span-1">
          <a href="#" class="flex items-center gap-2 font-semibold text-lg">
            <span class="grid place-items-center h-8 w-8 rounded-md">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" />
            </span>
            Estatein
          </a>
          <form class="mt-6 flex items-center gap-2 rounded-lg border border-line bg-panel-2 px-3 py-2 max-w-xs" onsubmit="return false;">
            <label for="newsletter" class="sr-only">Email address</label>
            <input id="newsletter" type="email" placeholder="Enter Your Email" class="w-full bg-transparent text-sm outline-none placeholder:text-muted" />
            <button aria-label="Subscribe" class="text-muted hover:text-white">➤</button>
          </form>
        </div>

        <nav aria-label="Home links">
          <h3 class="text-sm font-semibold">Home</h3>
          <ul class="mt-4 space-y-3 text-sm text-muted">
            <li><a href="#" class="hover:text-white">Hero Section</a></li>
            <li><a href="#" class="hover:text-white">Features</a></li>
            <li><a href="#" class="hover:text-white">Properties</a></li>
            <li><a href="#" class="hover:text-white">Testimonials</a></li>
            <li><a href="#" class="hover:text-white">FAQ's</a></li>
          </ul>
        </nav>

        <nav aria-label="About Us links">
          <h3 class="text-sm font-semibold">About Us</h3>
          <ul class="mt-4 space-y-3 text-sm text-muted">
            <li><a href="#" class="hover:text-white">Our Story</a></li>
            <li><a href="#" class="hover:text-white">Our Works</a></li>
            <li><a href="#" class="hover:text-white">How It Works</a></li>
            <li><a href="#" class="hover:text-white">Our Team</a></li>
            <li><a href="#" class="hover:text-white">Our Clients</a></li>
          </ul>
        </nav>

        <nav aria-label="Properties links">
          <h3 class="text-sm font-semibold">Properties</h3>
          <ul class="mt-4 space-y-3 text-sm text-muted">
            <li><a href="#" class="hover:text-white">Portfolio</a></li>
            <li><a href="#" class="hover:text-white">Categories</a></li>
          </ul>
          <h3 class="mt-6 text-sm font-semibold">Services</h3>
          <ul class="mt-4 space-y-3 text-sm text-muted">
            <li><a href="#" class="hover:text-white">Valuation Mastery</a></li>
            <li><a href="#" class="hover:text-white">Strategic Marketing</a></li>
            <li><a href="#" class="hover:text-white">Negotiation Wizardry</a></li>
            <li><a href="#" class="hover:text-white">Closing Success</a></li>
            <li><a href="#" class="hover:text-white">Property Management</a></li>
          </ul>
        </nav>

        <nav aria-label="Contact Us links">
          <h3 class="text-sm font-semibold">Contact Us</h3>
          <ul class="mt-4 space-y-3 text-sm text-muted">
            <li><a href="#" class="hover:text-white">Contact Form</a></li>
            <li><a href="#" class="hover:text-white">Our Offices</a></li>
          </ul>
        </nav>
      </div>

      <div class="mt-12 pt-6 border-t border-line flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-muted">
        <p>©2023 Estatein. All Rights Reserved.</p>
        <a href="#" class="hover:text-white">Terms &amp; Conditions</a>
        <div class="flex items-center gap-3">
          <a href="#" aria-label="Facebook" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-panel-2">f</a>
          <a href="#" aria-label="LinkedIn" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-panel-2">in</a>
          <a href="#" aria-label="Twitter" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-panel-2">t</a>
          <a href="#" aria-label="YouTube" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-panel-2">▶</a>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>

</body>

</html>