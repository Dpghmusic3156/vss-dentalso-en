<div class="shadow-xl rounded-xl border">
  <div class="rounded-t-xl overflow-auto">
    @php(the_post_thumbnail())
  </div>
  <header class="p-6">
    <a href="{{ get_permalink() }}" class="text-xl mb-4 block">
      {!! $title !!}
    </a>
    <div class="entry-summary text-secondary">
      @php(the_excerpt())
    </div>
  </header>
</div>