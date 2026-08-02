<?php get_header(); ?>

  <main>
    <!-- Hero + Search -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-16">
        <h1 class="text-3xl md:text-4xl font-semibold">Find Your Dream Property</h1>
        <p class="mt-4 max-w-3xl text-muted leading-relaxed">Welcome to Estatein, where your dream property awaits in every corner of our beautiful world. Explore our curated selection of properties, each offering a unique story and a chance to redefine your life. With categories to suit every dreamer, your journey</p>

        <!-- Search bar -->
        <form class="mt-8 flex flex-col sm:flex-row items-stretch gap-3 rounded-xl border border-line bg-panel p-3" onsubmit="return false;">
          <label for="search" class="sr-only">Search for a property</label>
          <input id="search" type="text" placeholder="Search For A Property" class="w-full bg-transparent px-3 py-2 text-sm outline-none placeholder:text-muted" />
          <button class="shrink-0 inline-flex items-center justify-center gap-2 rounded-lg bg-brand px-6 py-2.5 text-sm font-medium hover:bg-brand-dark">
            <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
            Find Property
          </button>
        </form>

        <!-- Filters -->
        <div class="mt-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
          <label class="flex items-center justify-between gap-2 rounded-lg border border-line bg-panel px-4 py-3 text-sm text-muted">
            <span class="flex items-center gap-2"><span aria-hidden="true" class="text-brand">◎</span> Location</span>
            <span aria-hidden="true">⌄</span>
          </label>
          <label class="flex items-center justify-between gap-2 rounded-lg border border-line bg-panel px-4 py-3 text-sm text-muted">
            <span class="flex items-center gap-2"><span aria-hidden="true" class="text-brand">▦</span> Property Type</span>
            <span aria-hidden="true">⌄</span>
          </label>
          <label class="flex items-center justify-between gap-2 rounded-lg border border-line bg-panel px-4 py-3 text-sm text-muted">
            <span class="flex items-center gap-2"><span aria-hidden="true" class="text-brand">▤</span> Pricing Range</span>
            <span aria-hidden="true">⌄</span>
          </label>
          <label class="flex items-center justify-between gap-2 rounded-lg border border-line bg-panel px-4 py-3 text-sm text-muted">
            <span class="flex items-center gap-2"><span aria-hidden="true" class="text-brand">◧</span> Property Size</span>
            <span aria-hidden="true">⌄</span>
          </label>
          <label class="flex items-center justify-between gap-2 rounded-lg border border-line bg-panel px-4 py-3 text-sm text-muted">
            <span class="flex items-center gap-2"><span aria-hidden="true" class="text-brand">▥</span> Build Year</span>
            <span aria-hidden="true">⌄</span>
          </label>
        </div>
      </div>
    </section>

    <!-- Discover a World of Possibilities -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-16">
        <div class="text-brand mb-3" aria-hidden="true">✦ ✦</div>
        <h2 class="text-3xl font-semibold">Discover a World of Possibilities</h2>
        <p class="mt-3 max-w-3xl text-muted leading-relaxed">Our portfolio of properties is as diverse as your dreams. Explore the following categories to find the perfect property that resonates with your vision of home</p>

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Card 1 -->
          <article class="rounded-2xl border border-line bg-panel p-4">
            <div class="aspect-[4/3] rounded-xl overflow-hidden border border-line bg-gradient-to-br from-sky-500/30 to-panel grid place-items-center">
              <svg viewBox="0 0 24 24" class="h-16 w-16 text-white/40" fill="currentColor" aria-hidden="true"><path d="M3 21V9l7-4 7 4v12h-4v-6h-6v6H3z"/></svg>
            </div>
            <div class="mt-4 inline-block rounded-lg border border-line bg-panel-2 px-3 py-1.5 text-xs">Coastal Escapes - Where Waves Beckon</div>
            <h3 class="mt-4 text-lg font-medium">Seaside Serenity Villa</h3>
            <p class="mt-2 text-sm text-muted leading-relaxed">Wake up to the soothing melody of waves. This beachfront villa offers… <a href="#" class="text-white underline underline-offset-2">Read More</a></p>
            <div class="mt-5 flex items-center justify-between gap-4">
              <div>
                <p class="text-xs text-muted">Price</p>
                <p class="text-lg font-semibold">$1,250,000</p>
              </div>
              <a href="#" class="rounded-lg bg-brand px-5 py-2.5 text-sm font-medium hover:bg-brand-dark">View Property Details</a>
            </div>
          </article>

          <!-- Card 2 -->
          <article class="rounded-2xl border border-line bg-panel p-4">
            <div class="aspect-[4/3] rounded-xl overflow-hidden border border-line bg-gradient-to-br from-emerald-500/30 to-panel grid place-items-center">
              <svg viewBox="0 0 24 24" class="h-16 w-16 text-white/40" fill="currentColor" aria-hidden="true"><path d="M4 21V4h6v4h10v13H4zm8-9h4v2h-4v-2z"/></svg>
            </div>
            <div class="mt-4 inline-block rounded-lg border border-line bg-panel-2 px-3 py-1.5 text-xs">Urban Oasis - Life in the Heart of the City</div>
            <h3 class="mt-4 text-lg font-medium">Metropolitan Haven</h3>
            <p class="mt-2 text-sm text-muted leading-relaxed">Immerse yourself in the energy of the city. This modern apartment in the heart… <a href="#" class="text-white underline underline-offset-2">Read More</a></p>
            <div class="mt-5 flex items-center justify-between gap-4">
              <div>
                <p class="text-xs text-muted">Price</p>
                <p class="text-lg font-semibold">$650,000</p>
              </div>
              <a href="#" class="rounded-lg bg-brand px-5 py-2.5 text-sm font-medium hover:bg-brand-dark">View Property Details</a>
            </div>
          </article>

          <!-- Card 3 -->
          <article class="rounded-2xl border border-line bg-panel p-4">
            <div class="aspect-[4/3] rounded-xl overflow-hidden border border-line bg-gradient-to-br from-brand/40 to-panel grid place-items-center">
              <svg viewBox="0 0 24 24" class="h-16 w-16 text-white/40" fill="currentColor" aria-hidden="true"><path d="M5 21V7l8-4v4h6v14H5zm4-9H7v2h2v-2zm0 4H7v2h2v-2z"/></svg>
            </div>
            <div class="mt-4 inline-block rounded-lg border border-line bg-panel-2 px-3 py-1.5 text-xs">Countryside Charm - Escape to Nature's Embrace</div>
            <h3 class="mt-4 text-lg font-medium">Rustic Retreat Cottage</h3>
            <p class="mt-2 text-sm text-muted leading-relaxed">Find tranquility in the countryside. This charming cottage is nestled amidst rolling hills… <a href="#" class="text-white underline underline-offset-2">Read More</a></p>
            <div class="mt-5 flex items-center justify-between gap-4">
              <div>
                <p class="text-xs text-muted">Price</p>
                <p class="text-lg font-semibold">$350,000</p>
              </div>
              <a href="#" class="rounded-lg bg-brand px-5 py-2.5 text-sm font-medium hover:bg-brand-dark">View Property Details</a>
            </div>
          </article>
        </div>

        <div class="mt-8 flex items-center justify-between">
          <p class="text-sm text-muted"><span class="text-white">01</span> of 10</p>
          <div class="flex gap-2">
            <button aria-label="Previous" class="grid place-items-center h-10 w-10 rounded-full border border-line hover:bg-panel">←</button>
            <button aria-label="Next" class="grid place-items-center h-10 w-10 rounded-full border border-line hover:bg-panel">→</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Let's Make it Happen (Form) -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-16">
        <div class="text-brand mb-3" aria-hidden="true">✦ ✦</div>
        <h2 class="text-3xl font-semibold">Let's Make it Happen</h2>
        <p class="mt-3 max-w-3xl text-muted leading-relaxed">Ready to take the first step toward your dream property? Fill out the form below, and our real estate wizards will work their magic to find your perfect match. Don't wait; let's embark on this exciting journey together.</p>

        <form class="mt-10 rounded-2xl border border-line bg-panel p-6 md:p-8" onsubmit="return false;">
          <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div>
              <label for="first" class="block text-sm mb-2">First Name</label>
              <input id="first" type="text" placeholder="Enter First Name" class="w-full rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm outline-none placeholder:text-muted focus:border-brand" />
            </div>
            <div>
              <label for="last" class="block text-sm mb-2">Last Name</label>
              <input id="last" type="text" placeholder="Enter Last Name" class="w-full rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm outline-none placeholder:text-muted focus:border-brand" />
            </div>
            <div>
              <label for="email" class="block text-sm mb-2">Email</label>
              <input id="email" type="email" placeholder="Enter your Email" class="w-full rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm outline-none placeholder:text-muted focus:border-brand" />
            </div>
            <div>
              <label for="phone" class="block text-sm mb-2">Phone</label>
              <input id="phone" type="tel" placeholder="Enter Phone Number" class="w-full rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm outline-none placeholder:text-muted focus:border-brand" />
            </div>
          </div>

          <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div>
              <label for="ploc" class="block text-sm mb-2">Preferred Location</label>
              <select id="ploc" class="w-full appearance-none rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm text-muted outline-none focus:border-brand">
                <option>Select Location</option>
              </select>
            </div>
            <div>
              <label for="ptype" class="block text-sm mb-2">Property Type</label>
              <select id="ptype" class="w-full appearance-none rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm text-muted outline-none focus:border-brand">
                <option>Select Property Type</option>
              </select>
            </div>
            <div>
              <label for="bath" class="block text-sm mb-2">No. of Bathrooms</label>
              <select id="bath" class="w-full appearance-none rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm text-muted outline-none focus:border-brand">
                <option>Select no. of Bedrooms</option>
              </select>
            </div>
            <div>
              <label for="bed" class="block text-sm mb-2">No. of Bedrooms</label>
              <select id="bed" class="w-full appearance-none rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm text-muted outline-none focus:border-brand">
                <option>Select no. of Bedrooms</option>
              </select>
            </div>
          </div>

          <div class="mt-6 grid md:grid-cols-2 gap-6">
            <div>
              <label for="budget" class="block text-sm mb-2">Budget</label>
              <select id="budget" class="w-full appearance-none rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm text-muted outline-none focus:border-brand">
                <option>Select Budget</option>
              </select>
            </div>
            <div>
              <span class="block text-sm mb-2">Preferred Contact Method</span>
              <div class="grid grid-cols-2 gap-4">
                <label class="flex items-center justify-between gap-2 rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm text-muted cursor-pointer">
                  <span class="flex items-center gap-2"><span aria-hidden="true" class="text-brand">✆</span> Enter Your Number</span>
                  <input type="radio" name="contact" class="accent-brand" />
                </label>
                <label class="flex items-center justify-between gap-2 rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm text-muted cursor-pointer">
                  <span class="flex items-center gap-2"><span aria-hidden="true" class="text-brand">✉</span> Enter Your Email</span>
                  <input type="radio" name="contact" class="accent-brand" />
                </label>
              </div>
            </div>
          </div>

          <div class="mt-6">
            <label for="message" class="block text-sm mb-2">Message</label>
            <textarea id="message" rows="4" placeholder="Enter your Message here.." class="w-full rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm outline-none placeholder:text-muted focus:border-brand"></textarea>
          </div>

          <div class="mt-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <label class="flex items-center gap-2 text-sm text-muted">
              <input type="checkbox" class="accent-brand h-4 w-4" />
              I agree with <a href="#" class="text-white underline underline-offset-2">Terms of Use</a> and <a href="#" class="text-white underline underline-offset-2">Privacy Policy</a>
            </label>
            <button class="rounded-lg bg-brand px-6 py-3 text-sm font-medium hover:bg-brand-dark">Send Your Message</button>
          </div>
        </form>
      </div>
    </section>

    <!-- CTA -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-16 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
        <div class="max-w-3xl">
          <h2 class="text-3xl font-semibold">Start Your Real Estate Journey Today</h2>
          <p class="mt-4 text-muted leading-relaxed">Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice, Estatein is here to assist you every step of the way. Take the first step towards your real estate goals and explore our available properties or get in touch with our team for personalized assistance.</p>
        </div>
        <a href="#" class="shrink-0 rounded-lg bg-brand px-6 py-3 text-sm font-medium hover:bg-brand-dark">Explore Properties</a>
      </div>
    </section>
  </main>

<?php get_footer(); ?>