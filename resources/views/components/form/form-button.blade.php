<form>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif

    <button> </button>
</form>
