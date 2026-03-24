@extends('layouts.app')

@section('page-header')
@include('partials.page-header')
@endsection

@section('content')
<main class="relative min-h-screen flex flex-col justify-center overflow-hidden">
    <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-24">
        <div class="flex flex-col justify-center divide-y divide-slate-200 shadow-2xl">
            <div class="w-full max-w-3xl mx-auto" style="padding-top: 3rem;padding-bottom: 4rem">
                @while(have_posts()) @php(the_post())
                @includeFirst(['partials.content-page', 'partials.content'])
                @endwhile
            </div>
        </div>
    </div>
</main>
@endsection