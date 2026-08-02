<?php get_header(); ?>

  <main>
    <!-- Title bar -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-10 flex flex-col sm:flex-row items-start sm:items-end justify-between gap-4">
        <div>
          <h1 class="text-2xl md:text-3xl font-semibold">Seaside Serenity Villa</h1>
          <p class="mt-2 flex items-center gap-2 text-sm text-muted">
            <span aria-hidden="true" class="text-brand">◎</span> Malibu, California
          </p>
        </div>
        <div class="text-right">
          <p class="text-sm text-muted">Price</p>
          <p class="text-2xl font-semibold">$1,250,000</p>
        </div>
      </div>
    </section>

    <!-- Gallery -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="rounded-2xl border border-line bg-panel p-4">
          <!-- Thumbnails -->
          <div class="grid grid-cols-4 sm:grid-cols-8 gap-3">
            <div class="aspect-[4/3] rounded-lg overflow-hidden border border-brand bg-gradient-to-br from-sky-500/30 to-panel"></div>
            <div class="aspect-[4/3] rounded-lg overflow-hidden border border-line bg-gradient-to-br from-emerald-500/20 to-panel"></div>
            <div class="aspect-[4/3] rounded-lg overflow-hidden border border-line bg-gradient-to-br from-sky-500/20 to-panel"></div>
            <div class="aspect-[4/3] rounded-lg overflow-hidden border border-line bg-gradient-to-br from-brand/20 to-panel"></div>
            <div class="aspect-[4/3] rounded-lg overflow-hidden border border-line bg-gradient-to-br from-amber-500/20 to-panel"></div>
            <div class="aspect-[4/3] rounded-lg overflow-hidden border border-line bg-gradient-to-br from-sky-500/20 to-panel"></div>
            <div class="aspect-[4/3] rounded-lg overflow-hidden border border-line bg-gradient-to-br from-panel-2 to-panel"></div>
            <div class="aspect-[4/3] rounded-lg overflow-hidden border border-line bg-gradient-to-br from-emerald-500/20 to-panel"></div>
          </div>

          <!-- Large images -->
          <div class="mt-4 grid md:grid-cols-2 gap-4">
            <div class="aspect-[16/10] rounded-xl overflow-hidden border border-line bg-gradient-to-br from-sky-500/30 to-panel grid place-items-center">
              <svg viewBox="0 0 24 24" class="h-16 w-16 text-white/40" fill="currentColor" aria-hidden="true"><path d="M3 21V9l7-4 7 4v12h-4v-6h-6v6H3z"/></svg>
            </div>
            <div class="aspect-[16/10] rounded-xl overflow-hidden border border-line bg-gradient-to-br from-amber-500/20 to-panel grid place-items-center">
              <svg viewBox="0 0 24 24" class="h-16 w-16 text-white/40" fill="currentColor" aria-hidden="true"><path d="M4 21V4h6v4h10v13H4z"/></svg>
            </div>
          </div>

          <!-- Carousel controls -->
          <div class="mt-4 flex items-center justify-center gap-4">
            <button aria-label="Previous image" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-panel-2">←</button>
            <div class="flex items-center gap-2" aria-hidden="true">
              <span class="h-1.5 w-6 rounded-full bg-brand"></span>
              <span class="h-1.5 w-6 rounded-full bg-line"></span>
              <span class="h-1.5 w-6 rounded-full bg-line"></span>
              <span class="h-1.5 w-6 rounded-full bg-line"></span>
            </div>
            <button aria-label="Next image" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-panel-2">→</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Description + Features -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-12 grid lg:grid-cols-2 gap-6">
        <div class="rounded-2xl border border-line bg-panel p-6">
          <h2 class="text-lg font-medium">Description</h2>
          <p class="mt-4 text-sm text-muted leading-relaxed">Discover your own piece of paradise with the Seaside Serenity Villa. With an open floor plan, breathtaking ocean views from every room, and direct access to a pristine sandy beach, this property is the epitome of coastal living.</p>
          <dl class="mt-6 grid grid-cols-3 gap-4 border-t border-line pt-6">
            <div>
              <dt class="flex items-center gap-2 text-xs text-muted"><span aria-hidden="true" class="text-brand">🛏</span> Bedrooms</dt>
              <dd class="mt-2 text-lg font-semibold">04</dd>
            </div>
            <div>
              <dt class="flex items-center gap-2 text-xs text-muted"><span aria-hidden="true" class="text-brand">🛁</span> Bathrooms</dt>
              <dd class="mt-2 text-lg font-semibold">03</dd>
            </div>
            <div>
              <dt class="flex items-center gap-2 text-xs text-muted"><span aria-hidden="true" class="text-brand">▦</span> Area</dt>
              <dd class="mt-2 text-lg font-semibold">2,500 Square Feet</dd>
            </div>
          </dl>
        </div>

        <div class="rounded-2xl border border-line bg-panel p-6">
          <h2 class="text-lg font-medium">Key Features and Amenities</h2>
          <ul class="mt-4 space-y-3">
            <li class="flex items-center gap-3 rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm">
              <span class="grid place-items-center h-7 w-7 rounded-full bg-brand/20 text-brand shrink-0" aria-hidden="true">⚡</span>
              Expansive oceanfront terrace for outdoor entertaining
            </li>
            <li class="flex items-center gap-3 rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm">
              <span class="grid place-items-center h-7 w-7 rounded-full bg-brand/20 text-brand shrink-0" aria-hidden="true">⚡</span>
              Gourmet kitchen with top-of-the-line appliances
            </li>
            <li class="flex items-center gap-3 rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm">
              <span class="grid place-items-center h-7 w-7 rounded-full bg-brand/20 text-brand shrink-0" aria-hidden="true">⚡</span>
              Private beach access for morning strolls and sunset views
            </li>
            <li class="flex items-center gap-3 rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm">
              <span class="grid place-items-center h-7 w-7 rounded-full bg-brand/20 text-brand shrink-0" aria-hidden="true">⚡</span>
              Master suite with a spa-inspired bathroom and ocean-facing balcony
            </li>
            <li class="flex items-center gap-3 rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm">
              <span class="grid place-items-center h-7 w-7 rounded-full bg-brand/20 text-brand shrink-0" aria-hidden="true">⚡</span>
              Private garage and ample storage space
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Inquire form -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-12 grid lg:grid-cols-3 gap-8">
        <div class="lg:col-span-1">
          <div class="text-brand mb-3" aria-hidden="true">✦</div>
          <h2 class="text-2xl font-semibold text-balance">Inquire About Seaside Serenity Villa</h2>
          <p class="mt-4 text-sm text-muted leading-relaxed">Interested in this property? Fill out the form below, and our real estate experts will get back to you with more details, including scheduling a viewing and answering any questions you may have.</p>
        </div>

        <form class="lg:col-span-2 rounded-2xl border border-line bg-panel p-6 md:p-8" onsubmit="return false;">
          <div class="grid sm:grid-cols-2 gap-6">
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

          <div class="mt-6">
            <label for="selected" class="block text-sm mb-2">Selected Property</label>
            <div class="flex items-center justify-between gap-2 rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm">
              <span>Seaside Serenity Villa, Malibu, California</span>
              <span aria-hidden="true" class="text-brand">◎</span>
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

    <!-- Comprehensive Pricing Details -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-12">
        <div class="text-brand mb-3" aria-hidden="true">✦</div>
        <h2 class="text-3xl font-semibold">Comprehensive Pricing Details</h2>
        <p class="mt-3 max-w-3xl text-muted leading-relaxed">At Estatein, transparency is key. We want you to have a clear understanding of all costs associated with your property investment. Below, we break down the pricing for Seaside Serenity Villa to help you make an informed decision.</p>

        <!-- Note -->
        <div class="mt-8 flex items-start gap-4 rounded-xl border border-line bg-panel p-4">
          <span class="shrink-0 rounded-md bg-panel-2 px-3 py-1 text-sm font-medium">Note</span>
          <p class="text-sm text-muted leading-relaxed">The figures provided above are estimates and may vary depending on the property, location, and individual circumstances.</p>
        </div>

        <!-- Listing price + Additional Fees -->
        <div class="mt-8 grid lg:grid-cols-4 gap-6">
          <div class="lg:col-span-1">
            <p class="text-sm text-muted">Listing Price</p>
            <p class="mt-1 text-2xl font-semibold">$1,250,000</p>
          </div>

          <div class="lg:col-span-3 rounded-2xl border border-line bg-panel p-6">
            <div class="flex items-center justify-between">
              <h3 class="font-medium">Additional Fees</h3>
              <a href="#" class="rounded-lg border border-line bg-panel-2 px-4 py-2 text-sm hover:bg-line">Learn More</a>
            </div>
            <div class="mt-6 grid sm:grid-cols-2 gap-6">
              <div>
                <p class="text-sm text-muted">Property Transfer Tax</p>
                <p class="mt-1"><span class="text-lg font-semibold">$25,000</span> <span class="text-sm text-muted">Based on the sale price and local regulations</span></p>
              </div>
              <div>
                <p class="text-sm text-muted">Legal Fees</p>
                <p class="mt-1"><span class="text-lg font-semibold">$3,000</span> <span class="text-sm text-muted">Approximate cost for legal services, including title transfer</span></p>
              </div>
              <div>
                <p class="text-sm text-muted">Home Inspection</p>
                <p class="mt-1"><span class="text-lg font-semibold">$500</span> <span class="text-sm text-muted">Recommended for due diligence</span></p>
              </div>
              <div>
                <p class="text-sm text-muted">Property Insurance</p>
                <p class="mt-1"><span class="text-lg font-semibold">$1,200</span> <span class="text-sm text-muted">Annual cost for comprehensive property insurance</span></p>
              </div>
              <div>
                <p class="text-sm text-muted">Mortgage Fees</p>
                <p class="mt-1"><span class="text-lg font-semibold">Varies</span> <span class="text-sm text-muted">If applicable, consult with your lender for specific details</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Monthly Costs -->
        <div class="mt-6 lg:ml-[calc(25%+1.5rem)] rounded-2xl border border-line bg-panel p-6">
          <div class="flex items-center justify-between">
            <h3 class="font-medium">Monthly Costs</h3>
            <a href="#" class="rounded-lg border border-line bg-panel-2 px-4 py-2 text-sm hover:bg-line">Learn More</a>
          </div>
          <div class="mt-6 grid sm:grid-cols-2 gap-6">
            <div>
              <p class="text-sm text-muted">Property Taxes</p>
              <p class="mt-1"><span class="text-lg font-semibold">$1,250</span> <span class="text-sm text-muted">Approximate monthly property tax based on the sale price and local rates</span></p>
            </div>
            <div>
              <p class="text-sm text-muted">Homeowners' Association Fee</p>
              <p class="mt-1"><span class="text-lg font-semibold">$300</span> <span class="text-sm text-muted">Monthly fee for common area maintenance and security</span></p>
            </div>
          </div>
        </div>

        <!-- Total Initial Costs -->
        <div class="mt-6 lg:ml-[calc(25%+1.5rem)] rounded-2xl border border-line bg-panel p-6">
          <div class="flex items-center justify-between">
            <h3 class="font-medium">Total Initial Costs</h3>
            <a href="#" class="rounded-lg border border-line bg-panel-2 px-4 py-2 text-sm hover:bg-line">Learn More</a>
          </div>
          <div class="mt-6 grid sm:grid-cols-2 gap-6">
            <div>
              <p class="text-sm text-muted">Listing Price</p>
              <p class="mt-1 text-lg font-semibold">$1,250,000</p>
            </div>
            <div>
              <p class="text-sm text-muted">Additional Fees</p>
              <p class="mt-1"><span class="text-lg font-semibold">$29,700</span> <span class="text-sm text-muted">Property transfer tax, legal fees, inspection, insurance</span></p>
            </div>
            <div>
              <p class="text-sm text-muted">Down Payment</p>
              <p class="mt-1"><span class="text-lg font-semibold">$250,000</span> <span class="text-sm text-muted">20%</span></p>
            </div>
            <div>
              <p class="text-sm text-muted">Mortgage Amount</p>
              <p class="mt-1"><span class="text-lg font-semibold">$1,000,000</span> <span class="text-sm text-muted">If applicable</span></p>
            </div>
          </div>
        </div>

        <!-- Monthly Expenses -->
        <div class="mt-6 lg:ml-[calc(25%+1.5rem)] rounded-2xl border border-line bg-panel p-6">
          <div class="flex items-center justify-between">
            <h3 class="font-medium">Monthly Expenses</h3>
            <a href="#" class="rounded-lg border border-line bg-panel-2 px-4 py-2 text-sm hover:bg-line">Learn More</a>
          </div>
          <div class="mt-6 grid sm:grid-cols-2 gap-6">
            <div>
              <p class="text-sm text-muted">Property Taxes</p>
              <p class="mt-1 text-lg font-semibold">$1,250</p>
            </div>
            <div>
              <p class="text-sm text-muted">Homeowners' Association Fee</p>
              <p class="mt-1 text-lg font-semibold">$300</p>
            </div>
            <div>
              <p class="text-sm text-muted">Mortgage Payment</p>
              <p class="mt-1"><span class="text-lg font-semibold">Varies based on terms and interest rate</span> <span class="text-sm text-muted">If applicable</span></p>
            </div>
            <div>
              <p class="text-sm text-muted">Property Insurance</p>
              <p class="mt-1"><span class="text-lg font-semibold">$100</span> <span class="text-sm text-muted">Approximate monthly cost</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-12">
        <div class="flex items-start justify-between gap-6">
          <div class="max-w-2xl">
            <div class="text-brand mb-3" aria-hidden="true">✦</div>
            <h2 class="text-3xl font-semibold">Frequently Asked Questions</h2>
            <p class="mt-3 text-muted leading-relaxed">Find answers to common questions about Estatein's services, property listings, and the real estate process. We're here to provide clarity and assist you every step of the way.</p>
          </div>
          <a href="#" class="shrink-0 rounded-lg border border-line bg-panel px-5 py-2.5 text-sm hover:bg-panel-2">View All FAQ's</a>
        </div>

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          <article class="rounded-2xl border border-line bg-panel p-6">
            <h3 class="font-medium">How do I search for properties on Estatein?</h3>
            <p class="mt-3 text-sm text-muted leading-relaxed">Learn how to use our user-friendly search tools to find properties that match your criteria.</p>
            <a href="#" class="mt-5 inline-block rounded-lg border border-line bg-panel-2 px-5 py-2.5 text-sm hover:bg-line">Read More</a>
          </article>
          <article class="rounded-2xl border border-line bg-panel p-6">
            <h3 class="font-medium">What documents do I need to sell my property through Estatein?</h3>
            <p class="mt-3 text-sm text-muted leading-relaxed">Find out about the necessary documentation for listing your property with us.</p>
            <a href="#" class="mt-5 inline-block rounded-lg border border-line bg-panel-2 px-5 py-2.5 text-sm hover:bg-line">Read More</a>
          </article>
          <article class="rounded-2xl border border-line bg-panel p-6">
            <h3 class="font-medium">How can I contact an Estatein agent?</h3>
            <p class="mt-3 text-sm text-muted leading-relaxed">Discover the different ways you can get in touch with our experienced agents.</p>
            <a href="#" class="mt-5 inline-block rounded-lg border border-line bg-panel-2 px-5 py-2.5 text-sm hover:bg-line">Read More</a>
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