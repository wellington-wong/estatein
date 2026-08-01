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
  </main>

<?php get_footer(); ?>