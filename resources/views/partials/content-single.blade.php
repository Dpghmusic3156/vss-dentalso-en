@include('partials.page-header')
<article class="single-post container shadow-xl bg-white p-16 relative contents lg:block" style="margin-top: -100px">
  <div class="e-content">
    @php(the_content())
  </div>
  @if ($pagination)
  <footer>
    <nav class="page-nav" aria-label="Page">
      {!! $pagination !!}
    </nav>
  </footer>
  @endif
</article>