<form {{ $attributes->merge(['class' => 'max-w-md mx-auto space-y-6']) }} method="POST">
    @csrf
    @if ($attributes->has('extraMethod'))
        @method($attributes->get('extraMethod'))
    @elseif ($attributes->get('method', 'GET') !== 'GET')
        @method($attributes->get('method', 'POST'))
    @endif
    {{ $slot }}
</form>
