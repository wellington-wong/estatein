<?php get_header(); ?>

  <main>
    <!-- Hero -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-16">
        <h1 class="text-3xl md:text-4xl font-semibold">Get in Touch with Estatein</h1>
        <p class="mt-4 max-w-3xl text-muted leading-relaxed">Welcome to Estatein's Contact Us page. We're here to assist you with any inquiries, requests, or feedback you may have. Whether you're looking to buy or sell a property, explore investment opportunities, or simply want to connect, we're just a message away. Reach out to us, and let's start a conversation.</p>
      </div>
    </section>

    <!-- Contact info cards -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-10 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <article class="relative rounded-2xl border border-line bg-panel p-6 text-center">
          <a href="mailto:info@estatein.com" aria-label="Email us" class="absolute top-4 right-4 text-muted hover:text-white">↗</a>
          <div class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-brand/20 text-brand text-lg" aria-hidden="true">✉</div>
          <p class="mt-6 text-sm">info@estatein.com</p>
        </article>
        <article class="relative rounded-2xl border border-line bg-panel p-6 text-center">
          <a href="tel:+11234567890" aria-label="Call us" class="absolute top-4 right-4 text-muted hover:text-white">↗</a>
          <div class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-brand/20 text-brand text-lg" aria-hidden="true">✆</div>
          <p class="mt-6 text-sm">+1 (123) 456-7890</p>
        </article>
        <article class="relative rounded-2xl border border-line bg-panel p-6 text-center">
          <a href="#" aria-label="View headquarters" class="absolute top-4 right-4 text-muted hover:text-white">↗</a>
          <div class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-brand/20 text-brand text-lg" aria-hidden="true">◎</div>
          <p class="mt-6 text-sm">Main Headquarters</p>
        </article>
        <article class="relative rounded-2xl border border-line bg-panel p-6 text-center">
          <a href="#" aria-label="Social media" class="absolute top-4 right-4 text-muted hover:text-white">↗</a>
          <div class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-brand/20 text-brand" aria-hidden="true">
            <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor"><path d="M6 3c0 6 3 9 6 9-3 0-6 3-6 9V3zM18 3c0 6-3 9-6 9 3 0 6 3 6 9V3z"/></svg>
          </div>
          <p class="mt-6 text-sm">Instagram &nbsp; LinkedIn &nbsp; Facebook</p>
        </article>
      </div>
    </section>

    <!-- Let's Connect (form) -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-16">
        <div class="text-brand mb-3" aria-hidden="true">✦ ✦</div>
        <h2 class="text-3xl font-semibold">Let's Connect</h2>
        <p class="mt-3 max-w-4xl text-muted leading-relaxed">We're excited to connect with you and learn more about your real estate goals. Use the form below to get in touch with Estatein. Whether you're a prospective client, partner, or simply curious about our services, we're here to answer your questions and provide the assistance you need.</p>

        <form class="mt-10 rounded-2xl border border-line bg-panel p-6 md:p-8" onsubmit="return false;">
          <div class="grid md:grid-cols-3 gap-6">
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
          </div>

          <div class="mt-6 grid md:grid-cols-3 gap-6">
            <div>
              <label for="phone" class="block text-sm mb-2">Phone</label>
              <input id="phone" type="tel" placeholder="Enter Phone Number" class="w-full rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm outline-none placeholder:text-muted focus:border-brand" />
            </div>
            <div>
              <label for="inquiry" class="block text-sm mb-2">Inquiry Type</label>
              <select id="inquiry" class="w-full appearance-none rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm text-muted outline-none focus:border-brand">
                <option>Select Inquiry Type</option>
              </select>
            </div>
            <div>
              <label for="hear" class="block text-sm mb-2">How Did You Hear About Us?</label>
              <select id="hear" class="w-full appearance-none rounded-lg border border-line bg-panel-2 px-4 py-3 text-sm text-muted outline-none focus:border-brand">
                <option>Select</option>
              </select>
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

    <!-- Office Locations -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-16">
        <div class="text-brand mb-3" aria-hidden="true">✦ ✦</div>
        <h2 class="text-3xl font-semibold">Discover Our Office Locations</h2>
        <p class="mt-3 max-w-4xl text-muted leading-relaxed">Estatein is here to serve you across multiple locations. Whether you're looking to meet our team, discuss real estate opportunities, or simply drop by for a chat, we have offices conveniently located to serve your needs. Explore the categories below to find the Estatein office nearest to you</p>

        <!-- Tabs -->
        <div class="mt-8 inline-flex items-center gap-2 rounded-xl border border-line bg-panel p-1.5">
          <button class="rounded-lg bg-panel-2 px-5 py-2 text-sm">All</button>
          <button class="rounded-lg px-5 py-2 text-sm text-muted hover:text-white">Regional</button>
          <button class="rounded-lg px-5 py-2 text-sm text-muted hover:text-white">International</button>
        </div>

        <!-- Office cards -->
        <div class="mt-8 grid md:grid-cols-2 gap-6">
          <article class="rounded-2xl border border-line bg-panel p-6">
            <p class="text-sm text-muted">Main Headquarters</p>
            <h3 class="mt-2 text-xl font-semibold">123 Estatein Plaza, City Center, Metropolis</h3>
            <p class="mt-3 text-sm text-muted leading-relaxed">Our main headquarters serve as the heart of Estatein. Located in the bustling city center, this is where our core team of experts operates, driving the excellence and innovation that define us.</p>
            <div class="mt-5 flex flex-wrap gap-3 text-sm">
              <span class="flex items-center gap-2 rounded-lg border border-line bg-panel-2 px-3 py-2"><span aria-hidden="true" class="text-brand">✉</span> info@estatein.com</span>
              <span class="flex items-center gap-2 rounded-lg border border-line bg-panel-2 px-3 py-2"><span aria-hidden="true" class="text-brand">✆</span> +1 (123) 456-7890</span>
              <span class="flex items-center gap-2 rounded-lg border border-line bg-panel-2 px-3 py-2"><span aria-hidden="true" class="text-brand">◎</span> Metropolis</span>
            </div>
            <a href="#" class="mt-5 block text-center rounded-lg bg-brand px-4 py-3 text-sm font-medium hover:bg-brand-dark">Get Direction</a>
          </article>
          <article class="rounded-2xl border border-line bg-panel p-6">
            <p class="text-sm text-muted">Regional Offices</p>
            <h3 class="mt-2 text-xl font-semibold">456 Urban Avenue, Downtown District, Metropolis</h3>
            <p class="mt-3 text-sm text-muted leading-relaxed">Estatein's presence extends to multiple regions, each with its own dynamic real estate landscape. Discover our regional offices, staffed by local experts who understand the nuances of their respective markets.</p>
            <div class="mt-5 flex flex-wrap gap-3 text-sm">
              <span class="flex items-center gap-2 rounded-lg border border-line bg-panel-2 px-3 py-2"><span aria-hidden="true" class="text-brand">✉</span> info@restatein.com</span>
              <span class="flex items-center gap-2 rounded-lg border border-line bg-panel-2 px-3 py-2"><span aria-hidden="true" class="text-brand">✆</span> +1 (123) 628-7890</span>
              <span class="flex items-center gap-2 rounded-lg border border-line bg-panel-2 px-3 py-2"><span aria-hidden="true" class="text-brand">◎</span> Metropolis</span>
            </div>
            <a href="#" class="mt-5 block text-center rounded-lg bg-brand px-4 py-3 text-sm font-medium hover:bg-brand-dark">Get Direction</a>
          </article>
        </div>
      </div>
    </section>

    <!-- Explore Estatein's World (gallery) -->
    <section class="border-b border-line">
      <div class="mx-auto max-w-7xl px-4 py-16">
        <div class="grid md:grid-cols-2 gap-4">
          <div class="aspect-[16/9] rounded-xl overflow-hidden border border-line bg-gradient-to-br from-panel-2 to-ink grid place-items-center">
            <svg viewBox="0 0 24 24" class="h-12 w-12 text-white/30" fill="currentColor" aria-hidden="true"><path d="M4 5h16v14H4z" opacity=".3"/><path d="M4 5h16v14H4V5zm2 12 3-4 2 2 3-4 3 6H6z"/></svg>
          </div>
          <div class="aspect-[16/9] rounded-xl overflow-hidden border border-line bg-gradient-to-br from-sky-500/20 to-ink grid place-items-center">
            <svg viewBox="0 0 24 24" class="h-12 w-12 text-white/30" fill="currentColor" aria-hidden="true"><path d="M12 12a4 4 0 100-8 4 4 0 000 8zm-8 8a8 8 0 0116 0H4z"/></svg>
          </div>
        </div>

        <div class="mt-4 grid md:grid-cols-2 gap-4">
          <div class="aspect-[16/9] rounded-xl overflow-hidden border border-line bg-gradient-to-br from-emerald-500/20 to-ink grid place-items-center">
            <svg viewBox="0 0 24 24" class="h-12 w-12 text-white/30" fill="currentColor" aria-hidden="true"><path d="M3 21V5h18v16H3zm2-2h14V7H5v12z"/></svg>
          </div>
          <div class="grid grid-cols-2 gap-4">
            <div class="aspect-square rounded-xl overflow-hidden border border-line bg-gradient-to-br from-brand/20 to-ink grid place-items-center">
              <svg viewBox="0 0 24 24" class="h-10 w-10 text-white/30" fill="currentColor" aria-hidden="true"><path d="M12 12a4 4 0 100-8 4 4 0 000 8zm-8 8a8 8 0 0116 0H4z"/></svg>
            </div>
            <div class="aspect-square rounded-xl overflow-hidden border border-line bg-gradient-to-br from-sky-500/20 to-ink grid place-items-center">
              <svg viewBox="0 0 24 24" class="h-10 w-10 text-white/30" fill="currentColor" aria-hidden="true"><path d="M12 12a4 4 0 100-8 4 4 0 000 8zm-8 8a8 8 0 0116 0H4z"/></svg>
            </div>
          </div>
        </div>

        <div class="mt-4 grid md:grid-cols-2 gap-6 items-center">
          <div>
            <div class="text-brand mb-3" aria-hidden="true">✦ ✦</div>
            <h2 class="text-3xl font-semibold">Explore Estatein's World</h2>
            <p class="mt-4 text-sm text-muted leading-relaxed">Step inside the world of Estatein, where professionalism meets warmth, and expertise meets passion. Our gallery offers a glimpse into our team and workspaces, inviting you to get to know us better.</p>
          </div>
          <div class="aspect-[16/9] rounded-xl overflow-hidden border border-line bg-gradient-to-br from-amber-500/20 to-ink grid place-items-center">
            <svg viewBox="0 0 24 24" class="h-12 w-12 text-white/30" fill="currentColor" aria-hidden="true"><path d="M12 12a4 4 0 100-8 4 4 0 000 8zm-8 8a8 8 0 0116 0H4z"/></svg>
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