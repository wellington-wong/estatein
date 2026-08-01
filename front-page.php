<?php get_header(); ?>

  <main>
    <!-- Hero -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl grid lg:grid-cols-2 gap-10 px-4 py-16 items-center">
        <div>
          <h1 class="text-4xl md:text-5xl font-semibold leading-tight text-balance">Discover Your Dream Property with Estatein</h1>
          <p class="mt-6 text-muted max-w-md leading-relaxed">Your journey to finding the perfect property begins here. Explore our listings to find the home that matches your dreams.</p>
          <div class="mt-8 flex flex-wrap gap-4">
            <a href="<?php echo esc_url( get_permalink( 20 ) ); ?>" class="rounded-lg border border-line bg-panel px-6 py-3 text-sm font-medium hover:bg-panel-2">Learn More</a>
            <a href="<?php echo esc_url( home_url('/properties') ); ?>" class="rounded-lg bg-brand px-6 py-3 text-sm font-medium hover:bg-brand-dark">Browse Properties</a>
          </div>
          <dl class="mt-10 grid grid-cols-3 gap-4 max-w-lg">
            <div class="rounded-xl border border-line bg-panel p-5">
              <dt class="text-2xl font-semibold">200+</dt>
              <dd class="mt-1 text-sm text-muted">Happy Customers</dd>
            </div>
            <div class="rounded-xl border border-line bg-panel p-5">
              <dt class="text-2xl font-semibold">10k+</dt>
              <dd class="mt-1 text-sm text-muted">Properties For Clients</dd>
            </div>
            <div class="rounded-xl border border-line bg-panel p-5">
              <dt class="text-2xl font-semibold">16+</dt>
              <dd class="mt-1 text-sm text-muted">Years of Experience</dd>
            </div>
          </dl>
        </div>
        <div class="relative">
          <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Home%20Page%20-%20Desktop-48QNiEGcbXcZ6XjJCgbwi6qlSekjsx.png"
               alt="Modern blue glass skyscrapers representing Estatein properties"
               class="hidden" />
          <div class="aspect-[4/3] rounded-2xl overflow-hidden border border-line bg-gradient-to-br from-brand/30 via-panel to-ink grid place-items-center">
            <svg viewBox="0 0 24 24" class="h-24 w-24 text-brand/70" fill="currentColor" aria-hidden="true"><path d="M3 21V9l7-4 7 4v12h-4v-6h-6v6H3z"/></svg>
          </div>
        </div>
      </div>
    </section>

    <!-- Feature bar -->
    <section id="services" class="border-b border-line bg-panel">
      <div class="mx-auto max-w-7xl grid sm:grid-cols-2 lg:grid-cols-4 divide-y sm:divide-y-0 sm:divide-x divide-line">
        <article class="p-8 relative">
          <a href="#" aria-label="Find Your Dream Home" class="absolute top-6 right-6 text-muted hover:text-white">↗</a>
          <div class="grid place-items-center h-12 w-12 rounded-full border border-line bg-panel-2 text-brand text-xl">🏠</div>
          <h3 class="mt-6 text-sm font-medium">Find Your Dream Home</h3>
        </article>
        <article class="p-8 relative">
          <a href="#" aria-label="Unlock Property Value" class="absolute top-6 right-6 text-muted hover:text-white">↗</a>
          <div class="grid place-items-center h-12 w-12 rounded-full border border-line bg-panel-2 text-brand text-xl">💳</div>
          <h3 class="mt-6 text-sm font-medium">Unlock Property Value</h3>
        </article>
        <article class="p-8 relative">
          <a href="#" aria-label="Effortless Property Management" class="absolute top-6 right-6 text-muted hover:text-white">↗</a>
          <div class="grid place-items-center h-12 w-12 rounded-full border border-line bg-panel-2 text-brand text-xl">🏢</div>
          <h3 class="mt-6 text-sm font-medium">Effortless Property Management</h3>
        </article>
        <article class="p-8 relative">
          <a href="#" aria-label="Smart Investments, Informed Decisions" class="absolute top-6 right-6 text-muted hover:text-white">↗</a>
          <div class="grid place-items-center h-12 w-12 rounded-full border border-line bg-panel-2 text-brand text-xl">☀</div>
          <h3 class="mt-6 text-sm font-medium">Smart Investments, Informed Decisions</h3>
        </article>
      </div>
    </section>

    <!-- Featured Properties -->
    <section id="properties" class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-16">
        <div class="flex items-start justify-between gap-6">
          <div class="max-w-2xl">
            <div class="text-brand mb-3" aria-hidden="true">✦ ✦</div>
            <h2 class="text-3xl font-semibold">Featured Properties</h2>
            <p class="mt-3 text-muted leading-relaxed">Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and investments available through Estatein. Click "View Details" for more information.</p>
          </div>
          <a href="#" class="shrink-0 rounded-lg border border-line bg-panel px-5 py-2.5 text-sm hover:bg-panel-2">View All Properties</a>
        </div>

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Card -->
          <article class="rounded-2xl border border-line bg-panel p-4">
            <div class="aspect-[4/3] rounded-xl overflow-hidden border border-line bg-gradient-to-br from-sky-500/30 to-panel grid place-items-center">
              <svg viewBox="0 0 24 24" class="h-16 w-16 text-white/40" fill="currentColor" aria-hidden="true"><path d="M3 21V9l7-4 7 4v12h-4v-6h-6v6H3z"/></svg>
            </div>
            <h3 class="mt-5 text-lg font-medium">Seaside Serenity Villa</h3>
            <p class="mt-2 text-sm text-muted leading-relaxed">A stunning 4-bedroom, 3-bathroom villa in a peaceful suburban neighborhood… <a href="#" class="text-white underline underline-offset-2">Read More</a></p>
            <ul class="mt-4 flex flex-wrap gap-2 text-xs">
              <li class="rounded-md border border-line bg-panel-2 px-3 py-1.5">🛏 4-Bedroom</li>
              <li class="rounded-md border border-line bg-panel-2 px-3 py-1.5">🛁 3-Bathroom</li>
              <li class="rounded-md border border-line bg-panel-2 px-3 py-1.5">🏠 Villa</li>
            </ul>
            <div class="mt-5 flex items-center justify-between gap-4">
              <div>
                <p class="text-xs text-muted">Price</p>
                <p class="text-lg font-semibold">$550,000</p>
              </div>
              <a href="<?php echo esc_url( get_permalink( 45 ) ); ?>" class="rounded-lg bg-brand px-5 py-2.5 text-sm font-medium hover:bg-brand-dark">View Property Details</a>
            </div>
          </article>

          <article class="rounded-2xl border border-line bg-panel p-4">
            <div class="aspect-[4/3] rounded-xl overflow-hidden border border-line bg-gradient-to-br from-emerald-500/30 to-panel grid place-items-center">
              <svg viewBox="0 0 24 24" class="h-16 w-16 text-white/40" fill="currentColor" aria-hidden="true"><path d="M4 21V4h6v4h10v13H4zm8-9h4v2h-4v-2z"/></svg>
            </div>
            <h3 class="mt-5 text-lg font-medium">Metropolitan Haven</h3>
            <p class="mt-2 text-sm text-muted leading-relaxed">A chic and fully-furnished 2-bedroom apartment with panoramic city views… <a href="#" class="text-white underline underline-offset-2">Read More</a></p>
            <ul class="mt-4 flex flex-wrap gap-2 text-xs">
              <li class="rounded-md border border-line bg-panel-2 px-3 py-1.5">🛏 2-Bedroom</li>
              <li class="rounded-md border border-line bg-panel-2 px-3 py-1.5">🛁 2-Bathroom</li>
              <li class="rounded-md border border-line bg-panel-2 px-3 py-1.5">🏠 Villa</li>
            </ul>
            <div class="mt-5 flex items-center justify-between gap-4">
              <div>
                <p class="text-xs text-muted">Price</p>
                <p class="text-lg font-semibold">$550,000</p>
              </div>
              <a href="#" class="rounded-lg bg-brand px-5 py-2.5 text-sm font-medium hover:bg-brand-dark">View Property Details</a>
            </div>
          </article>

          <article class="rounded-2xl border border-line bg-panel p-4">
            <div class="aspect-[4/3] rounded-xl overflow-hidden border border-line bg-gradient-to-br from-brand/40 to-panel grid place-items-center">
              <svg viewBox="0 0 24 24" class="h-16 w-16 text-white/40" fill="currentColor" aria-hidden="true"><path d="M5 21V7l8-4v4h6v14H5zm4-9H7v2h2v-2zm0 4H7v2h2v-2z"/></svg>
            </div>
            <h3 class="mt-5 text-lg font-medium">Rustic Retreat Cottage</h3>
            <p class="mt-2 text-sm text-muted leading-relaxed">An elegant 3-bedroom, 2.5-bathroom townhouse in a gated community… <a href="#" class="text-white underline underline-offset-2">Read More</a></p>
            <ul class="mt-4 flex flex-wrap gap-2 text-xs">
              <li class="rounded-md border border-line bg-panel-2 px-3 py-1.5">🛏 3-Bedroom</li>
              <li class="rounded-md border border-line bg-panel-2 px-3 py-1.5">🛁 3-Bathroom</li>
              <li class="rounded-md border border-line bg-panel-2 px-3 py-1.5">🏠 Villa</li>
            </ul>
            <div class="mt-5 flex items-center justify-between gap-4">
              <div>
                <p class="text-xs text-muted">Price</p>
                <p class="text-lg font-semibold">$550,000</p>
              </div>
              <a href="#" class="rounded-lg bg-brand px-5 py-2.5 text-sm font-medium hover:bg-brand-dark">View Property Details</a>
            </div>
          </article>
        </div>

        <div class="mt-8 flex items-center justify-between">
          <p class="text-sm text-muted"><span class="text-white">01</span> of 60</p>
          <div class="flex gap-2">
            <button aria-label="Previous" class="grid place-items-center h-10 w-10 rounded-full border border-line hover:bg-panel">←</button>
            <button aria-label="Next" class="grid place-items-center h-10 w-10 rounded-full border border-line hover:bg-panel">→</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-16">
        <div class="flex items-start justify-between gap-6">
          <div class="max-w-2xl">
            <div class="text-brand mb-3" aria-hidden="true">✦ ✦</div>
            <h2 class="text-3xl font-semibold">What Our Clients Say</h2>
            <p class="mt-3 text-muted leading-relaxed">Read the success stories and heartfelt testimonials from our valued clients. Discover why they chose Estatein for their real estate needs.</p>
          </div>
          <a href="#" class="shrink-0 rounded-lg border border-line bg-panel px-5 py-2.5 text-sm hover:bg-panel-2">View All Testimonials</a>
        </div>

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          <figure class="rounded-2xl border border-line bg-panel p-6">
            <div class="text-yellow-400" aria-label="5 out of 5 stars">★★★★★</div>
            <h3 class="mt-4 font-medium">Exceptional Service!</h3>
            <blockquote class="mt-3 text-sm text-muted leading-relaxed">Our experience with Estatein was outstanding. Their team's dedication and professionalism made finding our dream home a breeze. Highly recommended!</blockquote>
            <figcaption class="mt-5 flex items-center gap-3">
              <span class="h-10 w-10 rounded-full bg-panel-2 border border-line grid place-items-center text-sm">WW</span>
              <span>
                <span class="block text-sm font-medium">Wade Warren</span>
                <span class="block text-xs text-muted">USA, California</span>
              </span>
            </figcaption>
          </figure>

          <figure class="rounded-2xl border border-line bg-panel p-6">
            <div class="text-yellow-400" aria-label="5 out of 5 stars">★★★★★</div>
            <h3 class="mt-4 font-medium">Efficient and Reliable</h3>
            <blockquote class="mt-3 text-sm text-muted leading-relaxed">Estatein provided us with top-notch service. They helped us sell our property quickly and at a great price. We couldn't be happier with the results.</blockquote>
            <figcaption class="mt-5 flex items-center gap-3">
              <span class="h-10 w-10 rounded-full bg-panel-2 border border-line grid place-items-center text-sm">ET</span>
              <span>
                <span class="block text-sm font-medium">Emelie Thomson</span>
                <span class="block text-xs text-muted">USA, Florida</span>
              </span>
            </figcaption>
          </figure>

          <figure class="rounded-2xl border border-line bg-panel p-6">
            <div class="text-yellow-400" aria-label="5 out of 5 stars">★★★★★</div>
            <h3 class="mt-4 font-medium">Trusted Advisors</h3>
            <blockquote class="mt-3 text-sm text-muted leading-relaxed">The Estatein team guided us through the entire buying process. Their knowledge and commitment to our needs were impressive. Thank you for your support!</blockquote>
            <figcaption class="mt-5 flex items-center gap-3">
              <span class="h-10 w-10 rounded-full bg-panel-2 border border-line grid place-items-center text-sm">JM</span>
              <span>
                <span class="block text-sm font-medium">John Mans</span>
                <span class="block text-xs text-muted">USA, Nevada</span>
              </span>
            </figcaption>
          </figure>
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

    <!-- FAQ -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-16">
        <div class="flex items-start justify-between gap-6">
          <div class="max-w-2xl">
            <div class="text-brand mb-3" aria-hidden="true">✦ ✦</div>
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
    <section id="contact" class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-16 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
        <div class="max-w-3xl">
          <h2 class="text-3xl font-semibold">Start Your Real Estate Journey Today</h2>
          <p class="mt-4 text-muted leading-relaxed">Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice, Estatein is here to assist you every step of the way. Take the first step towards your real estate goals and explore our available properties or get in touch with our team for personalized assistance.</p>
        </div>
        <a href="/properties" class="shrink-0 rounded-lg bg-brand px-6 py-3 text-sm font-medium hover:bg-brand-dark">Explore Properties</a>
      </div>
    </section>
  </main>

<?php get_footer(); ?>