<div class="container mx-auto p-4 py-10">
    @php(the_content())
</div>

@if ($pagination)
<nav class="page-nav" aria-label="Page">
    {!! $pagination !!}
</nav>
@endif