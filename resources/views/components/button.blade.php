<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-teal-800 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline']) }}>
    {{ $slot }}
</button>
