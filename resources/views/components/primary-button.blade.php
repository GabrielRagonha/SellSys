<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full py-2 inline-flex justify-center bg-primary-blue-700 rounded-md font-semibold text-xs text-white uppercase hover:bg-primary-blue-600 focus:bg-primary-blue-600 active:bg-primary-blue-800 focus:outline-none transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
